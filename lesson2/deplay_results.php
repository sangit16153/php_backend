<?php 
	#get data form web
$investment=$_POST['investment'];
$investment_rate=$_POST['investent_rate'];
$year=$_POST['years'];
	#check hop le data
if (empty($investment)) {
	$error_message ='investment is required field';
}elseif (!is_numeric($investment)) {
	$error_message ='Investment must be a value number';
}elseif ($investment <=0) {
	$error_message ='investment must be greater than zero.';
}elseif (empty($investment_rate)) {
	$error_message ='investment rate is required field';
}elseif (!is_numeric($investment_rate)) {
	$error_message ='Investment rate must be a value number';
}elseif ($investment_rate <=0) {
	$error_message ='investment rate must be greater than zero.';
}else{
	$error_message ='';
}
if ($error_message != '') {
	include('index.php');
	exit();
}
#tinh gia tri tuong doi
$future_value=$investment;
for ($i=1; $i<=$year ; $i++){
	$future_value=($future_value +($future_value * $investment_rate*0.01));
}
//ap dungj tien te va ty le lai suat
$investment_f='$'.number_format($investment,2);
$yearly_rate_f=$investment_rate.'%';
$future_value_f='$'.number_format($future_value,2);

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Future Value calculator</title>
	<link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
	<div id="content">
		<h1>Future Value Calculator</h1>
		<label for="">Investment Amuont:</label>
		<span><?php echo $investment_f; ?></span><br>
		<label for="">Yearly Invest Rate:</label>
		<span><?php echo $yearly_rate_f; ?></span><br>
		<label for="">Number of year:</label>
		<span><?php echo $year; ?></span><br>
		<label for="">Furure Value:</label>
		<span><?php echo $future_value_f; ?></span><br>
	</div>
</body>
</html>
