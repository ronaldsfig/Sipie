<?php
session_start();
include('../conexao.php');

$query1triav1 = "select * from notas1tri join aluno on notas1tri.idaluno = aluno.idaluno where aluno.idaluno = '{$_SESSION['idaluno']}' and notas1tri.av = '1';";
$query1triav2 = "select * from notas1tri join aluno on notas1tri.idaluno = aluno.idaluno where aluno.idaluno = '{$_SESSION['idaluno']}' and notas1tri.av = '2';";

$query2triav1 = "select * from notas2tri join aluno on notas2tri.idaluno = aluno.idaluno where aluno.idaluno = '{$_SESSION['idaluno']}' and notas2tri.av = '1';";
$query2triav2 = "select * from notas2tri join aluno on notas2tri.idaluno = aluno.idaluno where aluno.idaluno = '{$_SESSION['idaluno']}' and notas2tri.av = '2';";

$query3triav1 = "select * from notas3tri join aluno on notas3tri.idaluno = aluno.idaluno where aluno.idaluno = '{$_SESSION['idaluno']}' and notas3tri.av = '1';";
$query3triav2 = "select * from notas3tri join aluno on notas3tri.idaluno = aluno.idaluno where aluno.idaluno = '{$_SESSION['idaluno']}' and notas3tri.av = '2';";


    $detalhescmd = mysqli_query($conexao, $query1triav1);
    $usuario_bd = mysqli_fetch_assoc($detalhescmd);
        $_SESSION['portugues1triav1'] = $usuario_bd['portugues'];
        $_SESSION['matematica1triav1'] = $usuario_bd['matematica'];
        $_SESSION['historia1triav1'] = $usuario_bd['historia'];
        $_SESSION['geografia1triav1'] = $usuario_bd['geografia'];
        $_SESSION['fisica1triav1'] = $usuario_bd['fisica'];
        $_SESSION['quimica1triav1'] = $usuario_bd['quimica'];
        $_SESSION['biologia1triav1'] = $usuario_bd['biologia'];
        $_SESSION['redacao1triav1'] = $usuario_bd['redacao'];
        $_SESSION['literatura1triav1'] = $usuario_bd['literatura'];
        $_SESSION['ingles1triav1'] = $usuario_bd['ingles'];
        $_SESSION['filosofia1triav1'] = $usuario_bd['filosofia'];
        $_SESSION['sociologia1triav1'] = $usuario_bd['sociologia'];


    $detalhescmd = mysqli_query($conexao, $query1triav2);
    $usuario_bd = mysqli_fetch_assoc($detalhescmd);
        $_SESSION['portugues1triav2'] = $usuario_bd['portugues'];
        $_SESSION['matematica1triav2'] = $usuario_bd['matematica'];
        $_SESSION['historia1triav2'] = $usuario_bd['historia'];
        $_SESSION['geografia1triav2'] = $usuario_bd['geografia'];
        $_SESSION['fisica1triav2'] = $usuario_bd['fisica'];
        $_SESSION['quimica1triav2'] = $usuario_bd['quimica'];
        $_SESSION['biologia1triav2'] = $usuario_bd['biologia'];
        $_SESSION['redacao1triav2'] = $usuario_bd['redacao'];
        $_SESSION['literatura1triav2'] = $usuario_bd['literatura'];
        $_SESSION['ingles1triav2'] = $usuario_bd['ingles'];
        $_SESSION['filosofia1triav2'] = $usuario_bd['filosofia'];
        $_SESSION['sociologia1triav2'] = $usuario_bd['sociologia'];
    

    $detalhescmd = mysqli_query($conexao, $query2triav1);
    $usuario_bd = mysqli_fetch_assoc($detalhescmd);
        $_SESSION['portugues2triav1'] = $usuario_bd['portugues'];
        $_SESSION['matematica2triav1'] = $usuario_bd['matematica'];
        $_SESSION['historia2triav1'] = $usuario_bd['historia'];
        $_SESSION['geografia2triav1'] = $usuario_bd['geografia'];
        $_SESSION['fisica2triav1'] = $usuario_bd['fisica'];
        $_SESSION['quimica2triav1'] = $usuario_bd['quimica'];
        $_SESSION['biologia2triav1'] = $usuario_bd['biologia'];
        $_SESSION['redacao2triav1'] = $usuario_bd['redacao'];
        $_SESSION['literatura2triav1'] = $usuario_bd['literatura'];
        $_SESSION['ingles2triav1'] = $usuario_bd['ingles'];
        $_SESSION['filosofia2triav1'] = $usuario_bd['filosofia'];
        $_SESSION['sociologia2triav1'] = $usuario_bd['sociologia'];
    
    
    $detalhescmd = mysqli_query($conexao, $query2triav2);
    $usuario_bd = mysqli_fetch_assoc($detalhescmd);
        $_SESSION['portugues2triav2'] = $usuario_bd['portugues'];
        $_SESSION['matematica2triav2'] = $usuario_bd['matematica'];
        $_SESSION['historia2triav2'] = $usuario_bd['historia'];
        $_SESSION['geografia2triav2'] = $usuario_bd['geografia'];
        $_SESSION['fisica2triav2'] = $usuario_bd['fisica'];
        $_SESSION['quimica2triav2'] = $usuario_bd['quimica'];
        $_SESSION['biologia2triav2'] = $usuario_bd['biologia'];
        $_SESSION['redacao2triav2'] = $usuario_bd['redacao'];
        $_SESSION['literatura2triav2'] = $usuario_bd['literatura'];
        $_SESSION['ingles2triav2'] = $usuario_bd['ingles'];
        $_SESSION['filosofia2triav2'] = $usuario_bd['filosofia'];
        $_SESSION['sociologia2triav2'] = $usuario_bd['sociologia'];

    $detalhescmd = mysqli_query($conexao, $query3triav1);
    $usuario_bd = mysqli_fetch_assoc($detalhescmd);
        $_SESSION['portugues3triav1'] = $usuario_bd['portugues'];
        $_SESSION['matematica3triav1'] = $usuario_bd['matematica'];
        $_SESSION['historia3triav1'] = $usuario_bd['historia'];
        $_SESSION['geografia3triav1'] = $usuario_bd['geografia'];
        $_SESSION['fisica3triav1'] = $usuario_bd['fisica'];
        $_SESSION['quimica3triav1'] = $usuario_bd['quimica'];
        $_SESSION['biologia3triav1'] = $usuario_bd['biologia'];
        $_SESSION['redacao3triav1'] = $usuario_bd['redacao'];
        $_SESSION['literatura3triav1'] = $usuario_bd['literatura'];
        $_SESSION['ingles3triav1'] = $usuario_bd['ingles'];
        $_SESSION['filosofia3triav1'] = $usuario_bd['filosofia'];
        $_SESSION['sociologia3triav1'] = $usuario_bd['sociologia'];
    
    
    $detalhescmd = mysqli_query($conexao, $query3triav2);
    $usuario_bd = mysqli_fetch_assoc($detalhescmd);
        $_SESSION['portugues3triav2'] = $usuario_bd['portugues'];
        $_SESSION['matematica3triav2'] = $usuario_bd['matematica'];
        $_SESSION['historia3triav2'] = $usuario_bd['historia'];
        $_SESSION['geografia3triav2'] = $usuario_bd['geografia'];
        $_SESSION['fisica3triav2'] = $usuario_bd['fisica'];
        $_SESSION['quimica3triav2'] = $usuario_bd['quimica'];
        $_SESSION['biologia3triav2'] = $usuario_bd['biologia'];
        $_SESSION['redacao3triav2'] = $usuario_bd['redacao'];
        $_SESSION['literatura3triav2'] = $usuario_bd['literatura'];
        $_SESSION['ingles3triav2'] = $usuario_bd['ingles'];
        $_SESSION['filosofia3triav2'] = $usuario_bd['filosofia'];
        $_SESSION['sociologia3triav2'] = $usuario_bd['sociologia'];


header('Location: boletim.php');

?>