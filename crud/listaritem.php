<h1>Lista de itens</h1>
<?php
    $sql = "SELECT * FROM produto";

    $res = $conn->query($sql);

    $qtd = $res->num_rows;

    if($qtd > 0){
        print "<table class='table table-hover table-striped table-bordered'>";
        print "<tr>";
        print "<th>ID</th>";
        print "<th>Nome</th>";
        print "<th>Setor</th>";
        print "<th>Valor</th>";
        print "<th>Ações</th>";
        print "</tr>";
        while($row = $res->fetch_object()){
            print "<tr>";
            print "<th>".$row->id."</th>";
            print "<th>".$row->nome."</th>";
            print "<th>".$row->setor."</th>";
            print "<th>".number_format($row->valor, 2, '.', '')."</th>";
            print "<td>
                    <button onclick=\"location.href='?page=editar&id=".$row->id."';\"  class='btn btn-success'>Editar</button>

                    <button onclick=\"if(confirm('Deseja excluir este item?')){location.href='?page=salvar&acao=excluir&id=".$row->id."';}else{false;}\" 
                    class='btn btn-danger'>Excluir</button>
                  </td>";
            print "</tr>";
        }
        print "</table>";
    }else{
        print "<p class='alert alert-danger'>Não encontrou resultados!</p>";
    }
?>