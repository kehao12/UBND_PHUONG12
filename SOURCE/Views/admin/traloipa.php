<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Quản lý tin tức</title>

    <!-- Bootstrap core CSS-->
    <link href="./resources/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="./resources/font/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Page level plugin CSS-->
    <link href="./resources/datatables/dataTables.bootstrap4.css" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="./resources/css/sb-admin.css" rel="stylesheet">
    <script src="./resources/js/jquery-3.3.1.min.js"></script>
    <link rel="stylesheet" href="./resources/css/style.css">
    <script language="javascript" type="text/javascript" src="./resources/ckeditor/ckeditor.js"></script>
    <script language="javascript" type="text/javascript" src="./resources/ckfinder/ckfinder.js"></script>

</head>

<body id="page-top">

    <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

        <a class="navbar-brand mr-1" href="#">Admin</a>

        <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
            <i class="fas fa-bars"></i>
        </button>

        <!-- Navbar Search -->
        <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Tìm kiếm..." aria-label="Search"
                    aria-describedby="basic-addon2">
                <div class="input-group-append">
                    <button class="btn btn-primary" type="button">
                        <i class="fas fa-search"></i>
                    </button>
                </div>
            </div>
        </form>

        <!-- Navbar -->
        <ul class="navbar-nav ml-auto ml-md-0">
            <!-- <li class="nav-item dropdown no-arrow mx-1">
				<a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					<i class="fas fa-bell fa-fw"></i>
					<span class="badge badge-danger">9+</span>
				</a>
				<div class="dropdown-menu dropdown-menu-right" aria-labelledby="alertsDropdown">
					<a class="dropdown-item" href="#">Action</a>
					<a class="dropdown-item" href="#">Another action</a>
					<div class="dropdown-divider"></div>
					<a class="dropdown-item" href="#">Something else here</a>
				</div>
			</li> -->
            <!-- <li class="nav-item dropdown no-arrow mx-1">
				<a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					<i class="fas fa-envelope fa-fw"></i>
					<span class="badge badge-danger">7</span>
				</a>
				<div class="dropdown-menu dropdown-menu-right" aria-labelledby="messagesDropdown">
					<a class="dropdown-item" href="#">Action</a>
					<a class="dropdown-item" href="#">Another action</a>
					<div class="dropdown-divider"></div>
					<a class="dropdown-item" href="#">Something else here</a>
				</div>
			</li> -->
            <li class="nav-item dropdown no-arrow">
                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-user-circle fa-fw"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                    <!-- <a class="dropdown-item" href="#">Settings</a>
					<a class="dropdown-item" href="#">Activity Log</a> -->
                    <!-- <div class="dropdown-divider"></div> -->
                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">Thoát</a>
                </div>
            </li>
        </ul>

    </nav>

    <div id="wrapper">

        <!-- Sidebar -->
        <?php include('menu.php'); ?>

        <div id="content-wrapper">

            <div class="container-fluid">

                <!-- Breadcrumbs-->
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="">Dashboard</a>
                    </li>
                    <li class="breadcrumb-item">Quản lý phản ánh</li>
                </ol>

                <!-- Page Content -->
                <div class="i-content listPa">
                <?php foreach($data as $value){ 
                    if($value['idPA']==$idPA){?>
                    <div class="item">
                        <div class="row">
                           
                            <div class="col-md-6">
                                <div class="i-username"><?php echo $value['HoTen'] ?>

                                </div>
                            </div>
                        </div>
                        <div class="clear">

                        </div>
                        <div class="i-datetime">
                            <i class="fa fa-calendar">

                            </i>22:10 21/03/2019
                        </div>
                        <p class="i-text"><?php echo $value['NoiDung'] ?>
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
                        if($idPA==$value1['idPA']){?>
                        <div class="i-reply">
                            <div class="i-repname">UBND Quận Gò Vấp - Phường 12

                            </div>
                            <span class="span-reply">Đã trả lời</span>
                            <div class="i-repdatetime">
                                <i class="fa fa-calendar"></i>22:16 21/03/2019
                            </div>
                            <p class="i-reptext"><?php echo $value1['NoiDung'] ?></p>
                            <span class="cmminus" onclick="hiddenplus(this)">
                                <i class="fa fa-minus-circle" title="Hiển thị bớt đi"></i></span>
                            </div>
                        <?php }}?>
                       
                       
                        <form action="" method="post" class="mt-2">

                            <input type="text" name="NoiDung" class="form-control">
                            <button type="submit" name="gui" class="btn btn-primary mt-2">Gửi</button>
                        </form>

                     
                    </div>
                    <?php }}?>

                   


            </div>
            <!-- /.container-fluid -->

            <!-- Sticky Footer -->
            <footer class="sticky-footer">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright © Your Website 2018</span>
                    </div>
                </div>
            </footer>

        </div>
        <!-- /.content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <!-- <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Bạn muốn thoát?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Nhấn "Thoát" để đăng xuất.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Huỷ bỏ</button>
                    <a class="btn btn-primary" href="login.html">Thoát</a>
                </div>
            </div>
        </div>
    </div> -->
    <?php include('logout.php');?>

    <!-- <script language="javascript">
		CKEditor.replace("content");
	</script> -->
    <script>
        var inputs = document.querySelectorAll('.inputfile');
        Array.prototype.forEach.call(inputs, function (input) {
            var label = input.nextElementSibling,
                labelVal = label.innerHTML;

            input.addEventListener('change', function (e) {
                var fileName = '';
                if (this.files && this.files.length > 1)
                    fileName = (this.getAttribute('data-multiple-caption') || '').replace('{count}',
                        this.files.length);
                else
                    fileName = e.target.value.split('\\').pop();

                if (fileName)
                    label.querySelector('span').innerHTML = fileName;
                else
                    label.innerHTML = labelVal;
            });
        });
    </script>
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
  	<!-- Bootstrap core JavaScript-->
<script src="resources/js/jquery.min.js"></script>
<script src="resources/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="resources/js/jquery.easing.min.js"></script>

<!-- Page level plugin JavaScript-->
<script src="resources/datatables/jquery.dataTables.js"></script>
<script src="resources/datatables/dataTables.bootstrap4.js"></script>

<!-- Custom scripts for all pages-->
<script src="resources/js/sb-admin.min.js"></script>

<!-- Demo scripts for this page-->
<script src="resources/js/datatables-demo.js"></script>


</body>

</html>