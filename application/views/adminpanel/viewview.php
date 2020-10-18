<?php
  $this->load->view('adminpanel/headerview');
?>
    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">

      <h3>View Songs</h3>
      <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th>No.</th>
              <th>Title</th>
              <th>Description</th>
              <th>Image</th>
              <th>Song</th>
              <th>Delete</th>
            </tr>
          </thead>
          <tbody>
			<?php 
				$counter=1;
          		foreach ($result as $key => $value) {
          			echo "<tr>
			              <td>".$counter."</td>
			              <td>".$value['name']."</td>
			              <td>".$value['singer']."</td>
			              <td><img src='".$value['image']."' class='img-fluid' width='100'></td>
			              <td>	
			              	<audio controls>
						  		<source src=".$value['song'].">
							</audio></td>
			              <td><button class='btn btn-danger delete' name='".$value['id']."'>Delete</button></td>
			            </tr>";

			        $counter++;
          		}
  			?>
          </tbody>
        </table>
      </div>
    </main>      

<?php
  $this->load->view('adminpanel/footerview');
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script type="text/javascript">
	$(".delete").click(function(){

		var delete_id = $(this).attr('name');
		console.log(delete_id);
		var bool = confirm('Are you Sure you want to delete the song forever?');
		console.log(bool);

		if (bool) {
    		$.ajax({
    			url: "<?= base_url().'admin/dashboard/delete'; ?>",
    			type: 'post',
				data:{'delete_id': delete_id},
    			success: function(data){
					console.log(data);
					if (data == "deleted") {
						location.reload();
					}else if (data == "notdeleted"){
						alert("Something went wrong!");
					}
    			},
    			error: function(){
    			}
    		});
    		return false;
		}else{
			alert("Your Song is Safe");
		}
	});
</script>