<?php
    require_once("ape.php");
    require_once("frog.php");

    $sheep = new Animal("shaun", 4, "no");
    echo  "Nama : " . $sheep->nama; 
    echo "<br> Kaki : " . $sheep->kaki;
    echo "<br> Berdarah bandung : " . $sheep->berdarah_bandung;
    echo "<br><br>";

    $ape = new Ape("monk", 2, "no");
    echo  "Nama : " . $ape->nama . "<br>"; 
    echo "Kaki : " . $ape->kaki . "<br>";
    echo "Berdarah bandung : " . $ape->berdarah_bandung . "<br>";
    echo "Bunyi : ";
    $ape ->bunyi();
    echo "<br><br>";

    $frog = new Frog("Kuyo", 4, "no");
    echo  "Nama : " . $frog->nama . "<br>"; 
    echo "Kaki : " . $frog->kaki . "<br>";
    echo "Berdarah bandung : " . $frog->berdarah_bandung . "<br>";
    echo "Lompat : ";
    $frog -> lompat();
?>