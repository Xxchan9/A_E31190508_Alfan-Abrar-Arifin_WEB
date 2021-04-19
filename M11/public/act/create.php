<?php

include '../koneksi.php';

//ambil data dari inputan di form
$nama_merk = $_POST["nama_merk"];
$warna     = $_POST["warna"];
$jumlah    = $_POST["jumlah"];

// input data ke db
$simpan = mysqli_query($koneksi, "insert into printer values('','$nama_merk','$warna','$jumlah')");

if($simpan) {
		echo "<script>
		alert('Simpan Data Berhasil :)');
		document.location='../index.php';
		</script>";
	}
	else {
		echo "<script>
		alert('Simpan Data Gagal :(');
		document.location='../create.php';
		</script>";
	}
?>