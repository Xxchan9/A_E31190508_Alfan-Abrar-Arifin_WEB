<?php

class Tablet {
    private $merk, $camera, $memory;

    public function setMerk( $merk ) {
        $this->merk = $merk;
    }
    public function getMerk() {
        return $this->merk;
    }
    public function setCamera( $camera ) {
        $this->camera = $camera;
    }
    public function getCamera() {
        return $this->camera;
    }
    public function setMemory( $memory ) {
        $this->memory = $memory;
    }
    public function getMemory() {
        return $this->memory;
    }
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
        $this->setMerk($merk);
        $this->setCamera($camera);
        $this->setMemory($memory);
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
Karena property pada class parent memiliki Visibility private, maka untuk mengakses propery parent (Tablet) pada
class child (Handphone) maupun diluar class Tablet tidak akan dapat dilakukan dan hanya dapat dilakukan jika menggunakan
metode setter dan getter. 
Karena Property dengan Visibility private hanya dapat diakses dari dalam class tersebut.
*/