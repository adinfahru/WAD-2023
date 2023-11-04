<!DOCTYPE html>
<html>
<head>
	<title>Formulir</title>
</head>

<body>
	<header>
		<h3>Formulir Sewain Kendaraan</h3>
	</header>
	
	<form action="proses-pendaftaran.php" method="POST">
		
		<form>
		
		<p>
			<label for="jenis">Jenis Motor = </label>
			<input type="text" name="jenis" placeholder="" />
		</p>
		<p>
			<label for="merk">Merk Motor= </label>
			<input type="text" name="merk" placeholder="" />
		</p>
		<p>
			<label for="bensin">Tipe Bensin = </label>
			<input type="text" name="bensin" placeholder="" />
		</p>
		<p>
			<label for="harga">Harga Sewa = </label>
			<input type="text" name="harga" placeholder="" />
		</p>
		<p>
			<input type="submit" value="Sewakan" name="daftar" />
		</p>
		
		</form>
	
	</form>
	
	</body>
</html>
