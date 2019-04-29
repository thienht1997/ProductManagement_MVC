<!DOCTYPE html>
<html>

<head>
    <title></title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.css"> -->
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>

<body>
    <center style="position: relative; left: -14px; top: 177px;">
        <form action='dangnhapthanhcong.php' method='POST'>
            <!--  Title-->
            <div class="w3-container w3-blue" style="width:250px">
                <h2 class="login-header w3_header">Log in</h2>
            </div>
            <form class="w3-container" action="#" method="post">
                <input class="w3-input" type="text" placeholder="Username" name='txtUsername' style="width:250px">
                <input class="w3-input" type="password" placeholder="Password" name='txtPassword' style="width:250px">
                <input class="w3-input" type="submit" value="Log in" name='dangnhap' style="width:250px">
            </form>


            <a href="dangky.php" title="Đăng ký" style="position: relative; left: 0px; top: 0px;">Đăng ký</a>
        </form>
    </center>
</body>

</html>