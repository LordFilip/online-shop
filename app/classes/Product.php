<?php 

class Product{

    protected $conn;

    public function __construct(){
        global $conn;
        $this->conn = $conn;
    }

    public function fetch_all(){
        $sql = "SELECT * FROM products";
        $results = $this->conn->query($sql);
        return $results -> fetch_all(MYSQLI_ASSOC);
    }
}