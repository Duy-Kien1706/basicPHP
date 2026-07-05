<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bài 9</title>
</head>
<body>
    <?php 
        $a = 1;
        $b = 2;
        $c = 3;
        if($a > $b && $a > $c){
            echo "a là số lớn nhất";
        }
        elseif($b > $c && $b > $a){
            echo "b là số lớn nhất";
        }
        elseif($c > $a && $c > $b){
            echo "c là số lớn nhất";
        }
        else{
            echo "có ít nhất hai số bằng nhau";
        }
    ?>
</body>
</html>