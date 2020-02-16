<?php
    session_start();
    session_destroy();
    echo '<script type="text/javascript">';
    echo 'alert("Logout Success");';
    echo 'window.location.href = "../index.php";';
    echo '</script>';
?>