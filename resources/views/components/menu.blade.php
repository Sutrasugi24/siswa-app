<div class="side-nav__devider my-6"></div>
<ul>
        <li>
            @foreach($list as $row)
                <a href="{{ route( $row['route'] ) }}" class="side-menu {{ request()->is($row['link']) ? 'side-menu--active' : ''}}">
                    <div class="side-menu__icon"> <i data-lucide="{{ $row['icon'] }}"></i> </div>
                    <div class="side-menu__title">
                        {{ ucfirst($row['label']) }}
                        <div class="side-menu__sub-icon transform rotate-180"></div>
                    </div>
                </a>
                @if ($row['label'] == 'Dashboard')
                    <div class="side-nav__devider my-6"></div>
                @endif
            @endforeach
        </li>
    <div class="side-nav__devider my-6"></div>
</ul>
