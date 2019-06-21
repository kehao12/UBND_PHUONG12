<?php if(isset($_GET['action'])) {
	$action=$_GET['action'];
}

else {
	$action='';
}

switch ($action) {
	case 'index': {

		require_once('Views/admin/adindex.php');

		break;
	}

	case 'login': {

		if(isset($_POST['DN'])) {
			$TenTK=$_POST['TenTK'];
			$Pass=$_POST['Pass'];
			$result=$model->login($TenTK, $Pass);

			//$data=$model->fetchUser($TenTK);
			if($result==1) {
				session_start();
				$_SESSION['login']=1;
				$_SESSION['admin']=$TenTK;
				$_SESSION['Quyen']=$Quyen;

				header('Location:admin.php?controller=Admin&action=index');
			}

			else {

				header('Location:admin.php?controller=Admin&action=login');
			}

		}

		else {
			require_once('Views/admin/adlogin.php');
		}

		break;
	}

	case'logout': {
		session_start();
		unset($_SESSION['login']);
		unset($_SESSION['admin']);
		header('Location:admin.php?controller=Admin&action=login');
		break;

	}

	// Quản lý quản trị viên
	case 'qlqtv': {
		session_start();

		if(isset($_SESSION['login'])) {
			$table="nhanvien";
			$table1="taikhoan";
			$data=$model->getAllData($table);
			$data1=$model->getAllData($table1);
			require_once('Views/admin/quanlyqtv.php');
		}

		else {
			header('Location:admin.php?controller=Admin&action=login');
		}

		break;
	}

	case 'themqtv': {
		session_start();

		if(isset($_SESSION['login'])) {
			$table="nhanvien";
			$table="taikhoan";
			$data=$model->getAllData($table);

			if(isset($_POST['them'])) {
				$Tenqtv=$_POST['tenqtv'];
				$Diachi=$_POST['diachi'];
				$Tentk=$_POST['tentk'];
				$Matkhau=$_POST['matkhau'];
				$Quyen=$_POST['quyen'];
				$Trangthai=$_POST['trangthai'];
				$tt=1;
				$result=$model->insertTK($Tentk, $Matkhau, $Quyen, $Trangthai);
				$result=$model->insertNV($Tenqtv, $Diachi, $tt, $Tentk);

				if($result) {
					$thanhcong[]='success';
				}
			}

			require_once('Views/admin/qtv/themqtv.php');
		}

		else {
			header('Location:admin.php?controller=Admin&action=login');
		}

		break;
	}

	case 'suaqtv': {
		session_start();

		if(isset($_SESSION['login'])) {
			$MaQTV=$_GET['id'];
			$table="nhanvien";

			$data=$model->getAllData($table);

			if(isset($_POST['sua'])) {
				$Tenqtv=$_POST['tenqtv'];
				$Diachi=$_POST['diachi'];
				$Trangthai=$_POST['trangthai'];
				$result=$model->updateNV($MaQTV,$Tenqtv, $Diachi, $Trangthai);

				if($result) {
					$thanhcong[]='success';
				}
			}

			require_once('Views/admin/qtv/suaqtv.php');
		}

		else {
			header('Location:admin.php?controller=Admin&action=login');
		}

		break;
	}

	case 'xoaqtv': {
		session_start();

		if(isset($_SESSION['login'])) {
			$MaQTV=$_GET['id'];

			if($model->deleteQTV($MaQTV)) {
				header('Location:admin.php?controller=Admin&action=qlqtv');
			}
		}

		else {
			header('Location:admin.php?controller=Admin&action=login');
		}

		break;
	}

	case 'qldm': {
		session_start();

		if(isset($_SESSION['login'])) {
			$table='danhmuc';
			$table1='theloai';
			$id='ThuTu';
			$id1='idDM';
			$data=$model->getAllDataOrderBy($table, $id);
			$data1=$model->getAllDataOrderBy($table1, $id);
			$data2=$model->dem($table1, $id1);
			require_once('Views/admin/quanlydm.php');
		}

		else {
			header('Location:admin.php?controller=Admin&action=login');
		}

		break;
	}

	case 'themdm': {
		session_start();

		if(isset($_SESSION['login'])) {
			if(isset($_POST['them1'])) {
				$TenDM=$_POST['TenDM'];
				$ThuTu=$_POST['ThuTu'];
				$Trangthai=$_POST['TrangThai'];
				$result=$model->insertDM($TenDM, $ThuTu, $Trangthai);

				if($result) {
					$thanhcong[]='success';
				}
			}

			require_once('Views/admin/danhmuc/themdm.php');
		}

		else {
			header('Location:admin.php?controller=Admin&action=login');
		}

		break;
	}



	case 'suadm': {
		session_start();

		if(isset($_SESSION['login'])) {
			$MaDM=$_GET['id'];
			$id='ThuTu';
			$table='danhmuc';
			$data=$model->getAllDataOrderBy($table, $id);

			if(isset($_POST['sua'])) {
				$TenDM=$_POST['TenDM'];
				$ThuTu=$_POST['ThuTu'];
				$Trangthai=$_POST['TrangThai'];
				$result=$model->updateDM($TenDM, $ThuTu, $Trangthai, $MaDM);

				if($result) {
					$thanhcong[]='success';
				}
			}

			require_once('Views/admin/danhmuc/suadm.php');
		}

		else {
			header('Location:admin.php?controller=Admin&action=login');
		}

		break;
	}

	case 'xoadm': {
		session_start();

		if(isset($_SESSION['login'])) {
			$MaDM=$_GET['id'];

			if($model->deleteDM($MaDM)) {
				header('Location:admin.php?controller=Admin&action=qldm');
			}
		}

		else {
			header('Location:admin.php?controller=Admin&action=login');
		}

		break;
	}


	case 'themtl': {
		session_start();

		if(isset($_SESSION['login'])) {
			$MaDM=$_GET['id'];
			$table='theloai';
			$data=$model->getAllData($table);

			if(isset($_POST['them1'])) {
				$TenTL=$_POST['TenTL'];
				$ThuTu=$_POST['ThuTu'];
				$Trangthai=$_POST['TrangThai'];
				$result=$model->insertTL($TenTL, $ThuTu, $Trangthai, $MaDM);

				if($result) {
					$thanhcong[]='success';
				}

				header('Location:admin.php?controller=Admin&action=qldm');
			}

			require_once('Views/admin/theloai/themtl.php');
		}

		else {
			header('Location:admin.php?controller=Admin&action=login');
		}

		break;
	}

	case 'suatl': {
		session_start();

		if(isset($_SESSION['login'])) {
			$MaTL=$_GET['id'];
			$MaTL=$_GET['id'];
			$table='theloai';
			$data=$model->getAllData($table);

			if(isset($_POST['them1'])) {
				$TenTL=$_POST['TenTL'];
				$ThuTu=$_POST['ThuTu'];
				$result=$model->updateTL($TenTL, $ThuTu, $MaTL);

				if($result) {
					$thanhcong[]='success';
				}

				header('Location:admin.php?controller=Admin&action=qldm');
			}

			require_once('Views/admin/theloai/suatl.php');
		}

		else {
			header('Location:admin.php?controller=Admin&action=login');
		}

		break;
	}

	case 'xoatl': {
		session_start();

		if(isset($_SESSION['login'])) {
			$MaTL=$_GET['id'];

			if($model->deleteTL($MaTL)) {
				header('Location:admin.php?controller=Admin&action=qldm');
			}
		}

		else {
			header('Location:admin.php?controller=Admin&action=login');
		}

		break;
	}

	case 'qltt': {
		session_start();

		if(isset($_SESSION['login'])) {

			$table1='theloai';
			$table='baiviet';
			$id='idDM';
			$data=$model->getAllData($table);
			$data1=$model->getAllDataOrderBy($table1, $id);
			require_once('Views/admin/quanlytt.php');
		}

		else {
			header('Location:admin.php?controller=Admin&action=login');
		}

		break;
	}

	case 'themtt': {
		session_start();

		if(isset($_SESSION['login'])) {
			$table='theloai';
			$id='ThuTu';
			$data=$model->getAllDataOrderBy($table, $id);
			$data2=$model->getAllDataTLBV();
			if(isset($_POST['them1'])) {
				$TieuDe=$_POST['TieuDe'];
				$TacGia=$_POST['TacGia'];
				$TomTat=$_POST['TomTat'];
				$NgayTao=date("Y/m/d");
				$HinhAnh=$_POST['HinhAnh'];
				$NoiDung=$_POST['NoiDung'];
				$SoLanXem=0;
				$TrangThai=$_POST['TrangThai'];
				$idTL=$_POST['TL'];
				$TaiKhoan=$_SESSION['admin'];
				$result=$model->insertBV($TieuDe, $TacGia, $TomTat, $NgayTao, $HinhAnh, $NoiDung, $SoLanXem, $TrangThai, $idTL, $TaiKhoan);

				if($result) {
					$thanhcong[]='success';
				}
			}

			require_once('Views/admin/tintuc/themtt.php');
		}

		else {
			header('Location:admin.php?controller=Admin&action=login');
		}

		break;
	}

	case 'suatt': {
		session_start();

		if(isset($_SESSION['login'])) {
			$table1='theloai';
			$table='baiviet';
			$id='idDM';
			$data=$model->getAllData($table);
			$data1=$model->getAllDataOrderBy($table1, $id);
			$MaBV=$_GET['id'];
			$data2=$model->getAllDataTLBV();
			if(isset($_POST['sua'])) {

				$TieuDe=$_POST['TieuDe'];
				$TacGia=$_POST['TacGia'];
				$TomTat=$_POST['TomTat'];
				$NgayTao=date("Y/m/d");
				$HinhAnh=$_POST['HinhAnh'];
				$NoiDung=$_POST['NoiDung'];
				$SoLanXem=0;
				$TrangThai=$_POST['TrangThai'];
				$idTL=$_POST['idTL'];

				$result=$model->updateBV($TieuDe, $TacGia, $TomTat, $HinhAnh, $NoiDung, $TrangThai, $idTL, $MaBV);

				if($result) {
					$thanhcong[]='success';
				}

				header('Location:admin.php?controller=Admin&action=qltt');
			}

			require_once('Views/admin/tintuc/suatt.php');
		}

		else {
			header('Location:admin.php?controller=Admin&action=login');
		}

		break;
	}

	case 'xoatintuc':{
		session_start();

		if(isset($_SESSION['login'])) {
			$MaBV=$_GET['id'];

			if($model->deleteBV($MaBV)) {
				header('Location:admin.php?controller=Admin&action=qltt');
			}
		}

		else {
			header('Location:admin.php?controller=Admin&action=login');
		}

		break;
	}

	case 'qlthutuc': {
		session_start();

		if(isset($_SESSION['login'])) {

			$table1='theloai';
			$table='thutuc';
			$table2='danhmuc';
			$id='idDM';
			$id1='Thủ tục hành chính';
			$data1=$model->getAllData($table1);
			$data=$model->getAllData($table);
			// $data1=$model->getAllData2Table($table2,$table1,$id1);
			require_once('Views/admin/quanlythutuc.php');
		}

		else {
			header('Location:admin.php?controller=Admin&action=login');
		}

		break;
	}

	case 'themthutuc': {
		session_start();

		if(isset($_SESSION['login'])) {
			$table1='theloai';
			$table='baiviet';
			$table2='danhmuc';
			$id1='Thủ tục hành chính';
			$data=$model->getAllData($table);
			$data1=$model->getAllData2Table($table2, $table1, $id1);

			if(isset($_POST['them1'])) {
				$TieuDe=$_POST['TieuDe'];
				$NgayTao=date("Y/m/d");
				$NoiDung=$_POST['NoiDung'];
				$SoLanXem=0;
				$TrangThai=$_POST['TrangThai'];
				$idTL=$_POST['TL'];
				$TaiKhoan=$_SESSION['admin'];
				$result=$model->insertTT($TieuDe, $NgayTao, $NoiDung, $SoLanXem, $TrangThai, $idTL, $TaiKhoan);

				if($result) {
					$thanhcong[]='success';
				}
			}

			require_once('Views/admin/thutuc/themthutuc.php');
		}

		else {
			header('Location:admin.php?controller=Admin&action=login');
		}

		break;
	}

	case 'xoatt': {
		session_start();

		if(isset($_SESSION['login'])) {
			$MaBV=$_GET['id'];

			if($model->deleteTT($MaBV)) {
				header('Location:admin.php?controller=Admin&action=qltt');
			}
		}

		else {
			header('Location:admin.php?controller=Admin&action=login');
		}

		break;
	}

	case 'suathutuc': {
		session_start();

		if(isset($_SESSION['login'])) {
			$table1='theloai';
			$table='thutuc';
			$table2='danhmuc';
			$id1='Thủ tục hành chính';
			$data=$model->getAllData($table);
			$data1=$model->getAllData2Table($table2, $table1, $id1);
			$MaBV=$_GET['id'];

			if(isset($_POST['sua'])) {
				$TieuDe=$_POST['TieuDe'];
				$NgayTao=date("Y/m/d");
				$NoiDung=$_POST['NoiDung'];

				$TrangThai=$_POST['TrangThai'];
				$idTL=$_POST['idTL'];
				$result=$model->updateTT($TieuDe, $NoiDung, $NgayTao, $TrangThai, $idTL, $MaBV);
			}

			require_once('Views/admin/thutuc/suathutuc.php');
		}

		else {
			header('Location:admin.php?controller=Admin&action=login');
		}
			break;
		}

		case 'qlpa': {
			session_start();

		if(isset($_SESSION['login'])) {
			$table='phananh';
			$data=$model->getAllData($table);
			$table1='mucpa';
			$data1=$model->getAllData($table1);
			$table2='traloiphananh';

			$id='idPA';
			$data3=$model->dem1($table, $table2, $id);
			require_once('Views/admin/qlpa.php');
		}

		else {
			header('Location:admin.php?controller=Admin&action=login');
		}
			break;
		}

		

		case 'traloipa': {
			session_start();

			if(isset($_SESSION['login'])) {
			$idPA=$_GET['id'];
			$table='phananh';
			$data=$model->getAllData($table);
			$table1='traloiphananh';
			$data1=$model->getAllData($table1);
			$id='idPA';
			$data3=$model->dem1($table, $table1, $id);

			if(isset($_POST['gui'])) {
				$NoiDung=$_POST['NoiDung'];
				$NguoiTraLoi=$_SESSION['admin'];
				$rs=$model->insertTLPA($NoiDung, $NguoiTraLoi, $idPA);
				header('Location:admin.php?controller=Admin&action=qlpa');
			}

			require_once('Views/admin/traloipa.php');
		}

		else {
			header('Location:admin.php?controller=Admin&action=login');
		}
			break;
		}

		

	}

	?>