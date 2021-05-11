<?php
    session_start();
    require_once("dbconnect.php");

    $tch_Uname = mysqli_real_escape_string($link, $_POST['user_id']);
    $tch_pass = mysqli_real_escape_string($link, $_POST['user_pass']);

    $sql = "SELECT * FROM general_user WHERE general_user.user_id = '".$tch_Uname."' AND general_user.user_pass = '".$tch_pass."';";
    $objQuery = mysqli_query($link, $sql);
    $result = mysqli_fetch_array($objQuery);

        if(!$result) {
            echo '<script type="text/javascript">';
            echo ' alert("รหัสผ่านหรือผู้ใช้งานเข้าระบบไม่ถูกต้อง") ';
            echo '</script>';
            header("refresh: 1; url=teacher_login.php");
        }
        else {
            if($result['login_status'] == "1") {
                echo '<script type="text/javascript">';
                echo ' alert("ผู้ใช้ทำการล็อกอินเข้าสู่ระบบแล้ว ไม่ต้องล็อกอินซ้ำ") ';
                echo '</script>';
                header("refresh: 1; url=advisor_view.php");
            }
            else {
                //เปลี่ยนแปลงสถานะล็อกอิน
                $sql = "UPDATE general_user SET login_status = '1', login_last_time = NOW() WHERE general_user.user_id = '".$result['user_id']."';";
                $query = mysqli_query($link, $sql);

                //รับ session ค่า user_id
                $_SESSION['user_id'] = $result['user_id'];
                session_write_close();
                header("Location: advisor_view.php");
                    /*
                    if($result["user_position"] == "ครู") {
                        header("location:advisor_view.php");
                    }
                    elseif($result["user_position"] == "เจ้าหน้าที่") {
                        header("location:officer_view.php");
                    }
                    elseif($result["user_position"] == "หัวหน้าสาขาวิชา") {
                        header("location:leaderTch_view.php");
                    }
                    elseif($result["user_position"] == "หัวหน้างานครูที่ปรึกษา") {
                        header("location:leaderAvs_view.php");
                    }
                    elseif($result["user_position"] == "ผู้บริหาร") {
                        header("location:boss_view.php");
                    }
                    else {
                        echo "สิทธิ์การเข้าถึงข้อมูลผิดพลาด โปรดตรวจสอบอีกครั้ง";
                        header("refresh: 5; url = teacher_login.php");
                    } */
            }
        }
    mysqli_close($link);
?>