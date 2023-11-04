<!DOCTYPE html>
<html>
<head>
	<title>CRUD</title>
</head>

<body>
	<header>
		<h2>Telyu Rent</h2>
		<h1>Selamat Datang di Telyu Rent</h1>
	</header>
	
	<h4>Menu</h4>
	<nav>
		<ul>
			<li><a href="form-daftar.php">Sewain Motor</a></li>
			<li><a href="list-rental.php">Pinjam Motor</a></li>
		</ul>
	</nav>
	
	
	<?php if(isset($_GET['status'])): ?>
	<p>
		<?php
			if($_GET['status'] == 'sukses'){
				echo "Sewain Motor Berhasil!";
			} else {
				echo "Sewain Motor gagal!";
			}
		?>
	</p>
	<?php endif; ?>
	
	</body>
</html>
