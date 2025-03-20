<?php
session_start();

// 若沒有偵測到 userLogin，代表非合法使用者，強制跳回登入頁
if (!isset($_SESSION["userLogin"])) {
    echo "Illegal user!";
    header("Refresh:2;url='login.php'");
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>User Form</title>
</head>
<body>
    <?php
        // 已確認是學生身份
        echo "Welcome, Student!<br>";
        echo "<a href='logout.php'>Logout</a>";
    ?>
    <form action="userinfo.php" method="GET">
        <p>
            Please input your name: 
            <input type="text" name="uName">
        </p>
        <p>
            Please input your password: 
            <input type="password" name="uPwd">
        </p>
        <p>
            Please input your email: 
            <input type="email" name="uEmail">
        </p>
        <p>
            Please select your color: 
            <input type="color" name="uColor">
        </p>
        <p>
            Please select your age: 
            <input type="number" name="uAge" min="25" max="60">
        </p>
        <p>
            Please select your birthday: 
            <input type="date" name="uBirth">
        </p>
        <p>
            Please select how you like the webpage: 
            <input type="range" name="uLike">
        </p>
        <input type="hidden" name="uSecret" value="hahaha">

        <p>Please select your city:
            <select name="uCity">
                <option value="taipei">Taipei</option>
                <option value="taichung">Taichung</option>
                <option value="kaohsiung">Kaohsiung</option>
            </select>
        </p>

        <p>Please input your comments:</p>
        <textarea cols="30" rows="10" name="uComment"></textarea>
        <br><br>

        <input type="submit">
        <input type="reset">
    </form>
</body>
</html>
