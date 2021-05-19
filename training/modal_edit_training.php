<?php
if (!defined('BASE_PATH'))
    exit('No direct script access allowed');
?>
<!-- modal -->
<div class="modal fade" id="modal_edit_training">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">แก้ไขข้อมูลการฝึกงาน/ฝึกอาชีพ</h4>
            </div>
            <div class="modal-body">
                    <!-- form start -->
                    <form method="post" class="form-horizontal" id="training-form" action="">
                                <input type="hidden" class="form-control" id="school_id" name="school_id" value="<?php echo $_SESSION['user']['school_id'] ?>">
                                <input type="hidden" class="form-control" id="m_training_id" name="m_training_id" value="">

                                <!-- <div class="form-group">
                                    <label for="business_id" class="col-md-12 control-label">สถานประกอบการ</label>
                                    <div class="col-md-5">
                                        <select class="form-control" id="business_id" name="business_id" data-placeholder="เลือกสถานประกอบการ" style="width: 100%;"></select>
                                    </div>
                                </div> -->

 

                                <!-- <div class="form-group">
                                    <label for="student_list" class="col-md-3 control-label">เลือกนักศึกษา</label>
                                    <div class="col-md-5">
                                        <select class="select2 form-control" id="student_list" name="student_list[]" multiple="multiple" style="width: 50%;>
                                        </select>
                                    </div>
                                </div> -->

                                <!-- <div class="form-group">
                                    <label class="control-label col-md-3" for="std_name">ชื่อนักศึกษา</label>
                                    <div class="col-md-3 ">
                                        <input type="text" class="form-control" id="std_name" placeholder="ชื่อนักศึกษา" name="std_name" value="<?php set_var($std_name) ?>">
                                    </div>
                                    <p class="text-danger" id="student_id_error">*ยังไม่ได้เลือกนักศึกษาครับ</p>
                                </div> -->
                                <!-- Date -->
                                <div class="form-group">
                                    <label class="control-label col-md-3" for="m_contract_date">วันที่ทำสัญญา</label>
                                    
                                    <div class="col-md-9">
                                        <div class="input-group date">
                                            <input type="text" class="form-control pull-right" id="m_contract_date" name="m_contract_date" value="" />
                                            <div class="input-group-addon">
                                                <i class="fa fa-calendar"></i>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- /.input group -->
                                </div>
                                <!-- /.form group -->

                                <div class="form-group">
                                    <label class="control-label col-md-3" for="m_start_date">วันเริ่มต้นการฝึก</label>
                                    <div class="col-md-9">
                                        <div class="input-group date">
                                            <input type="text" class="form-control pull-right" id="m_start_date" name="m_start_date" value="" />
                                            <div class="input-group-addon">
                                                <i class="fa fa-calendar"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.input group -->
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-md-3" for="m_end_date">วันที่สิ้นสุดการฝึก</label>
                                    <div class="col-md-9">
                                        <div class="input-group date">
                                            <input type="text" class="form-control pull-right" id="m_end_date" name="m_end_date" value="" />
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
                                        <button type="submit" class="btn btn-primary" id="submit_edit" name="submit_edit">บันทึกข้อมูล</button>
                                    </div>
                                </div>

                            </form>
                    <!-- form end -->
                <div id="m-form-alert"></div>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
