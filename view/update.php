<div class="container">
    <div class="row">
        <div class="col">
            <form action="index.php?vista=set_update" method="post">
                <div class="form-group">
                  <input type="text" name="id" id="id" hidden value="<?php echo $_GET['id']?>">
                  <label for="nombre">Nombre</label>
                  <input type="text" name="nombre" id="nombre" class="form-control" placeholder="Nombre" aria-describedby="helpId">
                  <label for="edad">Edad</label>
                  <input type="text" name="edad" id="edad" class="form-control" placeholder="Edad" aria-describedby="helpId">
                </div>
                <div class="form-group">
                  <label for="email">Email</label>
                  <input type="email" name="email" id="email" class="form-control" placeholder="Email" aria-describedby="helpId">
                </div>
                <button class="btn btn-success">Actualizar</button>
            </form>
        </div>
        
    </div>
</div>