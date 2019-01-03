<style type="text/css">
    #btndatsan{
        margin-top: 220px;
        margin-left: -522px;
        
    }
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
    <!-- Latest compiled and minified CSS & JS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    
    
    <title>Danh sách đặt sân</title>

    <!-- Bootstrap Core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../css/sb-admin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="../css/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    
    <link rel="stylesheet" href="../css/fontawesome-webfont.woff" type="text/css">
    
    <script src="http://code.jquery.com/jquery-latest.js"></script>

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
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo_dm"><i class="fa fa-fw fa-file"></i> Hỗ trợ trực tuyến</a>
                        
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

               <div class="row">
                   <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
                    <?php 
                            include('../ketnoi.php');
                            if($_SERVER['REQUEST_METHOD']=='POST'){
                                $errors=array();
                                if(empty($_POST['tennguoidatsan'])){
                                    $errors[]='tennguoidatsan';

                                }else{
                                    $tennguoidatsan=$_POST['tennguoidatsan'];
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
                                if (empty($_POST['ngaydatsan'])) {
                                    $errors[]='ngaydatsan';
                                }else{
                                    $ngaydatsan=$_POST['ngaydatsan'];
                                }
                                if (empty($_POST['giodatsan'])) {
                                    $errors[]='giodatsan';
                                }else{
                                    $giodatsan=$_POST['giodatsan'];
                                }
                                if (empty($_POST['sosan'])) {
                                    $errors='sosan';
                                }else{
                                    $sosan=$_POST['sosan'];
                                }
                                
                                if(empty($errors)){
                                    /*$query1="select ngaydatsan from datsan where '{$ngaydatsan}' = ngaydatsan";
                                    $query2="select giodatsan from datsan where '{$giodatsan}' = giodatsan";
                                    $query3="select sosan from datsan where '{$sosan}' = sosan";
                                    /*$query1="select  ngaydatsan from datsan group by ngaydatsan";
                                    $query2="select  giodatsan from datsan group by giodatsan";
                                    $query3="select  sosan from datsan group by sosan";*/
                                    /*$query1="select ngaydatsan, giodatsan,sosan from datsan where trangthai=1";*/
                                    /*if (*//*($_POST['ngaydatsan']=="select ngaydatsan from datsan where trangthai=1") && ($_POST['giodatsan']=="select giodatsan from datsan where trangthai=1") && ($_POST['sosan']=="select sosan from datsan where trangthai=1")){*//*$query1==$ngaydatsan && $query2==$giodatsan && $query3==$sosan ) {
                                        echo "<P class='required'>ca này đã được đặt từ trước đấy!</p>";
                                    }else{*/
                                        $query="insert into datsan(tennguoidatsan,diachi,sdt,email,ngaydatsan,giodatsan,sosan) values('{$tennguoidatsan}','{$diachi}','{$sdt}','{$email}','{$ngaydatsan}','{$giodatsan}','{$sosan}')";
                                        $results=mysqli_query($conn,$query) or die("Quyery {$query} \n <br> Mysql errors:" .mysqli_error($conn));
                                    /*}*/


                                
                                
                                if(mysqli_affected_rows($conn)==1){
                                    echo"<p style='color: green'>Thêm mới thành công</p>";
                                }else{
                                    echo"<p>Thêm mới thất bại</p>";
                                    }
                                    $_POST['tenkhachhang']='';
                                    $_POST['diachi']='';
                                    $_POST['sdt']='';
                                    $_POST['email']='';
                                    $_POST['ngaydatsan']='';
                                    $_POST['giodatsan']='';
                                    $_POST['sosan']='';
                                }else{
                                $message="<p class='required'>Bạn hãy nhập đầy đủ thông tin</p>";
                            }

                                
                        }
                        ?>
                       <form action="" name="add_datsan" method="POST">
                        <?php
                                if(isset($message)){
                                echo $message;
                            }
                            ?>
                           <h3>Đặt Sân</h3>
                           <div class="form-group">
                               <label>Tên người đặt sân</label>
                               <input type="text" name="tennguoidatsan" class="form-control" placeholder="Tên người đặt sân">
                           </div>
                           <div class="form-group">
                               <label>Địa chỉ</label>
                               <input type="text" name="diachi" class="form-control" placeholder="Địa chỉ">
                           </div>
                           <div class="form-group">
                               <label>Số điện thoại</label>
                               <input type="text" name="sdt" class="form-control" placeholder="số điện thoại">
                           </div>
                           <div class="form-group">
                               <label>Email</label>
                               <input type="text" name="email" class="form-control" placeholder="Email">
                           </div>

                           <div class="col-lg-6 col-md-6 col-xs-6 col-sm-6" style="margin-left: -14px">
                               <label>Chọn ngày:</label>
                               <div id="datepicker" class="input-group date" data-date-format="dd-mm-yyyy"> <input class="form-control" readonly="" type="text" name="ngaydatsan"> <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span> 
                               </div>
                               <div style="margin-top: 10px">
                               <label>Chọn giờ:</label>
                               <select name="giodatsan" id="" class="form-control" >
                                   <option value="6h - 7h30">6h    - 7h30</option>
                                   <option value="7h30  - 9h">7h30  - 9h</option>
                                   <option value="9h    - 10h30">9h    - 10h30</option>
                                   <option value="10h30 - 12h">10h30 - 12h</option>
                                   <option value="12h   - 13h30">12h   - 13h30</option>
                                   <option value="13h30 - 15h">13h30 - 15h</option>
                                   <option value="15h   - 16h30">15h   - 16h30</option>
                                   <option value="16h30 - 18h">16h30 - 18h</option>
                                   <option value="18h   - 19h30">18h   - 19h30</option>
                                   <option value="19h30 - 21h">19h30 - 21h</option>
                                   <option value="21h   - 22h30">21h   - 22h30</option>
                                   <option value="22h30 - 24h">22h30 - 24h</option>

                                   
                               </select>
                               <div style="margin-top: 10px">
                                   <label>chọn sân:</label>
                                   <select name="sosan" id="" class="form-control">
                                        <option value="sân 1">sân 1</option>
                                        <option value="sân 2">sân 2</option>
                                        <option value="sân 3">sân 3</option>
                                        <option value="sân 4">sân 4</option>
                                   </select>
                               </div>
                               </div>

                           </div>
                           
                           <input type="submit" name="submit" value="Đặt Sân" class="btn btn-primary" id="btndatsan">
                           
                       </form>
                   </div>
               </div>


           </div>
           <!-- /.container-fluid -->

       </div>
       <!-- /#page-wrapper -->
       <div id="footer">
        <p>Được làm bởi Lâm</p>
    </div>
</div>
<!-- /#wrapper -->

<!-- jQuery -->
<script src="../js2/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="../js2/bootstrap.min.js"></script>

<!-- Morris Charts JavaScript -->


</body>

</html>
<script type="text/javascript">
    $(function () {  
        $("#datepicker").datepicker({autoclose: true,todayHighlight: true }).datepicker('update', new Date());
    });
</script>

<link rel="stylesheet prefetch" href="http://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker.css"><script src="http://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.js"></script>