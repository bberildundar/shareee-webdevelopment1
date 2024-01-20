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
        if ($this->isAdmin()) {
            $users = $this->userService->getAll();
            require __DIR__ . '/../views/admin/users.php';
        } else {
            header('Location: /');
        }
    }

    public function updateUser()
    {
        if ($this->isAdmin()) {
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
        } else {
            header('Location: /');
        }
    }

    public function deletePost()
    {
        if ($this->isAdmin()) {
            $this->postService->delete($_GET['id']);
            header('Location: /');
        } else {
            header('Location: /');
        }
    }

    public function deleteUser()
    {
        if ($this->isAdmin()) {
            $this->userService->delete($_GET['id']);
            header('Location: /admin/users');
        } else {
            header('Location: /');
        }
    }

    function isAdmin()
    {
        //checking if the user is admin.
        if (isset($_SESSION['user_role']) && $_SESSION['user_role'] !== null && $_SESSION['user_role'] == true) {
            return true;
        }
        return false;
    }
}
