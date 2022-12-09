<nav class="side-nav">
    <a href="" class="intro-x flex items-center pl-5 pt-4 mt-3">
        <img alt="" class="w-6" src="/dist/images/logo.svg">
        <span class="hidden xl:block text-white text-lg ml-3"> SMAN 6 Cimahi </span> 
    </a>
    <div class="side-nav__devider my-6"></div>
    <ul>
        <li>
            <a href="{{ url('home') }}" class="side-menu side-menu--active">
                <div class="side-menu__icon"> <i data-lucide="home"></i> </div>
                <div class="side-menu__title">
                    Dashboard 
                    <div class="side-menu__sub-icon transform rotate-180"></div>
                </div>
            </a>
        </li>
        <div class="side-nav__devider my-6"></div>
        </li>
        <li>
            <a href="{{ url('students')}}" class="side-menu">
                <div class="side-menu__icon"> <i data-lucide="edit"></i> </div>
                <div class="side-menu__title">
                    Siswa
                </div>
            </a>
        </li>
        <li>
            <a href="{{ url('users') }}" class="side-menu">
                <div class="side-menu__icon"> <i data-lucide="users"></i> </div>
                <div class="side-menu__title">
                    Users 
                    <div class="side-menu__sub-icon "></div>
                </div>
            </a>
        </li>
        <div class="side-nav__devider my-6"></div>
    </ul>
</nav>