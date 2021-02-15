<?php
include 'session.php';

$username = $_POST["username"];

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="bootstrap-4.3.1-dist/css/bootstrap.min.css">
	<title>BLESS'U CAKE | PROFIL</title>
	<link rel="stylesheet" type="text/css" href="loginStyle.css">
</head>
<body>
	<div class="container">
        <h1 class="text-success text-center" style="margin-top: 20px;">PROFIL</h1>
        <div class="col-lg-8 m-auto d-block">
            <form action="config/edit.php" method="POST">
                <div class="form-group">
                    <label>username</label>
                    <input type="text" name="username" class="form-control" id="user" value="<?php echo $username?>">
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
                <input type="hidden" name="id_reg" value="">                
                <button type="submit" class="bg-dark  form-control text-light">EDIT</button>
            </form>
        </div>
        </form>
		<br>
		<br>
        <footer style="text-align: center; background: dimgray; font-size: 12px; color: white;">Copyright by, 18111053_Fieryald Charifi Annazmi_TIFRP18CIDA_UASWEB1</footer>
    </div>
</body>
</html>