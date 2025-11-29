<?php
$host = "127.0.0.1"; // dùng 127.0.0.1 để tránh lỗi IPv6
$user = "root";
$pass = ""; // mặc định XAMPP để trống
$db   = "student_db";

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Kết nối lỗi: " . $conn->connect_error);
}
?>
