<?php 

class Kendaraan {
     public $jenisKendaraan="jenisKendaraan",
            $jumlahRoda="jumlahRoda",
            $merk="merk",
            $bahanBakar="bahanBakar",
            $harga=0,
            $tahunPembuatan="0";

    public function getLabel() {
        return "$this->jenisKendaraan,
                $this->jumlahRoda,
                $this->merk,
                $this->bahanBakar,
                $this->harga,
                $this->tahunPembuatan";
    }

    public function subsidiBBM() {
        if ($this->bahanBakar = "Premium" && $this->tahunPembuatan < 2005) $subsidi = "Ya";
            else $subsidi = "Tidak";
        return $subsidi;
    }

     public function hargaSecond() {
        if ($this->tahunPembuatan > 2010)
            $second = $this->harga * 20/100;
            else if ($this->tahunPembuatan >= 2005)
                $second = $this->harga * 30/100;
            else if ($this->tahunPembuatan <= 2005)
                $second = $this->harga * 40/100;
         return $second;        
    }
     

   
}

$kendaraan1 = new Kendaraan();
$kendaraan1 ->jenisKendaraan ="Sepeda Motor";
$kendaraan1 ->jumlahRoda="2";
$kendaraan1 ->merk="Honda Supra X 125";
$kendaraan1 ->bahanBakar="Premium";
$kendaraan1 ->harga=11000000;
$kendaraan1 ->tahunPembuatan=2005;

//kendaraan2
$kendaraan2 = new Kendaraan();
$kendaraan2 ->jenisKendaraan ="Mobil";
$kendaraan2 ->jumlahRoda="4";
$kendaraan2 ->merk="Suzuki Ertiga";
$kendaraan2 ->bahanBakar="Solar";
$kendaraan2 ->harga=133000000;
$kendaraan2 ->tahunPembuatan=2013;

echo"Properties <br>";
echo "Kendaraan 1 : ", $kendaraan1->getLabel();
echo "<br>";
echo "Kendaraan 2 : ", $kendaraan2->getLabel();

echo "<br><br>";
echo "Apakah mendapat subsidi BBM? <br>";
echo "Kendaraan 1 : ", $kendaraan1->subsidiBBM(), "<br>";
echo "Kendaraan 2 : ", $kendaraan2->subsidiBBM();

echo "<br><br>";
echo "Harga Second<br>";
echo "Kendaraan 1 : ", $kendaraan1->hargaSecond(), "<br>";
echo "Kendaraan 2 : ", $kendaraan2->hargaSecond();
