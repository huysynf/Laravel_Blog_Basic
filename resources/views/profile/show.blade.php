@extends('admin.layouts.app')
@section('title', 'Profile')
@section('content')
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Profile') }}
        </h2>
    </x-slot>

    <div>
        <div class="">
            @if (Laravel\Fortify\Features::canUpdateProfileInformation())
                <div class="card card-frame mb-3 mt-3">
                    <div class="card-body">
                        @livewire('profile.update-profile-information-form')
                    </div>
                </div>
            @endif

            @if (Laravel\Fortify\Features::enabled(Laravel\Fortify\Features::updatePasswords()))
                <div class="card card-frame mb-3 mt-3">
                    <div class="card-body">
                        @livewire('profile.update-password-form')
                    </div>
                </div>

            @endif

            @if (Laravel\Fortify\Features::canManageTwoFactorAuthentication())
                <div class="card card-frame mb-3 mt-3">
                    <div class="card-body">
                        @livewire('profile.two-factor-authentication-form')
                    </div>
                </div>

            @endif

            <div class="card card-frame mb-3 mt-3">
                <div class="card-body">
                    @livewire('profile.logout-other-browser-sessions-form')
                </div>
            </div>
            @if (Laravel\Jetstream\Jetstream::hasAccountDeletionFeatures())

                <div class="card card-frame mb-3 mt-3">
                    <div class="card-body"> @livewire('profile.delete-user-form')
                    </div>
                </div>
            @endif
        </div>
    </div>
@endsection
