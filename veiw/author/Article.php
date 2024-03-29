<?php

use App\controllers\CategoriesController;
use App\controllers\TagsController;
use App\controllers\CategoryController;
use App\controllers\WikisController;

$tags = new TagsController();
$category = new CategoryController();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>Bloscot</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <!-- style css -->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <!-- Responsive-->
    <link rel="stylesheet" href="assets/css/responsive.css">
    <!-- fevicon -->
    <link rel="icon" href="assets/img/fevicon.png" type="image/gif" />
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="assets/css/jquery.mCustomScrollbar.min.css">
    <!-- Tweaks for older IEs-->
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <!-- owl stylesheets -->
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesoeet" href="assets/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <link rel="stylesheet" href="node_modules/mdbootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="node_modules/mdbootstrap/css/mdb.min.css">
    <link rel="stylesheet" href="node_modules/mdbootstrap/css/style.css">

    <!-- tom select -->
    <link href="https://cdn.jsdelivr.net/npm/tom-select@2.3.1/dist/css/tom-select.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/tom-select@2.3.1/dist/js/tom-select.complete.min.js"></script>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- TinyMCE -->
    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
        tinymce.init({
            selector: 'textarea#tiny',
            plugins: [
                'a11ychecker', 'advlist', 'advcode', 'advtable', 'autolink', 'checklist', 'export',
                'lists', 'link', 'image', 'charmap', 'preview', 'anchor', 'searchreplace', 'visualblocks',
                'powerpaste', 'fullscreen', 'formatpainter', 'insertdatetime', 'media', 'table', 'help', 'wordcount'
            ],
            toolbar: 'undo redo | a11ycheck casechange blocks | bold italic backcolor | alignleft aligncenter alignright alignjustify |' +
                'bullist numlist checklist outdent indent | removeformat | code table help'
        })
    </script>
</head>

<body>

    <?php
    require_once __DIR__ . "/../component/header.php";
    ?>

    <div class="about_section layout_padding">
        <div class="container mb-5">
            <div class="table-wrapper-scroll-y my-custom-scrollbar">
                <table class="table table-bordered table-striped mb-0">
                    <thead>
                        <tr>
                            <th scope="col">Title</th>
                            <th scope="col">Content</th>
                            <th scope="col">Creation Date</th>
                            <th scope="col">Last Update</th>
                            <th scope="col">Deleted By Admin</th>
                            <th scope="col">Category</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $TB = new WikisController();
                        $TB->showWikisTB();
                        ?>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="container">
            <form action="/post_Wiki" method="post" enctype="multipart/form-data">

                <input type="hidden" id="wiki_id" name="wiki_id">
                <label for="exampleForm2" class="mb-3">Title</label>
                <input type="text" id="title" class="form-control mb-4" name="Titre">

                <label for="exampleForm2" class="mb-3">Content</label>
                <div>
                    <textarea id="tiny" name="Article"></textarea>
                </div>
                <label class="mb-3">Article's image</label>
                <input type="file" id="img" class="form-control mb-4" name="ArticleImg">

                <label class="mb-3">Tags</label>
                <select id="input-tags2" class="mb-3" autocomplete="off" name="Tags[]">
                    <option> </option>
                    <?php
                    $tags->getTagControl();
                    ?>
                </select>

                <label class=" mb-3">Categories</label>
                <select name="Category" id="Category" class="browser-default custom-select mb-3">
                    <?php
                    $category->getCategoryControl();
                    ?>
                </select>
                <br>
                <button type="submit" class="btn btn-primary mb-5" id="btnAdd" name="Add_wiki">Add Wiki</button>
                <button type="submit" class="btn btn-danger mb-5" id="btnUpd" style="display: none;" name="Update">Update Wiki</button>
            </form>
        </div>
    </div>

    <div class="copyright_section">
        <div class="container">
            <p class="copyright_text">Copyright 2020 All Right Reserved By.<a href="https://html.design"> Free html Templates</a></p>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/css/tom-select.default.css">
    <script src="/js/tom-select.complete.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script>
        var settings = {};
        var selm = new TomSelect('#input-tags2', {
            plugins: ['remove_button'],
            persist: true,
            create: false,
            maxItems: 10,
        });
    </script>

    <script>
        let $sb_btn_Update = $("#btnUpd");
        let $sb_btn_Add = $("#btnAdd");

        function getdata(e) {
            let btn_update = e.currentTarget.dataset.id;
            let inpID = document.getElementById("inpID").value;
            let inpwiki_ID = document.getElementById("wiki_id");
            let title = document.getElementById("title");
            let tiny = document.getElementById("tiny");
            let file = document.getElementById("img");
            let tags = document.getElementById("input-tags2");
            let options = tags.querySelectorAll("option");
            let Category = document.getElementById("Category");
            let tagsId = [];

            $.ajax({
                method: "POST",
                url: "/getWiki",
                data: {
                    ID: btn_update,
                },

                success: function(res) {
                    console.log(res["tags"]);
                    title.value = res["wiki"].title;
                    tinymce.get('tiny').setContent(res["wiki"].content);
                    Category.value = res["wiki"].cat_id;
                    inpwiki_ID.value = res["wiki"].wiki_id;
                    $sb_btn_Update.show();
                    $sb_btn_Add.hide();
                    console.log(options);
                    for (i = 0; i < res["tags"].length; i++) {
                        tagsId.push(res["tags"][i]["tag_id"]);
                    }
                    for (i = 0; i < options.length; i++) {
                        if (tagsId.includes(Number(options[i].value))) {
                            options[i].setAttribute("selected", "selected");
                        }
                    }
                    selm.sync();
                }
            })
        }

        $sb_btn_Update.click(() => {
            $sb_btn_Update.hide();
            $sb_btn_Add.show();
        })
    </script>
</body>

</html>