<?php

class Calculator{
    private $x,$y,$z;

    function tambah($x,$y){
        $this->x = $x;
        $this->y = $y;
        $hasil = $this->x + $this->y;
        return $hasil;
    }
    function kurang($x,$y){
        $this->x = $x;
        $this->y = $y;
        $hasil = $this->x - $this->y;
        return $hasil;
    }
    function bagi($x,$y){
        $this->x = $x;
        $this->y = $y;
        $hasil = $this->x / $this->y;
        return $hasil;
    }
    function kali($x,$y){
        $this->x = $x;
        $this->y = $y;
        $hasil = $this->x * $this->y;
        return $hasil;
    }
}

$z = new Calculator();

echo $z->tambah("4","8");
echo "<br>";
echo $z->kurang("4","8");
echo "<br>";
echo $z->bagi("4","8");
echo "<br>";
echo $z->kali("4","8");

?>