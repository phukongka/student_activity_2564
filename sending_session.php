<?php
  session_start();
  include ("includes/config.inc.php");

  $_SESSION['user_id'] = '7071005';
  $_SESSION['week'] = '5';

  echo "<a href=add-obedience-st2.php>ส่ง SESSION</a>";
  // echo "<a href=add-activity-homeroom.php?week=5>ส่ง SESSION</a>";
?>