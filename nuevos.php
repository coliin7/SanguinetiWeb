<?php

require_once 'mysql-login.php';

$a_multi_productos = json_decode(file_get_contents('productos.json'), true);
include_once('inc/header.php');
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





		?>
		<?php


		$query = "SELECT * FROM `productos` ORDER BY RAND()";
		$resultado = $con->query($query);


		while ($rows = $resultado->fetch(PDO::FETCH_ASSOC)) {

			if ($rows["nuevo"] == 1) {


				$productoNombre = $rows['nombre'];
				$productoPrecion = $rows['precio'];
				$productoImagen = $rows['img'];
				$productoId = $rows['id_producto'];
				$productodescripcion = $rows['descripcion']; 
		?>
					<div class="py-4 text-center">
						<div class="card mx-1" style='width: 14rem;'>
							<img class="card-img-top" src=<?php echo $productoImagen ?> alt="Card image cap">
							<div class="card-body">
								<h5 class="card-title"><?php echo $productoNombre ?></h5>
								<p class="card-text"><?php echo $productodescripcion ?></p>
							</div>
							<div class="card-footer px-1">
								<a href='producto_modelo.php?id_producto=<?php echo $productoId ?>'><button type="button" class="btn btn-dark">Detalles</button></a>
								<button type="button" class="btn btn-dark ml-4">Comprar</button>
							</div>
						</div>
					</div>
		<?php
			} else {
				break;
			}
		}


		?>
	</div>
</div>






<!-- Footer -->

<?php
include_once('inc/footer.php');
?>










</html>