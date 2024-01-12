<!-- header section start -->
<div class="header_section">
    <div class="container-fluid header_main">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="logo" href="/"><img src="assets/img/logo.png"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse d-flex justify-content-between" id="navbarSupportedContent">
                <div>
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="/">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/blog">Blog</a>
                        </li>
                        <?php
                        if (!isset($_SESSION["email"])) {
                        ?>
                            <li class="nav-item">
                                <a class="nav-link" href="/login">Login</a>
                            </li>
                        <?php
                        } else {
                        ?>
                            <li class="nav-item">
                                <a class="nav-link" href="/Article">New Article</a>
                            </li>
                        <?php
                        }
                        ?>
                </div>
                <div>
                    <li class="nav-item d-flex">
                        <input type="text" class="form-control" id="search_inp" style="margin-right: 20px;">
                        <button style="border: none; background-color: transparent;" id="search_btn" onclick="search()"><i class="fa-solid fa-magnifying-glass" style="font-size: 30px;color: white;"></i></button>
                    </li>
                </div>


                </ul>
            </div>
        </nav>
    </div>
</div>
<!-- header section end -->