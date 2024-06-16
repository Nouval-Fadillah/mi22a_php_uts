<?php

    /**
     * NIM    :2257401082
     * NAMA   :Nouval Fadillah
     * KELAS  :MI22A
     */

?>

<form action="" method="POST">
    <h2>Form Login</h2>

    Username
    <br>
    <input type="text" name="username">
    <br><br>

    Password
    <br>
    <input type="password" name="password">
    <br><br>

    <input type="submit" value="login" name="login">
</form>

<?php

    if (isset($_POST['login'])) {
        $user = $_POST['username'];
        $pass = $_POST['password'];

        if ($user == 'admin' && $pass == 'admin'){
            echo "Login Berhasil";
        } else {
            echo "Username/Password tidak sesuai";
        }
    }

?>