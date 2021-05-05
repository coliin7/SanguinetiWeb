<!--Header-->

<?php
require_once('inc/header.php');
require_once 'mysql-login.php';





$PAG_LISTADO = 'index.php';
if (isset($_REQUEST['id_marca']))
	$id_marca = $_REQUEST['id_marca'];
else
	$id_marca = '';

if (isset($_REQUEST['id_categoria']))
	$id_categoria = $_REQUEST['id_categoria'];
else
	$id_categoria = '';

if (isset($_REQUEST['id_orden'])) {
	$id_orden = $_REQUEST['id_orden'];
} else {
	$id_orden = '';
}

// $a_multi_productos = json_decode(file_get_contents('data\productos.json'), true);
// $a_multi_marca = json_decode(file_get_contents('data\marcas.json'), true);
?>




<div class="container">
	<div class="row">
		<div class="col md-12 my-4 ">
			<?php
			include_once('inc/carrousel.php');
			?>
		</div>
	</div>
</div>
<div class="container">
	<div class="row">
		<div class="col-md-4">
			<?php
			require_once('inc/filtros.php');
			?>
		</div>
		<div class="col-md-8">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<h2 class="text-center">Destacados</h2>
					</div>
				</div>
			</div>
			<div class="container">
				<div class="row">



					<?php

					$query = "SELECT * FROM `productos` ORDER BY RAND()";
					$resultado = $con->query($query);

					?>
					<?php

					$contador = 0;

					while ($rows = $resultado->fetch(PDO::FETCH_ASSOC)) {
						if (($rows['id_categoria'] == $id_categoria || $id_categoria == '')
							&&
							($rows['id_marca'] == $id_marca || $id_marca == '')
						) {

							if ($contador < 6) {


								$productoNombre = $rows['nombre'];
								$productoPrecion = $rows['precio'];
								$productoImagen = $rows['img'];
								$productoId = $rows['id_producto'];
								$productodescripcion = $rows['descripcion'];
								if ($rows["destacado"] == true) {
									$contador++;
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
								}
							} else {
								break;
							}
						}
					}
					?>


				</div>
			</div>
		</div>
	</div>
</div>
</div>
</div>
<?php
$orden = 0;
?>




<div class="container">
	<div class="row">
		<div class="col -12">
			<h2 class="text-center">Productos</h2>
		</div>
	</div>
</div>
<div class="container">
	<div class="row">
		<?php
		
		if ($id_orden == 1) {
				$query = "SELECT * FROM `productos` 
						ORDER BY nombre ASC";
		} 
		if ($id_orden == 2) {
			$query = "SELECT * FROM `productos` 
					ORDER BY nombre DESC";
	} 


		$resultado = $con->query($query);

		?>
		<?php

		while ($rows = $resultado->fetch(PDO::FETCH_ASSOC)) {

			if (($rows['id_categoria'] == $id_categoria || $id_categoria == '')
				&&
				($rows['id_marca'] == $id_marca || $id_marca == '')
			) {
				$productoNombre = $rows['nombre'];
				$productoPrecion = $rows['precio'];
				$productoImagen = $rows['img'];
				$productoId = $rows['id_producto'];
				$productodescripcion = $rows['descripcion'];
		?>
				<div class="py-4 text-center">
					<div class="card mx-1" style='width: 16rem;'>
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
			}
		}
		?>
	</div>
</div>

<?php
require_once('inc/footer.php');
?>

<script src="js/jquery.min.js"></script>
<script src="js/main.js"></script>


</html>