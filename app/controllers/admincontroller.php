<?php
session_start();
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
        if (!isset($_GET['id'])) {
            $errorMessage = 'No ID found';
        }

        $user = $this->userService->getById($_GET['id']);

        if ($user === false) {
            $errorMessage = 'No user found';
        }

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (isset($_POST['name'], $_POST['username'], $_POST['email'])) {
                $userToEdit = $this->userService->getById($user->getId());

                $userToEdit->setName($_POST['name']);
                $userToEdit->setUsername($_POST['username']);
                $userToEdit->setEmail($_POST['email']);
                $this->userService->update($userToEdit);
                header('Location: /admin/users');
                exit();
            } else {
                $errorMessage = 'Please enter all fields correctly';
            }
        }

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
