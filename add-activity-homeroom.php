<?php
session_start();
error_reporting(0);
include('includes/config.inc.php');
$week = $_SESSION["week_number"] ; 


?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
        <title>ACTIVITY CTC System | Add activity</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/icheck-bootstrap@3.0.1/icheck-bootstrap.min.css" />
        <link rel="stylesheet" type="text/css" href="js/DataTables/datatables.min.css"/>
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
                                    <h2 class="title">Save Activity Homeroom </h2>                               
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
                                            <!-- <div class="panel-heading">
                                                <div class="panel-title">
                                                <h3>แบบบันทึกรายงาน การปฏิบัติงานของครูที่ปรึกษา</h3>
                                                <p>สัปดาห์ที่ ............  วันที่ ........... เดือน ................... พ.ศ. .............</p>
                                                    <h5>** กรุณาบันทึกข้อมูลให้ครบ ทั้งหมด 3 Step **</h5>
                                                </div>
                                            </div> -->

                                        <div class="panel-body">                   
                                        <div class="row">
		<section>
        <div class="wizard">
            <div class="wizard-inner">
                <div class="connecting-line"></div>
                <ul class="nav nav-tabs" role="tablist">

                    <li role="presentation" class="active">
                        <a href="#step1" data-toggle="tab" aria-controls="step1" role="tab" title="Step1">
                            <span class="round-tab">
                                <!-- <i class="glyphicon glyphicon-folder-open"></i> -->
                                <i class="glyphicon glyphicon-pencil"></i>
                            </span>
                        </a>
                    </li>

                    <li role="presentation" class="disabled">
                        <a href="#step2" data-toggle="tab" aria-controls="step2" role="tab" title="Step 2">
                            <span class="round-tab">
                            <i class="glyphicon glyphicon-picture"></i>
                            </span>
                        </a>
                    </li>
                    <li role="presentation" class="disabled">
                        <a href="#step3" data-toggle="tab" aria-controls="step3" role="tab" title="Step 3">
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

            <!-- <form role="form"  method="post"> -->
                <div class="tab-content">
                    <div class="tab-pane active" role="tabpanel" id="step1">
                        <h3>Step 1</h3>
                        <p>เช็คชื่อเข้าร่วม กิจกรรมโฮมรูม สัปดาห์ที่ <?php echo $week; ?>. สาขาวิชา...เทคโนโลยีสารสนเทศ อาจารย์ที่ปรึกษา <?php echo $user_name;?></p>                      
                            <!-- <div class="form-group">
                              <label for=""></label>
                              <textarea class="form-control" name="" id="" rows="3"></textarea>
                            </div>
                            <b>เรื่องแบบประเมินตนเอง สำหรับนักเรียน นักศึกษา โดยผ่านการสแกน QR-Code เพื่อเป็นการเฝ้าระวังและป้องกันการแพร่เชื่อระบาดของโรคโควิด-19 
                            <br>(2 สัปดาห์ ทำ 1 ครั้ง)</b><br>
                            <p>จำนวนนักเรียน นักศึกษาทั้งหมด ...... คน ทำแบบประเมิน ...... คน ไม่ทำแบบประเมิน ..... คน</p> -->
                            <form id="step1_form" method="post">
                                <?php 
                                include "add-students-homeroom.php";
                                echo "num_row=".$num_row_week."==row_all".$row_all;
                                echo "<br>user_ID=".$_SESSION['user_id'];
                                echo "<br>step2=".$_SESSION['step22'];

                                ?>                          
                                <ul class="list-inline pull-right">
                                    <li><button type="button" class="btn btn-primary next-step">Save and continue</button></li>
                                </ul>
                            </form>
                    </div>
                    <div class="tab-pane" role="tabpanel" id="step2">
                        <h3>Step 2 <?php echo "<br>step24=".$_SESSION['step22'];  ?></h3>     
                        
                        <!-- <p>รูปภาพ ขณะให้คำแนะนำ นักเรียน นักศึกษา</p>  
                        <div class="input-group">
                          <input class="btn btn-info btn-sm" type="file" name="file_pic[]" multiple="multiple">                     
                        </div>  -->
                        <form id="step2_form" method="post" action="obed-process.php" method="POST" onsubmit="JavaScript:return fncSubmit" enctype="multipart/form-data">
                            <?php include "add-obedience-st2.php"; ?>
                           

                            <ul class="list-inline pull-right">
                                <li><button type="button" class="btn btn-default prev-step">Previous</button></li>
                                <li><button type="button" class="btn btn-primary next-step">Save and continue</button></li>
                            </ul>
                        </form>

                    </div>
                    <div class="tab-pane" role="tabpanel" id="step3">
                        <h3>Step 3</h3>
                        <p>แจ้งรายชื่อนักเรียน นักศึกษา ที่มีปัญหาให้ผู้ปกครงได้รับทราบ (เรื่องที่แจ้ง เช่น กิจกรรมเข้าแถว/กิจกรรมโฮมรูม/การไม่เข้าร่วมกิจกรร/การขาดเรียน/ความประพฤติ
                        หรือ เรื่องอื่น ๆ ที่ต้องการแจ้งให้ผู้ปกครองได้รับทราบ )</p>
                        <!-- <div class="form-group">
                              <label for=""></label>
                              <textarea class="form-control" name="" id="" rows="3"></textarea>
                            </div> -->
                            <form id="step3_form" method="post">
                                <?php include "add-manage-advisor-risk.php"; ?>
                            

                                <ul class="list-inline pull-right">
                                    <li><button type="button" class="btn btn-default prev-step">Previous</button></li>
                                    <li><button type="button" class="btn btn-default next-step">Skip</button></li>
                                    <li><button type="button" class="btn btn-primary btn-info-full next-step">Save and continue</button></li>
                                </ul>
                            </form>
                    </div>
                    <div class="tab-pane" role="tabpanel" id="complete">
                        <h3>Complete</h3>
                        <p>คุณได้บันทึกรายงาน การปฏิบัติงานครูที่ปรึกษา สัปดาห์ที่ ..... เรียบร้อยแล้ว</p>
                        <button type="button" class="btn btn-primary btn-info-full next-step">Save and Send</button>
                    </div>
                    <div class="clearfix"></div>
                </div>
            <!-- </form> -->
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
        <script src="js/DataTables/datatables.min.js"></script>
        <script src="js/main.js"></script>
        
        <script>
            $(function($) {
                $('#example').DataTable({
                    "aLengthMenu": [[10, 25, 50, 100, -1], [10, 25, 50, 100, "All"]],
                    "iDisplayLength": 10
                });
                $('#example2').DataTable( {
                    "scrollY":        "300px",
                    "scrollCollapse": true,
                    "paging":         false
                } );
                $('#example3').DataTable({
                    "aLengthMenu": [[10, 25, 50, 100, -1], [10, 25, 50, 100, "All"]],
                    "iDisplayLength": 10
                });
            });
        </script>
        
        <script>
            $(document).ready(function () {
                //Initialize tooltips
               // alert('ok');
                $('.nav-tabs > li a[title]').tooltip();                 
                //Wizard
                $('a[data-toggle="tab"]').on('show.bs.tab', function (e) {                        
                    var $target = $(e.target);                
                    if ($target.parent().hasClass('disabled')) {                    
                        return false;
                    }
                });

                $(".next-step").click(function (e) {
                    console.log('\ne=',e);
                    var $active = $('.wizard .nav-tabs li.active');
                    console.log('\nactive=',$active);
                    $active.next().removeClass('disabled');
                    nextTab($active);
                });
                $(".prev-step").click(function (e) {
                    var $active = $('.wizard .nav-tabs li.active');
               //     console.log($active);
                    prevTab($active);

                });
            });
            function nextTab(elem) {
                
                var ne = $(elem).next().find('a[data-toggle="tab"]').click();
                console.log('\nnext=',ne);
            }
            function prevTab(elem) {
                var re = $(elem).prev().find('a[data-toggle="tab"]').click();
                console.log('\nre=',re)
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
