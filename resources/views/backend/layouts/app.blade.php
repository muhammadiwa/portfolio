<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal Portfolio | Dashboard</title>
    <!-- Icon Microwlights -->
    <link rel="shortcut icon" href="{{ url('public/template/assets/img/brand/icon.svg') }}" type="image/x-icon">
    <!-- Custom CSS Files -->
    <link rel="stylesheet" href="{{ url('public/template/main.css') }}">

    <!-- Template CSS -->
    <link rel="stylesheet" href="{{ url('public/template/assets/css/microwlights.css') }}">

    <!-- CSS Libraries -->
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="{{ url('public/template/node_modules/bootstrap-icons/font/bootstrap-icons.css') }}">
    <script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>

    

</head>

<body id="body-pd">
    <!-- Header -->
    <header class="header" id="header">
        <div class="header__toggle text-primary-500">
            <i class="bi bi-list" id="header-toggle"></i>
        </div>

        <div class="header__content">
            <!-- Search button -->
            <button type="button" class="btn btn-outline-secondary-300 btn-circle btn-circle-sm me-3"
                data-bs-toggle="modal" data-bs-target="#modalSearch">
                <i class='bx bx-search'></i>
            </button>
            <!-- Notification button-->
            <button type="button" class="btn btn-outline-secondary-300 btn-circle btn-circle-sm me-3"
                id="dropdownMenuOffset" data-bs-toggle="dropdown" aria-expanded="false" data-bs-offset="20,20">
                <i class='bx bx-notification'></i>
            </button>
            <ul class="dropdown-menu border-0 shadow-lg p-2" aria-labelledby="dropdownMenuOffset">
                <div class="card">
                    <div class="card-header border-0 bg-transparent">
                        <div class="float-start pe-5">
                            <h6 class="fw-bold">Notifications</h6>
                        </div>
                        <div class="float-end">
                            <a href="#" class="md-text-rg ps-5 text-secondary-500"> Mark all read</a>
                        </div>
                    </div>
                    <div class="card-body notif">
                        <div class="d-flex mb-3">
                            <div class="float-start">
                                <i
                                    class="bi bi-code-slash icon-card-notification left text-white text-bg-primary-50 text-primary-500"></i>
                            </div>
                            <div class="description-notification float-end">
                                <a href="#" class="md-text-md fw-bold text-secondary-700 ps-3">Template update is
                                    available
                                    now!</a>
                                <p class="sm-text-rg text-secondary-500 ps-3">17 Hours ago</p>
                            </div>
                        </div>
                        <div class="d-flex mb-3">
                            <div class="float-start">
                                <i
                                    class="bi bi-emoji-smile icon-card-notification left text-white text-bg-warning-100 text-warning-500"></i>
                            </div>
                            <div class="description-notification float-end">
                                <a href="#" class="md-text-md fw-bold text-secondary-700 ps-3">Welcome to Microwlights
                                    template!</a>
                                <p class="sm-text-rg text-secondary-500 ps-3">Yesterday</p>
                            </div>
                        </div>
                        <div class="d-flex mb-3">
                            <div class="float-start">
                                <i
                                    class="bi bi-hdd icon-card-notification left text-white text-bg-danger-100 text-danger-500"></i>
                            </div>
                            <div class="description-notification float-end">
                                <a href="#" class="md-text-md fw-bold text-secondary-700 ps-3">Low disk space. Let's
                                    clean it!</a>
                                <p class="sm-text-rg text-secondary-500 ps-3">18 Hours Ago</p>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer text-center bg-transparent border-0">
                        <a href="#" class="md-text-rg"> View all</a>
                    </div>
                </div>
            </ul>
            <!-- Messages button -->
            <button class="btn btn-outline-secondary-300 btn-circle btn-circle-sm me-3" id="dropdownMenuOffsetNew"
                data-bs-toggle="dropdown" aria-expanded="false" data-bs-offset="20,20">
                <i class='bx bx-message-square-detail'></i>
            </button>
            <ul class="dropdown-menu border-0 shadow-lg p-2" aria-labelledby="dropdownMenuOffsetNew">
                <div class="card">
                    <div class="card-header border-0 bg-transparent">
                        <div class="float-start pe-5">
                            <h6 class="fw-bold">Messages</h6>
                        </div>
                        <div class="float-end">
                            <a href="#" class="md-text-rg ps-5 text-secondary-500"> Mark all as read</a>
                        </div>
                    </div>
                    <div class="card-body notif">
                        <div class="d-flex mb-3">
                            <div class="float-start">
                                <img src="{{ url('public/template/assets/img/avatar/avatar-boy.png') }}" alt="avatar" class="w-100">
                            </div>
                            <div class="description-notification float-end">
                                <a href="#" class="md-text-md fw-bold text-secondary-700 ps-3 mb-5">Jhon doe</a><br>
                                <span class="ps-3">Helo bro, how are you today ? 😊</span>
                                <p class="sm-text-rg text-secondary-500 ps-3">17 Hours ago</p>
                            </div>
                        </div>
                        <div class="d-flex mb-3">
                            <div class="float-start">
                                <img src="{{ url('public/template/assets/img/avatar/avatar-girl.png') }}" alt="avatar" class="w-100">
                            </div>
                            <div class="description-notification float-end">
                                <a href="#" class="md-text-md fw-bold text-secondary-700 ps-3 mb-5">Elfira</a><br>
                                <span class="ps-3">Hey baby ❤️</span>
                                <p class="sm-text-rg text-secondary-500 ps-3">12 Hours ago</p>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer text-center bg-transparent border-0">
                        <a href="#" class="md-text-rg"> View all</a>
                    </div>
                </div>
            </ul>
            <!-- Profile link -->
            <a href="#" id="dropdownProfile" data-bs-toggle="dropdown" aria-expanded="false" data-bs-offset="10,20">
                <img src="{{ url('public/template/assets/img/avatar/avatar-2.jpg" alt="avatar') }}" alt="">
                <ul class="dropdown-menu border-0 shadow-lg rounded ps-2 pe-5" aria-labelledby="dropdownProfile">
                    <li>
                        <span class="dropdown-header fw-bold">👋 Hey, Fin</span>
                    </li>
                    <li class="align-middle">
                        <a class="dropdown-item" href="{{ url('public/template/account/profile.html') }}"> Profil</a>
                    </li>
                    <li>
                        <a class="dropdown-item text-danger fw-bold" href="{{ url('public/template/pages/login.html') }}">Logout</a>
                    </li>
                </ul>
            </a>
        </div>
    </header>

    <!-- Navbar -->
    @include('backend.layouts.sidebar')

    <!-- Container wrapper -->
    <div class="main-content">
        <!-- Start content here -->
        <div class="header__page d-flex align-items-left align-items-md-center flex-column flex-md-row pt-5 mb-4">
            <div>
                <h2 class="fw-bold">@yield('title')</h2>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb sm-text-rg">
                        <li class="breadcrumb-item"><a href="#">@yield('menu')</a></li>
                        <li class="breadcrumb-item">@yield('title')</li>
                    </ol>
                </nav>
            </div>
        </div>

        @yield('content')
    </div>

    @include('backend.layouts.footer')

    <!-- General JS Scripts -->
    <script src="{{ url('public/template/node_modules/bootstrap/dist/js/bootstrap.bundle.js')}}"></script>

    <!-- Template JS FIle -->
    <script src="{{ url('public/template/node_modules/bootstrap/dist/js/main.js')}}"></script>

    <!-- Js Libraries -->
    <script src="{{ url('public/template/assets/js/jquery.min.js')}}"></script>
    <script>
        // Collapse sidebar accordion container components 
        $(function () {
            // This is where we define the accordion container's maximum height, and scrolling if the content overflows.
            var containerOffset = $('#accordion-container-components').offset(); // gets the container's origin coordinates
            var containerHeight = ($(window).height() - containerOffset.top) - 400; //determines container's maximum height
            $('#accordion-container-components').css({ // sets container's maximum height & enables vertical scrolling for content overflow
                'max-height': containerHeight,
                'overflow-y': 'auto'
            });
        });

        $(function () {
            // This is where we define the accordion container's maximum height, and scrolling if the content overflows.
            var containerOffset = $('#accordion-container-utilities').offset(); // gets the container's origin coordinates
            var containerHeight = ($(window).height() - containerOffset.top) - 400; //determines container's maximum height
            $('#accordion-container-utilities').css({ // sets container's maximum height & enables vertical scrolling for content overflow
                'max-height': containerHeight,
                'overflow-y': 'auto'
            });
        });

        $(function () {
            // This is where we define the accordion container's maximum height, and scrolling if the content overflows.
            var containerOffset = $('#accordion-container-pages').offset(); // gets the container's origin coordinates
            var containerHeight = ($(window).height() - containerOffset.top) - 400; //determines container's maximum height
            $('#accordion-container-pages').css({ // sets container's maximum height & enables vertical scrolling for content overflow
                'max-height': containerHeight,
                'overflow-y': 'auto'
            });
        });
    </script>

</body>

</html>