<?php

require_once __DIR__ . '/repository.php';
require __DIR__ . '/../models/user.php';

class UserRepository extends Repository
{
    function getAll()
    {
        $stmt = $this->connection->prepare("SELECT `id`, `name`, `username`, `email`, `password`, `role` FROM `users`");

        $stmt->execute();

        $stmt->setFetchMode(PDO::FETCH_CLASS, 'User');
        $users = $stmt->fetchAll();

        return $users;
    }

    public function insert($user)
    {
        $stmt = $this->connection->prepare("INSERT INTO users (name, username, email, password, role) 
        VALUES (:name, :username, :email, :password, :role)");

        $roleValue = $user->getRole() ? 1 : 0;

        $results = $stmt->execute([
            ':name' => $user->getName(),
            ':username' => $user->getUsername(),
            ':email' => $user->getEmail(),
            ':password' => $user->getPassword(),
            ':role' => $roleValue, //uses the converted boolean value
        ]);

        return $results;
    }

    public function getById($user_id)
    {
        $stmt = $this->connection->prepare("SELECT `id`, `name`, `username`, `email`, `password`, `role` 
                                           FROM `users` WHERE `id` = :user_id");

        $stmt->execute([':user_id' => $user_id]);

        $stmt->setFetchMode(PDO::FETCH_CLASS, 'User');
        $user = $stmt->fetch();

        return $user;
    }

    public function getByUsername($username)
    {
        $stmt = $this->connection->prepare("SELECT `id`, `name`, `username`, `email`, `password`, `role` 
                                       FROM `users` WHERE `username` = :username");

        $stmt->bindValue(':username', $username, PDO::PARAM_STR);
        $stmt->execute();

        $user = null;

        while ($row = $stmt->fetch()) {
            $user = new User();
            $user->setId($row['id']);
            $user->setName($row['name']);
            $user->setEmail($row['email']);
            $user->setUsername($row['username']);
            $user->setPassword($row['password']);
            $user->setRole($row['role']);
        }

        return $user;
    }

    public function update($user)
    {
        $stmt = $this->connection->prepare("UPDATE users 
                                           SET name = :name, 
                                               username = :username, 
                                               email = :email
                                           WHERE id = :id");

        $id = $user->getId();
        $name = $user->getName();
        $username = $user->getUsername();
        $email = $user->getEmail();

        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->bindParam(':name', $name, PDO::PARAM_STR);
        $stmt->bindParam(':username', $username, PDO::PARAM_STR);
        $stmt->bindParam(':email', $email, PDO::PARAM_STR);

        $results = $stmt->execute();

        return $results;
    }


    public function delete($user_id)
    {
        //this also deletes the posts by the user 
        $stmt = $this->connection->prepare("
            DELETE users, posts
            FROM users
            LEFT JOIN posts ON users.id = posts.user_id
            WHERE users.id = :user_id
        ");

        $results = $stmt->execute([':user_id' => $user_id]);

        return $results;
    }
}
