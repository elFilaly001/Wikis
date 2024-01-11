<?php

namespace App\controllers;

use App\models\TagsModel;
use PDOException;

class TagsController
{

    public $tags = [];

    public function createTagControl()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $tagName = $_POST["tagName"] ?? '';
            if (!empty($tagName)) {
                $tagModel = new TagsModel();
                return $tagModel->createTag($tagName);
            }
        }
    }

    public function getTagControl()
    {
        $tagModel = new TagsModel();
        $results = $tagModel->getTags();
        foreach ($results as $result) {
            echo " <option value='{$result['tag_id']}'>{$result['tag_name']}</option>";
        }
    }



    public function updateTagControl()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $tagId = $_POST["tagId"] ?? '';
            $newTagName = $_POST["newTagName"] ?? '';
            if (!empty($tagId) && !empty($newTagName)) {
                $tagModel = new TagsModel();
                return $tagModel->updateTag($tagId, $newTagName);
            }
        }
    }

    public function deleteTagControl()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $tagId = $_POST["tagId"] ?? '';
            if (!empty($tagId)) {
                $tagModel = new TagsModel();
                return $tagModel->deleteTag($tagId);
            }
        }
    }

    public function countTags()
    {
        $count = new TagsModel();
        $result = $count->countTags();
        echo $result;
    }
}
