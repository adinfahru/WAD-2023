<?php

include("config.php");

// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['daftar'])){
	
	// ambil data dari formulir
	$jenis = $_POST['jenis'];
	$merk = $_POST['merk'];
	$bensin = $_POST['bensin'];
	$harga = $_POST['harga'];
	
	// buat query
	$sql = "INSERT INTO rental (jenis, merk, bensin, harga) VALUE ('$jenis', '$merk', '$bensin', '$harga')";
	$query = mysqli_query($db, $sql);
	
	// apakah query simpan berhasil?
	if( $query ) {
		// kalau berhasil alihkan ke halaman index.php dengan status=sukses
		header('Location: index.php?status=sukses');
	} else {
		// kalau gagal alihkan ke halaman indek.ph dengan status=gagal
		header('Location: index.php?status=gagal');
	}
	
	
} else {
	die("Akses dilarang...");
}

?>
