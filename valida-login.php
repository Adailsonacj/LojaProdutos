<?php include("Conexao.php") ?>
<?php
session_start();
$login = $_POST['login'];
$senha = $_POST['senha'];


$conexao = new Conexao();
$instance = $conexao::conecta();
// $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$sql = "select * from usuario where email = '{$login}' AND senha = '{$senha}'";
$stmt = $instance->prepare($sql);
$stmt->execute();

/*
if(pg_num_rows($result) >0){

}
*/

if($stmt->rowCount() >0){
    $_SESSION['login'] = $login;
    $_SESSION['senha'] = $senha;
    header("location:index.php");
}
else{
    unset($_SESSION['login']);
    unset($_SESSION['senha']);
    header("location:login.php");
}