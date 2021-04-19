<div class="container">
    <div class="row">
        <div class="col">
            <a class="btn btn-success btn-block my-4" href="index.php?vista=create">Añadir</a>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <table class="table text-center">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nombre</th>
                        <th>Edad</th>
                        <th>Email</th>
                        <th>Actualizar</th>
                        <th>Eliminar</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    foreach($datos as $dato):
                ?>
                    <tr>
                        <td><?php echo $dato['id'] ?></td>
                        <td><?php echo $dato['nombre'] ?></td>
                        <td><?php echo $dato['edad'] ?></td>
                        <td><?php echo $dato['email'] ?></td>
                        <td><a class="btn btn-warning" href="index.php?vista=update&id=<?php echo $dato['id']?>">Actualizar</a></td>
                        <td><a class="btn btn-danger" href="index.php?vista=delete&id=<?php echo $dato['id']?>">Eliminar</a></td>
                    </tr>
                <?php
                    endforeach;
                ?>
                </tbody>
            </table>
        </div>
        
    </div>
</div>