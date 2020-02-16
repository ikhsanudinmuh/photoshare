<?php
    include "koneksi/dbkoneksi.php";

    if (isset($_GET['id'])) {
        $id = $_GET['id'];

        $query = mysqli_query($connect, "DELETE FROM foto WHERE id = '$id'") or die (mysqli_error($connect));

        if ($query) {
            echo '<script type="text/javascript">';
            echo 'alert("Delete Success");';
            echo 'window.location.href = "index.php";';
            echo '</script>';
        } else {
            echo '<script type="text/javascript">';
            echo 'alert("Delete Failed");';
            echo 'window.location.href = "index.php";';
            echo '</script>';
        }
    }
?>