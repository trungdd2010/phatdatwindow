<!DOCTYPE html>
<html lang="vi">
<head>
    <style>
        .carousel-inner {
            position: relative;
        }

        .carousel-inner img {
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
                                    <img src='images/nhom-he/cua-so-mo-truot.jpg'
                                         alt='' id="zoom_05"
                                         data-zoom-image="images/nhom-he/cua-so-mo-truot.jpg"/>
                                </div>
                                <div class='item'>
                                    <img src='images/nhom-he/cua-so-mo-quay.jpg' alt=''
                                         data-zoom-image="images/nhom-he/cua-so-mo-quay.jpg"
                                         id="zoom_05"/>
                                </div>
                                <div class='item'>
                                    <img src='images/nhom-he/cua-so-mo-hat.jpg' alt=''
                                         data-zoom-image="images/nhom-he/cua-so-mo-hat.jpg"
                                         id="zoom_05"/>
                                </div>

                                <div class='item'>
                                    <img src='images/nhom-he/cua-di-mo-truot.jpg'
                                         alt=''
                                         data-zoom-image="images/nhom-he/cua-di-mo-truot.jpg"
                                         id="zoom_05"/>
                                </div>
                                <div class='item'>
                                    <img src='images/nhom-he/cua-di-mo-quay-1.JPG'
                                         alt=''
                                         data-zoom-image="images/nhom-he/cua-di-mo-quay-1.JPG"
                                         id="zoom_05"/>
                                </div>
                                <div class='item'>
                                    <img src='images/nhom-he/cua-di-mo-quay-2.jpg'
                                         alt=''
                                         data-zoom-image="images/nhom-he/cua-di-mo-quay-2.jpg"
                                         id="zoom_05"/>
                                </div>
                                <div class='item'>
                                    <img src='images/nhom-he/cua-di-xep-truot.jpg' alt=''
                                         data-zoom-image="images/nhom-he/cua-di-xep-truot.jpg"
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
                                        src='images/nhom-he/cua-so-mo-truot.jpg'
                                        alt=''/></li>
                            <li data-target='#carousel-custom' data-slide-to='1'><img
                                        src='images/nhom-he/cua-so-mo-quay.jpg' alt=''/>
                            </li>
                            <li data-target='#carousel-custom' data-slide-to='2'><img
                                        src='images/nhom-he/cua-so-mo-hat.jpg' alt=''/>
                            </li>
                            <li data-target='#carousel-custom' data-slide-to='3'><img
                                        src='images/nhom-he/cua-di-mo-truot.jpg'
                                        alt=''/></li>
                            <li data-target='#carousel-custom' data-slide-to='4'><img
                                        src='images/nhom-he/cua-di-mo-quay-1.JPG'
                                        alt=''/></li>
                            <li data-target='#carousel-custom' data-slide-to='5'><img
                                        src='images/nhom-he/cua-di-mo-quay-2.jpg'
                                        alt=''/></li>
                            <li data-target='#carousel-custom' data-slide-to='6'><img
                                        src='images/nhom-he/cua-di-xep-truot.jpg' alt=''/>
                            </li>
                        </ol>
                    </div>
                </div>
                <div class="col-lg-4">
                    <p style="text-align: justify; text-justify: inter-word;"><b>Cửa nhôm Xingfa</b> là cửa được làm từ nhôm có
                        xuất xứ từ Quảng Đông, Trung Quốc. Nhôm Xingfa là thương hiệu hàng đầu thế giới về các cấu kiện
                        nhôm lắp ghép trong lĩnh vực xây dựng về cả quy mô và chất lượng. Cửa nhôm Xingfa còn được liên
                        kết với hệ phụ kiện cao cấp và nổi tiếng Kinlong của Hồng Kông nên đây được coi là giải pháp
                        đóng mở cửa rất thông minh và chắc chắn.</p>
                </div>
            </div>

            <table class="main-table table table-hover">
                <thead>
                <tr style="background: deepskyblue">
                    <th width="80px" style="text-align: center">STT</th>
                    <th width="140px" style="text-align: center">Hệ cửa</th>
                    <th width="500px" style="text-align: center">Mô tả</th>
                    <th width="100px" style="text-align: center">Đơn giá</th>
                </tr>
                </thead>
                <tr>
                    <td style="text-align: center">1</td>
                    <td style="text-align: center">Cửa sổ mở trượt</td>
                    <td>
                        <p>Nhôm: Thanh nhôm profile Xingfa hệ 93</p>
                        <p>Độ dày: 2.0 (mm)</p>
                        <p>Màu: Nâu sần, trắng sứ, đen, ghi, vân gỗ.</p>
                        <p>Kính: Kính an toàn 6.38mm, kính hộp 5.9.5 (mm)</p>
                        <p>Phụ kiện: Gioăng EDPM, keo Silicon chịu nước</p>
                        <p>Bảo hành: 5 năm</p>
                    </td>
                    <td style="text-align: center">1.500.000</td>
                </tr>
                <tr>
                    <td style="text-align: center">2</td>
                    <td style="text-align: center">Cửa sổ mở quay</td>
                    <td><p>Nhôm: Thanh nhôm profile Xingfa hệ 55</p>
                        <p>Độ dày: 1.4 (mm)</p>
                        <p>Màu: Nâu sần, trắng sứ, đen, ghi, vân gỗ.</p>
                        <p>Kính: Kính an toàn 6.38mm, kính hộp 5.9.5 (mm)</p>
                        <p>Phụ kiện: Gioăng EDPM, keo Silicon chịu nước</p>
                        <p>Bảo hành: 5 năm</p>
                    </td>
                    <td style="text-align: center">1.600.000</td>
                </tr>
                <tr>
                    <td style="text-align: center">3</td>
                    <td style="text-align: center">Cửa sổ mở hất</td>
                    <td>
                        <p>Nhôm: Thanh nhôm profile Xingfa hệ 55</p>
                        <p>Độ dày: 1.4 (mm)</p>
                        <p>Màu: Nâu sần, trắng sứ, đen, ghi, vân gỗ</p>
                        <p>Kính: Kính an toàn 6.38mm, kính hộp 5.9.5 (mm)</p>
                        <p>Phụ kiện: Gioăng EDPM, keo Silicon chịu nước</p>
                        <p>Bảo hành: 5 năm</p>
                    </td>
                    <td style="text-align: center">1.600.000</td>
                </tr>
                <tr>
                    <td style="text-align: center">4</td>
                    <td style="text-align: center">Cửa đi mở trượt</td>
                    <td>
                        <p>Mẫu nhôm: Thanh nhôm profile Xingfa hệ 93</p>
                        <p>Độ dày: 2.0 (mm)</p>
                        <p>Màu: Nâu sần, trắng sứ, đen, ghi, vân gỗ.</p>
                        <p>Kính: Kính an toàn 6.38mm, kính hộp 5.9.5 (mm)</p>
                        <p>Phụ kiện: Gioăng EDPM, keo Silicon chịu nước</p>
                        <p>Bảo hành: 5 năm</p>
                    </td>
                    <td style="text-align: center">1.600.000</td>
                </tr>
                <tr>
                    <td style="text-align: center">5</td>
                    <td style="text-align: center">Cửa đi mở quay 1 cánh</td>
                    <td>
                        <p>Nhôm: Thanh nhôm profile Xingfa hệ 55</p>
                        <p>Độ dày: 2.0 (mm)</p>
                        <p>Màu: Nâu sần, trắng sứ, đen, ghi, vân gỗ</p>
                        <p>Kính: Kính an toàn 6.38mm, kính hộp 5.9.5 (mm)</p>
                        <p>Phụ kiện: Gioăng EDPM, keo Silicon chịu nước</p>
                        <p>Bảo hành: 5 năm</p>
                    </td>
                    <td style="text-align: center">1.700.000</td>
                </tr>
                <tr>
                    <td style="text-align: center">6</td>
                    <td style="text-align: center">Cửa đi mở quay 2 cánh</td>
                    <td>
                        <p>Nhôm: Thanh nhôm profile Xingfa hệ 55</p>
                        <p>Độ dày: 2.0 (mm)</p>
                        <p>Màu: Nâu sần, trắng sứ, đen, ghi, vân gỗ.</p>
                        <p>Kính: Kính an toàn 6.38mm, kính hộp 5.9.5 (mm)</p>
                        <p>Phụ kiện: Gioăng EDPM, keo Silicon chịu nước</p>
                        <p>Bảo hành: 5 năm</p>
                    </td>
                    <td style="text-align: center">1.750.000</td>
                </tr>
                <tr>
                    <td style="text-align: center">7</td>
                    <td style="text-align: center">Cửa đi mở quay 4 cánh</td>
                    <td>
                        <p>Nhôm: Thanh nhôm profile Xingfa hệ 55</p>
                        <p>Độ dày: 2.0 (mm)</p>
                        <p>Màu: Nâu sần, trắng sứ, đen, ghi, vân gỗ.</p>
                        <p>Kính: Kính an toàn 6.38mm, kính hộp 5.9.5 (mm)</p>
                        <p>Phụ kiện: Gioăng EDPM, keo Silicon chịu nước</p>
                        <p>Bảo hành: 5 năm</p>
                    </td>
                    <td style="text-align: center">1.700.000</td>
                </tr>
                <tr>
                    <td style="text-align: center">8</td>
                    <td style="text-align: center">Cửa đi mở xếp trượt gấp 4 cánh</td>
                    <td>
                        <p>Nhôm: Thanh nhôm profile Xingfa hệ 55</p>
                        <p>Độ dày: 2.0 (mm)</p>
                        <p>Màu: Nâu sần, trắng sứ, đen, ghi, vân gỗ.</p>
                        <p>Kính: Kính an toàn 6.38mm, kính hộp 5.9.5 (mm)</p>
                        <p>Phụ kiện: Gioăng EDPM, keo Silicon chịu nước</p>
                        <p>Bảo hành: 5 năm</p>
                    </td>
                    <td style="text-align: center">1.750.000</td>
                </tr>
                <tr>
                    <td style="text-align: center">9</td>
                    <td style="text-align: center">Cửa đi mở xếp trượt gấp 6 cánh</td>
                    <td>
                        <p>Nhôm: Thanh nhôm profile Xingfa hệ 55</p>
                        <p>Độ dày: 2.0 (mm)</p>
                        <p>Màu: Nâu sần, trắng sứ, đen, ghi, vân gỗ.</p>
                        <p>Kính: Kính an toàn 6.38mm, kính hộp 5.9.5 (mm)</p>
                        <p>Phụ kiện: Gioăng EDPM, keo Silicon chịu nước</p>
                        <p>Bảo hành: 5 năm</p>
                    </td>
                    <td style="text-align: center">1.800.000</td>
                </tr>
                <tr>
                    <td style="text-align: center">10</td>
                    <td style="text-align: center">Cửa đi mở xếp trượt gấp 8 cánh</td>
                    <td>
                        <p>Nhôm: Thanh nhôm profile Xingfa hệ 55</p>
                        <p>Độ dày: 2.0 (mm)</p>
                        <p>Màu: Nâu sần, trắng sứ, đen, ghi, vân gỗ.</p>
                        <p>Kính: Kính an toàn 6.38mm, kính hộp 5.9.5 (mm)</p>
                        <p>Phụ kiện: Gioăng EDPM, keo Silicon chịu nước</p>
                        <p>Bảo hành: 5 năm</p>
                    </td>
                    <td style="text-align: center">1.800.000</td>
                </tr>
            </table>
        </div>
    </div>
</div>
</body>
</html>