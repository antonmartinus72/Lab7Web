<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>PHP Dasar</title>
</head>
<body>
	<h1>Belajar PHP Dasar</h1>
	<?php
	echo "Hello World";
	?>

	<br>

	<?php
	echo "Perulangan 1 sampai 10 <br />";
	$i=1;
	do {
		echo "Perulangan ke: " . $i . '<br />';
		$i++;
	} while ($i<=10);
	?>

	<?php
	// echo "Perulangan 1 sampai 10 <br />";
	// $i=1;
	// while ($i<=10) {
	// 	echo "Perulangan ke: " . $i . '<br />';
	// 	$i++;
	// }
	?>

	<?php
	// echo "Perulangan 1 sampai 10 <br />";
	// for ($i=1; $i<=10; $i++) {
	// 	echo "Perulangan ke: " . $i . '<br />';
	// }
	// echo "Perulangan Menurun dari 10 ke 1 <br />";
	// for ($i=10; $i>=1; $i--) {
	// 	echo "Perulangan ke: " . $i . '<br />';
	// }
	?>


	<?php
	// $nama_hari = date("2");
	// switch ($nama_hari) {
	// 	case "Sunday":
	// 		echo "Minggu";
	// 		break;
	// 	case "Monday":
	// 		echo "Senin";
	// 		break;
	// 	case "Tuesday":
	// 		echo "Selasa";
	// 		break;
	// 	default:
	// 		echo "Sabtu";
	// 	}
	?>


	<?php
	// $nama_hari = date("l");
	// if ($nama_hari == "Sunday") {
	// 	echo "Minggu";
	// } elseif ($nama_hari == "Monday") {
	// 	echo "Senin";
	// } else {
	// 	echo "Selasa";
	// }
	?>


	<?php
	// $gaji = 1000000;
	// $pajak = 0.1;
	// $thp = $gaji - ($gaji*$pajak);
	// echo "Gaji sebelum pajak = Rp. $gaji <br>";
	// echo "Gaji yang dibawa pulang = Rp. $thp";
	?>

	<?php
	// $nim = "0411500400";
	// $nama = 'Abdullah';
	// echo "NIM : " . $nim . "<br>";
	// echo "Nama : $nama";
	?>

<!-- 	<h2>Form Input</h2>
	<form method="post">
		<label>Nama: </label>
		<input type="text" name="nama">
		<input type="submit" value="Kirim">
	</form> -->


	<?php
	// echo 'Selamat Datang ' . $_POST['nama'];
	?>
</body>
</html>