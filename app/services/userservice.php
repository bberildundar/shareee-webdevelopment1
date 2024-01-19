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
    public function insert($user)
    {
        return $this->userRepository->insert($user);
    }

    public function edit($user)
    {
        return $this->userRepository->edit($user);
    }

    public function delete($user_id)
    {
        return $this->userRepository->delete($user_id);
    }
}