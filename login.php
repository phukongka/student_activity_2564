<?php    
	  include "includes/config.inc.php";
		include "includes/config.inc.php";
		if (!empty($_POST['login'])) {
			 $user_pass = $_POST['user_pass'];
			 $sql = "SELECT * FROM general_user WHERE user_id = '".trim($_POST['user_id'])."' AND user_id = '".trim($user_pass)."' ";
			 $result = mysqli_query($conn, $sql);
			 $row = mysqli_fetch_assoc($result);
			 $rows = mysqli_num_rows($result);	
					 if ($rows > 0) {
						 echo  $row['user_status']."--";					
						 $_SESSION['user_id'] = $row['user_id'];
						 $_SESSION['user1_status'] = $row['user_status'];
						 $_SESSION['user_name'] = $row['user_name'];
						 $user_id = $_SESSION['user_id'];
						 $user_status = $_SESSION['user1_status'];
							 if ($user_status  == "admin") {
								 echo "<script>alert('efter_true_user_status')</script>";
								 echo "<script>window.open('admin_index.php?user_id=$user_id','_self')</script>";
							 }
							 if ($user_status=='user') {
								 echo "<script>alert('efter_user')</script>";
								 echo "<script>window.open('user_index.php?user_id=$user_id','_self')</script>";
							 }
							 if ($user_status=='Executive') {
								 echo "<script>window.open('user_Executive.php','_self')</script>";
							 }						
 
							 } else {
								 echo("Email หรือ รหัสผ่านไม่ถูกต้อง");
							 }
				 } else {
					 $conn->error;
				 }

		
?>