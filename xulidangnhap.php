<?php
//Khai báo sử dụng session
session_start();
 
//Khai báo utf-8 để hiển thị được tiếng việt
header('Content-Type: text/html; charset=UTF-8');
 
//Xử lý đăng nhập
if (isset($_POST['dangnhap'])) 
{
    //Kết nối tới database
    include('ketnoi.php');
     
    //Lấy dữ liệu nhập vào
    $username = addslashes($_POST['txtUsername']);
    $pass = addslashes($_POST['txtPassword']);
     
    //Kiểm tra đã nhập đủ tên đăng nhập với mật khẩu chưa
    if (!$username || !$pass) {
        echo "Vui lòng nhập đầy đủ tên đăng nhập và mật khẩu. <a href='javascript: history.go(-1)'>Trở lại</a>";
        exit;
    }
    //mã hóa mật khẩu
    $pass = md5($pass);
    //Kiểm tra tên đăng nhập có tồn tại không
    $result = mysqli_query($conn,"SELECT tendangnhap,pass FROM taikhoan WHERE tendangnhap='$username' ");
    if (mysqli_num_rows($result )==0) {
        echo "Tên Đăng Nhập Không Đúng. Vui lòng nhập lại. <a href='javascript: history.go(-1)'>Trở lại</a>";
        exit;
    }
    //Lấy mật khẩu trong database ra
   while( $row = mysqli_fetch_assoc($result)){
    
    //So sánh 2 mật khẩu có trùng khớp hay không
    if ($pass !=$row["pass"]) {
        echo "Mật khẩu không đúng. Vui lòng nhập lại. <a href='javascript: history.go(-1)'>Trở lại</a>";
        exit;
    }
   }
     
    //Lưu tên đăng nhập
    $_SESSION['tendangnhap'] = $username;
    header('location:html.php');
}
?>  