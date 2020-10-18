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
	
	<style type="text/css">
		@media (max-width: 575.98px) { 
			.md{
				display: flex;
			}
		}

		@media (min-width: 576px) and (max-width: 767.98px) { 
			.md{
				display: flex;
			}
		}	
	</style>
    
    <title>Music Mood | Songs</title>
  </head>
  <body>

<?php
	$this->load->view('navbar');
?>
  	<div class="container-fluid main-data">
  		<div class="language">
	  		<p class="title">Songs</p>

	  		<div class="row md">
				<?php
					foreach($result as $key => $value) {
	  			?>
		  			<div class="col-md-2 col-sm-4 col-6">
		  				<a href="<?= base_url().'home/play/'.$value['id']; ?>" class="data">
			  				<img src="<?php echo $value['image']; ?>" class="img-fluid">
			  				<p class="name"><?php echo $value['name']; ?></p>
			  			</a>
		  			</div>
		  		<?php
		  			}
		  		?>
	  		</div>

		</div>
	</div>

	<a href="#at-top" role="button"><i class="far fa-caret-square-up" style="color: #4d4d4d; font-size: 50px; position: fixed; bottom: 25px; right: 25px;"></i></a>	
	
<?php
	$this->load->view('footer');
?>