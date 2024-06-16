<?php

    /**
     * NIM    :2257401082
     * NAMA   :Nouval Fadillah
     * KELAS  :MI22A
     */

?>

<form action="" method="POST">
    <h2>Form Profile</h2>

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

    if (isset($_POST['simpan'])) 

:?>

<table border="1">
    <tr>
        <td>NIM</td>
        <td> <?php echo $_POST['nim'] ?></td>
    </tr>
    <tr>
        <td>Nama</td>
        <td> <?php echo $_POST['nama'] ?></td>
    </tr>
    <tr>
        <td>Kelas</td>
        <td> <?php echo $_POST['kelas'] ?></td>
    </tr>
    <tr>
        <td>Email</td>
        <td> <?php echo $_POST['email'] ?></td>
    </tr>
    <tr>
        <td>Nomor Hp</td>
        <td> <?php echo $_POST['no'] ?></td>
    </tr>
</table>

<?php endif; >

