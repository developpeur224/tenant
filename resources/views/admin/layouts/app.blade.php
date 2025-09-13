<!DOCTYPE html>
<html lang="zxx" class="js">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
    <meta charset="utf-8">
    <meta name="author" content="Softnio">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description"
        content="A powerful and conceptual apps base dashboard template that especially build for developers and programmers.">
    <link rel="shortcut icon" href="../images/favicon.png">
    <title>@yield('title') | Tenant</title>
   <link rel="stylesheet" href="{{ asset('assets/css/dashlite19ce.css') }}">
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-91615293-4"></script>
    <script>window.dataLayer = window.dataLayer || []; function gtag() { dataLayer.push(arguments); } gtag('js', new Date()); gtag('config', 'UA-91615293-4');</script>
    @yield('style')
</head>

<body class="nk-body bg-lighter npc-general has-sidebar ">
    <div class="nk-app-root">
        <div class="nk-main ">
            <div class="nk-sidebar nk-sidebar-fixed is-dark " data-content="sidebarMenu">
                <div class="nk-sidebar-element nk-sidebar-head">
                    <div class="nk-menu-trigger"><a href="#" class="nk-nav-toggle nk-quick-nav-icon d-xl-none"
                            data-target="sidebarMenu"><em class="icon ni ni-arrow-left"></em></a><a href="#"
                            class="nk-nav-compact nk-quick-nav-icon d-none d-xl-inline-flex"
                            data-target="sidebarMenu"><em class="icon ni ni-menu"></em></a></div>
                    <div class="nk-sidebar-brand"><a href="../index.html" class="logo-link nk-sidebar-logo"><img
                                class="logo-light logo-img" src="{{ asset('images/logo.png') }}"
                                srcset="/demo1/images/logo2x.png 2x" alt="logo"><img class="logo-dark logo-img"
                                src="{{ asset('images/logo-dark.png') }}" srcset="/demo1/images/logo-dark2x.png 2x"
                                alt="logo-dark"></a></div>
                </div>
                <div class="nk-sidebar-element nk-sidebar-body">
                    <div class="nk-sidebar-content">
                        <div class="nk-sidebar-menu" data-simplebar>
                           <ul class="nk-menu">
                                {{-- Dashboard --}}
                                <li class="nk-menu-item">
                                    <a href="{{ route('admin.dashboard') }}" class="nk-menu-link">
                                        <span class="nk-menu-icon"><em class="icon ni ni-dashboard-fill"></em></span>
                                        <span class="nk-menu-text">Dashboard</span>
                                    </a>
                                </li>

                                {{-- Tenants --}}
                                <li class="nk-menu-item">
                                    <a href="{{ route('admin.tenants.index') }}" class="nk-menu-link">
                                        <span class="nk-menu-icon"><em class="icon ni ni-users-fill"></em></span>
                                        <span class="nk-menu-text">Tenants</span>
                                    </a>
                                </li>

                                {{-- Plans --}}
                                <li class="nk-menu-item">
                                    <a href="{{ route('admin.plans.index') }}" class="nk-menu-link">
                                        <span class="nk-menu-icon"><em class="icon ni ni-package"></em></span>
                                        <span class="nk-menu-text">Plans</span>
                                    </a>
                                </li>

                                {{-- Abonnements --}}
                                <li class="nk-menu-item">
                                    <a href="{{ route('admin.abonnements.index') }}" class="nk-menu-link">
                                        <span class="nk-menu-icon"><em class="icon ni ni-coin"></em></span>
                                        <span class="nk-menu-text">Abonnements</span>
                                    </a>
                                </li>

                                {{-- Paramètres --}}
                                <li class="nk-menu-item">
                                    <a href="{{ route('admin.settings') }}" class="nk-menu-link">
                                        <span class="nk-menu-icon"><em class="icon ni ni-setting-alt-fill"></em></span>
                                        <span class="nk-menu-text">Paramètres</span>
                                    </a>
                                </li>
                            </ul>

                        </div>
                    </div>
                </div>
            </div>
            <div class="nk-wrap ">
                <div class="nk-header nk-header-fixed is-light">
                    <div class="container-fluid">
                        <div class="nk-header-wrap">
                            <div class="nk-menu-trigger d-xl-none ms-n1"><a href="#"
                                    class="nk-nav-toggle nk-quick-nav-icon" data-target="sidebarMenu"><em
                                        class="icon ni ni-menu"></em></a></div>
                            <div class="nk-header-brand d-xl-none"><a href="../index.html" class="logo-link"><img
                                        class="logo-light logo-img" src="{{ asset('images/logo.png') }}"
                                        srcset="/demo1/images/logo2x.png 2x" alt="logo"><img class="logo-dark logo-img"
                                        src="{{ asset('images/logo-dark.png') }}" srcset="/demo1/images/logo-dark2x.png 2x"
                                        alt="logo-dark"></a></div>
                           
                            <div class="nk-header-tools">
                                <ul class="nk-quick-nav">
                                    <li class="dropdown user-dropdown">
                                        <a href="#" class="dropdown-toggle"
                                            data-bs-toggle="dropdown">
                                            <div class="user-toggle">
                                                <div class="user-avatar sm"><em class="icon ni ni-user-alt"></em></div>
                                                <div class="user-info d-none d-md-block">
                                                    <div class="user-status">Administrator</div>
                                                    <div class="user-name dropdown-indicator">Abu Bin Ishityak</div>
                                                </div>
                                            </div>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-md dropdown-menu-end dropdown-menu-s1">
                                            <div class="dropdown-inner user-card-wrap bg-lighter d-none d-md-block">
                                                <div class="user-card">
                                                    <div class="user-avatar"><span>AB</span></div>
                                                    <div class="user-info"><span class="lead-text">Abu Bin
                                                            Ishtiyak</span><span
                                                            class="sub-text">info@softnio.com</span></div>
                                                </div>
                                            </div>
                                            <div class="dropdown-inner">
                                                <ul class="link-list">
                                                    <li><a href="../user-profile-regular.html"><em
                                                                class="icon ni ni-user-alt"></em><span>View
                                                                Profile</span></a></li>
                                                    <li><a href="../user-profile-setting.html"><em
                                                                class="icon ni ni-setting-alt"></em><span>Account
                                                                Setting</span></a></li>
                                                    <li><a href="../user-profile-activity.html"><em
                                                                class="icon ni ni-activity-alt"></em><span>Login
                                                                Activity</span></a></li>
                                                </ul>
                                            </div>
                                            <div class="dropdown-inner">
                                                <ul class="link-list">
                                                    <li><a href="#"><em class="icon ni ni-signout"></em><span>Sign
                                                                out</span></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="dropdown notification-dropdown me-n1"><a href="#"
                                            class="dropdown-toggle nk-quick-nav-icon" data-bs-toggle="dropdown">
                                            <div class="icon-status icon-status-info"><em class="icon ni ni-bell"></em>
                                            </div>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-xl dropdown-menu-end dropdown-menu-s1">
                                            <div class="dropdown-head"><span
                                                    class="sub-title nk-dropdown-title">Notifications</span><a
                                                    href="#">Mark All as Read</a></div>
                                            <div class="dropdown-body">
                                                <div class="nk-notification">
                                                    <div class="nk-notification-item dropdown-inner">
                                                        <div class="nk-notification-icon"><em
                                                                class="icon icon-circle bg-warning-dim ni ni-curve-down-right"></em>
                                                        </div>
                                                        <div class="nk-notification-content">
                                                            <div class="nk-notification-text">You have requested to
                                                                <span>Widthdrawl</span></div>
                                                            <div class="nk-notification-time">2 hrs ago</div>
                                                        </div>
                                                    </div>
                                                    <div class="nk-notification-item dropdown-inner">
                                                        <div class="nk-notification-icon"><em
                                                                class="icon icon-circle bg-success-dim ni ni-curve-down-left"></em>
                                                        </div>
                                                        <div class="nk-notification-content">
                                                            <div class="nk-notification-text">Your <span>Deposit
                                                                    Order</span> is placed</div>
                                                            <div class="nk-notification-time">2 hrs ago</div>
                                                        </div>
                                                    </div>
                                                    <div class="nk-notification-item dropdown-inner">
                                                        <div class="nk-notification-icon"><em
                                                                class="icon icon-circle bg-warning-dim ni ni-curve-down-right"></em>
                                                        </div>
                                                        <div class="nk-notification-content">
                                                            <div class="nk-notification-text">You have requested to
                                                                <span>Widthdrawl</span></div>
                                                            <div class="nk-notification-time">2 hrs ago</div>
                                                        </div>
                                                    </div>
                                                    <div class="nk-notification-item dropdown-inner">
                                                        <div class="nk-notification-icon"><em
                                                                class="icon icon-circle bg-success-dim ni ni-curve-down-left"></em>
                                                        </div>
                                                        <div class="nk-notification-content">
                                                            <div class="nk-notification-text">Your <span>Deposit
                                                                    Order</span> is placed</div>
                                                            <div class="nk-notification-time">2 hrs ago</div>
                                                        </div>
                                                    </div>
                                                    <div class="nk-notification-item dropdown-inner">
                                                        <div class="nk-notification-icon"><em
                                                                class="icon icon-circle bg-warning-dim ni ni-curve-down-right"></em>
                                                        </div>
                                                        <div class="nk-notification-content">
                                                            <div class="nk-notification-text">You have requested to
                                                                <span>Widthdrawl</span></div>
                                                            <div class="nk-notification-time">2 hrs ago</div>
                                                        </div>
                                                    </div>
                                                    <div class="nk-notification-item dropdown-inner">
                                                        <div class="nk-notification-icon"><em
                                                                class="icon icon-circle bg-success-dim ni ni-curve-down-left"></em>
                                                        </div>
                                                        <div class="nk-notification-content">
                                                            <div class="nk-notification-text">Your <span>Deposit
                                                                    Order</span> is placed</div>
                                                            <div class="nk-notification-time">2 hrs ago</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="dropdown-foot center"><a href="#">View All</a></div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                @yield('content')
                <div class="nk-footer">
                    <div class="container-fluid">
                        <div class="nk-footer-wrap">
                            <div class="nk-footer-copyright"> &copy; 2022 DashLite. Template by <a
                                    href="https://softnio.com/" target="_blank">Softnio</a></div>
                            <div class="nk-footer-links">
                                <ul class="nav nav-sm">
                                    <li class="nav-item dropup"><a href="#"
                                            class="dropdown-toggle dropdown-indicator has-indicator nav-link"
                                            data-bs-toggle="dropdown" data-offset="0,10"><span>English</span></a>
                                        <div class="dropdown-menu dropdown-menu-sm dropdown-menu-end">
                                            <ul class="language-list">
                                                <li><a href="#" class="language-item"><span
                                                            class="language-name">English</span></a></li>
                                                <li><a href="#" class="language-item"><span
                                                            class="language-name">Español</span></a></li>
                                                <li><a href="#" class="language-item"><span
                                                            class="language-name">Français</span></a></li>
                                                <li><a href="#" class="language-item"><span
                                                            class="language-name">Türkçe</span></a></li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="nav-item"><a data-bs-toggle="modal" href="#region" class="nav-link"><em
                                                class="icon ni ni-globe"></em><span class="ms-1">Select
                                                Region</span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @yield('modal')
    <script src="{{ asset('assets/js/bundle19ce.js') }}"></script>
    <script src="{{ asset('assets/js/scripts19ce.js') }}"></script>
    <script src="{{ asset('assets/js/example-toastr19ce.js') }}"></script>
    <script>
        // ================================================================
        // SYSTEME DE NOTIFICATION TOAST - DOIT ÊTRE DÉFINI EN PREMIER
        // ================================================================
        class ToastNotification {
            static success(title, message, options = {}) {
                if (typeof toastr !== 'undefined' && typeof NioApp !== 'undefined') {
                    toastr.clear();
                    NioApp.Toast(
                        `<h5>${title}</h5><p>${message}</p>`, 
                        "success", 
                        { 
                            position: "top-center",
                            icon: true,
                            ...options
                        }
                    );
                }
            }

            static error(title, message, options = {}) {
                if (typeof toastr !== 'undefined' && typeof NioApp !== 'undefined') {
                    toastr.clear();
                    NioApp.Toast(
                        `<h5>${title}</h5><p>${message}</p>`, 
                        "error", 
                        { 
                            position: "top-center",
                            icon: true,
                            ...options
                        }
                    );
                }
            }

            static info(title, message, options = {}) {
                if (typeof toastr !== 'undefined' && typeof NioApp !== 'undefined') {
                    toastr.clear();
                    NioApp.Toast(
                        `<h5>${title}</h5><p>${message}</p>`, 
                        "info", 
                        { 
                            position: "top-center",
                            icon: true,
                            ...options
                        }
                    );
                }
            }

            static warning(title, message, options = {}) {
                if (typeof toastr !== 'undefined' && typeof NioApp !== 'undefined') {
                    toastr.clear();
                    NioApp.Toast(
                        `<h5>${title}</h5><p>${message}</p>`, 
                        "warning", 
                        { 
                            position: "top-center",
                            icon: true,
                            ...options
                        }
                    );
                }
            }

            static clear() {
                if (typeof toastr !== 'undefined') {
                    toastr.clear();
                }
            }
        }

        // Rendre disponible globalement
        window.ToastNotification = ToastNotification;
        window.Toast = ToastNotification;

        // ================================================================
        // DÉTECTION DES MESSAGES DE SESSION - APRÈS LA DÉFINITION
        // ================================================================
        document.addEventListener('DOMContentLoaded', function() {
            // Détection automatique des messages de session Laravel
            @if(session('success'))
                ToastNotification.success('Succès', '{{ session('success') }}');
            @endif

            @if(session('error'))
                ToastNotification.error('Erreur', '{{ session('error') }}');
            @endif

            @if(session('warning'))
                ToastNotification.warning('Attention', '{{ session('warning') }}');
            @endif

            @if(session('info'))
                ToastNotification.info('Information', '{{ session('info') }}');
            @endif

            // Détection des erreurs de validation
            @if($errors->any())
                @foreach($errors->all() as $error)
                    ToastNotification.error('Erreur', '{{ $error }}');
                @endforeach
            @endif
        });
    </script>
    @yield('scripts')
</body>
<!-- Mirrored from dashlite.net/demo1/crm/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 12 Jul 2022 22:12:52 GMT -->

</html>