
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
    <link href="/v1/css/add.css" rel="stylesheet">
    <title>Zodak</title>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark navbarme">
    <div class="container-fluid containerNav">
      <a class="navbar-brand navTitle" href="/v1">ZODAK</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse containerItemNav" id="navbarNavDropdown">
          <ul class="navbar-nav">
            <li class="nav-item dropdown">
              <a class="nav-link dropItemMe" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Alunos</a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item dropItemMe" href="/v1/alunos">Aluno</a></li>
                <li><a class="dropdown-item dropItemMe" href="/v1/alunos/add.php">Adicionar Aluno</a></li>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropItemMe" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Turmas</a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item dropItemMe" href="/v1/turmas">Turma</a></li>
                <li><a class="dropdown-item dropItemMe" href="/v1/turmas/add.php">Adicionar Turma</a></li>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropItemMe" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Horários</a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item dropItemMe" href="/v1/horarios">Horários</a></li>
                <li><a class="dropdown-item dropItemMe" href="/v1/horarios/add.php">Adicionar Horários</a></li>
              </ul>
              <li class="nav-item dropdown">
              <a class="nav-link dropItemMe" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Presenças</a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item dropItemMe" href="/v1/presencas">Presenças</a></li>
              </ul> 
            </li>
            </li>
          </ul>
        </div>
        <a class="navbar-brand navLogout" href="/v1/login/logout.php">SAIR</a>
    </div>
</nav>


<?php

if($_POST){
    if(strlen($_POST['grade']) > 0 && strlen($_POST['nome']) > 0){
        
        require_once("../database/connect.php");
        $a = $_POST["grade"];
        $b = $_POST["nome"];
        
        $q = mysqli_query($conn, "INSERT INTO zodak.turmas values (NULL, '$a', '$b')");
        header("Location: /v1/turmas?r=Incluiu");
        die();
    }else{
        header("Location: /v1/turmas?r=Erro_1");
        die();
    }
    
    header("Location: /v1/turmas?r=Erro_2");
    die();
}

?>

<div class="containerform">
  <h2>ADICIONAR UMA NOVA TURMA</h2>
  <form action="" method="post">
    <input type="text" name="nome" id="nome" placeholder="Nome">
    <input type="number" name="grade" id="grade" placeholder="Grade">
    <button class="btnAtt" type="submit">adicionar</button>
  </form>
</div>