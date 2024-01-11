<?php

namespace App\models;

use App\models\Database;

use PDOException;

class WikisTagsModel
{
    private $db;

    public function __construct()
    {
        $this->db = Database::connect();
    }

    public function linkTagToWiki($tagId, $wikiId)
    {
        try {
            $sql = "INSERT INTO wikis_tags (tag_id, wiki_id) VALUES (?, ?)";
            $stmt = $this->db->prepare($sql);
            $stmt->execute([$tagId, $wikiId]);
            return $this->db->lastInsertId();
        } catch (PDOException $e) {
            return $e->getMessage();
        }
    }

    public function unlinkTagFromWiki($tagId, $wikiId)
    {
        try {
            $sql = "DELETE FROM wikis_tags WHERE tag_id = ? AND wiki_id = ?";
            $stmt = $this->db->prepare($sql);
            $stmt->execute([$tagId, $wikiId]);
            return $stmt->rowCount();
        } catch (PDOException $e) {
            return $e->getMessage();
        }
    }

    public function getTagsForWiki($wikiId)
    {
        try {
            $sql = "SELECT tags.* FROM tags
                    INNER JOIN wikis_tags ON tags.tag_id = wikis_tags.tag_id
                    WHERE wikis_tags.wiki_id = ?";
            $stmt = $this->db->prepare($sql);
            $stmt->execute([$wikiId]);

            return $stmt->fetchAll(\PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            return $e->getMessage();
        }
    }

    public function getWikisForTag($tagId)
    {
        try {
            $sql = "SELECT wikis.* FROM wikis
                    INNER JOIN wikis_tags ON wikis.wiki_id = wikis_tags.wiki_id
                    WHERE wikis_tags.tag_id = ?";
            $stmt = $this->db->prepare($sql);
            $stmt->execute([$tagId]);
            return $stmt->fetchAll(\PDO::FETCH_ASSOC);
        } catch (\PDOException $e) {
            return $e->getMessage();
        }
    }
}
