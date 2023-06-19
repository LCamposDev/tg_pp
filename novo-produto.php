<h1>Novo Produto</h1>
<form action="?page=salvar-produto" method="POST">
    <input type="hidden" name="acao" value="cadastrar">
    <div class="mb-3">
        <label>Nome</label>
        <input type="text" name="nome" class="form-control">
    </div>
    <div class="mb-3">
        <label>Descricao</label>
        <input type="text" name="descricao" class="form-control">
    </div>
    <div class="mb-3">
        <label>Tamanho</label>
        <input type="float" name="tamanho" class="form-control">
    </div>
    <div class="mb-3">
        <label>Cor</label>
        <input type="text" name="cor" class="form-control">
    </div>
    <div class="mb-3">
        <label>Valor</label>
        <input type="integer" name="valor" class="form-control">
    </div>
    <div class="mb-3">
        <label>Custo</label>
        <input type="integer" name="custo" class="form-control">
    </div>
    <div class="mb-3">
        <button class="btn btn-primary">Enviar</button>
    </div>
</form>