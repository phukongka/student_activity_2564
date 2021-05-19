<?php
if (!defined('BASE_PATH'))
    exit('No direct script access allowed');
$active = 'training';
$subactive = 'plan';
$title = 'แผนการฝึก';
$showmodal = false;
// check post data
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
                กรอกข้อมูลเข้าระบบ
                <small>แบบฟอร์ม</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> หน้าหลัก</a></li>
                <li><a href="#">การฝึกงาน</a></li>
                <li class="active">แผนการฝึก</li>
                <li class="active"><a data-toggle="modal" href="#myModal">
                    <img src="./images/youtube.png" width="20px" alt="" > VDO การใช้งาน</a></li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">ข้อมูลแผนการฝึกงาน</h3>

                    <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="" data-original-title="Collapse">
                            <i class="fa fa-minus"></i></button>
                        <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="" data-original-title="Remove">
                            <i class="fa fa-times"></i></button>
                    </div>
                </div>
                <div class="box-body">
                    <!-- form start -->
                    <form class="form-horizontal" id="plan_form" method="post" action="">
                        <input type="hidden" id="id" name="id" />
                        <div class="form-group">
                            <label class="control-label col-md-3" for="semester">เลือกภาคเรียน</label>
                            <div>
                                <div class="col-md-5">
                                    <select class="form-control" id='semester' name="semester">
                                        <?php
                                        $sql = "SELECT semester,semester_desc FROM semester";
                                        echo gen_option($sql, 1);
                                        ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3" for="start_training">เลือกวันเริ่มต้น</label>
                            <div class="col-md-5">
                                <div class="input-group">

                                    <div class="input-group-addon">
                                        <i class="fa fa-calendar"></i>
                                    </div>
                                    <input type="text" class="form-control pull-right" id="start_training">
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-3" for="end_training">เลือกวันสิ้นสุด</label>
                            <div class="col-md-5">
                                <div class="input-group">

                                    <div class="input-group-addon">
                                        <i class="fa fa-calendar"></i>
                                    </div>
                                    <input type="text" class="form-control pull-right" id="end_training">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3" for="edu_level">เลือกระดับการศึกษา</label>
                            <div>
                                <div class="col-md-5">
                                    <?php
                                    $sql = "SELECT edu_code,edu_desc FROM edu_level";
                                    echo gen_bootrap_radio('edu_level', $sql, '2');
                                    ?>

                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-3" for="edu_year">เลือกชั้นปีการศึกษา</label>
                            <div>
                                <div class="col-md-5">
                                    <select class="form-control" id='edu_year' name="edu_year">
                                        <?php
                                        $sql = "SELECT distinct SUBSTRING(student_id,1,2) AS edu_year,SUBSTRING(student_id,1,2) AS edu_year FROM student WHERE school_id = '{$_SESSION['user']['school_id']}'";
                                        echo gen_option($sql, 1);
                                        ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="form-group">
                            <label class="control-label col-md-3" for="edu_type">เลือกประเภทสาขาวิชา</label>
                            <div>
                                <div class="col-md-5">
                                    <select class="form-control" id='edu_type' name="edu_year">
                                        <?php
                                        $sql = "SELECT type_code,type_name FROM data_edu_type";
                                        echo gen_option($sql, '01');
                                        ?>
                                    </select>
                                </div>
                            </div>
                        </div> -->

                        <div class="form-group">
                            <label class="col-md-3"></label>
                            <div class="offset-md-3">
                                <div class="col-md-3">
                                    <button type="button" class="form-control btn btn-block btn-primary" id="btn_search">ค้นหาข้อมูลกลุ่มการเรียน</button>
                                </div>
                                <div class="col-md-3">
                                    <button type="button" class="form-control btn btn-block btn-success" id="btn_submit" disabled>บันทึกแผนการฝึก</button>
                                </div>
                            </div>
                        </div>
                        <div id="form-alert"></div>
                    </form>
                    <!-- form end -->
                    <!-- table start -->
                    <div class="col-md-12">
                        <!-- Custom Tabs -->
                        <div class="nav-tabs-custom">
                            <ul class="nav nav-tabs">
                                <li class="active"><a href="#tab_1" data-toggle="tab" aria-expanded="true">กลุ่มการเรียน</a></li>
                                <li class=""><a href="#tab_2" data-toggle="tab" aria-expanded="false">แผนการฝึก</a></li>

                                <li class="pull-right"><a href="#" class="text-muted"><i class="fa fa-gear"></i></a></li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane active" id="tab_1">
                                    <div class="table-responsive">
                                        <table id="group_list" class="table table-bordered table-striped">
                                            <thead>
                                                <tr>
                                                    <th>กลุ่มการเรียน</th>
                                                    <th>ชื่อกลุ่ม</th>
                                                    <th>ดำเนินการ</th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                            </tbody>

                                            <tfoot>
                                                <tr>
                                                    <th>กลุ่มการเรียน</th>
                                                    <th>ชื่อกลุ่ม</th>
                                                    <th>เลือกกลุ่ม</th>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>

                                </div>
                                <!-- /.tab-pane -->
                                <div class="tab-pane" id="tab_2">
                                    <div class="table-responsive">
                                        <table id="plan_list" class="table table-bordered table-striped">
                                            <thead>
                                                <tr>
                                                    <th>รหัส</th>
                                                    <th>ภาคเรียน</th>
                                                    <th>กลุ่มการเรียน</th>
                                                    <th>ชื่อกลุ่ม</th>
                                                    <th>วันเริ่มต้น</th>
                                                    <th>วันสิ้นสุด</th>
                                                    <th>ดำเนินการ</th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                            </tbody>

                                            <tfoot>
                                                <tr>
                                                    <th>รหัส</th>
                                                    <th>ภาคเรียน</th>
                                                    <th>กลุ่มการเรียน</th>
                                                    <th>ชื่อกลุ่ม</th>
                                                    <th>วันเริ่มต้น-สิ้นสุด</th>
                                                    <th>วันเริ่มต้น-สิ้นสุด</th>
                                                    <th>ดำเนินการ</th>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>

                                </div>
                                <!-- /.tab-pane -->

                            </div>
                            <!-- /.tab-content -->
                        </div>
                        <!-- nav-tabs-custom -->
                    </div>

                </div>
                <!-- /.box-body -->
                <div class="box-footer">
                    จัดการแผนการออกฝึกงาน
                </div>
                <!-- /.box-footer-->
            </div>
            <?php require_once 'modal.edit_plan.php'; ?>
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
    // Do this before you initialize any of your modals
    $.fn.modal.Constructor.prototype.enforceFocus = function() {};
    // var plan_list_table = $('#plan_list').DataTable();
    $('#start_training').datepicker({
        format: 'yyyy-mm-dd',
        todayBtn: true,
        language: 'th', //เปลี่ยน label ต่างของ ปฏิทิน ให้เป็น ภาษาไทย   (ต้องใช้ไฟล์ bootstrap-datepicker.th.min.js นี้ด้วย)
        thaiyear: true, //Set เป็นปี พ.ศ.
        autoclose: true
    }).datepicker("setDate", "0"); //กำหนดเป็นวันปัจุบัน

    $('#end_training').datepicker({
        format: 'yyyy-mm-dd',
        todayBtn: true,
        language: 'th', //เปลี่ยน label ต่างของ ปฏิทิน ให้เป็น ภาษาไทย   (ต้องใช้ไฟล์ bootstrap-datepicker.th.min.js นี้ด้วย)
        thaiyear: true, //Set เป็นปี พ.ศ.
        autoclose: true
    }).datepicker("setDate", "0"); //กำหนดเป็นวันปัจุบัน    

    $('#m_start_training').datepicker({
        format: 'yyyy-mm-dd',
        todayBtn: true,
        language: 'th', //เปลี่ยน label ต่างของ ปฏิทิน ให้เป็น ภาษาไทย   (ต้องใช้ไฟล์ bootstrap-datepicker.th.min.js นี้ด้วย)
        thaiyear: true, //Set เป็นปี พ.ศ.
        autoclose: true
    })

    $('#m_end_training').datepicker({
        format: 'yyyy-mm-dd',
        todayBtn: true,
        language: 'th', //เปลี่ยน label ต่างของ ปฏิทิน ให้เป็น ภาษาไทย   (ต้องใช้ไฟล์ bootstrap-datepicker.th.min.js นี้ด้วย)
        thaiyear: true, //Set เป็นปี พ.ศ.
        autoclose: true
    })
    $(function() {
        get_plan();
    });
    // trim text box
    $('#semester').change(function() {
        get_plan();
    })
    $('form').on('blur', 'input[type="text"], textarea', function() {
        $(this).val((i, value) => value.trim());
    });
    $("#btn_search").click(function(event) {
        get_group();
    });

    $("#btn_submit").click(function(event) {
        if ($('#start_training').val() >= $('#end_training').val()) {
            alert('กรุณากำหนดวันเริ่มต้นและสิ้นสุดการฝึกให้ถูกต้อง')
            return
        }
        var group_list = [];
        $.each($(".student_group:checked"), function() {
            group_list.push($(this).val());
        });

        let table = $('#plan_list').DataTable();
        // Stop form from submitting normally
        let url = '';
        event.preventDefault();
        if ($('#id').val() == '') {
            url = "ajax/training/post_plan.php"
        } else {
            url = "ajax/training/put_plan.php"
        }
        let semester = $('#semester').val()
        let start_training = $('#start_training').val()
        let end_training = $('#end_training').val()
        let school_id = '<?php echo $_SESSION['user']['school_id'] ?>'
        $.post(url, {
                semester,
                group_list,
                start_training,
                end_training,
                school_id
            })
            .done(function(result) {
                if (result.status)
                    $("#form-alert").removeClass().addClass("alert alert-success alert-dismissible").show().html(result.message).fadeOut(3000)
                else
                    $("#form-alert").removeClass().addClass("alert alert-danger alert-dismissible").show().html(result.message).fadeOut(3000)
            });
        table.ajax.reload()
    });

    $('#submit_edit').click(function() {
        let table = $('#plan_list').DataTable();
        if ($('#m_start_training').val() >= $('#m_end_training').val()) {
            alert('กรุณากำหนดวันเริ่มต้นและสิ้นสุดการฝึกให้ถูกต้อง')
            return
        }
        var url = 'ajax/training/put_plan.php'
        $.post(url, {
                id: $('#m_id').val(),
                start_training: $('#m_start_training').val(),
                end_training: $('#m_end_training').val(),
            })
            .done(function(result) {
                if (result.status) {
                    $("#m-form-alert").removeClass().addClass("alert alert-success alert-dismissible").show().html(result.message).fadeOut(3000)
                } else {
                    $("#m-form-alert").removeClass().addClass("alert alert-danger alert-dismissible").show().html(result.message).fadeOut(3000)
                }
                $('#modal-edit-plan').modal('hide')
            });
        table.ajax.reload()
    })


    $("#plan_form").submit(function(event) {
        let table = $('#group_list').DataTable();
        // Stop form from submitting normally
        var url = '';
        event.preventDefault();
        if ($('#id').val() == '') {
            url = "ajax/api/admin/post_plan.php"
        } else {
            url = "ajax/api/admin/put_plan.php"
        }

        $.post(url, $("#plan_form").serialize())
            .done(function(result) {
                if (result.status)
                    $("#form-alert").removeClass().addClass("alert alert-success alert-dismissible").show().html(result.message).fadeOut(3000)
                else
                    $("#form-alert").removeClass().addClass("alert alert-danger alert-dismissible").show().html(result.message).fadeOut(3000)
            });
        table.ajax.reload()

    });



    $('#plan_list tbody').on('click', '.btn-edit', function() {
        let table = $('#plan_list').DataTable();
        var data = table.row($(this).parents('tr')).data();
        $('#modal-edit-plan').modal('show');
        $('#m_start_training').val(data.start_training)
        $('#m_end_training').val(data.end_training)
        $('#m_id').val(data.id)

    });

    $('#group_list tbody').on('click', '.student_group', function() {
        var group_list = [];
        $.each($(".student_group:checked"), function() {
            group_list.push($(this).val());
        });
        if (group_list.length > 0) {
            $('#btn_submit').attr("disabled", false);
        } else {
            $('#btn_submit').attr("disabled", true);
        }
    });
    $('#plan_list tbody').on('click', '.btn-delete', function() {
        let table = $('#plan_list').DataTable();
        let table_group = $('#group_list').DataTable();
        var id = $(this).attr("data-id");
        // alert(id);
        // return false;
        if (confirm('ต้องการลบข้อมูลหรือไม่?')) {

            $.post("ajax/training/del_plan.php", {
                    id
                })
                .done(function(result) {
                    $("#form-alert").removeClass().addClass("alert alert-success alert-dismissible").show().html(result.message).fadeOut(3000)
                });
            table.ajax.reload()
            table_group.ajax.reload();
        }
        return
    });


    function get_group() {
        var url = 'ajax/training/get_student_group.php';
        $('#group_list').DataTable({
            "destroy": true,
            "paging": true,
            "lengthChange": true,
            "searching": true,
            "ordering": true,
            "info": true,
            "responsive": true,
            "autoWidth": false,
            "pageLength": 10,
            "ajax": {
                "url": url,
                "type": "get",
                "data": function(d) {
                    d.edu_level = $("input:radio[name=edu_level]:checked").val();
                    d.edu_year = $('#edu_year').val();
                    d.semester = $('#semester').val();
                    // d.edu_type = $('#edu_type').val();
                }
            },
            "columns": [{
                    "data": "group_id"
                },
                {
                    "data": "group_name"
                },
                {
                    mRender: function(data, type, row) {
                        return "<input type='checkbox' class='student_group' value='" + row.group_id + "' name='check_list[]' /> "
                    },
                    "targets": 0
                },
            ],
            "language": {
                "lengthMenu": "แสดง _MENU_ แถวต่อหน้า",
                "zeroRecords": "ไม่มีข้อมูล",
                "info": "กำลังแสดงข้อมูล _START_ ถึง _END_ จาก _TOTAL_ รายการ",
                "search": "ค้นหา:",
                "infoEmpty": "ไม่มีข้อมูลแสดง",
                "infoFiltered": "(ค้นหาจาก _MAX_ total records)",
                "paginate": {
                    "first": "หน้าแรก",
                    "last": "หน้าสุดท้าย",
                    "next": "หน้าต่อไป",
                    "previous": "หน้าก่อน"
                }
            }
        });
    }

    function get_plan() {
        var url = 'ajax/training/get_plan.php';
        $('#plan_list').DataTable({
            "destroy": true,
            "paging": true,
            "lengthChange": true,
            "searching": true,
            "ordering": true,
            "info": true,
            "responsive": true,
            "autoWidth": false,
            "pageLength": 10,
            "ajax": {
                "url": url,
                "type": "get",
                "data": function(d) {
                    // d.edu_level = $("input:radio[name=edu_level]:checked").val();
                    d.semester = $('#semester').val();
                    d.school_id = '<?php echo $_SESSION['user']['school_id'] ?>'
                }
            },
            "columns": [{
                    "data": "id"
                },
                {
                    "data": "semester"
                },
                {
                    "data": "group_id"
                },
                {
                    "data": "group_name"
                },
                {
                    "data": "start_training"
                },
                {
                    "data": "end_training"
                },
                {
                    mRender: function(data, type, row) {
                        // console.log(row)
                        return '<a class="btn-edit btn btn-warning"><span class="glyphicon glyphicon-pencil"></span></a> | <a class="btn-delete btn btn-danger" data-id="' + row.id + '"><span class="glyphicon glyphicon-remove"></span></a>'
                        // return '<a class="btn-delete btn btn-danger" data-id="' + row.id + '"><span class="glyphicon glyphicon-remove"></span></a>'
                    },
                    "targets": -1
                },
            ],
            "language": {
                "lengthMenu": "แสดง _MENU_ แถวต่อหน้า",
                "zeroRecords": "ไม่มีข้อมูล",
                "info": "กำลังแสดงข้อมูล _START_ ถึง _END_ จาก _TOTAL_ รายการ",
                "search": "ค้นหา:",
                "infoEmpty": "ไม่มีข้อมูลแสดง",
                "infoFiltered": "(ค้นหาจาก _MAX_ total records)",
                "paginate": {
                    "first": "หน้าแรก",
                    "last": "หน้าสุดท้าย",
                    "next": "หน้าต่อไป",
                    "previous": "หน้าก่อน"
                }
            }
        });
    }
</script>
<?php
function get_main_menu()
{
    global $db;
    //    $val = $group."%";
    $query = "SELECT * FROM main_menu WHERE type = 'M' ORDER BY id";
    $result = mysqli_query($db, $query);
    $main_menues = array();
    while ($row = mysqli_fetch_assoc($result)) {
        $main_menues[] = $row;
    }
    return $main_menues;
}
