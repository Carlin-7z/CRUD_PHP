<h1>Editar item</h1>

<?php
    $sql = "SELECT * FROM produto WHERE id=".$_REQUEST["id"];
    $res = $conn->query($sql);
    $row = $res->fetch_object();
?>

<form action="?page=salvar" method="POST">
    <input type="hidden" name="acao" value="editar">
    <input type="hidden" name="id" value="<?php print $row->id; ?>">
    <div class="mb-3">
        <label>Nome</label>
        <input type="text" name="nome" value="<?php print $row->nome; ?>" class="form-control">
    </div>
    <div class="mb-3">
        <label>Local</label>
        <input type="text" name="setor" value="<?php print $row->setor; ?>" class="form-control">
    </div>
    <div class="mb-3">
        <label>Valor - utilize "."</label>
        <input type="float" name="valor" value="<?php print $row->valor; ?>" class="form-control">
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Cadastrar</button>
    </div>
</form>