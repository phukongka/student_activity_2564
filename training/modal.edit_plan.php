<?php
if (!defined('BASE_PATH'))
    exit('No direct script access allowed');
?>
<!-- modal -->
<div class="modal fade" id="modal-edit-plan">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">แก้ไขข้อมูลแผนการฝึกงาน</h4>
            </div>
            <div class="modal-body">
                    <!-- form start -->
                    <form class="form-horizontal" id="plan_edit_form" method="post" action="">
                        <input type="hidden" id="m_id" name="m_id" />

                        <div class="form-group">
                            <label class="control-label col-md-3" for="m_start_training">เลือกวันเริ่มต้น</label>
                            <div class="col-md-5">
                                <div class="input-group">

                                    <div class="input-group-addon">
                                        <i class="fa fa-calendar"></i>
                                    </div>
                                    <input type="text" class="form-control pull-right" id="m_start_training">
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-3" for="m_end_training">เลือกวันสิ้นสุด</label>
                            <div class="col-md-5">
                                <div class="input-group">

                                    <div class="input-group-addon">
                                        <i class="fa fa-calendar"></i>
                                    </div>
                                    <input type="text" class="form-control pull-right" id="m_end_training">
                                </div>
                            </div>
                        </div>   
                        <div class="form-group">
                            <label class="col-md-3"></label>
                            <div class="offset-md-3">
                                <div class="col-md-4">
                                <button type="button" class="form-control btn btn-block btn-primary" id="submit_edit">บันทึกการแก้ไขข้อมูล</button>                    
                                </div>
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
