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
	<div id="header">
		<div class="container_header">
			<div id="banner">
				<img src="image/logo3.png" alt="">
			</div>

			<div id="menu">
					<ul class="san7">
						<li class="san7li">
							<a href="html.php" class="san7a">HOME</a>                           
						</li>
					</ul>
				</nav>
			</div>	
			
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
						<iframe src="https://map.coccoc.com/map/1997207266553318?borders=21.003030399671047%2C105.81692985027257%2C21.009921267805765%2C105.83340934246007&query=S%C3%A2n+c%E1%BB%8F+nh%C3%A2n+t%E1%BA%A1o+Thu%E1%BB%B7+L%E1%BB%A3i+h%C3%A0+n%E1%BB%99i&bounds_change=true" width="700" style="float:left" height="428" style="border-top: 5px" frameborder="0" style="border:0" allowfullscreen="" ></iframe>
					</div>
				</div>
			</div>
			
		</div>
		<div id="main_bos">
			
			<div class="container">
				<div class="set-calendar-ball">

					<div class="select ">
						<div class="row row-s">

							<div class="col-xs-12 col-sm-4 col-s">
								<select id="TimeZone" name="TimeZone" class="form-control">
									<option value="1">sân 1</option>
									<option value="2">sân 2</option>
									<option value="3">sân 3</option>
									<option value="5">sân 4</option>
									<option value="5">sân 11(cả 4 sân)</option>
								</select>
							</div>
							<div class="col-xs-12 col-sm-4 col-s">
								<select id="TimeZone" name="TimeZone" class="form-control">
									<option value="1">07:00 - 08:30</option>
									<option value="2">08:30 - 10:00</option>
									<option value="3">10:00 - 11:30</option>
									<option value="5">13:00 - 14:30</option>
									<option value="6">14:30 - 16:00</option>
									<option value="7">16:00 - 17:30</option>
									<option value="8">17:30 - 19:00</option>
									<option value="9">19:00 - 20:30</option>
									<option value="10">20:30 - 22:00</option>
									<option value="11">22:00 - 23:30</option>
								</select>
							</div>
							<div class="col-xs-12 col-sm-4 col-s">
								<input type="text" class="form-control" readonly="" id="TotalMoney" value="00">
								<span>Giá tiền:</span>
							</div>
						</div>
					</div>
				</div>
				<div class="show-calendar">
					<div class="calendar-month">
						<h3>Lịch đặt sân tháng</h3>
						<h4>
							<i class="fa fa-caret-left" aria-hidden="true" style="display: none;"></i>
							<span id="Year">2018</span>
							<i class="fa fa-caret-right" aria-hidden="true" style="display: inline-block;"></i>
						</h4>
						<ul class="nav nav-pills current-month" style="display: block;">
							<li class="">
								<a href="#" class="" rel="01/2018" data-month="01" data-year="2018">
									tháng <span>01</span>
								</a>
							</li>
							<li class="">
								<a href="#" class="" rel="02/2018" data-month="02" data-year="2018">
									tháng <span>02</span>
								</a>
							</li>
							<li class="">
								<a href="#" class="" rel="03/2018" data-month="03" data-year="2018">
									tháng <span>03</span>
								</a>
							</li>
							<li class="">
								<a href="#" class="" rel="04/2018" data-month="04" data-year="2018">
									tháng <span>04</span>
								</a>
							</li>
							<li class="">
								<a href="#" class="" rel="05/2018" data-month="05" data-year="2018">
									tháng <span>05</span>
								</a>
							</li>
							<li class="">
								<a href="#" class="" rel="06/2018" data-month="06" data-year="2018">
									tháng <span>06</span>
								</a>
							</li>
							<li class="">
								<a href="#" class="" rel="07/2018" data-month="07" data-year="2018">
									tháng <span>07</span>
								</a>
							</li>
							<li class="">
								<a href="#" class="" rel="08/2018" data-month="08" data-year="2018">
									tháng <span>08</span>
								</a>
							</li>
							<li class="">
								<a href="#" class="" rel="09/2018" data-month="09" data-year="2018">
									tháng <span>09</span>
								</a>
							</li>
							<li class="">
								<a href="#" class="" rel="10/2018" data-month="10" data-year="2018">
									tháng <span>10</span>
								</a>
							</li>
							<li class="">
								<a href="#" class="" rel="11/2018" data-month="11" data-year="2018">
									tháng <span>11</span>
								</a>
							</li>
							<li class="active">
								<a href="#" class="delay" rel="12/2018" data-month="12" data-year="2018">
									tháng <span>12</span>
								</a>
							</li>
						</ul>
						<ul class="nav nav-pills diplay-none next-month" style="display: none;">
							<li>
								<a href="#" class="delay" rel="01/2019" data-month="01" data-year="2019">
									tháng <span>01</span>
								</a>
							</li>
							<li>
								<a href="#" class="delay" rel="02/2019" data-month="02" data-year="2019">
									tháng <span>02</span>
								</a>
							</li>
							<li>
								<a href="#" class="delay" rel="03/2019" data-month="03" data-year="2019">
									tháng <span>03</span>
								</a>
							</li>
							<li>
								<a href="#" class="delay" rel="04/2019" data-month="04" data-year="2019">
									tháng <span>04</span>
								</a>
							</li>
							<li>
								<a href="#" class="delay" rel="05/2019" data-month="05" data-year="2019">
									tháng <span>05</span>
								</a>
							</li>
							<li>
								<a href="#" class="delay" rel="06/2019" data-month="06" data-year="2019">
									tháng <span>06</span>
								</a>
							</li>
							<li>
								<a href="#" class="delay" rel="07/2019" data-month="07" data-year="2019">
									tháng <span>07</span>
								</a>
							</li>
							<li>
								<a href="#" class="delay" rel="08/2019" data-month="08" data-year="2019">
									tháng <span>08</span>
								</a>
							</li>
							<li>
								<a href="#" class="delay" rel="09/2019" data-month="09" data-year="2019">
									tháng <span>09</span>
								</a>
							</li>
							<li>
								<a href="#" class="delay" rel="10/2019" data-month="10" data-year="2019">
									tháng <span>10</span>
								</a>
							</li>
							<li>
								<a href="#" class="delay" rel="11/2019" data-month="11" data-year="2019">
									tháng <span>11</span>
								</a>
							</li>
							<li>
								<a href="#" class="delay" rel="12/2019" data-month="12" data-year="2019">
									tháng <span>12</span>
								</a>
							</li>
						</ul>
					</div>
					<script>
						var curentYear = '2018';
						var fieldId = '1';
						ValidateYear(curentYear, '2018');
						$(function () {
							$(".fa-caret-right").click(function (e) {
								e.preventDefault();
								$(".current-month").hide();
								$(".next-month").fadeIn();
								$("#Year").text('2019');
								ValidateYear(curentYear, '2019');
							});
							$(".fa-caret-left").click(function (e) {
								e.preventDefault();
								$(".next-month").hide();
								$(".current-month").fadeIn();
								$("#Year").text('2018');
								ValidateYear(curentYear, '2018');
							});
						});
						$(document).ready(function () {                          
							var timeZone = $("#TimeZone").find("option:selected").val();
							loadPitch('12', timeZone, '2018', fieldId,'');
							loadMonth();                         
							$('html, body').animate({ scrollTop: $('#item-positon').position().top }, 'slow');                            
						});
					</script>
					<div class="time-calendar over">
						<div class="title-table text-center over">
							<table class="table">
								<tbody><tr>
									<td class="w12">Tháng</td>
									<td>Danh sách chọn</td>
								</tr>
							</tbody></table>
						</div>
						<div class="tab-content" style="margin: 0;color: #333;">
							<div id="thang1" class="tab-pane fade in active">
								<div class="show over">
									<table class="table" id="list-month-pitch"><tbody><tr id="122018">
										<td class="w12">Tháng 12/2018</td>
										<td>
											<ul class="ul">

												<li class="chon">
													<span class="ws">1/12</span>
													<span class="w">
														<span class="bg"></span>
														<span><input type="checkbox" value="13/12/2018" data-price="300000" name="monthChooise" class="dayInMonth"></span>
													</span>
												</li>
												<li class="chon">
													<span class="ws">2/12</span>
													<span class="w">
														<span class="bg"></span>
														<span><input type="checkbox" value="13/12/2018" data-price="300000" name="monthChooise" class="dayInMonth"></span>
													</span>
												</li>
												<li class="chon">
													<span class="ws">3/12</span>
													<span class="w">
														<span class="bg"></span>
														<span><input type="checkbox" value="13/12/2018" data-price="300000" name="monthChooise" class="dayInMonth"></span>
													</span>
												</li>
												<li class="chon">
													<span class="ws">4/12</span>
													<span class="w">
														<span class="bg"></span>
														<span><input type="checkbox" value="13/12/2018" data-price="300000" name="monthChooise" class="dayInMonth"></span>
													</span>
												</li>
												<li class="chon">
													<span class="ws">5/12</span>
													<span class="w">
														<span class="bg"></span>
														<span><input type="checkbox" value="13/12/2018" data-price="300000" name="monthChooise" class="dayInMonth"></span>
													</span>
												</li>
												<li class="chon">
													<span class="ws">6/12</span>
													<span class="w">
														<span class="bg"></span>
														<span><input type="checkbox" value="13/12/2018" data-price="300000" name="monthChooise" class="dayInMonth"></span>
													</span>
												</li>
												<li class="chon">
													<span class="ws">7/12</span>
													<span class="w">
														<span class="bg"></span>
														<span><input type="checkbox" value="13/12/2018" data-price="300000" name="monthChooise" class="dayInMonth"></span>
													</span>
												</li>
												<li class="chon">
													<span class="ws">8/12</span>
													<span class="w">
														<span class="bg"></span>
														<span><input type="checkbox" value="13/12/2018" data-price="300000" name="monthChooise" class="dayInMonth"></span>
													</span>
												</li>
												<li class="chon">
													<span class="ws">9/12</span>
													<span class="w">
														<span class="bg"></span>
														<span><input type="checkbox" value="13/12/2018" data-price="300000" name="monthChooise" class="dayInMonth"></span>
													</span>
												</li>
												<li class="chon">
													<span class="ws">10/12</span>
													<span class="w">
														<span class="bg"></span>
														<span><input type="checkbox" value="13/12/2018" data-price="300000" name="monthChooise" class="dayInMonth"></span>
													</span>
												</li>
												<li class="chon">
													<span class="ws">11/12</span>
													<span class="w">
														<span class="bg"></span>
														<span><input type="checkbox" value="13/12/2018" data-price="300000" name="monthChooise" class="dayInMonth"></span>
													</span>
												</li>
												<li class="chon">
													<span class="ws">12/12</span>
													<span class="w">
														<span class="bg"></span>
														<span><input type="checkbox" value="13/12/2018" data-price="300000" name="monthChooise" class="dayInMonth"></span>
													</span>
												</li>
												<li class="chon">
													<span class="ws">13/12</span>
													<span class="w">
														<span class="bg"></span>
														<span><input type="checkbox" value="13/12/2018" data-price="300000" name="monthChooise" class="dayInMonth"></span>
													</span>
												</li>
												<li class="chon">
													<span class="ws">14/12</span>
													<span class="w">
														<span class="bg"></span>
														<span><input type="checkbox" value="14/12/2018" data-price="300000" name="monthChooise" class="dayInMonth"></span>
													</span>
												</li>
												<li class="chon">
													<span class="ws">15/12</span>
													<span class="w">
														<span class="bg"></span>
														<span><input type="checkbox" value="15/12/2018" data-price="300000" name="monthChooise" class="dayInMonth"></span>
													</span>
												</li>
												<li class="chon">
													<span class="ws">16/12</span>
													<span class="w">
														<span class="bg"></span>
														<span><input type="checkbox" value="16/12/2018" data-price="300000" name="monthChooise" class="dayInMonth"></span>
													</span>
												</li>
												<li class="chon">
													<span class="ws">17/12</span>
													<span class="w">
														<span class="bg"></span>
														<span><input type="checkbox" value="17/12/2018" data-price="300000" name="monthChooise" class="dayInMonth"></span>
													</span>
												</li>
												<li class="chon">
													<span class="ws">18/12</span>
													<span class="w">
														<span class="bg"></span>
														<span><input type="checkbox" value="18/12/2018" data-price="300000" name="monthChooise" class="dayInMonth"></span>
													</span>
												</li>
												<li class="chon">
													<span class="ws">19/12</span>
													<span class="w">
														<span class="bg"></span>
														<span><input type="checkbox" value="19/12/2018" data-price="300000" name="monthChooise" class="dayInMonth"></span>
													</span>
												</li>
												<li class="chon">
													<span class="ws">20/12</span>
													<span class="w">
														<span class="bg"></span>
														<span><input type="checkbox" value="20/12/2018" data-price="300000" name="monthChooise" class="dayInMonth"></span>
													</span>
												</li>
												<li class="chon">
													<span class="ws">21/12</span>
													<span class="w">
														<span class="bg"></span>
														<span><input type="checkbox" value="21/12/2018" data-price="300000" name="monthChooise" class="dayInMonth"></span>
													</span>
												</li>
												<li class="chon">
													<span class="ws">22/12</span>
													<span class="w">
														<span class="bg"></span>
														<span><input type="checkbox" value="22/12/2018" data-price="300000" name="monthChooise" class="dayInMonth"></span>
													</span>
												</li>
												<li class="chon">
													<span class="ws">23/12</span>
													<span class="w">
														<span class="bg"></span>
														<span><input type="checkbox" value="23/12/2018" data-price="300000" name="monthChooise" class="dayInMonth"></span>
													</span>
												</li>
												<li class="chon">
													<span class="ws">24/12</span>
													<span class="w">
														<span class="bg"></span>
														<span><input type="checkbox" value="24/12/2018" data-price="300000" name="monthChooise" class="dayInMonth"></span>
													</span>
												</li>
												<li class="chon">
													<span class="ws">25/12</span>
													<span class="w">
														<span class="bg"></span>
														<span><input type="checkbox" value="25/12/2018" data-price="300000" name="monthChooise" class="dayInMonth"></span>
													</span>
												</li>
												<li class="chon">
													<span class="ws">26/12</span>
													<span class="w">
														<span class="bg"></span>
														<span><input type="checkbox" value="26/12/2018" data-price="300000" name="monthChooise" class="dayInMonth"></span>
													</span>
												</li>
												<li class="chon">
													<span class="ws">27/12</span>
													<span class="w">
														<span class="bg"></span>
														<span><input type="checkbox" value="27/12/2018" data-price="300000" name="monthChooise" class="dayInMonth"></span>
													</span>
												</li>
												<li class="chon">
													<span class="ws">28/12</span>
													<span class="w">
														<span class="bg"></span>
														<span><input type="checkbox" value="28/12/2018" data-price="300000" name="monthChooise" class="dayInMonth"></span>
													</span>
												</li>
												<li class="chon">
													<span class="ws">29/12</span>
													<span class="w">
														<span class="bg"></span>
														<span><input type="checkbox" value="29/12/2018" data-price="300000" name="monthChooise" class="dayInMonth"></span>
													</span>
												</li>
												<li class="chon">
													<span class="ws">30/12</span>
													<span class="w">
														<span class="bg"></span>
														<span><input type="checkbox" value="30/12/2018" data-price="300000" name="monthChooise" class="dayInMonth"></span>
													</span>
												</li>
												<li class="chon">
													<span class="ws">31/12</span>
													<span class="w">
														<span class="bg"></span>
														<span><input type="checkbox" value="31/12/2018" data-price="300000" name="monthChooise" class="dayInMonth"></span>
													</span>
												</li>
											</ul>
										</td>
									</tr></tbody></table>
									<div class="list-show over">
										<ul class="ul pull-left">
											<li>
												<span class="dete"></span>
												Hết sân
											</li>
											<li>
												<span class="bg"></span>
												Sân còn trống
											</li>

										</ul>
										<ul class="ul pull-right">
											<li id="choose_all_month">
												<label for="choiseAll">
													<input type="checkbox" id="choiseAll" name="choiseAll">
													Chọn tất cả
												</label>
											</li>
										</ul>
									</div>
									<input type="hidden" id="kmSanView" value="0">
									<input type="hidden" id="kmSanType" value="0">
									<table class="table">
										<tbody>
											<tr>
												<td class="text-right">
													<p style="display: none">Mã khuyến mãi(Nếu có)<label id="msgErrorKm" style="color: red"></label></p>
													<p>Tổng buổi đã chọn</p>

													<p>Tổng số tiền</p>

												</td>
												<td>
													<p style="display: none" id=""><input class="kmSan" id="kmSan" type="text"></p>
													<p id="TotalChooise">0</p>
													<p style="display: none" class="red" id="TotalKm">0 VNĐ</p>
													<p class="red" id="TotalPriceChooise">0 VNĐ</p>

												</td>
											</tr>
										</tbody>

									</table>

									</div>

								</div>
							</div>
						</div>




					</div>

				</div>	


				<div class="title-carte over" id="tt">
					<h3>thông tin khách hàng</h3>
					<div class="open-carte" style="background:white; display:block">
						<div class="row row-s">

							<input type="hidden" name="paymentType" id="paymentType" value="">
							<input type="hidden" name="monthChooise" id="monthChooise" value="">
							<input type="hidden" name="fieldId" id="fieldId" value="1">
							<input type="hidden" name="groupFieldId" id="groupFieldId" value="1">
							<input type="hidden" name="timeZoneId" id="timeZoneId" value="">
							<input type="hidden" name="voucherCode" id="voucherCode" value="">
							<div class="col-xs-12  col-s">
								<div class="over">
									<div class="row row-s">
										<div class="col-xs-12 col-sm-3 col-s">
											<span>Họ tên<sup>*</sup></span>
										</div>
										<div class="col-xs-12 col-sm-9 col-s">
											<input type="text" class="form-control inp" placeholder="Họ tên" id="FullName" name="FullName" value="">
										</div>
									</div>
								</div>
								<div class="over">
									<div class="row row-s">
										<div class="col-xs-12 col-sm-3 col-s">
											<span>Điện thoại<sup>*</sup></span>
										</div>
										<div class="col-xs-12 col-sm-9 col-s">
											<input type="text" class="form-control inp" placeholder="Số điện thoại" id="Phone" name="Phone" value="">
										</div>
									</div>
								</div>
								<div class="over">
									<div class="row row-s">
										<div class="col-xs-12 col-sm-3 col-s">
											<span>Địa chỉ<sup>*</sup></span>
										</div>
										<div class="col-xs-12 col-sm-9 col-s">
											<input type="text" class="form-control inp" placeholder="Địa chỉ" id="Address" name="Address" value="">
										</div>
									</div>
								</div>
								<div class="over">
									<div class="row row-s">
										<div class="col-xs-12 col-sm-3 col-s">
											<span>Email<sup>*</sup></span>
										</div>
										<div class="col-xs-12 col-sm-9 col-s">
											<input type="email" class="form-control inp" placeholder="Email" id="Email" name="Email" value="">
										</div>
									</div>
								</div>
								<div class="over">
									<div class="row row-s">
										<div class="col-xs-12 col-sm-3 col-s">
											<span>Ghi chú</span>
										</div>
										<div class="col-xs-12 col-sm-9 col-s">
											<textarea id="Note" name="Note" class="form-control"></textarea>
										</div>
									</div>
								</div>

								<div class="col-xs-12 col-s">
									<div class="over">
										<span style="color: red">* bắt buộc</span>
										<p style="float: right;">
											<button type="button" class="btn bg delay btnSubmit" data-type="ATM_ONLINE">Đặt sân</button>
										</p>
									</div>

								</div>
							</div>
						</div>
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