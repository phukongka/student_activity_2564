<?php
session_start();
include('includes/config.inc.php');
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
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>ACTIVITY CTC Admin Manage Homeroom Activity</title>
        <link rel="stylesheet" href="css/bootstrap.min.css" media="screen" >
        <link rel="stylesheet" href="css/font-awesome.min.css" media="screen" >
        <link rel="stylesheet" href="css/animate-css/animate.min.css" media="screen" >
        <link rel="stylesheet" href="css/lobipanel/lobipanel.min.css" media="screen" >
        <link rel="stylesheet" href="css/prism/prism.css" media="screen" > <!-- USED FOR DEMO HELP - YOU CAN REMOVE IT -->
        <link rel="stylesheet" type="text/css" href="js/DataTables/datatables.min.css"/>
        <link rel="stylesheet" href="css/main.css" media="screen" >    
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/icheck-bootstrap@3.0.1/icheck-bootstrap.min.css" />
        <script src="js/modernizr/modernizr.min.js"></script>
          <style>
        .errorWrap {
    padding: 10px;
    margin: 0 0 20px 0;
    background: #fff;
    border-left: 4px solid #dd3d36;
    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
}
.succWrap{
    padding: 10px;
    margin: 0 0 20px 0;
    background: #fff;
    border-left: 4px solid #5cb85c;
    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
}
        </style>
       
    </head>

<body class="top-navbar-fixed">

  <div class="main-wrapper">

            <!-- ========== TOP NAVBAR ========== -->
  <?php include('includes/topbar.php');?> 
            <!-- ========== WRAPPER FOR BOTH SIDEBARS & MAIN CONTENT ========== -->
            <div class="content-wrapper">
                <div class="content-container">
  <?php include('includes/leftbar-user.php');?>  

                    <div class="main-page">
                        <div class="container-fluid">
                            <div class="row page-title-div">
                                <div class="col-md-6">
                                    <h2 class="title">Manage Students Homeroom Activity</h2>
                                
                                </div>
                                
                                <!-- /.col-md-6 text-right -->
                            </div>
                            <!-- /.row -->
                            <div class="row breadcrumb-div">
                                <div class="col-md-6">
                                    <ul class="breadcrumb">
							<li><a href="dashboard.php"><i class="fa fa-home"></i> Home</a></li>
                                        <li>กิจกรรมโฮมรูม</li>
                      						<li class="active">เช็คชื่อเข้าร่วมกิจกรรมโฮมรูม</li>
            						</ul>
                                </div>
                             
                            </div>
                            <!-- /.row -->
                        </div>
                        <!-- /.container-fluid -->

                        <section class="section">
                            <div class="container-fluid">
                            <div>
                       
   
                            </div>
                            <form action="#" method="POST" >
                                <div class="row">
                                    <div class="col-md-12">

                                        <div class="panel">
                                            <div class="panel-heading">
                                                <div class="panel-title">
                                                 <h5>เช็คชื่อเข้าร่วม  กิจกรรมโฮมรูม สัปดาห์ที่.<?php echo $_SESSION["week_number"]  ?>.. สาขาวิชา...<?php echo $row1['major_name']?> อาจารย์ที่ปรึกษา  <?php echo $row['user_name'];?></h5>
                                                </div>
                                            </div>  
                                            <div class="panel-body p-20">

                                                <table id="example" class="display table table-striped table-bordered" cellspacing="0" width="100%">
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
                                                  <input type="submit" name="submit" class="btn btn-sm btn-info" value="บันทึก" />
                                                </form>                                         
                                                </body>

                                                <!-- /.col-md-12 -->
                                                
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.col-md-6 -->
                                                               
                                                </div>
                                                <!-- /.col-md-12 -->
                                            </div>
                                        </div>
                                        <!-- /.panel -->
                                    </div>
                                    <!-- /.col-md-6 -->

                                </div>
                                <!-- /.row -->

                            </div>
                            <!-- /.container-fluid -->
                        </section>
                        <!-- /.section -->

                    </div>
                    <!-- /.main-page -->
                </div>
                <!-- /.content-container -->
            </div>
            <!-- /.content-wrapper -->

        </div>
      
        <script src="js/jquery/jquery-2.2.4.min.js"></script>
        <script src="js/bootstrap/bootstrap.min.js"></script>
        <script src="js/pace/pace.min.js"></script>
        <script src="js/lobipanel/lobipanel.min.js"></script>
        <script src="js/iscroll/iscroll.js"></script>
        <script src="js/prism/prism.js"></script>
        <script src="js/DataTables/datatables.min.js"></script>
        <script src="js/main.js"></script>
        <script>
            $(function($) {
                $('#example').DataTable();

                $('#example2').DataTable( {
                    "scrollY":        "300px",
                    "scrollCollapse": true,
                    "paging":         false
                } );

                $('#example3').DataTable();
            });
        </script>

</html>

