<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>capcha</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<form action="capcha.php" method="POST">
		<div id="form">
			<table border="0">
				<tr>
					<td>
						<input type="text" name="captcha" id="capcha">
						<td><img src="capcha_code.php" alt=""></td>
					</td>
				</tr>
				<tr>
					<td><input type="submit" name="submit" value="Nhập"></td>
					<td></td>
				</tr>				
			</table>
		</div>
	</form>
</body>
</html>