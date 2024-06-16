<?php

    /**
     * NIM    :2257401082
     * NAMA   :Nouval Fadillah
     * KELAS  :MI22A
     */

?>
<form action="" method="GET">
    <input type="submit" value="Beranda" name="beranda">
    <input type="submit" value="Login" name="login">
    <input type="submit" value="Loop" name="loop">
    <input type="submit" value="Profil" name="profil">
</form>

<?php

    if (isset($_GET['login'])) {
        include "2257401082_login.php";
    }
    if (isset($_GET['loop'])) {
        include "2257401082_loop.php";
    }
    if (isset($_GET['profil'])) {
        include "2257401082_profil.php";
    }

?>

