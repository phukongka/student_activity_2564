<?php
if (!defined('BASE_PATH'))
    exit('No direct script access allowed');
$title = "การฝึกอาชีพ";
$active = 'training';
$subactive = 'list';
$school_id = $_SESSION['user']['school_id'];

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
                รายการฝึกอาชีพ
                <small><?php echo getSchoolName($school_id) ?></small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> หน้าหลัก</a></li>
                <li><a href="#">ฝึกอาชีพ</a></li>
                <li class="active">รายการ</li>
                <li class="active"><a data-toggle="modal" href="#myModal">
                    <img src="./images/youtube.png" width="20px" alt="" > VDO การใช้งาน</a></li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">

            <!-- Default box -->
            <div class="box">
                <?php show_message() ?>
                <div id="message"></div>
                <div class="box-header">
                    <h3 class="box-title">รายการฝึกอาชีพ</h3>
                </div>
                <div class="row">
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="info-box">
                            <span class="info-box-icon bg-green"><i class="fa fa-users"></i></span>
                            <div class="info-box-content">
                                <span class="info-box-ext">จำนวนนักศึกษาที่กำลังฝึกอาชีพ</span>
                                <span class="info-box-number" id="training_total">0</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="info-box">
                            <span class="info-box-icon bg-orange"><i class="fa fa-users"></i></span>
                            <div class="info-box-content">
                                <span class="info-box-ext">จำนวนนักศึกษาที่กำลังฝึกงาน</span>
                                <span class="info-box-number" id="internship_total">0</span>
                            </div>
                        </div>
                    </div>

                    <!-- <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="info-box">
                            <span class="info-box-icon bg-blue"><i class="fa fa-user"></i></span>
                            <div class="info-box-content">
                                <span class="info-box-text">จำนวนนักเรียนทวิภาคี</span>
                                <span class="info-box-number" id="dve_total"></span>
                            </div>
                        </div>
                    </div> -->
                </div>
                <!-- /.box-header -->
                <div class="box-body">

                    <!-- tabs start -->
                    <div class="col-md-12">
                        <!-- Custom Tabs -->
                        <div class="nav-tabs-custom">
                            <ul class="nav nav-tabs">
                                <li class="active"><a href="#tab_1" data-toggle="tab" aria-expanded="true">ข้อมูลการฝึกอาชีพ</a></li>
                                <li class=""><a href="#tab_2" data-toggle="tab" aria-expanded="false">ข้อมูลการฝึกงาน</a></li>

                                <li class="pull-right"><a href="#" class="text-muted"><i class="fa fa-gear"></i></a></li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane active" id="tab_1">
                                    <!-- table start -->
                                    <div class="table-responsive">
                                        <table id="tb_training_list" class="table  table-bordered table-striped ">
                                            <thead>
                                                <tr>
                                                    <th>รหัสการฝึกอาชีพ</th>
                                                    <th>รหัสนักศึกษา</th>
                                                    <th>ชื่อนักศึกษา</th>
                                                    <th>ชื่อสถานประกอบการ</th>

                                                    <th>ชื่อสาขางาน</th>
                                                    <th>ครูฝึก</th>
                                                    <!--<th>วันที่ทำสัญญา</th>-->
                                                    <th>วันที่เริ่มต้นการฝึก</th>
                                                    <th>วันที่สิ้นสุดการฝึก</th>
                                                    <th>สถานะการฝึกงาน</th>
                                                    <th class="col-md-2 text-center">ดำเนินการ</th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <th>รหัสการฝึกอาชีพ</th>
                                                    <th>รหัสนักศึกษา</th>
                                                    <th>ชื่อนักศึกษา</th>
                                                    <th>ชื่อสถานประกอบการ</th>
                                                    <th>ชื่อสาขางาน</th>
                                                    <th>ครูฝึก</th>
                                                    <!--<th>วันที่ทำสัญญา</th>-->
                                                    <th>วันที่เริ่มต้นการฝึก</th>
                                                    <th>วันที่สิ้นสุดการฝึก</th>
                                                    <th>สถานะการฝึกงาน</th>
                                                    <th>ดำเนินการ</th>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>

                                </div>
                                <!-- /.tab-pane -->
                                <div class="tab-pane" id="tab_2">
                                    <!-- table start -->
                                    <div class="table-responsive">
                                        <table id="tb_internship_list" class="table  table-bordered table-striped ">
                                            <thead>
                                                <tr>
                                                    <th>รหัสการฝึกงาน</th>
                                                    <th>รหัสนักศึกษา</th>
                                                    <th>ชื่อนักศึกษา</th>
                                                    <th>ชื่อสถานประกอบการ</th>

                                                    <th>ชื่อสาขางาน</th>
                                                    <th>ครูฝึก</th>
                                                    <!--<th>วันที่ทำสัญญา</th>-->
                                                    <th>วันที่เริ่มต้นการฝึก</th>
                                                    <th>วันที่สิ้นสุดการฝึก</th>
                                                    <th>สถานะการฝึกงาน</th>
                                                    <th class="col-md-2 text-center">ดำเนินการ</th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <th>รหัสการฝึกงาน</th>
                                                    <th>รหัสนักศึกษา</th>
                                                    <th>ชื่อนักศึกษา</th>
                                                    <th>ชื่อสถานประกอบการ</th>
                                                    <th>ชื่อสาขางาน</th>
                                                    <th>ครูฝึก</th>
                                                    <!--<th>วันที่ทำสัญญา</th>-->
                                                    <th>วันที่เริ่มต้นการฝึก</th>
                                                    <th>วันที่สิ้นสุดการฝึก</th>
                                                    <th>สถานะการฝึกงาน</th>
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
            </div>
            <!-- /.box -->
            <!-- /.box -->
            <?php require_once 'modal_edit_training.php'; ?>
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
    $(".select2").select2();
    $('#trainer_list').select2();
    var url = "ajax/training/get_training.php";
    var table = $('#tb_training_list').DataTable({
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
            // "data": function(d) {
            //     // d.token = "<?php echo $token ?>"
            //     //                d.zone_id = $('#zone_id').val();
            // }
        },
        "columns": [{
                "data": "training_id"
            },
            {
                "data": "student_id",
            },
            {
                "data": "std_name",
            },
            {
                "data": "business_name"
            },
            {
                "data": "minor_name_th"
            },
            {
                mRender: function(data, type, row) {
                    var list = row.trainer_list;
                    var arr = JSON.parse(list)
                    let html = ''
                    // console.log('arr :' + arr);
                    if (arr === null)
                        return html;
                    let result = arr.map(a => a.name);
                    // let result = lists.map(({ name }) => name)
                    // console.log(result);
                    for (i = 0; i < result.length; i++) {
                        html += result[i]
                    }
                    return html
                    // return '<a class="btn-delete btn btn-danger" data-id="' + row.id + '"><span class="glyphicon glyphicon-remove"></span></a>'
                },
                "targets": 5
            },
            // {
            //     "data": "trainer_list"
            // },
            {
                "data": "start_date"
            },
            {
                "data": "end_date"
            },
            {
                "data": "training_status"
            },
            // { "data": "button" },
            {
                mRender: function(data, type, row) {
                    return '<a class="btn-edit btn btn-warning"><span class="glyphicon glyphicon-pencil"></span></a> | <a class="btn-delete btn btn-danger" data-id="' + row.training_id + '"><span class="glyphicon glyphicon-remove"></span></a>'
                    // return '<a class="btn-delete btn btn-danger" data-id="' + row.id + '"><span class="glyphicon glyphicon-remove"></span></a>'
                },
                "targets": -1
            },
            // {
            //     "data": null,
            //     "defaultContent": '<button type="button" class="btn btn-warning btn-sm btn-edit" \
            //         data-toggle="modal" data-target="#formModal"><i class="fa fa-pencil"></i></button> \
            //         <button type="button" class="btn btn-danger btn-sm btn-delete"><i class="fa fa-trash-o"></i></button>'
            // }
        ],
        "language": {
            "lengthMenu": "แสดง _MENU_ แถวต่อหน้า",
            "zeroRecords": "ไม่มีข้อมูล",
            "info": "กำลังแสดงข้อมูล _START_ ถึง _END_ จาก _TOTAL_ รายการ",
            "search": "ค้นหา:",
            "infoEmpty": "ไม่มีข้อมูลแสดง",
            "infoFiltered": "(ค้นหาจากจำนวนทั้งหมด _MAX_ รายการ)",
            "paginate": {
                "first": "หน้าแรก",
                "last": "หน้าสุดท้าย",
                "next": "หน้าต่อไป",
                "previous": "หน้าก่อน"
            }
        },
        // Display total Record
        "initComplete": function(settings, json) {
            var info = this.api().page.info();
            $("#training_total").html(info.recordsTotal);
        }
    });
    url = "ajax/training/get_internship.php"
    var tb_training_list = $('#tb_internship_list').DataTable({
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
            // "data": function(d) {
            //     // d.token = "<?php echo $token ?>"
            //     //                d.zone_id = $('#zone_id').val();
            // }
        },
        "columns": [{
                "data": "training_id"
            },
            {
                "data": "student_id",
            },
            {
                "data": "std_name",
            },
            {
                "data": "business_name"
            },
            {
                "data": "minor_name_th"
            },
            {
                mRender: function(data, type, row) {
                    var list = row.trainer_list;
                    var arr = JSON.parse(list)
                    let html = '';

                    if (arr === null)
                        return html;
                    let result = arr.map(a => a.name);
                    // let result = lists.map(({ name }) => name)
                    // console.log(result);
                    for (i = 0; i < result.length; i++) {
                        html += result[i]
                    }

                    return html
                    // return '<a class="btn-delete btn btn-danger" data-id="' + row.id + '"><span class="glyphicon glyphicon-remove"></span></a>'
                },
                "targets": 5
            },
            // {
            //     "data": "trainer_list"
            // },
            {
                "data": "start_date"
            },
            {
                "data": "end_date"
            },
            {
                "data": "training_status"
            },
            // { "data": "button" },
            {
                mRender: function(data, type, row) {
                    return '<a class="btn-edit btn btn-warning"><span class="glyphicon glyphicon-pencil"></span></a> | <a class="btn-delete btn btn-danger" data-id="' + row.training_id + '"><span class="glyphicon glyphicon-remove"></span></a>'
                    // return '<a class="btn-delete btn btn-danger" data-id="' + row.id + '"><span class="glyphicon glyphicon-remove"></span></a>'
                },
                "targets": -1
            },
            // {
            //     "data": null,
            //     "defaultContent": '<button type="button" class="btn btn-warning btn-sm btn-edit" \
            //         data-toggle="modal" data-target="#formModal"><i class="fa fa-pencil"></i></button> \
            //         <button type="button" class="btn btn-danger btn-sm btn-delete"><i class="fa fa-trash-o"></i></button>'
            // }
        ],
        "language": {
            "lengthMenu": "แสดง _MENU_ แถวต่อหน้า",
            "zeroRecords": "ไม่มีข้อมูล",
            "info": "กำลังแสดงข้อมูล _START_ ถึง _END_ จาก _TOTAL_ รายการ",
            "search": "ค้นหา:",
            "infoEmpty": "ไม่มีข้อมูลแสดง",
            "infoFiltered": "(ค้นหาจากจำนวนทั้งหมด _MAX_ รายการ)",
            "paginate": {
                "first": "หน้าแรก",
                "last": "หน้าสุดท้าย",
                "next": "หน้าต่อไป",
                "previous": "หน้าก่อน"
            }
        },
        // Display total Record
        "initComplete": function(settings, json) {
            var info = this.api().page.info();
            $("#internship_total").html(info.recordsTotal);
        }
    });
    var info = table.page.info();
    // url = "ajax/api/get_business.php"
    // let business = $.getJSON(url, function(data){
    //     return data
    // })
    // console.log(business)

    // $('#business_id').select2({
    //     data: business
    // })
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
        // minimumInputLength: 2,
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

    $('#m_start_date').datepicker({
        format: 'yyyy-mm-dd',
        todayBtn: true,
        language: 'th', //เปลี่ยน label ต่างของ ปฏิทิน ให้เป็น ภาษาไทย   (ต้องใช้ไฟล์ bootstrap-datepicker.th.min.js นี้ด้วย)
        thaiyear: true, //Set เป็นปี พ.ศ.
        autoclose: true
    }).datepicker("setDate", "0"); //กำหนดเป็นวันปัจุบัน

    $('#m_end_date').datepicker({
        format: 'yyyy-mm-dd',
        todayBtn: true,
        language: 'th', //เปลี่ยน label ต่างของ ปฏิทิน ให้เป็น ภาษาไทย   (ต้องใช้ไฟล์ bootstrap-datepicker.th.min.js นี้ด้วย)
        thaiyear: true, //Set เป็นปี พ.ศ.
        autoclose: true
    }).datepicker("setDate", "0"); //กำหนดเป็นวันปัจุบัน    

    $('#m_contract_date').datepicker({
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

    $('#student_list').select2({
        ajax: {
            url: "ajax/training/get_student.php",
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

        let table = $('#tb_training_list').DataTable();
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


    // $(".select2-mulitple").select2();


    $('#tb_training_list tbody').on('click', '.btn-edit', function() {
        let table = $('#tb_training_list').DataTable();
        var data = table.row($(this).parents('tr')).data();
        console.log(data)
        $('#modal_edit_training').modal('show');
        $('#m_training_id').val(data.training_id);
        // $("#business_id").val(data.business_id).trigger("change");
        // $("#business_id").val(data.business_id).trigger("change");
        $('#m_start_date').val(data.start_date)
        $('#m_end_date').val(data.end_date)
        $('#m_contract_date').val(data.contract_date)
        // $('#m_id').val(data.id)

    });

    $('#tb_internship_list tbody').on('click', '.btn-edit', function() {
        let table = $('#tb_training_list').DataTable();
        var data = table.row($(this).parents('tr')).data();
        console.log(data)
        $('#modal_edit_training').modal('show');
        $('#m_training_id').val(data.training_id);
        // $("#business_id").val(data.business_id).trigger("change");
        // $("#business_id").val(data.business_id).trigger("change");
        $('#m_start_date').val(data.start_date)
        $('#m_end_date').val(data.end_date)
        $('#m_contract_date').val(data.contract_date)
        // $('#m_id').val(data.id)

    });


    $('#tb_training_list tbody').on('click', '.btn-delete', function() {
        let table = $('#tb_training_list').DataTable();
        var id = $(this).attr("data-id");
        // alert(id);
        // return false;
        if (confirm('ต้องการลบข้อมูลหรือไม่?')) {

            $.post("ajax/training/del_training.php", {
                    id
                })
                .done(function(result) {
                    $("#form-alert").removeClass().addClass("alert alert-success alert-dismissible").show().html(result.message).fadeOut(3000)
                });
            table.ajax.reload()
        }
        return
    });

    $('#tb_internship_list tbody').on('click', '.btn-delete', function() {
        let table = $('#tb_internship_list').DataTable();
        var id = $(this).attr("data-id");
        // alert(id);
        // return false;
        if (confirm('ต้องการลบข้อมูลหรือไม่?')) {

            $.post("ajax/training/del_training.php", {
                    id
                })
                .done(function(result) {
                    $("#form-alert").removeClass().addClass("alert alert-success alert-dismissible").show().html(result.message).fadeOut(3000)
                });
            table.ajax.reload()
        }
        return
    });

    $('#submit_edit').click(function() {
        let table = $('#tb_training_list').DataTable();
        if ($('#m_start_date').val() >= $('#m_end_date').val()) {
            alert('กรุณากำหนดวันเริ่มต้นและสิ้นสุดการฝึกให้ถูกต้อง')
            return
        }
        let url = 'ajax/training/put_training.php'
        $.post(url, {
                training_id: $('#m_training_id').val(),
                start_date: $('#m_start_date').val(),
                end_date: $('#m_end_date').val(),
                contract_date: $('#m_contract_date').val(),
            })
            .done(function(result) {
                console.log(result)
                if (result.status) {
                    $("#m-form-alert").removeClass().addClass("alert alert-success alert-dismissible").show().html(result.message).fadeOut(3000)
                } else {
                    $("#m-form-alert").removeClass().addClass("alert alert-danger alert-dismissible").show().html(result.message).fadeOut(3000)
                }
                $('#modal_edit_training').modal('hide');
            });
        table.ajax.reload()
    })

    //ดึงข้อมูล province จากไฟล์ get_data.php
    $("#business_id").change(function() {
        // $("#trainer_list").prop("disabled",false);
        // alert('test');
        $.ajax({
            url: "./ajax/get_trainers.php",
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
function update_training_status()
{
    global $db;
    $today = date_create(date('Y-m-d'));
    $today = date_format($today, 'Y-m-d');
    // var_dump($today);
    // die();
    // traning_status 1 กำลังฝึก 2 สิ้นสุดการฝึก
    $query = "UPDATE training SET training_status=2 WHERE school_id = " . pq($_SESSION['user']['school_id']) . " AND DATE(end_date) < " . pq($today);
    // echo $query;
    // die();
    mysqli_query($db, $query);
    // $query = "UPDATE training SET training_status=1 WHERE school_id = " . pq($_SESSION['user']['school_id']) . " AND DATE(end_date) > " . pq($today);
    // // echo $query;
    // // die();
    // mysqli_query($db, $query);
}
function get_training_total($school_id)
{
    global $db;
    //    $val = $group."%";
    $query = "SELECT count(DISTINCT t.student_id,t.business_id,t.training_id) AS total FROM dve_training AS t "
        . " INNER JOIN student AS s ON s.student_id = t.student_id AND s.edu_type LIKE '2' "
        // . " JOIN business AS b ON b.business_id = t.business_id "
        // . " JOIN trainer AS tr ON t.trainer_id = tr.trainer_id "
        . " WHERE t.school_id = " . pq($school_id) . " AND t.training_status = 1";
    // echo $query;
    // die();
    $result = mysqli_query($db, $query);
    if ($result) {
        $data = mysqli_fetch_assoc($result);
        return $data['total'];
    }
    return 0;
}

function get_internship_total($school_id)
{
    global $db;
    //    $val = $group."%";
    $query = "SELECT DISTINCT t.training_id,t.business_id,t.student_id,CONCAT(s.th_name,' ',s.th_surname) AS std_name,m.minor_name_th,b.business_name,t.trainer_list,t.start_date,t.end_date,t.contract_date,t.training_status "
        . "FROM dve_training t "
        . " LEFT JOIN student s ON s.student_id = t.student_id"
        . " LEFT JOIN business b ON b.business_id = t.business_id"
        // . " LEFT JOIN dve_trainer tr ON tr.trainer_id = t.trainer_id"
        . " LEFT JOIN data_minor m ON m.minor_id = s.minor"
        // . " LEFT JOIN dve_trainer dt ON JSON_CONTAINS(t.trainer_list, JSON_QUOTE(dt.trainer_id), '$')"
        // . " LEFT JOIN data_major ma ON ma.major_code = m.major"
        . " WHERE s.school_id LIKE " . pq($_SESSION['user']['school_id'])
        // . " AND s.school_id=t.school_id AND t.training_status = 1 "
        . " AND s.school_id=t.school_id "
        . " AND s.edu_type NOT LIKE '2' "
        // . " GROUP BY training_id "
        . " ORDER BY training_id ASC";
    $result = mysqli_query($db, $query);
    if ($result) {
        $data = mysqli_num_rows($result);
        return $data;
    }
    return 0;
}

function get_dve_total($school_id)
{
    global $db;
    //    $val = $group."%";
    $query = "SELECT COUNT(*) AS total FROM student WHERE school_id = " . pq($school_id) . " and `edu_type`='2'";
    // echo $query;
    // die();
    $result = mysqli_query($db, $query);
    if ($result) {
        $data = mysqli_fetch_assoc($result);
        return $data['total'];
    }
    return 0;
}

// function get_training($school_id, $page = 0, $limit = 10)
// {
//     global $db;
//     $start = $page * $limit;
// //    $query = "SELECT * FROM training WHERE school_id = ".pq($school_id)." LIMIT " . $start . "," . $limit . "";
//     $query = "SELECT t1.std_id,t1.std_name,t2.business_name,t3.*,t4.minor_name,t5.trainer_name,t6.school_name "
//         . "FROM training AS t3 "
//         . "LEFT JOIN student AS t1 ON t1.citizen_id=t3.citizen_id "
//         . "LEFT JOIN business AS t2 ON t2.business_id=t3.business_id "
//         . "LEFT JOIN minor AS t4 ON t4.minor_id=t1.minor_id "
//         . "LEFT JOIN school AS t6 ON t3.school_id = t6.school_id "
//         . "LEFT JOIN trainer AS t5 ON t5.trainer_id=t3.trainer_id "
//         . " WHERE t3.school_id = " . pq($school_id);
//     $result = mysqli_query($db, $query);
// //    var_dump($query);
// //    die();
//     $traininglist = array();
//     while ($training = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
//         $traininglist[] = $training;
//     }
//     return $traininglist;
// }

function get_total()
{
    global $db;
    //    $val = $group."%";
    $query = "SELECT * FROM training WHERE "
        . "school_id = " . pq($school_id) . " ORDER BY training_id";
    $result = mysqli_query($db, $query);
    return mysqli_num_rows($result);
}




// function do_delete($training_id)
// {
//     global $db;
//     if (empty($training_id)) {
//         set_err('app/ค่าพารามิเตอร์ไม่ถูกต้อง');
//         redirect('app/training/list');
//     }
//     $query = "DELETE FROM training WHERE training_id =" . pq($training_id);
//     mysqli_query($db, $query);
//     if (mysqli_affected_rows($db)) {
//         set_info('app/ลบข้อมูลสำเร็จ');
//     }
//     redirect('app/training/list');
// }
