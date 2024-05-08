<?php

class Product extends Controller {
    public function index() {
        $data["title"] = "Product";
        $data["product"] = $this->model("Product_model")->getAllProduct();
        $this->view("templates/header", $data);
        $this->view("product/index", $data);
        $this->view("templates/footer");
    }

    public function detail($id) {
        $data["title"] = "Product Detail";
        $data["product"] = $this->model("Product_model")->getProduct($id);
        $this->view("templates/header", $data);
        $this->view("product/detail", $data);
        $this->view("templates/footer");
    }
}