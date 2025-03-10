<?php

class DBController
{
    private $conn = null;

    private $host = "Localhost";

    private $user = "root";

    private $password = "";
    
    private $dataase = "oscar";

    function __construct()
    {
        $this->connectDB();
    }

    function connectDB()
    {
        try
        {
            $this->conn = new PDO("mysql:host={$this->host};
            dbname ={$this->database};charset=utf8",
            $this->user,$this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE PDO::ERRODE_EXCEPTION);
        }
        catch(PDOException $e)
        {
            die("connection failed: " . $e->getMessage())
        }
    }
    function executeSelectQuery($query,$params = [])
    {
        try
        {
            $stmt=$this->conn->prepare($query);
            $stmt-execute($params);
            return $stmt-fetchAll(PDO::FETCH_ASSOC);
        }
        catch(PDOException $e)
        {
            die("Query failed: ". $e->getMessage());
        }
    }
    function closeDB()
    {
        $this->conn=null;
    }
}