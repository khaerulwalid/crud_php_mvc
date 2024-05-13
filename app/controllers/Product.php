<?php

class Product extends Controller {
    public function index() {
        $data["title"] = "Product";
        $data["product"] = $this->model("Product_model")->getAllProduct();
        $this->view("templates/header", $data);
        $this->view("product/index", $data);
        $this->view("templates/footer");
    }

    public function detail($id = null) {
        if(isset($id)) {
            $data["title"] = "Product Detail";
            $data["product"] = $this->model("Product_model")->getProduct($id);
            $this->view("templates/header", $data);
            $this->view("product/detail", $data);
            $this->view("templates/footer");
        } else {
            $data["title"] = "Home";
            $this->view("templates/header", $data);
            $this->view("home/index");
            $this->view("templates/footer");
        }
        
    }

    public function create() {
        $data["title"] = "Product Create";
        $this->view("templates/header", $data);
        $this->view("product/create");
        $this->view("templates/footer");
    }

    public function posting() {
        if($this->model("Product_model")->createProduct($_POST) > 0) {
            header("Location:" . BASE_URL . "product");
            exit;
        }
    }
}