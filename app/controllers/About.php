<?php

class About {
    public function index($name = "Wall", $job = "Programmer") {
        echo "Halo, nama saya $name dan pekerjaan saya $job";
    }

    public function page() {
        echo "About/page";
    }
}