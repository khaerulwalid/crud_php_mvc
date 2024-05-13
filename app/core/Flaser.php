<?php

class Flaser {
    public static function setFlasher($pesan, $tipe) {
        $_SESSION["flash"] = [
            "pesan" => $pesan,
            "tipe" => $tipe
        ];

    }

    public static function flashArray() {
        if( isset($_SESSION["flash"]) ) {

            if($_SESSION["flash"]["pesan"]) {
                foreach ($_SESSION["flash"]["pesan"] as $key => $value) {
                    echo '<div class="alert alert-' . $_SESSION['flash']['tipe'] . '" role="alert"> ' . $value . '</div>';
                }
            }

            unset($_SESSION['flash']);
        }
    }

    public static function flash() {
        if( isset($_SESSION["flash"]) ) {
            echo '<div class="alert alert-' . $_SESSION['flash']['tipe'] . '" role="alert"> ' . $_SESSION['flash']['pesan'] . '</div>';

            unset($_SESSION['flash']);
        }
    }
}