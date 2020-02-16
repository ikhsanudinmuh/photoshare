<?php
if (isset($_POST['register'])) {

    include "../koneksi/dbkoneksi.php";

    $fullname = strtoupper($_POST['fullname']);
    $username = $_POST['username'];
    $password = $_POST['password'];
    date_default_timezone_set('Asia/Jakarta');
	$date = date('d-m-Y', time());

    $cekusername = mysqli_num_rows(mysqli_query($connect, "SELECT username FROM akun WHERE username = '$username'"));

        if ($cekusername > 0) {
            echo '<script type="text/javascript">';
            echo 'alert("Username has been used");';
            echo 'window.location.href = "../register.php";';
            echo '</script>';
        }else {
            $query = mysqli_query($connect, "INSERT INTO akun(fullname, username, pass, since, level) VALUES ('$fullname', '$username', '$password','$date','User')") or die(mysqli_error($connect));
            if ($query) {
                echo '<script type="text/javascript">';
                echo 'alert("Register Success");';
                echo 'window.location.href = "../register.php";';
                echo '</script>';
            }
            else {
                echo '<script type="text/javascript">';
                echo 'alert("Register Failed");';
                echo 'window.location.href = "../register.php";';
                echo '</script>';
            }
        }
}  
?>