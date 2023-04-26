<?php
    include("conecta.php");

    $Matricula = $_POST["Matricula"];
    $Nome = $_POST["Nome"];
    $Idade = $_POST["Idade"];

    $comando = $pdo->prepare("INSERT INTO Alunos values($Matricula, '$Nome', $Idade)");

    $resultado = $comando->execute();

    header("location: Cadastro.html");
?>