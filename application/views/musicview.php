<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css2?family=Sansita+Swashed&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?= base_url().'assest/css/music.css'; ?>">
    <link rel="stylesheet" type="text/css" href="<?= base_url().'assest/css/footer.css'; ?>">
    
    <title>Music Mood</title>
  </head>
  <body>
	<nav class="navbar navbar-expand sticky-top shadow" id="at-top">
	  	<a class="navbar-brand" href="#">Music Mood</a>
	  	<div class="navbar-collapse" id="navbarText">
	    	<ul class="navbar-nav mr-auto"></ul>
	    	<a href="<?= base_url().'account'; ?>" class="login"><strong>Sign in</strong></a>
	  	</div>
	</nav>
	<div class="container-fluid bgcolor">
		<center>
			<i class="fas fa-music"></i>
			<p class="head">Music Mood</p>
			<p class="head-content">Your mood. Your activities. Your tastes. Music that gets you.</p>
		    <a href="<?= base_url().'account'; ?>" class="login content">Sign in</a>
		</center><br><br>
	</div>
	<div class="container-fluid color">
		<div class="row">
			<div class="col-md-1"></div>
			<div class="col-md-7">
				<div class="main">
					<p class="main-content">Bring your music along</p>
					<p class="main1-content">Publish Your songs in free and listen new and old song free. Just make You Mood.</p>
				</div>
			</div>
			<img src="<?= base_url().'assest/images/music.jpg'; ?>" class="img-fluid col-md-3">
			<div class="col-md-1"></div>
		</div>
	</div>

	<a href="#at-top" role="button"><i class="far fa-caret-square-up" style="color: #4d4d4d; font-size: 50px; position: fixed; bottom: 25px; right: 25px;"></i></a>
	
<?php
	$this->load->view('footer');
?>