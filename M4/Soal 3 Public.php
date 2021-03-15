<?php

class Tablet {
    public $merk, $camera, $memory;

    public function getInfoProduk()
    {
        $str = "Merk : {$this->merk} <br> Camera : {$this->camera} MP <br> Memory : {$this->memory} GB";

        return $str;
    }
}

class Handphone extends Tablet {
    public $nama;
    public function __construct( $nama = "nama", $merk = "merk", $camera = 0, $memory = 0 ) {

        $this->nama = $nama;
        $this->merk = $merk;
        $this->camera = $camera;
        $this->memory = $memory;
    }
    public function getInfoProduk()
    {
        $str = "Nama : {$this->nama} <br>" . parent::getInfoProduk();
        return $str;
    }
}

$hp = new Handphone("Poco X3 NFC", "Xiaomi", 64, 128);
echo $hp->getInfoProduk();

/*
Output : 
Nama : Poco X3 NFC
Merk : Xiaomi
Camera : 64 MP
Memory : 128 GB
Penjelasan :
Karena property pada class parent memiliki Visibility public, maka untuk mengakses propery parent (Tablet) pada
class child (Handphone) dapat dilakukan secara langsung dari dalam maupun luar class child (Handphone).
Karena Property dengan Visibility public dapat diakses dari mana saja.
*/