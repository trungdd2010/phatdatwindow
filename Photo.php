<?php session_start(); ?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="images/favicon.ico">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <title>Ảnh sản phẩm</title>

    <style>
        .carousel-inner img {
            width: 100%;
            height: 100%;
        }

        .nav {
            font-size: 20px;
        }

        .whole {
            margin-top: 100px !important;
        }
    </style>
</head>
<body>
<?php include('Connection.php');
include('Header.php'); ?>
<div class="whole">
    <div class="container">
        <ul class="nav nav-tabs">
            <li class="active"><a data-toggle="tab" href="#menu1">Nhôm hệ cao cấp</a></li>
            <li><a data-toggle="tab" href="#menu2">Tường kính</a></li>
            <li><a data-toggle="tab" href="#menu3">Cửa cuốn</a></li>
            <li><a data-toggle="tab" href="#menu4">Cửa thủy lực</a></li>
            <li><a data-toggle="tab" href="#menu5">Inox</a></li>
            <li><a data-toggle="tab" href="#menu6">Tranh kính</a></li>
            <li><a data-toggle="tab" href="#menu7">Cửa lưới chống muỗi, côn trùng</a></li>
        </ul>

        <div class="tab-content">
            <div id="menu1" class="tab-pane fade in active">
                <div class="slide-container">

                    <div id="id1" class="carousel slide" data-ride="carousel">

                        <ol class="carousel-indicators">
                            <li data-target="#id1" data-slide-to="0" class="active"></li>
                            <li data-target="#id1" data-slide-to="1"></li>
                            <li data-target="#id1" data-slide-to="2"></li>
                            <li data-target="#id1" data-slide-to="3"></li>
                            <li data-target="#id1" data-slide-to="4"></li>
                            <li data-target="#id1" data-slide-to="5"></li>
                            <li data-target="#id1" data-slide-to="6"></li>
                        </ol>

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                            <div class="item active">
                                <img src="images/nhom-he/178.jpg" style="width:100%;">
                            </div>

                            <div class="item">
                                <img src="images/nhom-he/176.jpg" style="width:100%;">
                            </div>

                            <div class="item">
                                <img src="images/nhom-he/67.jpg" style="width:100%;">
                            </div>

                            <div class="item">
                                <img src="images/nhom-he/42.jpg" style="width:100%;">
                            </div>

                            <div class="item">
                                <img src="images/nhom-he/69.jpg" style="width:100%;">
                            </div>

                            <div class="item">
                                <img src="images/nhom-he/77.jpg" style="width:100%;">
                            </div>

                            <div class="item">
                                <img src="images/nhom-he/177.jpg" style="width:100%;">
                            </div>
                        </div>

                        <!-- Left and right controls -->
                        <a class="left carousel-control" href="#id1" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="right carousel-control" href="#id1" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
            <div id="menu2" class="tab-pane fade">
                <div class="slide-container">

                    <div id="id2" class="carousel slide" data-ride="carousel">

                        <ol class="carousel-indicators">
                            <li data-target="#id2" data-slide-to="0" class="active"></li>
                            <li data-target="#id2" data-slide-to="1"></li>
                            <li data-target="#id2" data-slide-to="2"></li>
                            <li data-target="#id2" data-slide-to="3"></li>
                            <li data-target="#id2" data-slide-to="4"></li>
                            <li data-target="#id2" data-slide-to="5"></li>
                            <li data-target="#id2" data-slide-to="6"></li>
                        </ol>

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                            <div class="item active">
                                <img src="images/tuong-kinh/159.jpg" style="width:100%;">
                            </div>

                            <div class="item">
                                <img src="images/tuong-kinh/160.jpg" style="width:100%;">
                            </div>

                            <div class="item">
                                <img src="images/tuong-kinh/161.jpg" style="width:100%;">
                            </div>

                            <div class="item">
                                <img src="images/tuong-kinh/162.jpg" style="width:100%;">
                            </div>

                            <div class="item">
                                <img src="images/tuong-kinh/163.jpg" style="width:100%;">
                            </div>

                            <div class="item">
                                <img src="images/tuong-kinh/164.jpg" style="width:100%;">
                            </div>

                            <div class="item">
                                <img src="images/tuong-kinh/165.jpg" style="width:100%;">
                            </div>
                        </div>

                        <!-- Left and right controls -->
                        <a class="left carousel-control" href="#id2" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="right carousel-control" href="#id2" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
            <div id="menu3" class="tab-pane fade">
                <div class="slide-container">

                    <div id="id3" class="carousel slide" data-ride="carousel">

                        <ol class="carousel-indicators">
                            <li data-target="#id3" data-slide-to="0" class="active"></li>
                            <li data-target="#id3" data-slide-to="1"></li>
                            <li data-target="#id3" data-slide-to="2"></li>
                            <li data-target="#id3" data-slide-to="3"></li>
                            <li data-target="#id3" data-slide-to="4"></li>
                            <li data-target="#id3" data-slide-to="5"></li>
                            <li data-target="#id3" data-slide-to="6"></li>
                        </ol>

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                            <div class="item active">
                                <img src="images/cua-cuon/168.jpg" style="width:100%;">
                            </div>

                            <div class="item">
                                <img src="images/cua-cuon/169.jpg" style="width:100%;">
                            </div>

                            <div class="item">
                                <img src="images/cua-cuon/166.jpg" style="width:100%;">
                            </div>

                            <div class="item">
                                <img src="images/cua-cuon/122.jpg" style="width:100%;">
                            </div>

                            <div class="item">
                                <img src="images/cua-cuon/118.jpg" style="width:100%;">
                            </div>

                            <div class="item">
                                <img src="images/cua-cuon/121.jpg" style="width:100%;">
                            </div>

                            <div class="item">
                                <img src="images/cua-cuon/120.jpg" style="width:100%;">
                            </div>
                        </div>

                        <!-- Left and right controls -->
                        <a class="left carousel-control" href="#id3" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="right carousel-control" href="#id3" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
            <div id="menu4" class="tab-pane fade">
                <div class="slide-container">

                    <div id="id4" class="carousel slide" data-ride="carousel">

                        <ol class="carousel-indicators">
                            <li data-target="#id4" data-slide-to="0" class="active"></li>
                            <li data-target="#id4" data-slide-to="1"></li>
                            <li data-target="#id4" data-slide-to="2"></li>
                            <li data-target="#id4" data-slide-to="3"></li>
                            <li data-target="#id4" data-slide-to="4"></li>
                            <li data-target="#id4" data-slide-to="5"></li>
                            <li data-target="#id4" data-slide-to="6"></li>
                        </ol>

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                            <div class="item active">
                                <img src="images/cua-thuy-luc/175.jpg" style="width:100%;">
                            </div>

                            <div class="item">
                                <img src="images/cua-thuy-luc/173.jpg" style="width:100%;">
                            </div>

                            <div class="item">
                                <img src="images/cua-thuy-luc/171.jpg" style="width:100%;">
                            </div>

                            <div class="item">
                                <img src="images/cua-thuy-luc/112.jpg" style="width:100%;">
                            </div>

                            <div class="item">
                                <img src="images/cua-thuy-luc/172.jpg" style="width:100%;">
                            </div>

                            <div class="item">
                                <img src="images/cua-thuy-luc/174.jpg" style="width:100%;">
                            </div>

                            <div class="item">
                                <img src="images/cua-thuy-luc/170.jpg" style="width:100%;">
                            </div>
                        </div>

                        <!-- Left and right controls -->
                        <a class="left carousel-control" href="#id4" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="right carousel-control" href="#id4" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
            <div id="menu5" class="tab-pane fade">
                <div class="slide-container">

                    <div id="id5" class="carousel slide" data-ride="carousel">

                        <ol class="carousel-indicators">
                            <li data-target="#id5" data-slide-to="0" class="active"></li>
                            <li data-target="#id5" data-slide-to="1"></li>
                            <li data-target="#id5" data-slide-to="2"></li>
                            <li data-target="#id5" data-slide-to="3"></li>
                            <li data-target="#id5" data-slide-to="4"></li>
                            <li data-target="#id5" data-slide-to="5"></li>
                            <li data-target="#id5" data-slide-to="6"></li>
                        </ol>

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                            <div class="item active">
                                <img src="images/inox/182.jpg" style="width:100%;">
                            </div>

                            <div class="item">
                                <img src="images/inox/179.jpg" style="width:100%;">
                            </div>

                            <div class="item">
                                <img src="images/inox/30.jpg" style="width:100%;">
                            </div>

                            <div class="item">
                                <img src="images/inox/183.JPG" style="width:100%;">
                            </div>

                            <div class="item">
                                <img src="images/inox/181.jpg" style="width:100%;">
                            </div>

                            <div class="item">
                                <img src="images/inox/185.jpg" style="width:100%;">
                            </div>

                            <div class="item">
                                <img src="images/inox/19.jpg" style="width:100%;">
                            </div>
                        </div>

                        <!-- Left and right controls -->
                        <a class="left carousel-control" href="#id5" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="right carousel-control" href="#id5" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
            <div id="menu6" class="tab-pane fade">
                <div class="slide-container">

                    <div id="id6" class="carousel slide" data-ride="carousel">

                        <ol class="carousel-indicators">
                            <li data-target="#id6" data-slide-to="0" class="active"></li>
                            <li data-target="#id6" data-slide-to="1"></li>
                            <li data-target="#id6" data-slide-to="2"></li>
                            <li data-target="#id6" data-slide-to="3"></li>
                            <li data-target="#id6" data-slide-to="4"></li>
                            <li data-target="#id6" data-slide-to="5"></li>
                            <li data-target="#id6" data-slide-to="6"></li>
                        </ol>

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                            <div class="item active">
                                <img src="images/tranh-kinh/135.jpg" style="width:100%;">
                            </div>

                            <div class="item">
                                <img src="images/tranh-kinh/129.jpg" style="width:100%;">
                            </div>

                            <div class="item">
                                <img src="images/tranh-kinh/128.jpg" style="width:100%;">
                            </div>

                            <div class="item">
                                <img src="images/tranh-kinh/134.jpg" style="width:100%;">
                            </div>

                            <div class="item">
                                <img src="images/tranh-kinh/133.jpg" style="width:100%;">
                            </div>

                            <div class="item">
                                <img src="images/tranh-kinh/138.jpg" style="width:100%;">
                            </div>

                            <div class="item">
                                <img src="images/tranh-kinh/146.jpg" style="width:100%;">
                            </div>
                        </div>

                        <!-- Left and right controls -->
                        <a class="left carousel-control" href="#id6" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="right carousel-control" href="#id6" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
            <div id="menu7" class="tab-pane fade">
                <div class="slide-container">

                    <div id="id7" class="carousel slide" data-ride="carousel">

                        <ol class="carousel-indicators">
                            <li data-target="#id7" data-slide-to="0" class="active"></li>
                            <li data-target="#id7" data-slide-to="1"></li>
                            <li data-target="#id7" data-slide-to="2"></li>
                            <li data-target="#id7" data-slide-to="3"></li>
                            <li data-target="#id7" data-slide-to="4"></li>
                            <li data-target="#id7" data-slide-to="5"></li>
                            <li data-target="#id7" data-slide-to="6"></li>
                        </ol>

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                            <div class="item active">
                                <img src="images/cua-luoi/187.jpg" style="width:100%;">
                            </div>

                            <div class="item">
                                <img src="images/cua-luoi/188.jpg" style="width:100%;">
                            </div>

                            <div class="item">
                                <img src="images/cua-luoi/191.JPG" style="width:100%;">
                            </div>

                            <div class="item">
                                <img src="images/cua-luoi/189.jpg" style="width:100%;">
                            </div>

                            <div class="item">
                                <img src="images/cua-luoi/186.jpg" style="width:100%;">
                            </div>

                            <div class="item">
                                <img src="images/cua-luoi/192.jpg" style="width:100%;">
                            </div>

                            <div class="item">
                                <img src="images/cua-luoi/190.jpg" style="width:100%;">
                            </div>
                        </div>

                        <!-- Left and right controls -->
                        <a class="left carousel-control" href="#id7" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="right carousel-control" href="#id7" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include('Footer.php') ?>
</body>
</html>