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
        $validationCheck = Validation::validation($_POST);
    
        if(!empty($validationCheck)) {
            Flaser::setFlasher($validationCheck, "danger");
            header("Location:" . BASE_URL . "product/create");
            exit;
        }

        if($this->model("Product_model")->createProduct($_POST) > 0) {
            Flaser::setFlasher("Berhasil ditambahkan", "success");
            header("Location:" . BASE_URL . "product");
            exit;
        } else {
            Flaser::setFlasher("Gagal ditambahkan", "danger");
            header("Location:" . BASE_URL . "product");
            exit;
        }
    }

    public function delete($id) {
        if($this->model("Product_model")->deleteProduct($id) > 0) {
            Flaser::setFlasher("Berhasil dihapus", "success");
            header("Location:" . BASE_URL . "product");
            exit;
        } else {
            Flaser::setFlasher("Gagal dihapus", "danger");
            header("Location:" . BASE_URL . "product");
            exit;
        }
    }

    public function update() {
        if($this->model("Product_model")->updateProduct($_POST) > 0) {
            Flaser::setFlasher("Berhasil diubah", "success");
            header("Location:" . BASE_URL . "product");
            exit;
        } else {
            Flaser::setFlasher("Gagal diubah", "danger");
            header("Location:" . BASE_URL . "product");
            exit;
        }
    }

    public function edit($id) {
        $data["title"] = "Product Edit";
        $data["product"] = $this->model("Product_model")->getProduct($id);
        $this->view("templates/header", $data);
        $this->view("product/edit", $data);
        $this->view("templates/footer");
    }
}