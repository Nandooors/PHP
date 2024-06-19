<?php
    //função de data
    echo date("d/m/y") . "<br>";
    echo date("d/m/Y") . "<br>";
    echo date("H:i:s") . "<br>";

    //funções para servidores globais
    echo $_SERVER['PHP_SELF'] . "<br>";
    echo $_SERVER['SERVER_NAME'] . "<br>";
    echo $_SERVER['REMOTE_ADDR'] . "<br>";
    echo $_SERVER['REMOTE_HOST'] . "<br>";
    
?>