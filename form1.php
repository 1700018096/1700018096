<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<style>
		body {
			background-image: url("salju.jpg");
			font-style: 16px sans-serif;
			color: white;
			text-align: center;
		}
	</style>
	<center>
		<?php 
		echo "<head><title>Form Project</head></title>"; 
	$fp = fopen("form.txt", "a+");
	$dname = $_POST["dname"];
	$bname = $_POST["bname"];
	$Prestasi = $_POST["Prestasi"];
	$hobi = $_POST["hobi"];
	$agama = $_POST["agama"];
	
	fputs($fp, "$dname|$bname|$Prestasi|$hobi|$agama\n");
	fclose($fp);


		?>
	Selamat datang : <?php echo $_POST["dname"]; ?> <?php echo $_POST["bname"]; ?><br>
	Prestasi anda : <?php echo $_POST["Prestasi"]; ?><br>
	Hobi anda : <?php echo $_POST["hobi"]; ?><br>
	Agama anda : <?php echo $_POST["agama"]; ?><br>

	<br><a href="form.html">Menu Form</a><br>
	<a href="tabel.html">Tabel Html</a><br>
	<a href="form.txt">Isi Form txt</a>

</center>

</body>
</html>