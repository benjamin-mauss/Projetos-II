<?php
session_start();
if (!isset($_SESSION['id'])){
    header("Location: /v1/login?r=Nao_logado");
    die();
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/v1/lib/bootstrap.css" rel="stylesheet">
    <link href="/v1/lib/docs.css" rel="stylesheet">
    <script src="/v1/lib/bootstrap.js"></script>
    <link href="/v1/css/navbar.css" rel="stylesheet">
    <link href="/v1/css/index.css" rel="stylesheet">
    
    <title>Zodak</title>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark navbarme ">
    <div class="container-fluid containerNav">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse containerItemNav navbarLogin" id="navbarNavDropdown">
          <ul class="navbar-nav">
            <li class="nav-item dropdown">
              <a class="nav-link" href="/v1/alunos" >Alunos</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link" href="/v1/turmas">Turmas</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link" href="/v1/horarios">Horários</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link" href="/v1/presencas">Presenças</a>
            </li>
          </ul>
        </div>
        <a class="navbar-brand navLogout" href="/v1/login/logout.php">SAIR</a>
    </div>
</nav>

<div class="logo">
    <h2>ZODAK</h2>
</div>