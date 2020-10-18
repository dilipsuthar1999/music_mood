<?php
	class home extends CI_Controller{
		public function index(){
			if(isset($_SESSION['email'])){
				$this->load->model('homemodel');
				$data['result']= $this->homemodel->homeview();
				$this->load->view('homeview',$data);				
			} else{
				redirect(base_url().'music');
			}
		}

		function play($id){
			if(isset($_SESSION['email'])){
				$this->load->model('homemodel');
				$data['result']= $this->homemodel->playview($id);
				$this->load->view('playview',$data);				
			} else{
				redirect(base_url().'music');
			}
		}

		function viewall(){
			if(isset($_SESSION['email'])){
				$this->load->model('homemodel');
				$data['result']= $this->homemodel->viewallview();
				$this->load->view('viewallview',$data);				
			} else{
				redirect(base_url().'music');
			}
		}

		function viewplaylist(){
			if(isset($_SESSION['email'])){
				$this->load->model('homemodel');
				$data['result']= $this->homemodel->viewplaylist();
				$this->load->view('playlistview',$data);				
			} else{
				redirect(base_url().'music');
			}			
		}

		function playlist(){
			$song_id = $_POST['song_id'];
			$this->load->model('homemodel');
			if($this->homemodel->playlistmodel($song_id) == true){
				echo "success";
			} else{
				echo "failed";
			}				
		}
	}
?>