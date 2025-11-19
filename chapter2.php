<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Thông Tin Sinh Viên</title>
</head>
<body>
    <h1>Kết quả PHP Căn Bản</h1>

    <?php 
    $ho_ten = "Nguyễn Hồng Thái";
    $diem_tb = 7.5;
    $co_di_hoc_chuyen_can = true;

    echo "Họ tên: $ho_ten <br>";
    echo "Điểm trung bình: $diem_tb <br>";
    echo "Chuyên cần: " . ($co_di_hoc_chuyen_can ? "Có" : "Không") . "<br><br>";

    if ($diem_tb >= 8.5 && $co_di_hoc_chuyen_can) {
        echo "Xếp loại: Giỏi <br>";
    } elseif ($diem_tb >= 6.5 && $co_di_hoc_chuyen_can) {
        echo "Xếp loại: Khá <br>";
    } elseif ($diem_tb >= 5.0 && $co_di_hoc_chuyen_can) {
        echo "Xếp loại: Trung bình <br>";
    } else {
        echo "Xếp loại: Yếu (Cần cố gắng thêm!) <br>";
    }

    echo "<br>";

    function chaoMung() {
        echo "Chúc mừng bạn đã hoàn thành PHT Chương 2!<br>";
    }

    chaoMung();

    echo "<br>";

    ?>
</body>
</html>
