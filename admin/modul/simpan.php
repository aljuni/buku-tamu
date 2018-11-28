<!DOCTYPE html>
<html>
<head>
	<title>SIMPAN BUKU TAMU</title>
</head>
<body>

<?php
	error_reporting();
	$status = $_POST["status"];
	$nama = $_POST["nama"];
	$email = $_POST["email"];
	$alamat = $_POST["alamat"];
	$date = $_POST["date"];
	$komentar = $_POST["komentar"];
	$con = new mysqli("localhost","root","","coba_db")or die("koneksi gagal");
	$con->select_db("coba_db");
	echo "Status : $status <br>";
	echo "Nama : $nama <br>";
	echo "Email : $email <br>";
	echo "Alamat : $alamat <br>";
	echo "Date: $date <br>";
	echo "Komentar : $komentar <br>";
	$sqlstr = "insert into buku_tamu (status_bktamu,nm_bktamu,email_bktamu,alamat_bktamu,tgl_bktamu,komentar) values ('$status','$nama','$email','$alamat','$date','$komentar')";
	$hasil = $con->query($sqlstr);
	echo "Simpan bukutamu berhasil dilakukan";
	?>

</body>
</html>