<?php
require_once 'DbConnection.php';

class Students
{
    public $id;
    public $name;
    public $lastname;
    public $cedula;
    public $age;

    public function __construct($id, $name, $lastname, $cedula, $age)
    {
        $this->name = $name;
        $this->lastname = $lastname;
        $this->cedula = $cedula;
        $this->age = $age;
        $this->id = $id;
    }

    /**
     * Get the students from the database
     */
    public static function getStudents($limit = 100)
    {
        $conn = mysqli_connect('127.0.0.1', 'root', '', 'workshop7');
        $query = "SELECT * FROM students LIMIT $limit";
        $result = mysqli_query($conn, $query);

        // $mysqlConnection = new DbConnection('127.0.0.1', 'root', '', 'workshop7');
        // $connection = $mysqlConnection->getMySQLConnection();
        // $query = "SELECT * FROM students LIMIT $limit";
        // $result = mysqli_query($connection, $query);
        // $result = $mysqlConnection->getMySQLConnection()->query("SELECT * from students LIMIT $limit");
        return $result->fetch_all();
    }

    /**
     * Returns a CSV representation of the student
     */
    public function toCsv()
    {
        return "{$this->id},{$this->name},{$this->lastname},{$this->cedula},{$this->age}";
    }

}
