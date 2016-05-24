<?php
require_once("/libs/Smarty.class.php");
class IndexAction{
	public function IndexAction(){
		$smarty = new Smarty();
		$smarty->assign('hello','hello world');
		$smarty->display('template/index.html');
	}
	
}
?>