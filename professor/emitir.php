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
            
                <div class="card" style="margin-bottom: 20px; padding-bottom: 20px; padding-top: 20px; margin-top: 50px">
                    <img src="../grafico/ocorrprof.jpg" alt="" style="border-radius: 30px; opacity: 0.5" width="850" height="50"><br>
                    <font size="3px" color="lightgrey">
                    Prezado professor, você terá direito a alterar apenas as notas de sua respectiva disciplina.<br>
                    </font>
                </div>


                <?php
                    $idaluno = $_GET['idaluno'];
                    $detalhesaluno = mysqli_query($conexao, "select * from aluno where idaluno='$idaluno'");
                    while ($detalhesaluno2 = mysqli_fetch_array($detalhesaluno)) {
                        $nomealuno = $detalhesaluno2['nome'];
                        $turmaaluno = $detalhesaluno2['turma'];
                    };
                ?>

                <div class="card" style="margin-bottom: 20px; padding-bottom: 20px; padding-top: 20px;">
                    <form action="emitircmd.php" method="get">
                    <center>
                        <table class="table" border=1>
                            <tr>
                                <td><font color=#E84D6E>
                                <center><?php echo utf8_encode($nomealuno);?></center>
                                </td>
                                <td><font color=#E84D6E>
                                <center><?php echo $turmaaluno?>º Ano do Ensino Médio</center>
                                </td>
                            </tr>
                        </table>
                        <article class="message" style="margin-left: 20px; margin-right: 20px; box-shadow: 5px 10px rgba(0, 0, 0, 0.1)">
                            <div class="message-header" style="background-color: #E84D6E">
                                <nav class="level">
                                    <div class="level-left">
                                        <div class="select is-danger">
                                            <select name="gravidade">
                                                <option value="Indeterminado">Selecione a gravidade</option>
                                                <option value="Leve">Leve</option>
                                                <option value="Grave">Grave</option>
                                                <option value="Muito Grave">Muito grave</option>
                                            </select>
                                        </div>
                                    </div>
                                </nav>
                            </div>
                            <div class="message-body">
                                <div class="level-left">
                                    <div class="select is-danger">
                                        <select name="predef">
                                            <option value="1">Causas pré-definidas (preencherá o ocorrido)</option>
                                            <option value="O aluno não realizou as tarefas de casa">O aluno não realizou as tarefas de casa</option>
                                            <option value="O aluno não realizou as tarefas em aula">O aluno não realizou as tarefas em aula</option>
                                            <option value="O aluno chegou atrasado">O aluno chegou atrasado</option>
                                            <option value="O aluno manteve-se fora de sala">O aluno manteve-se fora de sala</option>
                                            <option value="O aluno conversou e/ou pertubou durante a aula">O aluno conversou e/ou pertubou durante a aula</option>
                                            <option value="O aluno utilizou um equipamento eletrônico sem permissão durante aula">O aluno utilizou um equipamento eletrônico sem permissão durante aula</option>
                                            <option value="O aluno utilizou de meios indevidos para obtenção de respostas durante a avaliação">O aluno utilizou de meios indevidos para obtenção de respostas durante a avaliação</option>
                                            <option value="O aluno não respeitou as normas de vestimenta da instituição">O aluno não respeitou as normas de vestimenta da instituição</option>
                                            <option value="O aluno ofendeu e/ou agrediu um companheiro de classe">O aluno ofendeu e/ou agrediu um companheiro de classe</option>
                                            <option value="O aluno ofendeu e/ou agrediu um funcionário da instituição">O aluno ofendeu e/ou agrediu um funcionário da instituição</option>
                                        </select>
                                    </div>
                                </div>
                                <br>
                                <div class="field">
                                    <div class="control">
                                        <textarea class="textarea is-danger" placeholder="Descreva o ocorrido" name="descarea"></textarea>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <input type="hidden" name="idaluno" value="<?php echo $idaluno?>">
                        <button type="submit" class="button is-danger">
                            Emitir ocorrência
                        </button>
                        <button class="button is-danger">
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