<?php

class DbConnection
{
    private $host;
    private $user;
    private $password;
    private $databaseName;
    private $activeConnection;

    public function __constructor($host, $user, $password, $databaseName)
    {
        $this->host = $host;
        $this->user = $user;
        $this->password = $password;
        $this->databaseName = $databaseName;
        // $this->activeConnection = null;
    }

    /**
     * Get an active mysql connection
     */
    public function getMySQLConnection()
    {
        return $conn = mysqli_connect($this->host, $this->user, $this->password, $this->databaseName);
    }
}
