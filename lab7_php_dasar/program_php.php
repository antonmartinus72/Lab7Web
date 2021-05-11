<!DOCTYPE html>
<html>
<head>
	<title>Program PHP</title>
	<style type="text/css">
		.container {
			width: 40%;
			background-color: #e5e5dc;
			margin: 10px;
			padding: 25px;
			
		}
		#wrapper {
			width: 1000px;
			max-width: 1200px;
			display: flex;
			justify-content: center;
			background-color: #c4a35a;
			padding: 10px;
		}

		body {
			display: flex;
			justify-content: center;
			/*background-color: red;*/
		}


		.center {
			text-align: center;
		}

		form > * {
			display: block;
			margin: 5px 0px;
		}

	</style>
</head>
<body>
	<div id="wrapper">
		<div class="container">
			<div class="center">
			<h1>Formulir Pengisian Data</h1>
			</div>

			<form method="get">
				<label>Masukan Data : </label>

				<label for="nama">Nama :</label>
				<input type="text" name="nama" id="nama" placeholder="Nama Anda" required>

				<label for="tanggal">Tanggal Lahir : </label>
				<input type="date" name="tanggal" id="tanggal" required>

				<label for="pekerjaaan">Pekerjaan : </label>
				<select id="pekerjaaan" name="pekerjaaan" required>
				  <option value="Pengajar">Pengajar</option>
				  <option value="Karyawan">Karyawan</option>
				  <option value="PNS">PNS</option>
				</select><br>

				<input type="submit" name="Kirim" value="Kirim">
			</form>

			<?php 
				$nama = $_GET["nama"];
				$tanggalLahir = date_create($_GET["tanggal"]);
				$pekerjaaan = $_GET["pekerjaaan"];

				// Menghitung jarak waktu
				$tanggalSekarang = date_create("today");
				$umur = date_diff($tanggalLahir, $tanggalSekarang);

				// Mencari gaji
				switch ($pekerjaaan) {
					case 'Karyawan':
						$gaji = 6000000;
						break;
					case 'PNS':
						$gaji = 3000000;
						break;
					default:
						$gaji = 4000000;
						break;
				}
			?>

		</div>
		<div class="container">
			<h1>Ouput</h1>
			<p>Nama : <?php echo "$nama"; ?></p>
			<p>Tanggal Lahir : <?php echo $tanggalLahir->format("d/m/Y" ); ?></p>
			<p>Umur : <?php echo $umur->format("%y Tahun" ); ?></p>
			<p>Pekerjaan : <?php echo "$pekerjaaan"; ?></p>
			<p>Gaji : Rp.<?php echo number_format($gaji);?>	</p>
		</div>
	</div>
	





</body>
</html>