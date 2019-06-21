<?php 
require_once('Model.php');
require_once('AdminModel.php');
class IndexModel extends Model{
	private $con=null;
	private $result=null;	

    public function insertPA($Email,$HoTen,$DiaChi,$NoiDung,$TrangThai,$muc){
        $sql  = "INSERT INTO phananh (Email,HoTen,DiaChi,NoiDung,TrangThai,idMuc) VALUES 
        ('$Email','$HoTen','$DiaChi','$NoiDung','$TrangThai','$muc')";
		return $this->execute($sql);
    }

    public function insertBL($Ngay,$NoiDung,$Email,$HoTen,$TrangThai,$idBV){
        $sql  = "INSERT INTO binhluan (Ngay,NoiDung,Email,HoTen,TrangThai,idBV) VALUES 
        ('$Ngay','$NoiDung','$Email','$HoTen','$TrangThai','$idBV')";
        echo $sql;
		return $this->execute($sql);
    }

    public function dem_lan_xem($ma)
    {
        $ma = intval($ma);
        $sql = "UPDATE  baiviet  SET SoLanXem = SoLanXem+1 WHERE idBV = $ma";
        return $this->execute($sql);
      
    }
    public function dem_lan_xem1($ma)
    {
        $ma = intval($ma);
        $sql = "UPDATE  thutuc  SET SoLanXem = SoLanXem+1 WHERE idTT = $ma";
        return $this->execute($sql);
      
    }
    public function  TimkiemND($NoiDung)
	{
        $sql="SELECT * FROM phananh WHERE NoiDung Like '%$NoiDung%'";
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
}