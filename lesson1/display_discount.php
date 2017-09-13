<?php
	#lay du lieu form
	$porduct_description=$_POST[porduct_description];
	$list_price =$_POST[list_price];
	$discount_percent= $_POST[discount_percent];
	#tinh chiet khau
	$discount=$list_price * $discount_percent / 100;
	$discount_price= $list_price -$discount;
	#ap dung
	$list_price_formatted='$'.number_format($list_price,2);
	$porduct_percent_formatted=$discount_price.'$';
	$discount_formatted= '$'.number_format($discount,2);
	$discount_price_formatted='$'.number_format($discount_price,2);

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Product Discount Caculator</title>
	<link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
	<div id="content">
		<h1>Product Discount Caculator</h1>
		<div id="data">
			<label for="">Porduct Description:</label>
			<span><?php echo $porduct_description ?></span><br>

			<label for="">List price:</label>
			<span><?php echo $list_price_formatted ?></span><br>

			<label for="">standard Discount:</label>
			<span><?php echo $porduct_percent_formatted ?></span>&nbsp;&nbsp;%<br>

			<label for="">Discount Acount:</label>
			<span><?php echo $discount_formatted ?></span><br>
			
			<label for="">Discount Price</label>
			<span><?php echo $discount_price_formatted ?></span>&nbsp;&nbsp;%<br>
		</div>
	</div>
	
</body>
</html>