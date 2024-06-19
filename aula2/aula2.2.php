<?php
    if(isset($_POST['enviar'])){
        $nome = $_POST['nome'];
        $estado = $_POST['estado'];
        $area2 = $_POST['area2'];
        $idade = $_POST['idade'];

        echo $nome . "<br>" . $idade . "<br>" . $estado . "<br>" . $area2;


    }else{
        echo "nao foi possivel enviar o formulario";
    }
?>