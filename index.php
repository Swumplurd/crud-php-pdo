<?php
    require_once 'app/head.php';
?>

<?php
    require_once 'model/crud.class.php';
    $crud = new Crud();
    
    if (isset($_GET['vista'])) {
        switch ($_GET['vista']) {
            case 'read':
                $datos = $crud->mostrar();
                require_once 'view/read.php';
                break;
            case 'delete':
                $eliminar = $crud->eliminar($_REQUEST['id']);
                header('location index.php?vista=read');
                break;
            case 'create':
                require_once 'view/create.php';
                break;
            case 'set_create':                
                if (isset($_POST['nombre']) && isset($_POST['edad']) && isset($_POST['email'])) {
                    $datos = array(
                        'nombre' => $_POST['nombre'],
                        'edad' => $_POST['edad'],
                        'email' => $_POST['email']
                    );
                    $crud->insertar($datos);
                    header('location: index.php?vista=read');
                }
                break;
            case 'update':
                require_once 'view/update.php';
                break;
            case 'set_update':
                if (isset($_POST['id']) && isset($_POST['nombre']) && isset($_POST['edad']) && isset($_POST['email'])) {
                    $datos = array(
                        'id' => $_POST['id'],
                        'nombre' => $_POST['nombre'],
                        'edad' => $_POST['edad'],
                        'email' => $_POST['email']
                    );
                    $crud->update($datos);
                    header('location: index.php?vista=read');
                }
                break;
            
            default:
                # code...
                break;
        }
    }else{
        header('location index.php?vista=read');
    }
    
?>

<?php
    require_once 'app/dependences.php';
?>