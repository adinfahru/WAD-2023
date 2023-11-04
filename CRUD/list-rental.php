<?php include("config.php"); ?>

<!DOCTYPE html>
<html>
<head>
    <title>Daftar Motor</title>
</head>
<body>
    <header>
        <h3>Daftar Motor</h3>
    </header>

    <nav>
		<button> <a href="form-daftar.php">Sewain Motor Kamu</a> </button>
        
    </nav>

    <br>

    <table border="1">
        <thead>
            <tr>
                <th>No</th>
                <th>Jenis</th>
                <th>Merk</th>
                <th>Bensin</th>
                <th>Harga</th>
				<th>
					Setting
				</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql = "SELECT * FROM rental";
            $query = mysqli_query($db, $sql);

            if ($query) {
                $count = 1;
                while ($rental = mysqli_fetch_array($query)) {
                    echo "<tr>";
                    echo "<td>" . $count . "</td>";
                    echo "<td>" . $rental['jenis'] . "</td>";
                    echo "<td>" . $rental['merk'] . "</td>";
                    echo "<td>" . $rental['bensin'] . "</td>";
                    echo "<td>" . $rental['harga'] . "</td>";

                    echo "<td>";
                    echo "<a href='form-edit.php?id=" . $rental['id'] . "'>Edit</a> | ";
                    echo "<a href='hapus.php?id=" . $rental['id'] . "'>Hapus</a>";
                    echo "</td>";

                    echo "</tr>";
                    $count++;
                }
            } else {
                echo "Error: " . mysqli_error($db);
            }
            ?>
        </tbody>
    </table>

	<br>

	<button> <a href="index.php">Back to Menu</a> </button>
        
	

</body>
</html>
