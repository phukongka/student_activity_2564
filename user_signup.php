<?php
	include "includes/config.inc.php";
	if (isset($_POST['reg'])) {
		$user_id = $_POST['user_id'];
		$title = $_POST['title'];
		$name = $_POST['user_name'];
		$lastname = $_POST['user_lastname'];
		$pass = $_POST['user_pass'];
		$email = $_POST['user_email'];
		$profile = "images/default.png";	
		$level = "request";
        //  echo $name;
		//  echo $title;
		if (strlen($email) == 0) {
			AlertWarning("กรุณากรอกE-mail");
			exit();
		}

		if (strlen($pass) < 6) {
			AlertWarning("ต้องมีรหัสผ่านอย่างน้อย 6 ตัว");
			exit();
		}

		$sql_mail = "SELECT user_email FROM general_user WHERE user_email='$email'";
		$run_mail = $conn->query($sql_mail);
		if ($run_mail->num_rows > 0) {
			AlertWarning("E-mail : ".$email." มีผู้ใช้แล้ว");
			// echo "E-mail : ".$email." มีผู้ใช้แล้ว";
			exit();
		}

	//	$pass = md5($pass);
		$sql = "INSERT INTO general_user(user_id,title,user_name, user_lastname, user_position,technical_position,position_level,academic_position,user_email,user_pass,major_code,minor_id,user_pic,signature_id,group_id,co_advisor,user_tel,user_status)VALUES ('$user_id','$title','$name','$lastname','','','','','$email','$pass','','','$profile','','','','','$level')";
		if ($conn->query($sql) === TRUE) {
			AlertWarning ("สมัครขอใช้งานสำเร็จ");
		}else {
			echo "Error: " . $sql . "<br>" . $conn->error;
		  }

	}
?>