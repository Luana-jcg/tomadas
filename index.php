<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Font Awsome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

    <title>Tomadas</title>
</head>

<style>
    .card{
        width: 400px;
    }
    
    b{
        color:red;
    }
</style>

<body>
    <div class="container-fluid">
        <div class="d-flex justify-content-center">
            <div class="card mt-4 h-100">
                <div class="card-header">
                    <div class="d-flex justify-content-center">
                        <span><i class="fas fa-fw fas fa-plug fa-3x"></i></span>
                        <h5 class="mt-2 ml-2">Tomadas</h5>
                    </div>
                </div>
                <form action="consultar.php" method="post">
                    <div class="card-body">
                        <?php
                            if(isset($_GET["msg"])){?>
                                <div class="alert alert-danger"><?php echo $_GET["msg"]; ?></div>
                        <?php
                            }else if(isset($_GET['resultado'])){?>
                                <div class="alert alert-success"><?php echo "RESULTADO: ".$_GET["resultado"]; ?></div>
                        <?php    
                            }
                        ?>
                            <label>Tomada 1: <b>*</b></label>
                            <input type="number" name="t1" class="form-control" min="2" max="6" required>
                            <label>Tomada 2: <b>*</b></label>
                            <input type="number" name="t2" class="form-control" min="2" max="6" required>
                            <label>Tomada 3: <b>*</b></label>
                            <input type="number" name="t3" class="form-control" min="2" max="6" required>
                            <label>Tomada 4: <b>*</b></label>
                            <input type="number" name="t4" class="form-control" min="2" max="6" required>
                            <p class="mt-2 mb-0">Todos os campos com <b>*</b> são obrigatórios</p>
                    </div>
                    <div class="card-footer">
                        <div class="d-flex justify-content-end">
                            <input type="submit" name="btn" class="btn btn-info" value="Calcular">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
