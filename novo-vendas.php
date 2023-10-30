<h1>Nova Venda</h1>
<form action="?page=salvarVendas" method="POST">
    <input type="hidden" name="acaovendas" value="vendas">
    <div class="mb-3">
        <label>Tamanho</label>
        <input type="number" name="tamanho" class="form-control">
    </div>
    <div class="mb-3">
        <label>Cor</label>
        <input type="text" name="cor" class="form-control">
    </div>
    <div class="mb-3">
        <label>Prazo</label>
        <input type="date" name="prazo" class="form-control">
    </div>
    <div class="mb-3">
        <label>Produto</label>
        <input type="text" name="produto" class="form-control">
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</form>