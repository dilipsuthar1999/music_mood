<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css2?family=Sansita+Swashed&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?= base_url().'assest/css/account.css'; ?>">

  <title>Music Mood | Sign in</title>
  </head>
  <body>
  	<div class="container-fluid">
  		<div class="row">
  			<div class="col-md-2 col-sm-1 col-1"></div>
  			<div class="col-md-8 col-sm-10 col-10">
  				<div class="row box">
  					<div class="col-md-1"></div>
		  			<div class="col-md-4">
		  				<img src="<?= base_url().'assest/images/music.jpg'; ?>" class="img-fluid">
		  			</div>
		  			<div class="col-md-1"></div>	
		  			<div class="col-md-5">
		  				<p class="head">Sign in</p>
		  				<div id="msg" style="font-size: 12px; color: red; font-family: sans-serif;"></div>
					  	<form class="form" id="signin_form" autocomplete="off">
					  		<div class="input-group mb-3">
							  	<div class="input-group-prepend">
							    	<span class="input-group-text" id="basic-addon1"><i class="fas fa-user-circle"></i></span>
							  	</div>
							  	<input type="email" name="email" class="form-control" placeholder="Email Address" aria-label="Email Address" aria-describedby="basic-addon1">
							</div>
					  		<div class="input-group mb-3">
							  	<div class="input-group-prepend">
							    	<span class="input-group-text" id="basic-addon2"><i class="fas fa-key"></i></span>
							  	</div>
							  	<input type="password" name="password" class="form-control" placeholder="Password" aria-label="Password" aria-describedby="basic-addon2">
							</div>
							<button type="Submit" name="Submit" class="btn btn-primary" id="sign_in">Sign in</button>
					  	</form>
					  	<a href="<?= base_url().'account/register'; ?>" class="foot">don&apos;t have an account?</a>
					</div>
  					<div class="col-md-1"></div>
				</div>
			</div>
  			<div class="col-md-2 col-sm-1 col-1"></div>
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
    	$('#sign_in').click(function() {
    		$.ajax({
    			url: "<?= base_url().'account/signin'; ?>",
    			type: 'post',
    			data: $('#signin_form').serialize(),
    			success: function(data){
    				if(data=='success'){
              window.location="<?= base_url().'home'; ?>";
    				} else{
	    				$('#msg').html(data);
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