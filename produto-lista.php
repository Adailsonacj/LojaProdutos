<?php include("cabecalho.php") ?>
<?php include("banco-produto.php") ?>
<?php
$produtos = listaProdutos();
if (array_key_exists("removido", $_GET) && $_GET['removido'] == 'true') {
    ?>
    <p class="alert-success"> Produto Apagado com Sucesso!!</p>
<?php } ?>


    <div class="container">
        <table class="table table-striped talbe-bordered">
            <?php foreach ($produtos as $produto) {

                ?>
                <tr>
                    <td><?= $produto['nome'] ?></td>
                    <td><?= $produto['preco'] ?></td>
                    <td>
                        <form action="remove-produto.php" method="post">
                            <input type="hidden" name="id_estado" value="<?= $produto['id'] ?>">

                            <button class="btn btn-danger">Remover</button>
                        </form>
                    </td>
                </tr>
            <?php } ?>
        </table>
    </div>

<?php include("rodape.php") ?>