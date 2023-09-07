<!-- Navbar STart -->
<header id="topnav" class="defaultscroll sticky">
    <div class="container">
        @include('layouts.frontend.logo-blog')
        <div class="menu-extras">
            <div class="menu-item">
                <!-- Mobile menu toggle-->
                <a class="navbar-toggle" id="isToggle" onclick="toggleMenu()">
                    <div class="lines">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </a>
                <!-- End mobile menu toggle-->
            </div>
        </div>

        {{--<ul class="buy-button list-inline mb-0">
            <li class="list-inline-item search-icon mb-0">
                <div class="dropdown">
                    <button type="button" class="btn btn-link text-decoration-none dropdown-toggle mb-0 p-0" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="uil uil-search h5 text-dark nav-light-icon-dark mb-0"></i>
                        <i class="uil uil-search h5 text-white nav-light-icon-white mb-0"></i>
                    </button>
                    <div class="dropdown-menu dd-menu dropdown-menu-end bg-white shadow rounded border-0 mt-4 py-0" style="width: 300px;">
                        <form class="p-4">
                            <input type="text" id="text" name="name" class="form-control border bg-white" placeholder="Search...">
                        </form>
                    </div>
                </div>
            </li>
        </ul>--}}

        <div id="navigation">
            <!-- Navigation Menu-->
            <ul class="navigation-menu nav-right nav-light">

                <li><a href="{{ route('blog_sidebar_group_page',[app()->getLocale()]) }}"
                       class="sub-menu-item">{{ __('menu_actualite') }}</a></li>

                <li><a href="{{ route('blog_editorial_group_page',[app()->getLocale()]) }}"
                       class="sub-menu-item">{{ __('menu_editorial') }}</a></li>

                <li><a href="#" class="sub-menu-item">{{ __('menu_projecteur_mois') }}</a></li>

                <li><a href="{{ route('blog_about_us_group_page',[app()->getLocale()]) }}"
                       class="sub-menu-item">{{ __('menu_a_propos') }}</a></li>

                {{--<li class="has-submenu parent-parent-menu-item">
                    <a href="javascript:void(0)">{{ __('menu_apropos') }}</a><span class="menu-arrow"></span>
                    <ul class="submenu">
                        <li><a href="{{ route('blog_page',[app()->getLocale()]) }}"
                               class="sub-menu-item">{{ __('menu_journal') }}</a></li>
                        <li><a href="blog-author.html" class="sub-menu-item">Qui Sommes Nous</a></li>
                        <li><a href="blog-author.html" class="sub-menu-item">Notre Raison d'être</a></li>
                        <li><a href="blog-author.html" class="sub-menu-item">Nos Missions</a></li>
                        <li><a href="{{ route('contact_page',[app()->getLocale()]) }}" class="sub-menu-item">Contactez
                                Nous</a></li>
                    </ul>
                </li>--}}

            </ul><!--end navigation menu-->
        </div>
        <!--end navigation-->
    </div><!--end container-->
</header><!--end header-->
<!-- Navbar End -->
