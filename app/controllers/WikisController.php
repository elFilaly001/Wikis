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
}
