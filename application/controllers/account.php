<?php
	class account extends CI_Controller{
		public function index(){
			if(isset($_SESSION['email'])){
				redirect(base_url().'home');
			} else{
				$this->load->view('loginview');
			}
		}

		public function register(){
			if(isset($_SESSION['email'])){
				redirect(base_url().'home');
			} else{
				$this->load->view('registerview');
			}
		}

		function signup(){
			$email=$_POST['email'];
			$password=$_POST['password'];

			$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|xss_clean|is_unique[sign_up.email]');
			$this->form_validation->set_rules('password', 'Password', 'trim|required');
			$this->form_validation->set_rules('cpassword', 'Password Confirmation', 'trim|required|matches[password]');

			$this->form_validation->set_message('is_unique', 'The <strong>'.$email.'</strong> belongs to an existing account');  

			if($this->form_validation->run() == false){
				echo validation_errors();
			} else{
				$this->load->model('accountmodel');
				if($this->accountmodel->register($email,$password) == true){
					echo "success";
				} else{
					echo "failed to create your account. try again";
				}	
			}
		}

		function signin(){
			$email=$_POST['email'];
			$password=$_POST['password'];

			$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|xss_clean');
			$this->form_validation->set_rules('password', 'Password', 'trim|required');

			if($this->form_validation->run() == false){
				echo validation_errors();
			} else{
				$this->load->model('accountmodel');
				if($this->accountmodel->check_email($email,$password) == true){
					$this->session->set_userdata('email',$email);
					echo "success";
				} else{
					echo "Invalid User";
				}
			}
		}

		function signout(){
			unset($_SESSION['email']);
			session_destroy();
			redirect(base_url().'music');
		}
	}
?>