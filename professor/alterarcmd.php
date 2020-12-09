<?php
include('1.php');
    $q1triav1 = $_GET['1triav1'];
    $q1triav2 = $_GET['1triav2'];
    $q2triav1 = $_GET['2triav1'];
    $q2triav2 = $_GET['2triav2'];
    $q3triav1 = $_GET['3triav1'];
    $q3triav2 = $_GET['3triav2'];
    $idaluno = $_GET['idaluno'];

    $query1triav1 = "update notas1tri set $materiaprofessorcmd='$q1triav1' where idaluno='$idaluno' and av='1';";
    $query1triav2 = "update notas1tri set $materiaprofessorcmd='$q1triav2' where idaluno='$idaluno' and av='2';";
    $query2triav1 = "update notas2tri set $materiaprofessorcmd='$q2triav1' where idaluno='$idaluno' and av='1';";
    $query2triav2 = "update notas2tri set $materiaprofessorcmd='$q2triav2' where idaluno='$idaluno' and av='2';";
    $query3triav1 = "update notas3tri set $materiaprofessorcmd='$q3triav1' where idaluno='$idaluno' and av='1';";
    $query3triav2 = "update notas3tri set $materiaprofessorcmd='$q3triav2' where idaluno='$idaluno' and av='2';";

    mysqli_query($conexao, $query1triav1);
    mysqli_query($conexao, $query1triav2);
    mysqli_query($conexao, $query2triav1);
    mysqli_query($conexao, $query2triav2);
    mysqli_query($conexao, $query3triav1);
    mysqli_query($conexao, $query3triav2);

    header('Location: notas.php');

?>