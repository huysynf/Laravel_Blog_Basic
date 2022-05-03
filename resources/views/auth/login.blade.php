<x-guest-layout>
    <x-jet-authentication-card>
        <x-jet-validation-errors class="mb-4"/>

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif
        <div class="card-header bg-transparent pb-4 px-lg-5">
            <h1 class="text-muted text-center font-bold">{{__("Login With")}}</h1>
            <div class="row">
<div class="flex justify-between">
                <a href="{{route('auth.social.redirect', 'linkedin')}}"
                   class="relative inline-flex items-center w-50 justify-center p-0.5 mb-2 mr-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-purple-600 to-blue-500 group-hover:from-purple-600 group-hover:to-blue-500 hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800">
                  <span
                      class="relative px-5 py-2.5 w-100 justify-center flex transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">
                        <span class="btn-inner--icon pr-4"><img src="{{asset("images/brand/linkedin.svg")}}" alt="linkedin"width="20" height="20"></span>
                        <span class="btn-inner--text">Linkedin</span>

                  </span>
                </a>
                <button
                    onclick="alert('Bắt tại trận xem phim heoooooooooooo.................');"
                   class="relative inline-flex w-50 items-center justify-center p-0.5 mb-2 mr-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-cyan-500 to-blue-500 group-hover:from-cyan-500 group-hover:to-blue-500 hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-cyan-200 dark:focus:ring-cyan-800">
                  <span
                      class="relative px-5 w-100 py-2.5 justify-center flex transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">
                        <span class="btn-inner--icon pr-4"><img src="{{asset("images/brand/ph.ico")}}" alt="ph" width="16"
                                                           height="16" class="w-auto">
                        </span>
                        <span class="btn-inner--text">P<span hidden="">a</span>or<span hidden="">b</span>nh<span
                                hidden="">c</span>ub</span>
                        </span>
                </button>
</div>
                <div class="flex justify-between">

                <a href="{{route('auth.social.redirect', 'twitter')}}"
                   class="relative inline-flex items-center w-50 justify-center p-0.5 mb-2 mr-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-green-400 to-blue-600 group-hover:from-green-400 group-hover:to-blue-600 hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-green-200 dark:focus:ring-green-800">
                  <span
                      class="relative px-5 py-2.5 flex w-100 justify-center  transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">

                            <span class="btn-inner--icon pr-4"><img src="{{asset("images/brand/twitter.svg")}}" alt="twitter"
                                                               width="20" height="20"></span>
                            <span class="btn-inner--text">Twitter</span>
                  </span>
                </a>
                <a href="{{route('auth.social.redirect', 'bitbucket')}}"
                   class="relative inline-flex w-50 items-center justify-center p-0.5 mb-2 mr-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-purple-500 to-pink-500 group-hover:from-purple-500 group-hover:to-pink-500 hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-purple-200 dark:focus:ring-purple-800">
                  <span
                      class="relative px-5 py-2.5 w-100 justify-center flex transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">

                            <span class="btn-inner--icon pr-4"><img src="{{asset("images/brand/bitbucket.svg")}}" alt="bitbucket"
                                                               width="20" height="20"></span>
                            <span class="btn-inner--text">Bitbucket</span>
                  </span>
                </a>
                </div>
                <div class="flex justify-between">

                <a href="{{route('auth.social.redirect', 'google')}}"
                   class="relative inline-flex w-50 items-center justify-center p-0.5 mb-2 mr-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-pink-500 to-orange-400 group-hover:from-pink-500 group-hover:to-orange-400 hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-pink-200 dark:focus:ring-pink-800">
                  <span
                      class="relative px-5 py-2.5 w-100 justify-center flex transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">
                        <span class="btn-inner--icon pr-4"><img src="{{asset("images/brand/google.svg")}}" alt="google"
                                                           width="20" height="20"></span>
                            <span class="btn-inner--text">Google</span>
                  </span>
                </a>
                <a href="{{route('auth.social.redirect', 'facebook')}}"
                   class="relative inline-flex w-50 items-center justify-center p-0.5 mb-2 mr-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-teal-300 to-lime-300 group-hover:from-teal-300 group-hover:to-lime-300 dark:text-white dark:hover:text-gray-900 focus:ring-4 focus:outline-none focus:ring-lime-200 dark:focus:ring-lime-800">
                  <span
                      class="relative px-5 py-2.5 w-100 justify-center flex transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">

                            <span class="btn-inner--icon pr-4"><img src="{{asset("images/brand/facebook.svg")}}" alt="facebook"
                                                               width="20" height="20"></span>
                            <span class="btn-inner--text">Facebook</span>
                  </span>
                </a>
                </div>
                <div class="flex justify-between">

                <a href="{{route('auth.social.redirect', 'github')}}"
                   class="relative inline-flex w-50 items-center justify-center p-0.5 mb-2 mr-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-red-200 via-red-300 to-yellow-200 group-hover:from-red-200 group-hover:via-red-300 group-hover:to-yellow-200 dark:text-white dark:hover:text-white focus:ring-4 focus:outline-none focus:ring-red-100 dark:focus:ring-red-400">
                  <span
                      class="relative flex justify-center px-5 w-100 py-2.5 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">
                            <span class="btn-inner--icon pr-4"><img src="{{asset("images/brand/github.svg")}}" alt="github"
                                                               width="20" height="20"></span>
                            <span class="btn-inner--text">Github</span>

                  </span>
                </a>
                    <a href="{{route('auth.social.redirect', 'gitlab')}}"
                       class="relative  inline-flex w-50 items-center justify-center p-0.5 mb-2 mr-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-purple-600 to-blue-500 group-hover:from-purple-600 group-hover:to-blue-500 hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800">
                      <span
                          class="relative flex px-5 justify-center w-100 py-2.5 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">
                           <span class="btn-inner--icon pr-4"><img src="{{asset("images/brand/gitlab.svg")}}"
                                                                   alt="gitlab" width="20" height="20"></span>
                            <span class="btn-inner--text">Gitlab</span>
                      </span>
                </a>
                </div>
            </div>
        </div>

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <div class="relative">
                    <div class="flex h-100 absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                        <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"></path><path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"></path></svg>
                    </div>
                    <input  id="email-adress-icon"
                           type="email" name="email" :value="old('email')"
                            autofocus
                           class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 py-2.5 px-5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="example@gmail.com">
                </div>
            </div>

            <div class="mt-4">

                <div class="relative">
                    <div class="flex h-100 absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                        <svg  class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path></svg>
                    </div>
                    <input  id="email-adress-icon"
                            type="password" name="password" required
                            autocomplete="current-password"
                            autofocus
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 py-2.5 px-5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" >
                </div>
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-jet-checkbox id="remember_me" name="remember"/>
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900"
                       href="{{ route('password.request') }}">
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
