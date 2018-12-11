<?php
include('database.php');

class tintuc extends database {

	function getSlide() {
		$select = "SELECT * FROM slide";
		$this->setQuery($select);
		return $this->loadAllRows();
	}

	function getMenu() {
		$sql="select t.*, GROUP_CONCAT(DISTINCT l.id, ':', l.Ten,':', l.TenKhongDau) AS tenLoaitin, tt.id as idTin, tt.TieuDe as TieuDeTin, tt.TieuDeKhongDau as TDKDTin, tt.TomTat as TomTatTin, tt.Hinh as HinhTin  from theloai t inner join loaitin l on t.id = l.idTheLoai inner join tintuc tt on tt.idLoaiTin = l.id group by t.id";
		$this->setQuery($sql);
		return $this->loadAllRows();
	}

	function getTinTucByIdLoai($id_LoaiTin, $vitri = -1, $limit = -1) {
		$select = "select * from tintuc where idLoaiTin = $id_LoaiTin";
		if ($vitri > -1 && $limit > 1) {
			$select .= " limit $vitri, $limit";
		}
		$this->setQuery($select);
		return $this->loadAllRows(array($id_LoaiTin));
	}

	function getTitleById($id_loaitin) {
		$select = "select Ten from loaitin where id = $id_loaitin";
		$this->setQuery($select);
		return $this->loadRow(array($id_loaitin));
	}

	function getChiTietTin($id) {
		$select = "select * from tintuc where id = $id";
		$this->setQuery($select);
		return $this->loadRow(array($id));
	}

	function search($key){
		$select = "select tt.*,lt.TenKhongDau as ten_khong_dau from tintuc tt inner join loaitin lt on lt.id = tt.idLoaiTin where TieuDe like '%$key%' or TomTat like '%$key%'";
		$this->setQuery($select);
		return $this->loadAllRows(array($key));
	}
}
?>
