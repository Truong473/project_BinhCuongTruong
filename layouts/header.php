<!DOCTYPE html>
<html>
<head>
	<title>BCT</title>
	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	
	<link ref="stylesheet" href="styles.css">

</head>
<body>
	<!-- header START -->
	<!-- Grey with black text -->
	<header style="background-color: #ff0000"> 
        <h2><b>BINHTRUONGCUONG SHOP</b></h2>
</header>
	<nav class="navbar navbar-expand-sm bg-primary navbar-dark">
	  <div class="container" style="padding: 0px !important;">
	  	<ul class="navbar-nav">
		    <li class="nav-item active">
		      <a class="nav-link" href="products.php">Trang chủ</a>
		    </li>
		    <li class="nav-item">
		      <a class="nav-link" href="products.php">Cửa hàng</a>
		    </li>
		    <li class="nav-item">
		      <a class="nav-link" href="#">Về thương hiệu</a>
		    </li>
		    <li class="nav-item">
		      <a class="nav-link" href="#">Lịch sử giao dịch</a>
		    </li>
		    <li class="nav-item">
		      <a class="nav-link" href="#">Liên hệ</a>
		    </li>
		  </ul>
<?php
$cart = [];
if(isset($_SESSION['cart'])) {
	$cart = $_SESSION['cart'];
}
$count = 0;
foreach ($cart as $item) {
	$count += $item['num'];
}
?>
			<a href="cart.php">
				<button type="button" class="btn btn-primary">
					Cart <span class="badge badge-light"><?=$count?></span>
				</button>
			</a>
	  </div>
	</nav>
	<!-- header END -->

	<div class="container main">