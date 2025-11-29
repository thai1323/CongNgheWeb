<<<<<<< HEAD
<?php
session_start();

if (isset($_SESSION['logged_user'])) {

    $loggedInUser = $_SESSION['logged_user'];

    echo "<h1>Chào mừng trở lại, $loggedInUser!</h1>";
    echo "<p>Bạn đã đăng nhập thành công.</p>";

    echo '<a href="login.html">Đăng xuất (tạm thời)</a>';

} else {

    header('Location: login.html');
    exit;
}
?>
=======
<?php
session_start();

if (isset($_SESSION['logged_user'])) {

    $loggedInUser = $_SESSION['logged_user'];

    echo "<h1>Chào mừng trở lại, $loggedInUser!</h1>";
    echo "<p>Bạn đã đăng nhập thành công.</p>";

    echo '<a href="login.html">Đăng xuất (tạm thời)</a>';

} else {

    header('Location: login.html');
    exit;
}
?>
>>>>>>> 45a0336affba483ed8dd0b034eaf479101f59d8d
