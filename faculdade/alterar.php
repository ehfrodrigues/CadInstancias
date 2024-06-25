<?php
require ("conexao.php");
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST["id"];
    $nome_instancia = $_POST['nomeInstancia'];
    $qtd_memoria = $_POST['memoria'];
    $qtd_ocpu = $_POST['ocpus'];
    $senha_inicial = $_POST['senhaInicial'];
    $tipo_so = $_POST['so'];

    //INSERT INTO instancia (nome_instancia, quantidade_memoria, quantidade_ocpu, senha_inicial, tipo_so) VALUES ('$nome_instancia', '$qtd_memoria', '$qtd_ocpu', '$senha_inicial', '$tipo_so')";
    $sql = "UPDATE instancia SET nome_instancia='$nome_instancia', quantidade_memoria='$qtd_memoria', quantidade_ocpu='$qtd_ocpu', senha_inicial='$senha_inicial', tipo_so='$tipo_so' WHERE id=$id";
    
    if ($conn->query($sql) === TRUE) {
        echo "Registro atualizado com sucesso";
        echo "<br><a href='index.php'>Voltar para a Tabela</a>";
        
    } else {
        echo "Erro ao atualizar registro: " . $conn->error;
    }

    $conn->close();
}
?>
