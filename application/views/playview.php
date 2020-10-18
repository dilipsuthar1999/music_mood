<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Sansita+Swashed&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="<?= base_url().'assest/css/play.css'; ?>">
	<link rel="stylesheet" type="text/css" href="<?= base_url().'assest/css/navbar.css'; ?>">    
    <title>Music Mood | Play</title>
  </head>
  <body>

<?php
	$this->load->view('navbar');
?>
  	<div class="container-fluid">
  		<div class="row">
  			<div class="col-xl-3 col-lg-2 col-md-2 col-sm-1 col-1"></div>
  			<div class="col-xl-6 col-lg-8 col-md-8 col-sm-10 col-10">
	  			<div class="row content">
	  				<div class="col-xl-5 col-lg-5 col-md-5">
			  			<?php
		  					foreach ($result as $key => $value) {
		  				?>
			  				<img src="<?php echo $value['image']; ?>" class="img-fluid" style="width: 100%;">
			  			<?php
			  				}
			  			?>
		  			</div>
		  			<div class="col-xl-7 col-lg-7 col-md-7">
			  			<?php
		  					foreach ($result as $key => $value) {
		  				?>
			  				<p class="name"><?php echo $value['name']; ?></p>
							<audio controls>
							  <source src="<?php echo $value['song']; ?>" type="audio/mpeg">
							</audio>
							<button name="<?php echo $value['id']; ?>" class="btn btn-primary addplaylist">Add To Playlist</button>
			  			<?php
			  				}
			  			?>
					</div>
				</div>
			</div>
  			<div class="col-xl-3 col-lg-2 col-md-2 col-sm-1 col-1"></div>
		</div>
 	</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

    <!-- Icons Script -->
    <script src="<?= base_url().'assest/fontawesome/js/all.min.js'; ?>"></script>
 	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script type="text/javascript">
		$(".addplaylist").click(function(){
			var playlist = $(this).attr('name');
    		$.ajax({
    			url: "<?= base_url().'home/playlist' ?>",
    			type: 'post',
				data:{'song_id': playlist},
    			success: function(data){
					if (data == "success") {
						alert('Successfully Added Into Your Playlist');
					}else if (data == "failed"){
						alert("Song is already Added Into Your Playlist");
					}
    			},
    			error: function(){
    			}
    		});
    		return false;
		});
	</script>
  </body>
</html>