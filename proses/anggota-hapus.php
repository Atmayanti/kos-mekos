<?php
include'../koneksi.php';
$id_anggota=$_GET['id'];

mysqli_query($db,
	"DELETE FROM penyewa
	WHERE idanggota='$id_anggota'"
);

header("location:../homePemilik.php?p=penyewa");
?>