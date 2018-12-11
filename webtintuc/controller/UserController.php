<?php
session_start();
include('model/user.php');

class UserController {

	function dangkitaikhoan($name, $email, $password) {
		$user = new user();
		$id_user = $user->dangki($name, $email, $password);
		if ($id_user > 0) {
			$_SESSION['success'] = "Đăng kí thành công";
			header('location:index.php');
			if (isset($$_SESSION['error'])) {
				unset($_SESSION['error']);
			}
		} else {
			$_SESSION['error'] = "Đăng kí thất bại";
			header('location:dangki.php');
		}
	}

	function dangnhaptaikhoan($email, $password) {
		$user = new user();
		$user1 = $user->dangnhap($email, $password);
		if ($user1 == true) {
			$_SESSION['user_name'] = $user1->name;
			header('location:index.php');
			if (isset($_SESSION['user_error'])) {
				unset($_SESSION['user_error']);
			}
		} else {
			$_SESSION['user_error'] = "Sai thông tin đăng nhập";
			header('location:dangnhap.php');
		}
	}

	function dangxuat() {
		session_destroy();
		header("location:index.php");
	}
}
?>
