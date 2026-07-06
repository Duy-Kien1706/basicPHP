<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vòng lặp</title>
</head>
<body>
    <div>
        <h1>Bài 13</h1>
        <?php 
        for($i = 0; $i<100; $i++){
            echo $i+1 . " ";
        }
         ?>
    </div>

    <div>
        <h1>Bài 14</h1>
        <?php 
        $tong = 1;
        for($i = 2; $i<=100; $i+=2){
            $tong+=$i;
        }
        echo "Tổng = ".$tong;
         ?>
    </div>

    <div>
        <h1>Bài 15</h1>
        <?php 
        $tong = 1;
        for($i = 2; $i<=100; $i++){
            $tong+=$i**2;
        }
        echo "Tổng = ".$tong;
         ?>
    </div>

    <div>
        <h1>Bài 16</h1>
        <?php 
        
        echo "<h3>Bảng cửu chương 5</h3>";

        for($i = 1; $i<=10; $i++){
            echo $i . "*5 = ". $i*5 . "<br>";
        }
         ?>
    </div>

    <div>
        <h1>Bài 17</h1>
        <?php 
        
        echo "<h3>Bảng cửu chương</h3>";

        for($i = 1; $i<=10; $i++){
           for($j = 1; $j <=10; $j++){
                echo $j. " * " .$i. " = ". $j*$i . "<br>"; 
           }
           echo "<br>";
        }
         ?>
    </div>

    <div>
        <h1>Bài 18</h1>
        <?php 
        $a = 5;
        $giaiThua = 1;
        for($i = 1; $i<=$a; $i++){
           $giaiThua *= $i;
        }
        echo "Giai thừa của " . $a . " là: " .$giaiThua;
         ?>
    </div>

    <div>
        <h1>Bài 19</h1>
        <?php 

        $a = 20;
        $check = true;
        echo "a = ". $a . "<br>";
        for($i = 2; $i<$a; $i++){
            if($a%$i==0){
                $check = false;
                echo "a không phải số nguyên tố";
                break;
            }
        }
        if($check) echo "a là số nguyên tố";
        
         ?>
    </div>

    <div>
        <h1>Bài 20</h1>
        <?php 


        echo "Các số nguyên tố từ 1 đến 100 là: ";
        for($i = 2; $i<= 100; $i++){
          $laSoNguyenTo = true;
          for($j = 2;$j<$i;$j++){
                if($i%$j==0){
                    $laSoNguyenTo = false;
                    break;
                }
          }
          if($laSoNguyenTo){
            echo $i . " ";
          }
        }
        
         ?>
    </div>
</body>
</html>