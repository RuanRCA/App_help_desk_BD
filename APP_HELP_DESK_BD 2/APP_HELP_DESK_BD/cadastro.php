<?php
require_once "validador_acesso.php";
?>
 
<!DOCTYPE html>
<html lang="pt-br">
 
<head>
    <meta charset="utf-8" />
    <title>App Help Desk</title>
 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="icon" href="imagens/logo.png" type="image/x-icon">
 
    <style>
        .card-login {
            padding: 30px 0 0 0;
            width: 350px;
            margin: 0 auto;
        }
    </style>
</head>
 
<body>
 
    <nav class="navbar navbar-dark bg-secondary">
        <a class="navbar-brand" href="index.php">
            <img src="../app_help_deskBD/imagens/cadastro06.png" width="30" height="30" class="d-inline-block align-top" alt="">
            App Help Desk
        </a>
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="index.php">VOLTAR</a>
            </li>
        </ul>
    </nav>
    </head>
 
 
    <body class="bg-light">
 
 
        <div class="container mt-5">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="card shadow">
                        <div class="card-header bg-primary text-white text-center">
                            <h4>Cadastro de Usuário</h4>
                        </div>
                        <div class="card-body">
                            <form action="valida_cadastro.php" method="POST">
                                <div class="form-group">
                                    <label>Nome Completo</label>
                                    <input name="nome" type="text" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>E-mail</label>
                                    <input name="email" type="email" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Senha</label>
                                    <input name="senha" type="password" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Tipo de Usuário</label>
                                    <select name="perfil" class="form-control">
                                        <option selected disabled>Selecione</option>
                                        <option>Administrador</option>
                                        <option>Tecnico</option>
                                        <option>Usuário</option>
                                    </select>
                                    <?php //VALIDA SE O USUÁRIO JÁ NÃO ESTAVA CADASTRADO
                                    if (isset($_GET['email']) && $_GET['email'] === 'erro') { ?>
                                        <div class="text-danger" style="text-align: center;"> E-Mail já cadastrado!</div>
                                    <?php } ?>
 
                                    <?php //VALIDA SE O PERFIL É VALIDO
                                    if (isset($_GET['validaperfil']) && $_GET['validaperfil'] === 'erro') { ?>
                                        <div class="text-danger" style="text-align: center;"> Obrigatório selecionar um perfil!</div>
                                    <?php } ?>
 
                                    <?php //VALIDA SE O PERFIL É VALIDO
                                    if (isset($_GET['usuario']) && $_GET['usuario'] === 'sucesso') { ?>
                                        <script>
                                            alert('Usuário cadastrado com Sucesso!');
                                        </script>
                                    <?php } else if (isset($_GET['usuario']) && $_GET['usuario'] != 'sucesso') { ?>
                                        <script>
                                            alert('Erro ao inserir usuário no banco, contate o administador!');
                                        </script>
                                    <?php } ?>
                                </div>
                                <button type="submit" class="btn btn-primary btn-block">Cadastrar</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
 
    </body>
 
</html>