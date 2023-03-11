<?php
session_start();

$title = 'Complete Page';
include_once('layouts/header.php');
require_once('db/dbhelper.php');
require_once('detail.php');
require_once('utils/utility.php');
?>

<head>
    <title>Shop giày hàng đầu tại Việt Nam </title>
    <link rel="stylesheet" href="styles.css">
    <meta charset="utf-8">
</head>
<body>

    <img src ="image\logoTDT.jpg" width="100px" height="100px">
    <nav class="navigation-menu">
            <ul>
                <li ><a href='index.html'>Trang chủ </a></li>
                <li><a href='https://shopee.vn/'>Adidas</a></li>
                <li><a href='https://drake.vn/'>Nike</a></li>
                <li><a href='https://www.facebook.com/'>Khuyến mãi</a></li>
            </ul>
        <nav>
</body>


<?php
include_once('layouts/footer.php');
?>