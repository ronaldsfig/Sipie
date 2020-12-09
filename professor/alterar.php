<?php
include('1.php');
include('../verifica_login_professor.php');
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
    <link rel="stylesheet" type="text/css" href="../css/professorr.css">
    <link rel="stylesheet" type="text/css" href="../css/notasprof.css">
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
            
                <div class="card" style="margin-bottom: 20px; padding-bottom: 20px; padding-top: 20px">
                    <img src="../grafico/notaprof.jpg" alt="" style="border-radius: 30px; opacity: 0.5" width="850" height="50"><br>
                    <font size="3px" color="lightgrey">
                    Prezado professor, você terá direito a alterar apenas as notas de sua respectiva disciplina.<br>
                    </font>
                </div>


                <?php
                    $idaluno = $_GET['idaluno'];
                    $selecionar1triav1 = mysqli_query($conexao, "select * from notas1tri where idaluno = '$idaluno' and av = '1'");
                    $selecionar1triav2 = mysqli_query($conexao, "select * from notas1tri where idaluno = '$idaluno' and av = '2'");
                    $selecionar2triav1 = mysqli_query($conexao, "select * from notas2tri where idaluno = '$idaluno' and av = '1'");
                    $selecionar2triav2 = mysqli_query($conexao, "select * from notas2tri where idaluno = '$idaluno' and av = '2'");
                    $selecionar3triav1 = mysqli_query($conexao, "select * from notas3tri where idaluno = '$idaluno' and av = '1'");
                    $selecionar3triav2 = mysqli_query($conexao, "select * from notas3tri where idaluno = '$idaluno' and av = '2'");

                    $detalhesaluno = mysqli_query($conexao, "select * from aluno where idaluno='$idaluno'");
                    while ($detalhesaluno2 = mysqli_fetch_array($detalhesaluno)) {
                        $nomealuno = $detalhesaluno2['nome'];
                        $turmaaluno = $detalhesaluno2['turma'];
                    };
                ?>

                <div class="card" style="margin-bottom: 20px; padding-bottom: 20px; padding-top: 20px">
                    <form action="alterarcmd.php">
                    <center>
                        <table class="table" border=1>
                            <tr>
                                <td><font color=#00d1b2>
                                <center><?php echo utf8_encode($nomealuno);?></center>
                                </td>
                                <td><font color=#00d1b2>
                                <center><?php echo $turmaaluno?>º Ano do Ensino Médio</center>
                                </td>
                            </tr>
                        </table>
                        <table class="table" border=1>
                            <tr>
                                <th colspan=2><font color=#00d1b2>
                                <center>1º Trimestre</center>
                                </th>
                                <th colspan=2><font color=#00d1b2>
                                <center>2º Trimestre</center>
                                </th>
                                <th colspan=2><font color=#00d1b2>
                                <center>3º Trimestre</center>
                                </th>
                            </tr>
                            <tr>
                                <th><font color=#00d1b2>
                                <center>Avaliação 1</center>
                                </th>
                                <th><font color=#00d1b2>
                                <center>Avaliação 2</center>
                                </th>
                                <th><font color=#00d1b2>
                                <center>Avaliação 1</center>
                                </th>
                                <th><font color=#00d1b2>
                                <center>Avaliação 2</center>
                                </th>
                                <th><font color=#00d1b2>
                                <center>Avaliação 1</center>
                                </th>
                                <th><font color=#00d1b2>
                                <center>Avaliação 2</center>
                                </th>
                            </tr>

                            <tr>
                            <?php
                                while ($sqls = mysqli_fetch_array($selecionar1triav1)) {
                            ?>
                                <th><font color=#00d1b2>
                                <center>
                                    <input type="number" name="1triav1" value="<?php echo $sqls[$materiaprofessorcmd]?>" step="any">
                                </center>
                                </th>
                            <?php
                                }
                            ?>

                            <?php
                                while ($sqls = mysqli_fetch_array($selecionar1triav2)) {
                            ?>
                                <th><font color=#00d1b2>
                                <center>
                                    <input type="number" name="1triav2" value="<?php echo $sqls[$materiaprofessorcmd]?>" step="any">
                                </center>
                                </th>
                            <?php
                                }
                            ?>

                            <?php
                                while ($sqls = mysqli_fetch_array($selecionar2triav1)) {
                            ?>
                                <th><font color=#00d1b2>
                                <center>
                                    <input type="number" name="2triav1" value="<?php echo $sqls[$materiaprofessorcmd]?>" step="any">
                                </center>
                                </th>
                            <?php
                                }
                            ?>
                            
                            <?php
                                while ($sqls = mysqli_fetch_array($selecionar2triav2)) {
                            ?>
                                <th><font color=#00d1b2>
                                <center>
                                    <input type="number" name="2triav2" value="<?php echo $sqls[$materiaprofessorcmd]?>" step="any">
                                </center>
                                </th>
                            <?php
                                }
                            ?>
                            
                            <?php
                                while ($sqls = mysqli_fetch_array($selecionar3triav1)) {
                            ?>
                                <th><font color=#00d1b2>
                                <center>
                                    <input type="number" name="3triav1" value="<?php echo $sqls[$materiaprofessorcmd]?>" step="any">
                                </center>
                                </th>
                            <?php
                                }
                            ?>
                            
                            <?php
                                while ($sqls = mysqli_fetch_array($selecionar3triav2)) {
                            ?>
                                <th><font color=#00d1b2>
                                <center>
                                    <input type="number" name="3triav2" value="<?php echo $sqls[$materiaprofessorcmd]?>" step="any">
                                </center>
                                </th>
                            <?php
                                }
                            ?>

                                <input type="hidden" name="idaluno" value="<?php echo $idaluno?>">

                            </tr>
                        </table>
                        <button type="submit" class="button is-primary">
                            Aplicar modificações
                        </button>
                        <button class="button is-primary">
                            Retornar para alunos
                        </button>
                    <center>
                    </form>
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
            <img src="../grafico/professor.png">
            <a href="">
                <figcaption>
                    <p>Alterar</p>
                </figcaption>
            </a>
        </figure>

        <br>
        <div class="nomeimg"><p align="center"><?php echo utf8_encode ($_SESSION['professor'])?></p></div>
        <div class="nomedesc"><p align="center"><?php echo $materiaprofessor ?></p></div><br>

        <li><p align="center"><a href="notas.php" >Lançamento de Notas</a></p></li>
        <li><p align="center"><a href="ocorrencias.php" >Emissão de Ocorrências</a></p></li>
        <li><p align="center"><a href="info.php" class="information"><img src="../grafico/information.png" height=20px width=20px>&nbsp;&nbsp;&nbsp;Informações</a></p></li>
        <li><p align="center"><a href="" class="danger"><img src="../grafico/danger.png" height=20px width=20px>&nbsp;&nbsp;&nbsp;Comunicar Erro</a></p></li>
        <li><p align="center"><a href="../logout.php" class="exit"><img src="../grafico/exit.png" height=20px width=20px>&nbsp;&nbsp;&nbsp;Encerrar Sessão</a></p></li>
    </ul>
    </nav>

</body>