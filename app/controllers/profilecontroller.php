<?php
session_start();
require __DIR__ . '/controller.php';
require __DIR__ . '/../services/postservice.php';
require __DIR__ . '/../services/userservice.php';

class Profilecontroller extends Controller
{
    private $postService;
    private $userService;

    function __construct()
    {
        $this->postService = new PostService();
        $this->userService = new UserService();
    }

    public function index()
    {
        if (isset($_SESSION['user_id']) && $_SESSION['user_id'] !== null) {
            $user = $this->userService->getById($_SESSION['user_id']);
            $myPosts = $this->postService->getByUserId($_SESSION['user_id']);

            foreach ($myPosts as $post) {
                $post->setName($user->getName());
                $post->setUsername($user->getUsername());
            }

            require __DIR__ . '/../views/profile/index.php';
        } else {
            header('Location: /');
            exit();
        }
    }
}
