<h1>Listar Vendas</h1>
<?php
    $sql = "SELECT * FROM vendas";

    $res = $conn->query($sql);

    $qtd = $res->num_rows;

    if($qtd > 0){
        print "<table class='table table-houver table-striped table-bordered'>";
            print "<tr>";
            print "<th>#</th>";
            print "<th>Tamanho</th>";
            print "<th>Cor</th>";
            print "<th>Prazo</th>";
            print "<th>Produto</th>";
            print "</tr>";
        while($row = $res->fetch_object()){
            print "<tr>";
            print "<td>".$row->id."</td>";
            print "<td>".$row->tamanho."</td>";
            print "<td>".$row->cor."</td>";
            print "<td>".$row->prazo."</td>";
            print "<td>".$row->produto."</td>";
            print "<td>
                     <button onClick=\"location.href='?page=editarVendas&id=".$row->id."';\" class='btn btn-success'>Editar</button>
                     <button onClick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=salvarVendas&acaovendas=excluir&id=".$row->id."';}else{false;}\" class='btn btn-danger'>Excluir</button>
                   </td>";
            print "</tr>";
        }
        print "</table>";
    } else {
        print "<p class='alert alert-danger'>Não encontrou resultados!</p>";
    }
?>