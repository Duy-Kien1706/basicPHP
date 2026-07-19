
<?php
$host = 'localhost';
$dbname = 'phpcoban';
$user_db = 'root';
$password = '';
try {
    if (class_exists("PDO")) {
        $option = array(
            // Hỗ trợ tiếng việt
            PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
            // Giúp đẩy lỗi vào ngoại lệ
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,

        );
        $conn = new PDO("mysql:host=$host;dbname=$dbname", $user_db, $password,$option);

        $sql = "INSERT INTO users (name,email) values (:name,:email) ";
        // :name->placeholder là giá trị tượng trưng truyền vào cho trường name 

        $stm = $conn->prepare($sql);
        // SQL Injection: có tác dụng bảo vệ câu lệnh sql truyền vào
        // Data cần insert
        $name = "Kiên";
        $email = "Kien@gmail.com";
        $stm -> execute(
            [
                ":name"=>$name,
                ":email"=>$email
            ]
        );
    }
} catch (Exception $ex) {
    echo "Lỗi kết nối: " . $ex->getMessage();
}
?>