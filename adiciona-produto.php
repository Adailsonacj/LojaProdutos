<?php include("Conexao.php")?>
<?php include("cabecalho.php")?>

<?php
$nome = $_POST["nome"];
$preco = $_POST["preco"];

function inserCidade($nome, $preco)
{



    $conexao = new Conexao();
    $instance = $conexao::conecta();
    // $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = ("INSERT INTO produtos(nome, preco) VALUES ('{$nome}',{$preco})");
    $stmt = $instance->prepare($sql);
    $stmt->execute();

}

if (inserCidade($nome, $preco)) {
    ?>
    <p class="text-success">Produto; <?= $nome; ?>, <?= $preco; ?> adicionado com sucesso!</p>
    <?php
} else {
    ?>
    <p class="text-danger">Produto não adicionado!</p>
    <?php
}
?>
<?php include("rodape.php") ?>
