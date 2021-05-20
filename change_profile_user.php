<?php 
session_start();
include "includes/config.inc.php";
$user_id = $_SESSION['user_id'];
$sql = "SELECT * FROM general_user WHERE user_id = '$user_id'";
$qu = $conn->query($sql);
$row = $qu->fetch_array();
$title =$row['title'];
$user_name =$row['user_name'];
$user_lastname = $row['user_lastname'];
$user_position = $row['user_position'];
$technical_position = $row['technical_position'];
$position_level = $row['position_level'];
$academic_position = $row['academic_position'];
$user_pic =$row['user_pic'];
$user_tel = $row['user_tel'];

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
        <title>User change password</title>
        <link rel="stylesheet" href="css/bootstrap.css" media="screen" >
        <link rel="stylesheet" href="css/font-awesome.min.css" media="screen" >
        <link rel="stylesheet" href="css/animate-css/animate.min.css" media="screen" >
        <link rel="stylesheet" href="css/lobipanel/lobipanel.min.css" media="screen" >
        <link rel="stylesheet" href="css/prism/prism.css" media="screen" > <!-- USED FOR DEMO HELP - YOU CAN REMOVE IT -->
        <link rel="stylesheet" href="css/main.css" media="screen" >
        <script src="js/modernizr/modernizr.min.js"></script>
        <script src="includes/sweetalert2.all.min.js"></script>
        <script type="text/javascript">
</script>
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
            <?php include('includes/topbar-user.php');?>   
            <div class="content-wrapper">
                <div class="content-container">
                <?php include('includes/leftbar-user.php');?>                   
 <!-- /.left-sidebar -->

                    <div class="main-page">
                        <div class="container-fluid">
                            <div class="row page-title-div">
                                <div class="col-md-6">
                                    <h2 class="title">User Change Profile</h2>
                                </div>
                                
                            </div>
                            <!-- /.row -->
                            <div class="row breadcrumb-div">
                                <div class="col-md-6">
                                    <ul class="breadcrumb">
            							<li><a href="dashboard.php"><i class="fa fa-home"></i> Home</a></li>
            						
            							<li class="active">User change profile</li>
            						</ul>
                                </div>
                               
                            </div>
                            <!-- /.row -->
                        </div>
                        <!-- /.container-fluid -->

                        <section class="section">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-md-8 col-md-offset-2">
                                        <div class="panel">
                                            <div class="panel-heading">
                                                <div class="panel-title">
                                                    <h5>User Change Profile</h5>
                                                </div>
                                            </div>          
    
                                            
                                            <div class="panel-body">
                                                
                                                <form  name="chngpwd" method="post" enctype="multipart/form-data">
                                                <div class="text-center">
                                                    <label for="edit-profile" style="display: inline;">
                                                        <img style="width: 20%" class="rounded-circle" src="<?php echo $user_pic; ?>">
                                                    </label>
                                                </div>
                                                <input type="file" name="edit-pic" id="edit-profile" style="display: none;">
                                                    <label for="success1" class="control-label text-success">ชื่อ-สกุล : </label>
                                                    <div class="form-group has-success col-xs-2" style="padding: 0px">
                                                		<select class="form-control" name="new_title" id="success1">
                                                            <option selected style="display: none;"><?php echo $title; ?></option>
                                                            <option>นาย</option>
                                                            <option>นาง</option>
                                                            <option>นางสาว</option>
                                                        </select>
                                                	</div>
                                                
                                                
                                                    <div class="form-group has-success col-xs-5" style="padding: 0px 0.5rem">
                                                        <!-- <label for="success2" class="control-label">ชื่อ : </label> -->
                                                		<div class="" style="display: inline;">
                                                            <input type="text" name="new_user_name" class="form-control" required="required" id="success2" value="<?php echo $user_name ?>"  >
                                                		</div>
                                                	</div>
                                                    <div class="form-group has-success col-xs-5" style="padding: 0px">
                                                        <!-- <label for="success3" class="control-label">สกุล : </label> -->
                                                        <div class="" style="display: inline;">
                                                            <input type="text" name="new_user_lastname" required="required" class="form-control" id="success3"  value="<?php echo $user_lastname ?>" >
                                                        </div>
                                                    </div>
                                                
                                                    <div class="form-group has-success">
                                                        <label for="success4" class="control-label">ตำแหน่ง : </label>
                                                        <div class="">
                                                            <input type="text" name="new_user_position" required="required" class="form-control" id="success4"  value="<?php echo $user_position ?>" >
                                                        </div>
                                                    </div>

                                                    <div class="form-group has-success">
                                                        <label for="success5" class="control-label">ตำแหน่งทางวิชาการ : </label>
                                                        <div class="">
                                                            <input type="text" name="new_technical_position" required="required" class="form-control" id="success5"  value="<?php echo $technical_position ?>" >
                                                        </div>
                                                    </div>

                                                    <div class="form-group has-success">
                                                        <label for="success6" class="control-label">ระดับ : </label>
                                                        <div class="">
                                                            <input type="text" name="new_position_level" required="required" class="form-control" id="success6"  value="<?php echo $position_level ?>" >
                                                        </div>
                                                    </div>

                                                    <div class="form-group has-success">
                                                        <label for="success7" class="control-label">ตำแหน่งหน้าที่พิเศษ : </label>
                                                        <div class="">
                                                            <input type="text" name="new_academic_position" class="form-control" id="success7"  value="<?php echo $academic_position ?>" >
                                                        </div>
                                                    </div>

                                                    <div class="form-group has-success">
                                                        <label for="success8" class="control-label">เบอร์โทรศัพท์ : </label>
                                                        <div class="">
                                                            <input type="text" name="new_user_tel" required="required" class="form-control" id="success8"  value="<?php echo $user_tel ?>" >
                                                        </div>
                                                    </div>

                                                    
                                                   
                                                    <div class="form-group has-success">

                                                        <div class="">
                                                           <button type="submit" name="submit" class="btn btn-success btn-labeled">Change<span class="btn-label btn-label-right"><i class="fa fa-check"></i></span></button>
                                                    </div>
                                                    <?php include 'edit_profile.php'; ?>
                                                </form>

                                              
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.col-md-8 col-md-offset-2 -->
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
        <script src="js/jquery-ui/jquery-ui.min.js"></script>
        <script src="js/bootstrap/bootstrap.min.js"></script>
        <script src="js/pace/pace.min.js"></script>
        <script src="js/lobipanel/lobipanel.min.js"></script>
        <script src="js/iscroll/iscroll.js"></script>

        <!-- ========== PAGE JS FILES ========== -->
        <script src="js/prism/prism.js"></script>

        <!-- ========== THEME JS ========== -->
        <script src="js/main.js"></script>



        <!-- ========== ADD custom.js FILE BELOW WITH YOUR CHANGES ========== -->
    </body>
</html>

