<?php
// if (!defined('BASE_PATH'))
//     exit('No direct script access allowed');
$title = "เพิ่มข้อมูลการฝึกงานแบบกลุ่ม";
$active = 'training';
$school_id = $_SESSION['user']['school_id'];
$subactive = 'insert-group';
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
                กรอกข้อมูล
                <small>การฝึกอาชีพ</small>
            </h1>
            <ol class="breadcrumb">
                <li>
                    <a href="#">
                        <i class="fa fa-dashboard"></i> หน้าหลัก</a>
                </li>
                <li>
                    <a href="#">การฝึกอาชีพ</a>
                </li>
                <li class="active">จัดการข้อมูล</li>
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
                            <form method="post" class="form-horizontal" id="training-group-form" action="">
                                <input type="hidden" class="form-control" readonly="" id="school_id" placeholder="ชื่อสถานศึกษา" name="school_id" value="<?php set_var($school_id) ?>">
                                <input type="hidden" class="form-control" id="student_id" name="student_id" value="<?php set_var($student_id) ?>">

                                <div class="form-group">
                                    <label for="business_id" class="col-md-3 control-label">สถานประกอบการ</label>
                                    <div class="col-md-4">
                                        <select class="form-control" id="business_id" name="business_id" data-placeholder="เลือกสถานประกอบการ" style="width: 100%;"></select>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="trainer_list" class="col-md-3 control-label">ครูฝึก</label>
                                    <div class="col-md-4">
                                        <select class="select2 form-control" id="trainer_list" name="trainer_list[]" multiple="multiple">
                                            <!--<option id="trainer_list"> -- กรุณาเลือกครูฝึก -- </option>-->
                                        </select>
                                    </div>
                                    <p class="text-danger" id="trainer_id_error">*ยังไม่ได้เลือกครูฝึกหรือยังไม่มีครูฝึกครับ</p>
                                    <!--<h5 class="text-info">*ถ้าไม่พบครูฝึกกรุณาไปเพิ่มครูฝึกก่อนครับ</h5>-->
                                </div>

                                <div class="form-group">
                                    <label for="student_list" class="col-md-3 control-label">นักศึกษา</label>
                                    <div class="col-md-4">
                                        <select class="select2 form-control" id="student_list" name="student_list[]" multiple="multiple">
                                            <!--<option id="trainer_list"> -- กรุณาเลือกครูฝึก -- </option>-->
                                        </select>
                                    </div>
                                    <p class="text-danger" id="student_list_error">*ยังไม่ได้เลือกนักศึกษา</p>
                                    <!--<h5 class="text-info">*ถ้าไม่พบครูฝึกกรุณาไปเพิ่มครูฝึกก่อนครับ</h5>-->
                                </div>


                                <!-- <div class="form-group">
                                    <label class="control-label col-md-3" for="students_id">รายการรหัสนักศึกษา</label>
                                    <div class="col-md-5 ">
                                        <textarea class="form-control" rows="4" placeholder="รหัสนักศึกษาบรรทัดละ 1 รายการ" id="students_id" name="students_id"></textarea>
                                    </div>
                                    <p class="text-danger students_error">*ยังไม่มีรหัสนักศึกษาครับ</p>
                                </div> -->

                                <div class="form-group">
                                    <label class="control-label col-md-3" for="contract_date">วันที่ทำสัญญา</label>
                                    <div class="col-md-3">
                                        <div class="input-group date">
                                            <input type="text" class="form-control pull-right" id="contract_date" name="contract_date" value="<?php set_var($contract_date) ?>" />
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
                                            <input type="text" class="form-control pull-right" id="start_date" name="start_date" value="<?php set_var($start_date) ?>" />
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
                                            <input type="text" class="form-control pull-right" id="end_date" name="end_date" value="<?php set_var($end_date) ?>" />
                                            <div class="input-group-addon">
                                                <i class="fa fa-calendar"></i>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-offset-3">
                                        <p class="text-danger" id="date_error">*เลือกวันเดือนปีให้ครบด้วยครับ</p>
                                    </div>
                                    <!-- /.input group -->
                                </div>

                                <div class="box-footer">
                                    <div class="col-md-offset-3">
                                        <button type="button" class="btn btn-primary" id="save" name="submit">บันทึกข้อมูล</button>
                                    </div>
                                </div>

                            </form>
                        </div>
                        <!-- /.box-body -->
                    </div>
                </div>
                <!--/.col (right) -->
            </div>
            <!-- /.row -->
        </section>
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
                        // page: params.page
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
        $('#student_list').select2({
            ajax: {
                url: "ajax/training/get_dve_student.php",
                dataType: 'json',
                delay: 250,
                data: function(params) {
                    return {
                        q: params.term.trim(), // search term
                        // page: params.page
                    };
                },
                processResults: function(data) {
                    return {
                        results: $.map(data, function(obj) {
                            return {
                                id: obj.value,
                                text: obj.value + ' ' + obj.label
                            };
                        })
                    };
                }
            },
            minimumInputLength: 4,
            language: {
                inputTooShort: function() {
                    return 'ใส่ตัวอักษรอย่างน้อย 4 ตัวอักษร';
                }
            },
        });

        //Date picker        
        $('#start_date').datepicker({
            format: 'yyyy-mm-dd',
            todayBtn: true,
            language: 'th', //เปลี่ยน label ต่างของ ปฏิทิน ให้เป็น ภาษาไทย   (ต้องใช้ไฟล์ bootstrap-datepicker.th.min.js นี้ด้วย)
            thaiyear: true, //Set เป็นปี พ.ศ.
            autoclose: true
        });
        $('#contract_date').datepicker({
            format: 'yyyy-mm-dd',
            todayBtn: true,
            language: 'th', //เปลี่ยน label ต่างของ ปฏิทิน ให้เป็น ภาษาไทย   (ต้องใช้ไฟล์ bootstrap-datepicker.th.min.js นี้ด้วย)
            thaiyear: true, //Set เป็นปี พ.ศ.
            autoclose: true
        });
        $('#end_date').datepicker({
            format: 'yyyy-mm-dd',
            todayBtn: true,
            language: 'th', //เปลี่ยน label ต่างของ ปฏิทิน ให้เป็น ภาษาไทย   (ต้องใช้ไฟล์ bootstrap-datepicker.th.min.js นี้ด้วย)
            thaiyear: true, //Set เป็นปี พ.ศ.
            autoclose: true
        });
        $('#supervision_1').datepicker({
            format: "yyyy/mm/dd",
            language: "th",
            autoclose: true
        });
        $('#supervision_2').datepicker({
            format: "yyyy/mm/dd",
            language: "th",
            autoclose: true
        });
        $('#supervision_3').datepicker({
            format: "yyyy/mm/dd",
            language: "th",
            autoclose: true
        });
        // $("#trainer_list").prop("disabled",true);
        $('#save').click(function(event){
            // console.log($('#training-group-form').serialize());
            var foo = $('#student_list').val(); 
            console.log(foo);
        })
        $("#std_name").autocomplete({
            source: "<?php echo SITE_URL ?>ajax/search_student.php",
            minLength: 2,
            select: function(event, ui) {
                $("#std_name").val(ui.item.label); // display the selected text
                $("#student_id").val(ui.item.value); // save selected id to hidden input
                return false;
            }
        });



        // Validate data
        $("#student_id_error").hide();
        $("#business_id_error").hide();
        $("#trainer_id_error").hide();
        $("#date_error").hide();
        $(".students_error").hide();

        $("#training-group-form").submit(function(event) {
            var valid_students_id = false
            $('.students_id').each(function() {
                if ($.trim($(this).val())) {
                    valid_students_id = true;
                }
            });
            if (valid_students_id) {
                $(".students_error").hide();
            } else {
                $(".students_error").show();
            }

            var valid_business_id
            if ($('#business_id').val() != "") {
                valid_business_id = true;
                $("#business_id_error").hide();
            } else {
                $("#business_id_error").show();
            }
            if (valid_trainer_id == false) {
                $("#trainer_id_error").show();
            } else {
                $("#trainer_id_error").hide();
            }

            var valid_date = false;
            if ($('#start_date').val() != "" && $('#end_date').val() != "" && $('#contract_date').val() !=
                "") {
                valid_date = true;
                $("#date_error").hide();
            } else {
                $("#date_error").show();
            }
            if (valid_students_id && valid_business_id && valid_trainer_id && valid_minor_id &&
                valid_date) {
                //               alert("submit ok")
                return;
            }
            event.preventDefault();
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
            // data: {
            //     b_id: $("#business_id").val();
            //     // sc_id: $('#school_id').val();
            // }, //ส่งค่าตัวแปร show_province เพื่อดึงข้อมูล จังหวัด
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
function get_student_list($data)
{
    global $db;
    $students = explode("\r\n", $data);
    $list = implode(",", $students);
    //    $val = $group."%";
    $query = "SELECT * FROM student WHERE student_id IN ($list)";
    $result = mysqli_query($db, $query);
    //    if(mysqli_num_rows($result)>0)
    //        return ;
    $std_list = array();
    while ($row = mysqli_fetch_assoc($result)) {
        $std_list[] = $row;
    }
    return $std_list;
}


function do_validate($data)
{
    $valid = true;
    $data = &$_POST;
    //    if (!preg_match('/[a-zA-Z0-9_]{1,}/', $data['trainer_id'])) {
    //        set_err('กรุณากรอกรหัสครูฝึก');
    //        $valid = false;
    //    }
    //    if (check_pid($data['student_id']) && !preg_match('/[0-9]{13}/', $data['student_id'])) {
    //        set_err('รหัสนักศึกษาไม่ถูกต้อง');
    //        $valid = false;
    //    }
    if (empty($data['business_id'])) {
        set_err('กรุณากรอกรหัสสถานประกอบการ');
        $valid = false;
    }
    // if (empty($data['minor_id'])) {
    //     set_err('กรุณากรอกรหัสสาขางาน');
    //     $valid = false;
    // }
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

function do_insert($school_id)
{
    global $db;
    $data = &$_POST;
    $success = 0;
    $students = explode("\r\n", trim($data['students_id']));
    $list = implode(",", $students);
    $list = preg_replace('/\s+/', '', $list);
    $total = count($students);
    $school_id = $_SESSION['user']['school_id'];
    //    var_dump($list);
    //    die();
    $query = "SELECT student_id FROM student WHERE school_id = " . pq($school_id) . "AND std_edu_id = 2 AND student_id IN ($list)";
    // " . pq($school_id) . "
    // var_dump($query);
    $result = mysqli_query($db, $query);
    //    if(mysqli_num_rows($result)>0)
    //        return ;
    if ($result) {
        $student_list = array();
        while ($row = mysqli_fetch_assoc($result)) {
            $student_list[] = $row['student_id'];
        }
        //    var_dump(count($data_list));
        //    $std_list = implode(",", $data_list);
        // var_dump($student_list);
        // die();
        //    $query = "SELECT student_id FROM student WHERE student_id IN ";
        if (count($student_list) > 0) {
            foreach ($student_list as $student_id) {
                //            echo "---",$value,"<br />";
                //        }
                // var_dump($data['trainer_list']);
                //        die();
                foreach ((array) $data['trainer_list'] as $trainer_id) {
                    if (empty($trainer_id))
                        continue;
                    //             do_insert($school_id,$trainer_id);
                    //            var_dump($trainer_id);
                    $query = "INSERT INTO training ("
                        . "`training_id`,`student_id`,"
                        . "`business_id`,`school_id`,"
                        . "`trainer_id`,"
                        . "`contract_date`,`start_date`,"
                        . "`end_date`)  "
                        . "VALUES "
                        . "(NULL," . pq($student_id) . ","
                        . pq($data['business_id']) . "," . pq($school_id) . ","
                        . pq($trainer_id) . ","
                        . pq($data['contract_date']) . "," . pq($data['start_date']) . ","
                        . pq($data['end_date']) . ")";
                    //                var_dump($student_id);
                    mysqli_query($db, $query);

                    if (mysqli_affected_rows($db) > 0) {
                        // set_info('บันทึกข้อมูลสำเร็จ');
                        $success++;
                    } else {
                        set_err('บันทึกข้อมูลไม่สำเร็จ ' . $student_id . ' & ' . mysqli_error($db));
                    }
                }
            }
        } else {
            set_err('ไม่มีการบันทึกข้อมูล');
        }
    } else {
        set_err('ไม่มีการบันทึกข้อมูล');
    }
    if ($success > 0) {
        set_info('บันทึกข้อมูลสำเร็จ ' . $success . ' รายการ');
    }

    //    die();
    // redirect('app/training/insert_group');
}
