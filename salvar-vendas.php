<?php
    switch ($_REQUEST["acaovendas"]) {
        case 'vendas':
           $tamanho = $_POST["tamanho"];
           $cor = $_POST["cor"];
           $prazo = $_POST["prazo"];
           $produto = $_POST["produto"];

           $sql = "INSERT INTO vendas (tamanho, cor, prazo, produto) VALUES ('{$tamanho}', '{$cor}', '{$prazo}', '{$produto}')";

           $res = $conn->query($sql); 

           if($res==true) {
            print "<script>alert('Venda cadastrada com sucesso');</script>";
            print "<script>location.href='?page=listarVendas';</script>";
           } else {
            print "<script>alert('Não foi possível cadastrar');</script>";
            print "<script>location.href='?page=listarVendas';</script>";
           }
        break;

        case 'editar':
            $tamanho = $_POST["tamanho"];
            $cor = $_POST["cor"];
            $prazo = $_POST["prazo"];
            $produto = $_POST["produto"];

            $sql = "UPDATE vendas SET tamanho='{$tamanho}', cor='{$cor}', prazo='{$prazo}', produto='{$produto}' WHERE id=".$_REQUEST["id"];

            $res = $conn->query($sql); 

           if($res==true) {
            print "<script>alert('Editado com sucesso');</script>";
            print "<script>location.href='?page=listarVendas';</script>";
           } else {
            print "<script>alert('Não foi possível cadastrar');</script>";
            print "<script>location.href='?page=listarVendas';</script>";
           }
        break;

        case 'excluir':
            
            $sql = "DELETE FROM vendas WHERE id=".$_REQUEST["id"];

            $res = $conn->query($sql); 

           if($res==true) {
            print "<script>alert('Excluido com sucesso');</script>";
            print "<script>location.href='?page=listarVendas';</script>";
           } else {
            print "<script>alert('Não foi possível excluir');</script>";
            print "<script>location.href='?page=listarVendas';</script>";
           }

        break;
    }
?>