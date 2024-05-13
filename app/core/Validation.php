<?php

class Validation {
    public static function validation($data) {
        $errorMessage = [];
        if(!$data["name"]) {
            array_push($errorMessage, "Name is required");
        }

        if(!$data["description"]) {
            array_push($errorMessage, "description is required");
        }

        if(!$data["price"]) {
            array_push($errorMessage, "price is required");
        }

        if(!$data["qty"]) {
            array_push($errorMessage, "qty is required");
        }

        return $errorMessage;
    }
}