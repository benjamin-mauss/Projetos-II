0<?php
session_start();
if (!isset($_SESSION['id'])){
    header("Location: /v1/login?r=Nao_logado");
    die();
}
header("Location: /v1/turmas");
    die();
?>

logado