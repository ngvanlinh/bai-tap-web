<?php 
session_start();//khởi tại session
$ranStr = md5(microtime());//lấy chuỗi rồi mã hóa md5
$ranStr= substr($ranStr, 0 , 6);//cắt chuỗi lấy 6 ký tự.
$_SESSION['cap_code'] = $ranStr;//lưu giá trị vào session
$newImage= imagecreatefromjpeg("./image/bg_captcha.jpg");//tạo hình từ bg_captcha.jpg
$txtColor = imagecolorallocate($newImage, 0, 0, 0); //thêm mầu vào cho chuỗi.
imagestring($newImage,5, 5, 5, $ranStr, $txtColor);//vẽ ra chuỗi hình ảnh
header("Content-type: image/jpeg"); // xuất định dạng là hình ảnh
imagejpeg($newImage);//xuất hình ảnh trình ra như 1 file
?>