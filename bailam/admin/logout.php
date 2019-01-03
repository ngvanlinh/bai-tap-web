<?php 
session_start();

if(isset($_SESSION['tendangnhap'])){
unset($_SESSION['tendangnhap']); // xóa session login
}
header('location: ../html.php')
?>
