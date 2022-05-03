<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="theme-color" content="#000000" />
    <link rel="shortcut icon" href="{{asset('assets/img/favicon.ico')}}" />
    <link
        rel="apple-touch-icon"
        sizes="76x76"
        href="{{asset('assets/img/apple-icon.png')}}"
    />
    <title>{{ config('app.name', 'Laravel') }}</title>
    @include('admin.layouts.style')
    @yield('style')
</head>
<body class="text-blueGray-700 antialiased">
<noscript>You need to enable JavaScript to run this app.</noscript>
<div id="root">
    @include('admin.layouts.sidebar')
    <div class="relative md:ml-64 bg-blueGray-50">
    @include('admin.layouts.navbar')

    <!-- Header -->
        <div class="relative bg-pink-600 md:pt-32 pb-32 pt-12">
            <div class="px-4 md:px-10 mx-auto w-full">
                <div>
                    <!-- Card stats -->
                    <div class="flex flex-wrap">
                        <div class="w-full lg:w-6/12 xl:w-3/12 px-4">
                            <div
                                class="relative flex flex-col min-w-0 break-words bg-white rounded mb-6 xl:mb-0 shadow-lg"
                            >
                                <div class="flex-auto p-4">
                                    <div class="flex flex-wrap">
                                        <div
                                            class="relative w-full pr-4 max-w-full flex-grow flex-1"
                                        >
                                            <h5
                                                class="text-blueGray-400 uppercase font-bold text-xs"
                                            >
                                                Traffic
                                            </h5>
                                            <span class="font-semibold text-xl text-blueGray-700">
                            350,897
                          </span>
                                        </div>
                                        <div class="relative w-auto pl-4 flex-initial">
                                            <div
                                                class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 shadow-lg rounded-full bg-red-500"
                                            >
                                                <i class="far fa-chart-bar"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="text-sm text-blueGray-400 mt-4">
                        <span class="text-emerald-500 mr-2">
                          <i class="fas fa-arrow-up"></i> 3.48%
                        </span>
                                        <span class="whitespace-nowrap">
                          Since last month
                        </span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="w-full lg:w-6/12 xl:w-3/12 px-4">
                            <div
                                class="relative flex flex-col min-w-0 break-words bg-white rounded mb-6 xl:mb-0 shadow-lg"
                            >
                                <div class="flex-auto p-4">
                                    <div class="flex flex-wrap">
                                        <div
                                            class="relative w-full pr-4 max-w-full flex-grow flex-1"
                                        >
                                            <h5
                                                class="text-blueGray-400 uppercase font-bold text-xs"
                                            >
                                                New users
                                            </h5>
                                            <span class="font-semibold text-xl text-blueGray-700">
                            2,356
                          </span>
                                        </div>
                                        <div class="relative w-auto pl-4 flex-initial">
                                            <div
                                                class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 shadow-lg rounded-full bg-orange-500"
                                            >
                                                <i class="fas fa-chart-pie"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="text-sm text-blueGray-400 mt-4">
                        <span class="text-red-500 mr-2">
                          <i class="fas fa-arrow-down"></i> 3.48%
                        </span>
                                        <span class="whitespace-nowrap"> Since last week </span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="w-full lg:w-6/12 xl:w-3/12 px-4">
                            <div
                                class="relative flex flex-col min-w-0 break-words bg-white rounded mb-6 xl:mb-0 shadow-lg"
                            >
                                <div class="flex-auto p-4">
                                    <div class="flex flex-wrap">
                                        <div
                                            class="relative w-full pr-4 max-w-full flex-grow flex-1"
                                        >
                                            <h5
                                                class="text-blueGray-400 uppercase font-bold text-xs"
                                            >
                                                Sales
                                            </h5>
                                            <span class="font-semibold text-xl text-blueGray-700">
                            924
                          </span>
                                        </div>
                                        <div class="relative w-auto pl-4 flex-initial">
                                            <div
                                                class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 shadow-lg rounded-full bg-pink-500"
                                            >
                                                <i class="fas fa-users"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="text-sm text-blueGray-400 mt-4">
                        <span class="text-orange-500 mr-2">
                          <i class="fas fa-arrow-down"></i> 1.10%
                        </span>
                                        <span class="whitespace-nowrap"> Since yesterday </span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="w-full lg:w-6/12 xl:w-3/12 px-4">
                            <div
                                class="relative flex flex-col min-w-0 break-words bg-white rounded mb-6 xl:mb-0 shadow-lg"
                            >
                                <div class="flex-auto p-4">
                                    <div class="flex flex-wrap">
                                        <div
                                            class="relative w-full pr-4 max-w-full flex-grow flex-1"
                                        >
                                            <h5
                                                class="text-blueGray-400 uppercase font-bold text-xs"
                                            >
                                                Performance
                                            </h5>
                                            <span class="font-semibold text-xl text-blueGray-700">
                            49,65%
                          </span>
                                        </div>
                                        <div class="relative w-auto pl-4 flex-initial">
                                            <div
                                                class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 shadow-lg rounded-full bg-lightBlue-500"
                                            >
                                                <i class="fas fa-percent"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="text-sm text-blueGray-400 mt-4">
                        <span class="text-emerald-500 mr-2">
                          <i class="fas fa-arrow-up"></i> 12%
                        </span>
                                        <span class="whitespace-nowrap">
                          Since last month
                        </span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="px-4 md:px-10 mx-auto w-full -m-24">
            <div class="flex flex-wrap">
                @yield('content')
            </div>
            @include('admin.layouts.footer')
        </div>
    </div>
</div>
</body>
@include('admin.layouts.javascript')
</html>
