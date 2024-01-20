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

            if (
                $this->userService->isUsernameTaken($newUser->getUsername()) !== true
                && $this->userService->isEmailTaken($newUser->getEmail()) !== true
            ) {
                $this->userService->insert($newUser);
                echo json_encode(["success" => true]);
            } else {
                // bad Request
                http_response_code(400);
                echo json_encode(["error" => "Username or email is already taken."]);
            }
        } catch (Exception $e) {
            // server Error
            http_response_code(500);
            echo json_encode(["error" => $e->getMessage()]);
        }
    }
}
