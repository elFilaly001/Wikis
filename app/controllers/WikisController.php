<?php

namespace App\controllers;

use App\models\TagsModel;
use App\models\WikisModel;
use App\models\WikisTagsModel;
use PDOException;

class WikisController
{
    public function addWiki()
    {
        $wiki = new WikisModel();
        if (isset($_POST['Add_wiki'])) {
            $Titre = $_POST['Titre'];
            $article =  $_POST['Article'];
            $Category =  $_POST['Category'];
            $Tags =  $_POST['Tags'];
            $image_name = $_FILES['ArticleImg']['name'];
            $image_temp = $_FILES['ArticleImg']['tmp_name'];
            $image_type = $_FILES['ArticleImg']['type'];
            $image_size = $_FILES['ArticleImg']['size'];
            $image_error = $_FILES['ArticleImg']['error'];
            $allowed = array('jpg', 'png', 'jpeg');
            $image = explode('.', $image_name);
            $image_ext = strtolower(end($image));
            if ($image_error == 4) {
                echo "file is not uploaded";
            } else if ($image_size) {
                if (in_array($image_ext, $allowed)) {
                    $art_img = uniqid() . $image_name;
                    move_uploaded_file($image_temp, $_SERVER['DOCUMENT_ROOT'] . '/assets/img/' . $art_img);
                    $wikis = $wiki->addWiki($Titre, $article, $art_img, $_SESSION['user_id'], $Category);
                    $getLastWiki = $wiki->getLastWiki();
                    if (isset($Tags)) {
                        $tag = new TagsModel();
                        $wikitag = new WikisTagsModel();
                        for ($i = 0; $i < count($Tags); $i++) {
                            $wikitag->linkTagToWiki($Tags[$i], $getLastWiki);
                        }
                    }
                    if ($wikis) {
                        header('Location: /Article');
                    }
                } else {
                    echo "file is not valid you need this extention ('jpg' , 'png' , 'jfif')";
                }
            } else {
                echo "size to file is too heigh to upload";
            }
        }
    }
    public function updateWiki()
    {
        try {
            $wiki = new WikisModel();
            if (isset($_POST['Update'])) {
                $idWiki = $_POST['wiki_id'];
                $Titre = $_POST['Titre'];
                $article =  $_POST['Article'];
                $Category =  $_POST['Category'];
                $image_name = $_FILES['ArticleImg']['name'];
                $image_temp = $_FILES['ArticleImg']['tmp_name'];
                $image_type = $_FILES['ArticleImg']['type'];
                $image_size = $_FILES['ArticleImg']['size'];
                $image_error = $_FILES['ArticleImg']['error'];
                $allowed = array('jpg', 'png', 'jpeg');
                $image = explode('.', $image_name);
                $image_ext = strtolower(end($image));
                if ($image_error == 4) {
                    echo "file is not uploaded";
                } else if ($image_size) {
                    if (in_array($image_ext, $allowed)) {
                        $art_img = uniqid() . $image_name;
                        move_uploaded_file($image_temp, $_SERVER['DOCUMENT_ROOT'] . '/assets/img/' . $art_img);
                        $wikis = $wiki->updateWiki($Titre, $article, $art_img, $_SESSION['user_id'], $Category, $idWiki);
                        if ($wikis) {
                            header('Location: /Article');
                        }
                    } else {
                        echo "file is not valid you need this extention ('jpg' , 'png' , 'jfif')";
                    }
                } else {
                    echo "size to file is too heigh to upload";
                }
            }
        } catch (PDOException $e) {
            echo "error" . $e->getMessage();
        }
    }

    public function countWikis()
    {
        $count = new WikisModel();
        $result = $count->countWikis();
        echo $result;
    }

    public function showWikis()
    {
        $all = new WikisModel();
        if (isset($_POST['keyword'])) {
            $results = $all->findWiki($_POST['keyword']);

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

    public function showWiki()
    {
        $id = $_GET["wikiId"];
        $wiki = new WikisModel();
        $result = $wiki->getwiki($id);
        echo '<div class="about_section layout_padding">
                <div class="container">
                    <div class="row">
                        <div class="about_img"><img src="assets/img/' . $result[0]["img"] . '"></div>
                        <p class="post_text">Post At: ' . $result[0]["created_at"] . '</p>
                        <h2 class="most_text">' . $result[0]["title"] . '</h2>
                        <p class="lorem_text">' . $result[0]["content"] . '</p>
                        </div>
                        </div>
                        </div>';
    }
    public function showTenWiki()
    {
        $wiki = new WikisModel();
        $results = $wiki->getLastTenWiki();
        foreach ($results as $result) :
            ?>
            <div class="recent_box">
                <div class="recent_left">
                    <div class="image_6"><img src="assets/img/<?= $result["img"] ?>"></div>
                </div>
                <div class="recent_right">
                    <h3 class="consectetur_text"><?= $result["title"] ?></h3>
                    <p class="dolor_text"><?= mb_strimwidth($result["content"], 0, 68, "...");  ?></p>
                </div>
            </div>
        <?php
        endforeach;
    }

    public function showWikisTB()
    {
        $wiki = new WikisModel();
        $results = $wiki->getwikisTB($_SESSION["user_id"]);
        foreach ($results as $result) :
        ?>
            <tr>
                <th scope="row"><?= $result["title"] ?></th>
                <td><?= mb_strimwidth($result["content"], 0, 40, "...");  ?></td>
                <td><?= $result["created_at"] ?></td>
                <td><?= $result["updated_at"] ?></td>
                <td><?= $result["deleted_at"] ?></td>
                <td><?= $result["cat_name"] ?></td>
                <td>
                    <button class="btn btn-success mb-1 " type="submit" name="btn_update" data-id="<?= $result["wiki_id"] ?>" id="btn_update" onclick="getdata(event)"><i class="fa-solid fa-pen-to-square"></i></button>
                    <form action="/UserDltWiki" method="post">
                        <input type="hidden" value="<?= $result["wiki_id"] ?>" name="wiki_id" id="inpID">
                        <button class="btn btn-danger" type="submit" name="btn_delete"><i class="fa-solid fa-trash"></i></button>
                    </form>

                </td>
            </tr>
        <?php
        endforeach;
    }
    public function showWikisAdminTB()
    {
        $wiki = new WikisModel();
        $results = $wiki->getwikisAdTB();
        foreach ($results as $result) :
        ?>
            <tr>
                <th scope="row"><?= $result["title"] ?></th>
                <td><?= mb_strimwidth($result["content"], 0, 40, "...");  ?></td>
                <td><?= $result["created_at"] ?></td>
                <td><?= $result["updated_at"] ?></td>
                <td><?= $result["deleted_at"] ?></td>
                <td><?= $result["cat_name"] ?></td>
                <td>
                    <form action="/AdminDltWiki" method="post">
                        <input type="hidden" value="<?= $result["wiki_id"] ?>" name="wiki_id" id="inpID">
                        <button class="btn btn-danger" type="submit" name="btn_delete"><i class="fa-solid fa-trash"></i></button>
                    </form>

                </td>
            </tr>
<?php
        endforeach;
    }

    public function getWikiId()
    {
        $id = $_POST["ID"];
        $wiki = new WikisModel();
        $results = $wiki->getWikiById($id);
        $res = json_encode($results);
        header("content-type: application/json");
        echo $res;
    }

    public function deleteWiki()
    {
        $id = $_POST["wiki_id"];
        $wiki = new WikisModel();
        $wiki->UserdeleteWiki($id);
        header("Location: /Article");
    }
    public function AdmindeleteWiki()
    {
        $id = $_POST["wiki_id"];
        $wiki = new WikisModel();
        $wiki->deleteWiki($id);
        header("Location: /Dash");
    }
}
