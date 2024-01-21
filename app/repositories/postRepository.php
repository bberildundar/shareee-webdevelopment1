<?php

require_once __DIR__ . '/repository.php';
require __DIR__ . '/../models/post.php';

class PostRepository extends Repository
{

    public function getAll()
    {
        $stmt = $this->connection->prepare("SELECT `id`, `text`, `user_id` FROM posts ORDER BY id DESC");
        $stmt->execute();

        $stmt->setFetchMode(PDO::FETCH_CLASS, 'Post');
        $posts = $stmt->fetchAll();

        return $posts;
    }

    public function getById($post_id)
    {
        $stmt = $this->connection->prepare("SELECT `id`, `text`, `user_id` FROM posts WHERE id = :post_id");

        $stmt->bindParam(':post_id', $post_id, PDO::PARAM_INT);

        $stmt->execute();

        $stmt->setFetchMode(PDO::FETCH_CLASS, 'Post');
        $post = $stmt->fetch();

        return $post;
    }


    public function getByUserId($user_id)
    {
        $stmt = $this->connection->prepare("SELECT `id`, `text`, `user_id` FROM posts WHERE user_id = :user_id ORDER BY id DESC");

        $stmt->bindParam(':user_id', $user_id, PDO::PARAM_INT);

        $stmt->execute();

        $stmt->setFetchMode(PDO::FETCH_CLASS, 'Post');
        $posts = $stmt->fetchAll();

        return $posts;
    }


    public function insert($post)
    {


        $stmt = $this->connection->prepare("INSERT INTO posts (`text`, `user_id`) 
        VALUES (:text, :user_id)");

        // Using execute() with an associative array, PDO infers parameter types based on the actual values.
        // source: https://www.php.net/manual/en/pdostatement.execute.php
        $results = $stmt->execute([
            ':text' => $post->getText(),
            ':user_id' => $post->getUserId(),
        ]);

        return $results;
    }

    public function delete($post_id)
    {
        $stmt = $this->connection->prepare("DELETE FROM posts WHERE id = :post_id");

        $stmt->bindParam(':post_id', $post_id, PDO::PARAM_INT);
        $results = $stmt->execute();

        return $results;
    }
}
