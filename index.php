<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Pague Pouco</title>

        <link rel="stylesheet" href="_css/index.css">
        <link rel="stylesheet" href="_css/table.css">
    </head>
    <body>
        <div class="container">
            <div class="content">
                <h1>Sorteio pague pouco</h1>

                <form action="_php/sortear.php" method="POST" enctype="multipart/form-data">
                    <p>Sortear <input type="number" name="num_pessoas" min="1"> Pessoas</p>

                    <table class="content-table">
                        <thead>
                            <tr>
                                <th class="horario">#</th>
                                <th class="nome">Resultado</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                session_start();
                                if(isset($_SESSION['nomes-sorteados'])) {
                                    for($i=0;$i<$_SESSION['quantidade-sorteada'];$i++) {
                                        echo "<tr>";
                                        echo "    <td>" . ($i + 1) . "</td>";
                                        echo "    <td class='nome'>" . $_SESSION['nomes-sorteados'][$i] . "</td>";
                                        echo "</tr>";
                                    }
                                }
                            ?>
                        </tbody>
                    </table>
                    
                    <input type="file" name="planilha-clientes" id="planilha-clientes" style="display: none;">
                    <label for="planilha-clientes" id="importar-arquivo">Importar arquivo</label>

                    <button type="submit">Sortear</button>
                </form>
            </div>
        </div>

        <script src="_js/main.js"></script>
    </body>
</html>