<?php
session_start();
//error_reporting(0);
include('includes/config.inc.php');
// if(strlen($_SESSION['alogin'])=="")
//     {   
//     header("Location: index.php"); 
//     }
//     else{
// if(isset($_POST['submit']))
// {
// $studentname=$_POST['fullanme'];
// $roolid=$_POST['rollid']; 
// $studentemail=$_POST['emailid']; 
// $gender=$_POST['gender']; 
// $classid=$_POST['class']; 
// $dob=$_POST['dob']; 
// $status=1;
// $sql="INSERT INTO  tblstudents(StudentName,RollId,StudentEmail,Gender,ClassId,DOB,Status) VALUES(:studentname,:roolid,:studentemail,:gender,:classid,:dob,:status)";
// $query = $dbh->prepare($sql);
// $query->bindParam(':studentname',$studentname,PDO::PARAM_STR);
// $query->bindParam(':roolid',$roolid,PDO::PARAM_STR);
// $query->bindParam(':studentemail',$studentemail,PDO::PARAM_STR);
// $query->bindParam(':gender',$gender,PDO::PARAM_STR);
// $query->bindParam(':classid',$classid,PDO::PARAM_STR);
// $query->bindParam(':dob',$dob,PDO::PARAM_STR);
// $query->bindParam(':status',$status,PDO::PARAM_STR);
// $query->execute();
// $lastInsertId = $dbh->lastInsertId();
// if($lastInsertId)
// {
// $msg="Student info added successfully";
// }
// else 
// {
// $error="Something went wrong. Please try again";
// }

//}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
        <title>ACTIVITY CTC System | Add activity</title>
        <link rel="stylesheet" href="css/bootstrap.min.css" media="screen" >
        <link rel="stylesheet" href="css/font-awesome.min.css" media="screen" >
        <link rel="stylesheet" href="css/animate-css/animate.min.css" media="screen" >
        <link rel="stylesheet" href="css/lobipanel/lobipanel.min.css" media="screen" >
        <link rel="stylesheet" href="css/prism/prism.css" media="screen" >
        <link rel="stylesheet" href="css/select2/select2.min.css" >
        <link rel="stylesheet" href="css/mytab.css" >
        <link rel="stylesheet" href="css/main.css" media="screen" >
        <script src="js/modernizr/modernizr.min.js"></script>
       
    </head>
    <body class="top-navbar-fixed">
        <div class="main-wrapper">

            <!-- ========== TOP NAVBAR ========== -->
            <?php include('includes/topbar-user.php');?>
            <!-- ========== WRAPPER FOR BOTH SIDEBARS & MAIN CONTENT ========== -->
            <div class="content-wrapper">
                <div class="content-container">

                    <!-- ========== LEFT SIDEBAR ========== -->
                    <?php include('includes/leftbar-user.php');?>
                    <!-- /.left-sidebar -->

                    <div class="main-page">

                     <div class="container-fluid">
                            <div class="row page-title-div">
                                <div class="col-md-6">
                                    <h2 class="title">Save Activity Homeroom</h2>
                                
                                </div>
                                
                                <!-- /.col-md-6 text-right -->
                            </div>
                            <!-- /.row -->
                            <div class="row breadcrumb-div">
                                <div class="col-md-6">
                                    <ul class="breadcrumb">
                                        <li><a href="dashboard.php"><i class="fa fa-home"></i> Home</a></li>
                                        <li>กิจกรรมโฮมรูม</li>
            							<li class="active">บันทึกกิจกรรมโฮมรูม</li>
                                    </ul>
                                </div>
                             
                            </div>
                            <!-- /.row -->
                        </div>

                        <section class="section">
                        <div class="container-fluid">
                           
                        <div class="row">
                                    <div class="col-md-12">
                                        <div class="panel">
                                            <div class="panel-heading">
                                                <div class="panel-title">
                                                <h3>แบบบันทึกรายงาน การปฏิบัติงานของครูที่ปรึกษา</h3>
                                                <p>สัปดาห์ที่ ............  วันที่ ........... เดือน ................... พ.ศ. .............</p>
                                                    <h5>** กรุณาบันทึกข้อมูลให้ครบ ทั้งหมด 3 Step **</h5>
                                                </div>
                                            </div>

                                        <div class="panel-body">                   
                                        <div class="row">
		<section>
        <div class="wizard">
            <div class="wizard-inner">
                <div class="connecting-line"></div>
                <ul class="nav nav-tabs" role="tablist">
                <?php  
                  $status=array();
                    // $step1 = "disabled";
                if(!empty($_GET['step'])){
                    $step = $_GET['step'];
                    if($step == 1){
                        $step1 = "active";
                        $status=array(1,0,0);
                       
                    }else{
                        $step1 = "disabled";
                        
                    }
                    if($step == 2){
                        $step2 = "active"; 
                        var_dump($status);                    
                        if($status[0] == 1){
                        $status=array(1,1,0);
                        echo "<br>step=".$status[1];
                        }
                    }else{
                        $step2 = "disabled";
                    }
                    if($step == 3){
                        $step3 = "active";
                        $status=array(1,1,1);
                    }else{
                        $step3 = "disabled";
                    }
                    if($status[0] < 1){
                       // var_dump($status);
                       echo "<script>alert('over step')</script>" ;
                    }
                }
                   
                    ?>
                    <li role="presentation" class="<?php echo $step1; ?>">
                        <a href="#step1" data-toggle="tab" aria-controls="step1" role="tab" title="Step 1">
                            <span class="round-tab">
                                <!-- <i class="glyphicon glyphicon-folder-open"></i> -->
                                <i class="glyphicon glyphicon-pencil"></i>
                            </span>
                        </a>
                    </li>
                   
                    <li role="presentation" class="<?php echo $step2; ?>">
                        <a href="#step2" data-toggle="tab" aria-controls="step2" role="tab" title="Step 2">
                            <span class="round-tab">
                            <i class="glyphicon glyphicon-picture"></i>
                            </span>
                        </a>
                    </li>
                    <li role="presentation" class="<?php echo $step3; ?>">
                        <a href="#step3" data-toggle="tab" aria-controls="step3" role="tab" title="<?php echo $step3; ?>">
                            <span class="round-tab">
                                <i class="glyphicon glyphicon-book"></i>                             
                            </span>
                        </a>
                    </li>
            
                    <li role="presentation" class="disabled">
                        <a href="#complete" data-toggle="tab" aria-controls="complete" role="tab" title="Complete">
                            <span class="round-tab">
                                <i class="glyphicon glyphicon-ok"></i>
                            </span>
                        </a>
                    </li>
                </ul>
            </div>

            <form role="form"  method="post">
                <div class="tab-content">
                    <div class="tab-pane active" role="tabpanel" id="step1">
                        <h3>Step 1</h3>
                        <p>เรื่องที่ให้คำแนะนำ นักเรียน นักศึกษา</p>                      
                            <div class="form-group">
                              <label for=""></label>
                              <textarea class="form-control" name="" id="" rows="3"></textarea>
                            </div>
                            <b>เรื่องแบบประเมินตนเอง สำหรับนักเรียน นักศึกษา โดยผ่านการสแกน QR-Code เพื่อเป็นการเฝ้าระวังและป้องกันการแพร่เชื่อระบาดของโรคโควิด-19 
                            <br>(2 สัปดาห์ ทำ 1 ครั้ง)</b><br>
                            <p>จำนวนนักเรียน นักศึกษาทั้งหมด ...... คน ทำแบบประเมิน ...... คน ไม่ทำแบบประเมิน ..... คน</p>
                        <ul class="list-inline pull-right">
                            <li><button type="button" class="btn btn-primary next-step">Save and continue</button></li>
                        </ul>
                    </div>
                    <div class="tab-pane" role="tabpanel" id="step2">
                        <h3>Step 2</h3>     
                        <p>รูปภาพ ขณะให้คำแนะนำ นักเรียน นักศึกษา</p>  
                        <div class="input-group">
                          <input class="btn btn-info btn-sm" type="file" name="file_pic[]" multiple="multiple">                     
                        </div> 
                        <ul class="list-inline pull-right">
                            <li><button type="button" class="btn btn-default prev-step">Previous</button></li>
                            <li><button type="button" class="btn btn-primary next-step">Save and continue</button></li>
                        </ul>
                    </div>
                    <div class="tab-pane" role="tabpanel" id="step3">
                        <h3>Step 3</h3>
                        <p>แจ้งรายชื่อนักเรียน นักศึกษา ที่มีปัญหาให้ผู้ปกครงได้รับทราบ (เรื่องที่แจ้ง เช่น กิจกรรมเข้าแถว/กิจกรรมโฮมรูม/การไม่เข้าร่วมกิจกรร/การขาดเรียน/ความประพฤติ
                        หรือ เรื่องอื่น ๆ ที่ต้องการแจ้งให้ผู้ปกครองได้รับทราบ )</p>
                        <div class="form-group">
                              <label for=""></label>
                              <textarea class="form-control" name="" id="" rows="3"></textarea>
                            </div>
                        <ul class="list-inline pull-right">
                            <li><button type="button" class="btn btn-default prev-step">Previous</button></li>
                            <li><button type="button" class="btn btn-default next-step">Skip</button></li>
                            <li><button type="button" class="btn btn-primary btn-info-full next-step">Save and continue</button></li>
                        </ul>
                    </div>
                    <div class="tab-pane" role="tabpanel" id="complete">
                        <h3>Complete</h3>
                        <p>คุณได้บันทึกรายงาน การปฏิบัติงานครูที่ปรึกษา สัปดาห์ที่ ..... เรียบร้อยแล้ว</p>
                        <button type="button" class="btn btn-primary btn-info-full next-step">Save and Send</button>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </form>
        </div>
    </section>
   </div>  

                                           
                                        </div>
                                        </div>
                                        <!-- /.panel -->
                                    </div>
                                    <!-- /.col-md-12 -->
                                </div>
                    </div>
                </div>
                <!-- /.content-container -->
                </section>
                        <!-- /.section -->

            </div>
            <!-- /.content-wrapper -->
        </div>
        <!-- /.main-wrapper -->
        <script src="js/jquery/jquery-2.2.4.min.js"></script>
        <script src="js/bootstrap/bootstrap.min.js"></script>
        <script src="js/pace/pace.min.js"></script>
        <script src="js/lobipanel/lobipanel.min.js"></script>
        <script src="js/iscroll/iscroll.js"></script>
        <script src="js/prism/prism.js"></script>
        <script src="js/select2/select2.min.js"></script>
        <script src="js/main.js"></script>
        
        <script>
            $(document).ready(function () {
                //Initialize tooltips
                $('.nav-tabs > li a[title]').tooltip();
                
                //Wizard
                $('a[data-toggle="tab"]').on('show.bs.tab', function (e) {

                    var $target = $(e.target);
                
                    if ($target.parent().hasClass('disabled')) {
                        return false;
                    }
                });

                $(".next-step").click(function (e) {

                    var $active = $('.wizard .nav-tabs li.active');
                    $active.next().removeClass('disabled');
                    nextTab($active);

                });
                $(".prev-step").click(function (e) {

                    var $active = $('.wizard .nav-tabs li.active');
                    prevTab($active);

                });
            });

            function nextTab(elem) {
                $(elem).next().find('a[data-toggle="tab"]').click();
            }
            function prevTab(elem) {
                $(elem).prev().find('a[data-toggle="tab"]').click();
            }
        </script>
        <script>
            $(function($) {
                $(".js-states").select2();
                $(".js-states-limit").select2({
                    maximumSelectionLength: 2
                });
                $(".js-states-hide").select2({
                    minimumResultsForSearch: Infinity
                });
            });
        </script>
   
    </body>
</html>
<?PHP // } ?>
