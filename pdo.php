<?php require_once 'mysql-login.php';?>
<ol>
    <li>Conectar a la base</li> 

    <?php
        try {        
		    //$con = new PDO('mysql:host=localhost;dbname=test;port=3306','root', '');
		    //$con = new PDO("mysql:host=$hostname;dbname=$database", $username, $password);
            $con = new PDO('mysql:host='.$hostname.';port='.$port.';dbname='.$database, $username, $password);
            print "Conexión exitosa!";
        }
        catch (PDOException $e) {
            print "¡Error!: " . $e->getMessage();
            die();
        }
    ?>

<li>SQL - SELECT </li>
    <?php 
        $query = "SELECT * FROM productos;";
        $resultado = $con->query($query);        
      

    ?>   
    <?php

        $prueba = "";

        while ($rows = $resultado->fetch(PDO::FETCH_ASSOC) ){
            $prueba = $rows['nuevo'] ;
             echo $prueba;
            // echo $prueba;
            echo '<br>' ;
        }
    
    ?>
          
  
<?php

        $json = file_get_contents('data/comentarios.json');

        print_r($json);

        $data = json_decode($json, true);
        

        print_r($data);

        foreach($data as $row){



            $fecha = $row['fecha'];
            $id_producto = $row['id_producto'];
            $descripcion = $row['descripcion'];
            $calificacion = $row['calificacion'];
            $email = $row['email'];
            $descripcion = $row['descripcion'];
            $precio = $row['precio'];
            $img = $row['img'];
            $nuevo = $row['nuevo'];


            $sql = "INSERT INTO comentarios(fecha,id_producto,descripcion,calificacion,email) VALUES('$fecha','$id_producto','$descripcion','$calificacion','$email')";
            $count = $con->exec($sql);
            if($count > 0 )
                 print($count." Filas afectadas");
            else
                 print('ERROR');
        }

    ?>
 
    -->


    <?php 
            $con =null;
    ?>
</ol>  
