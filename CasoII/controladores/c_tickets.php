<?php 

include_once('modelos/m_tickets.php');
include_once('conexion.php');

BD::crearInstancia();

class controladorTickets{

    public function inicio(){
       
       
        $tickets = Ticket::listar();
        require_once('vistas/v_inicio.php');
    }
    public function crear(){
        if ($_POST) {
            print_r($_POST);
            $a=$_POST['a'];
            $b=$_POST['b'];
            Ticket::crear($a,$b);
            header("Location:./?accion=inicio");
        }
        
        require_once('vistas/v_crear.php');
    }
    public function editar(){

        if ($_POST) {
            print_r($_POST);
            $a=$_POST['a'];
            $b=$_POST['b'];
            $id=$_POST['id'];
            
            Ticket::editar($a,$b,$id);
            header("Location:./?accion=inicio");
        }
        $id=$_GET['id'];
        $ticket = Ticket::buscar($id);
        require_once('vistas/v_editar.php');
    }
    public function eliminar(){
        $id=$_GET['id'];
        
        Ticket::eliminar($id);
        header("Location:./?accion=inicio");

    }
}



?>