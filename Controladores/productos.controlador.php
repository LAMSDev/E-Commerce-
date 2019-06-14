<?php

class ControladorProductos{

    /* METODO para MOSRTAR CATEGORIAS desde la BASE DE DATOS */

    static public function ctrMostrarCategorias($item, $valor){

        $tabla="categorias";
        $respuesta=ModeloProductos::mdlMostrarCategorias($tabla, $item, $valor);
        return $respuesta;

    }



   /*  METODO para MOSTRAR SUBCATEGORIAS traidas desde la BASE DE DATOS */

    static public function ctrMostrarSubCategorias($id){

        $tabla="subcategorias";
        $respuesta=ModeloProductos::mdlMostrarSubCategorias($tabla, $id);
        return $respuesta;

    }


}