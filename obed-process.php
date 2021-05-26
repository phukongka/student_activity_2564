<?php
  // session_start();
  // error_reporting(0);
  // include('includes/config.inc.php');
  if (isset($_POST['submit_step2'])) {

    $obe_detail_txt = $_POST['obe_detail'];
    $question_txt = $_POST['question_count'];
    // $img_to_db = $_POST['img_name'];

    //สร้างเงื่อนไขตรวจสอบข้อมูลการให้โอวาท
    if($obe_detail_txt == "") {
      echo '<script type="text/javascript">';
      echo 'alert("คุณยังไม่ได้ทำการกรอกรายละเอียดการให้โอวาทแก่ นักเรียน นักศึกษา ประจำสัปดาห์")';
      echo '</script>';
      // header("refresh: 1; url=add-obedience-st2.php");
    }
    else {
      $sql = "INSERT INTO home_obedience_topic VALUES ('', '".$obe_detail_txt."', NOW(), '".$_SESSION['user_id']."', '".$_SESSION['week_number']."', '".$question_txt."');";
      $result = mysqli_query($conn, $sql);

        if($result) {
          echo '<script type="text/javascript">';
          echo ' alert("บันทึกข้อมูลลงฐานข้อมูลสำเร็จแล้ว") ';
          echo '</script>';
          // header("refresh: 1; url=add-obedience-st2.php");

        }
        else {
          echo '<script type="text/javascript">';
          echo ' alert("บันทึกข้อมูลลงฐานข้อมูลไม่สำเร็จ") ';
          echo '</script>';
          // header("refresh: 1; url=add-obedience-st2.php");
        }
    }

    $obe_id_sql = "SELECT home_obedience_topic.obe_id FROM home_obedience_topic WHERE home_obedience_topic.user_id = '".$_SESSION['user_id']."' AND home_obedience_topic.obe_week = '".$_SESSION['week_number']."' ;";
    $obe_query = mysqli_query($conn, $obe_id_sql);
    $obe_result = mysqli_fetch_assoc($obe_query);

    // $upfile2db = "INSERT INTO activity_image VALUES ('', '".$newName."', NOW(), NOW(), '".$obe_result['obe_id']."');";
    // $upfileresult = mysqli_query($conn, $upfile2db) or die ("การบันทึกข้อมูลเกิดความผิดพลาด".mysqli_error($conn));

    // mysqli_close($conn);


    for ($i=0; $i < count($_FILES["img_name"]["name"]); $i++) { 
      
      $img_name = $_FILES["img_name"]["name"][$i];
      $tmp_img_name = $_FILES["img_name"]["tmp_name"][$i];
      //ฟังก์ชันวันที่
      date_default_timezone_set('Asia/Bangkok');
      $date_name = date("Ymd");

      //ฟังก์ชันสุ่มตัวเลข
      $numrand = (mt_rand());

      //เพิ่มไฟล์
      // $upload = $_FILES['img_name'];

      //เปลี่ยนชื่อไฟล์เก่าเพื่อเตรียมเอาไปสร้าง act_img_id
      if($img_name != "") { // if($upload != "") {
        $path = "obed_img/";
        $type = strrchr($img_name, ".");//$type = strrchr($_FILES['img_name']['name'], ".");
        $newName = $date_name.$numrand.$type;
        $path_copy = $path.$newName;
        $path_link = "obed_img/".$newName;

        //คัดลอกไฟล์เก็บไว้ยังตำแหน่งที่ระบุ
        move_uploaded_file($tmp_img_name, $path_copy); // move_uploaded_file($_FILES['img_name']['tmp_name'], $path_copy);

        $upfile2db = "INSERT INTO activity_image VALUES ('', '".$newName."', NOW(), NOW(), '".$obe_result['obe_id']."');";
        $upfileresult = mysqli_query($conn, $upfile2db) or die ("การบันทึกข้อมูลเกิดความผิดพลาด".mysqli_error($conn));
      }
    }



    if($upfileresult) {
      // echo "บันทึกภาพสำเร็จแล้ว ไปตรวจสอบดูนะ จะให้ไปพาธไหนต่อ";
      //header("refresh: 1; url=add-activity-homeroom.php");
    }
    else {
      // echo "บันทึกภาพไม่สำเร็จ แย่แล้วสิ (;_;)";
      //header("refresh: 1; url=add-activity-homeroom.php");
    }
  
  }
?>