<?php session_start(); ?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="icon" type="image/png" href="images/favicon.ico">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <?php include 'Connection.php'; ?>
    <title>Danh mục sản phẩm</title>
    <style>
        .product {
            display: inline-table;
            background-color: #f9f9f9;
            box-shadow: 0px 8px 16px 4px rgba(0, 0, 0, 0.2);
            width: 320px;
            margin-bottom: 20px;
            margin-top: 20px;
        }

        .product a img {
            margin-top: 15px;
            height: 290px;
            width: 290px;
            padding-bottom: 20px;
        }

        .productdetail {
            text-align: center;
            border-top: 2px solid lightgray;
            min-height: 100px;
        }

        .productdetail a {
            text-decoration: none;
        }

        .nav {
            font-size: 20px;
        }

        .container-fluid {
            margin: 0 ! important;
            padding: 0 ! important;
        }

        .whole {
            margin-top: 100px !important;
        }
    </style>
</head>
<body>
<?php include('Header.php'); ?>
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

        <div class="container-fluid">
            <div class="tab-content">
                <div id="menu1" class="row tab-pane fade in active text-center">
                    <?php $conn = new Connection();
                    $product = $conn->getConnection()->prepare("SELECT productID, productName, photoURL FROM product WHERE productCatID = 1");
                    $product->execute();
                    foreach ($product as $productID) { ?>
                        <div class="col-sm-4">
                            <div class="product">
                                <a href='Product.php?productID=<?php echo $productID[0]; ?>'><img
                                            src='<?php echo $productID[2]; ?>'></a>
                                <div class="productdetail"><a href='Product.php?productID=<?php echo $productID[0]; ?>'>
                                        <h2><?php echo $productID[1] ?></h2></a></div>
                            </div>
                        </div>
                    <?php } ?>
                </div>

                <div id="menu2" class="row tab-pane fade text-center">
                    <?php $conn = new Connection();
                    $product = $conn->getConnection()->prepare("SELECT productID, productName, photoURL FROM product WHERE productCatID = 2");
                    $product->execute();
                    foreach ($product as $productID) { ?>
                        <div class="col-sm-4">
                            <div class="product">
                                <a href='Product.php?productID=<?php echo $productID[0]; ?>'><img
                                            src='<?php echo $productID[2]; ?>'></a>
                                <div class="productdetail"><a href='Product.php?productID=<?php echo $productID[0]; ?>'>
                                        <h2><?php echo $productID[1] ?></h2></a></div>
                            </div>
                        </div>
                    <?php } ?>
                </div>

                <div id="menu3" class="row tab-pane fade text-center">
                    <?php $conn = new Connection();
                    $product = $conn->getConnection()->prepare("SELECT productID, productName, photoURL FROM product WHERE productCatID = 3");
                    $product->execute();
                    foreach ($product as $productID) { ?>
                        <div class="col-sm-4">
                            <div class="product">
                                <a href='Product.php?productID=<?php echo $productID[0]; ?>'><img
                                            src='<?php echo $productID[2]; ?>'></a>
                                <div class="productdetail"><a href='Product.php?productID=<?php echo $productID[0]; ?>'>
                                        <h2><?php echo $productID[1] ?></h2></a></div>
                            </div>
                        </div>
                    <?php } ?>
                </div>

                <div id="menu4" class="row tab-pane fade text-center">
                    <?php $conn = new Connection();
                    $product = $conn->getConnection()->prepare("SELECT productID, productName, photoURL FROM product WHERE productCatID = 4");
                    $product->execute();
                    foreach ($product as $productID) { ?>
                        <div class="col-sm-4">
                            <div class="product">
                                <a href='Product.php?productID=<?php echo $productID[0]; ?>'><img
                                            src='<?php echo $productID[2]; ?>'></a>
                                <div class="productdetail"><a href='Product.php?productID=<?php echo $productID[0]; ?>'>
                                        <h2><?php echo $productID[1] ?></h2></a></div>
                            </div>
                        </div>
                    <?php } ?>
                </div>

                <div id="menu5" class="row tab-pane fade text-center">
                    <?php $conn = new Connection();
                    $product = $conn->getConnection()->prepare("SELECT productID, productName, photoURL FROM product WHERE productCatID = 5");
                    $product->execute();
                    foreach ($product as $productID) { ?>
                        <div class="col-sm-4">
                            <div class="product">
                                <a href='Product.php?productID=<?php echo $productID[0]; ?>'><img
                                            src='<?php echo $productID[2]; ?>'></a>
                                <div class="productdetail"><a href='Product.php?productID=<?php echo $productID[0]; ?>'>
                                        <h2><?php echo $productID[1] ?></h2></a></div>
                            </div>
                        </div>
                    <?php } ?>
                </div>

                <div id="menu6" class="row tab-pane fade text-center">
                    <?php $conn = new Connection();
                    $product = $conn->getConnection()->prepare("SELECT productID, productName, photoURL FROM product WHERE productCatID = 6");
                    $product->execute();
                    foreach ($product as $productID) { ?>
                        <div class="col-sm-4">
                            <div class="product">
                                <a href='Product.php?productID=<?php echo $productID[0]; ?>'><img
                                            src='<?php echo $productID[2]; ?>'></a>
                                <div class="productdetail"><a href='Product.php?productID=<?php echo $productID[0]; ?>'>
                                        <h2><?php echo $productID[1] ?></h2></a></div>
                            </div>
                        </div>
                    <?php } ?>
                </div>

                <div id="menu7" class="row tab-pane fade text-center">
                    <?php $conn = new Connection();
                    $product = $conn->getConnection()->prepare("SELECT productID, productName, photoURL FROM product WHERE productCatID = 7");
                    $product->execute();
                    foreach ($product as $productID) { ?>
                        <div class="col-sm-4">
                            <div class="product">
                                <a href='Product.php?productID=<?php echo $productID[0]; ?>'><img
                                            src='<?php echo $productID[2]; ?>'></a>
                                <div class="productdetail"><a href='Product.php?productID=<?php echo $productID[0]; ?>'>
                                        <h2><?php echo $productID[1] ?></h2></a></div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include 'Footer.php'; ?>
</body>
</html>
