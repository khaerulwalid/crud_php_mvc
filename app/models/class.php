<?php

class ProductClass {
    public $id;
    public $name;
    public $description;
    public $price;
    public $qty;

    function __construct($id, $name, $description, $price, $qty) {
        $this->id = $id;
        $this->name = $name;
        $this->description = $description;
        $this->price = $price;
        $this->qty = $qty;
    }


    public function formatRupiah($data) {
        $hasil_rupiah = "Rp " . number_format($data,2,',','.');
	    return $hasil_rupiah;
    }
}

