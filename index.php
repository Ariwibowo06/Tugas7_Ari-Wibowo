<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>Data Penilaian Pelatihan</title>
</head>
<body>
	<h1>Nilai Peserta Pelatihan</h1>
	<h4>Input Nilai</h4>
	<form action="" method="post">
		<div>
			<label id="praktik">Nilai Praktik<br></label>
			<input type="number" name="praktik" placeholder="Masukan Nilai Praktik">
		</div>
		<div>
			<label id="pilihan_ganda">Nilai Pilihan Ganda<br></label>
			<input type="number" name="pilihan_ganda" placeholder="Masukan Nilai Pilihan Ganda">
		</div>
		<div>
			<label id="kehadiran">Nilai Kehadiran</label><br>
			<input type="number" name="kehadiran" placeholder="Masukan Nilai Kehadiran">
		</div>
		<div>
			<label id="sikap"></label>Nilai Sikap<br>
			<input type="number" name="sikap" placeholder="Masukan Nilai sikap">
		</div><br>
		<div>
			<button type="submit" name="submit" class="button"><b>Hitung</button>
		</div>
	</form>
	<?php 
		$nilai_akhir="";
		$kriteria="";
		if (isset($_POST['submit'])) {
			$praktik=$_POST['praktik'];
			$pilihan_ganda=$_POST['pilihan_ganda'];
			$kehadiran=$_POST['kehadiran'];
			$sikap=$_POST['sikap'];
			$nilai_akhir=strval(0.6*strval($praktik))+strval(0.3*$pilihan_ganda)+strval(0.05*$kehadiran)+strval(0.05*$sikap);
			if(($nilai_akhir >= 100) || ($nilai_akhir <0)){
				$kriteria="Nilai akhir tidak valid";
			}elseif ($nilai_akhir >=95) {
				$kriteria="Memuaskan";
			}elseif ($nilai_akhir >=85) {
				$kriteria="Baik Sekali";
			}elseif ($nilai_akhir >= 75) {
				$kriteria="Baik Sekali";
			}elseif ($nilai_akhir >=65) {
				$kriteria="Cukup";
			}else{
				$kriteria="Tidak Lulus";
			}
		}
		echo "<br>"."<br>"."Nilai Akhir :".$nilai_akhir;
		echo "<br>";
		echo "Kriteria Kelulusan :".$kriteria;
	 ?>

</body>
</html>