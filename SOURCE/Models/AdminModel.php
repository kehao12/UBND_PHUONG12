<?php 
require_once('Model.php');
class AdminModel extends Model{
	private $con=null;
	private $result=null;	

	
	

	// Thực thi câu lệnh
	public function execute($sql)
	{
		$con=$this->connect();
		$this->result=$con->query($sql);
		return $this->result;
	}

	// Lấy dữ liệu
	public function getData()
	{
		if($this->result){
			$data=mysqli_fetch_array($this->result);
		}
		else{
			$data=0;
		}
		return $data;
	}

	public function getAllData($table)
	{
		$sql="SELECT * FROM $table";
		$this->execute($sql);
		if($this->num_rows()==0){
			$data=0;
		}	
		else
		{
			while($datas = $this->getData()){
				$data[]=$datas;
			}
		}
		return $data;
	}

	public function getAllDataOrderBy($table,$id)
	{
		$sql="SELECT * FROM $table ORDER BY $id";
		$this->execute($sql);
		if($this->num_rows()==0){
			$data=0;
		}	
		else
		{
			while($datas = $this->getData()){
				$data[]=$datas;
			}
		}
		return $data;
	}

	public function num_rows()
	{
		if($this->result){
			$num=mysqli_num_rows($this->result);
		}
		else
		{
			$num=0;
		}
		return $num;
	}

	public function getAllData2Table($table,$table1,$id)
	{
		$sql="SELECT * FROM $table join $table1 on $table.idDM=$table1.idDM WHERE $table.TenDM='$id'";
		$this->execute($sql);
		if($this->num_rows()==0){
			$data=0;
		}	
		else
		{
			while($datas = $this->getData()){
				$data[]=$datas;
			}
		}
		return $data;
	}

	public function getAllData2Table1($table,$table1,$id)
	{
		$sql="SELECT * FROM $table join $table1 on $table.idDM=$table1.idDM WHERE $table1.TenDM='$id'";
		$this->execute($sql);
		if($this->num_rows()==0){
			$data=0;
		}	
		else
		{
			while($datas = $this->getData()){
				$data[]=$datas;
			}
		}
		return $data;
	}


	public function login($user,$pass)
	{
		$con=$this->connect();
		$Pass=md5($pass);
		$sql="SELECT * FROM taikhoan WHERE TaiKhoan='$user' AND MatKhau='$Pass' AND TrangThai=0";
		$result=$this->execute($sql);
		$count=mysqli_num_rows($result);
		var_dump($sql);
		var_dump($count);
		return $count;
	}
	public function fetchUser($id)
	{
		$con=$this->connect();
		$sql="SELECT * FROM nhanvien WHERE TenTaiKhoan='$id' LIMIT 1";
		$result=mysqli_query($con,$sql);
		return $followingdata = $result->fetch_assoc();
	}

	public function fetchDanhmuc($id)
	{
		$con=$this->connect();
		$sql="SELECT * FROM danhmuc WHERE TenDM='$id' LIMIT 1";
		$result=mysqli_query($con,$sql);
		return $followingdata = $result->fetch_assoc();
	}

	public function getAllData1BV()
	{
		$sql="SELECT * FROM baiviet ORDER BY SoLanXem LIMIT 1";
		$this->execute($sql);
		if($this->num_rows()==0){
			$data=0;
		}	
		else
		{
			while($datas = $this->getData()){
				$data[]=$datas;
			}
		}
		return $data;
	}

	public function getAllData4BV()
	{
		$sql="SELECT * FROM baiviet ORDER BY SoLanXem LIMIT 4";
		$this->execute($sql);
		if($this->num_rows()==0){
			$data=0;
		}	
		else
		{
			while($datas = $this->getData()){
				$data[]=$datas;
			}
		}
		return $data;
	}

	public function getAllDataBVAll()
	{
		$sql="SELECT * FROM baiviet WHERE idBV NOT IN (SELECT idBV FROM baiviet ORDER BY SoLanXem LIMIT 1)";
		$this->execute($sql);
		if($this->num_rows()==0){
			$data=0;
		}	
		else
		{
			while($datas = $this->getData()){
				$data[]=$datas;
			}
		}
		return $data;
	}

	public function getAllDataTLBV()
	{
		$sql="SELECT theloai.idTL,theloai.TenTL FROM theloai JOIN danhmuc ON theloai.idDM=danhmuc.idDM WHERE theloai.idDM NOT IN (SELECT idDM FROM danhmuc WHERE TenDM='Thủ tục hành chính') 
		GROUP BY theloai.idTL,theloai.TenTL";
		$this->execute($sql);
		if($this->num_rows()==0){
			$data=0;
		}	
		else
		{
			while($datas = $this->getData()){
				$data[]=$datas;
			}
		}
		return $data;
	}

	public function insertNV($Tenqtv,$Diachi,$tt,$Tentk)
	{
		$sql  = "INSERT INTO nhanvien (TenNV,DiaChi,TrangThai,TaiKhoan) VALUES ('$Tenqtv','$Diachi','$tt','$Tentk')";
		return $this->execute($sql);
	}
	
	public function insertTK($Tentk,$Matkhau,$Quyen,$Trangthai)
	{
		$Matkhau=md5($Matkhau);
		$sql  = "INSERT INTO taikhoan (TaiKhoan,MatKhau,Quyen,TrangThai) VALUES ('$Tentk','$Matkhau','$Quyen','$Trangthai')";
		return $this->execute($sql);
	}

	public function updateNV($MaQTV,$Tenqtv, $Diachi, $Trangthai)
	{
		$sql  = "UPDATE nhanvien SET TenNV='$Tenqtv',DiaChi='$Diachi',TrangThai='$Trangthai' WHERE idNV='$MaQTV'";
		return $this->execute($sql);
	}

	public function deleteQTV($MaQTV)
	{
		$sql="DELETE FROM nhanvien WHERE idNV='$MaQTV'";
		return $this->execute($sql);
	}

	

	public function dem($table,$id){
		$sql="SELECT $id,COUNT(*) AS SoLuong FROM $table GROUP BY $id";
		$this->execute($sql);
		if($this->num_rows()==0){
			$data=0;
		}	
		else
		{
			while($datas = $this->getData()){
				$data[]=$datas;
			}
		}
		return $data;
	}
	public function demTong($table){
		$sql="SELECT COUNT(*) AS SoLuong FROM $table";
		$this->execute($sql);
		if($this->num_rows()==0){
			$data=0;
		}	
		else
		{
			while($datas = $this->getData()){
				$data[]=$datas;
			}
		}
		return $data;
	}

	public function dem1($table,$table1,$id){
		$sql="SELECT $table1.$id,COUNT(*) AS SoLuong FROM $table join $table1 on $table.$id=$table1.$id GROUP BY $table1.$id";
		$this->execute($sql);
		if($this->num_rows()==0){
			$data=0;
		}	
		else
		{
			while($datas = $this->getData()){
				$data[]=$datas;
			}
		}
		return $data;
	}

	

	public function insertDM($TenDM,$ThuTu,$Trangthai){
		$sql  = "INSERT INTO danhmuc (TenDM,ThuTu,TrangThai) VALUES ('$TenDM','$ThuTu','$Trangthai')";

		return $this->execute($sql);
	}
	public function updateDM($TenDM,$ThuTu,$Trangthai,$MaDM){
		$sql  = "UPDATE danhmuc SET TenDM='$TenDM',ThuTu='$ThuTu',TrangThai='$Trangthai' WHERE idDM='$MaDM'";
		return $this->execute($sql);
	}
	public function deleteDM($MaDM){
		$sql="DELETE FROM danhmuc WHERE idDM='$MaDM'";
		return $this->execute($sql);
	}
	public function insertTL($TenTL,$ThuTu,$Trangthai,$MaDM){
		$sql  = "INSERT INTO theloai (TenTL,ThuTu,TrangThai,idDM) VALUES ('$TenTL','$ThuTu','$Trangthai',$MaDM)";

		return $this->execute($sql);
	}
	public function updateTL($TenTL,$ThuTu,$MaTL){
		$sql  = "UPDATE theloai SET TenTL='$TenTL',ThuTu='$ThuTu' WHERE idTL='$MaTL'";
		return $this->execute($sql);
	}
	public function deleteTL($MaTL){
		$sql="DELETE FROM theloai WHERE idTL='$MaTL'";
		return $this->execute($sql);
	}
	public function insertTT($TieuDe,$NgayTao,$NoiDung,$SoLanXem,$TrangThai,$idTL,$TaiKhoan){
		$sql  = "INSERT INTO thutuc (TieuDe,NgayTao,NoiDung,SoLanXem,TrangThai,idTL,TaiKhoan)
		 VALUES ('$TieuDe','$NgayTao','$NoiDung','$SoLanXem','$TrangThai','$idTL','$TaiKhoan')";

		 return $this->execute($sql);
	}
	public function insertBV($TieuDe,$TacGia,$TomTat,$NgayTao,$HinhAnh,$NoiDung,$SoLanXem,$TrangThai,$idTL,$TaiKhoan){
		$sql  = "INSERT INTO baiviet (TieuDe,TacGia,TomTat,NgayTao,HinhAnh,NoiDung,SoLanXem,TrangThai,idTL,TaiKhoan)
		 VALUES ('$TieuDe','$TacGia','$TomTat','$NgayTao','$HinhAnh','$NoiDung','$SoLanXem','$TrangThai','$idTL','$TaiKhoan')";

		 return $this->execute($sql);
	}

	public function updateBV($TieuDe,$TacGia,$TomTat,$HinhAnh,$NoiDung,$TrangThai,$idTL,$MaBV){
		$sql  = "UPDATE baiviet SET TieuDe='$TieuDe',TacGia='$TacGia',TomTat='$TomTat',HinhAnh='$HinhAnh',NoiDung='$NoiDung',TrangThai='$TrangThai',idTL='$idTL' WHERE idBV='$MaBV'";
		return $this->execute($sql);
	}

	public function deleteBV($MaBV)
	{
		$sql="DELETE FROM baiviet WHERE idBV='$MaBV'";
		return $this->execute($sql);
	}

	public function updateTT($TieuDe,$NoiDung,$NgayTao,$TrangThai,$idTL,$MaBV){
		$sql  = "UPDATE thutuc SET TieuDe='$TieuDe',NoiDung='$NoiDung',NgayTao='$NgayTao',TrangThai='$TrangThai',idTL='$idTL' WHERE idTT='$MaBV'";
		return $this->execute($sql);
	}
	public function deleteTT($MaBV)
	{
		$sql="DELETE FROM thutuc WHERE idTT='$MaBV'";
		return $this->execute($sql);
	}

	public function insertTLPA($NoiDung,$NguoiTraLoi,$idPA){
		$sql  = "INSERT INTO traloiphananh (NoiDung,NguoiTraLoi,idPA)
		 VALUES ('$NoiDung','$NguoiTraLoi','$idPA')";

		 return $this->execute($sql);
	}
}
?>