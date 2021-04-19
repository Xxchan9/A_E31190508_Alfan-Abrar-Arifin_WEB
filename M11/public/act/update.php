<?php 
include '../koneksi.php';

// ambil data yang di kirim dari form
$id        = $_POST["id"];
$nama_merk = $_POST["nama_merk"];
$warna     = $_POST["warna"];
$jumlah    = $_POST["jumlah"];

// update ke db
$edit = mysqli_query($koneksi,"update printer set nama_merk='$nama_merk', warna='$warna', jumlah='$jumlah' where id='$id'");

if($edit) {
		echo "<script>
		alert('Update Data Berhasil :)');
		document.location='../index.php';
		</script>";
	}
	else {
		echo "<script>
		alert('Update Data Gagal :(');
		document.location='../index.php';
		</script>";
	}
?>