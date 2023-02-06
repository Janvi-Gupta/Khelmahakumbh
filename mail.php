<?php
    error_reporting(E_ERROR | E_PARSE);
	include("Connection.php");

	require 'vendor/autoload.php';
	require 'vendor/phpmailer/phpmailer/src/SMTP.php';

	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\Exception;
	use PHPMailer\PHPMailer\SMTP;

	$mail = new PHPMailer(true);
	
    $email = $_POST['email'];
    $fname = $_POST['f_name'];
    echo $email;

    echo "dsgds";
	$login = "SELECT * FROM player WHERE email='$email'";
	$conn = mysqli_query($connect,$login);
    echo "56nj";

	$mailsent=0;
	try {
        echo "ddfr6859";
        $mail->SMTPDebug = 0;									
		$mail->isSMTP();											
		$mail->Host	 = 'smtp.gmail.com';				
	    $mail->SMTPAuth = true;							
		$mail->Username = 'janvisgupta77@gmail.com';                
		$mail->Password = 'pnwqyixkzzxzsucm';   					
		$mail->SMTPSecure = 'tls';							
		$mail->Port	 = 587;
        echo "ddf46559";
		
		$mail->setFrom('janvigupta1507@gmail.com', 'Janvi');		
		$mail->addAddress($email);
		$mail->addAddress($email);
        echo "zdds>>>59";

		$mail->isHTML(true);								
		$mail->Subject = "Khel Mahakumbh";

		while($row = mysqli_fetch_array($conn))
        {
			$mail->Body = "Your password is ".$row['password'];
		}

		$mail->AltBody = 'Body in plain text for non-HTML mail clients';
		$mailsent = $mail->send();
		
		if($mailsent==1)
		{
		 	?> <script>window.location.href = "login.php";</script><?php
	 	}

	 	else 
	 	{
			?><script>window.location.href = "Dashboard/dashboard/404.html";</script><?php
	 	}
	}

	catch (Exception $e)
    {
		echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
	}
	
?>