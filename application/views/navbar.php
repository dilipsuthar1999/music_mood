  	<nav class="navbar navbar-expand-lg sticky-top shadow" id="at-top">
    	<a class="navbar-brand" href="#">Music Mood</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    		<i class="fas fa-bars"></i>
  		</button>
      	<div class="collapse navbar-collapse" id="navbarText">
        	<ul class="navbar-nav mr-auto">
        		<li class="nav-item"><a class="nav-link" href="<?= base_url().'home'; ?>">Home</a></li>
            <li class="nav-item"><a class="nav-link" href="<?= base_url().'home/viewall'; ?>">All Songs</a></li>            
        		<li class="nav-item"><a class="nav-link" href="<?= base_url().'home/viewplaylist'; ?>">Playlist</a></li>
        		<li class="nav-link"></li>
        	</ul>
        	<a href="<?= base_url().'account/signout'; ?>" class="login"><strong>Sign out</strong></a>
      	</div>
  	</nav>