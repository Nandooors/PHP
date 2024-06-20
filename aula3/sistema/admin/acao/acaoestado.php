<?php

    if( isset( $_POST['enviar'] ) ){
        $nome = $_POST['nome'];

        if( empty(trim ($nome) )){
            echo "<script>  alert('campo em branco');window.location.href='../cadastropais.php'; </script>";

        }else{
            echo "<script>  alert('cadastro com sucesso');window.location.href='../cadastropais.php'; </script>";
        }
    }
    else{
        echo"nao foi possivel cadastrar o estado";
    }
?>