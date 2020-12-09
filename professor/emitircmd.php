<?php
include('1.php');

$gravidade = $_GET['gravidade'];
$predef = $_GET['predef'];
$descarea = $_GET['descarea'];
$idaluno = $_GET['idaluno'];

    if($predef == 1){
        $querydescarea = "insert into ocorrencias (idaluno, idprofessor, disciplina, gravidade, motivo, data_ocorrencia) values ('$idaluno', '$idprofessor', '$materiaprofessor', '$gravidade', '$descarea', NOW())";
        mysqli_query($conexao, $querydescarea);
    }else{
        $querypredef = "insert into ocorrencias (idaluno, idprofessor, disciplina, gravidade, motivo, data_ocorrencia) values ('$idaluno', '$idprofessor', '$materiaprofessor', '$gravidade', '$predef', NOW())";
        mysqli_query($conexao, $querypredef);
    }

header('Location: ocorrencias.php');

?>