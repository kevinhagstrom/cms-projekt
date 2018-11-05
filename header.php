<header class="row">
	<div class="col">
    	<nav class="navbar navbar-expand-lg navbar-light bg-light">
        	<a class="navbar-brand" href="<?php echo $_SERVER['PHP_SELF']; ?>">Fruit Stop</a>
        	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                  <a class="nav-link" href="<?php echo $_SERVER['PHP_SELF']; ?>">Home <span class="sr-only">(current)</span></a>
                </li>
				<li class="nav-item dropdown">
				  <a class="nav-link dropdown-toggle" href="" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Products</a>
				  <div class="dropdown-menu" aria-labelledby="dropdown01">
				    <a class="dropdown-item" href="#">Fruit</a>
              		<a class="dropdown-item" href="#">Vegetables</a>
              		<a class="dropdown-item" href="#">Berries</a>
				  </div>
				</li>
				<li class="nav-item">
				  <a class="nav-link" href="#">Contact</a>
				</li>
              </ul>
            </div>
			<a class="btn btn-secondary" href="login.html">Log in</a>
    	</nav>
	</div>
</header>