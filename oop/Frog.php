<?php
require_once "Animal.php";
class Frog extends Animal {
    public function __construct($nama, $kaki, $berdarah_bandung) {
        $this->nama = $nama;
        $this->kaki = $kaki;
        $this->berdarah_bandung = $berdarah_bandung;
    }

    public function lompat() {
        echo "womp womp";
 }
}
?>