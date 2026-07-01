<?php
    $a = 10;
    $b = 20;
    $tong = $a + $b;
    echo $a."<br>";
    echo $b."<br>";
    echo "Tổng của a và b là: " . $a+$b ."<br>";
    // trong các ngôn ngữ lập trình khác dùng + để nối chuỗi còn php thì dùng . dấu + chỉ để  cộng các số nếu cố tình + 2 chuỗi
    // thì php sẽ đổi chuỗi đó về số
    // echo "Tổng của a và b là {$a+$b}"; không thể tính toán trực tiếp trong echo
    // cách khác để in ra biến
    echo "Tổng của a và b là $tong";

?>