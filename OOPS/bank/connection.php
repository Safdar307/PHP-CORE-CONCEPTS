<?php

class Connection
{
    public $host = "localhost";
    public $username = "root";
    public $password = "";
    public $database = "bank_db";

    public $connection = null;

    public function __construct()
    {
        $this->connection = mysqli_connect( $this->host, $this->username, $this->password, $this->database );

        if (!$this->connection) {
            die("Database Connection Failed: " . mysqli_connect_error());
        }
    }
}

?>