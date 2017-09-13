<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Future Value Calculator</title>
	<link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
	<div id="content">
		<h1>Future value calculator</h1>
		<?php 
			if (!empty($error_message)) {
		?>
		<p class="error"><?php echo $error_message; ?></p>
		<?php
			}
		 ?>
		<form action="deplay_results.php" method="post">
			<div id="data">
				<label for="">Investment Amount:</label>
				<input type="text" name="investment" value="<?php echo $investment; ?>"><br>
				<label for="">Yearly Investment Rate:</label>
				<input type="text" name="investent_rate" value="<?php echo $investment_rate; ?>"><br>
				<label for="">Number Of Years</label>
				<input type="text" name="years" value="<?php echo $years ?>"><br>
			</div>
			<div id="buttons">
			<label for="">&nbsp;</label>
			<input type="submit" value="Calculator"><br>
			</div>
		</form>
	</div>
</body>
</html>