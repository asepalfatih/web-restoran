<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$nama = $_POST['nama']? $_POST['nama']:die("Nama Belum di isi");
$menu = $_POST['menu'];
$telp = $_POST['telp']? $_POST['telp']:die("Telepone Belum di isi");
$alamat = $_POST['alamat']? $_POST['alamat']:die("Alamat Belum di isi");
 
// menginput data ke database
mysqli_query($koneksi,"insert into pesanan values('','$nama','$menu','$telp','$alamat')");
// mengalihkan halaman kembali ke pelanggan.php
header("location:pelanggan.php");
?>