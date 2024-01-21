<?php
session_start();
require __DIR__ . '/controller.php';
require __DIR__ . '/../services/userservice.php';
class AuthController extends Controller
{
    private $userService;

    public function __construct()
    {
        $this->userService = new UserService();
    }

    public function register()
    {
        if (isset($_SESSION['user_id']) && $_SESSION['user_id'] !== null) {
            header('Location: /');
            return;
        }
        require __DIR__ . '/../views/auth/register.php';
    }

    public function login()
    {

        if (isset($_SESSION['user_id']) && $_SESSION['user_id'] !== null) {
            header('Location: /');
            return;
        }
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $username = $_POST['username'];
            $password = $_POST['password'];

            $user = $this->userService->getByUsername($username);

            if ($user !== null && $this->userService->passwordVerify($password, $user->getPassword())) {
                $_SESSION['user_id'] = $user->getId();
                $_SESSION['username'] = $user->getUsername();
                $_SESSION['email'] = $user->getEmail();
                $_SESSION['user_role'] = $user->getRole();

                header('Location: /');
                exit;
            } else {
                $errorMessage = 'Invalid username or password';
                require __DIR__ . '/../views/auth/login.php';
            }
        }

        require __DIR__ . '/../views/auth/login.php';
    }

    public function logout()
    {
        session_destroy();
        header('Location: /');
        exit;
    }
}
