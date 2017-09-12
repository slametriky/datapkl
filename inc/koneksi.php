<?php  
$con = mysqli_connect("localhost", "root", "", "pkl");
if (!$con) {
	echo 'Koneksi gagal ' . mysqli_error();
}
?>