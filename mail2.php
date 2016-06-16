<?php
	$useraccount=$_GET["useraccount"];
	$userpwd=$_GET["userpwd"];
	$username=$_GET["username"];
	$toaccount=$_GET["toaccount"];
	$subject=$_GET["subject"];
	$Message=$_GET["Message"];
	require("../PHPMailer/PHPMailerAutoload.php");
	$mail = new PHPMailer();
	$mail->IsSMTP(); // telling the class to use SMTP
	$mail->SMTPAuth = true; // enable SMTP authentication
	$mail->Host = "smtp.gmail.com"; // sets GMAIL as the SMTP server
	$mail->Port = 587; // set the SMTP port for the GMAIL server
	$mail->CharSet = "utf-8";                       // 設定郵件編碼   
	$mail->Encoding = "base64";
	$mail->WordWrap = 50;            
	$mail->IsHTML(true);

	// $mail->SMTPDebug = 1; 

	$mail->Username=$useraccount;
	$mail->Password=$userpwd;
	$mail->From = $useraccount; 
	$mail->FromName = $username; 
	$mail->Subject = $subject;
	$mail->AddAddress($toaccount,""); 
	$mail->Body=$Message;
	if($mail->Send()) 
	{ 
		echo "郵件成功寄出！"; 
	}
	else 
	{
		echo $mail->ErrorInfo; 
	} 

?>
<a href="mail.php">
返回</a>