<html>
<head>
	<title>Buku Tamu</title>
	<script type="text/javascript" src="../tinymce/tiny_mce.js"></script>
	<script type="text/javascript">

	tinyMCE.init({

	// General options

	mode : "textareas",
	theme : "advanced",

	});

	</script>
	<style type="text/css">
		body 
		{ 
			font-family:tahoma; 
			font-size:12px; 
		}
		#container 
		{ 
			width:450px; 
			padding:20px 40px; 
			margin:50px auto; 
			border:0px solid #555; 
			box-shadow:0px 0px 2px #555; 
		}
		input[type="text"] 
		{
		 width:200px; 
		}
		input[type="text"], textarea 
		{ 
			padding:5px; 
			margin:2px 0px; 
			border: 1px solid #777; 
		}
		input[type="submit"], input[type="reset"] 
		{ 
			padding: 5px 20px;
			margin:2px 0px; 
			font-weight:bold; 
			cursor:pointer; 
		}
		#error
		{ 
			border:1px solid red; 
			background:#ffc0c0; 
			padding:5px; 
		}
	</style>
</head>
<body>
 	<div align="left">
 		<form action="../admin/modul/viewbukutamu.php" method="post">
 			<p><input type="submit" name="view" value="Lihat Daftar Tamu"></p>
 		</form>
 		
 	</div>
	<div id="container">
		<h1>Buku Tamu</h1>
		<p>Silahkan isi buku tamu di bawah ini untuk meninggalkan pesan Anda!</p>
 
		<form action="../admin/modul/simpan.php" method="post">
			<p><b>Status :</b><br><input type="text" name="status"	 placeholder="Status" required /></p>
			<p><b>Nama Lengkap :</b><br><input type="text" name="nama"	 placeholder="Nama Lengkap" required /></p>
			<p><b>Email :</b><br><input type="text" name="email" placeholder="Email" required /></p>
			<p><b>Alamat :</b><br><input type="text" name="alamat" placeholder="Alamat" /></p>
			<p><b>Tanggal :</b><br><input type="date" name="date"	 placeholder="Tanggal" required /></p>

			<p><b>Komentar :</b></p><textarea name="komentar"></textarea>
		
			<p><input type="submit" name="go" value="Kirim" /> <input type="reset" name="del" value="Hapus" /></p>
		</form>
	</div>
 
</body>
</html>