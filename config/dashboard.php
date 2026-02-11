<?php
session_start();
include "config/koneksi.php";

if(!isset($_SESSION['login'])){
    header("Location: login.php");
}

$siswa = mysqli_num_rows(mysqli_query($conn,"SELECT * FROM siswa"));
$guru = 108;
$pengurus = 78;
$total = $siswa + $guru + $pengurus;
?>

<h1>Dashboard Sekolah</h1>

<p>Total Siswa: <?= $siswa ?></p>
<p>Total Guru: <?= $guru ?></p>
<p>Total Pengurus: <?= $pengurus ?></p>
<p>Total Keseluruhan: <?= $total ?></p>

<a href="siswa.php">Kelola Data Siswa</a> |
<a href="logout.php">Logout</a>
