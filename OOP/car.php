<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    class Car{
        public int $color;
        public int $brand;
        public function run(){
            echo "ô tô đang chạy";
        }
    }
    $car1 = new Car();
    $car1->run();
    $car2 = new Car();
     ?>
</body>
</html>