<?php
session_start();
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
        if (isset($_SESSION['user_id']) && $_SESSION['user_id'] !== null) {
            require __DIR__ . '/../views/post/newPost.php';
        } else {
            header('Location: /');
            exit();
        }
    }
}
