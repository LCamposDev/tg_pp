<h1>Listar Produtos</h1>
<?php
    $sql = "SELECT * FROM produto";
    $res = $conn->query($sql);
    $qtd = $res->num_rows;

    print "<p>Encontrou <b>$qtd</b> resultado(s)";

    if($qtd > 0){
        print "<table class='table table-bordered table-striped table-hover'>";
        print "<tr>";
            print "<th>#</th>";
            print "<th>Nome</th>";
            print "</tr>";
        while($row = $res->fetch_object()) {
            print "<tr>";
            print "<td>".$row->cod_produto."</td>";
            print "<td>".$row->nome."</td>";
            print "</tr>";
        }
        print "</table>";
    }else {
        print "<p>Não encontrou resultados</p>";
    }