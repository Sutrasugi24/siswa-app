<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="shugi" content="siswa-app">
  <title>Database Ijazah dan SKHUN</title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

  <!-- CSS Libraries -->
  <link rel="stylesheet" href="../node_modules/bootstrap-social/bootstrap-social.css">

  <!-- Template CSS -->
  
    <title>SMAN 6 Cimahi</title>
    <!-- BEGIN: CSS Assets-->
    <link rel="stylesheet" href="{{ asset('/dist/css/app.css') }}" />
    <link rel="stylesheet" href="{{ asset('/fonts/roboto/') }}" />
    <link href="{{ asset('/dist/images/logo.svg') }}" rel="shortcut icon">
</head>

<body>
  
    <div id="app" class="login h-screen">
        <section class="flex sm:mt-5 md:mt-10">
                <div class="row container">
                    <div class="col-12 col-sm-8 offset-sm-2 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
                        <div class="login-brand mb-4 justify-center">
                            <img src="{{asset('/dist/images/sman6.png')}}" alt="logo" class="mx-auto justify-center">
                        </div>
                        <div class="card card-primary">
                            <div class="card-header text-center">
                                <h4 class="intro-x font-bold text-xl xl:text-2xl text-center xl:text-left">
                                SISTEM DATABASE IJAZAH DAN SKHUN
                            </h4>
                        </div>
                        <!-- BEGIN: Login Form -->
                        <form method="POST" action="{{ route('login') }}" class="h-auto sm:auto md:mx:auto xl:auto px-5 flex">
                            @csrf
                            <div class="my-auto mx-auto bg-white xl:bg-transparent rounded-md xl:shadow-none w-full">                     
                                <div class="intro-x mt-5">
                                    <!-- Email -->
                                    <input type="email" for="password" class="intro-x form-control py-3 px-2 block" placeholder="Email" name="email" :value="old('email')" required autofocus>
                                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                    <!-- Password -->
                                    <input type="password" id="password" name="password" class="intro-x form-control py-3 px-2 mt-4" placeholder="Password" required autocomplete="current-password">
                                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                    </div>
                                    <div class="intro-x flex text-slate-600 dark:text-slate-500 px-4 text-xs sm:text-sm mt-3">
                                        <div class="flex items-center mr-auto">
                                            <input id="remember-me" type="checkbox" class="form-check-input border my-auto">
                                            <label class="cursor-pointer select-none my-auto ml-1" for="remember-me">Remember me</label>
                                        </div> 
                                    </div>
                                    <div class="mt-4 xl:mt-4 text-right xl:text-right mb-8">
                                        <button type="submit" class="btn btn-primary w-24 mt-3">{{ __('Masuk') }}</button>
                                    </div>
                                </div>
                            </form>
                            <!-- END: Login Form -->
                    </div>
                </div>
            </div>
        </section>
    </div>

  <!-- General JS Scripts -->
    <script src="https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/markerclusterer.js"></script>
    <script src="{{asset('/dist/js/app.js')}}"></script>
</body>
</html>



{{-- <!DOCTYPE html>
<html lang="en" class="light">
    <!-- BEGIN: Head -->
    <head>
        <meta charset="utf-8">
        <link href="dist/images/logo.svg" rel="shortcut icon">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>SMAN 6 Cimahi</title>
        <!-- BEGIN: CSS Assets-->
        <link rel="stylesheet" href="{{ asset('/dist/css/app.css') }}" />
        <link rel="stylesheet" href="{{ asset('/fonts/roboto/') }}" />
        <link href="{{ asset('/dist/images/logo.svg') }}" rel="shortcut icon">

        <!-- END: CSS Assets-->
    </head>
    <!-- END: Head -->
    <body class="login">
        <div class="flex justify-center" >
                <!-- Session Status -->
                <x-auth-session-status class="mb-4" :status="session('status')" />
                <!-- BEGIN: Login Form -->
                <form method="POST" action="{{ route('login') }}" class="h-screen xl:h-auto flex py-5 xl:py-0 my-10 xl:my-0">
                    @csrf
                    <div class="my-auto mx-auto xl:ml-20 bg-white dark:bg-darkmode-600 xl:bg-transparent px-5 sm:px-8 py-8 xl:p-0 rounded-md shadow-md xl:shadow-none w-full">
                        <h2 class="intro-x font-bold text-2xl xl:text-3xl text-center xl:text-left">
                            Login
                        </h2>                        
                        <div class="intro-x mt-8">
                            <!-- Email -->
                            <input type="email" for="password" class="intro-x login__input form-control py-3 px-4 block" placeholder="Email" name="email" :value="old('email')" required autofocus>
                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                            <!-- Password -->
                            <div class="relative">
                                <input type="password" id="password" name="password" class="intro-x login__input form-control py-3 px-4 mt-4" placeholder="Password" required autocomplete="current-password">
                            </div>
                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                        </div>
                        <div class="intro-x flex text-slate-600 dark:text-slate-500 text-xs sm:text-sm mt-4">
                            <div class="flex items-center mr-auto">
                                <input id="remember-me" type="checkbox" class="form-check-input border mr-2">
                                <label class="cursor-pointer select-none" for="remember-me">Remember me</label>
                            </div> 
                        </div>
                        <div class="intro-x mt-5 xl:mt-8 text-center xl:text-left">
                            <button class="btn btn-primary py-3 px-4 w-full xl:w-32 xl:mr-3 align-top">{{ __('Masuk') }}</button>
                        </div>
                    </div>
                </form>
                <!-- END: Login Form -->
            
        </div>
        
        <!-- BEGIN: JS Assets-->
        <script src="{{asset('dist/js/app.js')}}"></script>
        <!-- END: JS Assets-->
    </body>
</html> --}}


{{-- <x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/dashboad">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <x-input-label for="email" :value="__('Email')" />
                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-input-label for="password" :value="__('Password')" />

                <x-text-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="current-password" />

                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <!-- Remember Me -->
            <div class="block mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-primary-button class="ml-3">
                    {{ __('Log in') }}
                </x-primary-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout> --}}


















