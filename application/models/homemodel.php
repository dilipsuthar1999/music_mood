<?php
	class homemodel extends CI_Model{

		public function homeview(){
			$query = $this->db->query("SELECT * FROM `music` ORDER BY id DESC");
			$data['result'] = $query->result_array();
			return $data['result'];			
		}

		public function playview($id){
			$query = $this->db->query("SELECT * FROM `music` where id='$id'");
			$data['result'] = $query->result_array();
			return $data['result'];
		}

		public function viewallview(){
			$query = $this->db->query("SELECT * FROM `music` ORDER BY id DESC");
			$data['result'] = $query->result_array();
			return $data['result'];	
		}

		public function viewplaylist(){
			$query = $this->db->query("SELECT music.id, music.image, music.name FROM playlist INNER JOIN music ON playlist.id = music.id where email='$_SESSION[email]'");
			$data['result'] = $query->result_array();
			return $data['result'];
		}

		public function playlistmodel($song_id){
			$check = $this->db->query("SELECT * FROM `playlist` where id='$song_id'");			
			
			if($check->num_rows() == 0){
				$userid = $_SESSION['email'];
				$playlist="INSERT INTO `playlist`(`email`, `id`) VALUES ('$userid','$song_id')";

				if($this->db->query($playlist)){
					return true;
				} else{
					return false;
				}			
			} else{
				return false;
			}
		}
	}
?>