<?php
$conn= mysqli_connect("localhost", "root", "", "kampus_merdeka");

if (mysqli_connect_error()){
    echo "Gagal Koneksi Database: ".mysqli_connect_error();
}
?>