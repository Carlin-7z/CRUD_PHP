<h1>Novo item</h1>
<form action="?page=salvar" method="POST">
    <input type="hidden" name="acao" value="cadastrar">
    <div class="mb-3">
        <label>Nome</label>
        <input type="text" name="nome" class="form-control">
    </div>
    <div class="mb-3">
        <label>Setor</label>
        <input type="text" name="setor" class="form-control">
    </div>
    <div class="mb-3">
        <label>Valor - utilize "."</label>
        <input type="float" name="valor" class="form-control">
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Cadastrar</button>
    </div>
</form>