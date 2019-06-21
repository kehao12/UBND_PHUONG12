<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tra cứu phản ánh</title>
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
    <div class="container" style="margin-top:20px;">
        <div class="contentpane">
            <h2>Nội dung phản ánh</h2>
            <div class="row">
                <div class="col-md-12">
                    <form action="" method="post">
                        <div class="input-group" id="adv-search">
                            <input type="text" name="NoiDung" class="form-control" placeholder="Search for snippets" />
                            <div class="input-group-btn">
                                <div class="btn-group" role="group">
                                    <div class="dropdown dropdown-lg">
                                        <button type="button" class="btn btn-default dropdown-toggle"
                                            data-toggle="dropdown" aria-expanded="false"><span
                                                class="caret"></span></button>
                                        <div class="dropdown-menu dropdown-menu-right" role="menu">
                                            <form class="form-horizontal" role="form" method="post">
                                                <div class="form-group">
                                                    <label for="filter">Nội dung phản ánh</label>
                                                    <select class="form-control">
                                                        <?php foreach($data4 as $value4){ ?>
                                                        <option value="<?php echo $value4['idMuc'] ?>">
                                                            <?php echo $value4['TenMuc'] ?></option>
                                                        <?php }?>
                                                    </select>
                                                </div>

                                                <div class="form-group">
                                                    <label for="filter">Năm</label>
                                                    <select class="form-control">
                                                        <option value="0" selected>2019</option>
                                                        <option value="1">2018</option>
                                                    </select>
                                                </div>
                                                <button type="submit" name="tim" class="btn btn-primary"><span
                                                        class="glyphicon glyphicon-search"
                                                        aria-hidden="true"></span></button>
                                            </form>
                                        </div>
                                    </div>
                                    <button type="submit" name="tim1" class="btn btn-primary"><span
                                            class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <?php if(isset($data5)){ include('timkiem.php');}
            else{?>
            <div class="row thanhpa">
                <div class="col-md-6 col-xs-6">
                    <?php foreach ($data3 as $value3 ) {
               ?>
                    <h2>Số phản ánh: <?php echo $value3['SoLuong']?></h2>
                    <?php }?>
                </div>
                <div class="col-md-6 col-xs-6">
                    <a href="?controller=index&action=pa">
                        <button class="btn btn-primary">Thêm phản ánh</button>
                    </a>
                </div>
            </div>
            <div class="i-content listPa">
                <?php foreach($data as $value){?>
                <div class="item">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="i-username"><?php echo $value['HoTen']?>
                            </div>
                        </div>
                    </div>
                    <div class="clear">

                    </div>
                    <div class="i-datetime">
                        <i class="fa fa-calendar">

                        </i>22:10 21/03/2019
                    </div>
                    <p class="i-text"><?php echo $value['NoiDung']?>
                    </p>
                    <div class="clear">

                    </div>
                    <div class="i-toolcontrol">
                        <div class="pull-right">
                            <span class="cmplus" onclick="showplus(this)">
                                <i class="fa fa-plus-circle" title="Hiển thị đầy đủ"></i>
                            </span>
                        </div>
                    </div>
                    <?php foreach($data1 as $value1){
                        if($value['idPA']==$value1['idPA']){?>
                    <div class="i-reply hidden">
                        <div class="i-repname">UBND Quận Gò Vấp - Phường 12

                        </div>
                        <span class="span-reply">Đã trả lời</span>
                        <div class="i-repdatetime">
                            <i class="fa fa-calendar"></i>22:16 21/03/2019
                        </div>
                        <p class="i-reptext"><?php echo $value1['NoiDung']?></p>
                        <span class="cmminus" onclick="hiddenplus(this)">
                            <i class="fa fa-minus-circle" title="Hiển thị bớt đi"></i></span>
                    </div>
                    <?php }}?>
                </div>
                <?php }?>
            </div>
            <?php }?>
        </div>
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
        function showplus(t) {
            $(t).addClass("hidden");
            $(t).parent(".pull-right").parent(".i-toolcontrol").next('.i-reply').removeClass("hidden");
        };

        function hiddenplus(t) {
            $(t).parent(".i-reply").addClass("hidden");
            $(t).parent(".i-reply").prev(".i-toolcontrol").find(".cmplus").removeClass("hidden");
        };
    </script>
</body>

</html>