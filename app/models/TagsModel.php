<?php

namespace App\models;

use App\models\Database;

use PDO;
use PDOException;

class TagsModel
{
    private $db;

    public function __construct()
    {
        $this->db = Database::connect();
    }

    public function createTag($tagName)
    {
        $sql = "INSERT INTO tags (tag_name) VALUES (?)";
        $stmt = $this->db->prepare($sql);
        return $stmt->execute([$tagName]);
    }

    public function getTags()
    {

        try {

            $sql = "SELECT * FROM tags ";
            $stmt = $this->db->prepare($sql);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo "error : " . $e->getMessage();
        }
    }
    public function getTagsById($id)
    {

        try {

            $sql = "SELECT * FROM tags where tag_id = ? ";
            $stmt = $this->db->prepare($sql);
            $stmt->execute([$id]);
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo "error : " . $e->getMessage();
        }
    }

    public function updateTag($tagId, $newTagName)
    {
        $sql = "UPDATE tags SET tag_name = ? WHERE tag_id = ?";
        $stmt = $this->db->prepare($sql);
        return $stmt->execute([$newTagName, $tagId]);
    }

    public function deleteTag($tagId)
    {
        $sql = "DELETE FROM tags WHERE tag_id = ?";
        $stmt = $this->db->prepare($sql);
        return $stmt->execute([$tagId]);
    }
    public function countTags()
    {
        $sql = "Select count(*) as tag from tags";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        $results = $stmt->fetch(PDO::FETCH_ASSOC);
        return $results["tag"];
    }
    public function getTagsBywikiId($id)
    {
        $sql = "SELECT * FROM wikis_tags w, tags t WHERE w.tag_id=t.tag_id  AND w.wiki_id = ?";
        $stmt = $this->db->prepare($sql);
        $stmt->execute([$id]);
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $results;
    }
}
