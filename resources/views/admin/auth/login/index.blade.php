<!DOCTYPE html>
<html lang="en" class="js">
<head>
    <meta charset="utf-8">
    <meta name="author" content="Nafiur Rahman">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="A powerful and conceptual apps base dashboard template that especially build for developers and programmers.">
    <link rel="shortcut icon" href="{{ asset('backend/images/favicon.png') }}">
    <title>Login | Admin Panel</title>
    <link rel="stylesheet" href="{{ asset('backend/assets/css/admintheme.css?ver=3.2.3') }}">
    <link id="skin-default" rel="stylesheet" href="{{ asset('backend/assets/css/theme.css?ver=3.2.3') }}">
</head>
<body class="nk-body bg-white npc-general pg-auth">
    <div class="nk-app-root">
        <div class="nk-main ">
            <div class="nk-wrap nk-wrap-nosidebar">
                <div class="nk-content ">
                    <div class="nk-block nk-block-middle nk-auth-body  wide-xs">
                        <div class="brand-logo pb-4 text-center"><a href="{{ route('admin.login') }}" class="logo-link"><img class="logo-light logo-img logo-img-lg" src="{{ asset('backend/assets/images/logo.png') }}" srcset="{{ asset('backend/assets/images/logo2x.png 2x') }}" alt="logo"><img class="logo-dark logo-img logo-img-lg" src="{{ asset('backend/assets/images/logo-dark.png') }}" srcset="{{ asset('backend/assets/images/logo-dark2x.png 2x') }}" alt="logo-dark"></a></div>
                        <div class="card card-bordered">
                            <div class="card-inner card-inner-lg">
                                <div class="nk-block-head">
                                    <div class="nk-block-head-content">
                                        <h4 class="nk-block-title">Sign-In</h4>
                                        <div class="nk-block-des">
                                            <p>Access the control panel using your email and password.</p>
                                        </div>
                                    </div>
                                </div>
                                <form action="{{ route('admin.login.submit') }}" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <div class="form-label-group"><label class="form-label" for="default-01">Email</label></div>
                                        <div class="form-control-wrap"><input type="text" name="email" class="form-control form-control-lg" id="default-01" placeholder="Enter your email address or username"></div>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-label-group"><label class="form-label" for="password">Password</label><a class="link link-primary link-sm" href="">Forgot Password?</a></div>
                                        <div class="form-control-wrap"><a href="#" class="form-icon form-icon-right passcode-switch lg" data-target="password"><em class="passcode-icon icon-show icon ni ni-eye"></em><em class="passcode-icon icon-hide icon ni ni-eye-off"></em></a><input type="password" name="password" class="form-control form-control-lg" id="password" placeholder="Enter your password"></div>
                                    </div>
                                    <div class="form-group"><button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button></div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="nk-footer nk-auth-footer-full">
                        <div class="container wide-lg">
                            <div class="row g-3">
                                <div class="col-lg-6 order-lg-last">
                                    <ul class="nav nav-sm justify-content-center justify-content-lg-end">
                                        <li class="nav-item"><a class="link link-primary fw-normal py-2 px-3" href="#">Terms & Condition</a></li>
                                        <li class="nav-item"><a class="link link-primary fw-normal py-2 px-3" href="#">Privacy Policy</a></li>
                                        <li class="nav-item"><a class="link link-primary fw-normal py-2 px-3" href="#">Help</a></li>
                                    </ul>
                                </div>
                                <div class="col-lg-6">
                                    <div class="nk-block-content text-center text-lg-start">
                                        <p class="text-soft">&copy; 2023 Book Vault. All Rights Reserved.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('backend/assets/js/bundle.js?ver=3.2.3') }}"></script>
    <script src="{{ asset('backend/assets/js/scripts.js?ver=3.2.3') }}"></script>

</html>
