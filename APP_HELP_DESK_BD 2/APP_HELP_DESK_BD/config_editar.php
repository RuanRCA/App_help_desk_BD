<?php
include_once('validador_acesso.php');
include('config.php');
 
 $titulo = $_POST['titulo'];
 $categoria= $_POST['categoria'];
 $descricao = $_POST['descricao'];
 $statuschamado = $_POST['status'];
 $descricaotecnico = $_POST['descricaotecnico'];
 $id_chamado = $_POST['id_chamado'];
 $valor = $_POST['valor'];

 $sql = "UPDATE chamados SET titulo = '$titulo' , categoria = '$categoria' , descricao = '$descricao' , statuschamado = '$statuschamado' , descricaotecnico = '$descricaotecnico' , valor = '$valor' WHERE id_chamado = $id_chamado ";

$res = $conexao->query($sql);

 if ($res == true){
     header('location: editar_chamado.php?edicao=sucesso');
}
else {
    header('location: editar_chamado.php?edicao=falha'); 
}

 

?>