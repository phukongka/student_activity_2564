<?php
 date_default_timezone_set('Asia/Bangkok');
 $days = ['อาทิตย์', 'จันทร์', 'อังคาร', 'พุธ', 'พฤหัสบดี', 'ศุกร์', 'เสาร์'];
 $months = [1=>'มกราคม', 'กุมภาพันธ์', 'มีนาคม', 'เมษายน', 'พฤษภาคม', 'มิถุนายน', 'กรกฎาคม', 'สิงหาคม', 'กันยายน', 'ตุลาคม', 'พฤศจิกายน', 'ธันวาคม'];
 $d = date('w');
 $day = $days[$d];
 $date = date('j');
 $m = date('n');
 $month = $months[$m];
 $year = date('Y') + 543;
?>