<?php 
    session_start();
    include "koneksi/dbkoneksi.php"
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
            <a href="upload.php" class="btn btn-info" style="">UPLOAD</a>
            <a href="koneksi/logout.php" class="btn btn-dark">LOGOUT</a>
    </nav>

    <?php } elseif(!isset($_SESSION['fullname'])) { ?>
    <nav class="navbar navbar-light bg-light">
            <a class="navbar-brand" href="index.php">
                <img src="images/logo.png" width="30" height="30" class="d-inline-block align-top" alt=""> |
                <i>Photoshare</i>
            </a>
            <a href="login.php" class="btn btn-dark">LOGIN</a>
    </nav>
    <?php } ?>

    <div class="container">
        <div class='row'>
            
        
        <?php 
            $query = mysqli_query($connect, "SELECT * FROM foto ORDER BY url DESC");
            while ($r = mysqli_fetch_array($query)) {?>

                <div class='pad'>

                <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="images/<?php echo $r['url']; ?>" alt="Card image cap">
                <div class="card-body">
                <h5 class="card-title"><?php echo $r['username']; ?></h5>
                <p class="card-text"><?php echo $r['caption']; ?></p>
                <p class="card-text"><?php echo $r['category']; ?></p>
                <p class="card-text"><?php echo $r['date']; ?></p>

                </div>
                </div>
                </div>
        <?php
            }
        ?>

            
        </div>    
    </div>

    <script src="js/bootstrap.js"></script>
</body>
</html>