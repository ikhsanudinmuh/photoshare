<?php
    session_start();
    include "koneksi/dbkoneksi.php";

    if (isset($_POST['edit'])) {
        $id = $_POST['id'];
        $caption = $_POST['caption'];
        $category = $_POST['category'];

        $query = mysqli_query($connect, "UPDATE foto SET caption = '$caption', category = '$category' WHERE id = '$id'");

        if ($query) {
            echo '<script type="text/javascript">';
            echo 'alert("Edit Success");';
            echo 'window.location.href = "index.php";';
            echo '</script>';
        } else {
            echo '<script type="text/javascript">';
            echo 'alert("Upload Failed");';
            echo 'window.location.href = "edit.php";';
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
    <style>
        .pad{
            padding: 45px;
        }
    </style>
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
        
        <?php 
            if(isset($_GET['id'])) {
                $id = $_GET['id'];?>

        <form class="col-md-5" action="edit.php" method="post" style="margin-left: 350px; margin-top: 100px;">
            <?php  
                $query = mysqli_query($connect, "SELECT * FROM foto WHERE id = '$id'");
                while ($r = mysqli_fetch_array($query)) {
                    
            ?>
            <div class="form-group">
                <input type="hidden" name="id" value="<?php echo $id; ?>">
                <label for="username">Caption : </label>
                <textarea name="caption" class="form-control" rows="5"><?php echo $r['caption']; ?></textarea>
            </div>
            <div class="form-group">
                <label for="password">Category : </label>
                <select name="category" class="form-control">
                    <?php 
                        $query = mysqli_query($connect, "SELECT * FROM kategori");
                        while ($r = mysqli_fetch_array($query)) {
                            echo "<option value='$r[1]'>$r[1]</option>";
                        }3
                    ?>
                </select>
            </div> <br>
            <div class="form-group">
                <input type="submit" class="form-control" name="edit" value="EDIT">
            </div>
            <?php 
                }
            }
            ?>
        </form>
                
    </div>
    
    <script src="js/bootstrap.js"></script>
</body>
</html>