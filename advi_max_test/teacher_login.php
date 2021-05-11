<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>ระบบจัดการกิจกรรมโฮมรูม_ครูที่ปรึกษา</title>
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
  </head>
        
  <body>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.min.js" integrity="sha384-lpyLfhYuitXl2zRZ5Bn2fqnhNAKOAaM/0Kr9laMspuaMiZfGmfwRNFh8HlMy49eQ" crossorigin="anonymous"></script>

    <div class="alert alert-primary"> 
        <div class="btn-group">
          <button class="btn">หน้าหลัก</button>
          <button class="btn">เช็กกิจกรรมโฮมรูม</button>
          <button class="btn">ตรวจสอบข้อมูล</button>
          <button class="btn">ตรวจสอบข้อมูลที่ปรึกษา</button>
        </div>
      </div>
    
    <div class="container">
      <div class="card deck">
        <div class="card border-primary" style="width: 500px;">
          <div class="card-body">
            <table align="center">
              <tr>
                <td align="center"><img src = "pictures/i_academic_225x150.png"></td>
              </tr>
              <tr>
                <td align="center">ระบบบริหารจัดการงานครูที่ปรึกษา</td>
              </tr>
              <tr>
                <td align="center">จัดการกิจกรรมโฮมรูมสำหรับครูที่ปรึกษา</td>
              </tr>
              <tr>
                <td>
                  <div class="cintainer">
                    <div class="row">
                      <div class="col">
                        <form name="t_login" action="check_login.php" method="post">
                        <br>
                          <div class="form-group">
                            <label for = "txt_User_id">ชื่อผู้ใช้งาน :</label>
                            <input type="text" name="user_id" id="user_id" class="form-control" placeholder="ป้อนชื่อผู้ใช้งาน">
                          </div>
                          <div class="form-group">
                            <label for="txt_pass">รหัสผ่าน :</label>
                            <input type="password" name="user_pass" id="user_pass" class="form-control" placeholder="รหัสผ่าน">
                          </div>
                          <div class="form-group">
                            <button type="submit" class="btn btn-success text-white">เข้าสู่ระบบ</button>
                            <button type="reset" class="btn btn-warning text-white">ล้างข้อมูล</button>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                </td>
              </tr>
              
            </table>
          </div>
        </div>
      </div>
    </div>

  </body>
</html>