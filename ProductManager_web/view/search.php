    <?php
    // Nếu người dùng submit form thì thực hiện
    if (isset($_REQUEST['ok'])) {
        // Gán hàm addslashes để chống sql injection
        $search = addslashes($_GET['search']);

        // Nếu $search rỗng thì báo lỗi, tức là người dùng chưa nhập liệu mà đã nhấn submit.
        if (empty($search)) {
            echo "Yêu cầu nhập dữ liệu vào ô trống.";
        } else {
            // Dùng câu lênh like trong sql và sứ dụng toán tử % của php để tìm kiếm dữ liệu chính xác hơn.
            // Kết nối sql
            // $con=mysqli_connect("localhost", "root", "", "demo");
            $ketnoi['host'] = 'localhost'; //Tên server, nếu dùng hosting free thì cần thay đổi
            $ketnoi['dbname'] = 'productmanager'; //Đây là tên của Database
            $ketnoi['username'] = 'root'; //Tên sử dụng Database
            $ketnoi['password'] = ''; //Mật khẩu của tên sử dụng Database
            $con = mysqli_connect(
                "{$ketnoi['host']}",
                "{$ketnoi['username']}",
                "{$ketnoi['password']}"
            )
                or
                die("Không thể kết nối database");
            @mysqli_select_db($con, "productmanager")
                or
                die("Không thể chọn database");

            // Thực thi câu truy vấn
            $query = "SELECT * FROM products WHERE name LIKE '%$search%'";
            $sql = mysqli_query($con, $query);

            // Đếm số đong trả về trong sql.
            $num = mysqli_num_rows(mysqli_query($con, "SELECT * FROM products WHERE name LIKE '%$search%'"));

            // Nếu có kết quả thì hiển thị, ngược lại thì thông báo không tìm thấy kết quả
        ?>
        <?php if ($num > 0 && $search != "") {
                // Dùng $num để đếm số dòng trả về.
                echo "$num kết quả trả về với từ khóa <b>$search</b>"; 

                // Vòng lặp while & mysql_fetch_assoc dùng để lấy toàn bộ dữ liệu có trong table và trả về dữ liệu ở dạng array.
                echo '<table border="1" cellspacing="0" cellpadding="10">';
                echo '<tr>';
                echo "<td>ID</td>";
                echo "<td>Name</td>";
                echo "<td>Price</td>";
                echo "<td>Description</td>";
                echo "<td>Supplier</td>";
                echo '</tr>';
                while ($row = mysqli_fetch_assoc($sql)) {
                    echo '<tr>';
                    echo "<td>{$row['id']}</td>";
                    echo "<td>{$row['name']}</td>";
                    echo "<td>{$row['price']}</td>";
                    echo "<td>{$row['description']}</td>";
                    echo "<td>{$row['supplier']}</td>";
                    echo '</tr>';
                }
                echo '</table>';
            } else {
                echo "Không tìm thấy kết quả!";
            }
        }
    }
    ?>
</body>

</html>