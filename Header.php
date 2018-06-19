<!DOCTYPE html>
<html lang="vi">
<head>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <style>
        @-webkit-keyframes colorchange {

            0% {
                background: white;
            }
            25% {
                background: white;
            }
            50% {
                background: white;
            }
            75% {
                background: white;
            }
            100% {
                background: white;
            }
        }

        @keyframes colorchange {
            0% {
                background: white;
            }
            25% {
                background: white;
            }
            50% {
                background: white;
            }
            75% {
                background: white;
            }
            100% {
                background: white;
            }
        }

        ::-webkit-scrollbar {
            width: 18px;
        }

        /* Track */
        ::-webkit-scrollbar-track {
        }

        /* Handle */
        ::-webkit-scrollbar-thumb {
            background: deepskyblue;
        }

        /* Handle on hover */
        ::-webkit-scrollbar-thumb:hover {
            background: lightskyblue;
        }

        ::-webkit-scrollbar-button:vertical:increment {
            background-image: url("images/arrowdown.png");
        }

        ::-webkit-scrollbar-button:vertical:decrement {
            background-image: url("images/arrowup.png");
        }

        #goTop {
            float: left;
            bottom: 200px;
            left: 10px;
            cursor: pointer;
            display: none;
            position: fixed;
            z-index: 1000;
        }

        #logo {
            float: left;
            height: 60px;
            margin-top: 6px;
            margin-left: 5px;
            border-radius: 3px;
        }

        .navbar {
            margin-bottom: 0;
            background-color: deepskyblue;
            z-index: 9999;
            border: 0;
            font-size: 22px !important;
            vertical-align: middle;
            letter-spacing: 1px;
            border-radius: 0;
            font-family: "Calibri";
            box-shadow: 0px 10px 10px 0px rgba(30, 144, 255, .4);
        }

        .navbar li a, .navbar .navbar-brand {
            color: #fff;
        }

        .navbar-nav li {
            width: 140px;
            text-align: center;
        }

        .navbar-nav a {
            line-height: 45px !important;
        }

        .navbar-nav li a:hover, .navbar-nav li.active a {
            color: deepskyblue !important;
            background-color: #fff !important;
            border-radius: 5px;
            font-size: 25px;
            width: 140px;
        }
    </style>
</head>
<body>
<div id="goTop">
    <img src="images/back-to-top.png" alt="back-to-top"/>
</div>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js" type="text/javascript"></script>
<script type="text/javascript">
    $(function () {
        $(window).scroll(function () {
            if ($(this).scrollTop() > 100) $('#goTop').fadeIn();
            else $('#goTop').fadeOut();
        });
        $('#goTop').click(function () {
            $('body,html').animate({scrollTop: 0}, 'slow');
        });
    });
</script>
<nav class="navbar navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-default navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span><img src="images/drop-icon.png"></span>
            </button>
            <a href="index.php"><img id="logo" src="images/logo4.jpg"></a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="index.php">Trang chủ</a></li>
                <li><a href="Category.php">Sản phẩm</a></li>
                <li><a href="Photo.php">Ảnh</a></li>
                <li><a href="Contact.php">Liên hệ</a></li>
            </ul>
        </div>
    </div>
</nav>
</body>
</html>