<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        

        <title>Techtoot :: Tienda de tecnología</title>
        <?php


            $icono = ControladorPlantilla::ctrEstiloPlantilla();
            echo'<link rel="icon" href="http://localhost/E-commerce-Backend/'.$icono["icono"].'">';
            

            /* Mantener ruta fija del proyecto ara evitar colapso de los estilos dado el trabajo de htaccess con las rutas amigables;
            Esto permite establecer de manera fija la ruta  maestra del proyecto y sus archivos por ende siempre los recursos, mediante 
            esta ruta, estrán bien referenciados. <i class="fab fa-instagram"></i>
            */


            /*   Instaciamos a la clase ruta y ejecutamos el método que contiene que se llama ctrRuta  */

            $url = Ruta::ctrRuta();

            /* var_dump($url); */


        ?>
        

        <meta name="description" content="Tienda en linea de venta de dispositivos eléctrónicos en general ">
        <meta name="keywords" content="Computadoras de escritorio, Laptops, Piezas PC, tech, toot">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">

          <!--     
         //
        // ─── HOJA DE ESTILO E ICONOS DE FONTAWESOME ──────────────────────
       //
       -->
        <link rel="stylesheet" href="<?php echo $url;?>Vistas/css/cabezote.css">
        <link rel="stylesheet" href="<?php echo $url;?>Vistas/css/plantilla.css">

        <link rel="stylesheet" href="<?php echo $url;?>Vistas/css/plugins/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo $url;?>Vistas/css/plugins/font-awesome.min.css">
        
        
      
       


         <!--   
         //
        // ─── FUENTE TRAIDA DESDE GOOGLE FONT UBUNTU Y UBUNTU CONDENSED ───
        //
        -->
            


        <link href="https://fonts.googleapis.com/css?family=Ubuntu|Ubuntu+Condensed&display=swap" rel="stylesheet">
        
    

         <!-- 
         // 
         // ─── SCRIPTS DE BOOTSTRAP Y JQUERY ───────────────────────────────
        //
       -->
        <script src="<?php echo $url;?>Vistas/js/plugins/jquery.min.js"></script>
        <script src="<?php echo $url;?>Vistas/js/plugins/bootstrap.min.js"></script>
    

            

            
    </head>
    <body>

        <!-- 
        //
        // ─── BARRA SUPERIOR DEL COMEINZO DE PAGINA o CABEZOTE───────────────────────
        //
        -->

        <?php

        include "Modulos/cabezote.php";

         /*   CREAMOS y hacemos USO de un array para separara los parámetros que recibimos en indices para así tener un mejor control
        en ese sentido si la ruta o las rutas */


          $rutas = array();


        /* ANALIZAMOS y verificamos  qu[e se est[a enviado en la variable GET <ruta> que definimos en Modelos/ruta.php para manejar mejor las url amigables de la pagina */
        if(isset($_GET["ruta"])){

            /* Separamos los indices del array gracias a explode y delimitamos cada indidce con un separador, a eleccion fue un bash slash [/] */

            $rutas = explode("/", $_GET["ruta"]);
            
            /* Aquí mostramos con este var_dump lo que contiene [$rutas] y filtramos los indices a eleccion para recibir a gusto solo los indice 0  */
            var_dump($rutas[0]);

        }


        ?>

            
        <script src="<?php echo $url;?>Vistas/js/cabezote.js"></script>
        <script src="<?php echo $url;?>Vistas/js/plantilla.js"></script>

    </body>
</html>