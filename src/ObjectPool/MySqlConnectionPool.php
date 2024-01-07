<?php

namespace App\ObjectPool;

use mysqli;

class MySqlConnectionPool
{
    private $pool = [];
    private $maxSize;
    private $host;
    private $username;
    private $password;
    private $database;

    public function __construct($maxSize, $host, $username, $password, $database)
    {
        $this->maxSize = $maxSize;
        $this->host = $host;
        $this->username = $username;
        $this->password = $password;
        $this->database = $database;
    }

    public function getConnection()
    {
        if (empty($this->pool)) {
            return $this->createConnection();
        } else {
            return array_pop($this->pool);
        }
    }

    public function releaseConnection($connection)
    {
        $this->pool[] = $connection;
    }

    private function createConnection()
    {
        $mysqli = new mysqli($this->host, $this->username, $this->password, $this->database);

        if ($mysqli->connect_error) {
            die("Connection failed: " . $mysqli->connect_error);
        }

        return $mysqli;
    }
}
