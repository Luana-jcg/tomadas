<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Tomadas</title>
</head>
<body>
    <div class="container">
        <h1>Tomadas</h1>
        <p>Devem ser inseridos números de 2 a 6</p>
        
        <?php
            if(isset($_GET["msg"]))
                echo $_GET["msg"];
        ?>
        
        <form action="consultar.php" method="post">
            <label>Tomada 1: </label>
            <input type="number" name="t1" class="form-control col-md-4" min="2" max="6" required>
            <label>Tomada 2: </label>
            <input type="number" name="t2" class="form-control col-md-4" min="2" max="6" required>
            <label>Tomada 3: </label>
            <input type="number" name="t3" class="form-control col-md-4" min="2" max="6" required>
            <label>Tomada 4: </label>
            <input type="number" name="t4" class="form-control col-md-4" min="2" max="6" required>
            <br>
            <input type="submit" name="btn" class="btn btn-success" value="Calcular">
        </form>
        <br>
        <label>Resultado:</label>        
        <input type="text" name="resultado" class="form-control col-md-2" value="<?php if(isset($_GET['resultado'])){ echo $_GET['resultado'];} ?>" disabled>
    </div>
</body>
</html>