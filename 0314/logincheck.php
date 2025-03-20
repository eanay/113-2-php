<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Login Verification</title>
</head>
<body>
<h1>Login Check</h1>

<?php
// 預設的學生與管理員帳密
$studentAccount = "student";
$studentPass    = "12345";

$adminAccount   = "nuk";
$adminPass      = "123456";

// 接收使用者輸入
$inputName = $_POST["name"];
$inputPwd  = $_POST["pwd"];

// 檢查是否為學生帳號
if ($inputName === $studentAccount && $inputPwd === $studentPass) {
    echo "Student login success<br>";
    $_SESSION["userLogin"] = true;
    $cookieExpire = strtotime("+10 seconds", time());
    setcookie("name", $inputName, $cookieExpire);
    header("Location: userform.php");
    exit();
} else {
    echo "Login failed, redirecting to login page...<br>";
    header("Refresh:3;url='login.php'");
}

// 檢查是否為管理員帳號
if ($inputName === $adminAccount && $inputPwd === $adminPass) {
    echo "Admin login success<br>";
    $_SESSION["adminLogin"] = true;
    $cookieExpire = strtotime("+10 seconds", time());
    setcookie("name", $inputName, $cookieExpire);
    header("Location: adminform.php");
    exit();
} else {
    echo "Login failed, redirecting to login page...<br>";
    header("Refresh:3;url='login.php'");
}
?>
</body>
</html>
