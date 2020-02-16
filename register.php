<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Photoshare</title>
</head>
<body>
    
    <nav class="navbar navbar-light bg-light">
            <div class="container">
                <a class="navbar-brand mx-auto" href="index.php">
                    <img src="images/logo.png" width="30" height="30" class="d-inline-block align-top" alt=""> |
                    <i>Photoshare</i>
                </a>
            </div>
    </nav>
    
    <div class="container">

        <div class="row">
            <form class="col-md-5" action="koneksi/registerkoneksi.php" method="post" style="margin-left: 350px; margin-top: 100px;">
                <div class="form-group">
                    <label for="username">Fullname : </label>
                    <input type="text" class="form-control" name="fullname" required>
                </div>
                <div class="form-group">
                    <label for="username">Username : </label>
                    <input type="text" class="form-control" name="username" required>
                </div>
                <div class="form-group">
                    <label for="password">Password : </label>
                    <input type="password" class="form-control" name="password" required>
                </div> <br>
                <div class="form-group">
                    <input type="submit" class="form-control" name="register" value="REGISTER">
                    <a href="login.php">Login here</a>
                </div>
            </form>
        </div>
    </div>

    <script src="js/bootstrap.min.js"></script>
</body>
</html>