<html>
	<head>
		<title>Keluaran Form</title>
	</head>
	<body align="center">
		<h3>Data pendaftar</h3>
		<?php
		{
			echo"Nama: ".$_GET['nama']. "</br>";
			echo"Password: ".$_GET['password']."</br>";
			echo"Jenis kelamin: ".$_GET['jenis_kelamin']."</br>";
			echo"Keahlian: ".$_GET['keahlian']."</br>";
			echo"Tempat lahir: ".$_GET['tempat_lahir']."</br>";
			echo"Deskripsi Diri: ".$_GET['deskripsi']."</br>";
		}
		?>
	</body>
</html>