<?php
include('../includes/config.inc.php');
$week = $_GET['week'];
//if (isset($_GET['submit'])){
   // $user=$_GET['group'];
  $user = '7071003';
  $sql = "SELECT * FROM general_user as u 
            INNER JOIN student_group as sg ON u.user_id = sg.user_id  
            INNER JOIN student as s ON s.group_id = sg.group_id where u.user_id = '$user' ";
  $result = mysqli_query($conn, $sql);

  ////////////////////////
  //no loop ดึงข้อมูลแสดงส่วนหัวของตาราง
  $sql1 = "SELECT * FROM student as s 
  INNER JOIN major as mj ON s.major_id = mj.major_code where s.user_id = '$user' ";
  $result1 = mysqli_query($conn, $sql1);
  $row1 = mysqli_fetch_assoc($result1); // แผนกในที่ปรึกษา
  $major_name = $row1['major_name'];
  $major_id = $row1['major_id'];
  $minor_id = $row1['minor_id'];
  $row = mysqli_fetch_assoc($result); // ดึงอาจารย์ทีปรึกษา


// insert ลงตาราง homeroom 
echo "before-send-data";
if(!empty($_POST["submit"])){
    // TODO
  echo "send-data";
   $student_id = $_POST['student_id'];
   $prefix = $_POST['prefix'];
   $std_name = $_POST['std_name'];
   $std_lastname = $_POST['std_lastname'];
   $std_lavel = $_POST['std_lavel'];
   $group_id = $_POST['group_id'];
   $major_id = $_POST['group_id'];
   $minor_id = $_POST['group_id'];
   $week = $_POST['group_id'];
   $user_id = $_POST['user_id'];
    //foreach Loop  12 field
 //   if(count($_POST['id'])>0){
		foreach($_POST['check_'] as $index=>$value){
			echo $index." => ".$value."||".$student_id."<br />";
		}

//	}


//     $sql = "INSERT INTO home_room_check VALUES ('', '$user', '$clearpass',':=','$passwd')";        
//     if ($conn->query($sql) === TRUE) {
//       echo "New record created successfully";
//     } else {
//       echo "Error: " . $sql . "<br>" . $conn->error;
//     }
//     $conn->close();
//   }else{
//     //TODO
//     echo "no";
//   }
}
  ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
        <title>ACTIVITY CTC Admin Manage Homeroom Activity</title>
        <link rel="stylesheet" href="../css/bootstrap.min.css" media="screen" >
        <link rel="stylesheet" href="../css/font-awesome.min.../" media="screen" >
        <link rel="stylesheet" href="../css/animate-css/animate.min.css" media="screen" >
        <link rel="stylesheet" href="../css/lobipanel/lobipanel.min.css" media="screen" >
        <link rel="stylesheet" href="../css/prism/prism.css" media="screen" > <!-- USED FOR DEMO HELP - YOU CAN REMOVE IT -->
        <link rel="stylesheet" type="../text/css" href="../js/DataTables/datatables.min.css"/>
        <link rel="stylesheet" href="../css/main.css" media="screen" >    
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/icheck-bootstrap@3.0.1/icheck-bootstrap.min.css" />
        <script src="../js/modernizr/modernizr.min.js"></script>
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
   <?php include('../includes/topbar.php');?> 
            <!-- ========== WRAPPER FOR BOTH SIDEBARS & MAIN CONTENT ========== -->
            <div class="content-wrapper">
                <div class="content-container">
   <?php include('../includes/leftbar-user.php');?>  

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
                                <div class="row">
                                    <div class="col-md-12">

                                        <div class="panel">
                                            <div class="panel-heading">
                                                <div class="panel-title">
                                                 <h5>เช็คชื่อเข้าร่วม  กิจกรรมโฮมรูม สัปดาห์ที่.<?php echo $week ?>.. สาขาวิชา...<?php echo $row1['major_name']?> อาจารย์ที่ปรึกษา  <?php echo $row['user_name'];?></h5>
                                                </div>
                                            </div>  
                                            <div class="panel-body p-20">

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
                                                    <form action="manage-students-homeroom.php" method="POST" >
                                                    <tbody>
<?php
  $no =0;
  $id =0;
  while($row = mysqli_fetch_assoc($result)) {  // start while
   $no++; // ลำดับ
   $id++;// label name for
   $student_id = $row['student_id'];
   $prefix = $row['prefix'];
   $std_name = $row['std_name'];
   $std_lastname = $row['std_lastname'];
   $std_level = $row['std_level'];
   $group_id = $row['group_id'];
?>
                                                         <tr>
                                                            <td><?php echo $no;?></td>
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
                                                            $id++ ;
                                                            ?>
                                                            <div class="radio icheck-sunflower">
                                                                <input type="radio"  id="pomegranate<?php echo $id ?>" name="check_[<?php echo $no ?>]" value="4" />
                                                                <label for="pomegranate<?php echo $id ?>">ป่วย</label>
                                                            </div>
                                                            </td>
                                                            </tr>
<?php  
  }
  ?>
                                                    </tbody>
                                                </table>
                                               <input type="hidden" name="student_id" value="<?php echo $student_id ?>">
                                                <input type="hidden" name="prefix" value="<?php echo $prefix ?>">
                                                <input type="hidden" name="std_name" value="<?php echo $std_name ?>">
                                                <input type="hidden" name="std_lastname" value="<?php echo $std_lastname ?>">
                                                <input type="hidden" name="student_id" value="<?php echo $student_id ?>">
                                                <input type="hidden" name="group_id" value="<?php echo $group_id ?>">
                                                <input type="hidden" name="major_id" value="<?php echo $major_id ?>">
                                                <input type="hidden" name="minor_id" value="<?php echo $minor_id ?>">
                                                <input type="hidden" name="week" value="<?php echo $week ?>">
                                                <input type="hidden" name="user_id" value="<?php echo $user ?>">>
                                                <input type="submit" name="submit" class="btn btn-sm btn-info" value="บันทึก" />
                                                </form>
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
    </body>
</html>

