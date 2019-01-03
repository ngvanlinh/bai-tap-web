
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="./css/dangnhap.css">
    <link rel="stylesheet" href="./css/styple.css">
    <title>đặt sân</title>
</head>
<body>
        <div id="wrapper">
                <header>
                <div id="header">
                    <nav class="navbar navbar-fixed-top navbar-inverse">
                        <div class="container">
                            <div class="navbar-header">
                                <a href="html.php" class="navbar-brand"><img src="image/logo.png" style="width: 160px;"></a>
                            </div>
                            <div class="navbar-collapse collapse" id="main-menu">
                                <ul class="nav navbar-nav">
                                    <li>
                                        <a href="html.php">Trang Chủ</a>                                
                                    </li>
                                    <li>
                                        
                                        <a href="#" data-toggle="dropdown">Đặt Sân <span class="caret"></span></a>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <a href="san-7.php">Đặt Sân</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#" data-toggle="dropdown">Khách Hàng <span class="caret"></span></a>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <a href="ttkh.php">Thông tin tài khoản</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#" data-toggle="dropdown">Liên Hệ<span class="caret"></span></a>
                                        <ul class="dropdown-menu">
                                            <li><a href="#">Email:abc122@gmail.com</a></li>
                                            <li class="divider"></li>
                                            <li><a href="#">Hotline:09xxxxxxxx</a></li>
                                        </ul>
                                    </li>
                                </ul>
                                <?php
                                    session_start();
                                    if (isset($_SESSION['tendangnhap'])&& $_SESSION['tendangnhap']){
                                        echo 'Xin Chào '.$_SESSION['tendangnhap']."<br/>";
                                        echo '<a href="logout.php">Logout</a>';
                                        
                                    }else {
                                        echo '<ul class="nav navbar-nav navbar-right">
                                        <li id="dangki">
                                            <a href="#" ><b>Đăng Ký</b></a>
                                        </li>
                                        <li id="dangnhap">
                                            <a href="#" class="navbar-btn navbar-right btn_dangnhap"><b>Đăng Nhập</b></a>
                                        </li>
                                        </ul>';
                                    };
                                ?>
                                
                            </div>
                        </div>
                    </nav>
                    <div class="wallpapper">
                        <div class="anhnen">
                                <div class="show-slide" >
                                        <img src="./image/logotlu.jpg" alt="" width="100%" height="530px">
                                </div>
                                <div class="show-slide">
                                        <img src="./image/santlu.jpg" alt="" width="100%" height="530px">
                                </div>
                                <div class="show-slide">
                                        <img src="./image/santlu2.jpg" alt="" width="100%" height="530px">
                                </div>
                                <div class="show-slide">
                                        <img src="./image/tlu.jpg" alt="" width="100%" height="530px">
                                </div>
                                <div style="text-align:center">
                                    <span class="dot"></span> 
                                    <span class="dot"></span> 
                                    <span class="dot"></span>
                                    <span class="dot"></span>
                                </div>
                        </div>
                    </div>
                </div>
                </header>
                <main>` 
                <div class="loaisan">
                    <div id="loai-san-box">
                        <h1> Loại Sân</h1>
                        <div class="loai-san">
                            <figure class="image-san">
                                <a href="san-7.php">
                                    <span class="roll"></span>
                                    <img class="imgborder" src="./image/san-7.jpg" >
                                </a>
                            </figure>
                            <figure class="image-san">          
                                <a href="san-7.php">
                                    <span class="roll"></span>
                                    <img class="imgborder" src="./image/san-11.png" >
                                </a>
                            </figure>
                        </div>
                        <div id="footer">
                                <h2>Liên Hệ:</h2>
                                <div>
                                    <a href="#">Hotline:09xxxxxxx</a> <br>
                                    <a href="#">Email:abc123@gmail.com</a><br>
                                    <a href="#">Địa chỉ:Sân Bóng Đại Học Thủy Lợi</a>
                                </div>
                        </div>
                    </div>
                </div>
                </main>
            </div>
                    <div class="login">
                        <h2>Login</h2>
                        <form method="post" action="xulidangnhap.php">
                            <div class="inputbox">
                                <input type="text" name="txtUsername" id="us" required="" autocomplete="off">
                                <label>Tên đăng nhập</label>
                            </div>
                            <div class="inputbox">
                                <input type="password" name="txtPassword" id="password" required="" autocomplete="off">
                                <label>Mật Khẩu</label>
                            </div>
                            <input type="submit" value="Đăng Nhập"  name="dangnhap" id="ok">
                            
                        </form>
                        <i class="fa fa-window-close close"></i>
                    </div>
                <div class="login">   
                    <h2 >Đăng Kí</h2>
                    <form  method="post" action="xulidangki.php">
                        <div class="inputbox" >
                            <input type="text" name="txtUsername" required="" autocomplete="off">
                            <label>Tên đăng nhập</label>
                        </div>
                        <div class="inputbox">
                            <input type="password" name="txtPassword" required="" autocomplete="off">
                            <label>Mật Khẩu</label>
                        </div>
                        <div class="inputbox">
                            <input type="password" name="txtPassword2" required="" autocomplete="off">
                            <label>Nhập Lại Mật Khẩu</label>
                        </div>
                        <div class="inputbox">
                            <input type="text" name="txtEmail" required="" autocomplete="off">
                            <label>Email</label>
                        </div>
                        <input type="submit" value="Đăng Kí" name="dangnhap" style="">
                    </form>
                    <i class="fa fa-window-close close"></i>
                </div>
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="js/javascrip_1.js"></script>
    <script src="js/javascrip.js"></script>
</body>
</html>