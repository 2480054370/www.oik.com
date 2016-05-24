<?php
require_once("BaseDAO.php");
require_once("user.php");

class UserDAO extends BaseDAO {
	public function findById($user_id) {
		$stmt = $this->pdo->prepare("select * from user where user_id=:user_id");
		$stmt->bindParam(':user_id', $user_id);
		$stmt->execute();
		$result = $stmt->fetch();
		
		if ($result["user_name"] != "") {
			$user = new User();
			$user->setUser_id($result["user_id"]);
			$user->setUser_name($result["user_name"]);
			return $user;
		} else {
			return new User();
		}
	}
	
	public function findByAccount($user_name, $user_password) {
			$find = $this->pdo->prepare("select user_password from user where user_name=:user_name");
			$find->bindParam(':user_name', $user_name);
			$find->execute();
			$row = $find->fetch();
			$hash = $row["user_password"];
			
			if(password_verify($user_password, $hash)){
			$stmt = $this->pdo->prepare("select * from user where user_name=:user_name");
			$stmt->bindParam(':user_name', $user_name);
			$stmt->execute();
			$result = $stmt->fetch();
		}else{
			header("Location:home.php");
			}

		if ($result["user_name"] != "") {
			$user = new User();
			$user->setUser_id($result["user_id"]);
			$user->setUser_name($result["user_name"]);
			return $user;
		} else {
			return new User();
		}
	}
	
	public function save($user_name,$user_password){
			$stmt = $this->pdo->prepare("insert into user(user_name,user_password,register_time,last_reg_time) values (:user_name,:user_password,:register_time,:last_reg_time)");
			$stmt->bindParam(':user_name',$user_name);
			
			$options = [
    			'cost' => 12,
			];
			$hash_password = password_hash($user_password, PASSWORD_BCRYPT, $options);
			
			$stmt->bindParam(':user_password',$hash_password);
			$stmt->bindParam(':register_time',date("Y-m-d H:i:s"));
			$stmt->bindParam(':last_reg_time',date("Y-m-d H:i:s"));
			$stmt->execute();
		}
}
?>