<h1>Listar Vendas</h1>
<?php
    $sql = "SELECT * FROM venda as v INNER JOIN produto as p on v.nome_cod_produto = p.cod_produto";
    $res = $conn->query($sql);
    $qtd = $res->num_rows;

    print "<p>Encontrou <b>$qtd</b> resultado(s)";

    if($qtd > 0){
        print "<table class='table table-bordered table-striped table-hover'>";
        print "<tr>";
            print "<th>#</th>";
            print "<th>Data</th>";
            print "<th>Produto</th>";
            print "<th>Desconto</th>";
            print "<th>Valor com desconto</th>";
            print "<th>Custo total</th>";
            print "<th>Valor total</th>";
            print "<th>Lucro</th>";
            print "</tr>";
        while($row = $res->fetch_object()) {
            print "<tr>";
            print "<td>".$row->cod_venda."</td>";
            print "<td>".$row->data."</td>";
            print "<td>".$row->nome."</td>";
            print "<td>".$row->desconto."</td>";
            print "<td>".$row->valor_desconto."</td>";
            print "<td>".$row->custo_total."</td>";
            print "<td>".$row->valor_total."</td>";
            print "<td>".$row->lucro."</td>";
            print "</tr>";
        }
        print "</table>";
    }else {
        print "<p>Não encontrou resultados</p>";
    }