<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="images/favicon.ico">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <title>Liên hệ</title>
    <style>
        body {
            padding: 0px;
            margin: 0px;
        }

        #index a {
            text-decoration: none;
        }

        .thumbnail {
            padding-top: 15px !important;
            border: transparent !important;
            min-height: 150px !important;
            background: hsla(200, 60%, 50%, 0.4) !important;
        }

        .whole {
            margin-top: 100px !important;
        }
        .thumbnail img {
            margin-bottom: 20px !important;
            height: 30px !important;
        }
        #contact-info {
            font-size: 25px !important;
            line-height: 30px !important;
        }
    </style>
</head>
<body>
<?php include 'Connection.php';
include('Header.php'); ?>
<div class="whole">
    <div class="container-fluid">
        <div class="col-sm-4 thumbnail text-center">
            <img src="images/phone.png"><span id="contact-info">01234567890</span>
        </div>
        <div class="col-sm-4 thumbnail text-center">
            <img src="images/home.png"><span style="font-size: 25px">487-489 - Đ.Lương Ngọc Quyến - TP.Thái Nguyên - T.Thái Nguyên</span>
        </div>
        <div class="col-sm-4 thumbnail text-center">
            <img src="images/mail.png"><span style="font-size: 25px">Phatdatwindow@gmail.com</span>
        </div>
        <div id="googleMap" style="height:400px;width:100%;"></div>
        <script>
            function myMap() {
                var myCenter = new google.maps.LatLng(21.585947, 105.832210);
                var mapProp = {
                    center: myCenter,
                    zoom: 12,
                    scrollwheel: false,
                    draggable: false,
                    mapTypeId: google.maps.MapTypeId.ROADMAP
                };
                var map = new google.maps.Map(document.getElementById("googleMap"), mapProp);
                var marker = new google.maps.Marker({position: myCenter});
                marker.setMap(map);
            }
        </script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBHdY3T4vyAcMtw_NwwvaR8PK2W2MIZg4o&callback=myMap"></script>
        <br>
    </div>
</div>
<?php include('Footer.php') ?>
</body>
</html>