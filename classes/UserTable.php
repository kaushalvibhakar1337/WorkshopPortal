<?php

require_once 'User.php';

class UserTable
{
    private $link;

    public function __construct($connection)
    {
        $this->link = $connection;
    }

    public function insert($user)
    {
        if (!isset($user)) {
            throw new Exception("User Required");
        }
        $sql = "INSERT INTO users(username, password, role) "
            . "VALUES (:username, :password, :role)";

        $params = array(
            'username' => $user->getUsername(),
            'password' => $user->getPassword(),
            'role' => $user->getRole()
        );
        $stmt = $this->link->prepare($sql);
        $status = $stmt->execute($params);
        if ($status != true) {
            $errorInfo = $stmt->errorInfo();
            throw new Exception("Could not save User : " . $errorInfo[2]);
        }

        $id = $this->link->lastInsertId('users');

        return $id;
    }

    public function delete($user)
    {
        if (!isset($user)) {
            throw new Exception("User Required");
        }
        $id = $user->getId();
        if ($id == null) {
            throw new Exception("User ID Required");
        }
        $sql = "DELETE FROM users WHERE id = :id";
        $params = array('id' => $user->getId());
        $stmt = $this->link->prepare($sql);
        $status = $stmt->execute($params);
        if ($status != true) {
            $errorInfo = $stmt->errorInfo();
            throw new Exception("Could not delete User : " . $errorInfo[2]);
        }
    }

    public function update($user)
    {
        if (!isset($user)) {
            throw new Exception("User Required");
        }
        $id = $user->getId();
        if ($id == null) {
            throw new Exception("User ID Required");
        }
        $sql = "UPDATE users SET password = :password WHERE id = :id";
        $params = array(
            'password' => $user->getPassword(),
            'id' => $user->getId()
        );
        $stmt = $this->link->prepare($sql);
        $status = $stmt->execute($params);
        if ($status != true) {
            $errorInfo = $stmt->errorInfo();
            throw new Exception("Could not update User : " . $errorInfo[2]);
        }
    }

    public function getUserById($id)
    {
        $sql = "SELECT * FROM users WHERE id = :id";
        $params = array('id' => $id);
        $stmt = $this->link->prepare($sql);
        $status = $stmt->execute($params);
        if ($status != true) {
            $errorInfo = $stmt->errorInfo();
            throw new Exception("Could not retrieve User : " . $errorInfo[2]);
        }

        $user = null;
        if ($stmt->rowCount() == 1) {
            $row = $stmt->fetch();
            $username = $row['username'];
            $pwd = $row['password'];
            $role = $row['role'];
            $user = new User($id, $username, $pwd, $role);
        }
        return $user;
    }

    public function getUserByUsername($username)
    {
        $sql = "SELECT * FROM users WHERE username = :username";
        $params = array('username' => $username);
        $stmt = $this->link->prepare($sql);
        $status = $stmt->execute($params);
        if ($status != true) {
            $errorInfo = $stmt->errorInfo();
            throw new Exception("Could not retrieve User : " . $errorInfo[2]);
        }

        $user = null;
        if ($stmt->rowCount() == 1) {
            $row = $stmt->fetch();
            $id = $row['id'];
            $pwd = $row['password'];
            $role = $row['role'];
            $user = new User($id, $username, $pwd, $role);
        }
        return $user;
    }

    public function getUsers()
    {
        $sql = "SELECT * FROM users";
        $stmt = $this->link->prepare($sql);
        $status = $stmt->execute();
        if ($status != true) {
            $errorInfo = $stmt->errorInfo();
            throw new Exception("Could not retrieve Users : " . $errorInfo[2]);
        }

        $users = array();
        $row = $stmt->fetch();
        while ($row != null) {
            $id = $row['id'];
            $username = $row['username'];
            $pwd = $row['password'];
            $role = $row['role'];
            $user = new User($id, $username, $pwd, $role);
            $users[$id] = $user;

            $row = $stmt->fetch();
        }
        return $users;
    }
}
