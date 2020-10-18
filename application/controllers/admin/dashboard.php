<?php
	class dashboard extends CI_Controller{
		public function index(){
			$this->load->view('adminpanel/dashboardview');
		}

		public function add(){
			$this->load->view('adminpanel/addview');
		}

		public function view(){
			$this->load->model('adminmodel/dashboardmodel');
			$data['result']=$this->dashboardmodel->view();
			$this->load->view('adminpanel/viewview',$data);			
		}

		public function addsong(){
			$name= $_POST['name'];
			$poster= $_FILES['poster'];
			$song= $_FILES['song'];
			$singer= $_POST['singer'];
			
			$this->form_validation->set_rules('name','Name','trim|required');
			$this->form_validation->set_rules('singer','Singer','trim|required');

			if($this->form_validation->run() == false) {
				echo validation_errors();
			} else{
				$config['upload_path']          = './assest/upload/';
	            $config['allowed_types']        = 'jpeg|jpg|png|mpeg|mp3|mp4';
				$config['max_size'] = '0';
	            
	            $this->load->library('upload', $config);

	            if (!$this->upload->do_upload('poster')) {
	                $error = array('error' => $this->upload->display_errors());
	              	echo $error['error'];
	            } else{
					$pdata = array('upload_data' => $this->upload->data());
					$poster_url= base_url().'assest/upload/'.$pdata['upload_data']['file_name'];	            	

	                if (!$this->upload->do_upload('song')) {
		                $error = array('error' => $this->upload->display_errors());
		              	echo $error['error'];
		            } else{
						$sdata = array('upload_data' => $this->upload->data());
						$song_url= base_url().'assest/upload/'.$sdata['upload_data']['file_name'];

						$this->load->model('adminmodel/dashboardmodel');
						if($this->dashboardmodel->add($name, $poster_url, $song_url, $singer) == true){
							echo "success";
						} else{
							echo "something is wrong";
						}
					}
	            }
			}
		}

		public function delete(){
			$delete_id = $_POST['delete_id'];
			$this->load->model('adminmodel/dashboardmodel');
			if($this->dashboardmodel->delete($delete_id) == true) {
				echo "deleted";
			}else{
				echo "notdeleted";
			}
		}

	}
?>