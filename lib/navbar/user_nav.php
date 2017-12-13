<!DOCTYPE html>
<html lang="en">
<head>
    <title>¡Bienvenido a iNohva</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
           <strong><a class="navbar-brand" href="../iNohvaMerida/index.php">iNohva Muebles</a></strong>
        </div>
        <ul class="nav navbar-nav">
        <?php
            if(isset($_GET['id'])){
                $tipo = $_GET{'id'};
                if ($tipo == "3") {
                        echo '<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Departamentos <span class="caret"></span></a>';
                            echo '<ul class="dropdown-menu">';
                                            echo '<li><a href="#">Sala</a></li>';
                                            echo '<li><a href="#">Comedor</a></li>';
                                            echo '<li><a href="#">Recámara</a></li>';
                                            echo '<li><a href="#">Cocina</a></li>';
                                            echo '<li><a href="#">Decoración</a></li>';
                                            echo '<li><a href="#">Otros Muebles</a></li>';
                            echo '</ul>';
                        echo '</li>';
                    echo '<li><a href="#">Carrito</a></li>';
                }
            }
        ?>

                <?php
                    if(isset($_GET['id'])){
                        $tipo = $_GET{'id'};
                        if ($tipo == "1") {
                             echo '<li><a href="../../view/administrator/view/admin_user.php">Cartera de Clientes</a></li>';
                             echo '<li><a href="../../view/administrator/view/admin_employee.php">Empleados</a></li>';
                        }

                        if ($tipo == "1"||$tipo =="2") {
                                 echo '<li><a href="../../view/administrator/view/admin_products.php">Productos Publicados</a></li>';

                        }
                        if ($tipo == "1") {
                            echo '<li><a href="#">Recursos Humanos</a></li>';
                        }
                    }
                ?>
        </ul>

                        <ul class="nav navbar-nav navbar-right">
                            <?php
                                if(isset($_GET['id'])) {
                                    $tipo = $_GET{'id'};
                                    if ($tipo == "1" || $tipo == "2" || $tipo == "3") {
                                        echo '<li ><a href = "../iNohvaMerida" ><span class="glyphicon glyphicon-home" ></span > Inicio</a ></li >';
                                    }
                                }
                            ?>
                        </ul>
    </div>
</nav>
</body>
</html>
