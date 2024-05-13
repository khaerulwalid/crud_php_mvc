<?php

class Flaser {
    public static function setFlasher($pesan, $tipe) {
        $_SESSION["flash"] = [
            "pesan" => $pesan,
            "tipe" => $tipe
        ];

    }

    public static function flash() {
        if( isset($_SESSION["flash"]) ) {
            echo '<div class="alert alert-' . $_SESSION['flash']['tipe'] . '" role="alert"> ' . $_SESSION['flash']['pesan'] . '</div>';

            unset($_SESSION['flash']);
        }
    }
}