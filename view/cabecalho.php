<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

</head>

<body>
    <?php if (isset($_SESSION['logado'])) : ?>

        <!-- barra de navegação -->
        <nav class="navbar navbar-dark bg-dark">
            <a class="navbar-brand" href="/listar-cursos">Home</a>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="/logout">Sair <span class="sr-only">(current)</span></a>
                </li>
            </ul>
        </nav>

    <?php endif; ?>

    <div class="container">
        <div class="jumbotron">
            <h1><?= $titulo; ?></h1>
        </div>
        
        <!-- escreve mensagens a partir de dados da sessão -->
        <?php if (isset($_SESSION['mensagem'])) : ?>
            <div class="alert alert-<?= $_SESSION['tipo_mensagem']; ?>">
                <?= $_SESSION['mensagem']; ?>
            </div>
            <!-- limpa as mensagens de dentro da sessao -->
        <?php
            unset($_SESSION['mensagem']);
            unset($_SESSION['tipo_mensagem']);

        endif;
        ?>