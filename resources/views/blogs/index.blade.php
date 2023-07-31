
 
@extends('layouts.app')
@section('title')
{{__('messages.testimonial')}}
@endsection
@section('content')
<div class="container-fluid">
    <div class="d-flex flex-column table-striped">
        @include('layouts.errors')
        <livewire:front-testimonial-table />
    </div>
</div>
@endsection