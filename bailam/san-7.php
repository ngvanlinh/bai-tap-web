<style type="text/css">
    #btndatsan{
        margin-top: 220px;
        margin-left: -607px;
        
    }
    .required{
        color:red;
    }
    .tt{
    	float: left;
    	background: #999;
    	width: 31%;
    	margin-left: 14.5px;
    	margin-top: 10px;
    	height: 615px;
    	margin-bottom: 50px;
    }
    .tt_right{
    	float:right;
    	width:67%;
    	margin-top: 10px;
    	margin-bottom: 50px;
    	height: 615px;
    	background: #999;
    }
    .ttt{
        text-align: center;
    }
</style>
<?php
    header('Content-Type: text/html; charset=UTF-8');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>đặt sân</title>
	<!-- Latest compiled and minified CSS & JS -->
	<!-- Latest compiled and minified CSS & JS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<script src="./js/jquery.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="./css/datsan.css" >
	<link rel="stylesheet" href="./css/datsan-1.css" >
	

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

<div id="main">


	<div class="container">



		<div id="container_left">
			<div id="container_left_top">
				<div class="title-item" id="item-positon">
					<h1>Sân bóng Thủy Lợi</h1>
				</div>
				<div class="item-map" style="position: relative">
					<h3>thông tin</h3>
					<p>
						<img src="./image/map.png" alt="" title="" id="icon">Vị trí: Ngõ 95, Chùa Bộc, P. Trung Liệt, Q. Đống Đa, Tp. Hà Nội
					</p>

					<p>
						<img src="./image/san.png" alt="" title="" id="icon">Số lượng sân: 4 Sân
					</p>
					<p>
						<img src="./image/phone.png" alt="" title="" id="icon">Điện thoại: 0936349296
					</P>
					<p>
						<img src="./image/phone.png" alt="" title="" id="icon">Email: abc123@gmail.com
					</P>

				</div>
			</div>

		</div>
		<div id="container_right">
			<div id="container_bos">
				<div class="map over">
					<iframe src="https://map.coccoc.com/map/1997207266553318?borders=21.003030399671047%2C105.81692985027257%2C21.009921267805765%2C105.83340934246007&query=S%C3%A2n+c%E1%BB%8F+nh%C3%A2n+t%E1%BA%A1o+Thu%E1%BB%B7+L%E1%BB%A3i+h%C3%A0+n%E1%BB%99i&bounds_change=true" width="580" style="float:left" height="428" style="border-top: 5px" frameborder="0" style="border:0" allowfullscreen="" ></iframe>
				</div>
			</div>
		</div>

	</div>
	        <div id="page-wrapper" class='tt'>

            <div class="container-fluid">

               <div class="row">
                   <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
                    <?php 
                            include('./ketnoi.php');
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
                                    if (($ngaydatsan=="select ngaydatsan from datsan") && ($giodatsan=="select giodatsan from datsan") && ($sosan=="select sosan from datsan")) {
                                        echo "<P class='required'>ca này đã được đặt từ trước đấy!</p>";
                                    }else{
                                        $query="insert into datsan(tennguoidatsan,diachi,sdt,email,ngaydatsan,giodatsan,sosan) values('{$tennguoidatsan}','{$diachi}','{$sdt}','{$email}','{$ngaydatsan}','{$giodatsan}','{$sosan}')";
                                        $results=mysqli_query($conn,$query) or die("Quyery {$query} \n <br> Mysql errors:" .mysqli_error($conn));
                                    }


                                
                                
                                if(mysqli_affected_rows($conn)==1){
                                    echo"<p style='color: green'></p>";
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
                           <h3 class='ttt'>Đặt Sân</h3>
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

                           <div class="col-lg-9 col-md-9 col-xs-9 col-sm-9" style="margin-left: -14px">
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
                           
                           <input type="submit" name="submit" value="Đặt Sân" class="btn btn-primary" id="btndatsan" style="margin-left: -200px">
                           
                       </form>
                   </div>
               </div>


           </div>
           <!-- /.container-fluid -->

       </div>
	        <div id="page-wrapper" class='tt_right'>
            <?php include('./ketnoi.php'); ?>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <h3 class='ttt'>Danh sách đặt sân</h3>
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>
                                    Mã
                                </th>
                                <th>
                                    Tên người đặt sân
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
                                    Ngày đặt sân
                                </th>
                                <th>
                                    Giờ đặt sân
                                </th>
                                <th>
                                    Sân
                                </th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $query="select * from datsan";
                            $result = mysqli_query($conn,$query) or die ("Query {$query} \n <br/>
                                MYSQL error:" .mysqli_error($conn));
                            while ($ds=mysqli_fetch_array($result,MYSQLI_ASSOC)) {
                                ?>

                                <tr>
                                    <td> <?php echo $ds['id']; ?></td>
                                    <td> <?php echo $ds['tennguoidatsan']; ?></td>
                                    <td> <?php echo $ds['diachi']; ?></td>
                                    <td><?php echo $ds['sdt']; ?></td>
                                    <td><?php echo $ds['email']; ?></td>
                                    <td><?php echo $ds['ngaydatsan']; ?></td>
                                    <td><?php echo $ds['giodatsan']; ?></td>
                                    <td><?php echo $ds['sosan']; ?></td>
                                    
                                </tr> 
 
                                <?php  
                            } 

                            ?>
                            
                        </tbody>
                    </table>
                </div>
            </div>


        </div>

</div>
<div id="footer">
	<h2>Liên Hệ:</h2>
	<div>
		<a href="#">Hotline:0936349296</a> </br>
		<a href="#">Email:lamnt620@wru.vn</a></br>
		<a href="#">Địa chỉ:Hà Đông - Hà Nội</a>
	</div>
</div>

</body>
</html>

<script type="text/javascript">
    $(function () {  
        $("#datepicker").datepicker({autoclose: true,todayHighlight: true }).datepicker('update', new Date());
    });
</script>
  <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="js/javascrip_1.js"></script>
    <script src="js/javascrip.js"></script>
<link rel="stylesheet prefetch" href="http://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker.css"><script src="http://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.js"></script>