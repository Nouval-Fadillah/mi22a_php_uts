<?php

    /**
     * NIM    :2257401082
     * NAMA   :Nouval Fadillah
     * KELAS  :MI22A
     */

?>

<form action="" method="POST">
    <h2>Form Perulangan</h2>

    Teks
    <br>
    <input type="text" name="teks">
    <br><br>

    Jumlah Perulangan
    <br>
    <input type="text" name="jumlah">
    <br><br>

    <input type="submit" value="Cetak" name="cetak">
</form>

<?php

    if(isset($_POST['cetak'])){
        $a = $_POST['teks'];
        $b = $_POST['jumlah'];
        for($i=1; $i<=$b; $i++)
            echo $i . " - $a<br>";

    }

?>