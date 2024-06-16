<?php

    /**
     * NIM    :2257401082
     * NAMA   :Nouval Fadillah
     * KELAS  :MI22A
     */

?>

<form action="" method="POST">
    <h2>Form Perulangan</h2>

    NIM
    <br>
    <input type="text" name="nim">
    <br><br>

    Nama
    <br>
    <input type="text" name="nama">
    <br><br>

    Kelas
    <br>
    <input type="text" name="kelas">
    <br><br>

    Email
    <br>
    <input type="text" name="email">
    <br><br>

    Nomor Hp
    <br>
    <input type="text" name="no">
    <br><br>

    <input type="submit" value="Simpan" name="simpan">
</form>

<?php

    if (isset($_POST['simpan'])) {
        $nim = $_POST['nim'];
        $nama = $_POST['nama'];
        $kelas = $_POST['kelas'];
        $email = $_POST['email'];
        $hp = $_POST['no'];
    }

?>

