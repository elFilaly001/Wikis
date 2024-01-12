<?php

namespace App\controllers;

use App\models\TagsModel;
use App\models\WikisModel;
use App\models\WikisTagsModel;

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
                <div>
                    <input type="hidden" value="<?= $result["wiki_id"] ?>" name="wikiId" />
                    <div class="about_img mb-3"><img src="assets/img/<?= $result["img"] ?>"></div>
                    <p class="post_text">Post At : <?= $result["created_at"] ?></p>
                    <p class="post_text"> <?= $result["cat_name"] ?></p>
                    <h2 class="most_text"><?= $result["title"] ?></h2>
                    <p class="lorem_text"><?= $result["content"] ?></p>
                    <div class="social_icon_main">
                        <div class="social_icon">
                            <ul>
                                <li><a href="#"><img src="assets/img/fb-icon.png"></a></li>
                                <li><a href="#"><img src="assets/img/twitter-icon.png"></a></li>
                                <li><a href="#"><img src="assets/img/instagram-icon.png"></a></li>
                            </ul>
                        </div>
                        <div class="read_bt"><a href="/blog?wikiId=<?= $result["wiki_id"] ?>">Read More</a></div>
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
}
