<!DOCTYPE html>
<html lang="zxx" class="js">
<head>
    <meta charset="utf-8">
    <meta name="author" content="Nafiur Rahman">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="A powerful and conceptual apps base dashboard template that especially build for developers and programmers.">
    <link rel="shortcut icon" href="{{ asset('backend/assets/images/favicon.png') }}">
    <title>Dashboard | Control Panel</title>
    <link rel="stylesheet" href="{{ asset('backend/assets/css/admintheme.css?ver=3.2.3') }}">
    <link id="skin-default" rel="stylesheet" href="{{ asset('backend/assets/css/theme.css?ver=3.2.3') }}">
</head>
<body class="nk-body bg-lighter npc-general has-sidebar ">
    <div class="nk-app-root">
        <div class="nk-main">
            @include('admin.layouts.sidebar')

            <div class="nk-wrap ">
                @include('admin.layouts.header')

                @yield('content')

                <div class="nk-footer">
                    <div class="container-fluid">
                        <div class="nk-footer-wrap">
                            <div class="nk-footer-copyright"> &copy; 2024 BookVault. Template by <a href="https://nafiur.com" target="_blank">Nafiur Rahman</a></div>
                            <div class="nk-footer-links">
                                <ul class="nav nav-sm">
                                    <li class="nav-item dropup"><a href="#" class="dropdown-toggle dropdown-indicator has-indicator nav-link text-base" data-bs-toggle="dropdown" data-offset="0,10"><span>English</span></a>
                                        <div class="dropdown-menu dropdown-menu-sm dropdown-menu-end">
                                            <ul class="language-list">
                                                <li><a href="#" class="language-item"><span class="language-name">English</span></a></li>
                                                <li><a href="#" class="language-item"><span class="language-name">Español</span></a></li>
                                                <li><a href="#" class="language-item"><span class="language-name">Français</span></a></li>
                                                <li><a href="#" class="language-item"><span class="language-name">Türkçe</span></a></li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="nav-item"><a data-bs-toggle="modal" href="#region" class="nav-link"><em class="icon ni ni-globe"></em><span class="ms-1">Select Region</span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('backend/assets/js/bundle.js?ver=3.2.3') }}"></script>
    <script src="{{ asset('backend/assets/js/scripts.js?ver=3.2.3') }}"></script>
    <script src="{{ asset('backend/assets/js/demo-settings.js?ver=3.2.3') }}"></script>
    <script src="{{ asset('backend/assets/js/charts/gd-default.js?ver=3.2.3') }}"></script>
</body>
</html>
