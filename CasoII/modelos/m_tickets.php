<?php

class Ticket{
    public $a;
    public $b;

    public function __construct($a, $b, $id){
        $this->a=$a;
        $this->b=$b;
        $this->id=$id;
    }

    public static function listar(){

        $listaTicket=[];
        $conexionBD=BD::crearInstancia();
        $sql = $conexionBD->query('SELECT * FROM test');

        foreach ($sql->fetchAll() as $ticket) {
            
            $listaTicket[] = new Ticket($ticket['a'],$ticket['b'],$ticket['id']);
        }
        
        
        return $listaTicket;
    }
    public static function eliminar($id){
        $conexionBD = BD::crearInstancia();
        $sql = $conexionBD->prepare("DELETE FROM test WHERE id=?");
        $sql->execute(array($id));
    }
    public static function crear($a,$b){
        $conexionBD = BD::crearInstancia();
        $sql = $conexionBD->prepare("INSERT INTO test(a,b) VALUES (?,?) ");
        $sql->execute(array($a, $b));
    }

    public static function editar($a,$b,$id){
        $conexionBD =BD::crearInstancia();
        
        $sql = $conexionBD->prepare("UPDATE test SET a=? , b=? WHERE id=?");
        $sql->execute(array($a,$b,$id));
    }

    public static function buscar($id){
        $conexionBD =BD::crearInstancia();
        
        $sql = $conexionBD->prepare("SELECT * FROM test WHERE id=?");
        $sql->execute(array($id));

        $ticket=$sql->fetch();
        return  new Ticket($ticket['a'], $ticket['b'], $ticket['id'] );
    }
}

?>