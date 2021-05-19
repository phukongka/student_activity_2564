      <!-- modal -->
      <div class="modal fade" id="modal_main_menu">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title">กรอกข้อมูลแผนการฝึก</h4>
            </div>
            <div class="modal-body">

              <form class="form-horizontal" id="main_menu_form" method="post" action="">
                <input type="hidden" id="m_id">
                <div class="form-group">
                  <label class="control-label col-md-3" for="m_item">หัวข้ออ้างอิงเมนูหลัก</label>
                  <div class="col-md-5">
                    <input type="text" class="form-control" id="m_item" name="m_item" placeholder="หัวข้ออ้างอิง">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-3" for="m_title">ชื่อเมนู</label>
                  <div class="col-md-5">
                    <input type="text" class="form-control" id="m_title" name="m_title" placeholder="ชื่อเมนู">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-3" for="m_url">m_url</label>
                  <div class="col-md-5">
                    <input type="text" class="form-control" id="m_url" name="m_url" placeholder="/app/user/login">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-3" for="m_icon">Icon Class</label>
                  <div class="col-md-5">
                    <input type="text" class="form-control" id="m_icon" name="m_icon" placeholder="fa fa-user">
                  </div>
                </div>

                <div class="form-group">
              <label class="control-label col-md-3" for="m_cond">เงื่อนไข</label>
              <div class="col-md-5">
                <select name="m_cond" class="form-control" id="m_cond">
                  <?php
                  $options = array("acl" => "acl", "true" => "true", "is_authen" => "is_authen", "!is_authen" => "!is_authen");
                  echo gen_option($options, 'acl');
                  ?>
                </select>
                <!-- <input type="text" class="form-control" id="m_cond" name="m_cond" placeholder="acl | is_authen | true"> -->
              </div>
            </div>
                <div class="form-group">
                  <label class="control-label col-md-3" for="main_menu">เลือกชนิดเมนูหลัก</label>
                  <div class="col-md-5">
                    <select class="form-control" id='menu_type' name="menu_type">
                      <?php
                      $opts =  array(
                        'M' => 'เมนูหลัก',
                        'D' => 'ลิงค์ภายใน',
                        'E' => 'ลิ้งค์ภายนอก',
                      );
                      echo gen_option($opts, 'M');
                      ?>
                    </select>
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-md-3" for="m_weight">ลำดับการแสดงผล</label>
                  <div class="col-md-5">
                    <input type="text" class="form-control" id="m_weight" name="m_weight" placeholder="1 คือแสดงก่อน">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-md-3"></label>
                  <div class="offset-md-3">
                    <div class="col-md-3">
                      <button type="submit" class="form-control btn btn-block btn-primary" id="submit_main_menu">บันทึกข้อมูล</button>
                    </div>
                    <div class="col-md-3">
                      <button type="reset" class="form-control btn btn-block btn-warning" id="reset_main_menu">ยกเลิกข้อมูล</button>
                    </div>
                  </div>
                </div>
                <div id="modal-form-alert"></div>
              </form>

              <div class="table-responsive">
                <table id="main_menu_list" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th>รหัส</th>
                      <th>Title</th>
                      <th>url</th>
                      <th>เงื่อนไข</th>
                      <th>ดำเนินการ</th>
                    </tr>
                  </thead>
                  <tbody>



                  </tbody>
                  <tfoot>
                    <tr>
                      <th>รหัส</th>
                      <th>Title</th>
                      <th>url</th>
                      <th>เงื่อนไข</th>
                      <th>ดำเนินการ</th>
                    </tr>
                  </tfoot>
                </table>
              </div>


              <!-- end form         -->

            </div>
            <!-- <div class="modal-footer">
              <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Save changes</button>
            </div> -->
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->