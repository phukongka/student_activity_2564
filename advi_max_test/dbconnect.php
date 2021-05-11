<?php
  ini_set('display_errors', 1);
  error_reporting(~0);

  $server_name = "localhost";
  $usernameDB = "root";
  $userpassDB = "";
  $dbName = "advisortest";

  $link = @mysqli_connect($server_name, $usernameDB, $userpassDB, $dbName);
    if(mysqli_connect_errno()) {
      echo "ไม่สามารถเชื่อมต่อกับฐานข้อมูลได้".mysqli_connect_error();
      header("refresh: 1; url=teacher_login.php");
    }

  //นำผู้ใช้ออกจากระบบอัตโนมัติ ถ้าไม่มีการเปลี่ยนแปลงสถานะ
  $inRejectTime = 60;
  $sql = "UPDATE general_user SET login_status = '0', login_last_time = '0000-00-00 00:00:00'  WHERE 1 AND DATE_ADD(login_last_time, INTERVAL $inRejectTime MINUTE) <= NOW() ";
  $query = mysqli_query($link, $sql);
?>