<?php
require __DIR__ . '/controller.php';
require __DIR__ . '/../services/userservice.php';
require __DIR__ . '/../services/postService.php';

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

    public function updateUser()
    {
        $user = $this->userService->getById($_GET['id']);
        require __DIR__ . '/../views/admin/updateUser.php';
    }

    public function deletePost()
    {
        $this->postService->delete($_GET['id']);
        header('Location: /');
    }

    public function deleteUser()
    {
        $this->userService->delete($_GET['id']);
        header('Location: /admin/users');
    }
}
