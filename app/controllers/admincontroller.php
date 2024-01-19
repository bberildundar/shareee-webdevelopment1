<?php
require __DIR__ . '/controller.php';
require __DIR__ . '/../services/userservice.php';
require __DIR__ . '/../services/postSErvice.php';

class AdminController extends Controller
{
    private $userService;
    private $postService;

    function __construct()
    {
        $this->userService = new UserService();
        $this->postService = new PostService();
    }

    public function users()
    {
        $users = $this->userService->getAll();

        require __DIR__ . '/../views/admin/users.php';
    }

    public function editUser()
    {
        $user = $this->userService->getById($_GET['id']);
        require __DIR__ . '/../views/admin/editUser.php';
    }

    public function deletePost()
    {
        //$post = $this->postService->getById($_GET['id']);
        $this->postService->delete($_GET['id']);
        header('Location: /');
    }
}