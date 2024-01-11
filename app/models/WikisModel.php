<?php

namespace App\models;

use App\models\Database;
use PDO;

class WikisModel
{

    public $db;

    public function __construct()
    {
        $this->db = Database::connect();
    }

    public function addWiki($title, $content, $img = "NULL", $user_id, $cat_id)
    {
        $sql = "INSERT INTO wikis (title, content, img, user_id, cat_id) VALUES (?, ?, ?, ?, ?)";
        $stmt = $this->db->prepare($sql);
        return  $stmt->execute([$title, $content, $img, $user_id, $cat_id]);
    }
    public function updateWiki($wiki_id, $title, $content, $img, $user_id, $cat_id)
    {
        $sql = "UPDATE wikis SET title=?, content=?, img=?, user_id=?, cat_id=?, updated_at=CURRENT_TIMESTAMP WHERE wiki_id=?";
        $stmt = $this->db->prepare($sql);
        return $stmt->execute([$title, $content, $img, $user_id, $cat_id, $wiki_id]);
    }
    public function deleteWiki($wiki_id)
    {
        $sql = "UPDATE wikis SET deleted_at=CURRENT_TIMESTAMP WHERE wiki_id=?";
        $stmt = $this->db->prepare($sql);
        return $stmt->execute([$wiki_id]);
    }

    public function getLastWiki()
    {
        $sql = "Select wiki_id from wikis order by wiki_id desc limit 1";
        $stmt = $this->db->prepare($sql);
        return $stmt->execute();
    }
    public function countWikis()
    {
        $sql = "Select count(*) as wiki from wikis";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        $results = $stmt->fetch(PDO::FETCH_ASSOC);
        return $results["wiki"];
    }
}