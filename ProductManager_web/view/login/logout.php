<?php session_start();

if (isset($_SESSION['username'])) {
    unset($_SESSION['username']); // xóa session login
}
?>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>
    <a href="../../index.php"> Home </a> <br>
    <a href="dangnhap.php">Log in</a>
</body>
<html>