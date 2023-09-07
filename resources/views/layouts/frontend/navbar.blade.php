<!-- Navbar STart -->
<header id="topnav" class="defaultscroll sticky">
    <div class="container">
        @include('layouts.frontend.logo')
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


                {{--<li><a href="{{ route('formation_page',[app()->getLocale()]) }}"
                       class="sub-menu-item">{{ __('menu_formation') }}</a></li>--}}

                <li><a href="https://ecimadigital.ecimaconsulting.com/" target="_blank"
                       class="sub-menu-item">{{ __('menu_it_digital') }}</a></li>

                <li><a href="{{ route('business_intelligence_page') }}"  class="sub-menu-item">BUSINESS INTELLIGENCE</a></li>

                <li><a href="https://formation.ecimaconsulting.com/" target="_blank"
                       class="sub-menu-item">{{ __('menu_formation') }}</a></li>



                {{--<li><a href="https://recrutement.ecimaconsulting.com/" target="_blank" class="sub-menu-item">{{ __('menu_recrutement') }}</a></li>--}}

                <li><a href="{{ route('ecima_group_page',[app()->getLocale()]) }}"
                       class="sub-menu-item">LE GROUPE ECIMA</a></li>

                <li><a href="{{ route('contact_page',[app()->getLocale()]) }}" class="sub-menu-item">{{ __('contact') }}</a></li>

                {{-- <li><a href="{{ route('a_propos_de_nous_page',[app()->getLocale()]) }}"  class="sub-menu-item">A PROPOS</a></li>--}}

            </ul><!--end navigation menu-->
        </div>
        <!--end navigation-->
    </div><!--end container-->
</header><!--end header-->
<!-- Navbar End -->
