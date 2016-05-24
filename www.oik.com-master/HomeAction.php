<?php
require_once('libs/Smarty.class.php');
class HomeAction {
	public function HomeAction() {
		$smarty = new Smarty();
		$smarty->display('template/home.html');
	}
}
?>