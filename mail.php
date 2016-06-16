<html>
	<head>
		<title>
		</title>
	</head>
	<body>
		<form action="mail2.php" method="get">
		寄件人信箱帳號<input type="text" size="20" name="useraccount"required><br><br>
		寄件人信箱密碼<input type="password" size="20" name="userpwd" required><br><br>
		寄件人姓名<input type="text" size="5" name="username" required><br><br>
		
		To<input type="text" size="15" name="toaccount"required><br><br>
		Subject<input type="text" size="15" name="subject" required><br><br>
		<textarea cols="20" rows="10" name="Message"required></textarea><br>
		
		<input type="submit">
	</form>
	</body>
</html>