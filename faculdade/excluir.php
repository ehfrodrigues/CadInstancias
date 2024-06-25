<?php
include 'conexao.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Deletar registro
    $sql = "DELETE FROM instancia WHERE id='$id'";

    if ($conn->query($sql) === TRUE) {
        echo "Registro excluído com sucesso";
    } else {
        echo "Erro ao excluir registro: " . $conn->error;
    }

    $conn->close();
}
echo "<br><a href='index.php'>Voltar para a Tabela</a>";
?>
