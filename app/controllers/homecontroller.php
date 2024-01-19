<?php
require __DIR__ . '/controller.php';
require __DIR__ . '/../services/postservice.php';
require __DIR__ . '/../services/userservice.php';

class HomeController extends Controller
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
        $posts = $this->postService->getAll();

        foreach ($posts as $post) {
            $user = $this->userService->getById($post->getUserId());

            // Check if user is found before accessing its properties
            if ($user) {
                $post->setName($user->getName());
                $post->setUsername($user->getUsername());
            }
        }

        require __DIR__ . '/../views/home/index.php';
    }
}