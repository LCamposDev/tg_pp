<h1>Nova Venda</h1>
<form action="?page=salvar-venda" method="POST">
    <input type="hidden" name="acao" value="cadastrar">
    <div class="mb-3">
        <label>Data</label>
        <input type="date" name="data" class="form-control">
    </div>
    <div class="mb-3">
        <label>Produto</label>
        <select name="nome_cod_produto" class="form-control">
            <option>-=Escolha um Produto-=</option>
        <?php
            $sql = "SELECT * FROM produto";
            $res = $conn->query($sql);
            while($row = $res->fetch_object()){
                print "<option value='".$row->cod_produto."'>";
                print $row->nome."</option>";
            }
        ?>
        </select>
    </div>
    <div class="mb-3">
        <label>Desconto</label>
        <input type="number" name="desconto" class="form-control">
    </div>
    <div class="mb-3">
        <label>Valor com desconto</label>
        <input type="number" name="valor_desconto" class="form-control">
    </div>
    <div class="mb-3">
        <label>Custo total</label>
        <input type="number" name="custo_total" class="form-control">
    </div>
    <div class="mb-3">
        <label>Valor total</label>
        <input type="number" name="valor_total" class="form-control">
    </div>
    <div class="mb-3">
        <label>Lucro</label>
        <input type="number" name="lucro" class="form-control">
    </div>
    <div class="mb-3">
        <button class="btn btn-primary">Enviar</button>
    </div>
</form>