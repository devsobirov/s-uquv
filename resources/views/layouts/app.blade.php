<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" x-data="alpineApp">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <title>{{ config('app.name', 'Laravel') }}</title>

    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.12.1/dist/cdn.min.js"></script>
    @vite('resources/sass/app.scss')

    <!-- Custom styles for this Page-->
    @yield('custom_styles')

</head>
<body :class="dark ? 'theme-dark' : 'theme-light'" :data-bs-theme="dark ? 'dark' : 'light'">
<div class="page">
    <div class="sticky-top">
        <header class="navbar navbar-expand-md navbar-light sticky-top d-print-none">
            <div class="container-xl">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-menu">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <h1 class="navbar-brand navbar-brand-autodark d-none-navbar-horizontal pe-0 pe-md-3">
                    <a href="." class="rounded" style="background: rgba(0,0,0, 0.1)">
                        <img src="{{asset('assets/images/logo-white.png')}}" width="145" style="height: 2.5rem" alt="Tabler" class="navbar-brand-image">
                    </a>
                </h1>
                <div class="navbar-nav flex-row order-md-last">
                    <div class="d-none d-md-flex me-2">
                        <a x-cloak href="#" @click.prevent="toggleTheme()" class="nav-link px-0" data-bs-toggle="tooltip" data-bs-placement="bottom" aria-label="Enable light mode" :data-bs-original-title="dark ? `Yorug' rejinmi yoqish` : `Qorong'i rejimni yoqish`">
                            <span x-cloak x-show="!dark"><x-svg.moon></x-svg.moon></span>
                            <span x-cloak x-show="dark"><x-svg.sun></x-svg.sun></span>
                        </a>
                    </div>
                    @auth
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link d-flex lh-1 text-reset p-0" data-bs-toggle="dropdown" aria-label="Open user menu">
                                <span class="avatar avatar-sm" style="background-image: url(https://eu.ui-avatars.com/api/?name={{ urlencode(auth()->user()->name) }})"></span>
                                <div class="d-none d-xl-block ps-2">
                                    {{ auth()->user()->name ?? null }}
                                </div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                <a href="{{ route('web.home') }}" class="dropdown-item">Saytga o'tish</a>
                                <a href="{{ route('profile.show') }}" class="dropdown-item">Profil</a>
                                <div class="dropdown-divider"></div>
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <a href="{{ route('logout') }}" class="dropdown-item" onclick="event.preventDefault(); this.closest('form').submit();">
                                        Chiqish
                                    </a>
                                </form>
                            </div>
                        </div>
                    @endauth

                </div>
            </div>
        </header>

        @include('layouts.navigation')

    </div>
    <div class="page-wrapper">
        @include('layouts.includes.messages')
        @yield('content')

        <footer class="footer footer-transparent d-print-none">
            <div class="container-xl">
                <div class="row text-center align-items-center flex-row-reverse">
                    <div class="col-12 col-lg-auto mt-3 mt-lg-0">
                        <ul class="list-inline list-inline-dots mb-0">
                            <li class="list-inline-item">
                                &copy; {{ date('Y') }}
                                <a href="{{ config('app.url') }}" class="link-secondary">{{ config('app.name') }}</a>
                            </li>
                            <li class="list-inline-item">
                                Version 1.0.0
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</div>
</div>

<!-- Core plugin JavaScript-->
@vite('resources/js/app.js')
@include('layouts.includes._alpine-init')
<!-- Page level custom scripts -->
@yield('custom_scripts')

</body>
</html>
