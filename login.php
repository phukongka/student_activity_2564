<?php 
	//session_start();
		if (isset($_POST['login'])) {
			include "includes/config.inc.php";
			$user_pass = $_POST['user_pass'];
          
			$sql = "SELECT * FROM general_user WHERE user_email = '".trim($_POST['user_email'])."' AND user_pass = '".trim($user_pass)."' ";
			$qu = $conn->query($sql);
			$row = $qu->fetch_array();
				if ($row) {	

					$_SESSION['user_id']=$row['user_id'];
					$_SESSION['user_status']=$row['user_status'];

					$user_id = $_SESSION['user_id'];
					$user_status = $_SESSION['user_status'];

					if ($_SESSION['user_status']=='admin') {
						echo "<script>window.open('admin_index.php','_self')</script>";
					} if ($_SESSION['user_status']=='user') {
						echo "<script>window.open('user_index.php','_self')</script>";
					} if ($_SESSION['user_status']=='request') {
						echo "<script>alert('บัญชีของคุณอยู่ระหว่างการรออนุมัติ')</script>";
					} if ($_SESSION['user_status']=='cancel') {
						echo "<script>alert('บัญชีของคุณถูกระงับการใช้งาน')</script>";
					}
				} else {
					AlertWarning("Email หรือ รหัสผ่านไม่ถูกต้อง");
				}
			} else {
				$conn->error;
			}
			
?>