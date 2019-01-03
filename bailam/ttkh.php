<?php 
    header('Content-Type: text/html; charset=UTF-8');
?>
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
    <link href="./css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="./css/sb-admin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="./css/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="./css/dangnhap.css">
    <link rel="stylesheet" href="./css/styple.css">
    
    <link rel="stylesheet" href="./css/fontawesome-webfont.woff" type="text/css">
    <link rel="stylesheet" href="./js">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
<div id="wrapper">
            <div id="header">
                <nav class="navbar navbar-fixed-top navbar-inverse">
                    <div class="container">
                        <div  class="navbar-header">
                            <a href="html.php" class="navbar-brand"><img src="image/logo.png" style="width: 160px;"></a>
                        </div>
                        <div  class="navbar-collapse collapse" id="main-menu">
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
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <div id="page-wrapper">
            <?php include('./ketnoi.php'); ?>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <h3>Danh sách khách hàng</h3>
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>
                                    Mã
                                </th>
                                <th>
                                    Tên khách hàng
                                </th>
                                <th>
                                    Địa chỉ
                                </th>
                                <th>
                                    Số điện thoại
                                </th>
                                <th>
                                    Email
                                </th>
    
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $query="select * from khachhang";
                            $result = mysqli_query($conn,$query) or die ("Query {$query} \n <br/>
                                MYSQL error:" .mysqli_error($conn));
                            while ($ds=mysqli_fetch_array($result,MYSQLI_ASSOC)) {
                                ?>

                                <tr>
                                    <td> <?php echo $ds['id']; ?></td>
                                    <td> <?php echo $ds['tenkhachhang']; ?></td>
                                    <td> <?php echo $ds['diachi']; ?></td>
                                    <td><?php echo $ds['sdt']; ?></td>
                                    <td><?php echo $ds['email']; ?></td>
                                    
                                </tr> 
 
                                <?php  
                            } 

                            ?>
                            
                        </tbody>
                    </table>
                </div>
            </div>


        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- /#page-wrapper -->
    <div id="footer">
    </div>
</div>
<!-- /#wrapper -->

<!-- jQuery -->
<script src="./js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="./js/bootstrap.min.js"></script>

<!-- Morris Charts JavaScript -->
<script src="./js/plugins/morris/raphael.min.js"></script>
<script src="./js/plugins/morris/morris.min.js"></script>
<script src="./js/plugins/morris/morris-data.js"></script>
<script src="js/jquery-3.3.1.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="js/javascrip_1.js"></script>
<script src="js/javascrip.js"></script>

</body>

</html>
