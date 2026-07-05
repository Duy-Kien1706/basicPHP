<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bài 10</title>
</head>
<body>
    <?php
        $nam = 2012;
        if($nam % 400 === 0){
            echo "nam " . $nam . " là năm nhuận";
        }
        elseif($nam % 100 ===0 && $nam %400 !== 0){
            echo "nam " . $nam . " không phải là năm nhuận";
        }
        elseif($nam % 4 ===0 && $nam %100 !== 0){
            echo "nam " . $nam . " là năm nhuận";
        }
        else{
            echo $nam ." không phải là năm nhuận";
        }

    ?>
</body>
</html>