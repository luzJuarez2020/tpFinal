<?php


class DataBase
{
     private $servername;
     private $username;
     private $password;
     private $dbname;
     private $connection;

    public function __construct($servername, $username, $password, $dbname)
    {
        $this->servername  = $servername;
        $this->username = $username;
        $this->password = $password;
        $this->dbname = $dbname;
        $this->connect();

    }

    public function query($sql)
    {
        $result = $this->connection->query($sql);
        return $result->fetch_all(MYSQLI_ASSOC); /* trae todas las consultas en forma de tabla*/
    }




    public function __destruct()
    {
        mysqli_close($this->connection);
    }

    public function connect()
    {
        $this->connection = mysqli_connect($this->servername, $this->username, $this->password, $this->dbname);

        if (!$this->connection)
            die("connection failed: " . mysqli_connect_error());
    }
}