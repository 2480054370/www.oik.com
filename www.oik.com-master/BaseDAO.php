<?php
class BaseDAO {
	protected $pdo;
	
	public function BaseDAO() {
		// echo "BaseDAO........";
		$dsn = 'mysql:dbname=oik;host=127.0.0.1';
		$this->pdo = new PDO($dsn, "root", "123456");
	}
}
?>