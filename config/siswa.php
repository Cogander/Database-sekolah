<?php
session_start();
include "config/koneksi.php";

$data = mysqli_query($conn,"SELECT * FROM siswa");
?>

<h2>Data Siswa</h2>
<a href="tambah_siswa.php">+ Tambah Siswa</a>

<table border="1" cellpadding="10">
<tr>
<th>Nama</th>
<th>Kelas</th>
<th>JK</th>
<th>Aksi</th>
</tr>

<?php while($row = mysqli_fetch_assoc($data)) { ?>
<tr>
<td><?= $row['nama'] ?></td>
<td><?= $row['kelas'] ?></td>
<td><?= $row['jenis_kelamin'] ?></td>
<td>
<a href="edit_siswa.php?id=<?= $row['id'] ?>">Edit</a>
<a href="hapus_siswa.php?id=<?= $row['id'] ?>">Hapus</a>
</td>
</tr>
<?php } ?>
</table>
