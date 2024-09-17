<?php
session_start();
$errorMsg = "";
if (isset($_POST["btSubmit"])) {
    //lay du lieu tu form
    $email = $_POST["email"];
    $password = $_POST["password"];
    //ket noi csdl
    require_once("../db/conn.php");
    //cau lenh truy van
    $sql = "select * from admins where email='$email' and password='$password'";
    // Execute the query and store the result
    $result = mysqli_query(mysql: $conn, query: $sql);
    //kiem tra so luong record trả về: > 0: đăng nhập thành công
    if (mysqli_num_rows(result: $result) > 0) {
        // echo "<h4>Dang nhap thanh cong</h4>";
        //luu tru thong tin dang nha
        $row = mysqli_fetch_assoc(result: $result);
        $_SESSION['user'] = $row;
        // print_r($_SESSION['user']);
        // exit;
        // chuyen qua trang quan trị
        header(header: "Location: index.php");
    } else {
        $errorMsg = "Không tìm thấy thông tin tài khoản trong hệ thống";
        require_once("includes/loginform.php");
    }

    // Close the connection to the database
    mysqli_close(mysql: $conn);
} else {
    require_once("includes/loginform.php");
}
?>