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
    public function updateWiki($title, $content, $img, $user_id, $cat_id, $wiki_id)
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
    public function UserdeleteWiki($wiki_id)
    {
        $sql = "delete from wikis WHERE wiki_id=?";
        $stmt = $this->db->prepare($sql);
        return $stmt->execute([$wiki_id]);
    }

    public function getLastWiki()
    {
        $sql = "Select wiki_id from wikis order by wiki_id desc limit 1";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
    public function getLastTenWiki()
    {
        $sql = "Select * from wikis where deleted_at is NULL order by wiki_id desc limit 10";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $results;
    }
    public function countWikis()
    {
        $sql = "Select count(*) as wiki from wikis";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        $results = $stmt->fetch(PDO::FETCH_ASSOC);
        return $results["wiki"];
    }

    public function findWiki($keyword)
    {
        $sql = "select * from wikis w , categories c where w.cat_id = c.cat_id and w.title like '%$keyword%' and w.deleted_at is NULL;";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $results;
    }
    public function getwiki($id)
    {
        $sql = "select * from wikis w , categories c where w.cat_id = c.cat_id and wiki_id = ?";
        $stmt = $this->db->prepare($sql);
        $stmt->execute([$id]);
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $results;
    }
    public function getwikisTB($user)
    {
        $sql = "select * from wikis w , categories c where w.cat_id = c.cat_id and w.user_id = ?";
        $stmt = $this->db->prepare($sql);
        $stmt->execute([$user]);
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $results;
    }
    public function getwikisAdTB()
    {
        $sql = "select * from wikis w , categories c where w.cat_id = c.cat_id";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $results;
    }
    public function getWikiById($id)
    {
        $sql = "SELECT * FROM wikis w, categories c WHERE w.cat_id = c.cat_id  AND w.wiki_id = ?";
        $stmt = $this->db->prepare($sql);
        $stmt->execute([$id]);
        $results = $stmt->fetch(PDO::FETCH_ASSOC);
        return $results;
    }
}
