<?php
    include_once "simpleXLSX.php";

    $num_pessoas_sorteadas = $_POST['num_pessoas'];
    $tmp_arquivo_cliente = $_FILES['planilha-clientes']['tmp_name'];

    $file = SimpleXLSX::parse($tmp_arquivo_cliente);
 ?>