<pre>
<?php
    include_once "simpleXLSX.php";

    $num_pessoas_sorteadas = $_POST['num_pessoas'];
    $tmp_arquivo_cliente = $_FILES['planilha-clientes']['tmp_name'];

    $xlsx = SimpleXLSX::parse($tmp_arquivo_cliente);
    $shuffle_array = $xlsx->rows();

    # Remover cabeçalho
    $shuffle_array = array_slice($shuffle_array, 1);

    # Embaralhar o array
    shuffle($shuffle_array);

    $nomes_sorteados = array();
    $COLUNA_NOME_CLIENTE = 1;
    
    for($i=0; $i<$num_pessoas_sorteadas; $i++) {
        $nome_cliente = $shuffle_array[$i][$COLUNA_NOME_CLIENTE];
        array_push($nomes_sorteados, $nome_cliente);
    }

    session_start();
    $_SESSION['nomes-sorteados'] = $nomes_sorteados;
    $_SESSION['quantidade-sorteada'] = $num_pessoas_sorteadas;

    header('Location: ../index.php');
 ?>
</pre>