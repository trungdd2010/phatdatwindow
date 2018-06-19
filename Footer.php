<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href='//netdna.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css' rel='stylesheet'/>
    <style>
        footer {
            padding: 1em;
            color: black;
            font-family: Calibri;
            background: hsla(200, 60%, 90%, 0.8);
            clear: both;
        }

        .nb-copyright .copyrt {
            color: black;
            font-size: 20px;
        }

        .nb-copyright .copyrt a {
            color: tomato;
        }

        .nb-copyright .footer-social {
            margin-top: 10px;
        }

        .nb-copyright .footer-social i {
            padding: 5px 10px;
            color: white;
            margin-top: 10px;
            font-size: 20px;
            border-radius: 5px;
            transition: all 0.4s ease-in-out;
        }

        .nb-copyright .footer-social i:hover {
            color: #fff;
        }

        .nb-copyright .footer-social .fa-facebook {
            padding: 5px 14px;
        }

        @media (max-width: 767px) {
            .xs-center {
                text-align: center;
            }

            .left-clear {
                padding-left: 0;
            }

            .right-clear {
                padding-right: 0;
            }
        }
    </style>
</head>
<body>
<footer>
    <section class="nb-copyright">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 copyrt xs-center">
                    2017 © All Rights Reserved. <a href="index.php" title="Thành Đạt"><b>Phatdatwindow.biz</b></a>
                </div>
                <div class="col-sm-6 text-right xs-center">
                    <ul class="list-inline footer-social">
                        <li><a href="https://www.facebook.com/profile.php?id=100011176212155"><i
                                        style="background-color: #3b5998"
                                        class="fa fa-facebook"></i></a></li>
                        <li><a href="https://www.facebook.com/profile.php?id=100011176212155"><i
                                        style="background-color: #00aced"
                                        class="fa fa-twitter"></i></a></li>
                        <li><a href="https://www.facebook.com/profile.php?id=100011176212155"><i
                                        style="background-color: #FF0000"
                                        class="fa fa-youtube-play"></i></a></li>
                        <li><a href="https://www.facebook.com/profile.php?id=100011176212155"><i
                                        style="background-color: #dd4b39"
                                        class="fa fa-google-plus"></i></a></li>
                        <li><a href="https://www.facebook.com/profile.php?id=100011176212155"><i
                                        style="background-color: #00aff0"
                                        class="fa fa-skype"></i></a></li>
                    </ul>
                </div>

                <div class="clock">
                    <SCRIPT language=JavaScript>
                        day = new Date();
                        miVisit = day.getTime();

                        function clock() {
                            dayTwo = new Date();
                            hrNow = dayTwo.getHours();
                            mnNow = dayTwo.getMinutes();
                            scNow = dayTwo.getSeconds();
                            miNow = dayTwo.getTime();
                            if (hrNow == 0) {
                                hour = 12;
                                ap = " AM";
                            } else if (hrNow <= 11) {
                                ap = " AM";
                                hour = hrNow;
                            } else if (hrNow == 12) {
                                ap = " PM";
                                hour = 12;
                            } else if (hrNow >= 13) {
                                hour = (hrNow - 12);
                                ap = " PM";
                            }
                            if (hrNow >= 13) {
                                hour = hrNow - 12;
                            }
                            if (mnNow <= 9) {
                                min = "0" + mnNow;
                            }
                            else (min = mnNow)
                            if (scNow <= 9) {
                                secs = "0" + scNow;
                            } else {
                                secs = scNow;
                            }
                            time = hour + ":" + min + ":" + secs + ap;
                            document.form.button.value = time;
                            self.status = time;
                            setTimeout('clock()', 1000);
                        }

                        function timeInfo() {
                            milliSince = miNow;
                            milliNow = miNow - miVisit;
                            secsVisit = Math.round(milliNow / 100);
                            minsVisit = Math.round((milliNow / 1000) / 60);

                        }

                        document.write("<center><form name=\"form\">"
                            + "<input id=\"codeseonet\" type=button value=\"Click for info!\""
                            + " name=button onClick=\"timeInfo()\"></form></center>");
                        onError = null;
                        clock();
                    </SCRIPT>
                </div>
            </div>
        </div>
    </section>
</footer>
</body>
</html>