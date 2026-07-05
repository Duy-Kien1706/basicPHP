<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>bài 8</title>
</head>
<body>
    <?php 
        $score = -8;
        if($score < 10  && $score >=9){
            echo "Xuất sắc";
        }
        elseif($score <9 && $score >=8){
            echo "Giỏi";
        }
        elseif($score <8 && $score >=6.5){
            echo "Khá";
        }
        elseif($score <6.5 && $score >=5){
            echo "Trung bình";
        }
        elseif($score < 5 && $score >=0){
            echo "Yếu";
        }
        else{
            echo "Điểm không hợp lệ";
        }

     ?>
</body>
</html>