<?php
    session_start();
    include 'includes/config.inc.php';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
        <title>ACTIVITY CTC Admin Manage Classes</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/icheck-bootstrap@3.0.1/icheck-bootstrap.min.css" />
        <link rel="stylesheet" type="text/css" href="js/DataTables/datatables.min.css"/>
        <link rel="stylesheet" href="css/font-awesome.min.css" media="screen" >
        <link rel="stylesheet" href="css/animate-css/animate.min.css" media="screen" >
        <link rel="stylesheet" href="css/lobipanel/lobipanel.min.css" media="screen" >
        <link rel="stylesheet" href="css/prism/prism.css" media="screen" > <!-- USED FOR DEMO HELP - YOU CAN REMOVE IT -->
        
        <link rel="stylesheet" href="css/bootstrap.min.css" media="screen" >
        <link rel="stylesheet" href="css/main.css" media="screen" >
        
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
<?php include('includes/leftbar.php');?>  

                    <div class="main-page">
                        <div class="container-fluid">
                            <div class="row page-title-div">
                                <div class="col-md-6">
                                    <h2 class="title">Manage Users</h2>
                                
                                </div>
                                
                                <!-- /.col-md-6 text-right -->
                            </div>
                            <!-- /.row -->
                            <div class="row breadcrumb-div">
                                <div class="col-md-6">
                                    <ul class="breadcrumb">
            							<li><a href="dashboard.php"><i class="fa fa-home"></i> Home</a></li>
                                        <li> Classes</li>
            							<li class="active">Manage Users</li>
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
                                                    <h5>View Users Info</h5>
                                                </div>
                                            </div>
                                    
                                            <div class="panel-body p-20">
                                                <table id="example" class="table table-striped table-bordered" style="width:100%">
                                                    <thead>
                                                        <tr>
                                                            <th>#</th>
                                                            <th>ภาพ</th>
                                                            <th>รหัสประจำตัว</th>
                                                            <th>ชื่อ - สกุล</th>
                                                            <th>ตำแหน่ง</th>
                                                            <th>สาขา</th>
                                                            <th>แก้ไข</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                    <?php
                                                        $row_number = 1;
                                                        $sql_user = "SELECT * FROM general_user WHERE user_status = 'user' OR 1";
                                                        $qu_user = $conn->query($sql_user);
                                                        while ($row_user = $qu_user->fetch_assoc()) {
                                                            $u_user_id = $row_user['user_id'];
                                                            $u_title = $row_user['title'];
                                                            $u_user_name = $row_user['user_name'];
                                                            $u_user_lastname = $row_user['user_lastname'];
                                                            $u_user_position = $row_user['user_position'];
                                                            $u_technical_position = $row_user['technical_position'];
                                                            $u_user_pic = $row_user['user_pic'];
                                                        ?>
                                                        <tr>
                                                            <td><?php echo $row_number; ?></td>
                                                            <td><img src="<?php if ($u_user_pic != ""){echo $u_user_pic;}else{echo "images/default.png";} ?>" alt="Cinque Terre"  style="width: 60px; height:60px; object-fit: cover;"></td>
                                                            <td><?php echo $u_user_id; ?></td>
                                                            <td><?php echo $u_title." ".$u_user_name." ".$u_user_lastname;?></td>
                                                            <td><?php echo $u_user_position; ?></td>
                                                            <td><?php echo $u_technical_position; ?></td>
                                                            <td>
                                                                <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#ModalEdit<?php echo $u_user_id; ?>"><i class="fa fa-edit" style="margin: 0;"></i></button>
                                                                <!-- Modal -->
                                                                <div id="ModalEdit<?php echo $u_user_id; ?>" class="modal fade" role="dialog">
                                                                    <div class="modal-dialog">

                                                                        <!-- Modal content-->
                                                                        <div class="modal-content">
                                                                            <!-- <form method="post" action="edit_manage-users.php?u_user_id=<?php echo $u_user_id; ?>"> -->
                                                                            <form method="post">
                                                                                <div class="modal-header">
                                                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                                                    <h4 class="modal-title"><?php echo $u_title." ".$u_user_name." ".$u_user_lastname;?></h4>
                                                                                </div>
                                                                                <div class="modal-body">
                                                                                    <!-- <p>Some text in the modal.</p> -->
                                                                                    <?php 
                                                                                        $sql_group = "SELECT * FROM student_group WHERE user_id = '$u_user_id'";
                                                                                        $re_group = $conn->query($sql_group);
                                                                                        while ($row_group = $re_group->fetch_assoc()) {
                                                                                            $g_id = $row_group['id'];
                                                                                            $g_group_id = $row_group['group_id'];
                                                                                            $g_co_advisor = $row_group['co_advisor'];

                                                                                            if ($g_co_advisor == 0) {
                                                                                                $co_advisor = "No";
                                                                                            }elseif ($g_co_advisor == 1) {
                                                                                                $co_advisor = "Yes";
                                                                                            }
                                                                                    ?>
                                                                                    
                                                                                    <div class="row">
                                                                                        <div class="col-sm-6">
                                                                                            <div class="form-group">
                                                                                                <label for="text">รหัสกลุ่มเรียน:</label>
                                                                                                <input type="text" class="form-control" id="text" name="group_id_<?php echo $g_id; ?>" value="<?php echo $g_group_id; ?>" style="width: 100%!important;">
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-sm-6">
                                                                                            <div class="form-group">
                                                                                                <label for="sel1">การเป็นที่ปรึกษาร่วม:</label>
                                                                                                <select class="form-control" id="sel1" name="co_advisor_<?php echo $g_id; ?>">
                                                                                                    <option selected style="display: none;"><?php echo $co_advisor; ?></option>
                                                                                                    <option>Yes</option>
                                                                                                    <option>No</option>
                                                                                                </select>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>

                                                                                            

                                                                                    <?php
                                                                                        }

                                                                                        if (isset($_POST['submit_'.$u_user_id])) {
                                                                                            // $u_user_id = $_GET['u_user_id'];
                                                                                            $sql_update = "SELECT * FROM student_group WHERE user_id = '$u_user_id'";
                                                                                            $re_update = $conn->query($sql_update);
                                                                                            while ($row_update = $re_update->fetch_assoc()) {
                                                                                                $update_id = $row_update['id'];
                                                                                                $group_id = $_POST['group_id_'.$update_id];
                                                                                                if ($_POST['co_advisor_'.$update_id] == "No") {
                                                                                                    $num_co_advisor = 0;
                                                                                                }elseif ($_POST['co_advisor_'.$update_id] == "Yes") {
                                                                                                    $num_co_advisor = 1;
                                                                                                }
                                                                                        
                                                                                                // echo "group_id = ".$_POST['co_advisor_'.$update_id]."<br>";
                                                                                                // echo "num_co_advisor = ".$num_co_advisor."<br>";
                                                                                                // echo "<br>";
                                                                                                
                                                                                                
                                                                                                $sql = "UPDATE student_group SET group_id='$group_id',co_advisor=$num_co_advisor WHERE id=$update_id ";
                                                                                                if ($conn->query($sql) === TRUE) {
                                                                                                    // echo "id=".$update_id." "." group_id=".$group_id." co_advisor=".$num_co_advisor."<br>";

                                                                                                    ?>
                                                                                                    <script type="text/javascript">
                                                                                                        Swal.fire({
                                                                                                            icon: 'success',
                                                                                                            title: 'Success',
                                                                                                            text: 'แก้ไขข้อมูลของ <?php echo $u_title." ".$u_user_name." ".$u_user_lastname;?> สำเร็จ'
                                                                                                        }).then(function(){
                                                                                                           window.open("manage-users-test2.php","_self");
                                                                                                        })
                                                                                                    </script>
                                                                                                    <?php
                                                                                                } else{
                                                                                                    ?>
                                                                                                    <script type="text/javascript">
                                                                                                        Swal.fire({
                                                                                                            icon: 'error',
                                                                                                            title: 'Error',
                                                                                                            text: 'เกิดข้อผิดพลาดไม่สามารถแก้ไขข้อมูล'
                                                                                                        }).then(function(){
                                                                                                           window.open("manage-users-test2.php","_self");
                                                                                                        })
                                                                                                    </script>
                                                                                                    <?php
                                                                                                }
                                                                                                // echo "<br>";
                                                                                                // echo "<br>";
                                                                                                // echo "<br>";
                                                                                        
                                                                                            }
                                                                                        }
                                                                                        
                                                                                    ?>
                                                                                    
                                                                                </div>
                                                                                <div class="modal-footer">
                                                                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                                                    <button type="submit" class="btn btn-success" name="submit_<?php echo $u_user_id; ?>">Save changes</button>
                                                                                </div>
                                                                            </form>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <?php 
                                                            $row_number++;
                                                        }
                                                        ?>
                                                    </tbody>
                                                    <tfoot>
                                                        <tr>
                                                            <th>#</th>
                                                            <th>ภาพ</th>
                                                            <th>รหัสประจำตัว</th>
                                                            <th>ชื่อ - สกุล</th>
                                                            <th>ตำแหน่ง</th>
                                                            <th>สาขา</th>
                                                            <th>แก้ไข</th>
                                                        </tr>
                                                    </tfoot>
                                                </table>
                                           <!-- <form action="">
                                            <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Search" name="search">
                                            <div class="input-group-btn">
                                                <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
                                            </div>
                                            </div>
                                        </form> -->
                                         <!-- <hr> -->
                                        <!-- <div class="row">
                                           <div class="col-md-4">
                                           <div class="panel panel-default">
                                            <div class="panel-body">
                                                <center><img src="images/default.png" alt="Cinque Terre" width="70%" ></center><br>                                           
                                                ชื่อ - นามสกุล : กฤษณา แนววิเศษ <br>
                                                ตำแหน่ง : ครู วิทยฐานะชำนาญการพิเศษ <br>
                                                สาขา : เทคโนโลยีสารสนเทศ <br>
                                                <button type="button" class="btn btn-sm btn-warning"><i class="fa fa-edit"></i></button>                                            
                                                <button type="button" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></button>
                                            </div>
                                            </div>
                                           </div>     

                                           <div class="col-md-4">
                                           <div class="panel panel-default">
                                            <div class="panel-body">
                                                <center><img src="images/default.png" alt="Cinque Terre" width="70%" ></center><br>                                           
                                                ชื่อ - นามสกุล : กฤษณา แนววิเศษ <br>
                                                ตำแหน่ง : ครู วิทยฐานะชำนาญการพิเศษ <br>
                                                สาขา : เทคโนโลยีสารสนเทศ <br>
                                                <button type="button" class="btn btn-sm btn-warning"><i class="fa fa-edit"></i></button>                                            
                                                <button type="button" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></button>
                                            </div>
                                            </div>
                                           </div>     

                                           <div class="col-md-4">
                                           <div class="panel panel-default">
                                            <div class="panel-body">
                                                <center><img src="images/default.png" alt="Cinque Terre" width="70%" ></center><br>                                           
                                                ชื่อ - นามสกุล : กฤษณา แนววิเศษ <br>
                                                ตำแหน่ง : ครู วิทยฐานะชำนาญการพิเศษ <br>
                                                สาขา : เทคโนโลยีสารสนเทศ <br>
                                                <button type="button" class="btn btn-sm btn-warning"><i class="fa fa-edit"></i></button>                                            
                                                <button type="button" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></button>
                                            </div>
                                            </div>
                                           </div>                                          
                                        </div> -->
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
        <!-- /.main-wrapper -->

        <!-- ========== COMMON JS FILES ========== -->
        <script src="js/jquery/jquery-2.2.4.min.js"></script>
        <script src="js/bootstrap/bootstrap.min.js"></script>
        <script src="js/pace/pace.min.js"></script>
        <script src="js/lobipanel/lobipanel.min.js"></script>
        <script src="js/iscroll/iscroll.js"></script>

        <!-- ========== PAGE JS FILES ========== -->
        <script src="js/prism/prism.js"></script>
        <script src="js/DataTables/datatables.min.js"></script>

        <!-- ========== THEME JS ========== -->
        <script src="js/main.js"></script>
        <script>
            $(function($) {
                $('#example').DataTable({
                    "aLengthMenu": [[10, 25, 50, 100], [10, 25, 50, 100]],
                    "iDisplayLength": 10
                });

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


