<?php
include('config.php');
 
 
//Verifica se o email ja é cadastrado
$sql = "SELECT * FROM usuarios WHERE email = '{$_POST['email']}'";
$senha_hash_md5 = md5($senha_digitada); 
$res = $conexao->query($sql);
 
if ($res->num_rows > 0) {
    header('location: cadastro.php?email=erro');
    exit();
}
//valida se selecionou algo
if ($_POST['perfil'] === "Selecione") {
    header('location: cadastro.php?email=erro');
} else {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = md5 ($_POST['senha']);
    $perfil = $_POST['perfil'];
 
    //Alimentando o banco
    $sql = "INSERT INTO usuarios(nome, email, senha, perfil) VALUES ('{$nome}', '{$email}', '{$senha}', '{$perfil}')";
    $res = $conexao->query($sql);
 
 
    if ($res == true) {
        header('location: index.php?usuario=sucesso');
    } else {
        header('location: cadastro.php?usuario=falha');    
    }
}
 