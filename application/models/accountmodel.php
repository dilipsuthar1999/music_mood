<?php
	class accountmodel extends CI_Model{

		public function register($email, $password){
			$epassword= md5($password);
			$create_acc="INSERT INTO `sign_up`(`email`, `password`) VALUES ('$email','$epassword')";

			if($this->db->query($create_acc)){
				return true;
			} else{
				return false;
			}
		}

		public function check_email($email, $password){
			$dpassword= md5($password);
			$check_email=$this->db->query("SELECT `email` FROM `sign_up` WHERE email='$email' AND password='$dpassword'");

			if($check_email->num_rows() == 1){
				return true;
			} else{
				return false;
			}
		}
	}
?>