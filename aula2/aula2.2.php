<?php
    if(isset($_POST['enviar'])){
        $nome = $_POST['nome'];
        $estado = $_POST['estado'];
        $area2 = $_POST['area2'];

        echo $nome . "<br>" . $estado . "<br>" . $area2;


    }else{
        echo "nao foi possivel enviar o formulario";
    }
?>