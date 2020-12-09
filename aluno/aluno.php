<?php
session_start();
include('../conexao.php');
include('../verifica_login_aluno.php');
?>

<!DOCTYPE html>
<html>
    
<head>
    <meta charset="utf-8">
    <style>
@import url('https://fonts.googleapis.com/css?family=Nunito:400,700&display=swap');
</style>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Portal Sipie</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="../css/bulma.min.css">
    <link rel="stylesheet" type="text/css" href="../css/alunoo.css">
</head>

<body>
<header style="z-index: 1;"> 
    <img src="../grafico/logohigh.png" height=60px width=100px class="logobarra"> 
</header>
    <input type="checkbox" id="chk">
    <label for="chk" class="menu-icon" style="z-index: 1;"><font size="6">&#9776; &nbsp;menu</font></label>

    <div class="bg"></div>

    <nav class="menu" id="principal">
    <ul>
        <ul><p align="center"><a href="" class="voltar">Voltar</a></p></ul>
        <ul><p align="center"><a href="" class="voltar">Voltar</a></p></ul>

        <figure class="foto-legenda">
            <img src="../grafico/aluno.png">
            <a href="">
                <figcaption>
                    <p>Alterar</p>
                </figcaption>
            </a>
        </figure>

        <br>
        <div class="nomeimg"><p align="center"><?php echo $_SESSION['aluno']?></p></div>
        <div class="nomedesc"><p align="center"><?php echo $_SESSION['turma']?>º Ano do Ensino Médio</p></div><br>

        <li><p align="center"><a href="boletimcmd.php" >Boletim</a></p></li>
        <li><p align="center"><a href="ocorrencias.php" >Ocorrências</a></p></li>
        <li><p align="center"><a href="info.php" class="information"><img src="../grafico/information.png" height=20px width=20px>&nbsp;&nbsp;&nbsp;Informações</a></p></li>
        <li><p align="center"><a href="" class="danger"><img src="../grafico/danger.png" height=20px width=20px>&nbsp;&nbsp;&nbsp;Comunicar Erro</a></p></li>
        <li><p align="center"><a href="../logout.php" class="exit"><img src="../grafico/exit.png" height=20px width=20px>&nbsp;&nbsp;&nbsp;Encerrar Sessão</a></p></li>
    </ul>
    </nav>
</body>

</html>