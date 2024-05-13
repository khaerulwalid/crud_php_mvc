<?php

class Product_model {
    private $table = "product";
    private $db;

    public function __construct() {
        $this->db = new Database;
    }

    public function getAllProduct() {
        $this->db->query("SELECT * FROM " . $this->table);
        $value = $this->db->resultSet();

        $newArray = array();

        foreach ($value as $key => $value) {
            // Ubah nilai setiap elemen array
            $newArray[$key] = new ProductClass($value["id"], $value["name"], $value["description"], $value["price"], $value["qty"]);;
        }

        return $newArray;
    }

    public function getProduct($id) {
        $this->db->query("SELECT * FROM " . $this->table . " WHERE id=:id");
        $this->db->bind("id", $id);
        $value = $this->db->single();

        $output = new ProductClass($value["id"], $value["name"], $value["description"], $value["price"], $value["qty"]);

        return $output;
    }

    public function createProduct($data) {
        $this->db->query("INSERT INTO product VALUES('', :name, :description, :price, :qty)");

        $this->db->bind("name", $data["name"]);
        $this->db->bind("description", $data["description"]);
        $this->db->bind("price", $data["price"]);
        $this->db->bind("qty", $data["qty"]);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function updateProduct($data) {
        $this->db->query("UPDATE product SET name=:name, description=:description, price=:price, qty=:qty WHERE id=:id");

        $this->db->bind("name", $data["name"]);
        $this->db->bind("description", $data["description"]);
        $this->db->bind("price", $data["price"]);
        $this->db->bind("qty", $data["qty"]);
        $this->db->bind("id", $data["id"]);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function deleteProduct($id) {
        $this->db->query("DELETE FROM product WHERE id = :id");

        $this->db->bind("id", $id);

        $this->db->execute();

        return $this->db->rowCount();
    }
}