<?php
class Database {
    private $server_name = "localhost";
    private $db_username = "root";
    private $db_password = "";
    private $db_name = "inventory_system04";
    protected $conn;

    public function __construct() {
        $this->conn = new mysqli($this->server_name, $this->db_username, $this->db_password, $this->db_name);

        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
    }
}
