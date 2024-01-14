<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from coderthemes.com/jidox/layouts/tables-basic.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 08 Jan 2024 14:31:14 GMT -->

<head>
    <meta charset="utf-8" />
    <title>Basic Tables | Jidox - Material Design Admin & Dashboard Template</title>
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

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <!-- Begin page -->
    <div class="wrapper">


        <?php

        use App\controllers\CategoryController;
        use App\controllers\TagsController;

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
                        <div class="col-xl-6">
                            <div class="card">
                                <div class="card-body">

                                    <h4 class="header-title">Tags</h4>

                                    <div class="table-responsive-sm">
                                        <table class="table table-centered mb-3">
                                            <thead>
                                                <tr>
                                                    <th>Name</th>
                                                    <th>Action</th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $tags = new TagsController();
                                                $tags->getTags();
                                                ?>
                                            </tbody>
                                        </table>
                                        <div class="Add_form_Tag">
                                            <form action="/AddTag" method="post">
                                                <input type="text" name="TagName" id="TagName" class="form-control">
                                                <button type="submit" name="add_Tag" class="btn btn-primary mt-3">Add</button>
                                            </form>
                                        </div>
                                        <div class="upd_form_Tag" style="display: none;">
                                            <form action="/UpdTag" method="post">
                                                <input type="hidden" name="TagId" id="TagId" class="form-control">
                                                <input type="text" name="TagNameUpd" id="TagNameUpd" class="form-control" value="">
                                                <button type="submit" name="add_Tag" class="btn btn-success mt-3">Update</button>
                                            </form>
                                        </div>
                                    </div> <!-- end table-responsive-->

                                </div> <!-- end card body-->
                            </div> <!-- end card -->
                        </div><!-- end col-->
                        <div class="col-xl-6">
                            <div class="card">
                                <div class="card-body">

                                    <h4 class="header-title">Categories</h4>

                                    <div class="table-responsive-sm">
                                        <table class="table table-centered mb-3">
                                            <thead>
                                                <tr>
                                                    <th>Name</th>
                                                    <th>Action</th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $tags = new CategoryController();
                                                $tags->getCategAdmn();
                                                ?>
                                            </tbody>
                                        </table>
                                        <div class="Add_form">
                                            <form action="/AddCateg" method="post">
                                                <input type="text" name="categoryName" id="categoryName" class="form-control">
                                                <button type="submit" name="add_categ" class="btn btn-primary mt-3">Add</button>
                                            </form>
                                        </div>
                                        <div class="upd_form" style="display: none;">
                                            <form action="/UpdCateg" method="post">
                                                <input type="hidden" name="categoryId" id="categoryId" class="form-control">
                                                <input type="text" name="categoryNameUpd" id="categoryNameUpd" class="form-control" value="">
                                                <button type="submit" name="add_categ" class="btn btn-success mt-3">Update</button>
                                            </form>
                                        </div>
                                    </div> <!-- end table-responsive-->

                                </div> <!-- end card body-->
                            </div> <!-- end card -->
                        </div><!-- end col-->

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
        <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

        <script>
            function UpdateShow(e) {
                let Upd_btn = e.currentTarget.dataset.id;
                let Inp_id = document.getElementById("categoryId");
                let Inp_Name = document.getElementById("categoryNameUpd");
                let Inp_name_tb = e.currentTarget.closest("tr").querySelector('#name_cat');
                let Add_form = $(".Add_form");
                let Upd_form = $(".upd_form");

                Add_form.hide();
                Upd_form.show();

                Inp_id.value = Upd_btn;
                console.log(Inp_Name);
                console.log(Inp_name_tb.innerText);
                Inp_Name.value = Inp_name_tb.innerText;

            }

            function TagUpdateShow(e) {
                let Upd_btn = e.currentTarget.dataset.id;
                let Inp_id = document.getElementById("TagId");
                let Inp_Name = document.getElementById("TagNameUpd");
                let Inp_name_tb = e.currentTarget.closest("tr").querySelector('#name_Tag');
                let Add_form = $(".Add_form_Tag");
                let Upd_form = $(".upd_form_Tag");

                Add_form.hide();
                Upd_form.show();

                Inp_id.value = Upd_btn;
                console.log(Inp_Name);
                console.log(Inp_name_tb.innerText);
                Inp_Name.value = Inp_name_tb.innerText;

            }
        </script>

</body>

<!-- Mirrored from coderthemes.com/jidox/layouts/tables-basic.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 08 Jan 2024 14:31:14 GMT -->

</html>