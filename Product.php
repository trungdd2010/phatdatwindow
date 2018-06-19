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
    <?php include 'Connection.php';
    if (isset($_GET["productID"])) {
        $a = $_GET["productID"]; ?>
        <?php
        $conn = new Connection();
        $tittle = $conn->getConnection()->prepare("SELECT productName FROM product WHERE productID=$a");
        $tittle->execute();
        foreach ($tittle as $productCat) {
            echo "<title>$productCat[0]</title>";
        }
    } ?>
    <style>
        .whole {
            margin-top: 100px !important;
        }

        .information {
            word-wrap: break-word;
        }

        .other {
            border: 2px deepskyblue solid;
            overflow: auto;
            height: 415px;
        }

        #otherheading {
            text-align: center;
            font-size: 25px;
            line-height: 60px;
            border-bottom: 1px #bdbdbd solid;
            margin-bottom: 10px;
        }

        #product {
            display: inline-table;
            border: 2px solid lightgray;
            width: 230px;
            border-collapse: collapse;
        }

        #product img {
            height: 230px;
            width: 230px;
        }

        .productdetail {
            text-align: center;
            border-top: 2px solid lightgray;
        }

        .productdetail a {
            text-decoration: none;
        }
    </style>
</head>
<body>
<?php include('Header.php'); ?>
<div class="whole">
    <div class="container">
        <div class="row">
            <div class="col-lg-9">
                <div class="information">
                    <?php if (isset($_GET["productID"])) {
                        $a = $_GET["productID"];
                        $name = "Product" . $a . ".php";
                        include($name);
                    } ?><p>
                    </p>
                </div>
            </div>

            <div class="col-lg-3 text-center">
                <div class="other">
                    <div id="otherheading">Các sản phẩm khác</div>
                    <?php $conn = new Connection();
                    $categorynum = $conn->getConnection()->prepare("SELECT productCatID FROM product WHERE productID = $a");
                    $categorynum->execute();
                    foreach ($categorynum as $number) {
                        $catID = $number[0];
                    }
                    $conn = new Connection();
                    $other = $conn->getConnection()->prepare("SELECT productID, productName, photoURL FROM product WHERE productCatID= $catID");
                    $other->execute();
                    foreach ($other as $product) {
                        if ($product[0] != $a) { ?>
                            <div id="product">
                                <img src='<?php echo $product[2]; ?>'>
                                <div class="productdetail"><a href='Product.php?productID=<?php echo $product[0]; ?>'>
                                        <h2><?php echo $product[1] ?></h2></a></div>
                            </div>
                        <?php }
                    } ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include('Footer.php') ?>
</body>
</html>