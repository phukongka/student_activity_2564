<?php
if (!defined('BASE_PATH'))
    exit('No direct script access allowed');
$title = "เพิ่มข้อมูลการฝึกงาน";
$active = 'training';
$school_id = $_SESSION['user']['school_id'];
$subactive = 'insert';
?>
<?php require_once 'template/header.php'; ?>
<div class="wrapper">
    <?php require_once 'template/main-header.php'; ?>
    <?php require_once 'template/main-sidebar.php'; ?>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                กรอกข้อมูลการฝึกอาชีพ
                <small>แบบฟอร์ม</small>
            </h1>
            <ol class="breadcrumb">
                <li>
                    <a href="#">
                        <i class="fa fa-dashboard"></i> หน้าหลัก</a>
                </li>
                <li>
                    <a href="#">การฝึกอาชีพ</a>
                </li>
                <li class="active">เพิ่มข้อมูล</li>
                <li class="active"><a data-toggle="modal" href="#myModal">
               <img src="./images/youtube.png" width="20px" alt="" > VDO การใช้งาน</a></li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <!-- left column -->
                <!--/.col (left) -->
                <!-- right column -->
                <div class="col-md-12">
                    <?php show_message() ?>
                    <!-- Horizontal Form -->
                    <div class="box box-info">
                        <div class="box-header with-border">
                            <h3 class="box-title">เพิ่มข้อมูลการฝึกอาชีพ</h3>
                            <span class="pull-right">
                                <a href="<?php echo site_url('app/trainer/insert') ?>" class="btn  btn-primary ">+ เพิ่มข้อมูลครูฝึก</a>
                                <a href="<?php echo site_url('app/business/list') ?>" class="btn  btn-primary ">+ เพิ่มข้อมูลสถานประกอบการ</a>
                            </span>
                        </div>
                        <!-- /.box-header -->
                        <!-- form start -->
                        <div class="box-body">
                            <form method="post" class="form-horizontal" id="training-form" action="">
                                <input type="hidden" class="form-control" id="school_id" name="school_id" value="<?php echo $_SESSION['user']['school_id'] ?>">
                                <input type="hidden" class="form-control" id="id" name="id" value="">

                                <div class="form-group">
                                    <label for="business_id" class="col-md-3 control-label">สถานประกอบการ</label>
                                    <div class="col-md-5">
                                        <select class="form-control" id="business_id" name="business_id" data-placeholder="เลือกสถานประกอบการ" style="width: 100%;"></select>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="trainer_list" class="col-md-3 control-label">ครูฝึก</label>
                                    <div class="col-md-5">
                                        <select class="select2 form-control" id="trainer_list" name="trainer_list[]" multiple="multiple" required>
                                            <!--<option id="trainer_list"> -- กรุณาเลือกครูฝึก -- </option>-->
                                        </select>
                                    </div>

                                    <!--<h5 class="text-info">*ถ้าไม่พบครูฝึกกรุณาไปเพิ่มครูฝึกก่อนครับ</h5>-->
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3" for="edu_level">เลือกฝึกงาน/ฝึกอาชีพ</label>
                                    <div>
                                        <div class="col-md-5">
                                            <?php
                                            $sql = "SELECT training_type,training_desc FROM training_type";
                                            // $training_type = array('2'=>'ฝึกอาชีพ','1'=>'ฝึกงาน');
                                            echo gen_bootrap_radio('training_type', $sql, '2');
                                            ?>

                                        </div>
                                    </div>
                                </div>


                                <div class="form-group">
                                    <label for="student_list" class="col-md-3 control-label">เลือกนักศึกษา</label>
                                    <div class="col-md-5">
                                        <select class="select2 form-control" id="student_list" name="student_list[]" multiple="multiple" required>
                                            <!--<option id="student_list"> -- กรุณาเลือกครูฝึก -- </option>-->
                                        </select>
                                    </div>
                                    <p class="text-danger" id="student_id_error">*ยังไม่ได้เลือกนักศึกษาครับ</p>
                                    <!--<h5 class="text-info">*ถ้าไม่พบครูฝึกกรุณาไปเพิ่มครูฝึกก่อนครับ</h5>-->
                                </div>

                                <!-- <div class="form-group">
                                    <label class="control-label col-md-3" for="std_name">ชื่อนักศึกษา</label>
                                    <div class="col-md-3 ">
                                        <input type="text" class="form-control" id="std_name" placeholder="ชื่อนักศึกษา" name="std_name" value="<?php set_var($std_name) ?>">
                                    </div>
                                    <p class="text-danger" id="student_id_error">*ยังไม่ได้เลือกนักศึกษาครับ</p>
                                </div> -->
                                <!-- Date -->
                                <div class="form-group">
                                    <label class="control-label col-md-3" for="contract_date">วันที่ทำสัญญา</label>
                                    <div class="col-md-3">
                                        <div class="input-group date">
                                            <input type="text" class="form-control pull-right" id="contract_date" name="contract_date" value="" autocomplete="off"/>
                                            <div class="input-group-addon">
                                                <i class="fa fa-calendar"></i>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- /.input group -->
                                </div>
                                <!-- /.form group -->

                                <div class="form-group">
                                    <label class="control-label col-md-3" for="start_date">วันเริ่มต้นการฝึก</label>
                                    <div class="col-md-3">
                                        <div class="input-group date">
                                            <input type="text" class="form-control pull-right" id="start_date" name="start_date" value="" autocomplete="off"/>
                                            <div class="input-group-addon">
                                                <i class="fa fa-calendar"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.input group -->
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-md-3" for="end_date">วันที่สิ้นสุดการฝึก</label>
                                    <div class="col-md-3">
                                        <div class="input-group date">
                                            <input type="text" class="form-control pull-right" id="end_date" name="end_date" value="" autocomplete="off"/>
                                            <div class="input-group-addon">
                                                <i class="fa fa-calendar"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.input group -->
                                </div>

                                <div class="box-footer">
                                    <div class="col-md-offset-3">
                                        <button type="submit" class="btn btn-primary" id="btn_submit" name="btn_submit">บันทึกข้อมูล</button>
                                        <button type="reset" class="btn btn-warning" id="btn_reset" name="btn_reset">ยกเลิกข้อมูล</button>
                                    </div>
                                </div>

                            </form>
                            <div id="form-alert"></div>

                        </div>
                        <!-- /.box-body -->
                    </div>
                </div>
                <!--/.col (right) -->
            </div>
            <!-- /.row -->
        </section>
        <!-- Modal -->
         <div class="modal fade" id="myModal" role="dialog">
            <div class="modal-dialog">
               <!-- Modal content-->
               <div class="modal-content">
                  <div class="modal-body">
                     <iframe width="560" height="315" src="https://www.youtube.com/embed/i0HzO3eNcPs" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                  </div>
               </div>
            </div>
         </div>
         <!-- Close Modal -->
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <?php require_once 'template/main-footer.php'; ?>
</div>
<!--.wrapper-->
<?php require_once 'template/footer.php'; ?>
<script>
    $(function() {
        $('#business_id').select2({
            ajax: {
                url: "ajax/api/get_business.php",
                dataType: 'json',
                delay: 250,
                data: function(params) {
                    return {
                        q: params.term, // search term
                        page: params.page
                    };
                },
                processResults: function(data) {
                    return {
                        results: $.map(data, function(obj) {
                            return {
                                id: obj.id,
                                text: obj.text
                            };
                        })
                    };
                }
            },
            minimumInputLength: 2,
            language: {
                inputTooShort: function() {
                    return 'ใส่ตัวอักษรอย่างน้อย 2 ตัวอักษร';
                }
            },
        });
        //Date picker       
        // var plan_list_table = $('#plan_list').DataTable();
        $('#start_date').datepicker({
            format: 'yyyy-mm-dd',
            todayBtn: true,
            language: 'th', //เปลี่ยน label ต่างของ ปฏิทิน ให้เป็น ภาษาไทย   (ต้องใช้ไฟล์ bootstrap-datepicker.th.min.js นี้ด้วย)
            thaiyear: true, //Set เป็นปี พ.ศ.
            autoclose: true
        }).datepicker("setDate", "0"); //กำหนดเป็นวันปัจุบัน

        $('#end_date').datepicker({
            format: 'yyyy-mm-dd',
            todayBtn: true,
            language: 'th', //เปลี่ยน label ต่างของ ปฏิทิน ให้เป็น ภาษาไทย   (ต้องใช้ไฟล์ bootstrap-datepicker.th.min.js นี้ด้วย)
            thaiyear: true, //Set เป็นปี พ.ศ.
            autoclose: true
        }).datepicker("setDate", "0"); //กำหนดเป็นวันปัจุบัน    

        $('#contract_date').datepicker({
            format: 'yyyy-mm-dd',
            todayBtn: true,
            language: 'th', //เปลี่ยน label ต่างของ ปฏิทิน ให้เป็น ภาษาไทย   (ต้องใช้ไฟล์ bootstrap-datepicker.th.min.js นี้ด้วย)
            thaiyear: true, //Set เป็นปี พ.ศ.
            autoclose: true
        }).datepicker("setDate", "0");


        $("#std_name").autocomplete({
            source: "<?php echo SITE_URL ?>ajax/student/get_student.php",
            minLength: 2,
            delay: 250,
            select: function(event, ui) {
                $("#std_name").val(ui.item.label); // display the selected text
                $("#student_id").val(ui.item.value); // save selected id to hidden input
                return false;
            }
        });
        $("#btn_reset").bind("click", function () {
            $('#business_id').val(null).trigger('change');
            $('#student_list').val(null).trigger('change');
        });
        $('#student_list').select2({
            ajax: {
                url: "ajax/training/get_student.php",
                dataType: 'json',
                delay: 250,
                data: function(params) {
                    return {
                        q: params.term, // search term
                        t: $("input[name='training_type']:checked").val(),
                        page: params.page
                    };
                },
                processResults: function(data) {
                    return {
                        results: $.map(data, function(obj) {
                            return {
                                id: obj.id,
                                text: obj.text
                            };
                        })
                    };
                }
            },
            minimumInputLength: 2,
            language: {
                inputTooShort: function() {
                    return 'ใส่ตัวอักษรอย่างน้อย 2 ตัวอักษร';
                }
            },
        });



        // Validate data
        $("#student_id_error").hide();
        $("#business_id_error").hide();
        $("#trainer_id_error").hide();
        $("#date_error").hide();

        // $("#btn_submit").click(function(event) {
        $("#training-form").submit(function(event) {
            event.preventDefault();
            // alert('test')
            if ($('#start_date').val() >= $('#end_date').val()) {
                alert('กรุณากำหนดวันเริ่มต้นและสิ้นสุดการฝึกให้ถูกต้อง')
                return
            }

            let table = $('#training_list').DataTable();
            // Stop form from submitting normally
            let url = '';
            if ($('#id').val() == '') {
                url = "ajax/training/post_training.php"
            } else {
                url = "ajax/training/put_training.php"
            }
            $.post(url, $(this).serialize())
                .done(function(result) {
                    if (result.status)
                        $("#form-alert").removeClass().addClass("alert alert-success alert-dismissible").show().html(result.message).fadeOut(3000)
                    else
                        $("#form-alert").removeClass().addClass("alert alert-danger alert-dismissible").show().html(result.message).fadeOut(3000)
                });
            table.ajax.reload()
        });
    });
    // $(".select2-mulitple").select2();
    $(".select2").select2();

    //ดึงข้อมูล province จากไฟล์ get_data.php
    $("#business_id").change(function() {
        // $("#trainer_list").prop("disabled",false);
        //        alert('test');
        $.ajax({
            url: "<?php echo SITE_URL ?>ajax/get_trainers.php",
            dataType: "json", //กำหนดให้มีรูปแบบเป็น Json
            data: {
                q: $("#business_id").val(),
                s: $('#school_id').val()
            },
            success: function(data) {
                //วนลูปแสดงข้อมูล ที่ได้จาก ตัวแปร data
                $("#trainer_list").empty();
                $("#trainer_list").append("<option value=''>เลือกครูฝึก</option>");
                $.each(data, function(index, value) {
                    //แทรก Elements ใน id province  ด้วยคำสั่ง append
                    $("#trainer_list").append("<option value='" + value.id + "' > " +
                        value.name + "</option>");
                });
            }
        });
    });
</script>
<?php

function do_validate($data)
{
    $valid = true;
    $data = &$_POST;
    //    if (!preg_match('/[a-zA-Z0-9_]{1,}/', $data['trainer_id'])) {
    //        set_err('กรุณากรอกรหัสครูฝึก');
    //        $valid = false;
    //    }
    // if (check_pid($data['student_id']) && !preg_match('/[0-9]{13}/', $data['student_id'])) {
    //     set_err('รหัสนักศึกษาไม่ถูกต้อง');
    //     $valid = false;
    // }
    if (empty($data['business_id'])) {
        set_err('กรุณากรอกรหัสสถานประกอบการ');
        $valid = false;
    }

    //    if (empty($data['trainer_id'])) {
    //        set_err('กรุณากรอกรหัสครูฝึก');
    //        $valid = false;
    //    }
    if (empty($data['contract_date'])) {
        set_err('กรุณาเลือกวันทำสัญญา');
        $valid = false;
    }
    if (empty($data['start_date'])) {
        set_err('กรุณาเลือกวันเริ่มฝึกงาน');
        $valid = false;
    }
    if (empty($data['end_date'])) {
        set_err('กรุณาเลือกวันสุดท้ายฝึกงาน');
        $valid = false;
    }
    return $valid;
}
