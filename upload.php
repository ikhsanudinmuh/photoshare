<?php
    session_start();
    include "koneksi/dbkoneksi.php";

    if (isset($_POST['upload'])) {
        $target = "images/".basename($_FILES['image']['name']);

        $image = $_FILES['image']['name'];
        $caption = $_POST['caption'];
        $user = $_SESSION['username'];
        $category = $_POST['category'];
        date_default_timezone_set('Asia/Jakarta');
	    $date = date('d-m-Y H:i', time());

        $sql = "INSERT INTO foto (url, caption, username, category, date) VALUES ('$image','$caption', '$user','$category','$date')";
        mysqli_query($connect, $sql);

        if (move_uploaded_file($_FILES['image']['tmp_name'],$target)) {
            echo '<script type="text/javascript">';
            echo 'alert("Upload Success");';
            echo 'window.location.href = "index.php";';
            echo '</script>';
        }else {
            echo '<script type="text/javascript">';
            echo 'alert("Upload Failed");';
            echo 'window.location.href = "upload.php";';
            echo '</script>';
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.css">
    <title>Photoshare</title>
</head>
<body>
    <?php if(isset($_SESSION['fullname'])) { ?>
    <nav class="navbar navbar-light bg-light">
        <a class="navbar-brand" href="index.php">
                <img src="images/logo.png" width="30" height="30" class="d-inline-block align-top" alt=""> |
                <i>Photoshare</i>
            </a>
            <a class="mx-auto" href="user.php?username=<?php echo $_SESSION['username']; ?>" style=""><?php echo $_SESSION['fullname']; ?></a>
            <a href="upload.php" class="btn btn-info">UPLOAD</a>
            <a href="koneksi/logout.php" class="btn btn-dark">LOGOUT</a>
    </nav>
    <?php } ?>

    <div class="container">
        <div class="row">
            <form class="col-md-5" action="upload.php" enctype="multipart/form-data" method="post" style="margin-left: 350px; margin-top: 100px;">
                <div class="form-group">
                    <label for="username">Image : </label>
                    <input type="file" class="form-control" name="image" required>
                </div>
                <div class="form-group">
                    <label for="username">Caption : </label>
                    <textarea name="caption" class="form-control" rows="5"></textarea>
                </div>
                <div class="form-group">
                    <label for="password">Category : </label>
                    <select name="category" class="form-control">
                        <?php 
                            $query = mysqli_query($connect, "SELECT * FROM kategori");
                            while ($r = mysqli_fetch_array($query)) {
                                echo "<option value='$r[1]'>$r[1]</option>";
                            }
                        ?>
                    </select>
                </div> <br>
                <div class="form-group">
                    <input type="submit" class="form-control" name="upload" value="UPLOAD">
                </div>
            </form>
        </div>
    </div>
    
    <script src="js/bootstrap.js"></script>
</body>
</html>