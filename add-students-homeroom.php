<?php
    // session_start();
    // include('includes/config.inc.php');
    if(!empty($_GET['week'])){
    $_SESSION["week_number"] = $_GET['week'];
    $week = $_SESSION["week_number"];
    }
    $user=$_SESSION['user_id'];
?>
    <script>
    function prev(){
        alert('ข้อมูลได้บันทึกครบแล้ว ');
        window.location="manage-students-listall.php";
    }
    </script>
<?php
//  query  แสดงนักเรียนในที่ปรึกษา
    $user = $_SESSION['user'];
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
         $group_id = $row['group_id'];
    //check จำนวนแถวของสัปดาห์
    $sql_init1 = "SELECT * FROM home_room_check WHERE week_check = '$week' ";
    $result_init1 = mysqli_query($conn, $sql_init1);
    $num_row_week = mysqli_num_rows($result_init1);
    // insert ลงตาราง homeroom 
    if(!empty($_POST["submit"])  ){
    // TODO
    //var_dump($_POST );
    $check_array_student_id=$_POST['student_id'];   
    $check_array_radio=$_POST['check_n'];
    echo "<br><br><hr>";
    var_dump('chek_radio_n=', $check_array_radio);
    echo "<br><br><hr>";
    //print_r($check_array_radio);
    $cnt = count($_POST['check_n']);
    echo "cnt=".$cnt."<br>";
    foreach($_POST['student_n'] as $key => $value){
            if(in_array($_POST['student_n'][$key], $check_array_student_id)){                   
            $student_id = $_POST['student_id'][$key]; 
            $check_ = $_POST['check_'][$key];       
           // $group_id = $_POST['group_id'][$key];
            // check duplicate
            $sql2 = "SELECT * FROM home_room_check WHERE week_check = '$week' AND student_id='$student_id' ";
            $result2 = mysqli_query($conn, $sql2);
            $num_row = mysqli_num_rows($result2);
            if($num_row > 0){
                echo "บันทึกแล้ว";
            }else{
            $sql = "INSERT INTO home_room_check VALUES ('', '1', 'h001', NOW(),'$week','$student_id',NOW(),'$user','$major_id','minor_id','$group_id','$check_')";   
                if ($conn->query($sql) === FALSE) {
                //   echo "New record created successfully"
                echo "Error: " . $sql . "<br>" . $conn->error;
                }
            }
        } //end if in_array
    }// end foreach

    //ตรวจสอบ ข้อมูล ใน week นั้นๆ
    $sql_init = "SELECT * FROM home_room_check WHERE week_check = '$week' ";
    $result_init = mysqli_query($conn, $sql_init);
    $num_row = mysqli_num_rows($result_init);
    //echo "<br>num_row=".$num_row."<br>";
    //var_dump("check_=",$_POST['check_']);
    //echo "<br>";
    //echo "num_row1=".$num_row_week."<br>";//จำนวนแถวของสัปดาห์ นั้นๆ
     if($num_row == ($row_all - 1)){ // เริ่มนับต่างกัน
     // echo "<script> alert('updatae'); </script>";
        $_SESSION['step1'] = 1;
        $sql_set = "UPDATE home_room_class SET active_status = 2 WHERE week='$week'";
        if ($conn->query($sql_set) === TRUE) {
        echo "Record updated successfully";
        echo "<script>";
        //echo "prev()";//ข้อมูลซ้ำ
        echo "<
        /script>";
        } else {
        echo "Error updating record: " . $conn->error;
        }
    }
    $conn->close();
}
    ?>

                        <!-- <section class="section">
                            <div class="container-fluid">
                            <div>
                       
   
                            </div> -->
                            <!-- <form action="" method="POST" > -->
                                 <!-- <div class="row">
                                    <div class="col-md-12"> -->

                                        <!-- <div class="panel">
                                            <div class="panel-heading">
                                                <div class="panel-title">
                                                 <h5>เช็คชื่อเข้าร่วม  กิจกรรมโฮมรูม สัปดาห์ที่.<?php echo $_SESSION["week_number"]  ?>.. สาขาวิชา...<?php echo $row1['major_name']?> อาจารย์ที่ปรึกษา  <?php echo $row['user_name'];?></h5>
                                                </div>
                                            </div>  
                                            <div class="panel-body p-20"> -->

                                            <table id="example" class="display table table-striped table-bordered" cellspacing="0" width="100%">
                                                    <thead>
                                                        <tr>
                                                            <th>#</th>
                                                            <th>รหัส </th>                                                                                                                     
                                                            <th>ชื่อ - นามสกุล</th>
                                                            <th>สาขาวิชา</th>  
                                                            <th>กลุ่มการเรียน</th>
                                                            <th>สถานะการเข้าร่วม</th>
                                                         
                                                        </tr>
                                                    </thead>
                                                    <tfoot>
                                                        <tr>
                                                        <th>ลำดับ</th>
                                                            <th>รหัส </th>
                                                            <th>ชื่อ - นามสกุล</th>
                                                            <th>สาขาวิชา</th>  
                                                            <th>กลุ่มการเรียน</th>
                                                            <th>สถานะการเข้าร่วม</th>
                                                        </tr>
                                                    </tfoot>
 <!--/////////////////////////////////////////////////////////////////////////////////////////////////////////          -->                       
                                          
                                        <tbody>
<?php
  $no = 0; // ตัวแปรสำหรับ ตรวจสอบ ขาด ลา มาสาย
  $id = 0; // for เพิ่มเพื่อชื่อไม่ซ้ำกัน
  $number = 1; //  ลำดับ
  while($row = mysqli_fetch_assoc($result)) {  // start while
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
            <td><?php echo $major_name;?></td>        
            <td><?php echo $std_level;?></td>                             
            <td>
            <div class="radio icheck-emerland">
                <input type="radio" id="emerland<?php echo $id ?>" name="check_[<?php echo $no ?>]" value="1"  checked/>
               
                <label for="emerland<?php echo $id ?>">มา</label>  
                                                                    
            </div>
            <?php 
            $id++ ;
            ?>
            <div class="radio icheck-pomegranate">
                <input type="radio"  id="pomegranate<?php echo $id ?>" name="check_[<?php echo $no ?>]" value="2" />
               
                <label for="pomegranate<?php echo $id ?>">ขาด</label>
                
            </div>
            <?php 
            $id++ ;
            ?>
            <div class="radio icheck-amethyst">
                <input type="radio"  id="pomegranate<?php echo $id ?>" name="check_[<?php echo $no ?>]" value="3" />
               
                <label for="pomegranate<?php echo $id ?>">สาย</label>       
            </div>
            <?php                                                             
            $id++;// label name for
            ?>
            <div class="radio icheck-sunflower">
                <input type="radio"  id="pomegranate<?php echo $id ?>" name="check_[<?php echo $no ?>]" value="4" />
                <label for="pomegranate<?php echo $id ?>">ลา</label> 
                <input type="hidden" name="student_id[<?php echo $no ?>]" value="<?php echo $student_id ?>">
                <input type="hidden" name="student_n[<?php echo $no ?>]" value="<?php echo $student_id ?>">
                <input type="hidden"  name="check_n[<?php echo $no ?>]" value="<?php echo $no ?>"  />
                            
              <!--  <input type="hidden" name="student_id[]" value="<?php // echo $student_id ?>">  
                <input type="hidden" name="student_n[]" value="<?php// echo $student_id ?>">   
                <input type="hidden"  name="check_n[]" value="<?php // echo $no ?>"  />   -->
                <input type="hidden" name="prefix[]" value="<?php echo $prefix ?>">
                <input type="hidden" name="std_name[]" value="<?php echo $std_name ?>">
                <input type="hidden" name="std_lastname[]" value="<?php echo $std_lastname ?>">
                <input type="hidden" name="group_id[]" value="<?php echo $group_id ?>">

            </div>
            </td>
            </tr>

        <?php  
        $no++; // ลำดับ
        $number++;
        }
        ?>
        
                        </tbody>
                        </table>
                        <!-- <input type="submit" name="submit" class="btn btn-sm btn-info" value="บันทึก" /> -->
                    <!-- </form>                                          -->
                    <!-- </body> -->

                    <!-- /.col-md-12 -->
                    
                <!-- </div>
            </div>
        </div> -->
        <!-- /.col-md-6 -->                         
                                <!-- </div> -->
                                <!-- /.col-md-12 -->
                            <!-- </div> -->
                        <!-- </div> -->
                        <!-- /.panel -->
                    <!-- </div> -->
                    <!-- /.col-md-6 -->

                <!-- </div> -->
                <!-- /.row -->

            <!-- </div> -->
            <!-- /.container-fluid -->
        <!-- </section> -->
        <!-- /.section -->

      
        
        <!-- <script>
            $(function($) {
                $('#example').DataTable();

                $('#example2').DataTable( {
                    "scrollY":        "300px",
                    "scrollCollapse": true,
                    "paging":         false
                } );

                $('#example3').DataTable();
            });
        </script> -->