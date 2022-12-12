<!DOCTYPE html>
<html lang="en" class="light">
<head>
    @include('templates.partials.head')
</head>
    <body class="py-5 md:py-0 bg-black/[0.15] dark:bg-transparent">
        <!-- BEGIN: Mobile Menu -->
        <div class="mobile-menu md:hidden">
            <div class="mobile-menu-bar">
                <a href="" class="flex mr-auto">
                    <img alt="SMAN 6 Cimahi" class="w-6" src="dist/images/logo.svg">
                </a>
                <a href="javascript:;" class="mobile-menu-toggler"> <i data-lucide="bar-chart-2" class="w-8 h-8 text-white transform -rotate-90"></i> </a>
            </div>
            <div class="scrollable">
                <a href="javascript:;" class="mobile-menu-toggler"> <i data-lucide="x-circle" class="w-8 h-8 text-white transform -rotate-90"></i> </a>
                <ul class="scrollable__content py-2">
                    <li>
                        <a href="/dashboard" class="menu menu--active">
                            <div class="menu__icon"> <i data-lucide="home"></i> </div>
                            <div class="menu__title"> Dashboard</i> </div>
                        </a>
                    </li>
                    <li class="menu__devider my-6"></li>
                    <li>
                        <a href="/students" class="menu">
                            <div class="menu__icon"> <i data-lucide="graduation-cap"></i> </div>
                            <div class="menu__title"> Siswa</div>
                        </a>
                    </li>
                    <li>
                        <a href="/users" class="menu">
                            <div class="menu__icon"> <i data-lucide="users"></i> </div>
                            <div class="menu__title"> Users </div>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- END: Mobile Menu -->
        <div class="flex mt-[4.7rem] md:mt-0 overflow-hidden">
            <!-- BEGIN: Side Menu -->
            <nav class="side-nav">
                <a href="" class="intro-x flex items-center pl-5 pt-4 mt-3">
                    <img alt="" class="w-6" src="/dist/images/logo.svg">
                    <span class="hidden xl:block text-white text-lg ml-3"> SMAN 6 Cimahi </span> 
                </a>
                <x-menu/>
            </nav>
            <!-- END: Side Menu -->
            <!-- BEGIN: Content -->
            <div class="content">
                <!-- BEGIN: Top Bar -->
                <div class="top-bar -mx-4 px-4 md:mx-0 md:px-0">
                    <!-- BEGIN: Breadcrumb -->
                    <nav aria-label="breadcrumb" class="-intro-x mr-auto hidden sm:flex">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Application</a></li>
                            <li class="breadcrumb-item active" aria-current="page"></li>
                        </ol>
                    </nav>
                    <!-- END: Breadcrumb -->
                    <!-- BEGIN: Account Menu -->
                    <div class="intro-x dropdown w-8 h-8">
                        <div class="dropdown-toggle w-8 h-8 rounded-full overflow-hidden shadow-lg image-fit zoom-in" role="button" aria-expanded="false" data-tw-toggle="dropdown">
                            <img alt="Midone - HTML Admin Template" src="dist/images/profile-5.jpg">
                        </div>
                        <div class="dropdown-menu w-56">
                            <ul class="dropdown-content bg-primary text-white">
                                <li class="p-2">
                                    <div class="font-medium">{{ Auth::user()->name }}s</div>
                                    <div class="text-xs text-white/70 mt-0.5 dark:text-slate-500">Backend Engineer</div>
                                </li>
                                <li>
                                    <hr class="dropdown-divider border-white/[0.08]">
                                </li>
                                <li>
                                    <a href="{{ route('profile.edit') }}" class="dropdown-item hover:bg-white/5"> <i data-lucide="user" class="w-4 h-4 mr-2"></i> Profile </a>
                                </li>
                                <li>
                                    <hr class="dropdown-divider border-white/[0.08]">
                                </li>
                                <li>
                                    <!-- Start: Logut-->
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf

                                        <x-dropdown-link :href="route('logout')"
                                                onclick="event.preventDefault();
                                                            this.closest('form').submit();">
                                        <i data-lucide="toggle-right" class="w-4 h-4 mr-2"></i> {{ __('Log Out') }}
                                        </x-dropdown-link>
                                    </form>
                                    <!-- End: Logout -->
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- END: Account Menu -->
                </div>
                <!-- END: Topbar -->
                @yield('content')
            </div>
            <!-- END: Content -->
        </div>
        @include('templates.partials.scripts')
    </body>
</html>