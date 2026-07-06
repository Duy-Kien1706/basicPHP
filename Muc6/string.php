<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hàm</title>
</head>
<body>

    <div>
        <h1>Bài 26 - Đếm số ký tự</h1>
        <?php
        function demKyTu(string $chuoi){
            return strlen($chuoi);
        }

        $chuoi = "Hello World";
        echo "Chuỗi: " . $chuoi . "<br>";
        echo "Số ký tự: " . demKyTu($chuoi);
        ?>
    </div>

    <hr>

    <div>
        <h1>Bài 27 - Đổi chữ thường thành chữ hoa</h1>
        <?php
        function vietHoa(string $chuoi){
            return strtoupper($chuoi);
        }

        $chuoi = "lap trinh php";
        echo "Chuỗi ban đầu: " . $chuoi . "<br>";
        echo "Sau khi đổi: " . vietHoa($chuoi);
        ?>
    </div>

    <hr>

    <div>
        <h1>Bài 28 - Đếm số nguyên âm</h1>
        <?php
        function demNguyenAm(string $chuoi){
            $dem = 0;

            for($i = 0; $i < strlen($chuoi); $i++){
                $c = strtolower($chuoi[$i]);

                if($c == 'a' || $c == 'e' || $c == 'i' || $c == 'o' || $c == 'u'){
                    $dem++;
                }
            }

            return $dem;
        }

        $chuoi = "Lap Trinh PHP";
        echo "Chuỗi: " . $chuoi . "<br>";
        echo "Số nguyên âm: " . demNguyenAm($chuoi);
        ?>
    </div>

    <hr>

    <div>
        <h1>Bài 29 - Đảo ngược chuỗi</h1>
        <?php
        function daoNguoc(string $chuoi){
            return strrev($chuoi);
        }

        $chuoi = "Hello";
        echo "Chuỗi ban đầu: " . $chuoi . "<br>";
        echo "Chuỗi đảo ngược: " . daoNguoc($chuoi);
        ?>
    </div>

    <hr>

    <div>
        <h1>Bài 30 - Kiểm tra chuỗi đối xứng</h1>
        <?php
        function doiXung(string $chuoi){
            if($chuoi == strrev($chuoi)){
                return true;
            }
            return false;
        }

        $chuoi = "madam";

        if(doiXung($chuoi)){
            echo $chuoi . " là chuỗi đối xứng";
        }
        else{
            echo $chuoi . " không phải chuỗi đối xứng";
        }
        ?>
    </div>

</body>
</html>