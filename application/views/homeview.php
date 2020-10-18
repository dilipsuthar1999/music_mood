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
    <link rel="stylesheet" type="text/css" href="<?= base_url().'assest/css/home.css'; ?>">
    <link rel="stylesheet" type="text/css" href="<?= base_url().'assest/css/footer.css'; ?>">
    <title>Music Mood | Home</title>
  </head>
  <body>

<?php
	$this->load->view('navbar');
?>

	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
	  <div class="carousel-inner">
	    <div class="carousel-item active">
			<img src="<?= base_url().'assest/images/slider1.png'; ?>" class="d-block w-100" alt="...">
	    </div>
	    <div class="carousel-item">
	      <img src="<?= base_url().'assest/images/slider2.png'; ?>" class="d-block w-100" alt="...">
	    </div>
	    <div class="carousel-item">
	      <img src="<?= base_url().'assest/images/slider3.png'; ?>" class="d-block w-100" alt="...">
	    </div>
	    <div class="carousel-item">
	      <img src="<?= base_url().'assest/images/slider4.png'; ?>" class="d-block w-100" alt="...">
	    </div>
	    <div class="carousel-item">
	      <img src="<?= base_url().'assest/images/slider5.png'; ?>" class="d-block w-100" alt="...">
	    </div> 
	  </div>
	  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
	    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
	    <span class="sr-only">Previous</span>
	  </a>
	  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
	    <span class="carousel-control-next-icon" aria-hidden="true"></span>
	    <span class="sr-only">Next</span>
	  </a>
	</div>
	
  	<div class="container-fluid main-data">
  		<div class="language">
	  		<p class="title">Songs</p>
	  		<a href="<?= base_url().'home/viewall'; ?>">See All</a>

	  		<!-- on medium device -->
	  		<div class="row md">
				<?php
					foreach($result as $key => $value) {
						$key=$key+1;
	  					if($key==7){
	  						break;
	  					} else{ 
	  			?>
		  			<div class="col-md-2 col-sm-4 col-6">
		  				<a href="<?= base_url().'home/play/'.$value['id']; ?>" class="data">
			  				<img src="<?php echo $value['image']; ?>" class="img-fluid">
			  				<p class="name"><?php echo $value['name']; ?></p>
			  			</a>
		  			</div>
		  		<?php
		  				}
		  			}
		  		?>
	  		</div>

	  		<!-- on small device -->
			<div id="carouselExampleControls" class="carousel slide sm" data-ride="carousel">
			  <div class="carousel-inner">
			    <div class="carousel-item active">
			    	<div class="row">
			  			<div class="col-md-2 col-sm-4 col-6">
			  				<a href="<?= base_url().'home/play/'.$result[0]['id']; ?>" class="data">
				  				<img src="<?php echo $result[0]['image']; ?>" class="img-fluid">
				  				<p class="name"><?php echo $result[0]['name']; ?></p>
				  			</a>
			  			</div>
			  			<div class="col-md-2 col-sm-4 col-6">
			  				<a href="<?= base_url().'home/play/'.$result[1]['id']; ?>" class="data">
				  				<img src="<?php echo $result[1]['image']; ?>" class="img-fluid">
				  				<p class="name"><?php echo $result[1]['name']; ?></p>
				  			</a>
			  			</div>
			  			<div class="col-md-2 col-sm-4 col-6">
			  				<a href="<?= base_url().'home/play/'.$result[2]['id']; ?>" class="data">
				  				<img src="<?php echo $result[2]['image']; ?>" class="img-fluid">
				  				<p class="name"><?php echo $result[2]['name']; ?></p>
				  			</a>
			  			</div>
			  		</div>
			    </div>
			    <div class="carousel-item">
			    	<div class="row">
			    		<div class="col-md-2 col-sm-4 col-6">
			  				<a href="<?= base_url().'home/play/'.$result[3]['id']; ?>" class="data">
				  				<img src="<?php echo $result[3]['image']; ?>" class="img-fluid">
				  				<p class="name"><?php echo $result[3]['name']; ?></p>
				  			</a>			  			
				  		</div>
			  			<div class="col-md-2 col-sm-4 col-6">
			  				<a href="<?= base_url().'home/play/'.$result[4]['id']; ?>" class="data">
				  				<img src="<?php echo $result[4]['image']; ?>" class="img-fluid">
				  				<p class="name"><?php echo $result[4]['name']; ?></p>
				  			</a>			  			</div>
			  			<div class="col-md-2 col-sm-4 col-6">
			  				<a href="<?= base_url().'home/play/'.$result[5]['id']; ?>" class="data">
				  				<img src="<?php echo $result[5]['image']; ?>" class="img-fluid">
				  				<p class="name"><?php echo $result[5]['name']; ?></p>
				  			</a>
				  		</div>
			    	</div>
			    </div>
			  </div>
			  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
			    <i class="fas fa-angle-left"></i>
			    <span class="sr-only">Previous</span>
			  </a>
			  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
			    <i class="fas fa-angle-right"></i>
			    <span class="sr-only">Next</span>
			  </a>
			</div>

	  		<!-- on extra small device -->
			<div id="carouselExampleCaptions" class="carousel slide xsm" data-ride="carousel">
			  <div class="carousel-inner">
			    <div class="carousel-item active">
			  		<div class="row">
			  			<div class="col-md-2 col-sm-4 col-6">
			  				<a href="<?= base_url().'home/play/'.$result[0]['id']; ?>" class="data">
				  				<img src="<?php echo $result[0]['image']; ?>" class="img-fluid">
				  				<p class="name"><?php echo $result[0]['name']; ?></p>
				  			</a>
			  			</div>
			  			<div class="col-md-2 col-sm-4 col-6">
			  				<a href="<?= base_url().'home/play/'.$result[1]['id']; ?>" class="data">
				  				<img src="<?php echo $result[1]['image']; ?>" class="img-fluid">
				  				<p class="name"><?php echo $result[1]['name']; ?></p>
				  			</a>
			  			</div>
			  		</div>
			    </div>
			    <div class="carousel-item">
			  		<div class="row">
			  			<div class="col-md-2 col-sm-4 col-6">
			  				<a href="<?= base_url().'home/play/'.$result[2]['id']; ?>" class="data">
				  				<img src="<?php echo $result[2]['image']; ?>" class="img-fluid">
				  				<p class="name"><?php echo $result[2]['name']; ?></p>
				  			</a>
			  			</div>
			  			<div class="col-md-2 col-sm-4 col-6">
			  				<a href="<?= base_url().'home/play/'.$result[3]['id']; ?>" class="data">
				  				<img src="<?php echo $result[3]['image']; ?>" class="img-fluid">
				  				<p class="name"><?php echo $result[3]['name']; ?></p>
				  			</a>
			  			</div>
			  		</div>
			    </div>
			    <div class="carousel-item">
			  		<div class="row">
			  			<div class="col-md-2 col-sm-4 col-6">
			  				<a href="<?= base_url().'home/play/'.$result[4]['id']; ?>" class="data">
				  				<img src="<?php echo $result[4]['image']; ?>" class="img-fluid">
				  				<p class="name"><?php echo $result[4]['name']; ?></p>
				  			</a>
			  			</div>
			  			<div class="col-md-2 col-sm-4 col-6">
			  				<a href="<?= base_url().'home/play/'.$result[5]['id']; ?>" class="data">
				  				<img src="<?php echo $result[5]['image']; ?>" class="img-fluid">
				  				<p class="name"><?php echo $result[5]['name']; ?></p>
				  			</a>
				  		</div>
			  		</div>
			    </div>
			  </div>
			  <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
			   	<i class="fas fa-angle-left"></i>
			    <span class="sr-only">Previous</span>
			  </a>
			  <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
			    <i class="fas fa-angle-right"></i>
			    <span class="sr-only">Next</span>
			  </a>
			</div>
		</div>
	</div>

	<a href="#at-top" role="button"><i class="far fa-caret-square-up" style="color: #4d4d4d; font-size: 50px; position: fixed; bottom: 25px; right: 25px;"></i></a>	
	
<?php
	$this->load->view('footer');
?>