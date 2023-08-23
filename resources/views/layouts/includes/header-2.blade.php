<header id="masthead" class="header ttm-header-style-01">
    <!-- top_bar -->
    <div class="top_bar ttm-bgcolor-darkgrey ttm-textcolor-white clearfix">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 d-flex flex-row align-items-center">
                    <div class="top_bar_contact_item">
                        <div class="top_bar_icon"><i class="fa fa-envelope-o"></i></div><a href="mailto:info@yourdomainname.com">info@yourdomainname.com</a>
                    </div>
                    <div class="top_bar_contact_item">
                        <div class="top_bar_icon"><i class="fa fa-phone"></i></div>+1-2345-6789-101
                    </div>
                    @php $class = 'ml-auto'; @endphp
                    @foreach(LaravelLocalization::getLocalesOrder() as $localeCode => $properties)
                        @if($localeCode != app()->getLocale())
                            <div class="top_bar_contact_item {{$class}}">
                                <a rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                    {{ ucfirst($properties['native']) }}
                                </a>
                            </div>
                            @php $class = '' @endphp
                        @endif
                    @endforeach
                    <div class="top_bar_contact_item">
                        <div class="top_bar_social">
                            <ul class="social-icons">
                                <li><a class="tooltip-bottom" target="_blank" href="" data-tooltip="Facebook" tabindex="-1"><i class="fa fa-facebook"></i></a>
                                </li>
                                <li><a class="tooltip-bottom" target="_blank" href="" data-tooltip="Twitter" tabindex="-1"><i class="fa fa-twitter"></i></a>
                                </li>
                                <li><a class="tooltip-bottom" target="_blank" href="" data-tooltip="Flickr" tabindex="-1"><i class="fa fa-flickr"></i></a>
                                </li>
                                <li><a class="tooltip-bottom" target="_blank" href="" data-tooltip="Linkedin" tabindex="-1"><i class="fa fa-linkedin"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <a class="ttm-btn ttm-btn-size-md ttm-btn-shape-square ttm-btn-style-fill ttm-btn-color-skincolor" href="{{route('web.home')}}#feedback-form">@lang('main.header_feedback')</a>
                </div>
            </div>
        </div>
    </div><!-- top_bar end-->
    <!-- site-header-menu -->
    <div id="site-header-menu" class="site-header-menu ttm-bgcolor-white">
        <div class="site-header-menu-inner ttm-stickable-header">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <!--site-navigation -->
                        <div class="site-navigation d-flex flex-row">
                            <!-- site-branding -->
                            <div class="site-branding mr-auto">
                                <a class="home-link" href="{{route('web.home')}}" title="Uniaro" rel="home">
                                    <img id="logo-img" class="img-center lazyloaded" src="{{asset('assets/images/logo-img.png')}}" data-src="{{asset('assets/images/logo-img.png')}}" alt="logo-img">
                                </a>
                            </div><!-- site-branding end -->
                            <div class="btn-show-menu-mobile menubar menubar--squeeze">
                                        <span class="menubar-box">
                                            <span class="menubar-inner"></span>
                                        </span>
                            </div>
                            <!-- menu -->
                            <nav class="main-menu menu-mobile" id="menu">
                                <ul class="menu">
                                    <li class="mega-menu-item @if(request()->routeIs('web.home')) active @endif">
                                        <a href="{{route('web.home')}}" class="mega-menu-link"><i class="fa fa-home"></i></a>
                                    </li>
                                    <li><a href="#">@lang('main.about')</a></li>
                                    <li class="@if(request()->routeIs('web.courses.*')) active @endif"><a href="{{route('web.courses.index')}}">@lang('main.nav_courses')</a></li>
                                    <li><a href="#">@lang('main.nav_docs')</a></li>
                                    <li><a href="#">@lang('main.nav_gallery')</a></li>
                                    <li class="@if(request()->routeIs('web.blog.*')) active @endif"><a href="{{route('web.blog.index')}}">@lang('main.nav_news')</a></li>

                                </ul>
                            </nav>
                            <div class="header_extra d-flex flex-row align-items-center justify-content-end">
                                <div class="header_search">
                                    <a href="#" class="btn-default search_btn"><i class="ti ti-search"></i></a>
                                    <div class="header_search_content">
                                        <form id="searchbox" method="get" action="{{route('web.courses.search')}}">
                                            <input class="search_query" type="text" id="search_query_top" name="search" placeholder="Enter Keyword" value="{{request('search')}}">
                                            <button type="submit" class="btn close-search"><i class="fa fa-search"></i></button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div><!-- site-navigation end-->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- site-header-menu end-->
</header>
