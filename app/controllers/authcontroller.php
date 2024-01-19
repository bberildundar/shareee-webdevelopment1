<?php
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
        require __DIR__ . '/../views/auth/register.php';
    }

    public function login()
    {
        require __DIR__ . '/../views/auth/login.php';
    }
}