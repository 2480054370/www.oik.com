<?php
require_once('libs/Smarty.class.php');
class HomeAction {
	public function HomeAction() {
		$smarty = new Smarty();
		
		if ($_SESSION["user_name"] != "") {
			$dsn = 'mysql:dbname=oik;host=127.0.0.1';
			$pdo = new PDO($dsn, "root", "123456");
			$stmt = $pdo->prepare("select * from user where user_name=:user_name");
			$stmt->bindParam(':user_name', $_SESSION["user_name"]);
			$stmt->execute();
			$result = $stmt->fetch();
			if ($result["user_name"] != "") {
				$smarty->assign("user_name", $result["user_name"]);
			}
		}
		
		$smarty->display('template/home.html');
	}
}
?>