<?php 
// Session(Phiên làm việc) trong php là nơi lưu trữ thông tin trên server cho mỗi người dùng
//  Khác với cookie (lưu trên trình duyệt)
// session an toàn hơn vì không truy cạp trực tiếp được

// Bắt buộc có
session_start();
 
$_SESSION["NguyenDuyKien"] = "Học lập trình php";
if(isset($_SESSION["NguyenDuyKien"])){
    echo "<pre>";
    print_r($_SESSION);
    echo "<pre>";
}
