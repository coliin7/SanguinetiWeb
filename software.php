		<!--Header-->
		<?php
include_once('inc/header.php');
require_once 'mysql-login.php';
?>


		<div class="container">
			<div class="row">
				<?php
					include_once('inc/carrousel.php');
				?>
			</div>
		</div>


		

		<div class="container">
			<div class="row">



		

		<?php
					$query = "SELECT * FROM `productos` ORDER BY RAND()";
					$resultado = $con->query($query);

				

					while ($producto = $resultado->fetch(PDO::FETCH_ASSOC)) 
            if ($producto["id_categoria"] == 2) {
              echo "<div class='col py-4'>

						<div class='card' style='width: 17rem;'>
              <img src='" . $producto["img"] . "' class='card-img-top' alt=" . $producto["nombre"] . ">
              <div class='card-body'>
                <h5 class='card-title'>" . $producto["nombre"] . "</h5>
              </div>            
			  <a href= ''<h4   class='btn btn-dark'> $" . $producto["precio"] . "</h4></a>
				
            </div>
          </div>";
            }
        
		  ?>


		


		  




			</div>
		</div>




		<!-- Footer -->

		<?php
			include_once('inc/footer.php');
		?>










		</html>
		
