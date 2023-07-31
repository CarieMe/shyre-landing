<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreateRegisterRequest;
use App\Mail\VerifyMail;
use App\Models\AffiliateUser;
use App\Models\MultiTenant;
use App\Models\Plan;
use App\Models\Role;
use App\Models\Setting;
use App\Models\Subscription;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Auth\Events\Registered;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Password;
use Laracasts\Flash\Flash;
use Symfony\Component\HttpKernel\Exception\UnprocessableEntityHttpException;

class RegisteredUserController extends Controller
{
    /**
     * @return Application|Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  CreateRegisterRequest  $request
     * @return Application|RedirectResponse|Redirector
     */
    public function store(CreateRegisterRequest $request)
    {
        $referral_code = $request->input('referral-code');
        $referral_user = '';
        if ($referral_code) {
            $referral_user = User::where('affiliate_code', $referral_code)->first();
        }
        try {
            DB::beginTransaction();

            $tenant = MultiTenant::create(['tenant_username' => $request->first_name]);
            $userDefaultLanguage = Setting::where('key', 'user_default_language')->first()->value ?? 'en';

            $user = User::create([
                'first_name'     => $request->first_name,
                'last_name'      => $request->last_name,
                'email'          => $request->email,
                'language'       => $userDefaultLanguage,
                'password'       => Hash::make($request->password),
                'tenant_id'      => $tenant->id,
                'affiliate_code' => generateUniqueAffiliateCode(),
            ])->assignRole(Role::ROLE_ADMIN);

            $plan = Plan::whereIsDefault(true)->first();

            Subscription::create([
                'plan_id'        => $plan->id,
                'plan_amount'    => 0.00,
                'plan_frequency' => Plan::MONTHLY,
                'starts_at'      => Carbon::now(),
                'ends_at'        => Carbon::now(),
                'trial_ends_at'  => Carbon::now(),
                // 'ends_at'        => Carbon::now()->addDays($plan->trial_days),
                // 'trial_ends_at'  => Carbon::now()->addDays($plan->trial_days),
                'status'         => Subscription::ACTIVE,
                'tenant_id'      => $tenant->id,
                'no_of_vcards'   => 0,
            ]);

            if ($referral_user) {
                $affiliateUser = new AffiliateUser();
                $affiliateUser->affiliated_by = $referral_user->id;
                $affiliateUser->user_id = $user->id;
                $affiliateUser->amount = getSuperAdminSettingValue('affiliation_amount');
                $affiliateUser->save();
            }

            DB::commit();
            $token = Password::getRepository()->create($user);
            $data['url'] = getenv('APP_URL') . '/verify-email/' . $user->id . '/' . $token;
            $data['user'] = $user;
            Mail::to($user->email)->send(new VerifyMail($data));

            Flash::success(__('messages.placeholder.registered_success'));

            return redirect(route('login'));
        } catch (\Exception $e) {
            DB::rollBack();

            throw new UnprocessableEntityHttpException($e->getMessage());
        }
    }
}
