<?php

require __DIR__ . '/../repositories/userrepository.php';

class UserService
{
    private $userRepository;

    public function __construct()
    {
        $this->userRepository = new UserRepository();
    }

    public function getAll()
    {
        return $this->userRepository->getAll();
    }

    public function getById($id)
    {
        return $this->userRepository->getById($id);
    }
    public function getByUsername($username)
    {
        return $this->userRepository->getByUsername($username);
    }
    public function insert($user)
    {
        return $this->userRepository->insert($user);
    }
    public function isUsernameTaken($username)
    {
        return $this->userRepository->isUsernameTaken($username);
    }
    public function isEmailTaken($email)
    {
        return $this->userRepository->isEmailTaken($email);
    }

    public function update($user)
    {
        return $this->userRepository->update($user);
    }

    public function delete($user_id)
    {
        return $this->userRepository->delete($user_id);
    }
}
