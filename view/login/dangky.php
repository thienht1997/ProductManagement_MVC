<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Trang đăng lý</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>

<body>
    <center style="position: relative; left: -14px; top: 177px;">
        <div class="w3-container w3-blue" style="width:619px">
            <h1>Sign up</h1>
        </div>
        <div>
            <form class="w3-container" action="xuly.php" method="POST">
                <table>
                    <tr>
                        <td>
                            Tên đăng nhập :
                        </td>
                        <td>
                            <input type="text" class="w3-input" name="txtUsername" size="50" />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Mật khẩu :
                        </td>
                        <td>
                            <input type="password" class="w3-input" name="txtPassword" size="50" />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Email :
                        </td>
                        <td>
                            <input type="text" class="w3-input" name="txtEmail" size="50" />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Họ và tên :
                        </td>
                        <td>
                            <input type="text" class="w3-input" name="txtFullname" size="50" />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Ngày sinh :
                        </td>
                        <td>
                            <input type="text" class="w3-input" name="txtBirthday" size="50" />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Giới tính :
                        </td>
                        <td>
                            <select name="txtSex">
                                <option value=""></option>
                                <option value="Nam">Nam</option>
                                <option value="Nu">Nữ</option>
                            </select>
                        </td>
                    </tr>
                </table>
                <input type="submit" class="w3-input" value="Sign up" style="width:109px"/>
            </form>
    </center>
</body>

</html>