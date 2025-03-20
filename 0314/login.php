<?php
// 如果偵測到使用者先前曾登入成功 (存在 cookie["name"])，就顯示歡迎訊息
if (isset($_COOKIE["name"])) {
    echo "Hello again, " . $_COOKIE["name"] . "!<br>";
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>User Login</title>
</head>
<body>
    <h1>Login to Your Account</h1>
    <form action="logincheck.php" method="post">
        <label>Username: 
            <input type="text" name="name">
        </label><br>

        <label>Password: 
            <input type="password" name="pwd">
        </label><br>
        
        <input type="submit" value="Login"><br>
        
        <?php
        // 顯示系統當前時間
        date_default_timezone_set("Asia/Taipei");
        echo "Current Timestamp: " . time() . "<br>";
        echo "Current Time: " . date("Y-m-d H:i:s");
        ?>
    </form>
</body>
</html>
