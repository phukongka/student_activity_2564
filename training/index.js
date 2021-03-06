$(function() {
    //  business form
    var province_code;
    var district_code;
    var subdistrict_code;
    var token = '<?php echo $token ?>';
    var table;
    $('.box-body img').addClass('img-responsive');
    $('.delete').click(function() {
        return confirm('ยืนยันลบข้อมูล')
    });
    $('#btnInsert').click(function() {
        //do stuff
        action = "insert";
    });
    $('#btnEdit').click(function() {
        //do stuff
        action = "edit";
    });

    $("#reset").click(function() {
        //            alert("xxxx");
        $("#message").hide();
    });
    if ($("#business_id").val() == "") {
        $("#btnEdit").hide();
    } else {
        $("#btnEdit").show();
    }
    $('#check_zone_id').click(function() {
        var url = 'ajax/business/get_business.php'
        table = $('#business_list').DataTable({
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
                "type": "POST",
                "data": function(d) {
                    d.zone_id = $('#zone_id').val();
                }
            },
            "columns": [
                { "data": "business_id" },
                { "data": "business_name" },
                { "data": "province_name" },
                { "data": "trainers" },
                { "data": "button" },
                // {
                //   "data": null,
                //   "defaultContent": '<button type="button" class="btn btn-warning btn-sm btn-edit" \
                //             data-toggle="modal" data-target="#formModal"><i class="fa fa-pencil"></i></button> \
                //             <button type="button" class="btn btn-danger btn-sm btn-delete"><i class="fa fa-trash-o"></i></button>'
                // }
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
    });

    $("#signupForm").validate({
        rules: {
            firstname: "required",
            lastname: "required",
            username: {
                required: true,
                minlength: 2
            },
            password: {
                required: true,
                minlength: 5
            },
            confirm_password: {
                required: true,
                minlength: 5,
                equalTo: "#password"
            },
            email: {
                required: true,
                email: true
            },
            agree: "required"
        },
        messages: {
            firstname: "Please enter your firstname",
            lastname: "Please enter your lastname",
            username: {
                required: "Please enter a username",
                minlength: "Your username must consist of at least 2 characters"
            },
            password: {
                required: "Please provide a password",
                minlength: "Your password must be at least 5 characters long"
            },
            confirm_password: {
                required: "Please provide a password",
                minlength: "Your password must be at least 5 characters long",
                equalTo: "Please enter the same password as above"
            },
            email: "Please enter a valid email address",
            agree: "Please accept our policy"
        },
        errorElement: "em",
        errorPlacement: function(error, element) {
            // Add the `help-block` class to the error element
            error.addClass("help-block");

            if (element.prop("type") === "checkbox") {
                error.insertAfter(element.parent("label"));
            } else {
                error.insertAfter(element);
            }
        },
        highlight: function(element, errorClass, validClass) {
            $(element).parents(".col-sm-5").addClass("has-error").removeClass("has-success");
        },
        unhighlight: function(element, errorClass, validClass) {
            $(element).parents(".col-sm-5").addClass("has-success").removeClass("has-error");
        }
    });


    // $("#businessForm").validate({
    //   rules: {
    //     //                        business_name: "required",
    //     business_name: {
    //       required: true,
    //       minlength: 4
    //     },
    //     address: "required",
    //     province_code: "required",
    //     district_code: "required",
    //     subdistrict_code: "required",
    //     industrial_estate_id: "required",
    //     industrial_gid: "required",
    //     employee_amount_id: "required",
    //     coordinator_telephone: {
    //       required: true,
    //       minlength: 9
    //     },
    //     telephone: {
    //       required: true,
    //       minlength: 9
    //     },
    //     coordinator: {
    //       required: true,
    //       minlength: 3
    //     },
    //     coordinator_position: {
    //       required: true,
    //       minlength: 5,
    //       //                                equalTo: "#password"
    //     },
    //     //                        coordinator_email: {
    //     //                                required: true,
    //     //                                minlength: 5,
    //     ////                                equalTo: "#password"
    //     //                        },
    //     coordinator_email: {
    //       required: true,
    //       email: true
    //     },
    //     //                        agree: "required"
    //   },
    //   messages: {
    //     business_name: "กรุณาใส่ชื่อบริษัท",
    //     address: "กรุณาใส่ที่อยู่",
    //     province_code: "กรุณาเลือกจังหวัด",
    //     district_code: "กรุณาเลือกอำเภอ",
    //     subdistrict_code: "กรุณาเลือกตำบล",
    //     industrial_estate_id: "กรุณาเลือกนิคมอุตฯ",
    //     industrial_gid: "กรุณาเลือกกลุ่มอุตสาหกรรม",
    //     employee_amount_id: "กรุณาเลือกจำนวนลูกจ้าง",
    //     telephone: "กรุณาใส่หมายเลขโทรศัพท์",
    //     coordinator: "กรุณาใส่ชื่อผู้ประสานงาน",
    //     coordinator_telephone: "กรุณาใส่หมายเลขโทรศัพท์",
    //     coordinator_position: "กรุณาใส่ตำแหน่งผู้ประสานงาน",
    //     //                        coordinator_email: {
    //     //                                required: true,
    //     //                                minlength: 5,
    //     ////                                equalTo: "#password"
    //     //                        },
    //     coordinator_email: "กรุณาใส่อีเมล์",
    //   },

    //   errorElement: "em",
    //   errorPlacement: function (error, element) {
    //     // Add the `help-block` class to the error element
    //     error.addClass("help-block");

    //     if (element.prop("type") === "checkbox") {
    //       error.insertAfter(element.parent("label"));
    //     } else {
    //       error.insertAfter(element);
    //     }
    //   },
    //   highlight: function (element, errorClass, validClass) {
    //     $(element).parents(".col-sm-5").addClass("has-error").removeClass("has-success");
    //   },
    //   unhighlight: function (element, errorClass, validClass) {
    //     $(element).parents(".col-sm-5").addClass("has-success").removeClass("has-error");
    //   },
    //   submitHandler: function (form) {
    //     if (action === "insert") {
    //       insertBusiness();
    //     }
    //     if (action === "edit") {
    //       editBusiness();
    //     }

    //   },
    // });

    //เรียกใช้งาน Select2
    $(".select2").select2();
    //ดึงข้อมูล province จากไฟล์ get_data.php
    // $.ajax({
    //   url: "<?php echo SITE_URL ?>ajax/get_data.php",
    //   dataType: "json", //กำหนดให้มีรูปแบบเป็น Json
    //   data: {
    //     show_province: 'show_province',
    //     token: '<?php echo $token ?>'
    //   }, //ส่งค่าตัวแปร show_province เพื่อดึงข้อมูล จังหวัด
    //   success: function (data) {

    //     //วนลูปแสดงข้อมูล ที่ได้จาก ตัวแปร data
    //     $.each(data, function (index, value) {
    //       //แทรก Elements ใน id province  ด้วยคำสั่ง append
    //       $("#province_code").append("<option value='" + value.id + "'> " + value.name + "</option>");
    //     });
    //     $("#province_code").val(provice_code);
    //     $("#province_code").change();
    //   }
    // });


    //แสดงข้อมูล อำเภอ  โดยใช้คำสั่ง change จะทำงานกรณีมีการเปลี่ยนแปลงที่ #province
    // $("#province_code").change(function () {
    //   //            alert('district');
    //   //กำหนดให้ ตัวแปร province มีค่าเท่ากับ ค่าของ #province ที่กำลังถูกเลือกในขณะนั้น
    //   var province_code = $(this).val();

    //   $.ajax({
    //     url: "<?php echo SITE_URL ?>ajax/get_data.php",
    //     dataType: "json", //กำหนดให้มีรูปแบบเป็น Json
    //     data: {
    //       province_code: province_code,
    //       token: "<?php echo $token ?>"
    //     }, //ส่งค่าตัวแปร province_code เพื่อดึงข้อมูล อำเภอ ที่มี province_code เท่ากับค่าที่ส่งไป
    //     success: function (data) {

    //       //กำหนดให้ข้อมูลใน #amphur เป็นค่าว่าง
    //       $("#district_code").text("");

    //       //วนลูปแสดงข้อมูล ที่ได้จาก ตัวแปร data  
    //       $.each(data, function (index, value) {

    //         //แทรก Elements ข้อมูลที่ได้  ใน id amphur  ด้วยคำสั่ง append
    //         $("#district_code").append("<option value='" + value.id + "'> " + value.name + "</option>");
    //       });
    //       $("#district_code").val(district_code);
    //       $("#district_code").change();
    //     }
    //   });

    // });

    //แสดงข้อมูลตำบล โดยใช้คำสั่ง change จะทำงานกรณีมีการเปลี่ยนแปลงที่  #amphur
    // $("#district_code").change(function () {
    //   //กำหนดให้ ตัวแปร district_code มีค่าเท่ากับ ค่าของ  #amphur ที่กำลังถูกเลือกในขณะนั้น
    //   var district_code = $(this).val();
    //   $.ajax({
    //     url: "ajax/get_data.php",
    //     dataType: "json", //กำหนดให้มีรูปแบบเป็น Json
    //     data: {
    //       district_code: district_code,
    //       token: "<?php echo $token ?>"
    //     }, //ส่งค่าตัวแปร district_code เพื่อดึงข้อมูล ตำบล ที่มี district_code เท่ากับค่าที่ส่งไป
    //     success: function (data) {
    //       //                                console.log(JSON.stringify(data))
    //       //กำหนดให้ข้อมูลใน #district เป็นค่าว่าง
    //       $("#subdistrict_code").text("");

    //       //วนลูปแสดงข้อมูล ที่ได้จาก ตัวแปร data  
    //       $.each(data, function (index, value) {
    //         //แทรก Elements ข้อมูลที่ได้  ใน id district  ด้วยคำสั่ง append
    //         $("#subdistrict_code").append("<option value='" + value.id + "'> " + value.name + "</option>");

    //       });
    //       $("#subdistrict_code").val(subdistrict_code);
    //       $("#subdistrict_code").change();
    //     }
    //   });

    // });

    //คำสั่ง change จะทำงานกรณีมีการเปลี่ยนแปลงที่  #district 
    // $("#subdistrict_code").change(function () {
    //   var subdistrict_code = $(this).val();
    //   $.ajax({
    //     url: "ajax/get_data.php",
    //     dataType: "json", //กำหนดให้มีรูปแบบเป็น Json
    //     data: {
    //       subdistrict_code: subdistrict_code,
    //       token: "<?php echo $token ?>"
    //     }, //ส่งค่าตัวแปร district_code เพื่อดึงข้อมูล ตำบล ที่มี district_code เท่ากับค่าที่ส่งไป
    //     success: function (data) {
    //       //วนลูปแสดงข้อมูล ที่ได้จาก ตัวแปร data  
    //       $.each(data, function (index, value) {
    //         $("#postcode").val(value.id);
    //       });
    //     }
    //   });

    //   //นำข้อมูลรายการ จังหวัด ที่เลือก มาใส่ไว้ในตัวแปร province
    //   // var province = $("#province_code option:selected").text();

    //   //นำข้อมูลรายการ อำเภอ ที่เลือก มาใส่ไว้ในตัวแปร amphur
    //   // var district = $("#district_code option:selected").text();

    //   //นำข้อมูลรายการ ตำบล ที่เลือก มาใส่ไว้ในตัวแปร district
    //   // var subdistrict = $("#subdistrict_code option:selected").text();

    //   //ใช้คำสั่ง alert แสดงข้อมูลที่ได้
    //   //                alert("คุณได้เลือก :  จังหวัด : " + province + " อำเภอ : "+ amphur + "  ตำบล : " + district );
    // });

    // get data business all
    // alert('test');
    // var url = "ajax/business/get_business.php";
    // var table = $('#business_list').DataTable({
    //   "destroy": true,
    //   "paging": true,
    //   "lengthChange": true,
    //   "searching": true,
    //   "ordering": true,
    //   "info": true,
    //   "responsive": true,
    //   "autoWidth": false,
    //   "pageLength": 10,
    //   "ajax": {
    //     "url": url,
    //     "type": "get",
    //     "data": function (d) {
    //       d.token = "<?php echo $token ?>"
    //       d.zone_id = $('#zone_id').val();
    //     }
    //   },
    //   "columns": [{
    //     "data": "business_id"
    //   },
    //   {
    //     "data": "business_name"
    //   },
    //   {
    //     "data": "province_name"
    //   },
    //   {
    //     "data": null,
    //     "defaultContent": '<button type="button" class="btn btn-warning btn-sm btn-edit" \
    //               data-toggle="modal" data-target="#formModal"><i class="fa fa-pencil"></i></button> \
    //               <button type="button" class="btn btn-danger btn-sm btn-delete"><i class="fa fa-trash-o"></i></button>'
    //   }
    //   ],
    //   "language": {
    //     "lengthMenu": "แสดง _MENU_ แถวต่อหน้า",
    //     "zeroRecords": "ไม่มีข้อมูล",
    //     "info": "กำลังแสดงข้อมูล _START_ ถึง _END_ จาก _TOTAL_ รายการ",
    //     "search": "ค้นหา:",
    //     "infoEmpty": "ไม่มีข้อมูลแสดง",
    //     "infoFiltered": "(ค้นหาจาก _MAX_ total records)",
    //     "paginate": {
    //       "first": "หน้าแรก",
    //       "last": "หน้าสุดท้าย",
    //       "next": "หน้าต่อไป",
    //       "previous": "หน้าก่อน"
    //     }
    //   },
    //   // Display total Record
    //   "initComplete": function (settings, json) {
    //     var info = this.api().page.info();
    //     $("#business-total").html(info.recordsTotal);
    //   }
    // });

    // var info = table.page.info();
    //    setInterval( function  () {
    //        table.ajax.reload(null, false);
    //        $("#business-total").html(table.data().count());
    //    }, 10000);
    //    $("#business-total").html(info.recordsTotal);
    $("#boxInsert").click(function() {
        //           alert('insert')
        if ($("#business_id").val() === "") {
            $("#btnInsert").show();
            $("#btnEdit").hide();
        } else {
            $("#btnInsert").show();
            $("#btnEdit").show();
        }

        // get data from api for edit
        var url = './ajax/business/get_business.php';
        var id = $(this).parent().siblings(":first").text();
        var data = {
            business_id: id,
            token: "<?php echo $token ?>"
        };
        $.getJSON(url, data, function(data, status) {
            //Do stuff with the JSON data
            $.each(data, function(key, val) {
                //            console.log(key)
                $.each(val, function(k, v) {
                    if (k === "province_code" || k === "district_code" || k === "subdistrict_code") {
                        console.log(k + ":" + v);
                        if (k === "district_code") {
                            district_code = v;
                        } else if (k === "subdistrict_code") {
                            subdistrict_code = v;
                        }

                        $("#" + k).val(v);
                        $("#" + k).change();
                    } else {
                        $("#" + k).val(v);
                    }
                });
            });

        });
        table.ajax.reload(null, false);
        $("#business-total").html(table.data().count());
        // fix search box in modal can't focus
        $.fn.modal.Constructor.prototype.enforceFocus = function() {};
    });

    // edit data
    $("#business_list tbody").on('click', '.btn-edit', function() {
        $("#btnInsert").hide();
        $("#btnEdit").show();
        // get data from api
        var url = './ajax/business/get_business.php';
        var id = $(this).parent().siblings(":first").text();
        var data = {
            business_id: id,
            // token: "<?php echo $token ?>"
        };
        $.getJSON(url, data, function(data, status) {
            //Do stuff with the JSON data
            $.each(data, function(key, val) {
                //            console.log(key)
                $.each(val, function(k, v) {
                    if (k === "province_code" || k === "district_code" || k === "subdistrict_code") {
                        console.log(k + ":" + v);
                        if (k === "district_code") {
                            district_code = v;
                        } else if (k === "subdistrict_code") {
                            subdistrict_code = v;
                        }

                        $("#" + k).val(v);
                        $("#" + k).change();
                    } else {
                        $("#" + k).val(v);
                    }
                });
            });

        });
        table.ajax.reload(null, false);
        //        $("#business-total").html(table.data().count());
        // fix search box in modal can't focus
        $.fn.modal.Constructor.prototype.enforceFocus = function() {};
    });

    // delete data
    $("#business_list").on('click', '.btn-delete', function() {
        event.preventDefault();
        //        alert('test');
        //        
        if ($(this).parents('tr').hasClass('active')) {
            $(this).parents('tr').removeClass('active');
            //            alert('1');
        } else {
            table.$('tr.active').removeClass('active');
            $(this).parents('tr').addClass('active');
            //            alert('2');
        }

        //        table.row().remove($(this)).parents('tr')).draw( false );
        //        table.row.remove($(this).parents('tr')).draw();


        // get data from api
        if (!confirm('ยืนยันการลบข้อมูล!'))
            return;
        var url = './ajax/business/del_business.php';
        var id = $(this).parent().siblings(":first").text();
        var data = {
            business_id: id,
            // token: "<?php echo $token ?>"
        };
        //
        $.getJSON(url, data, function(data, status) {
            //Do stuff with the JSON data
            if (status === 'success') {
                //                console.log(data);

                table.row('.active').remove().draw(false);
                table.ajax.reload(null, false);
                $("#message").text(data).addClass("alert alert-success").show().delay(5000).fadeOut();
                // Display total Record
                // $("#business-total").html(table.data().count());
            }
            //    
        });

        // set data to html element

        //                    $("#hello").text($(this).parent().siblings(":first").text());
    });

    //    $(document).on('click', '.btn-insert', function () {
    //        // get data from api
    //        $('#btnForm').addClass();
    //    });    
    // get data to datatable
    function insertBusiness() {
        $.ajax({
            type: "POST",
            url: "ajax/business/post_business.php",
            data: $("#businessForm").serialize(),
            //                        {student_name:student_name,student_roll_no:student_roll_no,student_class:student_class},
            dataType: "JSON",
            success: function(data) {
                //                alert(data.message);
                $("#show-message").html(data.message).addClass("alert alert-success").show().delay(5000).fadeOut();
                $("#business_id").val(data.business_id);
                table.ajax.reload(null, false);
                $("#business-total").html(table.data().count());
            },
            error: function(err) {
                $("#show-message").html(data).addClass("alert alert-danger").show().delay(5000).fadeOut();
            }
        });

    }

    function editBusiness() {
        $.ajax({
            type: "POST",
            url: "ajax/business/put_business.php",
            data: $("#businessForm").serialize(),
            dataType: "JSON",
            success: function(data) {
                //                alert(data.message);
                $("#show-message").html(data.message).addClass("alert alert-success").show().delay(5000).fadeOut();
                table.ajax.reload(null, false);
            },
            error: function(err) {
                $("#show-message").html(data).addClass("alert alert-danger").show().delay(5000).fadeOut();
            }
        });
    }


});