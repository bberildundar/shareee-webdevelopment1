<?php
require __DIR__ . '/../../services/postservice.php';

class PostController
{
    private $postService;

    public function __construct()
    {
        $this->postService = new PostService();
    }

    function index()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $postJsonString = file_get_contents('php://input');
            $postData = json_decode($postJsonString, true);
            $post = new Post();

            $post->setText($postData['postText']);
            $post->setUserId(3); //TODO: change this

            $this->postService->insert($post);
        }
    }
}