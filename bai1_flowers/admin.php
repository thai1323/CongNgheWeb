<?php
    include "data.php";
?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Quản trị hoa</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h1>Quản trị danh sách hoa</h1>

<table border="1" width="100%">
    <thead>
        <tr>
            <th>Ảnh</th>
            <th>Tên hoa</th>
            <th>Mô tả</th>
            <th>Chức năng</th>
        </tr>
    </thead>

    <tbody>
        <?php foreach ($flowers as $i => $f): ?>
        <tr>
            <td><img src="<?= $f['img'] ?>" width="80"></td>
            <td><?= $f['name'] ?></td>
            <td><?= $f['desc'] ?></td>
            <td>
                <button>Sửa</button>
                <button>Xóa</button>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>

</table>
</body>
</html>
