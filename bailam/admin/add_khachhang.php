<style type="text/css">
    .required{
        color:red;
    }
</style>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Latest compiled and minified CSS & JS -->
    
    <title>Đặt Sân</title>

    <!-- Bootstrap Core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../css/sb-admin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="../css/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    
    <link rel="stylesheet" href="../css/fontawesome-webfont.woff" type="text/css">
    <link rel="stylesheet" href="../js2">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">QUẢN TRỊ HỆ THỐNG</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">


                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> Xin chào:&nbsp;admin <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="#"><i class="fa fa-fw fa-user"></i> Profile</a>
                        </li>                        
                        <li>
                            <a href="#"><i class="fa fa-fw fa-gear"></i>Đổi mật khẩu</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="logout.php""><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li style="background:#1b926c;color:#fff;">
                        <a href="index.php" style="color:#fff;"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                    </li>                    
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo_dm"><i class="fa fa-fw fa-file"></i> Danh sách đặt sân <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo_dm" class="collapse">
                            <li>
                                <a href="add_datsan.php">Thêm mới</a>
                            </li>
                            <li>
                                <a href="showdatsan.php">Danh sách</a>
                            </li>
                        </ul>
                    </li> 

                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo_dm"><i class="fa fa-fw fa-file"></i> Hỗ trợ trực tuyến <i class="fa fa-fw fa-caret-down"></i></a>
                        
                    </li>

                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo_vd"><i class="fa fa-fw fa-file"></i> Danh sách khách hàng <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo_vd" class="collapse">
                            <li>
                                <a href="add_khachhang.php">Thêm mới</a>
                            </li>
                            <li>
                                <a href="showdskh.php">Danh sách</a>
                            </li>
                        </ul>
                    </li>    					
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="<col-lg-12 col-md-12 col-xs-12 col-sm-12>">
                        <?php 
                            include('../ketnoi.php');
                            if($_SERVER['REQUEST_METHOD']=='POST'){
                                $errors=array();
                                if(empty($_POST['tenkhachhang'])){
                                    $errors[]='tenkhachhang';

                                }else{
                                    $tenkhachhang=$_POST['tenkhachhang'];
                                }

                                if(empty($_POST['diachi'])){

                                    $errors[]='diachi';
                                }else{
                                    $diachi=$_POST['diachi'];

                                }
                                
                                if(empty($_POST['sdt'])){
                                    $errors[]='sdt';
                                }
                                else{
                                     $sdt=$_POST['sdt'];   
                                }


                                if(empty($_POST['email'])){
                                    $errors[]='email';
                                }
                                else{
                                     $email=$_POST['email'];   
                                }
                                
                                
                                if(empty($errors)){
                                $query="insert into khachhang(tenkhachhang,diachi,sdt,email) values('{$tenkhachhang}','{$diachi}','{$sdt}','{$email}')";
                                $results=mysqli_query($conn,$query) or die("Quyery {$query} \n <br> Mysql errors:" .mysqli_error($conn));
                                if(mysqli_affected_rows($conn)==1){
                                    echo"<p style='color: green'>Thêm mới thành công</p>";
                                }else{
                                    echo"<p>Thêm mới thất bại</p>";
                                    }
                                    $_POST['tenkhachhang']='';
                                    $_POST['diachi']='';
                                    $_POST['sdt']='';
                                    $_POST['email']='';
                                }else{
                                $message="<p class='required'>Bạn hãy nhập đầy đủ thông tin</p>";
                            }

                                
                        }
                        ?>
                        <form name="add_khachhang" method="POST">
                            <?php
                                if(isset($message)){
                                echo $message;
                            }
                            ?>
                            <h3>Thêm Mới Khách Hàng</h3>
                            <div class="form-group">
                                <label>Tên khách hàng</label>
                                <input type="text" name="tenkhachhang" class="form-control" placeholder="Tên khách hàng">
                            </div>
                            <div class="form-group">
                                <label>Địa chỉ</label>
                                <input type="text" name="diachi" class="form-control" placeholder="Địa chỉ">
                            </div>
                            <div class="form-group">
                                <label>Số điện thoại</label>
                                <input type="text" name="sdt" class="form-control" placeholder="Số điện thoại">
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input type="text" name="email" class="form-control" placeholder="Email">
                            </div>
                            
                            <input name="submit" type="submit" class="btn btn-primary" value="Thêm Mới">
                        </form>
                    </div>
                </div>
                <!-- /.row -->

                
            </div>
            <!-- /.container-fluid -->

        </div>
        
        



        <!-- /#page-wrapper -->
        <div id="footer">
            <p>Lamnt620@wru.vn</p>
        </div>
    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../js2/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../js2/bootstrap.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="../js2/plugins/morris/raphael.min.js"></script>
    <script src="../js2/plugins/morris/morris.min.js"></script>
    <script src="../js2/plugins/morris/morris-data.js"></script>

</body>

</html>


