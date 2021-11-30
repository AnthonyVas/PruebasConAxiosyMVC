<?php


  
  $accion = 'inicio';
  if ( isset($_GET['accion'])) {
      if ( $_GET['accion'] !="") {
         
          $accion = $_GET['accion'];
      }
    
  }
  require_once("vistas/contenedor.php");
