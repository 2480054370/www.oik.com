<?php
require_once('UserDAO.php');
class RegisterAction {
	public function RegisterAction() {
		$UserDAO = new UserDAO();
		$user = $UserDAO->save($_POST["user_name"], $_POST["user_password"]);
		header("Location:login.php");
	}
}
?>