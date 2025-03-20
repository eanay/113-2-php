<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Admin Page</title>
</head>
<body>
<?php
// 若有 adminLogin 這個 Session，表示管理者已登入
if (isset($_SESSION["adminLogin"])) {
    echo "Hello, Administrator!<br>";
    echo "<a href='logout.php'>Logout</a>";
}
?>
</body>
</html>
