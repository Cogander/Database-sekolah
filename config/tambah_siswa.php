<?php
include "config/koneksi.php";

if(isset($_POST['submit'])){
    mysqli_query($conn,"INSERT INTO siswa (nama,kelas,jenis_kelamin)
    VALUES ('$_POST[nama]','$_POST[kelas]','$_POST[jk]')");
    header("Location: siswa.php");
}
?>

<form method="POST">
<input type="text" name="nama" placeholder="Nama"><br>
<input type="text" name="kelas" placeholder="Kelas"><br>
<select name="jk">
<option>Laki-laki</option>
<option>Perempuan</option>
</select><br>
<button name="submit">Simpan</button>
</form>
