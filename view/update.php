<div class="container">
    <div class="row">
        <div class="col">
            <form action="index.php?vista=set_update" method="post">
                <div class="form-group">
                  <input type="text" name="id" id="id" hidden value="<?php echo $datos['id']?>">

                  <label for="nombre">Nombre</label>
                  <input type="text" name="nombre" id="nombre" value="<?php echo $datos['nombre']?>" class="form-control" placeholder="Nombre" aria-describedby="helpId">
                  
                  <label for="edad">Edad</label>
                  <input type="text" name="edad" id="edad" value="<?php echo $datos['edad']?>" class="form-control" placeholder="Edad" aria-describedby="helpId">
                  
                  <label for="email">Email</label>
                  <input type="email" name="email" id="email" value="<?php echo $datos['email']?>" class="form-control" placeholder="Email" aria-describedby="helpId">
                </div>
                <button class="btn btn-success">Actualizar</button>
            </form>
        </div>
    </div>
</div>