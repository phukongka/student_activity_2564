<?php
session_start();
session_destroy();
include('../includes/config.inc.php');
//if (isset($_GET['submit'])){
   // $user=$_GET['group'];
  $user = '7071003';
  $sql = "SELECT * FROM home_room_class ";
  $result = mysqli_query($conn, $sql);
 
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
            							<li class="active">เช็คชื่อเข้าร่วมกิจกรรมโฮมรูม </li>
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
                                                 <h5>เช็คชื่อเข้าร่วม  กิจกรรมโฮมรูม เลือกสัปดาห์ที่ต้องการ</h5>
                                                </div>
                                            </div>  
                                            <div class="panel-body p-20">

                                                <table id="example" class="display table table-striped table-bordered" cellspacing="0" width="100%">
                                                    <thead>
                                                        <tr>
                                                            <th>ลำดับ</th>
                                                            <th>ภาคเรียน </th>                                                                                                                     
                                                            <th>สัปดาห์</th>
                                                            <th>วันที่ร่วมกิจกรรม</th>  
                                                            <th>สถานะ</th>
                                                         
                                                        </tr>
                                                    </thead>
                                                    <tfoot>
                                                        <tr>
                                                            <th>ลำดับ</th>
                                                            <th>ภาคเรียน </th>                                                                                                                     
                                                            <th>สัปดาห์</th>
                                                            <th>วันที่ร่วมกิจกรรม</th>  
                                                            <th>สถานะ</th>
                                                        </tr>
                                                    </tfoot>
                                    
                                                    <form action="" >
                                                    <tbody>
<?php
  $no =0;
  $id =0;
  while($row = mysqli_fetch_assoc($result)) {  // start while
   $no++; // ลำดับ
   $id++;// label name for
   $term = $row['term'];
   $week = $row['week'];
   $date_join = $row['date_join'];
   $active_status = $row['active_status'];
   $user_id = $row['user_id'];
   if($active_status == 1){
     $status = "เข้าเช็คกิจกรรมโฮมรูม" ;
   }else if($active_status == 2){
     $status = "แก้ไขข้อมูล" ;
   }else{
    $status = "ยังไม่เปิดใช้งาน" ;
   }


?>

                                                         <tr>
                                                            <td><?php echo $no;?></td>
                                                            <td><?php echo $term;?></td>
                                                            <td> <?php echo $week;?></td>  
                                                            <td><?php echo $date_join;?></td>  
                                                        <?php
                                                        if($active_status > 0){  // check status_active
                                                        ?>    
                                                            <td style="background-color:MediumSeaGreen;"><a href="manage-students-homeroom.php?week=<?php echo $week ?>" ><?php echo $status;?></a></td>                             
                                                      <?php
                                                      }else{
                                                      ?>  
                                                        <td ><?php echo $status;?></td>  
                                                      <?php
                                                      }    
                                                      ?>                                              
                                                    </tr>
                                                            
<?php  
  }
  ?>
                                                    </tbody>
                                                </table>
                                                <input type="submit" class="btn btn-sm btn-info" value="บันทึก" />
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

