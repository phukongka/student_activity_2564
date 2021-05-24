<?php
// session_start();
// include('includes/config.inc.php');
$week = $_SESSION["week_number"];
$user= $_SESSION['user'];
?>
<script>
  function prev(){
      alert('ข้อมูลได้บันทึกแล้ว ');
      window.location="manage-students-listall.php";
  }
</script>
<?php
$user = '7071003';
$_SESSION['user'] = $user;
$sql = "SELECT * FROM general_user as u 
            INNER JOIN student_group as sg ON u.user_id = sg.user_id  
            INNER JOIN student as s ON s.group_id = sg.group_id where u.user_id = '$user' ";
$result = mysqli_query($conn, $sql);

  ////////////////////////
  //no loop ดึงข้อมูลแสดงส่วนหัวของตาราง
$sql1 = "SELECT * FROM student as s 
INNER JOIN major as mj ON s.major_id = mj.major_code where s.user_id = '$user' ";
$result1 = mysqli_query($conn, $sql1);
$row_all = mysqli_num_rows($result1);
$row1 = mysqli_fetch_assoc($result1); // แผนกในที่ปรึกษา
$major_name = $row1['major_name'];
$major_id = $row1['major_id'];
$minor_id = $row1['minor_id'];
$row = mysqli_fetch_assoc($result); // ดึงอาจารย์ทีปรึกษา

  // insert ลงตาราง home_risk_topic แจ้งผู้ปกครอง 
if(!empty($_POST["submit"])  ){
    // TODO
    var_dump($_POST );
    $check_array=$_POST['check_'];
    echo "<br><br><br><br><br>";
     var_dump('chek_N=',$_POST['check_n']);
    $cnt = count($check_array);
    // echo "cnt=".$cnt."<br>";
    foreach($_POST['check_n'] as $key => $value){
        if(in_array($_POST['check_n'][$key], $check_array)){                   
            $detail = $_POST['detail'][$key];
            $student_id = $_POST['student_id'][$key];
            $comment = $_POST['comment'][$key];
            // check duplicate
            $sql_chk = "SELECT * FROM  home_risk_topic WHERE risk_week = '$week' AND student_id = '$student_id' ";
            $result_chk = mysqli_query($conn, $sql_chk);
            $num_chk = mysqli_num_rows($result_chk);
            if($num_chk > 0){
                echo "บันทึกแล้ว";
            }else{
            $sql = "INSERT INTO home_risk_topic VALUES ('', '$detail', '$student_id', NOW(),'$week','$comment','$user')";   
                if ($conn->query($sql) === FALSE) {
                //   echo "New record created successfully"
                echo "Error: " . $sql . "<br>" . $conn->error;
                }
            }
        } //end if in_array
    }// end foreach
}
    $conn->close();

?>

                                                <table id="example3" class="display table table-striped table-bordered" cellspacing="0" width="100%">
                                                    <thead>
                                                        <tr>
                                                            <th>#</th>
                                                            <th>รหัส </th>                                                                                                                     
                                                            <th>ชื่อ - นามสกุล</th>
                                                            <th>รายละเอียด</th>  
                                                            <th>หมายเหตุ</th>
                                                            <th>สถานะ</th>
                                                         
                                                        </tr>
                                                    </thead>
                                                    <tfoot>
                                                        <tr>
                                                        <th>ลำดับ</th>
                                                            <th>รหัส </th>
                                                            <th>ชื่อ - นามสกุล</th>
                                                            <th>รายละเอียด</th>  
                                                            <th>หมายเหตุ</th>
                                                            <th>สถานะ</th>
                                                        </tr>
                                                    </tfoot>
 <!--/////////////////////////////////////////////////////////////////////////////////////////////////////////          -->                       
                                          
                                        <tbody>
<?php
  $no = 0; // ตัวแปรสำหรับ ตรวจสอบ ขาด ลา มาสาย
  $id = 0; // for เพิ่มเพื่อชื่อไม่ซ้ำกัน
  $number= 0; //  ลำดับ
  while($row = mysqli_fetch_assoc($result)) {  // start while
    $number++;
   $student_id = $row['student_id'];
   $prefix = $row['prefix'];
   $std_name = $row['std_name'];
   $std_lastname = $row['std_lastname'];
   $std_level = $row['std_level'];
   $group_id = $row['group_id'];
  
?>
                                                          <tr>
                                                            <td><?php echo $number;?></td>
                                                            <td><?php echo $row['student_id'];?></td>
                                                            <td> <?php echo $row['prefix'].$row['std_name']."&nbsp;&nbsp;".$row['std_lastname'];?></td>  
                                                            <td><input type="text" name="detail[]" value=""></td>        
                                                            <td><input type="text" name="comment[]" value=""></td>                             
                                                            <td>
                                                            <div class="radio icheck-emerland">
                                                                <input type="checkbox" id="emerland<?php echo $id ?>" name="check_[]" value="<?php echo $id ?>"  />
                                                                <label for="emerland<?php echo $id ?>">เสี่ยง</label>  
                                                                <input type="hidden"  name="check_n[]" value="<?php echo $no ?>"  />
                                                                                                                            
                                                            </div>
                                                            <?php 
                                                            $id++ ;
                                                            ?>
                                                <input type="hidden" name="student_id[]" value="<?php echo $student_id ?>">
                                                
                                                
                        
                                              
                                                            </div>
                                                            </td>
                                                            </tr>                                               
                                    <?php  
                                    $no++; // ลำดับ
                                    }
                                    ?>
                                    
                                                    </tbody>
                                                  </table>
                                                  <!-- <input type="submit" name="submit" class="btn btn-sm btn-info" value="บันทึก" /> -->
                                       
                                               