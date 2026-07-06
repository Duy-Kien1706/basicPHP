<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hàm</title>
</head>
<body>
    <div>
        <h1>Bài 21</h1>
        <?php 
        function tong(int $a, int $b){
            return $a+$b;
        }
        $a = 5;
        $b = 4;
        echo "Tổng của a và b là: ". tong( $a,$b);
         ?>
    </div>

    <div>
        <h1>Bài 22</h1>
        <?php 
        function max2(int $a, int $b){
            if($b>$a){
                return $b;
            }
            return $a;
        }
        $a = 5;
        $b = 4;
        echo "Số lớn nhất là ". max2($a,$b);
         ?>
    </div>

    <div>
        <h1>Bài 23</h1>
        <?php 
        function isPrime(int $n){
            for($i = 2; $i<$n;$i++){
                if($n%$i==0){
                    return false;
                    break;
                }
            }
            return true;
        }
        $a = 7;
        if(isPrime($a)){
            echo $a . " là số nguyên tố";
        }
        else{
            echo $a . " không phải là số nguyên tố";
        }
         ?>
    </div>

    <div>
        <h1>Bài 24</h1>
        <?php 
        function giaiThua(int $a){
            if($a == 0 || $a == 1){
                return 1;
            }
            return $a * giaiThua($a-1);
        }
        $a = 5;
        echo "Giai thừa của 5 là ". giaiThua($a);
         ?>
    </div>

    <div>
        <h1>Bài 25</h1>
        <?php 
        function tongChuoi(int $n){
            if($n==1){
                return 1;
            }
            return $n+tongChuoi($n-1);
        }
        $a = 5;
        echo "Tổng từ 1 đến 5 là ". tongChuoi($a);
         ?>
    </div>
</body>
</html>