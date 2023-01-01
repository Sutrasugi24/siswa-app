
<!DOCTYPE html>
<html lang="en" class="light">
    <!-- BEGIN: Head -->
    <head>
        <meta charset="utf-8">
        <link href="dist/images/logo.svg" rel="shortcut icon">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Tinker admin is super flexible, powerful, clean & modern responsive tailwind admin template with unlimited possibilities.">
        <meta name="keywords" content="admin template, Tinker Admin Template, dashboard template, flat admin template, responsive admin template, web app">
        <meta name="author" content="LEFT4CODE">
        <title>SMAN 6 Cimahi</title>
        <!-- BEGIN: CSS Assets-->
        <link rel="stylesheet" href="{{ asset('/dist/css/app.css') }}" />
        <link rel="stylesheet" href="{{ asset('/fonts/roboto/') }}" />
        <link href="{{ asset('/dist/images/logo.svg') }}" rel="shortcut icon">

        <!-- END: CSS Assets-->
    </head>
    <!-- END: Head -->
    <body class="login">
        <div class="container sm:px-10">
            <div class="block xl:grid grid-cols-2 gap-4">
                <!-- BEGIN: Login Info -->
                <div class="hidden xl:flex flex-col min-h-screen">
                    <a href="" class="-intro-x flex items-center pt-5">
                        <img alt="SMAN 6 Cimahi" class="w-6" src="dist/images/logo.svg">
                        <span class="text-white text-lg ml-3"> SMAN 6 Cimahi </span> 
                    </a>
                    <div class="my-auto">
                        <img alt="SMAN 6 Cimahi" class="-intro-x w-1/2 -mt-16" src="dist/images/illustration.svg">
                        <div class="-intro-x text-white font-medium text-4xl leading-tight mt-10">
                            Siswa-app
                            <div class="-intro-x mt-1 text-lg text-white text-opacity-70 dark:text-slate-400">Masuk untuk melihat informasi Ijazah dan SKHUN.</div>
                        </div>
                        
                    </div>
                </div>
                <!-- END: Login Info -->
                <!-- Begin Signup -->
                <div class="h-screen xl:h-auto flex py-5 xl:py-0 my-10 xl:my-0">
                <form class="h-screen xl:h-auto flex py-5 xl:py-0 my-10 xl:my-0" method="POST" action="{{ route('register') }}" >
                    @csrf
                    <div class="my-auto mx-auto xl:ml-20 bg-white dark:bg-darkmode-600 xl:bg-transparent px-5 sm:px-8 py-8 xl:p-0 rounded-md shadow-md xl:shadow-none w-full sm:w-3/4 lg:w-2/4 xl:w-auto">
                        <h2 class="intro-x font-bold text-2xl xl:text-3xl text-center xl:text-left">
                            Registrasi
                        </h2>    
                    <!-- Name -->
                    <div class="intro-x mt-4">
                        <x-input-label for="name" :value="__('Nama')" />
                        <x-text-input id="name" class="intro-x login__input form-control py-3 px-4 block" type="text" name="name" :value="old('name')" required autofocus />
                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                    </div>
        
                    <!-- Email Address -->
                    <div class="intro-x mt-2">
                        <x-input-label for="email" :value="__('Email')" />
                        <x-text-input id="email" class="intro-x login__input form-control py-3 px-4 block" type="email" name="email" :value="old('email')" required />
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>
        
                    <!-- Password -->
                    <div class="intro-x mt-2">
                        <x-input-label for="password" :value="__('Password')" />
        
                        <x-text-input id="password" class="intro-x login__input form-control py-3 px-4 block"
                                        type="password"
                                        name="password"
                                        required autocomplete="new-password" />
        
                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>
        
                    <!-- Confirm Password -->
                    <div class="intro-x mt-2">
                        <x-input-label for="password_confirmation" :value="__('Konfirmasi Password')" />
        
                        <x-text-input id="password_confirmation" class="block mt-1 w-full"
                                        type="password"
                                        name="password_confirmation" required />
        
                        <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                    </div>
        
                    <div class="fintro-x mt-5 xl:mt-8 text-center xl:text-left">
                        <button class="btn btn-primary py-3 px-4 w-full xl:w-32 xl:mr-3 align-top">
                            {{ __('Daftar') }}
                        </button>
                        <a href="{{ route('login') }}" class="btn btn-outline-secondary py-3 px-4 w-full xl:w-32 mt-3 xl:mt-0 align-top">Masuk</a>
        
                    </div>
                    </div>
                </form>
                <!-- END: Signup Form -->
            </div>
        </div>
        
        <!-- BEGIN: JS Assets-->
        <script src="{{asset('dist/js/app.js')"></script>
        <!-- END: JS Assets-->
    </body>
</html>




















        