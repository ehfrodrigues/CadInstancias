<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabela de Instâncias</title>
    <link rel="stylesheet" href="indexstyle.css">
</head>
<body>
    <h1>Tabela de Instâncias</h1>
    <div class="button-container">
        <a href="form.html" class="button">Inserir</a>
    </div>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome Instância</th>
                <th>Memoria</th>
                <th>oCPUs</th>
                <th>SO </th>
                <th>Ação </th>

                <!-- Adicione outras colunas conforme necessário -->
            </tr>
        </thead>
        <tbody>
            <?php
            include 'conexao.php';

            $sql = "SELECT * FROM instancia";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                // Exibir dados de cada linha
                while($row = $result->fetch_assoc()) {
                    echo "<tr>
                            <td>" . $row["id"] . "</td>
                            <td>" . $row["nome_instancia"] . "</td>
                            <td>" . $row["quantidade_memoria"] . "</td>
                            <td>" . $row["quantidade_ocpu"] . "</td>
                            <td>" . $row["tipo_so"] . "</td>
                            <td>
                            <a href='excluir.php?id=" . $row["id"] . "' class='delete-button'>Excluir</a>
                            <a href='form_alterar.php?id=" . $row["id"] . "' class='edit-button'>Alterar</a>
                            </td>
                          </tr>";
                }
            } else {
                echo "<tr><td colspan='3'>Nenhum resultado encontrado</td></tr>";
            }
            $conn->close();
            ?>
        </tbody>
    </table>
</body>
</html>
