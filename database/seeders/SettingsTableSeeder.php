<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Seeder;

class SettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $appLogoUrl = ('/assets/img/front/logo.png.png');
        $faviconUrl = ('/assets/img/front/logo.png.png');

        Setting::create(['key' => 'app_name', 'value' => 'Tappo']);
        Setting::create(['key' => 'app_logo', 'value' => $appLogoUrl]);
        Setting::create(['key' => 'favicon', 'value' => $faviconUrl]);
        Setting::create(['key' => 'email', 'value' => 'admin@tappo.ae']);
        Setting::create(['key' => 'phone', 'value' => '123456789']);
        Setting::create(['key' => 'address',
            'value' => 'Dubai, United Arab Emirates.',
        ]);
        Setting::create(['key' => 'prefix_code', 'value' => '91']);
        Setting::create(['key' => 'plan_expire_notification', 'value' => '5']);
    }
}
