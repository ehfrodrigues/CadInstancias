<?php
include 'conexao.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome_instancia = $_POST['nomeInstancia'];
    $qtd_memoria = $_POST['memoria'];
    $qtd_ocpu = $_POST['ocpus'];
    $senha_inicial = $_POST['senhaInicial'];
    $tipo_so = $_POST['so'];

    $sql = "INSERT INTO instancia (nome_instancia, quantidade_memoria, quantidade_ocpu, senha_inicial, tipo_so) VALUES ('$nome_instancia', '$qtd_memoria', '$qtd_ocpu', '$senha_inicial', '$tipo_so')";
    
    if ($conn->query($sql) === TRUE) {
        echo "Novo registro inserido com sucesso";
        echo "<br><a href='index.php'>Voltar para a Tabela</a>";
    } else {
        echo "Erro: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
