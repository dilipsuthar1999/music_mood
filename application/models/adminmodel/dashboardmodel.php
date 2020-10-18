<?php
	class dashboardmodel extends CI_model{

		public function add($name, $image, $song, $singer){
			$add="INSERT INTO `music`(`name`, `image`, `song`, `singer`) VALUES ('$name','$image','$song','$singer')";
			
			if($this->db->query($add)){
				return true;
			} else{
				return false;
			}
		}

		public function view(){
			$query = $this->db->query("SELECT * FROM `music` ORDER BY id DESC");
			$data['result'] = $query->result_array();
			return $data['result'];
		}

		public function delete($delete_id){
			$qu = $this->db->query("DELETE FROM `music` WHERE `id`='$delete_id'");
			
			if($qu) {
				return true;
			} else{
				return false;
			}
		}
	}
?>