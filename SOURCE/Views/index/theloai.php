<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="./resources/css/style.css">
    <link rel="stylesheet" href="./resources/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="./resources/bootstrap/css/bootstrap-theme.min.css">
    <link href="./resources/font/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>

<body>
<?php include('menu.php'); ?>
    <div class="container" style="margin-top: 20px; margin-bottom: 20px !important;">
        <div class="row">
            <div class="col-md-3 menu-mn">
                <div class="tit-muc">
                    <span>Tin tức - Sự kiện</span>
                </div>

                <ul>
                    <?php foreach($data as $value){?>

                    <li><a <?php if($MaTL==$value['idTL']){ echo 'class="active-menu"';}?> href="?controller=index&action=bvtl&id=<?php echo $value['idTL'] ?>"><?php echo $value['TenTL']; ?></a></li>
                    <?php }?>

                </ul>
            </div>
            <div class="col-md-9">
                <?php foreach($data as $value){
                    if($value['idTL']==$MaTL){?>
                <div class="block">
                    <h4 class="block-title">

                        <span class="td-pulldown-size"><?php echo $value['TenTL']?></span>
                    </h4>
                    <div class="td_mod_wrap">
                    </div>
                </div>
                <div class="td_block_inner">
                    <?php foreach($data1 as $value1){ 
                        if($value1['idTL']==$MaTL){?>
                    <div class="td-block-main1">

                        <div class="td-info1">

                            <div class="td-thumb1">
                                <a href="">
                                    <img width="93" height="90" class="entry-thumb td-animation-stack-type0-2"
                                        src="./resources/img/images/<?php echo $value1['HinhAnh'] ?>"
                                        sizes="(max-width: 93px) 100vw, 93px" alt=""
                                        title="Lễ trao huy hiệu Đảng đợt 19/5/2017">
                                </a>
                            </div>
                            <div class="item-details">
                                <h3 class="td-title" style="font-size:15px;">
                                    <a href="?controller=index&action=chitiet&id=<?php echo $value1['idBV'] ?>"><?php echo $value1['TieuDe'] ?>
                                    </a>
                                </h3>
                                <div class="td-meta-info">
                                    <span class="td-post-date">
                                        <time class="entry-date updated td-module-date"
                                            datetime="2019-03-19T10:36:44+00:00"><?php echo $value1['NgayTao'] ?>
                                        </time>
                                    </span>
                                </div>
                            </div>

                        </div>
                    </div>
                    <?php }}?>

                   
                  
                </div>
                <?php }}?>
            </div>
        </div>
        
      

    </div>

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
</body>

</html>