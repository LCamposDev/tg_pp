<?php
switch ($_REQUEST["acao"]) {
    case 'cadastrar':
        $nome = $_POST["nome"];
        $descricao = $_POST["descricao"];
        $tamanho = $_POST["tamanho"];
        $cor = $_POST["cor"];
        $valor = $_POST["valor"];
        $custo = $_POST["custo"];
        $sql = "INSERT INTO produto (nome, descricao, tamanho, cor, valor, custo) VALUES ('{$nome}', '{$descricao}', '{$tamanho}', '{$cor}', '{$valor}', '{$custo}')";

        $res = $conn->query($sql);

        if ($res == true) {
            print "<script>alert('Cadastro com sucesso');</script>";
            print "<script>location.href='?page=listar-produto';</script>";
        } else {
            print "<script>alert('Não foi possível cadastrar');</script>";
            print "<script>location.href='?page=listar-produto';</script>";
        }
        break;
}