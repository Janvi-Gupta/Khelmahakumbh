<?php
    error_reporting(E_ERROR | E_PARSE);
    include("Connection.php"); 

	require 'vendor/autoload.php';
	require 'vendor/phpmailer/phpmailer/src/SMTP.php';

	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\Exception;
	use PHPMailer\PHPMailer\SMTP;

	////////// Coach //////////
    if (isset($_POST['coach']))
    {
        $fname = $_POST['fname'];
        $mname = $_POST['mname'];
        $lname = $_POST['lname'];

        $email = $_POST['email'];
        $vc = $_POST['vc'];
        $weight=$_POST['weight'];
        $height=$_POST['height'];

        $gender=$_POST['gender'];  
        $category = $_POST['category'];

        $aadhar = $_POST['adhar'];
        $dob=$_POST['dob'];
        $game=$_POST['game'];

        // $dname = $_POST['d_name'];
        // $zone = $_POST['zone'];

        $nationality =$_POST['nation'];
        $qualification=$_POST['Regular_qualification'];
        $game_exp=$_POST['Experience'];
        $blood_group=$_POST['blood_group'];
        $physical_disabled=$_POST['Physical_desablity'];
        $contact = $_POST['mobile'];
        $address = $_POST['address'];
        $pincode = $_POST['pincode'];

        // $photo = $_FILES['photo'];
        $filename = $_FILES['photo']['name'];
        $tempname = $_FILES['photo']['tmp_name'];

        $folder = "user/" . $filename;
        
        // Coach Certificate
        $file_name = $_FILES['coachcerti']['name'];
        $file_tmp = $_FILES['coachcerti']['tmp_name'];
        $pdffolder = "pdf/" . $file_name;

        // Coach PD_Certificate
        $file_name1 = $_FILES['coachpd']['name'];
        $file_tmp1 = $_FILES['coachpd']['tmp_name'];
        $pdffolder1 = "pdf/" . $file_name;

        // Coach Photo
        if(move_uploaded_file($tempname, $folder))
        {
            // echo "Image uploaded successfully!";
        } 
        else
        {
            $folder = "user/user1.jpg";
        }
        
        // Coach Certificate
        if(move_uploaded_file($file_tmp,$pdffolder) || move_uploaded_file($file_tmp1,$pdffolder1))
        {
            // echo "PDF uploaded successfully!";
        }
        else
        {
            echo "not uploaded!";
        }

        $coach = "INSERT INTO coach_registration VALUES(0,1,1,'$fname','$mname','$lname','$email','$contact','$dob','$category','$gender','$aadhar','$address','$vc',2,1,'$pincode','$height','$weight','$nationality','$qualification','$game_exp','$blood_group',1,'$pdffolder1','$folder','$pdffolder')";

        // $team = "INSERT INTO team() VALUES()";
        // $grant = "INSERT INTO grant() VALUES()";
        // grant_id,f_name,m_name,l_name,email,gender,dob,contact,category,height,weight,aadharcard_no,address,city_village,pincode

        $password = generate_password();

	    $sql = "INSERT INTO login(role1,username, password) VALUES ('coach','$email','$password')";

	    if (mysqli_query($connect,$sql)) 
	    {
	        // <script>alert("Password");</script>
	    }
	    else
	    {
	        echo "Error: " . $connect . "<br>" . $connect->error;
	    }

        if (mysqli_query($connect,$coach))
        {
            ?><script>alert("You are registered successfully!");</script><?php
        }
        else
        {
            echo mysqli_error($connect);
        }
    }
    else{
        echo mysqli_error($connect);
    }

	/////////////player ////////////////
    if(isset($_POST['player']))
    {
        $fname = $_POST['fname'];
        $mname = $_POST['mname'];
        $lname = $_POST['lname'];

        $email = $_POST['email'];
        $vc = $_POST['vc'];
        $weight = $_POST['weight'];
        $height = $_POST['height'];

        $gender = $_POST['gender'];
        $category = $_POST['category'];

        $aadhar = $_POST['adhar'];
        $dob = $_POST['birthday'];
        $age = $_POST['age'];
        $game = $_POST['game'];

        $dname = $_POST['d_name'];
        $zone = $_POST['zone'];

        $contact = $_POST['contact'];
        $address = $_POST['address'];
        $team_ref = $_POST['ref'];
        $pincode = $_POST['pincode'];

        $pcontact = $_POST['pcontact'];

        //Foreign Key:  Game Id insert into player table
        $game1 = "SELECT game_id FROM game WHERE game_name = '$game' ";
        $game_id = mysqli_query($connect, $game1);
        while ($result1 = mysqli_fetch_array($game_id)) {
            $str1 = (string) $result1['game_id'] . "<br>";
        }

        $password = generate_password();

	    $sql = "INSERT INTO login(username, password,role1) VALUES ('$email','$password','player')";
        $player = "INSERT INTO player VALUES(0,1,1,'$str1','$fname','$mname','$lname','$email','$gender','$dob','$contact','$category','$height','$weight','$aadhar','$address','$vc',2,1,'$pincode','$pcontact','$team_ref')";

        if (mysqli_query($connect, $player) && mysqli_query($connect,$sql))
        {
            ?> <script>alert("You are registered successfully!");</script><?php
            // header("Location: login.php");
        }
        else
        {
            echo mysqli_error($connect);
        }
    } 
    else
    {
        echo mysqli_error($connect);
    }

    ///////////////////////// Team ////////////////////////
    if (isset($_POST["team"]))
    {
        $teamname = $_POST['team_name'];
        $game = $_POST['game'];
        $subgame = $_POST['sub_game'];
        $agegroup = $_POST['sub_game'];
        $members = $_POST['members'];

        $fname = $_POST['fname'];
        $mname = $_POST['mname'];
        $lname = $_POST['lname'];
        $gender=$_POST['gender'];  
        $dob=$_POST['birthday'];
        $weight=$_POST['weight'];
        $height=$_POST['height1'];
        $address = $_POST['add'];
        $dname = $_POST['d_name'];
        $city = $_POST['city'];
        $state = $_POST['state'];
        $pincode = $_POST['pincode'];
        $nationality = $_POST['nationality'];
        $contact = $_POST['contact'];
        $email = $_POST['email'];
        $category = $_POST['category'];
        $aadhar = $_POST['adhar'];
        $pcontact = $_POST['pcontact'];

        function generate_refernceid($len = 8)
        {
            $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
            $password = substr(str_shuffle($chars), 0, $len);
            return $password;
        }
        $team_ref = generate_refernceid();
        $password = generate_password();

        $leader = "INSERT INTO player(grant_id,team_id,game_id,f_name,m_name,l_name,email,gender,dob,contact,category,height,weight,aadharcard_no,address,city_village,district_id,taluka_id,pincode,p_contact) VALUES(1,1,3,'$fname','$mname','$lname','$email','$gender','$dob','$contact','$category','$height','$weight','$aadhar','$address','$city',2,1,'$pincode','$pcontact')";
        $team = "INSERT INTO team VALUES(0,1,1,1,'$teamname','$members','$team_ref')";
        $sql = "INSERT INTO login(username, password,role1) VALUES ('$email','$password','team')";
    
        // $grant = "INSERT INTO grant() VALUES()";
        // grant_id,f_name,m_name,l_name,email,gender,dob,contact,category,height,weight,aadharcard_no,address,city_village,pincode

        if (mysqli_query($connect,$leader) && mysqli_query($connect,$team) && mysqli_query($connect,$sql))
        {
            echo '<script>alert("Registation Successful.")</script>';
            // header("Location: ../login.php");
        }
        else
        {
            echo mysqli_error($connect);
        }

    }
    else{
        echo mysqli_error($connect);
    }


    function generate_password($len = 8)
    {
        $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
        $password = substr(str_shuffle($chars), 0, $len);
        return $password;
    }
    
	$mail = new PHPMailer(true);
	
    $email = $_POST['email'];
    $fname = $_POST['fname'];
    echo $email;

    echo "dsgds";
	$login = "SELECT password FROM login WHERE username='$email'";
    // $ref="SELECT team_ref FROM team WHERE email='$email'";

    $conn = mysqli_query($connect,$login);
    // $conn2 = mysqli_query($connect,$ref);

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

        while($row = mysqli_fetch_assoc($conn))
        {
            $mail->Body = "Your password is ".$row['password'];
        }    

        // function pass_refid()
        // {
        //     while($row = mysqli_fetch_assoc($conn))
        //     {
        //         $mail->Body = "Your password is ".$row['password']." \n Your team Reference Id is: ";
        //     }    
        // }

        // if(isset($_POST['team']))
        // {
            
        // }

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