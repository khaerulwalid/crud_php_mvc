<?php

class Product_model {
    private $table = "product";
    private $db;

    public function __construct() {
        $this->db = new Database;
    }

    public function getAllProduct() {
        $this->db->query("SELECT * FROM " . $this->table);
        return $this->db->resultSet();
    }

    public function getProduct($id) {
        $this->db->query("SELECT * FROM " . $this->table . " WHERE id=:id");
        $this->db->bind("id", $id);
        return $this->db->single();
    }
}