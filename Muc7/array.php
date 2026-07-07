<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Quản lý sinh viên</title>
</head>

<body>

    <?php

    $danhSach = [
        [
            "ma" => "SV01",
            "ten" => "Nguyễn Văn A",
            "tuoi" => 20,
            "lop" => "CNTT1",
            "diem" => 8.5
        ],
        [
            "ma" => "SV02",
            "ten" => "Nguyễn Văn B",
            "tuoi" => 20,
            "lop" => "CNTT2",
            "diem" => 8.5
        ],
        [
            "ma" => "SV03",
            "ten" => "Nguyễn Văn C",
            "tuoi" => 20,
            "lop" => "CNTT3",
            "diem" => 8.5
        ]
    ];

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $ma = $_POST["id"];
        $name = $_POST["name"];
        $class = $_POST["class"];
        $age = $_POST["age"];
        $score = $_POST["score"];

        $danhSach[] = [
            "ma" => $ma,
            "ten" => $name,
            "lop" => $class,
            "tuoi" => $age,
            "diem" => $score
        ];    

    }

    ?>
    <h2>Thêm sinh viên</h2>
    <form action="" class = "container" method = "POST">
        <div class = "mb-3">
            <label class = "form-label">Mã Sinh Viên</label>
            <input type="text" placeholder="Nhập mã sinh viên" name = "id" class = "form-control">
        </div>
        <div class = "mb-3">
            <label class = "form-label">Tên Sinh Viên</label>
            <input type="text" placeholder="Nhập mã sinh viên" name = "name" class = "form-control">
        </div>
        <div class = "mb-3">
            <label class = "form-label">Tuổi Sinh Viên</label>
            <input type="text" placeholder="Nhập mã sinh viên" name = "age" class = "form-control">
        </div>
        <div class = "mb-3">
            <label class = "form-label">Lớp Sinh Viên</label>
            <input type="text" placeholder="Nhập mã sinh viên" name = "class" class = "form-control">
        </div>
        <div class = "mb-3">
            <label class = "form-label">Điểm Sinh Viên</label>
            <input type="text" placeholder="Nhập mã sinh viên" name = "score" class = "form-control">
        </div>
        
        <button  type = "submit" class = "btn btn-primary">Thêm</button>
    </form>

    <h1>Danh sách sinh viên</h1>
    <table class="table">
        <thead>
            <tr>
                <th>Mã sinh viên</th>
                <th>Tên sinh viên</th>
                <th>Tuổi</th>
                <th>Lớp</th>
                <th>Điểm</th>
            </tr>
        </thead>

        <tbody>
            <!-- <?php
                    // foreach($danhSach as $sinhVien){
                    //     echo "
                    //         <tr>
                    //             <td>{$sinhVien['ma']}</td>
                    //             <td>{$sinhVien['ten']}</td>
                    //             <td>{$sinhVien['tuoi']}</td>
                    //             <td>{$sinhVien['lop']}</td>
                    //             <td>{$sinhVien['diem']}</td>
                    //         </tr>
                    //     ";
                    // }
                    ?> -->

            <?php foreach ($danhSach as $sinhVien) { ?>
                <tr>
                    <td><?php echo $sinhVien["ma"]; ?></td>
                    <td><?php echo $sinhVien["ten"]; ?></td>
                    <td><?php echo $sinhVien["tuoi"]; ?></td>
                    <td><?php echo $sinhVien["lop"]; ?></td>
                    <td><?php echo $sinhVien["diem"]; ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>


</body>

</html>