<?php
  // session_start();
  // error_reporting(0);
  // include('includes/config.inc.php');
  include('thai_date_time.php');

  //หาจำนวนนักศึกษาที่เป็นที่ปรึกษาทั้งหมด
  $std_num = "SELECT COUNT(student.student_id) AS student FROM student WHERE student.user_id = '".$_SESSION['user_id']."' ;";
  $std_num_query = mysqli_query($conn, $std_num);
  $num_result = mysqli_fetch_assoc($std_num_query);

  //หาจำนวนนักเรียนที่ขาดเรียน
  $std_absent = "SELECT COUNT(home_room_check.student_id) AS student FROM home_room_check WHERE home_room_check.user_id = '".$_SESSION['user_id']."' AND home_room_check.week_check = '".$_SESSION['week_number']."' AND home_room_check.check_status = '2' ;";
  $std_absent_query = mysqli_query($conn, $std_absent);
  $absent_result = mysqli_fetch_assoc($std_absent_query);
?>

<!-- <!DOCTYPE html>
<html lang="en">
<head><title>ACTIVITY CTC SYSTEM</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
</head>
<body> -->

<script type="text/javascript">
    function fncSubmit() {
      if(document.getElementById('obe_detail').value == "") {
        alert('โปรดกรอกข้อมูลการให้โอวาท');
        return false;
      }
      else if(document.getElementById('question_count').value == "") {
        alert('โปรดระบุจำนวนผู้ตอบแบบสอบถามคัดกรอง COVID-19')
        return false;
      }
      else if(document.getElementById('img_name').value == "") {
        alert('โปรดเลือกภาพประกอบในการทำกิจกรรม');
        return false;
      }
      else{
        return true;
      }
    }
  </script>

  <!-- <div class="container"> -->
    <table class="table">
      <tr>
        <td>
          <h3>แบบบันทึกรายงาน การปฏิบัติงานของครูที่ปรึกษา</h3>
          <p><?php echo "สัปดาห์ที่  ".$_SESSION['week_number']."  วันที่  ".$date."  เดือน  ".$month."  พ.ศ.  ".$year ?></p>
          <!-- <h5>** กรุณาบันทึกข้อมูลให้ครบ ทั้งหมด 3 Step **</h5> -->
        </td>
      </tr>
      <tr>
        <td>
          <form name="add_obedience" id="add_obedience" method="POST" onsubmit="JavaScript:return fncSubmit" enctype="multipart/form-data">
            <div class="form-group">
              <!-- <label for="detail">Step 2</label> -->
              <p><h4>เรื่องที่ให้คำแนะนำ นักเรียน นักศึกษา</h4></p>
                <br>
              <textarea class="form-control" name='obe_detail' id='obe_detail' rows='3' required="required"></textarea>
            </div>
                <br>
              <b>เรื่องแบบประเมินตนเอง สำหรับนักเรียน นักศึกษา โดยผ่านการสแกน QR-Code เพื่อเป็นการเฝ้าระวังและป้องกันการแพร่เชื่อระบาดของโรคโควิด-19
              <p>(2 สัปดาห์ ทำ 1 ครั้ง)</p><br>
            <div class="form-group">
              <label for="question_num">จำนวนผู้ตอบแบบสอบถามคัดกรอง</label>
              <input type="text" class="form-control" name="question_count" id="question_count" placeholder="ระบุจำนวน">
            </div>
              <p>จำนวนนักเรียน นักศึกษาทั้งหมด <?php echo " ".$num_result['student']." " ?> คน ขาดกิจกรรมโฮมรูม <?php echo $absent_result['student'] ?> คน</p>
                <br>
                <p>เลือกภาพขณะให้คำแนะนำ นักเรียน นักศึกษา เพื่อประกอบการจัดทำรายงาน</p>
            <div class="form-group">
              <label for="img_file">เลือกภาพที่ท่านต้องการ :  </label>
                <input class="btn btn-info btn-sm" type="file" name="img_name[]" accept="image/png, image/jpeg" id="img_name" multiple="multiple" required="required">
            </div>
            <button type="submit" name="submit_step2" class="btn btn-primary">บันทึกข้อมูล</button>
          </form>
        </td>
      </tr>
    </table>
  <!-- </div> -->
<!-- </body>
</html> -->