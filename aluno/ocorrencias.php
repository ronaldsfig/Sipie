<?php
session_start();
include('../verifica_login_aluno.php');
include('../conexao.php')
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
    <div class="hero is-fullheight">
        <div class="hero-body">
            <div class="container has-text-centered">

                <div class="card" style="margin-bottom: 20px; padding-bottom: 20px; padding-top: 20px; margin-top: 50px;">
                    <nav class="level" style="margin-left: 40px; margin-right: 40px">
                        <div class="level-left">
                            <div class="level-item">
                                Professor
                            |</div>
                            <div class="level-item">
                                Matéria
                            |</div>
                            <div class="level-item">
                                Gravidade
                            |</div>
                            <div class="level-item">
                                Data/Hora
                            </div>
                        </div>
                    </nav>
                </div>

                
                <div class="card" style="margin-bottom: 20px; padding-bottom: 20px; padding-top: 20px">
                <?php
                $idaluno = $_SESSION['idaluno'];
                $queryoc = "SELECT p.nome, o.disciplina, o.gravidade, o.data_ocorrencia, o.motivo FROM ocorrencias o JOIN professor p ON o.idprofessor = p.idprofessor WHERE o.idaluno = '$idaluno';";
                $queryoc2 = $conexao->query($queryoc) or die($conexao->error);
                while ($sqloc = $queryoc2->fetch_array()) {
                ?>
                <article class="message" style="margin-left: 20px; margin-right: 20px; box-shadow: 5px 10px rgba(0, 0, 0, 0.1)">
                    <div class="message-header" style="background-color: #E84D6E">
                        <nav class="level">
                            <div class="level-left">
                                <div class="level-item">
                                    <img src="../grafico/danger.png" width="25" height="25">
                                </div>
                                <div class="level-item">
                                    <?php echo utf8_encode($sqloc['nome']); ?>
                                |</div>
                                <div class="level-item">
                                    <?php echo utf8_encode($sqloc['disciplina']); ?>
                                |</div>
                                <div class="level-item">
                                    <?php echo $sqloc['gravidade']; ?>
                                |</div>
                                <div class="level-item">
                                    <?php echo date("d/m/Y H:i:s", strtotime($sqloc['data_ocorrencia'])); ?>
                                </div>
                        </nav>
                    </div>
                    <div class="message-body">
                        <?php echo utf8_encode($sqloc['motivo']); ?>
                    </div>
                </article>
                <?php
                }
                ?>

                </div>

                <div class="card" style="margin-bottom: 20px; padding-bottom: 20px; padding-top: 20px">
                    <font size="4px" color="lightgrey">
                    Ocorrências serão progressivamente ocultadas do painel após 60 dias em relação a sua data de aquisição, tal medida influencia positivamente no desempenho da sessão do usuário, no entanto, poderão ser consultadas com o suporte técnico da Sipie.
                    </font>
                </div>
            </div>
        </div>
    </div>
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