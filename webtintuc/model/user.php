<?php
include('database.php');

class user extends database {

	function dangki($name, $email, $password) {
		$insert = "insert into users(name, email, password) values(?, ?, ?)";
		$this->setQuery($insert);
		$result = $this->execute(array($name, $email, $password));
		if ($result) {
			return $this->getLastId();
		}
		return false;
	}

	function dangnhap($email, $password) {
		$select = "select * from users where email = '$email' and password = '$password'";
		$this->setQuery($select);
		return $this->loadRow(array($email, $password));
	}
}
?>
