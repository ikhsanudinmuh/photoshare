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
            <form action="koneksi/loginkoneksi.php" method="post" style="padding: 150px;">
                <div class="form-group">
                    <label for="username">Username : </label>
                    <input type="text" class="form-control" name="username" required>
                </div>
                <div class="form-group">
                    <label for="password">Password : </label>
                    <input type="password" class="form-control" name="password" required>
                </div> <br>
                <div class="form-group">
                    <input type="submit" class="form-control" name="login" value="LOGIN">
                    <a href="register.php">Register here</a>
                </div>
            </form>
            <div class="col-md-6">
                <p class="h1" style="padding-top: 200px;"><i>"Share your happiness with photo"</i></p>
            </div>
        </div>
    </div>

    <script src="js/bootstrap.js"></script>
</body>
</html>