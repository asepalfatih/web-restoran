<?php
// koneksi database
include 'koneksi.php';

// menangkap data id yang dikirim dari url
$id = $_GET['id'];

// menghapus dari database 
mysqli_query($koneksi,"delete from pesanan where id='$id'");

// mengalihkan halaman kembali ke pelanggan.php
header("location:pelanggan.php");