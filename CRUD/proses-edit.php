<?php

include("config.php");

// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['simpan'])){
	
	// ambil data dari formulir
	$id = $_POST['id'];
	$jenis = $_POST['jenis'];
	$merk = $_POST['merk'];
	$bensin = $_POST['bensin'];
	$harga = $_POST['harga'];
	
	// buat query update
	$sql = "UPDATE rental SET jenis='$jenis', merk='$merk', bensin='$bensin', harga='$harga', WHERE id=$id";
	$query = mysqli_query($db, $sql);
	
	// apakah query update berhasil?
	if( $query ) {
		// kalau berhasil alihkan ke halaman list-siswa.php
		header('Location: list-rental.php');
	} else {
		// kalau gagal tampilkan pesan
		die("Gagal menyimpan perubahan...");
	}
	
	
} else {
	die("Akses dilarang...");
}

?>
