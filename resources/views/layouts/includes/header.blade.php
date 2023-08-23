<!--header start-->
<header id="masthead" class="header ttm-header-style-04">
    <!-- fbar-main -->

    <!-- fbar-main end -->
    <!-- top_bar -->
    <div class="top_bar ttm-textcolor-white clearfix">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="d-flex flex-row align-items-center justify-content-end">
                        <!-- site-branding -->
                        <div class="site-branding mr-auto">
                            <a class="home-link" href="/" title="Uniaro" rel="home">
                                <img width="135" height="46" id="logo-img" class="img-center lazyloaded" src="{{asset('assets/images/logo-white.png')}}" data-src="{{asset('assets/images/logo-white.png')}}" alt="logo-img">
                            </a>
                        </div>
                        <!-- site-branding end -->
                        <div class="top_bar_contact_item">
                            <div class="top_bar_icon"><i class="fa fa-envelope-o"></i></div><a href="mailto:info@yourdomainname.com">info@sanoatuquv.uz</a>
                        </div>
                        <div class="top_bar_contact_item">
                            <div class="top_bar_icon"><i class="fa fa-phone"></i></div>+998 79 222 77 00
                        </div>
                        @foreach(LaravelLocalization::getLocalesOrder() as $localeCode => $properties)
                            @if($localeCode != app()->getLocale())
                                <div class="top_bar_contact_item">
                                    <a rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                        {{ ucfirst($properties['native']) }}
                                    </a>
                                </div>
                            @endif
                        @endforeach
                        <div class="top_bar_contact_item">
                            <div class="top_bar_social">
                                <ul class="social-icons">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- top_bar end-->
    <!-- site-header-menu -->
    <div id="site-header-menu" class="site-header-menu">
        <div class="site-header-menu-inner ttm-stickable-header">
            <div class="container">

                <!--site-navigation -->
                <div class="site-navigation d-flex flex-row ttm-bgcolor-skincolor">
                    <div class="btn-show-menu-mobile menubar menubar--squeeze">
                                <span class="menubar-box">
                                    <span class="menubar-inner"></span>
                                </span>
                    </div>
                    <!-- menu -->
                    <nav class="main-menu menu-mobile" id="menu">
                        <ul class="menu">
                            <li class="mega-menu-item active">
                                <a href="#" class="mega-menu-link"><i class="fa fa-home"></i></a>

                            </li>
                            <li><a href="#">@lang('main.about')</a></li>
                            <li><a href="#">@lang('main.nav_courses')</a></li>
                            <li><a href="#">@lang('main.nav_docs')</a></li>
                            <li><a href="">@lang('main.nav_gallery')</a></li>
                            <li><a href="#">@lang('main.nav_news')</a></li>

                        </ul>
                    </nav>
                    <div class="header_extra d-flex flex-row align-items-center ml-auto">

                        <div class="header_btn">
                            <a class="ttm-btn ttm-btn-size-md ttm-btn-shape-square ttm-btn-style-fill ttm-btn-color-white" href="#">@lang('main.header_contact')</a>
                        </div>
                    </div>
                </div>
                <!-- site-navigation end-->
            </div>
        </div>
    </div>
    <!-- site-header-menu end-->
</header>
<!--header end-->
