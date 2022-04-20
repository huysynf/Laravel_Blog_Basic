<x-guest-layout>
    <x-jet-authentication-card>
        <x-jet-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif
        <div class="card-header bg-transparent pb-4 px-lg-5">
            <div class="text-muted text-center mt-2 mb-3">{{__("Login With")}}</div>
            <div class="row">
                <div class="columns-6">
                    <a href="{{route('auth.social.redirect', 'facebook')}}" class="btn btn-neutral btn-icon btn-block mb-3 flex">
                        <span class="btn-inner--icon"><img src="{{asset("images/brand/facebook.svg")}}" alt="facebook" width="20" height="20"></span>
                        <span class="btn-inner--text">Facebook</span>
                    </a>
                </div>
                <div class="">
                    <a href="{{route('auth.social.redirect', 'google')}}" class="btn btn-neutral btn-icon btn-block mb-3 flex">
                        <span class="btn-inner--icon"><img src="{{asset("images/brand/google.svg")}}" alt="google" width="20" height="20"></span>
                        <span class="btn-inner--text">Google</span>
                    </a>
                </div>
                <div class="">
                    <a href="{{route('auth.social.redirect', 'twitter')}}" class="btn btn-neutral btn-icon btn-block mb-3 flex">
                        <span class="btn-inner--icon"><img src="{{asset("images/brand/twitter.svg")}}" alt="twitter" width="20" height="20"></span>
                        <span class="btn-inner--text">Twitter</span>
                    </a>
                </div>
                <div class="col-12 col-sm-6">
                    <a href="{{route('auth.social.redirect', 'github')}}" class="btn btn-neutral btn-icon btn-block mb-3 flex">
                        <span class="btn-inner--icon"><img src="{{asset("images/brand/github.svg")}}" alt="github" width="20" height="20"></span>
                        <span class="btn-inner--text">Github</span>
                    </a>
                </div>
                <div class="col-12 col-sm-6">
                    <a href="{{route('auth.social.redirect', 'linkedin')}}" class="btn btn-neutral btn-icon btn-block mb-3 flex">
                        <span class="btn-inner--icon"><img src="{{asset("images/brand/linkedin.svg")}}" alt="linkedin" width="20" height="20"></span>
                        <span class="btn-inner--text">Linkedin</span>
                    </a>
                </div>
                <div class="col-12 col-sm-6">
                    <a href="{{route('auth.social.redirect', 'gitlab')}}" class="btn btn-neutral btn-icon btn-block mb-3 flex">
                        <span class="btn-inner--icon"><img src="{{asset("images/brand/gitlab.svg")}}" alt="gitlab" width="20" height="20"></span>
                        <span class="btn-inner--text">Gitlab</span>
                    </a>
                </div>
                <div class="col-12 col-sm-6">
                    <a href="{{route('auth.social.redirect', 'bitbucket')}}" class="btn btn-neutral btn-icon btn-block mb-3 flex">
                        <span class="btn-inner--icon"><img src="{{asset("images/brand/bitbucket.svg")}}" alt="bitbucket" width="20" height="20"></span>
                        <span class="btn-inner--text">Bitbucket</span>
                    </a>
                </div>
                <div class="col-12 col-sm-6">
                    <a href="{{route('auth.social.redirect', 'pornhub')}}" class="btn btn-neutral btn-icon btn-block mb-3 flex" id="btn-ph">
                        <span class="btn-inner--icon"><img src="{{asset("images/brand/ph.ico")}}" alt="ph" width="16" height="16" class="w-auto"></span>
                        <span class="btn-inner--text">P<span hidden="">a</span>or<span hidden="">b</span>nh<span hidden="">c</span>ub</span>
                    </a>
                </div>
            </div>
        </div>

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-jet-checkbox id="remember_me" name="remember" />
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-jet-button class="ml-4">
                    {{ __('Log in') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>
