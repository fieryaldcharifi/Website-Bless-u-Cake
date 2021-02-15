<?php
include 'session.php';
include 'config/data_signup.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <script language="Javascript" src="modul/bootstrap-4.3.1-dist/js/bootstrap.min.js"> </script>
    <script src="modul/JQuery/jquery.min.js"></script>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap-4.3.1-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>BLESS'U CAKE | BERANDA</title>
    <style>
        *{
            padding: 0;
            margin: 0;
            font-family: sans-serif;
        }
        .hero{
            width: 100%;
            height: 100vh;
            background-image: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url(imgs/NEOPOLITAN-ICECREAM-CAKE.jpg);
            background-size: cover;
            background-position: center;
            text-align: center;
            position: relative;
        }
        .text-box{
            width: 60%;
            margin: 200px auto 0;
            color: #fff;
        }
        .text-box h1{
            margin-bottom: 30px;
            font-size: 60px;
        }
        .text-box p{
            font-size: 18px;
            line-height: 24px;
            margin-bottom: 40px;
        }
        .text-box button{
            width: 220px;
            padding:  12px 0;
            color: #fff;
            font-size: 20px;
            border-radius: 5px;
            outline: none;
            border: 2px solid #fff;
            background: transparent;
            cursor: pointer;
        }
        .sidebar{
            height: 335px;
            width: 60px;
            background: #fff;
            border-radius: 5px;
            position: absolute;
            top: 50%;
            right: 50px;
            transform: translateY(-50%);
        }
        .icon-box{
            width: 50px;
            height: 50px;
            display: flex;
            justify-content: flex-end;
            margin: 5px auto;
        }
        .side-text{
            min-width: 0px;
            height: 100%;
            background: #f44336;
            margin-right: 5px;
            line-height: 0;
            color: #fff;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 5px 0 0 5px;
            overflow: hidden;
            transition: 0.5s;
        }
        .icon{
            min-width: 50px;
            height: 100%;
            border-radius: 5px;
            cursor: pointer;
        }
        .icon .fa{
            font-size: 20px;
            color: #f44336;
            line-height: 50px;
        }
        .icon-box:hover .icon{
            background: #f44336;
        }
        .icon-box:hover .icon .fa{
            color: #fff;
        }
        .icon-box:hover .side-text{
            min-width: 140px;
        }
    </style>
</head>
<body>
    <div class="hero">
        <nav>
            <img src="" alt="">
            <img src="" alt="">
        </nav>
        <div class="text-box">
            <h1>BLESS'U CAKE</h1>
            <p>Terima pesanan kue secara online, dengan harga yang terjangkau.
                Oleh Fieryald Charifi Annazmi.
            </p>
            <button type="button">Pesan Sekarang</button>
        </div>
        

        <div class="sidebar">
                <?php
                $username = $_SESSION['username'];
                ?>
                <div class="icon-box">
                    <div class="side-text">
                    <?php echo $username; ?>
                    </div>
                    <form action="edit.php" method="POST">
                        <button type="submit" style="outline: none; border: none; background: #fff;">
                            <div class="icon">
                                <input type="hidden" name="username" value="<?php echo $username;?>"/>
                                <i class="fa fa-user"></i>
                            </div>
                        </button>
                    </form>
                </div>
            <div class="icon-box">
                <div class="side-text">
                    pesanan  
                </div>
                <div class="icon">
                    <i class="fa fa-book"></i>
                </div>
            </div>
            <div class="icon-box">
                <div class="side-text">
                    Favorite  
                </div>
                <a href="index.php">
                    <div class="icon">
                        <i class="fa fa-birthday-cake"></i>
                    </div>
                </a>
            </div>
            <div class="icon-box">
                <div class="side-text">
                    Online Delivery  
                </div>
                <a href="services.php">
                    <div class="icon">
                        <i class="fa fa-truck"></i>
                    </div>
                </a>
            </div>
            <div class="icon-box">
                <div class="side-text">
                    Products
                </div>
                <a href="products.php">
                    <div class="icon">
                        <i class="fa fa-product-hunt"></i>
                    </div>
                </a>
            </div>
            <div class="icon-box">
                <div class="side-text">
                    Logout
                </div>
                <a href="config/logout.php">
                    <div class="icon">
                        <i class="fa fa-sign-out"></i>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <footer style="text-align: center; background: dimgray; font-size: 12px; color: white;">Copyright by, 18111053_Fieryald Charifi Annazmi_TIFRP18CIDA_UASWEB1</footer>
</body>
</html>