<?php

namespace KCS;

use PDO;

class DB{
    protected $conn;

    public function __construct()
    {
        $username = Configs::DB_USER;
        $password = Configs::DB_PASS;
    //    $servername = Configs::DB_HOST;
        $database = Configs::DB_NAME;


        $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //    echo "Connected successfully";

$this->conn = $conn;
return $conn;
    }
    public function getConnection() :PDO {
        return $this->conn;
    }
    }
 ?>
