<?php

class Tablet {
    protected $merk, $camera, $memory;

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
Karena property pada class parent memiliki Visibility protected, maka untuk mengakses propery parent (Tablet) pada
class child (Handphone) hanya dapat dilakukan secara langsung dari dalam class child (Handphone).
Karena Property dengan Visibility protected tetap dapat dikases oleh child class, namun tetap tidak dapat diakses
di luar class yang tidak termasuk child class. 
Jika ingin mengakses property class Tablet dari luar class tersebut,jika tidak termasuk class child/turunan maka harus 
menggunakan metode getter dan setter.
*/