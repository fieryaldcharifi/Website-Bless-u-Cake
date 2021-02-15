<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BLESS'U CAKE | SIGNUP</title>
    <link rel="stylesheet" type="text/css" href="bootstrap-4.3.1-dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="loginStyle.css">
</head>
<body>
    <div class="container">
        <h1 class="text-success text-center" style="margin-top: 20px;">SIGN UP</h1>
        <div class="col-lg-8 m-auto d-block">
            <form action="config/signup.php" method="POST">
                <div class="form-group">
                    <label>username</label>
                    <input type="text" name="username" class="form-control" id="user">
                    <span id="username" class="text-danger"></span>
                </div>
                <div class="form-group">
                    <label>alamat</label>
                    <input type="text" name="alamat" class="form-control" id="address">
                    <span id="addresss" class="text-danger"></span>
                </div>
                <div class="form-group">
                    <label>email</label>
                    <input type="email" name="email" class="form-control" id="email">
                    <span id="emails" class="text-danger"></span>
                </div>
                <div class="form-group">
                    <label>password</label>
                    <input type="password" name="password" class="form-control" id="pass">
                    <span id="passs" class="text-danger"></span>
                </div>
                <div class="form-group">
                    <label>tanggal lahir</label>
                    <input type="date" name="tgl_lahir" class="form-control" id="dob">
                    <span id="dobs" class="text-danger"></span>
                </div>
                <div class="form-group">
                    <label>no handphone</label>
                    <input type="text" name="no_handphone" class="form-control" id="phone">
                    <span id="phones" class="text-danger"></span>
                </div>                
                <button type="submit" class="bg-dark  form-control text-light">REGISTER</button>
            </form>
            <a href="login.php" style="color: teal; text-align: center;"><p style="margin-top: 10px; margin-bottom: 0px; padding-bottom: 0px;">already have an account?</p></a>
            <a href="#" style="color: teal; padding: 10px; text-align: center;"><p class="border-top" style="padding-top: 20px;"></p></a>
            <a href="index.php" style="color: teal; text-align: center;"><p style="margin-top: 10px; margin-bottom: 0px; padding-bottom: 0px;">Kembali ke Halaman Utama</p></a>
            <a href="#" style="color: teal; padding: 10px; text-align: center;"><p class="border-top" style="padding-top: 20px;"></p></a>
        </div>
        </form>
        <footer style="text-align: center; background: dimgray; font-size: 12px; color: white;">Copyright by, 18111053_Fieryald Charifi Annazmi_TIFRP18CIDA_UASWEB1</footer>
    </div>    
</body>
</html>