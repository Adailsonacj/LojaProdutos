<?php include("cabecalho.php") ?>

<h1> Informações dos produto</h1>
<div class="row">
    <form action="adiciona-produto.php" method="post">
        <div class="form-group row">
            <label class="col-sm-3">Nome: </label>
            <input type="text" name="nome" class="form-control col-sm-8">


        </div>
        <div class="form-group row">
            <label class="col-sm-3">Preço: </label>
            <input type="number" name="preco" class="form-control col-sm-8">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Cadastrar</button>
        </div>
    </form>
</div>

<?php include("rodape.php") ?>
