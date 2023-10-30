{{-- <x-app-layout> --}}
{{-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div> --}}




<html>

<head>
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('storage/assets/img/favicons/apple-touch-icon.png') }} ">
    <link rel="icon" type="image/png" sizes="32x32"
        href="{{ asset('storage/assets/img/favicons/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16"
        href="{{ asset('storage/assets/img/favicons/favicon-16x16.png') }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('storage/assets/img/favicons/favicon.ico') }}">
    <link rel="manifest" href="{{ asset('storage/assets/img/favicons/manifest.json') }}">
    <meta name="msapplication-TileImage" content="{{ asset('storage/assets/img/favicons/mstile-150x150.png') }}">
    <meta name="theme-color" content="#ffffff">
    <script src="{{ asset('storage/assets/js/config.js') }}"></script>
    <script src="{{ asset('storage/vendors/simplebar/simplebar.min.js') }}"></script>


    <!-- ===============================================-->
    <!--    Stylesheets-->
    <!-- ===============================================-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,700%7cPoppins:300,400,500,600,700,800,900&amp;display=swap"
        rel="stylesheet">
    <link href="{{ asset('storage/vendors/simplebar/simplebar.min.css') }}" rel="stylesheet">
    <link href="{{ asset('storage/assets/css/theme-rtl.css') }}" rel="stylesheet" id="style-rtl">
    <link href="{{ asset('storage/assets/css/theme.css') }}" rel="stylesheet" id="style-default">
    <link href="{{ asset('storage/assets/css/user-rtl.css') }}" rel="stylesheet" id="user-style-rtl">
    <link href="{{ asset('storage/assets/css/user.css') }}" rel="stylesheet" id="user-style-default">
    <script>
        var isRTL = JSON.parse(localStorage.getItem('isRTL'));
        if (isRTL) {
            var linkDefault = document.getElementById('style-default');
            var userLinkDefault = document.getElementById('user-style-default');
            linkDefault.setAttribute('disabled', true);
            userLinkDefault.setAttribute('disabled', true);
            document.querySelector('html').setAttribute('dir', 'rtl');
        } else {
            var linkRTL = document.getElementById('style-rtl');
            var userLinkRTL = document.getElementById('user-style-rtl');
            linkRTL.setAttribute('disabled', true);
            userLinkRTL.setAttribute('disabled', true);
        }
    </script>
</head>


<body>
    <main class="main" id="top">
        <div class="container" data-layout="container">
            <script>
                var isFluid = JSON.parse(localStorage.getItem('isFluid'));
                if (isFluid) {
                    var container = document.querySelector('[data-layout]');
                    container.classList.remove('container');
                    container.classList.add('container-fluid');
                }
            </script>
            <nav class="navbar navbar-light navbar-vertical navbar-expand-xl">
                <script>
                    var navbarStyle = localStorage.getItem("navbarStyle");
                    if (navbarStyle && navbarStyle !== 'transparent') {
                        document.querySelector('.navbar-vertical').classList.add(`navbar-${navbarStyle}`);
                    }
                </script>
                <div class="d-flex align-items-center">
                    <div class="toggle-icon-wrapper">

                        <button class="btn navbar-toggler-humburger-icon navbar-vertical-toggle"
                            data-bs-toggle="tooltip" data-bs-placement="left" title="Toggle Navigation"><span
                                class="navbar-toggle-icon"><span class="toggle-line"></span></span></button>

                    </div><a class="navbar-brand" href="../index#">
                        <div class="d-flex align-items-center py-3"><span
                                class="font-sans-serif text-primary">Adroit</span>
                        </div>
                    </a>
                </div>
                <div class="collapse navbar-collapse" id="navbarVerticalCollapse">
                    <div class="navbar-vertical-content scrollbar">
                        <ul class="navbar-nav flex-column mb-3" id="navbarVerticalNav">
                            <li class="nav-item">
                                <!-- parent pages--><a class="nav-link dropdown-indicator" href="#dashboard"
                                    role="button" data-bs-toggle="collapse" aria-expanded="true"
                                    aria-controls="dashboard">
                                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                                                class="fas fa-chart-pie"></span></span><span
                                            class="nav-link-text ps-1">Dashboard</span>
                                    </div>
                                </a>
                                <ul class="nav collapse show" id="dashboard">
                                    <li class="nav-item"><a class="nav-link" href="../index#">
                                            <div class="d-flex align-items-center"><span
                                                    class="nav-link-text ps-1">Request a loan</span>
                                            </div>
                                        </a>
                                        <!-- more inner pages-->
                                    </li>
                                    <li class="nav-item"><a class="nav-link" href="../dashboard/analytics#">
                                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Give
                                                    a loan</span>
                                            </div>
                                        </a>
                                        <!-- more inner pages-->
                                    </li>
                                    <li class="nav-item"><a class="nav-link" href="../dashboard/crm#">
                                            <div class="d-flex align-items-center"><span
                                                    class="nav-link-text ps-1">Transfer</span>
                                            </div>
                                        </a>
                                        <!-- more inner pages-->
                                    </li>
                                    <li class="nav-item"><a class="nav-link active" href="../dashboard/e-commerce#">
                                            <div class="d-flex align-items-center"><span
                                                    class="nav-link-text ps-1">Peers</span>
                                            </div>
                                        </a>
                                        <!-- more inner pages-->
                                    </li>
                                    <li class="nav-item"><a class="nav-link" href="../dashboard/lms#">
                                            <div class="d-flex align-items-center"><span
                                                    class="nav-link-text ps-1">Track payments</span><span
                                                    class="badge rounded-pill ms-2 badge-subtle-success">New</span>
                                            </div>
                                        </a>
                                        <!-- more inner pages-->
                                    </li>
                                    <li class="nav-item"><a class="nav-link" href="../dashboard/project-management#">
                                            <div class="d-flex align-items-center"><span
                                                    class="nav-link-text ps-1">Repay Loan</span>
                                            </div>
                                        </a>
                                        <!-- more inner pages-->
                                    </li>
                                    <li class="nav-item"><a class="nav-link" href="../dashboard/saas#">
                                            <div class="d-flex align-items-center"><span
                                                    class="nav-link-text ps-1">Transaction History</span>
                                            </div>
                                        </a>
                                        <!-- more inner pages-->
                                    </li>
                                    <li class="nav-item"><a class="nav-link" href="../dashboard/support-desk#">
                                            <div class="d-flex align-items-center"><span
                                                    class="nav-link-text ps-1">Finance Management</span><span
                                                    class="badge rounded-pill ms-2 badge-subtle-success">New</span>
                                            </div>
                                        </a>
                                        <!-- more inner pages-->
                                    </li>
                                </ul>
                            </li>

                    </div>
                </div>
            </nav>
            <div class="content">
                <nav class="navbar navbar-light navbar-glass navbar-top navbar-expand">

                    <button class="btn navbar-toggler-humburger-icon navbar-toggler me-1 me-sm-3" type="button"
                        data-bs-toggle="collapse" data-bs-target="#navbarVerticalCollapse"
                        aria-controls="navbarVerticalCollapse" aria-expanded="false"
                        aria-label="Toggle Navigation"><span class="navbar-toggle-icon"><span
                                class="toggle-line"></span></span></button>
                    <a class="navbar-brand me-1 me-sm-3" href="../index#">
                        <div class="d-flex align-items-center"><img class="me-2"
                                src="assets/img/icons/spot-illustrations/falcon.png" alt=""
                                width="40" /><span class="font-sans-serif text-primary">Adroit</span>
                        </div>
                    </a>
                    <ul class="navbar-nav align-items-center d-none d-lg-block">
                        <li class="nav-item">
                        </li>
                    </ul>
                    <ul class="navbar-nav navbar-nav-icons ms-auto flex-row align-items-center">
                        <li class="nav-item ps-2 pe-0">
                            <div class="dropdown theme-control-dropdown"><a
                                    class="nav-link d-flex align-items-center dropdown-toggle fa-icon-wait fs-0 pe-1 py-0"
                                    href="#" role="button" id="themeSwitchDropdown" data-bs-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false"><span class="fas fa-sun fs-2"
                                        data-fa-transform="shrink-2"
                                        data-theme-dropdown-toggle-icon="light"></span><span class="fas fa-moon fs-2"
                                        data-fa-transform="shrink-3"
                                        data-theme-dropdown-toggle-icon="dark"></span><span class="fas fa-adjust fs-2"
                                        data-fa-transform="shrink-2"
                                        data-theme-dropdown-toggle-icon="auto"></span></a>
                                <div class="dropdown-menu dropdown-menu-end dropdown-caret border py-0 mt-3"
                                    aria-labelledby="themeSwitchDropdown">
                                    <div class="bg-white dark__bg-1000 rounded-2 py-2">
                                        <button class="dropdown-item d-flex align-items-center gap-2" type="button"
                                            value="light" data-theme-control="theme"><span
                                                class="fas fa-sun"></span>Light<span
                                                class="fas fa-check dropdown-check-icon ms-auto text-600"></span></button>
                                        <button class="dropdown-item d-flex align-items-center gap-2" type="button"
                                            value="dark" data-theme-control="theme"><span class="fas fa-moon"
                                                data-fa-transform=""></span>Dark<span
                                                class="fas fa-check dropdown-check-icon ms-auto text-600"></span></button>
                                        <button class="dropdown-item d-flex align-items-center gap-2" type="button"
                                            value="auto" data-theme-control="theme"><span class="fas fa-adjust"
                                                data-fa-transform=""></span>Auto<span
                                                class="fas fa-check dropdown-check-icon ms-auto text-600"></span></button>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link notification-indicator notification-indicator-primary px-0 fa-icon-wait"
                                id="navbarDropdownNotification" role="button" data-bs-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false"
                                data-hide-on-body-scroll="data-hide-on-body-scroll"><span class="fas fa-bell"
                                    data-fa-transform="shrink-6" style="font-size: 33px;"></span></a>
                            <div class="dropdown-menu dropdown-caret dropdown-caret dropdown-menu-end dropdown-menu-card dropdown-menu-notification dropdown-caret-bg"
                                aria-labelledby="navbarDropdownNotification">
                                <div class="card card-notification shadow-none">
                                    <div class="card-header">
                                        <div class="row justify-content-between align-items-center">
                                            <div class="col-auto">
                                                <h6 class="card-header-title mb-0">Notifications</h6>
                                            </div>
                                            <div class="col-auto ps-0 ps-sm-3"><a class="card-link fw-normal"
                                                    href="#">Mark all as read</a></div>
                                        </div>
                                    </div>
                                    <div class="scrollbar-overlay" style="max-height:19rem">
                                        <div class="list-group list-group-flush fw-normal fs--1">
                                            <div class="list-group-title border-bottom">NEW</div>
                                            <div class="list-group-item">
                                                <a class="notification notification-flush notification-unread"
                                                    href="#!">
                                                    <div class="notification-avatar">
                                                        <div class="avatar avatar-2xl me-3">
                                                            <img class="rounded-circle"
                                                                src="assets/img/team/1-thumb.png" alt="" />

                                                        </div>
                                                    </div>
                                                    <div class="notification-body">
                                                        <p class="mb-1"><strong>Emma Watson</strong> sent you a loan
                                                            $1,000</p>
                                                        <span class="notification-time"><span class="me-2"
                                                                role="img" aria-label="Emoji">💬</span>Just
                                                            now</span>

                                                    </div>
                                                </a>

                                            </div>
                                            <div class="list-group-item">
                                                <a class="notification notification-flush notification-unread"
                                                    href="#!">
                                                    <div class="notification-avatar">
                                                        <div class="avatar avatar-2xl me-3">
                                                            <div class="avatar-name rounded-circle"><span>AB</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="notification-body">
                                                        <p class="mb-1"><strong>Albert Brooks</strong> requested for
                                                            a loan</p>
                                                        <span class="notification-time"><span
                                                                class="me-2 fab fa-gratipay text-danger"></span>9hr</span>

                                                    </div>
                                                </a>

                                            </div>
                                            <div class="list-group-title border-bottom">EARLIER</div>
                                            <div class="list-group-item">


                                            </div>
                                            <div class="list-group-item">
                                                <a class="border-bottom-0 notification-unread  notification notification-flush"
                                                    href="#!">
                                                    <div class="notification-avatar">
                                                        <div class="avatar avatar-xl me-3">
                                                            <img class="rounded-circle"
                                                                src="assets/img/logos/oxford.png" alt="" />

                                                        </div>
                                                    </div>
                                                    <div class="notification-body">
                                                        <p class="mb-1"><strong>Adroit </strong> created an event :
                                                            "Peer to Peer Landing: Future of Credit"</p>
                                                        <span class="notification-time"><span class="me-2"
                                                                role="img" aria-label="Emoji">✌️</span>1w</span>

                                                    </div>
                                                </a>

                                            </div>
                                            <div class="list-group-item">


                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer text-center border-top"><a class="card-link d-block"
                                            href="../app/social/notifications#">View all</a></div>
                                </div>
                            </div>

                        </li>
                        <li class="nav-item dropdown px-1">
                            <a class="nav-link fa-icon-wait nine-dots p-1" id="navbarDropdownMenu" role="button"
                                data-hide-on-body-scroll="data-hide-on-body-scroll" data-bs-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="43"
                                    viewBox="0 0 16 16" fill="none">
                                    <circle cx="2" cy="2" r="2" fill="#6C6E71"></circle>
                                    <circle cx="2" cy="8" r="2" fill="#6C6E71"></circle>
                                    <circle cx="2" cy="14" r="2" fill="#6C6E71"></circle>
                                    <circle cx="8" cy="8" r="2" fill="#6C6E71"></circle>
                                    <circle cx="8" cy="14" r="2" fill="#6C6E71"></circle>
                                    <circle cx="14" cy="8" r="2" fill="#6C6E71"></circle>
                                    <circle cx="14" cy="14" r="2" fill="#6C6E71"></circle>
                                    <circle cx="8" cy="2" r="2" fill="#6C6E71"></circle>
                                    <circle cx="14" cy="2" r="2" fill="#6C6E71"></circle>
                                </svg></a>
                            <div class="dropdown-menu dropdown-caret dropdown-caret dropdown-menu-end dropdown-menu-card dropdown-caret-bg"
                                aria-labelledby="navbarDropdownMenu">
                                <div class="card shadow-none">
                                    <div class="scrollbar-overlay nine-dots-dropdown">
                                        <div class="card-body px-3">

                                        </div>
                                    </div>
                                </div>
                            </div>

                        </li>
                        <li class="nav-item dropdown"><a class="nav-link pe-0 ps-2" id="navbarDropdownUser"
                                role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <div class="avatar avatar-xl">
                                    <img class="rounded-circle" src="{{ asset('storage/assets/img/team/12.jpg') }} "
                                        alt="" />

                                </div>
                            </a>
                            <div class="dropdown-menu dropdown-caret dropdown-caret dropdown-menu-end py-0"
                                aria-labelledby="navbarDropdownUser">
                                <div class="bg-white dark__bg-1000 rounded-2 py-2">
                                    <a class="dropdown-item fw-bold text-warning" href="#!"><span
                                            class="fas fa-crown me-1"></span><span>Pro Lending</span></a>

                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#!">Savings</a>
                                    <a class="dropdown-item" href="../pages/user/profile#">Investments</a>
                                    <a class="dropdown-item" href="#!">Insurance</a>

                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="../pages/user/settings#">Settings</a>
                                    <a class="dropdown-item" href="../pages/authentication/card/logout#">Logout</a>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item dropdown ">
                            <div class="">
                                <x-responsive-nav-link :href="route('profile.edit')">
                                    {{ __('Profile') }}
                                </x-responsive-nav-link>

                                <!-- Authentication -->
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf

                                    <x-responsive-nav-link :href="route('logout')"
                                        onclick="event.preventDefault();
                                                        this.closest('form').submit();">
                                        {{ __('Log Out') }}
                                    </x-responsive-nav-link>
                                </form>
                            </div>
                        </li>
                    </ul>
                </nav>
                <div class="row g-3 mb-3">
                    <div class="col-xxl-6 col-xl-12">
                        <div class="row g-3">
                            <div class="col-12">
                                <div class="card bg-transparent-50 overflow-hidden">
                                    <div class="card-header position-relative">
                                        <div class="bg-holder d-none d-md-block bg-card z-1"
                                            style="background-image:url(assets/img/illustrations/ecommerce-bg.png);background-size:230px;background-position:right bottom;z-index:-1;">
                                        </div>
                                        <!--/.bg-holder-->

                                        <div class="position-relative z-2">
                                            <div>
                                                <h3 class="text-primary mb-1">Good Afternoon,
                                                    {{ Auth::user()->name }}!</h3>
                                            </div>
                                            <div class="d-flex py-3">
                                                <div class="pe-3">
                                                    <p class="text-600 fs--1 fw-medium">Account Balance</p>
                                                    <h4 class="text-800 mb-0">$14,209</h4>
                                                </div>
                                                <div class="ps-3">
                                                    <p class="text-600 fs--1">Pending Transcations</p>
                                                    <h4 class="text-800 mb-0">2</h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body p-0">
                                        <ul class="mb-0 list-unstyled list-group font-sans-serif">
                                            <li
                                                class="list-group-item mb-0 rounded-0 py-3 px-x1 list-group-item-warning border-x-0 border-top-0">
                                                <div class="row flex-between-center">
                                                    <div class="col">
                                                        <div class="d-flex">
                                                            <div class="fas fa-circle mt-1 fs--2"></div>
                                                            <p class="fs--1 ps-2 mb-0"><strong>John Doe</strong>paid
                                                                you back</p>
                                                        </div>
                                                    </div>
                                                    <div class="col-auto d-flex align-items-center"><a
                                                            class="fs--1 fw-medium text-warning-emphasis"
                                                            href="#!">$500<i
                                                                class="fas fa-chevron-right ms-1 fs--2"></i></a></div>
                                                </div>
                                            </li>
                                            <li
                                                class="list-group-item mb-0 rounded-0 py-3 px-x1 greetings-item text-700 border-x-0 border-top-0">
                                                <div class="row flex-between-center">
                                                    <div class="col">
                                                        <div class="d-flex">
                                                            <div class="fas fa-circle mt-1 fs--2 text-primary"></div>
                                                            <p class="fs--1 ps-2 mb-0"><strong>Bank
                                                                    Transfer</strong>You transferred money to your bank
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="col-auto d-flex align-items-center"><a
                                                            class="fs--1 fw-medium" href="#!">$300<i
                                                                class="fas fa-chevron-right ms-1 fs--2"></i></a></div>
                                                </div>
                                            </li>
                                            <li
                                                class="list-group-item mb-0 rounded-0 py-3 px-x1 greetings-item text-700  border-0">
                                                <div class="row flex-between-center">
                                                    <div class="col">
                                                        <div class="d-flex">
                                                            <div class="fas fa-circle mt-1 fs--2 text-primary"></div>
                                                            <p class="fs--1 ps-2 mb-0"><strong>Adroit</strong>paid you
                                                                interests</p>
                                                        </div>
                                                    </div>
                                                    <div class="col-auto d-flex align-items-center"><a
                                                            class="fs--1 fw-medium" href="#!">$20<i
                                                                class="fas fa-chevron-right ms-1 fs--2"></i></a></div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <div class="card h-md-100 ecommerce-card-min-width">
                                            <div class="card-header pb-0">
                                                <h6 class="mb-0 mt-2 d-flex align-items-center">Weekly
                                                    Transactions<span class="ms-1 text-400" data-bs-toggle="tooltip"
                                                        data-bs-placement="top"
                                                        title="Calculated according to last week's peer lending"><span
                                                            class="far fa-question-circle"
                                                            data-fa-transform="shrink-1"></span></span></h6>
                                            </div>
                                            <div class="card-body d-flex flex-column justify-content-end">
                                                <div class="row">
                                                    <div class="col">
                                                        <p class="font-sans-serif lh-1 mb-1 fs-2">$47K</p><span
                                                            class="badge badge-subtle-success rounded-pill fs--2">+3.5%</span>
                                                    </div>
                                                    <div class="col-auto ps-0">
                                                        <div
                                                            class="echart-bar-weekly-sales h-100 echart-bar-weekly-sales-smaller-width">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="card product-share-doughnut-width">
                                            <div class="card-header pb-0">
                                                <h6 class="mb-0 mt-2 d-flex align-items-center">Your Credit Score</h6>
                                            </div>
                                            <div class="card-body d-flex flex-column justify-content-end">
                                                <div class="row align-items-end">
                                                    <div class="col">
                                                        <p class="font-sans-serif lh-1 mb-1 fs-2">34.6%</p><span
                                                            class="badge badge-subtle-success rounded-pill"><span
                                                                class="fas fa-caret-up me-1"></span>3.5%</span>
                                                    </div>
                                                    <div class="col-auto ps-0">
                                                        <canvas class="my-n5" id="marketShareDoughnut"
                                                            width="112" height="112"></canvas>
                                                        <p class="mb-0 text-center fs--2 mt-4 text-500">Target: <span
                                                                class="text-800">55%</span></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="card h-md-100 h-100">
                                            <div class="card-body">
                                                <div class="row h-100 justify-content-between g-0">
                                                    <div class="col-5 col-sm-6 col-xxl pe-2">
                                                        <h6 class="mt-1">Most Used Service</h6>
                                                        <div class="fs--2 mt-3">
                                                            <div class="d-flex flex-between-center mb-1">
                                                                <div class="d-flex align-items-center"><span
                                                                        class="dot bg-primary"></span><span
                                                                        class="fw-semi-bold">Lending</span></div>
                                                                <div class="d-xxl-none">57%</div>
                                                            </div>
                                                            <div class="d-flex flex-between-center mb-1">
                                                                <div class="d-flex align-items-center"><span
                                                                        class="dot bg-info"></span><span
                                                                        class="fw-semi-bold">Investment</span></div>
                                                                <div class="d-xxl-none">20%</div>
                                                            </div>
                                                            <div class="d-flex flex-between-center mb-1">
                                                                <div class="d-flex align-items-center"><span
                                                                        class="dot bg-warning"></span><span
                                                                        class="fw-semi-bold">Savings</span></div>
                                                                <div class="d-xxl-none">22%</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-auto position-relative">
                                                        <div class="echart-product-share"></div>
                                                        <div
                                                            class="position-absolute top-50 start-50 translate-middle text-1100 fs-2">
                                                            26M</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="card">
                                            <div class="card-header pb-0">
                                                <h6 class="mb-0 mt-2 d-flex align-items-center">Total Transaction</h6>
                                            </div>
                                            <div class="card-body">
                                                <div class="row align-items-end">
                                                    <div class="col">
                                                        <p class="font-sans-serif lh-1 mb-1 fs-2">88.4K</p>
                                                        <div class="badge badge-subtle-primary rounded-pill fs--2">
                                                            <span class="fas fa-caret-up me-1"></span>13.6%
                                                        </div>
                                                    </div>
                                                    <div class="col-auto ps-0">
                                                        <div class="total-order-ecommerce"
                                                            data-echarts='{"series":[{"type":"line","data":[110,100,250,210,530,480,320,325]}],"grid":{"bottom":"-10px"}}'>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row g-3 mb-3">


                        <footer class="footer">
                            <div class="row g-0 justify-content-between fs--1 mt-4 mb-3">
                                <div class="col-12 col-sm-auto text-center">
                                    <p class="mb-0 text-600">Thank you for using Adroit<span
                                            class="d-none d-sm-inline-block">| </span><br class="d-sm-none" /> 2023
                                        &copy;</p>
                                </div>
                            </div>
                        </footer>
                    </div>

                </div>
    </main>
</body>
<script src="{{ asset('storage/vendors/bootstrap/bootstrap.min.js') }}"></script>
<script src="{{ asset('storage/vendors/popper/popper.min.js') }}"></script>
<script src="{{ asset('storage/vendors/anchorjs/anchor.min.js') }}"></script>
<script src="{{ asset('storage/vendors/is/is.min.js') }}"></script>
<script src="{{ asset('storage/vendors/chart/chart.min.js') }}"></script>
<script src="{{ asset('storage/vendors/countup/countUp.umd.js') }}"></script>
<script src="{{ asset('storage/vendors/echarts/echarts.min.js') }}"></script>
<script src="{{ asset('storage/vendors/dayjs/dayjs.min.js') }}"></script>
<script src="{{ asset('storage/vendors/fontawesome/all.min.js') }}"></script>
<script src="{{ asset('storage/vendors/lodash/lodash.min.js') }}"></script>
<script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>
<script src="{{ asset('storage/vendors/list.js/list.min.js') }}"></script>
<script src="{{ asset('storage/assets/js/theme.js') }}"></script>

</html>
{{-- </x-app-layout> --}}
