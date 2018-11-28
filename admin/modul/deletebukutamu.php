<?php
include "../include/koneksi.php";
$ni	= $_GET['ni'];
$sql 	= 'delete from buku_tamu where id="'.$ni.'"';
$query	= $con->query($sql);
header('location: bukutamu.php');
?>