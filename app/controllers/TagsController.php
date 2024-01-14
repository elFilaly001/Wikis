<?php

namespace App\controllers;

use App\models\CategoryModel;
use App\models\TagsModel;
use PDOException;

class TagsController
{

    public $tags = [];

    public function createTagControl()
    {
        $tagName = $_POST["TagName"] ?? '';
        if (!empty($tagName)) {
            $tagModel = new TagsModel();
            $tagModel->createTag($tagName);
            header("location: /tables");
        } else {
            echo "please fill up the input";
        }
    }


    public function getTags()
    {
        $tagModel = new TagsModel();
        $results = $tagModel->getTags();
        foreach ($results as $result) {
            echo "<tr>
            <td id='name_Tag'>{$result['tag_name']}</td>
            <td><button class='btn btn-success mb-1 ' type='submit' name='btn_update' data-id='{$result['tag_id']}' id='btn_update' onClick='TagUpdateShow(event)'><i class='fa-solid fa-pen-to-square'></i></button>
            <form action='DltTag' method='post'>
                <input type='hidden' value=' {$result['tag_id']} ' name='tagId' id='inpID'>
                <button class='btn btn-danger' type='submit' name='btn_delete'><i class='fa-solid fa-trash'></i></button>
            </form></td>
        </tr>";
        }
    }
    public function getTagControl()
    {
        $tagModel = new TagsModel();
        $results = $tagModel->getTags();
        foreach ($results as $result) {
            echo " <option value='{$result['tag_id']}' Selected>{$result['tag_name']}</option>";
        }
    }



    public function updateTagControl()
    {

        $tagId = $_POST["TagId"] ?? '';
        $newTagName = $_POST["TagNameUpd"] ?? '';
        if (!empty($tagId) && !empty($newTagName)) {
            $tagModel = new TagsModel();
            $tagModel->updateTag($tagId, $newTagName);
            header("location: /tables");
        }
    }

    public function deleteTagControl()
    {

        $tagId = $_POST["tagId"] ?? '';
        $tagModel = new TagsModel();
        $tagModel->deleteTag($tagId);
        header("location: /tables");
    }

    public function countTags()
    {
        $count = new TagsModel();
        $result = $count->countTags();
        echo $result;
    }
}
