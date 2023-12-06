<?php

// Incluir a conexao com o banco de dados
include_once "conexao.php";

// Receber os dados
$dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);

// validar o formulario
if (empty($dados['nome'])) {
    $retorna = ['status' => false, 'msg' => "<div class='alert alert-danger' role='alert'>Erro: Necessário preencher o campo nome!</div>"];
} elseif (empty($dados['email'])) {
    $retorna = ['status' => false, 'msg' => "<div class='alert alert-danger' role='alert'>Erro: Necessário preencher o campo e-mail!</div>"];
} elseif (empty($dados['senha'])) {
    $retorna = ['status' => false, 'msg' => "<div class='alert alert-danger' role='alert'>Erro: Necessário preencher o campo Senha!</div>"];
} elseif (empty($dados['RG'])) {
    $retorna = ['status' => false, 'msg' => "<div class='alert alert-danger' role='alert'>Erro: Necessário preencher o campo número!</div>"];
} elseif (empty($dados['CPF'])) {
    $retorna = ['status' => false, 'msg' => "<div class='alert alert-danger' role='alert'>Erro: Necessário preencher o campo número!</div>"];
} else {
    // Cadastrar no BD na primeira tabela
    $query_usuario = "INSERT INTO usuarios (nome, email, senha, RG, CPF) VALUES (:nome, :email, :senha, :RG, :CPF)";
    $cad_usuario = $conn->prepare($query_usuario);
    $cad_usuario->bindParam(':nome', $dados['nome']);
    $cad_usuario->bindParam(':email', $dados['email']);
    $cad_usuario->bindParam(':senha', $dados['senha']);
    $cad_usuario->bindParam(':RG', $dados['RG']);
    $cad_usuario->bindParam(':CPF', $dados['CPF']);
    $cad_usuario->execute();

    // Verificar se cadastrou o usuario
    if ($cad_usuario->rowCount()) {
        // Recuperar o ultimo id inserido
        $id_usuario = $conn->lastInsertId();
    }
}

echo json_encode($retorna);
