<?php include("banco-produto.php") ?>
<?php $id = $_POST['id_estado'];
removeProduto($id);

header("location: produto-lista.php?removido=true");
