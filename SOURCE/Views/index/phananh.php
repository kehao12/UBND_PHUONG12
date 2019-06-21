<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Phản ánh</title>
    <link rel="stylesheet" href="./resources/css/style.css">
    <link rel="stylesheet" href="./resources/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="./resources/bootstrap/css/bootstrap-theme.min.css">
    <link href="./resources/font/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <script src="./resources/js/jquery-3.4.0.min.js" type="text/javascript"></script>
    <script src="./resources/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
<?php include('menu.php'); ?>
    <form action="" style="margin-top: 20px;" method="post">
        <div class="container">
            <div class="contentpane">
                <h2>1. Nội dung phản ánh</h2>
                <div class="row">
                    <div class="col-md-12 col-xs-12">
                        <div class="form-group">
                            <label for="sel1">Chọn nội dung phản ánh:</label>
                            <select class="form-control" id="sel1" name="muc">
                            <?php foreach ($data as $value ) {
                            
                            ?>
                                <option value="<?php echo $value['idMuc'] ?>"><?php echo $value['TenMuc'] ?></option>
                            <?php }?>
                            </select>
                        </div>
                    </div>
                </div>
                <h2>2. Thông tin phản ánh</h2>
                <p>Để góp ý/phản ánh trực tuyến, vui lòng gửi thông tin theo mẫu dưới đây</p>
                <div class="row">
                    <div class="col-md-6 col-xs-12">
                        <div class="form-group">
                            <label for="usr">Họ tên:</label>
                            <input type="text" class="form-control" name="HoTen" required>
                        </div>
                        <div class="form-group">
                            <label for="pwd">Email:</label>
                            <input type="email" class="form-control" name="Email" >
                        </div>
                        <div class="form-group">
                            <label for="pwd">Địa chỉ:</label>
                            <input type="text" class="form-control" name="DiaChi">
                        </div>
                    </div>
                    <div class="col-md-6 col-xs-12">
                        <div class="form-group">
                            <label for="comment">Nội dung phản ánh:</label>
                            <textarea class="form-control" rows="5" id="comment" name="NoiDung"></textarea>
                        </div>

                        <button class="btn btn-warning" name="gui" type="submit">Gửi phản ánh</button>

                    </div>
                </div>
            </div>
        </div>
    </form>
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
</body>

</html>