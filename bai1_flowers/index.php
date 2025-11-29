<?php include "data.php"; ?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Danh sách hoa</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h1>14 loại hoa đẹp mùa xuân hè</h1>

<div id="flower-list" class="list-view">
    <?php foreach ($flowers as $flower): ?>
        <div class="flower-item">
            <img src="<?php echo $flower['img']; ?>" alt="<?php echo $flower['name']; ?>">
            <h3><?php echo $flower['name']; ?></h3>
            <p><?php echo $flower['desc']; ?></p>
        </div>
    <?php endforeach; ?>
</div>

</body>
</html>
