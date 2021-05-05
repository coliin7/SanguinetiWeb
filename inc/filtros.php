<?php

$PAGINA_LISTADO = 'index.php';

if (isset($_REQUEST['id_marca'])) {
  $id_marca = $_REQUEST['id_marca'];
} else {
  $id_marca = '';
}

if (isset($_REQUEST['id_categoria'])) {
  $id_categoria = $_REQUEST['id_categoria'];
} else {
  $id_categoria = '';
}

if (isset($_REQUEST['id_orden'])) {
  $id_orden = $_REQUEST['id_orden'];
} else {
  $id_orden = '';
}

$queryMarcas = "SELECT * FROM `marcas`";
$resultadoMarcas = $con->query($queryMarcas);
$queryOrden = "SELECT * FROM `orden`";
$resultadoOrden = $con->query($queryOrden);
$queryCategorias = "SELECT * FROM `categorias`";
$resultadoCategorias = $con->query($queryCategorias);

				


?>
<div class="col-12">
  <form action="">
    <div class="list-group lista-filtros" data-categoria=<?php echo '"' . $id_categoria . '"' ?> data-marca=<?php echo '"' . $id_marca . '"' ?>>
      <?php
      echo ' <h3 class="py-3 ">  <a class="filtro-categorias"  data-id="marca"  href="' . $PAGINA_LISTADO . '?id_marca=&id_categoria=' . $id_categoria . '">Marcas</a> </h3>';
      // foreach ($marcas as $marca) {
        while ($marca = $resultadoMarcas->fetch(PDO::FETCH_ASSOC))  {
        echo '<a class="" href="' . $PAGINA_LISTADO . '?id_marca=' . $marca['id_marca'] . '&id_categoria=' . $id_categoria . '&id_orden=' . $id_orden . '">';
        echo ' <button data-id="' . $marca['nombre'] . '" type="button" data-filtro="marca"  class="list-group-item list-group-item-action marca ">
        ' . $marca['nombre'] . '
      </button>';
        echo '</a>';
      }

      echo ' <h3 class="py-3 " >  <a class="filtro-marcas" data-id="categoria"  href="' . $PAGINA_LISTADO . '?id_marca=' . $id_marca . '&id_categoria=">Categorias</a> </h3>';

      
        while ($categoria = $resultadoCategorias->fetch(PDO::FETCH_ASSOC))  {
        echo '<a class="" href="' . $PAGINA_LISTADO . '?id_marca=' . $id_marca . '&id_categoria=' . $categoria['id_categoria'] .  '&id_orden=' . $id_orden . '">';
        echo ' <button type="button" data-id="' . $categoria['nombre'] . '" data-filtro="categoria"  class="list-group-item list-group-item-action  categoria ">
        ' . $categoria['nombre'] . '
      </button>';
        echo '</a>';
      }

      echo ' <h3 class="py-3 " >  <a class="filtro-orden" data-id="orden"  href="' . $PAGINA_LISTADO . '?id_marca=' . $id_marca . '&id_categoria=">Ordenar ascendente</a> </h3>';
      while ($ordenes = $resultadoOrden->fetch(PDO::FETCH_ASSOC))  {
        echo '<a class="" href="' . $PAGINA_LISTADO . '?id_marca=' . $id_marca . '&id_categoria=' . $id_categoria . '&id_orden=' . $ordenes['id_orden'] . '">';
        echo ' <button type="button" data-id="' . $ordenes['nombre'] . '" data-filtro="orden"  class="list-group-item list-group-item-action  orden ">
        ' . $ordenes['nombre'] . '
      </button>';
        echo '</a>';
      }

      ?>
    </div>
  </form>
</div>