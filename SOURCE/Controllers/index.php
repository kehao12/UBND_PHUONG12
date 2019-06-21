<?php

if(isset($_GET['action'])){
	$action=$_GET['action'];
}
else{
	$action='';
}

switch ($action) {
	case 'index':{
        $table1='danhmuc';
        $id='ThuTu';
        $table='baiviet';
        $data3=$ad->getAllData1BV();
        $data=$model->getAllData($table);
        $data1=$ad->getAllDataOrderBy($table1,$id);
        $data2=$ad->getAllData4BV();
		require_once('Views/index/index.php');
		
		break;
	}

    case 'chitiet':{
        $table='baiviet';
        $data=$model->getAllData($table);
        $idBV=$_GET['id'];
        $table1='danhmuc';
        $id='ThuTu';
        $table2='binhluan';
        $data3=$model->getAllData($table2);
        $data1=$ad->getAllDataOrderBy($table,$id);
        $data4=$model->dem_lan_xem($idBV);
        if(isset($_POST['NoiDung'])){
            $Ngay=date("Y/m/d");
            $Email=$_POST['Email'];
            $HoTen=$_POST['HoTen'];
            $NoiDung=$_POST['NoiDung'];
            $TrangThai=1;
            $data=$model->insertBL($Ngay,$NoiDung,$Email,$HoTen,$TrangThai,$idBV);
            header('Location:index.php?controller=index&action=chitiet&id='.$idBV);
            
        }
		require_once('Views/index/chitiettintuc.php');
    
		break;
    }
    case 'pa':{
        $table='mucpa';
        $data=$model->getAllData($table);
        if(isset($_POST['gui'])){
            $muc=$_POST['muc'];
            $Email=$_POST['Email'];
            $HoTen=$_POST['HoTen'];
            $DiaChi=$_POST['DiaChi'];
            $NoiDung=$_POST['NoiDung'];
            $TrangThai=1;
            $data=$model->insertPA($Email,$HoTen,$DiaChi,$NoiDung,$TrangThai,$muc);
            header('Location:index.php?controller=index&action=tcpa');
        }
        require_once('Views/index/phananh.php');
		
		
		break;
    }
    case 'tcpa':{
        $table='phananh';
        $id='idPA';
        $table2='mucpa';
        $data4=$model->getAllData($table2);
		$data=$model->getAllData($table);
		$table1='traloiphananh';
        $data1=$model->getAllData($table1);
        $data3=$ad->demTong($table);
        if(isset($_POST['tim1'])){
             $NoiDung=$_POST['NoiDung'];
             $data5=$model->TimkiemND($NoiDung);
       

        }
        require_once('Views/index/tracuupa.php');
		
		
		break;
	}
    
    case 'tintuc':{
        $table='theloai';
        $table1='danhmuc';
        $id='Tin tức - Sự kiện';
        $table2='baiviet';
        $data=$ad->getAllData2Table1($table,$table1,$id);
        $data1=$model->getAllData($table2);
        require_once('Views/index/tintuc.php');
		
		
		break;
    }
    case 'bvtl':{
        $MaTL=$_GET['id'];
    
        $table2='baiviet';
        $table='theloai';
        $table1='danhmuc';
        $id='Tin tức - Sự kiện';
        $table2='baiviet';
        $data=$ad->getAllData2Table1($table,$table1,$id);
     
        $data1=$model->getAllData($table2);
        require_once('Views/index/theloai.php');
		
		
		break;
    }

    case 'thutuc':{
        $table='thutuc';
        $data=$model->getAllData($table);
        $table1='theloai';
        $table2='danhmuc';
        $id1='Thủ tục hành chính';
        $data=$model->getAllData($table);
        $data1=$ad->getAllData2Table($table2, $table1, $id1);
        require_once('Views/index/thutuc.php');
		
		
		break;
    }
    case 'tlthutuc':{
        $MaTL=$_GET['id'];
        $table='thutuc';
        $data=$model->getAllData($table);
        $table1='theloai';
        $table2='danhmuc';
        $id1='Thủ tục hành chính';
     
        $data1=$ad->getAllData2Table($table2, $table1, $id1);
        require_once('Views/index/theloaithutuc.php');
		
		
		break;
    }

    case 'ctthutuc':{
        $MaTT=$_GET['id'];
        $table='thutuc';
        $data=$model->getAllData($table);
        $table1='theloai';
        $table2='danhmuc';
        $id1='Thủ tục hành chính';
        $data4=$model->dem_lan_xem1($MaTT);
        $data=$model->getAllData($table);
        $data1=$ad->getAllData2Table($table2, $table1, $id1);
        require_once('Views/index/chitietthutuc.php');
		
		
		break;
    }
}

?>