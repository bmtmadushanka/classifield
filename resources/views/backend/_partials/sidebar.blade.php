

<div class="app-sidebar sidebar-shadow">
    <div class="app-header__logo">
        <div class="logo"></div>
        <div class="header__pane ml-auto">
            <div>
                <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                    <span class="hamburger-box">
                        <span class="hamburger-inner"></span>
                    </span>
                </button>
            </div>
        </div>
    </div>
    <div class="app-header__mobile-menu">
        <div>
            <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                <span class="hamburger-box">
                    <span class="hamburger-inner"></span>
                </span>
            </button>
        </div>
    </div>
    <div class="app-header__menu">
        <span>
            <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                <span class="btn-icon-wrapper">
                    <i class="fa fa-ellipsis-v fa-w-6"></i>
                </span>
            </button>
        </span>
    </div>    <div class="scrollbar-sidebar">
        <div class="app-sidebar__inner">
            <ul class="vertical-nav-menu">
                @role('Admin')
                <li class="app-sidebar__heading">Dashboards</li>
                <li>
                    <a href="{{route('ads.index')}}">
                        <i class="metismenu-icon pe-7s-rocket"></i>
                       Ads Managment
                    </a>
                </li>
                <li>
                    <a href="{{route('brands.index')}}">
                        <i class="metismenu-icon pe-7s-rocket"></i>
                       Brands
                    </a>
                </li>
                <li>
                    <a href="/users">
                        <i class="metismenu-icon pe-7s-rocket"></i>
                       Sellers
                    </a>
                </li>
                {{-- <li>
                    <a href="/roles">
                        <i class="metismenu-icon pe-7s-rocket"></i>
                       Roles
                    </a>
                </li> --}}
                @endrole
                @role('Seller')
                <li class="app-sidebar__heading">Dashboards</li>
                <li>
                    <a href="{{route('ads.index')}}" class="mm-active">
                        <i class="metismenu-icon pe-7s-rocket"></i>
                       Ads Managment
                    </a>
                </li>
                @endrole
            </ul>
        </div>
    </div>
</div>   