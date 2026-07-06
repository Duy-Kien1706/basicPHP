<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản lý sinh viên</title>
</head>
<body>

<?php

$danhSach = [
    [
        "ma"=>"SV01",
        "ten"=>"Nguyen Van A",
        "tuoi"=>20,
        "lop"=>"CNTT1",
        "diem"=>8.5
    ],
    [
        "ma"=>"SV02",
        "ten"=>"Tran Thi B",
        "tuoi"=>19,
        "lop"=>"CNTT2",
        "diem"=>7
    ],
    [
        "ma"=>"SV03",
        "ten"=>"Le Van C",
        "tuoi"=>21,
        "lop"=>"CNTT1",
        "diem"=>9
    ]
];

echo "<h2>1. Danh sách sinh viên</h2>";

foreach($danhSach as $sv){
    echo "Mã: ".$sv["ma"]."<br>";
    echo "Tên: ".$sv["ten"]."<br>";
    echo "Tuổi: ".$sv["tuoi"]."<br>";
    echo "Lớp: ".$sv["lop"]."<br>";
    echo "Điểm: ".$sv["diem"]."<br><br>";
}

echo "<hr>";

echo "<h2>2. Thêm sinh viên</h2>";

$danhSach[] = [
    "ma"=>"SV04",
    "ten"=>"Pham Van D",
    "tuoi"=>22,
    "lop"=>"CNTT3",
    "diem"=>6
];

foreach($danhSach as $sv){
    echo $sv["ma"]." - ".$sv["ten"]."<br>";
}

echo "<hr>";

echo "<h2>3. Sửa thông tin SV02</h2>";

foreach($danhSach as &$sv){
    if($sv["ma"]=="SV02"){
        $sv["diem"]=10;
    }
}
unset($sv);

foreach($danhSach as $sv){
    echo $sv["ma"]." : ".$sv["diem"]."<br>";
}

echo "<hr>";

echo "<h2>4. Xóa SV03</h2>";

foreach($danhSach as $i=>$sv){
    if($sv["ma"]=="SV03"){
        unset($danhSach[$i]);
    }
}

foreach($danhSach as $sv){
    echo $sv["ma"]."<br>";
}

echo "<hr>";

echo "<h2>5. Tìm theo mã</h2>";

foreach($danhSach as $sv){
    if($sv["ma"]=="SV01"){
        echo "Tìm thấy: ".$sv["ten"];
    }
}

echo "<hr>";

echo "<h2>6. Tìm theo tên</h2>";

foreach($danhSach as $sv){
    if($sv["ten"]=="Pham Van D"){
        echo "Mã sinh viên: ".$sv["ma"];
    }
}

echo "<hr>";

echo "<h2>7. Sinh viên điểm cao nhất</h2>";

$max = $danhSach[array_key_first($danhSach)];

foreach($danhSach as $sv){
    if($sv["diem"]>$max["diem"]){
        $max=$sv;
    }
}

echo $max["ten"]." - ".$max["diem"];

echo "<hr>";

echo "<h2>8. Điểm trung bình</h2>";

$tong=0;

foreach($danhSach as $sv){
    $tong += $sv["diem"];
}

echo $tong/count($danhSach);

echo "<hr>";

echo "<h2>9. Sắp xếp tăng theo điểm</h2>";

$danhSach = array_values($danhSach);

for($i=0;$i<count($danhSach)-1;$i++){
    for($j=$i+1;$j<count($danhSach);$j++){
        if($danhSach[$i]["diem"]>$danhSach[$j]["diem"]){
            $temp=$danhSach[$i];
            $danhSach[$i]=$danhSach[$j];
            $danhSach[$j]=$temp;
        }
    }
}

foreach($danhSach as $sv){
    echo $sv["ten"]." - ".$sv["diem"]."<br>";
}

echo "<hr>";

echo "<h2>10. Sắp xếp theo tên</h2>";

for($i=0;$i<count($danhSach)-1;$i++){
    for($j=$i+1;$j<count($danhSach);$j++){
        if(strcmp($danhSach[$i]["ten"],$danhSach[$j]["ten"])>0){
            $temp=$danhSach[$i];
            $danhSach[$i]=$danhSach[$j];
            $danhSach[$j]=$temp;
        }
    }
}

foreach($danhSach as $sv){
    echo $sv["ten"]."<br>";
}

echo "<hr>";

echo "<h2>11. Đếm sinh viên đạt</h2>";

$dem=0;

foreach($danhSach as $sv){
    if($sv["diem"]>=5){
        $dem++;
    }
}

echo "Có ".$dem." sinh viên đạt.";

echo "<hr>";

echo "<h2>12. Thống kê theo lớp</h2>";

$thongKe=[];

foreach($danhSach as $sv){
    $lop=$sv["lop"];

    if(isset($thongKe[$lop])){
        $thongKe[$lop]++;
    }else{
        $thongKe[$lop]=1;
    }
}

foreach($thongKe as $lop=>$soLuong){
    echo $lop." : ".$soLuong." sinh viên<br>";
}

?>

</body>
</html>