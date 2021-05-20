<?php
if (isset($_POST['submit'])) {
		$new_title = $_POST['new_title'];
        $new_user_name = $_POST['new_user_name'];
        $new_user_lastname = $_POST['new_user_lastname'];
        $new_user_position = $_POST['new_user_position'];
        $new_technical_position = $_POST['new_technical_position'];
        $new_position_level = $_POST['new_position_level'];
        $new_academic_position = $_POST['new_academic_position'];
        $new_user_tel = $_POST['new_user_tel'];

        $pic_name = $_FILES["edit-pic"]["name"];
        $pic_tmp = $_FILES["edit-pic"]["tmp_name"];

        if ($pic_name != '') {
            move_uploaded_file($pic_tmp, "images/profile/".$pic_name);
            $sql_pic = "UPDATE general_user SET user_pic='images/profile/$pic_name' WHERE user_id = '$user_id'";
            $conn->query($sql_pic);
        }

        $edit_sql = "UPDATE general_user SET title='$new_title',user_name='$new_user_name',user_lastname='$new_user_lastname',user_position='$new_user_position',technical_position='$new_technical_position',position_level='$new_position_level',academic_position='$new_academic_position',user_tel='$new_user_tel' WHERE user_id = '$user_id'";
        if ($conn->query($edit_sql) === TRUE) {
        	?>
        	<script type="text/javascript">
        		Swal.fire({
					icon: 'success',
					title: 'Success'
				}).then(function(){
					<?php
						if ($_SESSION['user_status'] == "admin") {
							?>window.open("change_profile_admin.php","_self");<?php
						} else {
							?>window.open("change_profile_user.php","_self");<?php
						}
					?>
					
				})
        	</script>
        	<?php
        } else {
        	?>
        	<script type="text/javascript">
        		Swal.fire({
					icon: 'error',
					title: 'Error'
				})
        	</script>
        	<?php
        }
    }
?>