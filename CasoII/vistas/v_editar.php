<div class="card">
    <div class="card-header">
        Editar Ticket
    </div>
    <div class="card-body">
       <form action="" method="post">

       <div class="mb-3">
              <label for="" class="form-label">Codigo de ticket:</label>
              <input type="number"
                class="form-control" value="<?php echo $ticket->id; ?>" name="id" id="id" aria-describedby="helpId" placeholder="Ingrese valor a" readonly >
             
            </div>
            <div class="mb-3">
              <label for="" class="form-label">Valor a:</label>
              <input type="number"
                class="form-control" value="<?php echo $ticket->a; ?>" name="a" id="a" aria-describedby="helpId" placeholder="Ingrese valor a"  required >
             
            </div>
            <div class="mb-3">
              <label for="" class="form-label">Valor b:</label>
              <input type="text"
                class="form-control" value="<?php echo $ticket->b; ?>" name="b" id="b" aria-describedby="helpId" placeholder="Ingrese valor b" required > 
             
            </div>
            

            <input name="" id="" class="btn btn-success" type="submit" value="Editar ticket">
            <a href="?accion=inicio" class="btn btn-info">Cancelar</a>
       </form>
    </div>
  
</div>