<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Tin Tức</title>
	<link rel="stylesheet" href="./resources/css/style.css">
	<!-- <link rel="stylesheet" type="text/css" href="./resources/css/a.css"> -->
	<link rel="stylesheet" href="./resources/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="./resources/bootstrap/css/bootstrap-theme.min.css">
	<link href="./resources/font/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
	<script src="./resources/js/jquery-3.4.0.min.js" type="text/javascript"></script>
	<script src="./resources/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>

	<?php include('menu.php'); ?>
	<div class="container content ">
		<?php foreach ($data as $value ) {
            if($value['idTT']==$MaTT){?>
		<div class="col-12 " style="overflow: hidden;">

			<div class="detail-post">
				<div class="post-title-dt">
					<?php echo $value['TieuDe'] ?>
				</div>
				<div class="post-subinfo">
					Cập nhật lúc <?php echo  $value['NgayTao'];  ?><br>
					Lượt xem: <?php echo  $value['SoLanXem'];  ?>
				</div>
				<div id="changesize" class="changesize">
					Kích cỡ font chữ
					<a href="#" class="fontDown" data-toggle="tooltip" title="Giảm kích cỡ font chữ">
						<img alt="Giảm kích cỡ font chữ" width="18px" src="resources/img/a-.png"></a>
					<a href="#" class="fontRefresh" data-toggle="tooltip" title="Kích cỡ font chữ mặc định"><img
							alt="Kích cỡ font chữ mặc định" width="19px" src="resources/img/a.png"></a>
					<a href="#" class="fontUp" data-toggle="tooltip" data-color="red" title="Tăng kích cỡ font chữ"><img
							alt="Tăng kích cỡ font chữ" width="25px" src="resources/img/a_z.png"></a>
				</div>
				<div class="post-summary">
					<h2>
				
					</h2>
				</div>
				<div class="post-content">
					<?php echo $value['NoiDung'] ?>
				</div>
			</div>

			<!-- <div class="i-content listPa">
				<h2><strong>Bình luận:</strong></h2>
				<?php foreach($data3 as $value3){
					if($value3['idBV']==$idBV){?>
				<div class="item">
					<div class="row">
						<div class="col-md-6">
							<div class="i-username"><?php echo $value3['HoTen'] ?>

							</div>
						</div>
					</div>
					<div class="clear">

					</div>
					<div class="i-datetime">
						<i class="fa fa-calendar">

						</i><?php echo $value3['Ngay'] ?>
					</div>
					<p class="i-text"><?php echo $value3['NoiDung'] ?>
					</p> -->

					

					<!-- <div class="i-reply">
						<div class="i-repname">UBND Quận Gò Vấp - Phường 12

						</div>
						<span class="span-reply">Đã trả lời</span>
						<div class="i-repdatetime">
							<i class="fa fa-calendar"></i>22:16 21/03/2019
						</div>
						<p class="i-reptext">Đang xác minh thực tế</p>

					</div> -->
				</div>
				<?php }}?>
			</div>
			
			<!-- <form action="" method="post">
				<div class="form-row">
					<div class="form-group col-md-6">
						<label for="inputEmail4">Email:</label>
						<input type="email" name="Email" class="form-control" id="inputEmail4" placeholder="Email">
					</div>
					<div class="form-group col-md-6">
						<label for="inputPassword4">Họ tên:</label>
						<input type="text" name="HoTen" class="form-control" id="inputPassword4" placeholder="Họ tên">
					</div>
				</div>
				<div class="form-group col-md-12">
					<label for="exampleFormControlTextarea1">Nội dung:</label>
					<textarea class="form-control" name="NoiDung" id="exampleFormControlTextarea1" rows="3"></textarea>

				</div>
				<div class="form-group col-md-12">
					<button type="submit" name="gui" class="btn btn-primary mt-2">Gửi</button>
				</div>

			</form> -->
		</div>
		</div>
	</div>


	</div>
	<?php }}?>
	<!-- <div class="row">
			<div class="col-sm-4 menumini">

				<div class="latestpost">
					<div class="headlatestpost">
						<span class="headtit">
							Tin mới nhất
						</span>
					</div>
					<div class="row row-mb">
						<div class="col-md-12 post1">
							<div class="post1-content">
								<a href="#">
									<span class="post1-tit">
										Đoàn TNCS Hồ Chí Minh Quận 3 - Kế thừa truyền thống và phát triển
									</span>
								</a>
							</div>
						</div>
						<div class="col-md-12 post1">
							<div class="post1-content">
								<a href="#">
									<span class="post1-tit">
										Đoàn TNCS Hồ Chí Minh Quận 3 - Kế thừa truyền thống và phát triển
									</span>
								</a>
							</div>
						</div>
						<div class="col-md-12 post1">
							<div class="post1-content">
								<a href="#">
									<span class="post1-tit">
										Đoàn TNCS Hồ Chí Minh Quận 3 - Kế thừa truyền thống và phát triển
									</span>
								</a>
							</div>
						</div>
					</div>
				</div>
				<div class="banner12">
					<a href="">
						<img src="./resources/img/ongkinhpv.jpg" alt="">
					</a>
					<a href="">
						<img src="./resources/img/banner1.jpg" alt="">
					</a>
					<a href="">
						<img src="./resources/img/banner2.jpg" alt="">
					</a>
				</div>
			</div>
		</div> -->
	</div>
	<div class="footer-up">
		<div class="box-div">
			<div class="container">
				<div class="row">
					<div class="col-md-5 col-xs-12 i-left">
						<h2 class="i-bold">
							Ủy ban nhân dân Phường 12, Quận Gò Vấp, TP. Hồ Chí Minh</h2>
						<p>
							<span>Số 261C, Đường Quang Trung, Phường 12, Quận Gò Vấp</span> <span> (08)39876630</span>
						</p>
					</div>
					<div class="col-md-7 col-xs-12 i-right">
						<div class="row">
							<div class="col-md-4 col-xs-6">
								<div class="item">
									<a href="thutuchanhchinh.html" class="ft-parent">
										<i class="fa fa-angle-right hidden-xs"
											style="font-size: 17px;margin-right: 5px;">

										</i> Hội đồng nhân dân
									</a>
								</div>
							</div>
							<div class="col-md-4 col-xs-6">
								<div class="item">
									<a href="tintuc.html" class="ft-parent">
										<i class="fa fa-angle-right hidden-xs"
											style="font-size: 17px;margin-right: 5px;">

										</i> Tin tức sự kiện
									</a>
								</div>
							</div>
							<div class="clear-xs">

							</div>
							<div class="col-md-4 col-xs-6">
								<div class="item">
									<a href="thongtin.html" class="ft-parent">
										<i class="fa fa-angle-right hidden-xs"
											style="font-size: 17px;margin-right: 5px;">

										</i> Chỉ đạo điều hành
									</a>
								</div>
							</div>
							<div class="clear-md">

							</div>
							<div class="col-md-4 col-xs-6">
								<div class="item">
									<a href="tintuc.html" class="ft-parent">
										<i class="fa fa-angle-right hidden-xs"
											style="font-size: 17px;margin-right: 5px;">

										</i> Thông cáo báo chí
									</a>
								</div>
							</div>
							<div class="clear-xs">

							</div>
							<div class="col-md-4 col-xs-6">
								<div class="item">
									<a href="tintuc.html" class="ft-parent">
										<i class="fa fa-angle-right hidden-xs"
											style="font-size: 17px;margin-right: 5px;">

										</i> Tuyên truyền
									</a>
								</div>
							</div>
							<div class="col-md-4 col-xs-6">
								<div class="item">
									<a href="thutuchanhchinh.html" class="ft-parent">
										<i class="fa fa-angle-right hidden-xs"
											style="font-size: 17px;margin-right: 5px;">

										</i> Văn bản
									</a>
								</div>
							</div>
							<div class="clear-xs">

							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="clear"></div>
		</div>
	</div>
	<div class="footer-middle">
		<div class="container">
			<div class="row">
				<div class="col-sm-9 i-left">
					Bản quyền thuộc về Phường 12 - Quận Gò Vấp - TP Hồ Chí Minh
				</div>
				<div class="col-sm-3 i-right text-right  pdt0">
					<select name="dnn$Footer$webLink" id="dnn_Footer_webLink" class="pull-right-chosen "
						onchange="openurl(this);">
						<option value="">Trang web liên kết</option>
						<option value="">Công báo</option>
						<option value="">CSDL Quốc gia</option>
						<option value="">Đánh giá phục vụ</option>
						<option value="">Thừa phát lại thí điểm</option>
						<option value="">Hỏi đáp</option>
						<option value="">Lấy ý kiến dự thảo</option>
						<option value="">Thư ngỏ</option>
						<option value="">Hộp thư điện tử</option>

					</select>
				</div>
			</div>
		</div>
	</div>
	<a class="scroll-to-top rounded" href="#">
		<i class="fas fa-angle-up"></i>
	</a>
	<script>
		$(document).ready(function () {
			//Reset font-size
			var titleSize = $('.post-title-dt').css('font-size'); /* Kích thước tiêu đề*/
			var desSize = $('.detail-post .post-summary h2').css('font-size'); /* Kích thước mô tả*/
			var dateSize = $('.detail-post .post-subinfo').css('font-size'); /* Kích thước ngày đăng*/
			var paraSize = $('post-content p').css('font-size'); /* Kích thước nội dung*/
			$(".fontRefresh").click(function () {
				$('.post-title-dt').css('font-size', titleSize);
				$('.detail-post .post-summary h2').css('font-size', desSize);
				$('.detail-post .post-subinfo').css('font-size', dateSize);
				$('.post-content p').css('font-size', paraSize);
				return false;
			});
			//Tăng kích cỡ font size
			$(".fontUp").click(function () {
				var currTitleSize = $('.post-title-dt').css('font-size');
				var incTitsize = parseFloat(currTitleSize, 10);
				var newTitsize = incTitsize + 1;
				$('.post-title-dt').css('font-size', newTitsize);
				var currDesSize = $('.detail-post .post-summary h2').css('font-size');
				var incDessize = parseFloat(currDesSize, 10);
				var newDessize = incDessize + 1;
				$('.detail-post .post-summary h2').css('font-size', newDessize);
				var currDateSize = $('.detail-post .post-subinfo').css('font-size');
				var incDatesize = parseFloat(currDateSize, 10);
				var newDatesize = incDatesize + 1;
				$('.detail-post .post-subinfo').css('font-size', newDatesize);
				var currParaSize = $('.post-content p').css('font-size');
				var incParasize = parseFloat(currParaSize, 10);
				var newParasize = incParasize + 1;
				$('.post-content p').css('font-size', newParasize);
				return false;
			});
			//GIảm kích cỡ fontsize
			$(".fontDown").click(function () {
				var currentfontsize = $('.post-title-dt').css('font-size');
				var decTitsize = parseFloat(currentfontsize, 10);
				var newTitsize = decTitsize - 1;
				$('.post-title-dt').css('font-size', newTitsize);
				var currDesSize = $('.detail-post .post-summary h2').css('font-size');
				var incDessize = parseFloat(currDesSize, 10);
				var newDessize = incDessize - 1;
				$('.detail-post .post-summary h2').css('font-size', newDessize);
				var currDateSize = $('.detail-post .post-subinfo').css('font-size');
				var incDatesize = parseFloat(currDateSize, 10);
				var newDatesize = incDatesize - 1;
				$('.detail-post .post-subinfo').css('font-size', newDatesize);
				var currParaSize = $('.post-content p').css('font-size');
				var incParasize = parseFloat(currParaSize, 10);
				var newParasize = incParasize - 1;
				$('.post-content p').css('font-size', newParasize);
				return false;
			});
		});
		(function (e, t, n) {
			var r, i = e.getElementsByTagName(t)[0];
			if (e.getElementById(n)) return;
			r = e.createElement(t);
			r.id = n;
			r.src = "//connect.facebook.net/vi_VN/all.js#xfbml=1";
			i.parentNode.insertBefore(r, i)
		})(document, "script", "facebook-jssdk")
		window.___gcfg = {
			lang: "vi"
		};
		(function () {
			var e = document.createElement("script");
			e.type = "text/javascript";
			e.async = true;
			e.src = "https://apis.google.com/js/platform.js";
			var t = document.getElementsByTagName("script")[0];
			t.parentNode.insertBefore(e, t)
		})()
	</script>
</body>

</html>