<?php

namespace App\controllers;

use App\models\CategoryModel;

class CategoryController
{
    public function createCategoryControl()
    {
        $categoryName = $_POST["categoryName"] ?? '';
        if (!empty($categoryName)) {
            $categoryModel = new CategoryModel();
            $categoryModel->addCategory($categoryName);
            header("Location: /tables");
        }
    }


    public function getCategoryControl()
    {
        $categoryModel = new CategoryModel();
        $results = $categoryModel->getCategories();
        foreach ($results as $result) {
            echo " <option value='{$result['cat_id']}'>{$result['cat_name']}</option>";
        }
    }

    public function getCateg()
    {
        $tagModel = new CategoryModel();
        $results = $tagModel->getCategories();
        foreach ($results as $result) {
            echo "<li class='categoty p-2' onclick='searchCateg(event)'>{$result['cat_name']}</li>";
        }
    }
    public function getCategAdmn()
    {
        $tagModel = new CategoryModel();
        $results = $tagModel->getCategories();
        foreach ($results as $result) {
            echo "<tr>
            <td id='name_cat'>{$result['cat_name']}</td>
            <td><button class='btn btn-success mb-1 ' type='submit' name='btn_update' data-id='{$result['cat_id']}' id='btn_update' onClick='UpdateShow(event)' ><i class='fa-solid fa-pen-to-square'></i></button>
            <form action='DltCateg' method='post'>
                <input type='hidden' value=' {$result['cat_id']} ' name='Cat_inp_id' id='inpID'>
                <button class='btn btn-danger' type='submit' name='btn_delete'><i class='fa-solid fa-trash'></i></button>
            </form></td>
        </tr>";
        }
    }
    public function showWikisByCat()
    {
        $all = new CategoryModel();
        if (isset($_POST['keyword'])) {
            $results = $all->getCategorie($_POST['keyword']);

            foreach ($results as $result) :
?>
                <div class="mb-5">
                    <input type="hidden" value="<?= $result["wiki_id"] ?>" name="wikiId" />
                    <div class="about_img mb-3"><img src="assets/img/<?= $result["img"] ?>"></div>
                    <p class="post_text">Post At : <?= $result["created_at"] ?></p>
                    <p class="post_text"> <?= $result["cat_name"] ?></p>
                    <h2 class="most_text"><?= $result["title"] ?></h2>
                    <div class="lorem_text"><?= mb_strimwidth($result["content"], 0, 274, "..."); ?></div>
                    <div class="social_icon_main">
                        <div class="social_icon">
                            <ul>
                                <li><a href="#"><img src="assets/img/fb-icon.png"></a></li>
                                <li><a href="#"><img src="assets/img/twitter-icon.png"></a></li>
                                <li><a href="#"><img src="assets/img/instagram-icon.png"></a></li>
                            </ul>
                        </div>
                        <div class="read_bt "><a href="/blog?wikiId=<?= $result["wiki_id"] ?>">Read More</a></div>
                    </div>
                </div>

<?php
            endforeach;
        }
    }

    public function updateCategoryControl()
    {
        $categoryId = $_POST["categoryId"] ?? '';
        $newCategoryName = $_POST["categoryNameUpd"] ?? '';
        if (!empty($categoryId) && !empty($newCategoryName)) {
            $categoryModel = new CategoryModel();
            $categoryModel->updateCategory($categoryId, $newCategoryName);
            header("Location: /tables");
        } else {
            header("Location: /tables");
        }
    }

    public function deleteCategoryControl()
    {

        $categoryId = $_POST["Cat_inp_id"];
        if (!empty($categoryId)) {
            $categoryModel = new CategoryModel();
            $categoryModel->deleteCategory($categoryId);
            header("Location: /tables");
        } else {
            header("Location: /tables");
        }
    }

    public function countCate()
    {
        $count = new CategoryModel();
        $result = $count->countCate();
        echo $result;
    }
}
