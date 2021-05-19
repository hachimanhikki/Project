<?php


class DB
{
    private $db_host;
    private $db_user;
    private $db_pass;
    private $db_name;
    private $conn;

    public function __construct()
    {
        $this->db_host = '127.0.0.1';
        $this->db_user = 'project_admin';
        $this->db_pass = 'admin1234';
        $this->db_name = 'webproject';
        $this->conn = new mysqli($this->db_host, $this->db_user, $this->db_pass, $this->db_name);
    }
    public function getConn()
    {
        return $this->conn;
    }
}