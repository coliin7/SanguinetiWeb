<!doctype html>
<html>
<head>
<?php
function Activo($item_de_menu){
	echo strpos($_SERVER['PHP_SELF'], $item_de_menu )?'active':'';
}
?>
<title>KYZ Technology</title>	
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
		integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	<link rel="stylesheet" href="styles/styles.css">
	<script src='script.js' lenguage='Javascript'> </script>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>	
</head>
<header>
	<Section>
		<nav class="navbar navbar-expand-md navbar-light bg-dark">
			<div class="container ml-6 px-5">
				<a class="navbar-brand text-white" href="index.php"><img src="img/logoBer.png" alt=""></a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
					aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse md-pt-4 mdx-5 lg-pt-1 sm-pt-5" id="navbarNavDropdown">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item md-px-3 <?php Activo('hardware.php') ?>">
							<a class="nav-link text-white" href="hardware.php">Hardware</a>
						</li>
						<li class="nav-item md-px-3 <?php Activo('software.php') ?>">
							<a class="nav-link text-white" href="software.php">Software</a>
						</li>
						<li class="nav-item md-px-3 <?php Activo('perifericos.php') ?>">
							<a class="nav-link text-white" href="perifericos.php">Perifericos</a>
						</li>
				

						<li class="nav-item md-px-3 <?php Activo('contacto.php') ?>">
							<a class="nav-link text-warning" href="contacto.php">Contacto</a>
						</li>
					</ul>
				</div>
			</div>
		</nav>
	</Section>
</header>
<body>

