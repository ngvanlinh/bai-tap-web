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
    
    <title>danh sách khách hàng</title>

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
                            <a href="logout.php"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
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
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo_vd"><i class="fa fa-fw fa-file"></i> Danh sách khách hàng<i class="fa fa-fw fa-caret-down"></i></a>
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
            <?php include('../ketnoi.php'); ?>
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
                                <th>
                                    Sửa
                                </th>
                                <th>
                                    Xóa
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
                                    
                                    <td> <a href="edit_kh.php?id=<?php echo $ds['id']; ?>"><img width="16" src="../image/icon_edit.png" htef="edit_kh.php"></a></td>
                                    <td> <a onclick="return confirm('Bạn có thực sự muốn xóa không!');" href="delete_kh.php?id=<?php echo $ds['id']; ?>"><img width="16" src="../image/icon_xoa.png" alt=""></a></td>
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
<script src="../js2/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="../js2/bootstrap.min.js"></script>

<!-- Morris Charts JavaScript -->
<script src="../js2/plugins/morris/raphael.min.js"></script>
<script src="../js2/plugins/morris/morris.min.js"></script>
<script src="../js2/plugins/morris/morris-data.js"></script>

</body>

</html>
