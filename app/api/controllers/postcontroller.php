<?php
session_start();

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
        try {
            //if there's a logged in user
            if ($_SESSION['user_id']) {
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $postJsonString = file_get_contents('php://input');
                    $postData = json_decode($postJsonString, true);
                    $post = new Post();

                    $post->setText($postData['postText']);
                    $post->setUserId($_SESSION['user_id']);

                    $this->postService->insert($post);
                }
            } else {
                //if theres no logged in user, api method will do nothing
                return;
            }
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }
}
