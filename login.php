<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BLESS'U CAKE | LOGIN</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="loginStyle.css">
</head>
<body>
    <div class="container" style="margin: auto;">
        <div class="bg-light border" style="margin-top: 50px; margin-left:auto; margin-right: auto; padding: 50px; width: 50%; margin-bottom: 60px; border-radius: 20px;">
        <h1 class="text-success text-center">LOGIN</h1>
        <div class="col-lg-8 m-auto d-block">
            <form name="form" action="config/login.php" method="POST">
                <div class="form-group">
                    <label>username</label>
                    <input type="text" name="username" class="form-control" id="user">
                    <span id="username" class="text-danger"></span>
                </div>
                
                <div class="form-group">
                    <label>password</label>
                    <input type="password" name="password" class="form-control" id="pass">
                    <span id="pass" class="text-danger"></span>
                </div>
                
                <button type="submit" name="login" class="bg-dark  form-control text-light">LOG IN</button>
            </form>
            <a href="signup.php" style="color: teal; text-align: center;"><p style="margin-top: 10px; margin-bottom: 0px; padding-bottom: 0px;">don't have an account? Register in here</p></a>
            <a href="#" style="color: teal; padding: 10px; text-align: center;"><p class="border-top" style="padding-top: 20px;"></p></a>
            <a href="index.php" style="color: teal; text-align: center;"><p style="margin-top: 10px; margin-bottom: 0px; padding-bottom: 0px;">Kembali ke Halaman Utama</p></a>
            <a href="#" style="color: teal; padding: 10px; text-align: center;"><p class="border-top" style="padding-top: 20px;"></p></a>
        </div>
        </div>
        </form>
        <footer style="text-align: center; background: dimgray; font-size: 12px; color: white;">Copyright by, 18111053_Fieryald Charifi Annazmi_TIFRP18CIDA_UASWEB1</footer>
    </div>
</body>
</html>
        

        