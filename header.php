	<header class="row">
		<div class="col">
			<nav class="navbar navbar-expand-lg navbar-light bg-light">
				<a class="navbar-brand" href="<?php echo $_SERVER['PHP_SELF']; ?>">Fruit Stop</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<?php
				if(isset($_SESSION['user'])){
					echo '<a class="btn btn-secondary" href="index.php?action=logout">Log out</a>';
				} else{
					echo '<a class="btn btn-secondary" href="login.php">Log in</a>';
				}
				?>
			</nav>
		</div>
	</header>
