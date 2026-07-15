<?php


setcookie("NguyenDuyKien",'2000',time()+3600);
setcookie("cookie2",'Hẹ hẹ',time()+3600);
// cách xóa cookie 
setcookie("cookie2",'Hẹ hẹ',time()-3600);

if(isset($_COOKIE['NguyenDuyKien'])){
    echo "<pre>";
    print_r($_COOKIE);
    echo  "<pre>";
}