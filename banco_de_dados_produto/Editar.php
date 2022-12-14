<?php
    require('conexao.php');

    $id = $_GET['id'];
    $retorno = mysqli_query($conexao, "SELECT * FROM produtos WHERE id = $id");
    $produtos = mysqli_fetch_assoc($retorno);
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lista de Produtos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>    
  </head>
  <body>
    <div class="card m-4">
        <div class="card-header">
            <h3>Editar Produto</h3>
        </div>
        <div class="card-body">
            <form action="update.php" method="post">
            <input type="hidden" name="id" value="<?=$produtos['id']?>">
            <div class="mb-3">
                <label for="descricao" class="form-label">Descricao</label>
                <input type="text" class="form-control" id="descricao" name="descricao" value="<?=$produtos['descricao']?>">
            </div>
            <div class="mb-3">
                <label for="marca" class="form-label">Marca</label>
                <input type="text" class="form-control" id="marca" name="marca" value="<?=$produtos['marca']?>">
            </div>
            <div class="mb-3">
                <label for="usuario" class="form-label">Estoque</label>
                <input type="text" class="form-control" id="estoque" name="estoque" value="<?=$produtos['estoque']?>">
            </div>
            <div class="mb-3">
                <label for="preco" class="form-label">Preco</label>
                <input type="text" class="form-control" id="preco" name="preco" value="<?=$produtos['preco']?>">
            </div>
            <div class="mb-3">
                <input type="submit" class="form-control btn btn-primary" value="Salvar">
            </div>
        </form>
        </div>
    </div>    
  </body>
</html>