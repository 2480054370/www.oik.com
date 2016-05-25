<?php
require_once("UserDAO.php");
class AuthAction {
	public function AuthAction() {
		$userdao = new UserDAO();
		$user = $userdao->findByAccount($_POST["user_name"], $_POST["user_password"]);
		if ($user instanceof User && $user->getUser_name() != "") {
			 $_SESSION["user_name"] = $user->getUser_name();
			 //$_SESSION["user_id"] = $user->getUser_id();
			header("Location:home.php");
		} else {
			header("Location:login.php");
		}
	}
}
?>