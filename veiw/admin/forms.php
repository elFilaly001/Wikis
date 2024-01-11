<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from coderthemes.com/jidox/layouts/form-elements.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 08 Jan 2024 14:31:08 GMT -->

<head>
    <meta charset="utf-8" />
    <title>Form Elements | Jidox - Material Design Admin & Dashboard Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- Theme Config Js -->
    <script src="assets/js/config.js"></script>

    <!-- App css -->
    <link href="assets/css/app.min.css" rel="stylesheet" type="text/css" id="app-style" />

    <!-- Icons css -->
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
</head>

<body>
    <!-- Begin page -->
    <div class="wrapper">


        <!-- ========== Topbar Start ========== -->
        <div class="navbar-custom">
            <div class="topbar container-fluid">
                <div class="d-flex align-items-center gap-lg-2 gap-1">

                    <!-- Topbar Brand Logo -->
                    <div class="logo-topbar">
                        <!-- Logo light -->
                        <a href="index.html" class="logo-light">
                            <span class="logo-lg">
                                <img src="assets/images/logo.png" alt="logo">
                            </span>
                            <span class="logo-sm">
                                <img src="assets/images/logo-sm.png" alt="small logo">
                            </span>
                        </a>

                        <!-- Logo Dark -->
                        <a href="index.html" class="logo-dark">
                            <span class="logo-lg">
                                <img src="assets/images/logo-dark.png" alt="dark logo">
                            </span>
                            <span class="logo-sm">
                                <img src="assets/images/logo-sm.png" alt="small logo">
                            </span>
                        </a>
                    </div>

                    <!-- Sidebar Menu Toggle Button -->
                    <button class="button-toggle-menu">
                        <i class="ri-menu-2-fill"></i>
                    </button>

                    <!-- Horizontal Menu Toggle Button -->
                    <button class="navbar-toggle" data-bs-toggle="collapse" data-bs-target="#topnav-menu-content">
                        <div class="lines">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </button>

                    <!-- Topbar Search Form -->
                    <div class="app-search dropdown d-none d-lg-block">
                        <form>
                            <div class="input-group">
                                <input type="search" class="form-control dropdown-toggle" placeholder="Search..." id="top-search">
                                <span class="ri-search-line search-icon"></span>
                            </div>
                        </form>

                        <div class="dropdown-menu dropdown-menu-animated dropdown-lg" id="search-dropdown">
                            <!-- item-->
                            <div class="dropdown-header noti-title">
                                <h5 class="text-overflow mb-1">Found <b class="text-decoration-underline">08</b> results</h5>
                            </div>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="ri-file-chart-line fs-16 me-1"></i>
                                <span>Analytics Report</span>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="ri-lifebuoy-line fs-16 me-1"></i>
                                <span>How can I help you?</span>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="ri-user-settings-line fs-16 me-1"></i>
                                <span>User profile settings</span>
                            </a>

                            <!-- item-->
                            <div class="dropdown-header noti-title">
                                <h6 class="text-overflow mt-2 mb-1 text-uppercase">Users</h6>
                            </div>

                            <div class="notification-list">
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="d-flex">
                                        <img class="d-flex me-2 rounded-circle" src="assets/images/users/avatar-2.jpg" alt="Generic placeholder image" height="32">
                                        <div class="w-100">
                                            <h5 class="m-0 fs-14">Erwin Brown</h5>
                                            <span class="fs-12 mb-0">UI Designer</span>
                                        </div>
                                    </div>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="d-flex">
                                        <img class="d-flex me-2 rounded-circle" src="assets/images/users/avatar-5.jpg" alt="Generic placeholder image" height="32">
                                        <div class="w-100">
                                            <h5 class="m-0 fs-14">Jacob Deo</h5>
                                            <span class="fs-12 mb-0">Developer</span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <ul class="topbar-menu d-flex align-items-center gap-3">
                    <li class="dropdown d-lg-none">
                        <a class="nav-link dropdown-toggle arrow-none" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                            <i class="ri-search-line fs-22"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end dropdown-menu-animated dropdown-lg p-0">
                            <form class="p-3">
                                <input type="search" class="form-control" placeholder="Search ..." aria-label="Recipient's username">
                            </form>
                        </div>
                    </li>

                    <li class="dropdown">
                        <a class="nav-link dropdown-toggle arrow-none" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                            <img src="assets/images/flags/us.jpg" alt="user-image" class="me-0 me-sm-1" height="12">
                            <span class="align-middle d-none d-lg-inline-block">English</span> <i class="ri-arrow-down-s-line d-none d-sm-inline-block align-middle"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end dropdown-menu-animated">

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item">
                                <img src="assets/images/flags/germany.jpg" alt="user-image" class="me-1" height="12"> <span class="align-middle">German</span>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item">
                                <img src="assets/images/flags/italy.jpg" alt="user-image" class="me-1" height="12"> <span class="align-middle">Italian</span>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item">
                                <img src="assets/images/flags/spain.jpg" alt="user-image" class="me-1" height="12"> <span class="align-middle">Spanish</span>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item">
                                <img src="assets/images/flags/russia.jpg" alt="user-image" class="me-1" height="12"> <span class="align-middle">Russian</span>
                            </a>

                        </div>
                    </li>

                    <li class="dropdown notification-list">
                        <a class="nav-link dropdown-toggle arrow-none" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                            <i class="ri-notification-3-fill fs-22"></i>
                            <span class="noti-icon-badge"></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end dropdown-menu-animated dropdown-lg py-0">
                            <div class="p-2 border-top-0 border-start-0 border-end-0 border-dashed border">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <h6 class="m-0 fs-16 fw-medium"> Notification</h6>
                                    </div>
                                    <div class="col-auto">
                                        <a href="javascript: void(0);" class="text-dark text-decoration-underline">
                                            <small>Clear All</small>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div style="max-height: 300px;" data-simplebar>

                                <h5 class="text-muted fs-12 fw-bold p-2 text-uppercase mb-0">Today</h5>
                                <!-- item-->

                                <a href="javascript:void(0);" class="dropdown-item p-0 notify-item unread-noti card m-0 shadow-none">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center">
                                            <div class="flex-shrink-0">
                                                <div class="notify-icon bg-primary">
                                                    <i class="ri-message-3-line fs-18"></i>
                                                </div>
                                            </div>
                                            <div class="flex-grow-1 text-truncate ms-2">
                                                <h5 class="noti-item-title fw-medium fs-14">Datacorp <small class="fw-normal text-muted float-end ms-1">1 min ago</small></h5>
                                                <small class="noti-item-subtitle text-muted">Caleb Flakelar commented on Admin</small>
                                            </div>
                                        </div>
                                    </div>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item p-0 notify-item read-noti card m-0 shadow-none">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center">
                                            <div class="flex-shrink-0">
                                                <div class="notify-icon bg-info">
                                                    <i class="ri-user-add-line fs-18"></i>
                                                </div>
                                            </div>
                                            <div class="flex-grow-1 text-truncate ms-2">
                                                <h5 class="noti-item-title fw-medium fs-14">Admin <small class="fw-normal text-muted float-end ms-1">1 hr ago</small></h5>
                                                <small class="noti-item-subtitle text-muted">New user registered</small>
                                            </div>
                                        </div>
                                    </div>
                                </a>

                                <h5 class="text-muted fs-12 fw-bold p-2 mb-0 text-uppercase">Yesterday</h5>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item p-0 notify-item read-noti card m-0 shadow-none">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center">
                                            <div class="flex-shrink-0">
                                                <div class="notify-icon">
                                                    <img src="assets/images/users/avatar-2.jpg" class="img-fluid rounded-circle" alt="" />
                                                </div>
                                            </div>
                                            <div class="flex-grow-1 text-truncate ms-2">
                                                <h5 class="noti-item-title fw-medium fs-14">Cristina Pride <small class="fw-normal text-muted float-end ms-1">1 day ago</small></h5>
                                                <small class="noti-item-subtitle text-muted">Hi, How are you? What about our next meeting</small>
                                            </div>
                                        </div>
                                    </div>
                                </a>

                                <h5 class="text-muted fs-12 fw-bold p-2 mb-0 text-uppercase">31 Jan 2023</h5>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item p-0 notify-item read-noti card m-0 shadow-none">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center">
                                            <div class="flex-shrink-0">
                                                <div class="notify-icon bg-primary">
                                                    <i class="ri-discuss-line fs-18"></i>
                                                </div>
                                            </div>
                                            <div class="flex-grow-1 text-truncate ms-2">
                                                <h5 class="noti-item-title fw-medium fs-14">Datacorp</h5>
                                                <small class="noti-item-subtitle text-muted">Caleb Flakelar commented on Admin</small>
                                            </div>
                                        </div>
                                    </div>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item p-0 notify-item read-noti card m-0 shadow-none">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center">
                                            <div class="flex-shrink-0">
                                                <div class="notify-icon">
                                                    <img src="assets/images/users/avatar-4.jpg" class="img-fluid rounded-circle" alt="" />
                                                </div>
                                            </div>
                                            <div class="flex-grow-1 text-truncate ms-2">
                                                <h5 class="noti-item-title fw-medium fs-14">Karen Robinson</h5>
                                                <small class="noti-item-subtitle text-muted">Wow ! this admin looks good and awesome design</small>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <!-- All-->
                            <a href="javascript:void(0);" class="dropdown-item text-center text-primary text-decoration-underline fw-bold notify-item border-top border-light py-2">
                                View All
                            </a>

                        </div>
                    </li>

                    <li class="dropdown d-none d-sm-inline-block">
                        <a class="nav-link dropdown-toggle arrow-none" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                            <i class="ri-apps-2-fill fs-22"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end dropdown-menu-animated dropdown-lg p-0">

                            <div class="p-2">
                                <div class="row g-0">
                                    <div class="col">
                                        <a class="dropdown-icon-item" href="#">
                                            <img src="assets/images/brands/github.png" alt="Github">
                                            <span>GitHub</span>
                                        </a>
                                    </div>
                                    <div class="col">
                                        <a class="dropdown-icon-item" href="#">
                                            <img src="assets/images/brands/bitbucket.png" alt="bitbucket">
                                            <span>Bitbucket</span>
                                        </a>
                                    </div>
                                    <div class="col">
                                        <a class="dropdown-icon-item" href="#">
                                            <img src="assets/images/brands/dropbox.png" alt="dropbox">
                                            <span>Dropbox</span>
                                        </a>
                                    </div>
                                </div>

                                <div class="row g-0">
                                    <div class="col">
                                        <a class="dropdown-icon-item" href="#">
                                            <img src="assets/images/brands/slack.png" alt="slack">
                                            <span>Slack</span>
                                        </a>
                                    </div>
                                    <div class="col">
                                        <a class="dropdown-icon-item" href="#">
                                            <img src="assets/images/brands/dribbble.png" alt="dribbble">
                                            <span>Dribbble</span>
                                        </a>
                                    </div>
                                    <div class="col">
                                        <a class="dropdown-icon-item" href="#">
                                            <img src="assets/images/brands/behance.png" alt="Behance">
                                            <span>Behance</span>
                                        </a>
                                    </div>
                                </div> <!-- end row-->
                            </div>

                        </div>
                    </li>

                    <li class="d-none d-sm-inline-block">
                        <a class="nav-link" data-bs-toggle="offcanvas" href="#theme-settings-offcanvas">
                            <i class="ri-settings-3-fill fs-22"></i>
                        </a>
                    </li>

                    <li class="d-none d-sm-inline-block">
                        <div class="nav-link" id="light-dark-mode">
                            <i class="ri-moon-fill fs-22"></i>
                        </div>
                    </li>


                    <li class="d-none d-md-inline-block">
                        <a class="nav-link" href="#" data-toggle="fullscreen">
                            <i class="ri-fullscreen-line fs-22"></i>
                        </a>
                    </li>

                    <li class="dropdown me-md-2">
                        <a class="nav-link dropdown-toggle arrow-none nav-user px-2" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                            <span class="account-user-avatar">
                                <img src="assets/images/users/avatar-1.jpg" alt="user-image" width="32" class="rounded-circle">
                            </span>
                            <span class="d-lg-flex flex-column gap-1 d-none">
                                <h5 class="my-0">Doris Larson</h5>
                                <h6 class="my-0 fw-normal">Founder</h6>
                            </span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end dropdown-menu-animated profile-dropdown">
                            <!-- item-->
                            <div class=" dropdown-header noti-title">
                                <h6 class="text-overflow m-0">Welcome !</h6>
                            </div>

                            <!-- item-->
                            <a href="pages-profile.html" class="dropdown-item">
                                <i class="ri-account-circle-fill align-middle me-1"></i>
                                <span>My Account</span>
                            </a>

                            <!-- item-->
                            <a href="pages-profile.html" class="dropdown-item">
                                <i class="ri-settings-4-fill align-middle me-1"></i>
                                <span>Settings</span>
                            </a>

                            <!-- item-->
                            <a href="pages-faq.html" class="dropdown-item">
                                <i class="ri-customer-service-2-fill align-middle me-1"></i>
                                <span>Support</span>
                            </a>

                            <!-- item-->
                            <a href="auth-lock-screen.html" class="dropdown-item">
                                <i class="ri-lock-password-fill align-middle me-1"></i>
                                <span>Lock Screen</span>
                            </a>

                            <!-- item-->
                            <a href="auth-logout-2.html" class="dropdown-item">
                                <i class="ri-logout-box-fill align-middle me-1"></i>
                                <span>Logout</span>
                            </a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <!-- ========== Topbar End ========== -->

        <!-- ========== Left Sidebar Start ========== -->
        <div class="leftside-menu">

            <!-- Brand Logo Light -->
            <a href="index.html" class="logo logo-light">
                <span class="logo-lg">
                    <img src="assets/images/logo.png" alt="logo">
                </span>
                <span class="logo-sm">
                    <img src="assets/images/logo-sm.png" alt="small logo">
                </span>
            </a>

            <!-- Brand Logo Dark -->
            <a href="index.html" class="logo logo-dark">
                <span class="logo-lg">
                    <img src="assets/images/logo-dark.png" alt="dark logo">
                </span>
                <span class="logo-sm">
                    <img src="assets/images/logo-sm.png" alt="small logo">
                </span>
            </a>

            <!-- Sidebar Hover Menu Toggle Button -->
            <div class="button-sm-hover" data-bs-toggle="tooltip" data-bs-placement="right" title="Show Full Sidebar">
                <i class="ri-checkbox-blank-circle-line align-middle"></i>
            </div>

            <!-- Full Sidebar Menu Close Button -->
            <div class="button-close-fullsidebar">
                <i class="ri-close-fill align-middle"></i>
            </div>

            <!-- Sidebar -left -->
            <div class="h-100" id="leftside-menu-container" data-simplebar>
                <!-- Leftbar User -->
                <div class="leftbar-user p-3 text-white">
                    <a href="pages-profile.html" class="d-flex align-items-center text-reset">
                        <div class="flex-shrink-0">
                            <img src="assets/images/users/avatar-1.jpg" alt="user-image" height="42" class="rounded-circle shadow">
                        </div>
                        <div class="flex-grow-1 ms-2">
                            <span class="fw-semibold fs-15 d-block">Doris Larson</span>
                            <span class="fs-13">Founder</span>
                        </div>
                        <div class="ms-auto">
                            <i class="ri-arrow-right-s-fill fs-20"></i>
                        </div>
                    </a>
                </div>

                <!--- Sidemenu -->
                <ul class="side-nav">

                    <li class="side-nav-title mt-1"> Main</li>

                    <li class="side-nav-item">
                        <a href="index.html" class="side-nav-link">
                            <i class="ri-dashboard-2-fill"></i>
                            <span class="badge bg-success float-end">9+</span>
                            <span> Dashboard </span>
                        </a>
                    </li>

                    <li class="side-nav-item">
                        <a href="apps-calendar.html" class="side-nav-link">
                            <i class="ri-calendar-2-fill"></i>
                            <span> Calendar </span>
                        </a>
                    </li>

                    <li class="side-nav-item">
                        <a href="apps-chat.html" class="side-nav-link">
                            <i class="ri-chat-voice-fill"></i>
                            <span> Chat </span>
                        </a>
                    </li>

                    <li class="side-nav-item">
                        <a data-bs-toggle="collapse" href="#sidebarEmail" aria-expanded="false" aria-controls="sidebarEmail" class="side-nav-link">
                            <i class="ri-mail-fill"></i>
                            <span> Email </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <div class="collapse" id="sidebarEmail">
                            <ul class="side-nav-second-level">
                                <li>
                                    <a href="apps-email-inbox.html">Inbox</a>
                                </li>
                                <li>
                                    <a href="apps-email-read.html">Read Email</a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="side-nav-item">
                        <a data-bs-toggle="collapse" href="#sidebarTasks" aria-expanded="false" aria-controls="sidebarTasks" class="side-nav-link">
                            <i class="ri-list-check-3"></i>
                            <span> Tasks </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <div class="collapse" id="sidebarTasks">
                            <ul class="side-nav-second-level">
                                <li>
                                    <a href="apps-tasks.html">List</a>
                                </li>
                                <li>
                                    <a href="apps-tasks-details.html">Details</a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="side-nav-item">
                        <a href="apps-kanban.html" class="side-nav-link">
                            <i class="ri-clipboard-fill"></i>
                            <span> Kanban Board </span>
                        </a>
                    </li>

                    <li class="side-nav-item">
                        <a href="apps-file-manager.html" class="side-nav-link">
                            <i class="ri-folder-4-fill"></i>
                            <span class="badge bg-purple float-end">1 File</span>
                            <span> File Manager </span>
                        </a>
                    </li>

                    <li class="side-nav-title mt-2">Custom</li>

                    <li class="side-nav-item">
                        <a data-bs-toggle="collapse" href="#sidebarPages" aria-expanded="false" aria-controls="sidebarPages" class="side-nav-link">
                            <i class="ri-pages-fill"></i>
                            <span> Pages </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <div class="collapse" id="sidebarPages">
                            <ul class="side-nav-second-level">
                                <li>
                                    <a href="pages-profile.html">Profile</a>
                                </li>
                                <li>
                                    <a href="pages-invoice.html">Invoice</a>
                                </li>
                                <li>
                                    <a href="pages-faq.html">FAQ</a>
                                </li>
                                <li>
                                    <a href="pages-pricing.html">Pricing</a>
                                </li>
                                <li>
                                    <a href="pages-maintenance.html">Maintenance</a>
                                </li>
                                <li>
                                    <a href="pages-starter.html">Starter Page</a>
                                </li>
                                <li>
                                    <a href="pages-preloader.html">With Preloader</a>
                                </li>
                                <li>
                                    <a href="pages-timeline.html">Timeline</a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="side-nav-item">
                        <a data-bs-toggle="collapse" href="#sidebarPagesAuth" aria-expanded="false" aria-controls="sidebarPagesAuth" class="side-nav-link">
                            <i class="ri-group-2-fill"></i>
                            <span> Auth Pages </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <div class="collapse" id="sidebarPagesAuth">
                            <ul class="side-nav-second-level">
                                <li>
                                    <a href="auth-login.html">Login</a>
                                </li>
                                <li>
                                    <a href="auth-login-2.html">Login 2</a>
                                </li>
                                <li>
                                    <a href="auth-register.html">Register</a>
                                </li>
                                <li>
                                    <a href="auth-register-2.html">Register 2</a>
                                </li>
                                <li>
                                    <a href="auth-logout.html">Logout</a>
                                </li>
                                <li>
                                    <a href="auth-logout-2.html">Logout 2</a>
                                </li>
                                <li>
                                    <a href="auth-recoverpw.html">Recover Password</a>
                                </li>
                                <li>
                                    <a href="auth-recoverpw-2.html">Recover Password 2</a>
                                </li>
                                <li>
                                    <a href="auth-lock-screen.html">Lock Screen</a>
                                </li>
                                <li>
                                    <a href="auth-lock-screen-2.html">Lock Screen 2</a>
                                </li>
                                <li>
                                    <a href="auth-confirm-mail.html">Confirm Mail</a>
                                </li>
                                <li>
                                    <a href="auth-confirm-mail-2.html">Confirm Mail 2</a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="side-nav-item">
                        <a data-bs-toggle="collapse" href="#sidebarPagesError" aria-expanded="false" aria-controls="sidebarPagesError" class="side-nav-link">
                            <i class="ri-error-warning-fill"></i>
                            <span> Error Pages </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <div class="collapse" id="sidebarPagesError">
                            <ul class="side-nav-second-level">
                                <li>
                                    <a href="error-404.html">Error 404</a>
                                </li>
                                <li>
                                    <a href="error-404-alt.html">Error 404-alt</a>
                                </li>
                                <li>
                                    <a href="error-500.html">Error 500</a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="side-nav-item">
                        <a data-bs-toggle="collapse" href="#sidebarLayouts" aria-expanded="false" aria-controls="sidebarLayouts" class="side-nav-link">
                            <i class="ri-layout-3-fill"></i>
                            <span> Layouts </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <div class="collapse" id="sidebarLayouts">
                            <ul class="side-nav-second-level">
                                <li>
                                    <a href="layouts-horizontal.html" target="_blank">Horizontal</a>
                                </li>
                                <li>
                                    <a href="layouts-detached.html" target="_blank">Detached</a>
                                </li>
                                <li>
                                    <a href="layouts-full.html" target="_blank">Full View</a>
                                </li>
                                <li>
                                    <a href="layouts-fullscreen.html" target="_blank">Fullscreen View</a>
                                </li>
                                <li>
                                    <a href="layouts-hover.html" target="_blank">Hover Menu</a>
                                </li>
                                <li>
                                    <a href="layouts-compact.html" target="_blank">Compact</a>
                                </li>
                                <li>
                                    <a href="layouts-icon-view.html" target="_blank">Icon View</a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="side-nav-title mt-2">Components</li>

                    <li class="side-nav-item">
                        <a data-bs-toggle="collapse" href="#sidebarBaseUI" aria-expanded="false" aria-controls="sidebarBaseUI" class="side-nav-link">
                            <i class="ri-suitcase-fill"></i>
                            <span> Base UI </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <div class="collapse" id="sidebarBaseUI">
                            <ul class="side-nav-second-level">
                                <li>
                                    <a href="ui-accordions.html">Accordions</a>
                                </li>
                                <li>
                                    <a href="ui-alerts.html">Alerts</a>
                                </li>
                                <li>
                                    <a href="ui-avatars.html">Avatars</a>
                                </li>
                                <li>
                                    <a href="ui-badges.html">Badges</a>
                                </li>
                                <li>
                                    <a href="ui-breadcrumb.html">Breadcrumb</a>
                                </li>
                                <li>
                                    <a href="ui-buttons.html">Buttons</a>
                                </li>
                                <li>
                                    <a href="ui-cards.html">Cards</a>
                                </li>
                                <li>
                                    <a href="ui-carousel.html">Carousel</a>
                                </li>
                                <li>
                                    <a href="ui-collapse.html">Collapse</a>
                                </li>
                                <li>
                                    <a href="ui-dropdowns.html">Dropdowns</a>
                                </li>
                                <li>
                                    <a href="ui-embed-video.html">Embed Video</a>
                                </li>
                                <li>
                                    <a href="ui-grid.html">Grid</a>
                                </li>
                                <li>
                                    <a href="ui-links.html">Links</a>
                                </li>
                                <li>
                                    <a href="ui-list-group.html">List Group</a>
                                </li>
                                <li>
                                    <a href="ui-modals.html">Modals</a>
                                </li>
                                <li>
                                    <a href="ui-notifications.html">Notifications</a>
                                </li>
                                <li>
                                    <a href="ui-offcanvas.html">Offcanvas</a>
                                </li>
                                <li>
                                    <a href="ui-placeholders.html">Placeholders</a>
                                </li>
                                <li>
                                    <a href="ui-pagination.html">Pagination</a>
                                </li>
                                <li>
                                    <a href="ui-popovers.html">Popovers</a>
                                </li>
                                <li>
                                    <a href="ui-progress.html">Progress</a>
                                </li>
                                <li>
                                    <a href="ui-spinners.html">Spinners</a>
                                </li>
                                <li>
                                    <a href="ui-tabs.html">Tabs</a>
                                </li>
                                <li>
                                    <a href="ui-tooltips.html">Tooltips</a>
                                </li>
                                <li>
                                    <a href="ui-typography.html">Typography</a>
                                </li>
                                <li>
                                    <a href="ui-utilities.html">Utilities</a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="side-nav-item">
                        <a data-bs-toggle="collapse" href="#sidebarExtendedUI" aria-expanded="false" aria-controls="sidebarExtendedUI" class="side-nav-link">
                            <i class="ri-paint-brush-fill"></i>
                            <span> Extended UI </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <div class="collapse" id="sidebarExtendedUI">
                            <ul class="side-nav-second-level">
                                <li>
                                    <a href="extended-dragula.html">Dragula</a>
                                </li>
                                <li>
                                    <a href="extended-range-slider.html">Range Slider</a>
                                </li>
                                <li>
                                    <a href="extended-ratings.html">Ratings</a>
                                </li>
                                <li>
                                    <a href="extended-scrollbar.html">Scrollbar</a>
                                </li>
                                <li>
                                    <a href="extended-scrollspy.html">Scrollspy</a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="side-nav-item">
                        <a href="widgets.html" class="side-nav-link">
                            <i class="ri-cup-fill"></i>
                            <span> Widgets </span>
                        </a>
                    </li>

                    <li class="side-nav-item">
                        <a data-bs-toggle="collapse" href="#sidebarIcons" aria-expanded="false" aria-controls="sidebarIcons" class="side-nav-link">
                            <i class="ri-copper-diamond-fill"></i>
                            <span> Icons </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <div class="collapse" id="sidebarIcons">
                            <ul class="side-nav-second-level">
                                <li>
                                    <a href="icons-remixicons.html">Remix Icons</a>
                                </li>
                                <li>
                                    <a href="icons-bootstrap.html">Bootstrap Icons</a>
                                </li>
                                <li>
                                    <a href="icons-material-symbol.html">Material Symbol Icons</a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="side-nav-item">
                        <a data-bs-toggle="collapse" href="#sidebarCharts" aria-expanded="false" aria-controls="sidebarCharts" class="side-nav-link">
                            <i class="ri-bubble-chart-fill"></i>
                            <span> Charts </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <div class="collapse" id="sidebarCharts">
                            <ul class="side-nav-second-level">
                                <li class="side-nav-item">
                                    <a data-bs-toggle="collapse" href="#sidebarApexCharts" aria-expanded="false" aria-controls="sidebarApexCharts">
                                        <span> Apex Charts </span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <div class="collapse" id="sidebarApexCharts">
                                        <ul class="side-nav-third-level">
                                            <li>
                                                <a href="charts-apex-area.html">Area</a>
                                            </li>
                                            <li>
                                                <a href="charts-apex-bar.html">Bar</a>
                                            </li>
                                            <li>
                                                <a href="charts-apex-bubble.html">Bubble</a>
                                            </li>
                                            <li>
                                                <a href="charts-apex-candlestick.html">Candlestick</a>
                                            </li>
                                            <li>
                                                <a href="charts-apex-column.html">Column</a>
                                            </li>
                                            <li>
                                                <a href="charts-apex-heatmap.html">Heatmap</a>
                                            </li>
                                            <li>
                                                <a href="charts-apex-line.html">Line</a>
                                            </li>
                                            <li>
                                                <a href="charts-apex-mixed.html">Mixed</a>
                                            </li>
                                            <li>
                                                <a href="charts-apex-timeline.html">Timeline</a>
                                            </li>
                                            <li>
                                                <a href="charts-apex-boxplot.html">Boxplot</a>
                                            </li>
                                            <li>
                                                <a href="charts-apex-treemap.html">Treemap</a>
                                            </li>
                                            <li>
                                                <a href="charts-apex-pie.html">Pie</a>
                                            </li>
                                            <li>
                                                <a href="charts-apex-radar.html">Radar</a>
                                            </li>
                                            <li>
                                                <a href="charts-apex-radialbar.html">RadialBar</a>
                                            </li>
                                            <li>
                                                <a href="charts-apex-scatter.html">Scatter</a>
                                            </li>
                                            <li>
                                                <a href="charts-apex-polar-area.html">Polar Area</a>
                                            </li>
                                            <li>
                                                <a href="charts-apex-sparklines.html">Sparklines</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="side-nav-item">
                                    <a data-bs-toggle="collapse" href="#sidebarChartJSCharts" aria-expanded="false" aria-controls="sidebarChartJSCharts">
                                        <span> ChartJS </span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <div class="collapse" id="sidebarChartJSCharts">
                                        <ul class="side-nav-third-level">
                                            <li>
                                                <a href="charts-chartjs-area.html">Area</a>
                                            </li>
                                            <li>
                                                <a href="charts-chartjs-bar.html">Bar</a>
                                            </li>
                                            <li>
                                                <a href="charts-chartjs-line.html">Line</a>
                                            </li>
                                            <li>
                                                <a href="charts-chartjs-other.html">Other</a>
                                            </li>

                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="side-nav-item">
                        <a data-bs-toggle="collapse" href="#sidebarForms" aria-expanded="false" aria-controls="sidebarForms" class="side-nav-link">
                            <i class="ri-survey-fill"></i>
                            <span> Forms </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <div class="collapse" id="sidebarForms">
                            <ul class="side-nav-second-level">
                                <li>
                                    <a href="form-elements.html">Basic Elements</a>
                                </li>
                                <li>
                                    <a href="form-advanced.html">Form Advanced</a>
                                </li>
                                <li>
                                    <a href="form-validation.html">Validation</a>
                                </li>
                                <li>
                                    <a href="form-wizard.html">Wizard</a>
                                </li>
                                <li>
                                    <a href="form-fileuploads.html">File Uploads</a>
                                </li>
                                <li>
                                    <a href="form-editors.html">Editors</a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="side-nav-item">
                        <a data-bs-toggle="collapse" href="#sidebarTables" aria-expanded="false" aria-controls="sidebarTables" class="side-nav-link">
                            <i class="ri-table-fill"></i>
                            <span> Tables </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <div class="collapse" id="sidebarTables">
                            <ul class="side-nav-second-level">
                                <li>
                                    <a href="tables-basic.html">Basic Tables</a>
                                </li>
                                <li>
                                    <a href="tables-datatable.html">Data Tables</a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="side-nav-item">
                        <a data-bs-toggle="collapse" href="#sidebarMaps" aria-expanded="false" aria-controls="sidebarMaps" class="side-nav-link">
                            <i class="ri-map-2-fill"></i>
                            <span> Maps </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <div class="collapse" id="sidebarMaps">
                            <ul class="side-nav-second-level">
                                <li>
                                    <a href="maps-google.html">Google Maps</a>
                                </li>
                                <li>
                                    <a href="maps-vector.html">Vector Maps</a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="side-nav-item">
                        <a data-bs-toggle="collapse" href="#sidebarMultiLevel" aria-expanded="false" aria-controls="sidebarMultiLevel" class="side-nav-link">
                            <i class="ri-share-fill"></i>
                            <span> Multi Level </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <div class="collapse" id="sidebarMultiLevel">
                            <ul class="side-nav-second-level">
                                <li class="side-nav-item">
                                    <a data-bs-toggle="collapse" href="#sidebarSecondLevel" aria-expanded="false" aria-controls="sidebarSecondLevel">
                                        <span> Second Level </span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <div class="collapse" id="sidebarSecondLevel">
                                        <ul class="side-nav-third-level">
                                            <li>
                                                <a href="javascript: void(0);">Item 1</a>
                                            </li>
                                            <li>
                                                <a href="javascript: void(0);">Item 2</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="side-nav-item">
                                    <a data-bs-toggle="collapse" href="#sidebarThirdLevel" aria-expanded="false" aria-controls="sidebarThirdLevel">
                                        <span> Third Level </span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <div class="collapse" id="sidebarThirdLevel">
                                        <ul class="side-nav-third-level">
                                            <li>
                                                <a href="javascript: void(0);">Item 1</a>
                                            </li>
                                            <li class="side-nav-item">
                                                <a data-bs-toggle="collapse" href="#sidebarFourthLevel" aria-expanded="false" aria-controls="sidebarFourthLevel">
                                                    <span> Item 2 </span>
                                                    <span class="menu-arrow"></span>
                                                </a>
                                                <div class="collapse" id="sidebarFourthLevel">
                                                    <ul class="side-nav-forth-level">
                                                        <li>
                                                            <a href="javascript: void(0);">Item 2.1</a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript: void(0);">Item 2.2</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </li>


                </ul>
                <!--- End Sidemenu -->

                <div class="clearfix"></div>
            </div>
        </div>
        <!-- ========== Left Sidebar End ========== -->

        <!-- ============================================================== -->
        <!-- Start Page Content here -->
        <!-- ============================================================== -->

        <div class="content-page">
            <div class="content">

                <!-- Start Content-->
                <div class="container-fluid">

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box justify-content-between d-flex align-items-md-center flex-md-row flex-column">
                                <h4 class="page-title">Form Elements</h4>
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Jidox</a></li>
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Forms</a></li>
                                    <li class="breadcrumb-item active">Form Elements</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="header-title">Input Types</h4>
                                    <p class="text-muted fs-14">
                                        Most common form control, text-based input fields. Includes support for all HTML5 types: <code>text</code>, <code>password</code>, <code>datetime</code>, <code>datetime-local</code>, <code>date</code>, <code>month</code>, <code>time</code>, <code>week</code>, <code>number</code>, <code>email</code>, <code>url</code>, <code>search</code>, <code>tel</code>, and <code>color</code>.
                                    </p>

                                    <div class="row">
                                        <div class="col-lg-6">
                                            <form>
                                                <div class="mb-3">
                                                    <label for="simpleinput" class="form-label">Text</label>
                                                    <input type="text" id="simpleinput" class="form-control">
                                                </div>

                                                <div class="mb-3">
                                                    <label for="example-email" class="form-label">Email</label>
                                                    <input type="email" id="example-email" name="example-email" class="form-control" placeholder="Email">
                                                </div>

                                                <div class="mb-3">
                                                    <label for="example-password" class="form-label">Password</label>
                                                    <input type="password" id="example-password" class="form-control" value="password">
                                                </div>

                                                <div class="mb-3">
                                                    <label for="password" class="form-label">Show/Hide Password</label>
                                                    <div class="input-group input-group-merge">
                                                        <input type="password" id="password" class="form-control" placeholder="Enter your password">
                                                        <div class="input-group-text" data-password="false">
                                                            <span class="password-eye"></span>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="mb-3">
                                                    <label for="example-palaceholder" class="form-label">Placeholder</label>
                                                    <input type="text" id="example-palaceholder" class="form-control" placeholder="placeholder">
                                                </div>

                                                <div class="mb-3">
                                                    <label for="example-textarea" class="form-label">Text area</label>
                                                    <textarea class="form-control" id="example-textarea" rows="5"></textarea>
                                                </div>

                                                <div class="mb-3">
                                                    <label for="example-readonly" class="form-label">Readonly</label>
                                                    <input type="text" id="example-readonly" class="form-control" readonly="" value="Readonly value">
                                                </div>

                                                <div class="mb-3">
                                                    <label for="example-disable" class="form-label">Disabled</label>
                                                    <input type="text" class="form-control" id="example-disable" disabled="" value="Disabled value">
                                                </div>

                                                <div class="mb-3">
                                                    <label for="example-static" class="form-label">Static control</label>
                                                    <input type="text" readonly class="form-control-plaintext" id="example-static" value="email@example.com">
                                                </div>

                                                <div class="mb-0">
                                                    <label for="example-helping" class="form-label">Helping text</label>
                                                    <input type="text" id="example-helping" class="form-control" placeholder="Helping text">
                                                    <span class="help-block"><small>A block of help text that breaks onto a new line and may extend beyond one line.</small></span>
                                                </div>

                                            </form>
                                        </div> <!-- end col -->

                                        <div class="col-lg-6">
                                            <form>

                                                <div class="mb-3">
                                                    <label for="example-select" class="form-label">Input Select</label>
                                                    <select class="form-select" id="example-select">
                                                        <option>1</option>
                                                        <option>2</option>
                                                        <option>3</option>
                                                        <option>4</option>
                                                        <option>5</option>
                                                    </select>
                                                </div>

                                                <div class="mb-3">
                                                    <label for="example-multiselect" class="form-label">Multiple Select</label>
                                                    <select id="example-multiselect" multiple class="form-control">
                                                        <option>1</option>
                                                        <option>2</option>
                                                        <option>3</option>
                                                        <option>4</option>
                                                        <option>5</option>
                                                    </select>
                                                </div>

                                                <div class="mb-3">
                                                    <label for="example-fileinput" class="form-label">Default file input</label>
                                                    <input type="file" id="example-fileinput" class="form-control">
                                                </div>

                                                <div class="mb-3">
                                                    <label for="example-date" class="form-label">Date</label>
                                                    <input class="form-control" id="example-date" type="date" name="date">
                                                </div>

                                                <div class="mb-3">
                                                    <label for="example-month" class="form-label">Month</label>
                                                    <input class="form-control" id="example-month" type="month" name="month">
                                                </div>

                                                <div class="mb-3">
                                                    <label for="example-time" class="form-label">Time</label>
                                                    <input class="form-control" id="example-time" type="time" name="time">
                                                </div>

                                                <div class="mb-3">
                                                    <label for="example-week" class="form-label">Week</label>
                                                    <input class="form-control" id="example-week" type="week" name="week">
                                                </div>

                                                <div class="mb-3">
                                                    <label for="example-number" class="form-label">Number</label>
                                                    <input class="form-control" id="example-number" type="number" name="number">
                                                </div>

                                                <div class="mb-3">
                                                    <label for="example-color" class="form-label">Color</label>
                                                    <input class="form-control" id="example-color" type="color" name="color" value="#727cf5">
                                                </div>

                                                <div class="mb-0">
                                                    <label for="example-range" class="form-label">Range</label>
                                                    <input class="form-range" id="example-range" type="range" name="range" min="0" max="100">
                                                </div>

                                            </form>
                                        </div> <!-- end col -->
                                    </div>
                                    <!-- end row-->
                                </div> <!-- end card-body -->
                            </div> <!-- end card -->
                        </div><!-- end col -->
                    </div><!-- end row -->

                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="header-title">Floating labels</h4>
                                    <p class="text-muted fs-14">
                                        Wrap a pair of <code>&lt;input class="form-control"&gt;</code> and <code>&lt;label&gt;</code> elements in <code>.form-floating</code> to enable floating labels with Bootstrap’s textual form fields. A <code>placeholder</code> is required on each <code>&lt;input&gt;</code> as our method of CSS-only floating labels uses the <code>:placeholder-shown</code> pseudo-element. Also note that the <code>&lt;input&gt;</code> must come first so we can utilize a sibling selector (e.g., <code>~</code>).
                                    </p>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <h5 class="mb-3">Example</h5>
                                            <div class="form-floating mb-3">
                                                <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                                                <label for="floatingInput">Email address</label>
                                            </div>
                                            <div class="form-floating">
                                                <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                                                <label for="floatingPassword">Password</label>
                                            </div>

                                            <h5 class="mb-3 mt-4">Textareas</h5>
                                            <div class="form-floating">
                                                <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea" style="height: 100px"></textarea>
                                                <label for="floatingTextarea">Comments</label>
                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <h5 class="mb-3">Selects</h5>
                                            <div class="form-floating">
                                                <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
                                                    <option selected>Open this select menu</option>
                                                    <option value="1">One</option>
                                                    <option value="2">Two</option>
                                                    <option value="3">Three</option>
                                                </select>
                                                <label for="floatingSelect">Works with selects</label>
                                            </div>

                                            <h5 class="mb-3 mt-4">Layout</h5>
                                            <div class="row g-2">
                                                <div class="col-md">
                                                    <div class="form-floating">
                                                        <input type="email" class="form-control" id="floatingInputGrid" placeholder="name@example.com" value="mdo@example.com">
                                                        <label for="floatingInputGrid">Email address</label>
                                                    </div>
                                                </div>
                                                <div class="col-md">
                                                    <div class="form-floating">
                                                        <select class="form-select" id="floatingSelectGrid" aria-label="Floating label select example">
                                                            <option selected>Open this select menu</option>
                                                            <option value="1">One</option>
                                                            <option value="2">Two</option>
                                                            <option value="3">Three</option>
                                                        </select>
                                                        <label for="floatingSelectGrid">Works with selects</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> <!-- end card-body -->
                            </div> <!-- end card -->
                        </div><!-- end col -->
                    </div><!-- end row -->

                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <h4 class="header-title">Select</h4>
                                            <p class="text-muted fs-14">
                                                <code>&lt;select&gt;</code> menus need only a custom class, <code>.form-select</code> to trigger the custom styles.
                                            </p>

                                            <select class="form-select mb-3">
                                                <option selected>Open this select menu</option>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                            </select>
                                            <select class="form-select form-select-lg mb-3">
                                                <option selected>Open this select menu</option>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                            </select>
                                            <select class="form-select form-select-sm mb-3">
                                                <option selected>Open this select menu</option>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                            </select>
                                            <div class="input-group mb-3">
                                                <label class="input-group-text" for="inputGroupSelect01">Options</label>
                                                <select class="form-select" id="inputGroupSelect01">
                                                    <option selected>Choose...</option>
                                                    <option value="1">One</option>
                                                    <option value="2">Two</option>
                                                    <option value="3">Three</option>
                                                </select>
                                            </div>
                                            <div class="input-group">
                                                <select class="form-select" id="inputGroupSelect04" aria-label="Example select with button addon">
                                                    <option selected>Choose...</option>
                                                    <option value="1">One</option>
                                                    <option value="2">Two</option>
                                                    <option value="3">Three</option>
                                                </select>
                                                <button class="btn btn-outline-secondary" type="button">Button</button>
                                            </div>
                                        </div> <!-- end col -->

                                        <div class="col-lg-6">
                                            <h4 class="header-title mt-5 mt-lg-0">Switches</h4>
                                            <p class="text-muted fs-14">
                                                A switch has the markup of a custom checkbox but uses the <code>.form-switch</code> class to render a toggle switch. Switches also support the <code>disabled</code> attribute.
                                            </p>

                                            <div class="form-check form-switch">
                                                <input type="checkbox" class="form-check-input" id="customSwitch1">
                                                <label class="form-check-label" for="customSwitch1">Toggle this switch element</label>
                                            </div>
                                            <div class="form-check form-switch mt-1">
                                                <input type="checkbox" class="form-check-input" disabled id="customSwitch2">
                                                <label class="form-check-label" for="customSwitch2">Disabled switch element</label>
                                            </div>
                                        </div> <!-- end col -->
                                    </div> <!-- end row -->

                                </div> <!-- end card-body-->
                            </div> <!-- end card -->
                        </div> <!-- end col -->
                    </div>
                    <!-- end row -->

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-body">

                                    <h4 class="header-title mt-5 mt-lg-0">Checkboxes </h4>
                                    <p class="text-muted fs-14">
                                        Each checkbox and radio <code>&lt;input&gt;</code> and <code>&lt;label&gt;</code> pairing is wrapped in a <code>&lt;div&gt;</code> to create our custom control. Structurally, this is the same approach as our default <code>.form-check</code>.
                                    </p>

                                    <h6 class="fs-15">Checkboxes</h6>
                                    <div class="mt-3">
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="customCheck1">
                                            <label class="form-check-label" for="customCheck1">Check this custom checkbox</label>
                                        </div>
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="customCheck2">
                                            <label class="form-check-label" for="customCheck2">Check this custom checkbox</label>
                                        </div>
                                    </div>

                                    <h6 class="fs-15 mt-3">Inline</h6>

                                    <div class="mt-2">
                                        <div class="form-check form-check-inline">
                                            <input type="checkbox" class="form-check-input" id="customCheck3">
                                            <label class="form-check-label" for="customCheck3">Check this custom checkbox</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input type="checkbox" class="form-check-input" id="customCheck4">
                                            <label class="form-check-label" for="customCheck4">Check this custom checkbox</label>
                                        </div>
                                    </div>

                                    <h6 class="fs-15 mt-3">Disabled</h6>

                                    <div class="mt-2">
                                        <div class="form-check form-check-inline">
                                            <input type="checkbox" class="form-check-input" id="customCheck5" checked disabled>
                                            <label class="form-check-label" for="customCheck5">Check this custom checkbox</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input type="checkbox" class="form-check-input" id="customCheck6" disabled>
                                            <label class="form-check-label" for="customCheck6">Check this custom checkbox</label>
                                        </div>
                                    </div>

                                    <h6 class="fs-15 mt-3">Colors</h6>

                                    <div class="form-check mb-2">
                                        <input type="checkbox" class="form-check-input" id="customCheckcolor1" checked>
                                        <label class="form-check-label" for="customCheckcolor1">Default Checkbox</label>
                                    </div>
                                    <div class="form-check form-checkbox-success mb-2">
                                        <input type="checkbox" class="form-check-input" id="customCheckcolor2" checked>
                                        <label class="form-check-label" for="customCheckcolor2">Success Checkbox</label>
                                    </div>
                                    <div class="form-check form-checkbox-info mb-2">
                                        <input type="checkbox" class="form-check-input" id="customCheckcolor3" checked>
                                        <label class="form-check-label" for="customCheckcolor3">Info Checkbox</label>
                                    </div>
                                    <div class="form-check form-checkbox-secondary mb-2">
                                        <input type="checkbox" class="form-check-input" id="customCheckcolor6" checked>
                                        <label class="form-check-label" for="customCheckcolor6">Secondary Checkbox</label>
                                    </div>
                                    <div class="form-check  form-checkbox-warning mb-2">
                                        <input type="checkbox" class="form-check-input" id="customCheckcolor4" checked>
                                        <label class="form-check-label" for="customCheckcolor4">Warning Checkbox</label>
                                    </div>
                                    <div class="form-check form-checkbox-danger mb-2">
                                        <input type="checkbox" class="form-check-input" id="customCheckcolor5" checked>
                                        <label class="form-check-label" for="customCheckcolor5">Danger Checkbox</label>
                                    </div>
                                    <div class="form-check form-checkbox-dark">
                                        <input type="checkbox" class="form-check-input" id="customCheckcolor7" checked>
                                        <label class="form-check-label" for="customCheckcolor7">Dark Checkbox</label>
                                    </div>

                                </div> <!-- end card-body -->
                            </div> <!-- end card -->
                        </div> <!-- end col -->

                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="header-title mt-5 mt-lg-0">radios</h4>
                                    <p class="text-muted fs-14">
                                        Each checkbox and radio <code>&lt;input&gt;</code> and <code>&lt;label&gt;</code> pairing is wrapped in a <code>&lt;div&gt;</code> to create our custom control. Structurally, this is the same approach as our default <code>.form-check</code>.
                                    </p>

                                    <h6 class="fs-15 mt-3">Radios</h6>

                                    <div class="mt-3">
                                        <div class="form-check">
                                            <input type="radio" id="customRadio1" name="customRadio" class="form-check-input">
                                            <label class="form-check-label" for="customRadio1">Toggle this custom radio</label>
                                        </div>
                                        <div class="form-check">
                                            <input type="radio" id="customRadio2" name="customRadio" class="form-check-input">
                                            <label class="form-check-label" for="customRadio2">Or toggle this other custom radio</label>
                                        </div>
                                    </div>

                                    <h6 class="fs-15 mt-3">Inline</h6>

                                    <div class="mt-2">
                                        <div class="form-check form-check-inline">
                                            <input type="radio" id="customRadio3" name="customRadio1" class="form-check-input">
                                            <label class="form-check-label" for="customRadio3">Toggle this custom radio</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input type="radio" id="customRadio4" name="customRadio1" class="form-check-input">
                                            <label class="form-check-label" for="customRadio4">Or toggle this other custom radio</label>
                                        </div>
                                    </div>

                                    <h6 class="fs-15 mt-3">Disabled</h6>

                                    <div class="mt-2">
                                        <div class="form-check form-check-inline">
                                            <input type="radio" id="customRadio5" name="customRadio2" class="form-check-input" disabled>
                                            <label class="form-check-label" for="customRadio5">Toggle this custom radio</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input type="radio" id="customRadio6" name="customRadio2" class="form-check-input" checked disabled>
                                            <label class="form-check-label" for="customRadio6">Or toggle this other custom radio</label>
                                        </div>
                                    </div>

                                    <h6 class="fs-15 mt-3">Colors</h6>

                                    <div class="form-check mb-2">
                                        <input type="radio" id="customRadiocolor1" name="customRadiocolor1" class="form-check-input" checked>
                                        <label class="form-check-label" for="customRadiocolor1">Default Radio</label>
                                    </div>
                                    <div class="form-check form-radio-success mb-2">
                                        <input type="radio" id="customRadiocolor2" name="customRadiocolor2" class="form-check-input" checked>
                                        <label class="form-check-label" for="customRadiocolor2">Success Radio</label>
                                    </div>
                                    <div class="form-check form-radio-info mb-2">
                                        <input type="radio" id="customRadiocolor3" name="customRadiocolor3" class="form-check-input" checked>
                                        <label class="form-check-label" for="customRadiocolor3">Info Radio</label>
                                    </div>
                                    <div class="form-check form-radio-secondary mb-2">
                                        <input type="radio" id="customRadiocolor6" name="customRadiocolor6" class="form-check-input" checked>
                                        <label class="form-check-label" for="customRadiocolor6">Secondary Radio</label>
                                    </div>
                                    <div class="form-check form-radio-warning mb-2">
                                        <input type="radio" id="customRadiocolor4" name="customRadiocolor4" class="form-check-input" checked>
                                        <label class="form-check-label" for="customRadiocolor4">Warning Radio</label>
                                    </div>
                                    <div class="form-check form-radio-danger mb-2">
                                        <input type="radio" id="customRadiocolor5" name="customRadiocolor5" class="form-check-input" checked>
                                        <label class="form-check-label" for="customRadiocolor5">Danger Radio</label>
                                    </div>
                                    <div class="form-check form-radio-dark">
                                        <input type="radio" id="customRadiocolor7" name="customRadiocolor7" class="form-check-input" checked>
                                        <label class="form-check-label" for="customRadiocolor7">Dark Radio</label>
                                    </div>

                                </div> <!-- end card-body -->
                            </div> <!-- end card -->
                        </div> <!-- end col -->
                    </div>
                    <!-- end row -->

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-body">

                                    <h4 class="header-title">Input Sizes</h4>
                                    <p class="text-muted fs-14">
                                        Set heights using classes like <code>.input-lg</code>, and set widths using grid column classes like <code>.col-lg-*</code>.
                                    </p>

                                    <form>
                                        <div class="mb-3">
                                            <label for="example-input-small" class="form-label">Small</label>
                                            <input type="text" id="example-input-small" name="example-input-small" class="form-control form-control-sm" placeholder=".input-sm">
                                        </div>

                                        <div class="mb-3">
                                            <label for="example-input-normal" class="form-label">Normal</label>
                                            <input type="text" id="example-input-normal" name="example-input-normal" class="form-control" placeholder="Normal">
                                        </div>

                                        <div class="mb-3">
                                            <label for="example-input-large" class="form-label">Large</label>
                                            <input type="text" id="example-input-large" name="example-input-large" class="form-control form-control-lg" placeholder=".input-lg">
                                        </div>

                                        <div class="mb-2">
                                            <label for="example-gridsize" class="form-label">Grid Sizes</label>
                                            <div class="row">
                                                <div class="col-sm-4">
                                                    <input type="text" id="example-gridsize" class="form-control" placeholder=".col-sm-4">
                                                </div>
                                            </div>
                                        </div>
                                    </form>

                                </div> <!-- end card-body -->
                            </div> <!-- end card -->
                        </div> <!-- end col -->

                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-body">

                                    <h4 class="header-title">Input Group</h4>
                                    <p class="text-muted fs-14">
                                        Easily extend form controls by adding text, buttons, or button groups on either side of textual inputs, custom selects, and custom file inputs
                                    </p>

                                    <form>
                                        <div class="mb-3">
                                            <label class="form-label">Static</label>
                                            <div class="input-group flex-nowrap">
                                                <span class="input-group-text" id="basic-addon1">@</span>
                                                <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                                            </div>
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label">Dropdowns</label>
                                            <div class="input-group">
                                                <button class="btn btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</button>
                                                <div class="dropdown-menu dropdown-menu-animated">
                                                    <a class="dropdown-item" href="#">Action</a>
                                                    <a class="dropdown-item" href="#">Another action</a>
                                                    <a class="dropdown-item" href="#">Something else here</a>
                                                </div>
                                                <input type="text" class="form-control" placeholder="" aria-label="" aria-describedby="basic-addon1">
                                            </div>
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label">Buttons</label>
                                            <div class="input-group">
                                                <input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username">
                                                <button class="btn btn-dark" type="button">Button</button>
                                            </div>
                                        </div>

                                        <div class="row g-2">
                                            <div class="col-sm-6">
                                                <label class="form-label">File input</label>
                                                <input class="form-control" type="file" id="inputGroupFile04">
                                            </div>
                                            <div class="col-sm-6">
                                                <label for="formFileMultiple01" class="form-label">Multiple files input</label>
                                                <input class="form-control" type="file" id="formFileMultiple01" multiple>
                                            </div>
                                        </div>
                                    </form>

                                </div> <!-- end card-body -->
                            </div> <!-- end card -->
                        </div> <!-- end col -->
                    </div>
                    <!-- end row -->


                    <div class="row">
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="header-title">Basic Example</h4>
                                    <p class="text-muted fs-14">Here’s a quick example to demonstrate Bootstrap’s form styles. Keep reading for documentation on required classes, form layout, and more.</p>

                                    <form>
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Email address</label>
                                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                                            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleInputPassword1" class="form-label">Password</label>
                                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                        </div>
                                        <div class=" mb-3">
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="checkmeout0">
                                                <label class="form-check-label" for="checkmeout0">Check me out !</label>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </form>

                                </div> <!-- end card-body-->
                            </div> <!-- end card-->
                        </div>
                        <!-- end col -->

                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="header-title">Horizontal form</h4>
                                    <p class="text-muted fs-14">Create horizontal forms with the grid by adding the <code>.row</code> class to form groups and using the <code>.col-*-*</code> classes to specify the width of your labels and controls. Be sure to add <code>.col-form-label</code> to your <code>&lt;label&gt;</code>s as well so they’re vertically centered with their associated form controls.</p>

                                    <form class="form-horizontal">
                                        <div class="row mb-3">
                                            <label for="inputEmail3" class="col-3 col-form-label">Email</label>
                                            <div class="col-9">
                                                <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="inputPassword3" class="col-3 col-form-label">Password</label>
                                            <div class="col-9">
                                                <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="inputPassword5" class="col-3 col-form-label">Re Password</label>
                                            <div class="col-9">
                                                <input type="password" class="form-control" id="inputPassword5" placeholder="Retype Password">
                                            </div>
                                        </div>
                                        <div class="row mb-3 justify-content-end">
                                            <div class="col-9">
                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input" id="checkmeout">
                                                    <label class="form-check-label" for="checkmeout">Check me out !</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="justify-content-end row">
                                            <div class="col-9">
                                                <button type="submit" class="btn btn-info">Sign in</button>
                                            </div>
                                        </div>
                                    </form>
                                </div> <!-- end card-body -->
                            </div> <!-- end card -->
                        </div> <!-- end col -->

                    </div>
                    <!-- end row -->


                    <!-- Inline Form -->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-body">

                                    <h4 class="header-title">Inline Form</h4>
                                    <p class="text-muted fs-14">
                                        Use the <code>.row-cols-lg-auto</code>, <code>.g-3</code> & <code>.align-items-center</code> class to display a series of labels, form controls, and buttons on a single horizontal row. Form controls within inline forms vary slightly from their default states. Controls only appear inline in viewports that are at least 576px wide to account for narrow viewports on mobile devices.
                                    </p>

                                    <form class="row row-cols-lg-auto g-3 align-items-center">
                                        <div class="col-12">
                                            <label for="staticEmail2" class="visually-hidden">Email</label>
                                            <input type="text" readonly class="form-control-plaintext" id="staticEmail2" value="email@example.com">
                                        </div>
                                        <div class="col-12">
                                            <label for="inputPassword2" class="visually-hidden">Password</label>
                                            <input type="password" class="form-control" id="inputPassword2" placeholder="Password">
                                        </div>
                                        <div class="col-12">
                                            <button type="submit" class="btn btn-primary">Confirm identity</button>
                                        </div>
                                    </form>

                                    <h6 class="fs-13 mt-3">Auto-sizing</h6>
                                    <form>
                                        <div class="row gy-2 gx-2 align-items-center">
                                            <div class="col-auto">
                                                <label class="visually-hidden" for="inlineFormInput">Name</label>
                                                <input type="text" class="form-control mb-2" id="inlineFormInput" placeholder="Jane Doe">
                                            </div>
                                            <div class="col-auto">
                                                <label class="visually-hidden" for="inlineFormInputGroup">Username</label>
                                                <div class="input-group mb-2">
                                                    <div class="input-group-text">@</div>
                                                    <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Username">
                                                </div>
                                            </div>
                                            <div class="col-auto">
                                                <div class="form-check mb-2">
                                                    <input type="checkbox" class="form-check-input" id="autoSizingCheck">
                                                    <label class="form-check-label" for="autoSizingCheck">Remember me</label>
                                                </div>
                                            </div>
                                            <div class="col-auto">
                                                <button type="submit" class="btn btn-primary mb-2">Submit</button>
                                            </div>
                                        </div>
                                    </form>

                                </div> <!-- end card-body -->
                            </div> <!-- end card -->
                        </div> <!-- end col -->
                    </div>
                    <!-- end row -->

                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="header-title">Horizontal form label sizing</h4>
                                    <p class="text-muted fs-14">Be sure to use <code>.col-form-label-sm</code> or <code>.col-form-label-lg</code> to your <code>&lt;label&gt;</code>s or <code>&lt;legend&gt;</code>s to correctly follow the size of <code>.form-control-lg</code> and <code>.form-control-sm</code>.</p>

                                    <form>
                                        <div class="mb-2 row">
                                            <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Email</label>
                                            <div class="col-sm-10">
                                                <input type="email" class="form-control form-control-sm" id="colFormLabelSm" placeholder="col-form-label-sm">
                                            </div>
                                        </div>
                                        <div class="mb-2 row">
                                            <label for="colFormLabel" class="col-sm-2 col-form-label">Email</label>
                                            <div class="col-sm-10">
                                                <input type="email" class="form-control" id="colFormLabel" placeholder="col-form-label">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Email</label>
                                            <div class="col-sm-10">
                                                <input type="email" class="form-control form-control-lg" id="colFormLabelLg" placeholder="col-form-label-lg">
                                            </div>
                                        </div>
                                    </form>
                                </div> <!-- end card-body -->
                            </div> <!-- end card-->
                        </div> <!-- end col -->
                    </div>
                    <!-- end row -->

                    <!-- Form row -->
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="header-title">Form Row</h4>
                                    <p class="text-muted fs-14">
                                        By adding <code>.row</code> & <code>.g-2</code>, you can have control over the gutter width in as well the inline as block direction.
                                    </p>

                                    <form>
                                        <div class="row g-2">
                                            <div class="mb-3 col-md-6">
                                                <label for="inputEmail4" class="form-label">Email</label>
                                                <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
                                            </div>
                                            <div class="mb-3 col-md-6">
                                                <label for="inputPassword4" class="form-label">Password</label>
                                                <input type="password" class="form-control" id="inputPassword4" placeholder="Password">
                                            </div>
                                        </div>

                                        <div class="mb-3">
                                            <label for="inputAddress" class="form-label">Address</label>
                                            <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
                                        </div>

                                        <div class="mb-3">
                                            <label for="inputAddress2" class="form-label">Address 2</label>
                                            <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
                                        </div>

                                        <div class="row g-2">
                                            <div class="mb-3 col-md-6">
                                                <label for="inputCity" class="form-label">City</label>
                                                <input type="text" class="form-control" id="inputCity">
                                            </div>
                                            <div class="mb-3 col-md-4">
                                                <label for="inputState" class="form-label">State</label>
                                                <select id="inputState" class="form-select">
                                                    <option>Choose</option>
                                                    <option>Option 1</option>
                                                    <option>Option 2</option>
                                                    <option>Option 3</option>
                                                </select>
                                            </div>
                                            <div class="mb-3 col-md-2">
                                                <label for="inputZip" class="form-label">Zip</label>
                                                <input type="text" class="form-control" id="inputZip">
                                            </div>
                                        </div>

                                        <div class="mb-2">
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="customCheck11">
                                                <label class="form-check-label" for="customCheck11">Check this custom checkbox</label>
                                            </div>
                                        </div>

                                        <button type="submit" class="btn btn-primary">Sign in</button>
                                    </form>

                                </div> <!-- end card-body -->
                            </div> <!-- end card-->
                        </div> <!-- end col -->
                    </div>
                    <!-- end row -->

                </div> <!-- container -->

            </div> <!-- content -->

            <!-- Footer Start -->
            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6">
                            <script>
                                document.write(new Date().getFullYear())
                            </script> © Jidox - Coderthemes.com
                        </div>
                        <div class="col-md-6">
                            <div class="text-md-end footer-links d-none d-md-block">
                                <a href="javascript: void(0);">About</a>
                                <a href="javascript: void(0);">Support</a>
                                <a href="javascript: void(0);">Contact Us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- end Footer -->

        </div>

        <!-- ============================================================== -->
        <!-- End Page content -->
        <!-- ============================================================== -->

    </div>
    <!-- END wrapper -->

    <!-- Theme Settings -->
    <div class="offcanvas offcanvas-end" tabindex="-1" id="theme-settings-offcanvas">
        <div class="d-flex align-items-center bg-primary p-3 offcanvas-header">
            <h5 class="text-white m-0">Theme Settings</h5>
            <button type="button" class="btn-close btn-close-white ms-auto" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>

        <div class="offcanvas-body p-0">
            <div data-simplebar class="h-100">
                <div class="card mb-0 p-3">
                    <div class="alert alert-warning" role="alert">
                        <strong>Customize </strong> the overall color scheme, sidebar menu, etc.
                    </div>

                    <h5 class="mt-0 fs-16 fw-bold mb-3">Choose Layout</h5>
                    <div class="d-flex flex-column gap-2">
                        <div class="form-check form-switch">
                            <input id="customizer-layout01" name="data-layout" type="checkbox" value="vertical" class="form-check-input">
                            <label class="form-check-label" for="customizer-layout01">Vertical</label>
                        </div>
                        <div class="form-check form-switch">
                            <input id="customizer-layout02" name="data-layout" type="checkbox" value="horizontal" class="form-check-input">
                            <label class="form-check-label" for="customizer-layout02">Horizontal</label>
                        </div>
                    </div>

                    <h5 class="my-3 fs-16 fw-bold">Color Scheme</h5>

                    <div class="d-flex flex-column gap-2">
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" name="data-bs-theme" id="layout-color-light" value="light">
                            <label class="form-check-label" for="layout-color-light">Light</label>
                        </div>

                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" name="data-bs-theme" id="layout-color-dark" value="dark">
                            <label class="form-check-label" for="layout-color-dark">Dark</label>
                        </div>
                    </div>

                    <div id="layout-width">
                        <h5 class="my-3 fs-16 fw-bold">Layout Mode</h5>

                        <div class="d-flex flex-column gap-2">
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" name="data-layout-mode" id="layout-mode-fluid" value="fluid">
                                <label class="form-check-label" for="layout-mode-fluid">Fluid</label>
                            </div>

                            <div id="layout-boxed">
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" name="data-layout-mode" id="layout-mode-boxed" value="boxed">
                                    <label class="form-check-label" for="layout-mode-boxed">Boxed</label>
                                </div>
                            </div>

                            <div id="layout-detached">
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" name="data-layout-mode" id="data-layout-detached" value="detached">
                                    <label class="form-check-label" for="data-layout-detached">Detached</label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <h5 class="my-3 fs-16 fw-bold">Topbar Color</h5>

                    <div class="d-flex flex-column gap-2">
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" name="data-topbar-color" id="topbar-color-light" value="light">
                            <label class="form-check-label" for="topbar-color-light">Light</label>
                        </div>

                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" name="data-topbar-color" id="topbar-color-dark" value="dark">
                            <label class="form-check-label" for="topbar-color-dark">Dark</label>
                        </div>

                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" name="data-topbar-color" id="topbar-color-brand" value="brand">
                            <label class="form-check-label" for="topbar-color-brand">Brand</label>
                        </div>
                    </div>

                    <div>
                        <h5 class="my-3 fs-16 fw-bold">Menu Color</h5>

                        <div class="d-flex flex-column gap-2">
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" name="data-menu-color" id="leftbar-color-light" value="light">
                                <label class="form-check-label" for="leftbar-color-light">Light</label>
                            </div>

                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" name="data-menu-color" id="leftbar-color-dark" value="dark">
                                <label class="form-check-label" for="leftbar-color-dark">Dark</label>
                            </div>
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" name="data-menu-color" id="leftbar-color-brand" value="brand">
                                <label class="form-check-label" for="leftbar-color-brand">Brand</label>
                            </div>
                        </div>
                    </div>

                    <div id="sidebar-size">
                        <h5 class="my-3 fs-16 fw-bold">Sidebar Size</h5>

                        <div class="d-flex flex-column gap-2">
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" name="data-sidenav-size" id="leftbar-size-default" value="default">
                                <label class="form-check-label" for="leftbar-size-default">Default</label>
                            </div>

                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" name="data-sidenav-size" id="leftbar-size-compact" value="compact">
                                <label class="form-check-label" for="leftbar-size-compact">Compact</label>
                            </div>

                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" name="data-sidenav-size" id="leftbar-size-small" value="condensed">
                                <label class="form-check-label" for="leftbar-size-small">Condensed</label>
                            </div>

                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" name="data-sidenav-size" id="leftbar-size-small-hover" value="sm-hover">
                                <label class="form-check-label" for="leftbar-size-small-hover">Hover View</label>
                            </div>

                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" name="data-sidenav-size" id="leftbar-size-full" value="full">
                                <label class="form-check-label" for="leftbar-size-full">Full Layout</label>
                            </div>

                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" name="data-sidenav-size" id="leftbar-size-fullscreen" value="fullscreen">
                                <label class="form-check-label" for="leftbar-size-fullscreen">Fullscreen Layout</label>
                            </div>
                        </div>
                    </div>

                    <div id="layout-position">
                        <h5 class="my-3 fs-16 fw-bold">Layout Position</h5>

                        <div class="btn-group checkbox" role="group">
                            <input type="radio" class="btn-check" name="data-layout-position" id="layout-position-fixed" value="fixed">
                            <label class="btn btn-soft-primary w-sm" for="layout-position-fixed">Fixed</label>

                            <input type="radio" class="btn-check" name="data-layout-position" id="layout-position-scrollable" value="scrollable">
                            <label class="btn btn-soft-primary w-sm ms-0" for="layout-position-scrollable">Scrollable</label>
                        </div>
                    </div>

                    <div id="sidebar-user">
                        <div class="d-flex justify-content-between align-items-center mt-3">
                            <label class="fs-16 fw-bold m-0" for="sidebaruser-check">Sidebar User Info</label>
                            <div class="form-check form-switch">
                                <input type="checkbox" class="form-check-input" name="sidebar-user" id="sidebaruser-check">
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
        <div class="offcanvas-footer border-top p-3 text-center">
            <div class="row">
                <div class="col-6">
                    <button type="button" class="btn btn-light w-100" id="reset-layout">Reset</button>
                </div>
                <div class="col-6">
                    <a href="#" role="button" class="btn btn-primary w-100">Buy Now</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Vendor js -->
    <script src="assets/js/vendor.min.js"></script>

    <!-- App js -->
    <script src="assets/js/app.min.js"></script>

</body>

<!-- Mirrored from coderthemes.com/jidox/layouts/form-elements.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 08 Jan 2024 14:31:08 GMT -->

</html>