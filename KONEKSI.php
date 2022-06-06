<?php
$koneksi = mysqli_connect("localhost","root","","klinik_312010222");

if (mysqli_connect_errno()){
	echo "koneksi database gagal:". mysqli_connect_errno();

}

?>