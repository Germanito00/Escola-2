<?php
    include("conecta.php");

    $Matricula = $_GET["M"];

    $comando = $pdo->prepare("DELETE FROM alunos WHERE Matricula=$Matricula");

    $resultado = $comando->execute();

    header("location: Cadastro.html");
?>