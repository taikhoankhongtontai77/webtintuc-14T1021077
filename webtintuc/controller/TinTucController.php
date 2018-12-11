<?php
include('model/tintuc.php');
include('model/pager.php');

class TinTucController {

	// dành cho page trang chủ
	public function index() {
		$tintuc = new tintuc();
		$slide = $tintuc->getSlide();
		$menu = $tintuc->getMenu();

		return array('slide'=>$slide, 'menu'=>$menu);
	}

	// dành cho page loại tin
	function loaitin() {
		$id_loai = $_GET['id_loai'];
		$tintuc = new tintuc();
		$danhmuctin = $tintuc->getTinTucByIdLoai($id_loai);
		$trang_hientai = (isset($_GET['page'])) ? $_GET['page'] : 1;

		$pagination = new pagination(count($danhmuctin), $trang_hientai, 4, 5);
		$paginationHTML = $pagination->showPagination();
		$limit = $pagination->_nItemOnPage;
		$vitri = ($trang_hientai - 1) * $limit;
		$danhmuctin = $tintuc->getTinTucByIdLoai($id_loai, $vitri, $limit);

		$menu = $tintuc->getMenu();
		$title = $tintuc->getTitleById($id_loai);

		return array('danhmuctin'=>$danhmuctin, 'menu'=>$menu, 'title'=>$title, 'thanh_phantrang'=>$paginationHTML);
	}

	function chiTietTin() {
		$id_tin = $_GET['id_tin'];
		$tintuc = new tintuc();
		$chitiettin = $tintuc->getChiTietTin($id_tin);
		return array('chitiettin'=>$chitiettin);
	}

	function timkiem($key) {
		$tintuc = new tintuc();
		$tin = $tintuc->search($key);
		return $tin;
	}
}
?>
