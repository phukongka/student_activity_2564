<?php     
	//session_start();
    include "includes/config_db.php";

		if (isset($_POST['login'])) {
		//	$user_pass = md5($_POST['user_pass']);
            $user_pass = $_POST['user_pass'];
			$sql = "SELECT * FROM general_user WHERE user_email = '".trim($_POST['user_email'])."' AND user_pass = '".trim($user_pass)."' ";
			$qu = $conn->query($sql);
				$row = $qu->fetch_array();
					if ($row) {
						$_SESSION['user_id'] = $row['user_id'];
						$_SESSION['user_status'] = $row['user_status'];
						$_SESSION['user_name'] = $row['user_name'];

						$user_id = $_SESSION['user_id'];
						$user_status = $_SESSION['user_status'];

						if ($user_status=='admin') {
							echo "<script>window.open('admin_index.php?user_id=$user_id','_self')</script>";
						}
						if ($user_status=='user') {
							echo "<script>window.open('user_index.php?user_id=$user_id','_self')</script>";
						}
						if ($user_status=='Executive') {
							echo "<script>window.open('user_Executive.php','_self')</script>";
						}						

					} else {
						AlertWarning("Email หรือ รหัสผ่านไม่ถูกต้อง");
					}
				} else {
					$conn->error;
				}
		
?>