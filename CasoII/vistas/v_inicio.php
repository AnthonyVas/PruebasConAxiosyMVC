
<br>
<a type="button" href="?accion=crear" class="btn btn-success"><i class="fas fa-plus"></i> Agregar Ticket</a>
<br>
<br>
<table class="table table-bordered">
    <thead>
        <tr>
        <th>Codigo de ticket</th>
            <th>Campo A</th>
            <th>Campo B</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
    <?php

   
    foreach ($tickets as $ticket) {
        ?>
            <tr>
            <td><?php echo $ticket->id; ?></td>
            <td> <?php echo  $ticket->a; ?> </td>
            <td> <?php echo  $ticket->b; ?> </td>
            <td> 
            <a type="button" href="?accion=eliminar&a=<?php echo $ticket->a; ?>&b=<?php echo $ticket->b; ?>&id=<?php echo $ticket->id;?>" class="btn btn-danger"><i class="fas fa-trash"></i></a>
           
            <a type="button" class="btn btn-warning" href="?accion=editar&a=<?php echo $ticket->a; ?>&b=<?php echo $ticket->b; ?>&id=<?php echo $ticket->id;?>" ><i class="far fa-edit"></i></a>
            </td>
            </tr>
    <?php
    }
    ?>
      
    </tbody>
</table>


