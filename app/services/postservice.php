<?php

require __DIR__ . '/../repositories/postrepository.php';

class PostService
{
    private $postRepository;

    public function __construct()
    {
        $this->postRepository = new PostRepository();
    }

    public function getAll()
    {
        return $this->postRepository->getAll();
    }

    public function getById($id)
    {
        return $this->postRepository->getById($id);
    }

    public function getByUserId($userId)
    {
        return $this->postRepository->getByUserId($userId);
    }

    public function insert($postData)
    {
        return $this->postRepository->insert($postData);
    }

    public function delete($postId)
    {
        return $this->postRepository->delete($postId);
    }
}
