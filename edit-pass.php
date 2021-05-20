<?php
if (isset($_POST['submit'])) {
    $password = $_POST['password'];
    $newpassword = $_POST['newpassword'];
    $confirmpassword = $_POST['confirmpassword'];

    if ($newpassword != $confirmpassword) {
    ?>
        <script type="text/javascript">
    		Swal.fire({
				icon: 'error',
				title: 'Error',
                text: 'รหัสผ่านใหม่ไม่ตรงกัน'
			})
    	</script>
    <?php
        exit();
    }

    $sql_pass = "SELECT user_pass FROM general_user WHERE user_id='$user_id'";
    $qu_pass = $conn->query($sql_pass);
    $row_pass = $qu_pass->fetch_array();
    $pass  = $row_pass['user_pass'];

    if ($password != $pass) {
    ?>
        <script type="text/javascript">
            Swal.fire({
                icon: 'error',
                title: 'Error',
                text: 'รหัสผ่านเดิมไม่ถูกต้อง'
            })
        </script>
    <?php
        exit();
    }

    $sql_update = "UPDATE general_user SET user_pass='$newpassword' WHERE user_id='$user_id'";
    if ($conn->query($sql_update) === TRUE) {
    ?>
        <script type="text/javascript">
        	Swal.fire({
				icon: 'success',
				title: 'Success'
			})
        </script>
    <?php
    }

}
?>