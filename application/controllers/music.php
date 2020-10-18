<?php
	class music extends CI_Controller{
		public function index(){
			if(isset($_SESSION['email'])){
				redirect(base_url().'home');
			} else{
				$this->load->view('musicview');
			}
		}
	}
?>