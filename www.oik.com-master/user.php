<?php
class User {
	private $user_id;
	private $user_name;
	private $user_password;
	
	public function getUser_id() {
		return $this->user_id;
	}
	
	public function setUser_id($user_id) {
		$this->user_id = $user_id;
	}
	
	public function getUser_name() {
		return $this->user_name;
	}
	
	public function setUser_name($user_name) {
		$this->user_name = $user_name;
	}
	
	public function getUser_password() {
		return $this->user_password;
	}
	
	public function setUser_password($user_password) {
		$this->user_password = $user_password;
	}
}
?>