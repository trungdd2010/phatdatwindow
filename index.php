<?php session_start(); ?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="images/favicon.ico">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <title>Phát Đạt</title>
    <style>
        body {
            background-image: url("images/bg8.jpeg");
            -moz-background-size: cover;
            -webkit-background-size: cover;
            -o-background-size: cover;
            background-size: cover;;
            background-repeat: no-repeat;
            background-attachment: fixed;
        }

        .whole {
            margin-top: 75px !important;
        }

        .carousel-inner img {
            width: 100%;
            height: 100%;
        }

        @-webkit-keyframes fade {
            from {
                display: block;
            }
            to {
                margin: 0;
            }
        }

        @keyframes fade {
            from {
                opacity: .4
            }
            to {
                opacity: 1
            }
        }

        .bg-grey {
            background-color: #f6f6f6;
        }

        .logo-small {
            color: white;
            font-size: 50px;
        }

        .logo {
            color: white;
            font-size: 200px;
        }

        .thumbnail {
            padding: 0 0 15px 0;
            border: none;
            border-radius: 0;
        }

        .thumbnail img {
            width: 100%;
            height: 100%;
            margin-bottom: 10px;
        }

        #myCarousel {
            background: hsla(200, 60%, 90%, 0.8);
        }

        .carousel-control.right, .carousel-control.left {
            background-image: none;
            color: white;
        }

        .carousel-indicators li {
            border-color: white;
        }

        .carousel-indicators li.active {
            background-color: white;
        }

        #portfolio {
            background: hsla(200, 60%, 50%, 0.4);
            color: white;
        }

        .thumbnail {
            color: black;
        }

        .item h4 {
            font-size: 19px;
            line-height: 1.375em;
            font-weight: 400;
            font-style: italic;
            margin: 70px 0;
        }

        .item span {
            font-style: normal;
        }

        #services {
            background: hsla(200, 60%, 90%, 0.8);
        }

        .slideanim {
            visibility: visible;
        }

        .slide {
            animation-name: slide;
            -webkit-animation-name: slide;
            animation-duration: 1s;
            -webkit-animation-duration: 1s;
            visibility: visible;
        }

        @keyframes slide {
            0% {
                opacity: 0;
                transform: translateY(70%);
            }
            100% {
                opacity: 1;
                transform: translateY(0%);
            }
        }

        @-webkit-keyframes slide {
            0% {
                opacity: 0;
                -webkit-transform: translateY(70%);
            }
            100% {
                opacity: 1;
                -webkit-transform: translateY(0%);
            }
        }

        @media screen and (max-width: 768px) {
            .col-sm-4 {
                text-align: center;
                margin: 25px 0;
            }

            .btn-lg {
                width: 100%;
                margin-bottom: 35px;
            }
        }

        @media screen and (max-width: 480px) {
            .logo {
                font-size: 150px;
            }
        }

        .container-custom .container-fluid {
            margin: 0 ! important;
            padding: 0 ! important;
        }
    </style>
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">
<?php include('Connection.php');
include('Header.php'); ?>
<div class="whole">
    <div class="container-custom">
        <div class="container-fluid">
            <div id="slide" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#slide" data-slide-to="0" class="active"></li>
                    <li data-target="#slide" data-slide-to="1"></li>
                    <li data-target="#slide" data-slide-to="2"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                    <div class="item active">
                        <img src="images/slide1.jpg" alt="Los Angeles" style="width:100%;">
                    </div>

                    <div class="item">
                        <img src="images/slide2.jpg" alt="Chicago" style="width:100%;">
                    </div>

                    <div class="item">
                        <img src="images/slide3.jpg" alt="New york" style="width:100%;">
                    </div>
                </div>

                <!-- Left and right controls -->
                <a class="left carousel-control" href="#slide" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#slide" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>

    <script>
        var wrap = $("#wrap");

        wrap.on("scroll", function (e) {

            if (this.scrollTop > 147) {
                wrap.addClass("fix-search");
            } else {
                wrap.removeClass("fix-search");
            }

        });
    </script>

    <div id="services" class="container-fluid text-center">
        <h2>VỀ CHÚNG TÔI</h2>
        <br>
        <div class="row slideanim">
            <div class="col-sm-6">
                <span class="glyphicon logo-small"><img src="images/truck.png"></span>
                <h4>Chính sách vận chuyển</h4>
                <p>Miễn phí vận chuyển trong Thành phố Thái Nguyên.</p>
            </div>
            <div class="col-sm-6">
                <span class="glyphicon logo-small"><img src="images/quality.png"></span>
                <h4>Uy tín chất lượng</h4>
                <p>Với phương châm: Uy tín làm nên thương hiệu, chúng tôi luôn cung cấp cho khách hàng những dịch vụ tốt
                    nhất.</p>
            </div>
        </div>
        <br><br>
        <div class="row slideanim">
            <div class="col-sm-6">
                <span class="glyphicon logo-small"><img src="images/warranty.png"></span>
                <h4>Chính sách bảo hành</h4>
                <p>Tất cả các sản phẩm của Phatdatwindow đều được bảo hành 12 tháng.</p>
            </div>
            <div class="col-sm-6">
                <span class="glyphicon logo-small"><img src="images/like.png"></span>
                <h4>Đội ngũ chuyên nghiệp</h4>
                <p>Với đội ngũ nhân viên có kinh nghiệm, nhiệt tình, chu đáo.</p>
            </div>
        </div>
    </div>

    <div id="portfolio" class="container-fluid text-center bg-grey">
        <h2>SẢN PHẨM</h2><br>
        <h4>Chúng tôi có</h4>
        <div class="row text-center slideanim">
            <div class="col-sm-4">
                <div class="thumbnail">
                    <img src="images/nhom-he/178.jpg" alt="Nhôm hệ, cửa cuốn" width="400">
                    <p><strong>Nhôm hệ, cửa cuốn, cửa lưới...</strong></p>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="thumbnail">
                    <img src="images/tuong-kinh/162.jpg" alt="Tường kính, tranh kính" width="400">
                    <p><strong>Tường kính, tranh kính, cửa kính, cửa thủy lực...</strong></p>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="thumbnail">
                    <img src="images/inox/179.jpg" alt="Inox" width="400" height="300">
                    <p><strong>Sản phẩm Inox...</strong></p>
                </div>
            </div>
        </div>
        <br>
    </div>
</div>
<?php include('Footer.php') ?>
</body>
</html>