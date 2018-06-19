<!DOCTYPE html>
<html lang="vi">
<head>
    <style>
        .carousel-inner {
            position: relative;
        }

        .carousel-control.right {
            right: 0;
            left: auto;
            background-image: none !important;
            background-repeat: repeat-x;
        }

        .carousel-control.left {
            left: 0;
            right: auto;
            background-image: none !important;
            background-repeat: repeat-x;
        }

        #carousel-example-generic {
            margin: 20px auto;
            width: 100%;
        }

        #carousel-custom {;
            float: left;
            width: 100%;
            margin-bottom: 10px;
        }

        #carousel-custom .carousel-indicators {
            margin: 10px 0 0;
            overflow: auto;
            text-align: left;
            position: relative;
            white-space: nowrap;
            width: 100%;
            left: 0px;
            margin-top: 20px;
        }

        #carousel-custom .carousel-indicators li {
            background-color: transparent;
            -webkit-border-radius: 0;
            border-radius: 0;
            display: inline-block;
            height: auto;
            margin: 0 !important;
            width: auto;
        }

        #carousel-custom .carousel-indicators li img {
            display: block;
            opacity: 0.5;
        }

        #carousel-custom .carousel-indicators li.active img {
            opacity: 1;
        }

        #carousel-custom .carousel-indicators li:hover img {
            opacity: 0.75;
        }

        #carousel-custom .carousel-outer {
            position: relative;
        }

        .carousel-indicators li img {
            height: 66px;
        }

        .main-table {
            clear: both;
            border: 1px #bdbdbd solid;
        }

        .item {
            width: 100% !important;
        }

        .main-table {
            clear: both;
            border: 1px #bdbdbd solid;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-lg-9">
            <div class="row">
                <div class="col-lg-8">
                    <div id='carousel-custom' class='slide-container carousel slide' data-ride='carousel'>
                        <div class='carousel-outer'>
                            <!-- me art lab slider -->
                            <div class='carousel-inner'>
                                <div class='item active'>
                                    <img src='images/nhom-he/goc-nhom-zhongkai.jpg'
                                         alt='' id="zoom_05"
                                         data-zoom-image="images/nhom-he/goc-nhom-zhongkai.jpg"/>
                                </div>
                                <div class='item'>
                                    <img src='images/nhom-he/nhom-zhongkai1.png' alt=''
                                         data-zoom-image="images/nhom-zhongkai1.png"
                                         id="zoom_05"/>
                                </div>
                                <div class='item'>
                                    <img src='images/nhom-he/nhom-zhongkai2.jpg' alt=''
                                         data-zoom-image="images/nhom-he/nhom-zhongkai2.jpg"
                                         id="zoom_05"/>
                                </div>

                                <div class='item'>
                                    <img src='images/nhom-he/nhom-zhongkai3.jpg'
                                         alt=''
                                         data-zoom-image="images/nhom-he/nhom-zhongkai3.jpg"
                                         id="zoom_05"/>
                                </div>
                                <div class='item'>
                                    <img src='images/nhom-he/nhom-zhongkai4.jpg'
                                         alt=''
                                         data-zoom-image="images/nhom-he/nhom-zhongkai4.jpg"
                                         id="zoom_05"/>
                                </div>
                                <div class='item'>
                                    <img src='images/nhom-he/nhom-zhongkai5.png'
                                         alt=''
                                         data-zoom-image="images/nhom-he/nhom-zhongkai5.png"
                                         id="zoom_05"/>
                                </div>
                                <div class='item'>
                                    <img src='images/nhom-he/nhom-zhongkai6.jpg' alt=''
                                         data-zoom-image="images/nhom-he/nhom-zhongkai6.jpg"
                                         id="zoom_05"/>
                                </div>
                                <script>
                                    $("#zoom_05").elevateZoom({zoomType: "inner", cursor: "crosshair"});
                                </script>
                            </div>

                            <!-- sag sol -->
                            <a class='left carousel-control' href='#carousel-custom' data-slide='prev'>
                                <span class='glyphicon glyphicon-chevron-left'></span>
                            </a>
                            <a class='right carousel-control' href='#carousel-custom' data-slide='next'>
                                <span class='glyphicon glyphicon-chevron-right'></span>
                            </a>
                        </div>

                        <!-- thumb -->
                        <ol class='carousel-indicators'>
                            <li data-target='#carousel-custom' data-slide-to='0' class='active'><img
                                    src='images/nhom-he/goc-nhom-zhongkai.jpg'
                                    alt=''/></li>
                            <li data-target='#carousel-custom' data-slide-to='1'><img
                                    src='images/nhom-he/nhom-zhongkai1.png' alt=''/>
                            </li>
                            <li data-target='#carousel-custom' data-slide-to='2'><img
                                    src='images/nhom-he/nhom-zhongkai2.jpg' alt=''/>
                            </li>
                            <li data-target='#carousel-custom' data-slide-to='3'><img
                                    src='images/nhom-he/nhom-zhongkai3.jpg'
                                    alt=''/></li>
                            <li data-target='#carousel-custom' data-slide-to='4'><img
                                    src='images/nhom-he/nhom-zhongkai4.jpg'
                                    alt=''/></li>
                            <li data-target='#carousel-custom' data-slide-to='5'><img
                                    src='images/nhom-he/nhom-zhongkai5.png'
                                    alt=''/></li>
                            <li data-target='#carousel-custom' data-slide-to='6'><img
                                    src='images/nhom-he/nhom-zhongkai6.jpg' alt=''/>
                            </li>
                        </ol>
                    </div>
                </div>
                <div class="col-lg-4">
                    <p style="text-align: justify; text-justify: inter-word;"><b>Nhôm ZHONGKAI</b> là gì? Nhôm ZHONGKAI
                        là 1 trong TOP 4 loại nhôm tốt nhất trên thế giới
                        hiện nay. Được thiết kế đặc biệt với bên trong khoang trống có các đường gân sole nhau chịu lực
                        cùng
                        độ dày từ 1.4mm&nbsp;<em>-</em>&nbsp;3.5mm giúp toàn bộ cây nhôm cũng như khối cửa thêm cứng
                        vững chắc hơn,
                        chịu được sức gió cũng như sức ép va đập lực cực lớn mà vẫn giữ nguyên được hình khối kích thước
                        như
                        lúc ban đầu.
                    </p>
                </div>
            </div>

            <table class="main-table table table-hover">
                <thead>
                <tr style="background: deepskyblue">
                    <th width="80px" style="text-align: center">STT</th>
                    <th width="140px" style="text-align: center">Hệ cửa</th>
                    <th width="500px" style="text-align: center">Mô tả</th>
                    <th width="100px" style="text-align: center">Đơn giá kính 5mm/m2</th>
                    <th width="100px" style="text-align: center">Đơn giá kính 6.38mm/m2</th>
                </tr>
                </thead>
                <tr>
                    <td style="text-align: center; vertical-align: center">1</td>
                    <td style="text-align: center; vertical-align: center">Cửa sổ nhôm kính cao cấp Việt Pháp</td>
                    <td>
                        <p>Cửa sổ mở quay, mở hất, mở trượt</p>
                    </td>
                    <td style="text-align: center">1.100.000</td>
                    <td style="text-align: center">1.200.000</td>
                </tr>
                <tr>
                    <td style="text-align: center; vertical-align: center; align: " rowspan="2">2</td>
                    <td style="text-align: center; vertical-align: center" rowspan="2">Cửa đi nhôm cao cấp Việt Pháp hệ 4400</td>
                    <td>
                        <p>Cửa đi mở quay trên kính, dưới pano thanh</p>
                    </td>
                    <td style="text-align: center">1.100.000</td>
                    <td style="text-align: center">1.200.000</td>
                </tr>
                <tr>
                    <td>
                        <p>Cửa đi mở quay dùng toàn kính</p>
                    </td>
                    <td style="text-align: center">1.050.000</td>
                    <td style="text-align: center">1.200.000</td>
                </tr>
                <tr>
                    <td style="text-align: center">2</td>
                    <td style="text-align: center">Cửa sổ hoặc cửa đi lùa nhôm Zhongkai</td>
                    <td>
                        <p>Độ dày: 2.0 (mm)</p>
                        <p>Kính cường lực tempered 5mm hoặc kính dán an toàn 6,38mm màu trắng trong</p>
                        <p>Gioăng cách âm và chống va đập, silicon liên kết cố định</p>
                    </td>
                    <td style="text-align: center">1.450.000</td>
                    <td style="text-align: center">1.650.000</td>
                </tr>
                <tr>
                    <td style="text-align: center">3</td>
                    <td style="text-align: center">Cửa sổ mở quay hoặc mở hất nhôm Zhongkai</td>
                    <td>
                        <p>Độ dày: 1.4 (mm)</p>
                        <p>Kính cường lực tempered 5mm hoặc kính dán an toàn 6,38mm màu trắng trong</p>
                        <p>Gioăng cách âm và chống va đập, silicon liên kết cố định</p>
                    </td>
                    <td style="text-align: center">1.650.000</td>
                    <td style="text-align: center">1.650.000</td>
                </tr>
                <tr>
                    <td style="text-align: center">4</td>
                    <td style="text-align: center">Vách ngăn nhôm Zhongkai hệ 55</td>
                    <td>
                        <p>Độ dày: 1.4 (mm)</p>
                        <p>Kính cường lực tempered 5mm hoặc kính dán an toàn 6,38mm màu trắng trong</p>
                        <p>Gioăng cách âm và chống va đập, silicon liên kết cố định</p>
                    </td>
                    <td style="text-align: center">1.200.000</td>
                    <td style="text-align: center">1.650.000</td>
                </tr>
                <tr>
                    <td style="text-align: center">5</td>
                    <td style="text-align: center">Mặt dựng nhôm Zhongkai nhập khẩu hệ 65</td>
                    <td>
                        <p>Độ dày: 2.5 (mm)</p>
                        <p>Kính cường lực tempered 10mm hoặc kính dán an toàn 10,38mm màu trắng trong</p>
                        <p>Gioăng cách âm và chống va đập, silicon liên kết cố định</p>
                    </td>
                    <td style="text-align: center">1.950.000</td>
                    <td style="text-align: center">1.650.000</td>
                </tr>
            </table>
        </div>
    </div>
</div>
</body>
</html>