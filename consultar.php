<?php

if(isset($_POST['btn'])){
    $t1 = $_POST['t1'];
    $t2 = $_POST['t2'];
    $t3 = $_POST['t3'];
    $t4 = $_POST['t4'];
    
    if(empty($t1) || empty($t2) || empty($t3) || empty($t4)){
        $msg = 'Verifique se todos os campos obrigatórios foram preenchidos.';
        header('Location:index.php?msg='.$msg);
    }elseif(!($t1 >= 2 && $t1 <= 6) || !($t2 >= 2 && $t2 <= 6) || !($t3 >= 2 && $t3 <= 6) || !($t4 >= 2 && $t4 <= 6)){
        $msg = 'Por favor, insira números de 2 a 6';
        header('Location:index.php?msg='.$msg);
    }else{
        $resultado = ($t1 + $t2 + $t3 + $t4) - 3;
        header('Location:index.php?resultado='.$resultado);
    }
}else{
    echo "Página não encontrada";
}




?>