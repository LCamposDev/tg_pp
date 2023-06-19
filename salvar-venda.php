<?php
    $sql = "INSERT INTO venda (
            data,
            nome_cod_produto,
            desconto,
            valor_desconto,
            custo_total,
            valor_total,
            lucro
            ) VALUES (
                ".$_POST["data"].",
                ".$_POST["nome_cod_produto"].",
                ".$_POST["desconto"].",
                ".$_POST["valor_desconto"].",
                ".$_POST["custo_total"].",
                ".$_POST["valor_total"].",
                ".$_POST["lucro"].")";
                
        if ($res == true) {
            print "<script>alert('Cadastrado com sucesso');</script>";
            print "<script>location.href='?page=listar-venda';</script>";
        } else {
            print "<script>alert('Não foi possível cadastrar');</script>";
            print "<script>location.href='?page=listar-venda';</script>";
        }