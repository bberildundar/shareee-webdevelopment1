<?php
session_start();

require __DIR__ . '/../../services/postservice.php';
require __DIR__ . '/../../services/userservice.php';

class PostController
{
    private $postService;
    private $userService;

    public function __construct()
    {
        $this->postService = new PostService();
        $this->userService = new UserService();
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

    function getPosts(){
        try {
 
            $posts = $this->postService->getAll();

            foreach ($posts as $post) {
                $user = $this->userService->getById($post->getUserId());
    
                // check if user is found before accessing its properties
                if ($user) {
                    $post->setName($user->getName());
                    $post->setUsername($user->getUsername());
                }
            }

            header('Content-Type: application/json; charset=utf-8');
            echo json_encode($posts);

        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }
}
