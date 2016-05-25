<?php
require_once("/libs/Smarty.class.php");
class IndexAction{
	public function IndexAction(){
		$smarty = new Smarty();
		$smarty->display('template/index.html');
	}
	
}
?>