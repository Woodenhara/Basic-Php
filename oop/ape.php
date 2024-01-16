<?php
require_once "Animal.php";
class Ape extends Animal {
    public function __construct($nama, $kaki, $berdarah_bandung) {
        $this->nama = $nama;
        $this->kaki = $kaki;
        $this->berdarah_bandung = $berdarah_bandung;
    }

    public function bunyi() {
        echo "Awoakwoakwok";
 }
}
?>