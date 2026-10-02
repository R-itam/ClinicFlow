<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <title>{{ $title }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" sizes="180x180"
        href="{{ asset('template2/src/assets/images/favicon_io/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32"
        href="{{ asset('template2/src/assets/images/favicon_io/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16"
        href="{{ asset('template2/src/assets/images/favicon_io/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('template2/src/assets/images/favicon_io/site.webmanifest') }}">

    <!-- Bootstrap 5 CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">

    <!-- Template 2 Compiled Stylesheet -->
    <link rel="stylesheet" href="{{ asset('template2/assets/css/style.css') }}">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
</head>

<body>
  
    <div id="overlay" class="overlay"></div>
    <!-- TOPBAR -->
    <nav id="topbar" class="navbar bg-white border-bottom fixed-top topbar px-3">
        <button id="toggleBtn" class="d-none d-lg-inline-flex btn btn-light btn-icon btn-sm ">
            <i class="ti ti-layout-sidebar-left-expand"></i>
        </button>

        <!-- MOBILE -->
        <button id="mobileBtn" class="btn btn-light btn-icon btn-sm d-lg-none me-2">
            <i class="ti ti-layout-sidebar-left-expand"></i>
        </button>
        <div>
            <!-- Navbar nav -->
            <ul class="list-unstyled d-flex align-items-center mb-0 gap-1">
                <!-- Bell icon -->
                <li class="dropdown">
                    <a class="position-relative btn-icon btn-sm btn-light btn rounded-circle" data-bs-toggle="dropdown"
                        aria-expanded="false" href="#" role="button">
                        <i class="ti ti-bell fs-5"></i>
                        <span
                            class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger mt-2 ms-n2">
                            2
                            <span class="visually-hidden">unread messages</span>
                        </span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end dropdown-menu-md p-0">
                        <ul class="list-unstyled p-0 m-0">
                            <li class="p-3 border-bottom">
                                <div class="d-flex gap-3">
                                    <img src="{{ asset('template2/src/assets/images/avatar/avatar-1.jpg') }}"
                                        alt="" class="avatar avatar-sm rounded-circle" />
                                    <div class="flex-grow-1 small">
                                        <p class="mb-0 fw-semibold">New order received</p>
                                        <p class="mb-1 text-muted">Order #12345 has been placed</p>
                                        <div class="text-secondary small">5 minutes ago</div>
                                    </div>
                                </div>
                            </li>
                            <li class="p-3 border-bottom">
                                <div class="d-flex gap-3">
                                    <img src="{{ asset('template2/src/assets/images/avatar/avatar-4.jpg') }}"
                                        alt="" class="avatar avatar-sm rounded-circle" />
                                    <div class="flex-grow-1 small">
                                        <p class="mb-0 fw-semibold">New user registered</p>
                                        <p class="mb-1 text-muted">User @john_doe has signed up</p>
                                        <div class="text-secondary small">30 minutes ago</div>
                                    </div>
                                </div>
                            </li>
                            <li class="p-3 border-bottom">
                                <div class="d-flex gap-3">
                                    <img src="{{ asset('template2/src/assets/images/avatar/avatar-2.jpg') }}"
                                        alt="" class="avatar avatar-sm rounded-circle" />
                                    <div class="flex-grow-1 small">
                                        <p class="mb-0 fw-semibold">Payment confirmed</p>
                                        <p class="mb-1 text-muted">Payment of $299 has been received</p>
                                        <div class="text-secondary small">1 hour ago</div>
                                    </div>
                                </div>
                            </li>
                            <li class="px-4 py-3 text-center">
                                <a href="#" class="text-primary small fw-semibold">View all notifications</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <!-- Dropdown -->
                <li class="ms-3 dropdown">
                    <a href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="{{ asset('template2/src/assets/images/avatar/avatar-1.jpg') }}" alt=""
                            class="avatar avatar-sm rounded-circle" />
                    </a>
                    <div class="dropdown-menu dropdown-menu-end p-0" style="min-width: 200px;">
                        <div>
                            <div class="d-flex gap-3 align-items-center border-dashed border-bottom px-3 py-3">
                                <img src="{{ asset('template2/src/assets/images/avatar/avatar-1.jpg') }}"
                                    alt="" class="avatar avatar-md rounded-circle" />
                                <div>
                                    <h4 class="mb-0 small fw-bold">Shrina Tesla</h4>
                                    <p class="mb-0 small text-muted">@imshrina</p>
                                </div>
                            </div>
                            <div class="p-3 d-flex flex-column gap-1 small lh-lg">
                                <a href="{{ url('/admindashboard') }}" class="text-dark text-decoration-none">
                                    <span>Home</span>
                                </a>
                                <a href="#!" class="text-dark text-decoration-none">
                                    <span>Inbox</span>
                                </a>
                                <a href="#!" class="text-dark text-decoration-none">
                                    <span>Chat</span>
                                </a>
                                <a href="#!" class="text-dark text-decoration-none">
                                    <span>Activity</span>
                                </a>
                                <a href="#!" class="text-dark text-decoration-none">
                                    <span>Account Settings</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </nav>

    <!-- SIDEBAR -->
    <aside id="sidebar" class="sidebar">
        <div class="logo-area">
            <a href="{{ url('/admindashboard') }}" class="d-inline-flex align-items-center text-decoration-none">
                <img src="{{ asset('template2/src/assets/images/logo-icon.svg') }}" alt="" width="24">
                <span class="logo-text ms-2">
                    <img src="{{ asset('template2/src/assets/images/logo.svg') }}" alt="">
                </span>
            </a>
        </div>
        <ul class="nav flex-column">
            <li class="px-4 py-2"><small class="nav-text text-muted text-uppercase fw-bold"
                    style="font-size: 11px;">Main</small></li>
            <li>
                <a class="nav-link active" href="{{ url('/admindashboard') }}">
                    <i class="ti ti-home"></i><span class="nav-text">Dashboard</span>
                </a>
            </li>
            <li>
                <a class="nav-link" href="{{ url('/clinic') }}">
                    <i class="ti ti-box-seam"></i><span class="nav-text">Clinic</span>
                </a>
            </li>
            <li>
                <a class="nav-link" href="#">
                    <i class="ti ti-plus"></i><span class="nav-text">Add Product</span>
                </a>
            </li>
            <li>
                <a class="nav-link" href="#">
                    <i class="ti ti-receipt"></i><span class="nav-text">Reports</span>
                </a>
            </li>
            <li>
                <a class="nav-link" href="#">
                    <i class="ti ti-alert-circle"></i><span class="nav-text">404 Error</span>
                </a>
            </li>
            <li>
                <a class="nav-link" href="#">
                    <i class="ti ti-file-text"></i><span class="nav-text">Docs</span>
                </a>
            </li>

            <li class="px-4 pt-4 pb-2"><small class="nav-text text-muted text-uppercase fw-bold"
                    style="font-size: 11px;">Account</small></li>
            <li>
                <a class="nav-link" href="{{ url('/admin-login') }}">
                    <i class="ti ti-logout"></i><span class="nav-text">Log in</span>
                </a>
            </li>
            <li>
                <a class="nav-link" href="{{ url('/admin-register') }}">
                    <i class="ti ti-user-plus"></i><span class="nav-text">Sign up</span>
                </a>
            </li>
        </ul>
    </aside>
