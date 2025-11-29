<?php
// Đường dẫn tệp CSV
$filename = __DIR__ . "/65HTTT_Danh_sach_diem_danh.csv";

// Kiểm tra file có tồn tại không
if (!file_exists($filename)) {
    die("Không tìm thấy tệp CSV: $filename");
}

// Mở file CSV để đọc
$rows = [];
if (($handle = fopen($filename, "r")) !== false) {
    // Lấy tiêu đề cột
    $header = fgetcsv($handle, 1000, ",");
    
    // Đọc các dòng còn lại
    while (($data = fgetcsv($handle, 1000, ",")) !== false) {
        $rows[] = $data;
    }
    fclose($handle);
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Danh sách điểm danh</title>
    <style>
        body { font-family: Arial; padding: 20px; }
        table { border-collapse: collapse; width: 100%; }
        th, td { border: 1px solid #ccc; padding: 8px; text-align: left; }
        th { background-color: #f2f2f2; }
    </style>
</head>
<body>

<h1>Danh sách điểm danh</h1>

<table>
    <thead>
        <tr>
            <?php foreach ($header as $col): ?>
                <th><?= htmlspecialchars($col) ?></th>
            <?php endforeach; ?>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($rows as $row): ?>
            <tr>
                <?php foreach ($row as $cell): ?>
                    <td><?= htmlspecialchars($cell) ?></td>
                <?php endforeach; ?>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

</body>
</html>
