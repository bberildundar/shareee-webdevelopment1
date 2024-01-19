<?php
require __DIR__ . '/controller.php';
require __DIR__ . '/../services/postservice.php';

class PostController extends Controller
{
    private $postService;

    public function __construct()
    {
        $this->postService = new PostService();
    }

    public function newPost()
    {
        require __DIR__ . '/../views/post/newPost.php';
    }
}