<?php
require_once('/libs/Smarty.class.php');
require_once('UserDAO.php');
class loginAction {
	public function loginAction() {
		$smarty = new Smarty();
		$UserDAO = new UserDAO();
		$smarty->display('template/login.html');
	}
}
?>