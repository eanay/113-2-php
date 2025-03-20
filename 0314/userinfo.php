<?php
session_start();

// 確認是否為合法登入的學生
if (!isset($_SESSION["userLogin"])) {
    echo "Illegal user!";
    header("Refresh:2;url='login.php'");
    exit();
}


$userName   = $_GET["uName"];
$userPwd    = $_GET["uPwd"];
$userEmail  = $_GET["uEmail"];
$userColor  = $_GET["uColor"];
$userAge    = $_GET["uAge"];
$userBirth  = $_GET["uBirth"];
$userLike   = $_GET["uLike"];
$userSecret = $_GET["uSecret"];
$userCity   = $_GET["uCity"];
$userMsg    = $_GET["uComment"];

// 顯示基本資料
echo "Your name is: " . $userName . "<br>";
echo "Your password is: " . $userPwd . "<br>";
echo "Your Email is: " . $userEmail . "<br>";
echo "Your Color is: " . $userColor . "<br>";
echo "Your Birthday is: " . $userBirth . "<br>";
echo "Your Age is: " . $userAge . "<br>";
echo "Your like is: " . $userLike . "<br>";
echo "Your Secret is: " . $userSecret . "<br>";
echo "Your City is: " . $userCity . "<br>";

// 顯示多行文字 (comments) 時，需做 htmlentities 避免XSS，並使用 nl2br 保留換行
echo "Your comments: " . nl2br(htmlentities($userMsg));
echo "<br><br><a href='logout.php'>Logout</a>";
?>



?>