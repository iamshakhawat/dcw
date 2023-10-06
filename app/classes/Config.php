<?php

namespace App\classes;

use mysqli;

class Config
{
    public $conn;

    function __construct()
    {
        try {
            $this->conn = new mysqli("localhost", "root", "", "dcw");
        } catch (\Throwable $th) {
            echo $th->getMessage();
            die;
        }
    }
}
