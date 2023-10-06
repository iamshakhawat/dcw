<?php

namespace App\classes;

class Auth extends Config
{
    public function adminRegister($name, $email, $password, $photo)
    {
        $result = $this->conn->query("INSERT INTO `users` (`name`,`email`,`password`,`photo`) VALUES ('$name','$email','$password','$photo')");
        return $result;
    }
    public function checkEmail($email)
    {
        $result = $this->conn->query("SELECT * FROM `users` WHERE `email`='$email'");
        return $result->num_rows;
    }
    public function getRow($email)
    {
        $result = $this->conn->query("SELECT * FROM `users` WHERE `email`='$email'");
        return $result->fetch_array();
    }
}
