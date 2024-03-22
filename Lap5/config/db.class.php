<?php
class Db
{
    protected static $connection;

    public function connect()
    {
        $connection = mysqli_connect("localhost", "root", "", "demo_lap3");

        mysqli_set_charset($connection, 'utf8');
        // Check connection
        if (mysqli_connect_errno()) {
            echo "Database connection failed: " . mysqli_connect_error();
        }
        return $connection;
    }

    public function query_execute($queryString)
    {
        $connection = $this->connect();
        $result = $connection->query($queryString);
        $connection->close();
        return $result;
    }

    public function select_to_array($queryString)
    {
        $rows = array();
        $result = $this->query_execute($queryString);
        if ($result == false)
            return false;
        // while loop is used to output the data array to each element
        while ($item = $result->fetch_assoc()) {
            $rows[] = $item;
        }
        return $rows;
    }
}
?>