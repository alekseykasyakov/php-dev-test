<?php

namespace silverorange\DevTest\Model;

class Post
{
    private $db;

    public function __construct(\PDO $db)
    {
        $this->db = $db;
    }

    public function save($data): void
    {
        $query = ("INSERT INTO Posts (id, title, body, created_at, modified_at, author)
                   VALUES (:id, :title, :body, :created_at, :modified_at, :author)");
        $this->db->prepare($query)->execute($data);
    }

    public function getPost($id): array
    {
        $query = ("SELECT p.id, p.title, p.body, a.full_name FROM Posts p
                   LEFT JOIN Authors a ON p.author = a.id
                   WHERE p.id = '$id'");
        return $this->db->query($query)->fetch();
    }
}
