<?php
include("Conexao.php") ?>
<?php
function listaProdutos()
{
    $produtos = array();


    $conexao = new Conexao();
    $instance = $conexao::conecta();
    // $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = ("select * from produtos");
    $stmt = $instance->prepare($sql);
    $stmt->execute();


    while ($produto = $stmt->fetch()) {
        array_push($produtos, $produto);
    }
    return $produtos;

}

function removeProduto($id)
{
    $conexao = new Conexao();
    $instance = $conexao::conecta();
    // $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "delete from produtos where id={$id}";
    $stmt = $instance->prepare($sql);
    $stmt->execute();

}