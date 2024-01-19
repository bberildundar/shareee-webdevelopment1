<?php
require __DIR__ . '/../../services/userService.php';

class AuthController
{
    private $userService;

    public function __construct()
    {
        $this->userService = new UserService();
    }

    function index()
    {
        try {
            $userJsonString = file_get_contents('php://input');
            $newUserData = json_decode($userJsonString, true);
            $newUser = new User();

            $newUser->setName($newUserData['name']);
            $newUser->setEmail($newUserData['email']);
            $newUser->setUsername($newUserData['username']);
            $newUser->setPassword($newUserData['password']);
            $newUser->setRole(false); // 0 as default NORMAL user. false is a normal user

            $this->userService->insert($newUser);
        } catch (Exception $e) {

            echo "Error: " . $e->getMessage();
        }
    }
}