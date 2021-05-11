<?php
  session_start();
  require_once("dbconnect.php");

    if(!isset($_SESSION['user_id'])) {
      echo '<script type="text/javascript">';
      echo ' alert("กรุณาทำการล็อกอินก่อนเข้าใช้ระบบ") ';
      echo '</script>';
      header("refresh: 1; url=teacher_login.php"); 
    }

    //  อัพเดทสถานะเวลาการล็อกอินล่าสุด
    $sql = "UPDATE general_user SET login_last_time = NOW() WHERE user_id = '".$_SESSION['user_id']."'; ";
    $query = mysqli_query($link, $sql);

    // เก็บค่าผู้ใช้ที่ทำการล็อกอิน ยังมี error อยู่ หาทางแก้ไขอยู่ครับ
    $sql = "SELECT * FROM general_student WHERE user_id = '".$_SESSION['user_id']."';";
    $query = mysqli_query($link, $sql);
    $result = mysqli_fetch_array($query, MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>ข้อมูลครูที่ปรึกษา</title>
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
  </head>
        
  <body>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.min.js" integrity="sha384-lpyLfhYuitXl2zRZ5Bn2fqnhNAKOAaM/0Kr9laMspuaMiZfGmfwRNFh8HlMy49eQ" crossorigin="anonymous"></script>

      <?php
        include "dbconnect.php";
        $sql = "SELECT user_picture.picture_id, user_picture.picture_name FROM general_user, user_picture WHERE user_picture.user_id = general_user.user_id AND general_user.user_id = '1349900045616';";
        $result = mysqli_query($link, $sql);
        //var_dump($result);
      ?>
    
      <div class="alert alert-primary"> 
        <div class="btn-group">
          <button class="btn">หน้าหลัก</button>
          <button class="btn">เช็กกิจกรรมโฮมรูม</button>
          <button class="btn">ตรวจสอบข้อมูล</button>
          <button class="btn">ตรวจสอบข้อมูลที่ปรึกษา</button>
        </div>
      </div>

      <div class="container">
        <div class="card border-danger">
            <div class="card-body">
            <h1 class="card-title">ครูที่ปรึกษา</h1>
                <p class="card-text">ข้อมูลเบื้องต้น</p>
                <?php $row = mysqli_fetch_assoc($result) ?>
                  <table border="1">
                    <tr>
                      <td><img src = "pictures/<?php echo $row['picture_name']; ?>" /></td>
                      <td>
                        <div class="container">
                          <table class="table table-striped">
                            
                          </table>
                        </div>
                      </td>
                    </tr>
                  </table>

            </div>
        </div>
      </div>
  
  </body>
</html>