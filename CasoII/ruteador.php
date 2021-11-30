<?php

    require_once('controladores/c_tickets.php');

    $objControlador='controladorTickets';
    $controlador = new $objControlador();
    $controlador->$accion();


?>