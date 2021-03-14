<?php 

class Laptop {
     public $pemilik="pemilik",
            $merk="merk";

    public function hidupkan_laptop($pemilik,$merk) {
        return "Hidupkan laptop $merk punya $pemilik";
    }

    public function matikan_laptop($pemilik,$merk) {
        return "Matikan laptop $merk punya $pemilik";
    }
     
   public function restart_laptop($pemilik,$merk) {
        echo "Matikan laptop $merk punya $pemilik. ";
        return "Hidupkan laptop $merk punya $pemilik";
   }   
}

$laptopBaru= new Laptop();
$laptopLama= new Laptop();
$laptopSecond= new Laptop();


echo $laptopBaru->hidupkan_laptop("A", "ASUS");
echo "<br>";
echo $laptopLama->matikan_laptop("B", "Acer");
echo "<br>";
echo $laptopSecond->restart_laptop("C", "Lenovo");