<?php
    if (isset($_POST['login'])) {
        include "../koneksi/dbkoneksi.php";

        $username = $_POST['username'];
        $password = $_POST['password'];

        $query = mysqli_query($connect,"SELECT * FROM akun WHERE username='$username' and pass='$password'") or die(mysqli_error($connect));
        $r = mysqli_fetch_array($query);

        if ($query) {
            session_start();        
            $_SESSION['fullname'] = $r['fullname'];
            $_SESSION['level'] = $r['level'];
            $_SESSION['username'] = $r['username'];
            echo '<script type="text/javascript">';
            echo 'alert("Login Success");';
            echo 'window.location.href = "../index.php";';
            echo '</script>';
        }else {
            echo '<script type="text/javascript">';
            echo 'alert("Login Failed");';
            echo 'window.location.href = "../login.php";';
            echo '</script>';
        }
    }
?>