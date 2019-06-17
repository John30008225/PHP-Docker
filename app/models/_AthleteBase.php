<?php
class _AthleteBase {
    private $db;
    public function __construct() {
        $this->db = new Database();
    }
    public function GetAll() {
        $this->db->query('SELECT * FROM tbl');
        return $this->db->resultSet();
    }
}