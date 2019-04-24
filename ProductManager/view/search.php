<?php
        // Nếu người dùng submit form thì thực hiện
        // require "model/DBConnection.php";
        use Model\DBConnection;
        if (isset($_REQUEST['ok'])) 
        {
            // Gán hàm addslashes để chống sql injection
            $search = addslashes($_GET['search']);
 
            // Nếu $search rỗng thì báo lỗi, tức là người dùng chưa nhập liệu mà đã nhấn submit.
            if (empty($search)) {
                echo "Yeu cau nhap du lieu vao o trong";
            } 
            else
            {
                // Dùng câu lênh like trong sql và sứ dụng toán tử % của php để tìm kiếm dữ liệu chính xác hơn.
                // $query = "select * from users where username like '%$search%'";
 
                // // Kết nối sql
                // // mysql_connect("localhost", "productmanager", "root", "");
 
                // // Thực thi câu truy vấn
                // $sql = mysql_query($query);
 
                // // Đếm số đong trả về trong sql.
                // $num = mysql_num_rows($sql);
 
                // Nếu có kết quả thì hiển thị, ngược lại thì thông báo không tìm thấy kết quả
                if ($search != "") 
                {
                    // Dùng $num để đếm số dòng trả về.
                    echo "<h3>Kết quả trả về với từ khóa $search</h3>";
 
                    // Vòng lặp while & mysql_fetch_assoc dùng để lấy toàn bộ dữ liệu có trong table và trả về dữ liệu ở dạng array.
                } 
                else {
                    echo "Khong tim thay ket qua!";
                }
            }
        }
        ?>   