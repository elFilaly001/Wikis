<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from coderthemes.com/jidox/layouts/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 08 Jan 2024 14:30:29 GMT -->

<head>
    <meta charset="utf-8" />
    <title>Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/img/favicon.ico">

    <!-- Daterangepicker css -->
    <link rel="stylesheet" href="assets/vendor/daterangepicker/daterangepicker.css">

    <!-- Vector Map css -->
    <link rel="stylesheet" href="assets/vendor/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.css">

    <!-- Theme Config Js -->
    <script src="assets/js/config.js"></script>

    <!-- App css -->
    <link href="assets/css/app.min.css" rel="stylesheet" type="text/css" id="app-style" />

    <!-- Icons css -->
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />

    <!-- Font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <!-- Begin page -->
    <div class="wrapper">

        <?php
        require __DIR__ . "/../component/AdminSidebar.php";
        ?>

        <!-- ============================================================== -->
        <!-- Start Page Content here -->
        <!-- ============================================================== -->

        <div class="content-page">
            <div class="content">

                <!-- Start Content-->
                <div class="container-fluid">

                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box justify-content-between d-flex align-items-lg-center flex-lg-row flex-column">
                                <h4 class="page-title">Dashboard</h4>
                            </div>
                        </div>
                    </div>

                    <div class="row row-cols-1 row-cols-xxl-6 row-cols-lg-3 row-cols-md-2">
                        <div class="col">
                            <div class="card widget-icon-box">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between">
                                        <div class="flex-grow-1 overflow-hidden">
                                            <h5 class="text-muted text-uppercase fs-13 mt-0" title="Number of Customers">Wikis</h5>
                                            <h3 class="my-3"><?php

                                                                use App\controllers\WikisController;

                                                                $wikis = new WikisController();
                                                                $wikis->countWikis();
                                                                ?></h3>
                                        </div>
                                        <div class="avatar-sm flex-shrink-0">
                                            <span class="avatar-title text-bg-success rounded rounded-3 fs-3 widget-icon-box-avatar shadow">
                                                <i class="fa-solid fa-user"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div> <!-- end card-body-->
                            </div> <!-- end card-->
                        </div> <!-- end col-->
                        <div class="col">
                            <div class="card widget-icon-box">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between">
                                        <div class="flex-grow-1 overflow-hidden">
                                            <h5 class="text-muted text-uppercase fs-13 mt-0" title="Number of Customers">Tags</h5>
                                            <h3 class="my-3"><?php

                                                                use App\controllers\TagsController;

                                                                $wikis = new TagsController();
                                                                $wikis->countTags();
                                                                ?></h3>
                                        </div>
                                        <div class="avatar-sm flex-shrink-0">
                                            <span class="avatar-title text-bg-success rounded rounded-3 fs-3 widget-icon-box-avatar shadow">
                                                <i class="fa-solid fa-tag"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div> <!-- end card-body-->
                            </div> <!-- end card-->
                        </div> <!-- end col-->
                        <div class="col">
                            <div class="card widget-icon-box">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between">
                                        <div class="flex-grow-1 overflow-hidden">
                                            <h5 class="text-muted text-uppercase fs-13 mt-0" title="Number of Customers">Category</h5>
                                            <h3 class="my-3"><?php

                                                                use App\controllers\CategoryController;

                                                                $wikis = new CategoryController();
                                                                $wikis->countCate();
                                                                ?></h3>
                                        </div>
                                        <div class="avatar-sm flex-shrink-0">
                                            <span class="avatar-title text-bg-success rounded rounded-3 fs-3 widget-icon-box-avatar shadow">
                                                <i class="fa-solid fa-list"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div> <!-- end card-body-->
                            </div> <!-- end card-->
                        </div> <!-- end col-->
                    </div> <!-- end row -->




                    <div class="">
                        <div class="card">
                            <div class="d-flex card-header justify-content-between align-items-center">
                                <h4 class="header-title">Top Selling Products</h4>
                            </div>
                            <div>
                                <div class="table-responsive">
                                    <table class="table table-borderless table-hover table-nowrap table-centered m-0">
                                        <thead>
                                            <tr>
                                                <th scope="col">Title</th>
                                                <th scope="col">Content</th>
                                                <th scope="col">Creation Date</th>
                                                <th scope="col">Last Update</th>
                                                <th scope="col">deleted</th>
                                                <th scope="col">Category</th>
                                                <th scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $TB = new WikisController();
                                            $TB->showWikisAdminTB();
                                            ?>
                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>

                    </div>
                    <!-- container -->

                </div>
                <!-- content -->



            </div>

            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->

            <!-- Vendor js -->
            <script src="assets/js/vendor.min.js"></script>

            <!-- Daterangepicker js -->
            <script src="assets/vendor/daterangepicker/moment.min.js"></script>
            <script src="assets/vendor/daterangepicker/daterangepicker.js"></script>

            <!-- Apex Charts js -->
            <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>

            <!-- Vector Map js -->
            <script src="assets/vendor/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.min.js"></script>
            <script src="assets/vendor/admin-resources/jquery.vectormap/maps/jquery-jvectormap-world-mill-en.js"></script>

            <!-- Dashboard App js -->
            <script src="assets/js/pages/demo.dashboard.js"></script>

            <!-- App js -->
            <script src="assets/js/app.min.js"></script>

</body>

</html>