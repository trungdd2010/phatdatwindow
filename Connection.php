<?php

Class Connection
{
    protected $db;

    public function Connection()
    {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $conn = NULL;
        $options = array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8");
        try {
            $conn = new PDO("mysql:host=$servername;dbname=phatdatwindow", $username, $password, $options);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo "Lỗi CSDL, chi tiết lỗi: <br>" . $e->getMessage();
            exit();
        }
        $this->db = $conn;
    }

    public function getConnection()
    {
        return $this->db;
    }
}
?>