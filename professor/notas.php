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
                    <font size="5px" style="font-weight: bold; color: lightgrey">
                    Alteração de notas<br>
                    </font>
                </div>
            
                <div class="card" style="margin-bottom: 20px; padding-bottom: 20px; padding-top: 20px">
                    <img src="../grafico/notaprof.jpg" alt="" style="border-radius: 30px; opacity: 0.5" width="850" height="50"><br>
                    <font size="3px" color="lightgrey">
                    Prezado professor, você terá direito a visualizar apenas alunos de sua respectiva instituição e turma(s).<br>
                    </font>
                </div>

                <div class="card" style="margin-bottom: 20px; padding-bottom: 20px; padding-top: 20px">
                    <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
                        <nav class="level" style="margin-left: 40px; margin-right: 40px">
                            <div class="level-item">   
                                <font color=#00d1b2>Aluno:</font>&nbsp;&nbsp;&nbsp;
                                <input class="input is-primary" type="text" placeholder="*Opcional" name='nome'>
                            </div>
                            <div class="level-item">   
                                <font color=#00d1b2>Turma:</font>&nbsp;&nbsp;&nbsp;
                                <div class="select is-primary">

                                    <?php
                                        $queryleciona = "SELECT l.idturma FROM professor p JOIN leciona l ON p.idprofessor = l.idprofessor JOIN turma t ON l.idturma = t.idturma WHERE p.idprofessor = $idprofessor;";
                                        $queryleciona2 = $conexao->query($queryleciona) or die($conexao->error);
                                        $array = array();
                                        while($dad=$queryleciona2->fetch_array()){
                                            array_push($array, $dad['idturma']);
                                        };
                                    ?>

                                    <select name="turma">
                                        <option value="0">Todas as suas turmas</option>
                                        <?php 

                                        if($array[0] == 1){
                                            echo "<option value='1'>1º Ano do Ensino Médio</option>";
                                        }elseif ($array[0] == 2) {
                                            echo "<option value='2'>2º Ano do Ensino Médio</option>";
                                        }elseif ($array[0] == 3) {
                                            echo "<option value='3'>3º Ano do Ensino Médio</option>";
                                        }

                                        if($array[1] == 1){
                                            echo "<option value='1'>1º Ano do Ensino Médio</option>";
                                        }elseif ($array[1] == 2) {
                                            echo "<option value='2'>2º Ano do Ensino Médio</option>";
                                        }elseif ($array[1] == 3) {
                                            echo "<option value='3'>3º Ano do Ensino Médio</option>";
                                        }

                                        if($array[2] == 1){
                                            echo "<option value='1'>1º Ano do Ensino Médio</option>";
                                        }elseif ($array[2] == 2) {
                                            echo "<option value='2'>2º Ano do Ensino Médio</option>";
                                        }elseif ($array[2] == 3) {
                                            echo "<option value='3'>3º Ano do Ensino Médio</option>";
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="level-item">   
                                <button type="submit" value="submit" class="button is-primary is-fullwidth" style="width: 250px;">
                                    Pesquisar
                                </button>
                            </div>
                        </nav>
                    </form>
                </div>

                <div id="resultado">
                </div>

                <div class="card" style="margin-bottom: 20px; padding-bottom: 20px; padding-top: 20px">
                <center>
                    <table border=1 class="table">
                        <tr>
                            <th><font color=#00d1b2>
                            <center>
                            Aluno
                            </center>
                            </th>
                            <th><font color=#00d1b2>
                            <center>
                            Turma
                            </center>
                            </th>
                            <th><font color=#00d1b2>
                            <center>
                            Ações
                            </center>
                            </th>
                        </tr>

                        <?php
                        ini_set('display_errors', 0 );
                        error_reporting(0);
                            $parametro = filter_input(INPUT_POST, "nome");
                            if (isset($_POST['turma'])) {
                                $parametro2 = $_POST['turma'];
                            }
                            if($parametro2 == 0){
                                if($parametro2 = "p"){
                                    $consulta = "SELECT * FROM aluno WHERE (instituicao = $instituicaoprofessor AND (turma = '$array[0]' or turma  = '$array[1]' or turma = '$array[2]'))";
                                };
                                if($parametro){
                                    $consulta = "select * from aluno where (nome like '$parametro%' and (instituicao = '$instituicaoprofessor' and (turma = '$array[0]' or turma  = '$array[1]' or turma = '$array[2]')))";
                                }
                            }else{
                                $consulta = "select * from aluno where nome like '$parametro%' and turma = '$parametro2' and instituicao = '$instituicaoprofessor'";
                            }

                            $con = $conexao->query($consulta) or die($conexao->error);
                            if($con->num_rows == 0){
                                echo "<tr><td colspan=3><center>&nbsp;&nbsp;&nbsp;&nbsp;Não há registros de alunos no momento.&nbsp;&nbsp;&nbsp;&nbsp;</center></td></tr>";
                            }
                            while($dado=$con->fetch_array()){
                        ?>

                        <tr>
                            <td>
                            <center>
                            <?php echo utf8_encode($dado["nome"]);?>
                            </center>
                            </td>
                            <td>
                            <center>
                            <?php echo $dado["turma"];?>º Ano do Ensino Médio
                            </center>
                            </td>
                            <td>
                            <center>
                                <a href="alterar.php?idaluno=<?php echo $dado["idaluno"];?>">
                                    <span class="tag is-primary" style="width: 150px">Lançar / alterar nota</span>
                                </a>
                            </center>
                            </td>
                        </tr>

                        <?php
                            };
                        ?>

                    </table>
                </center>
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

        <li><p align="center"><a href="" >Lançamento de Notas</a></p></li>
        <li><p align="center"><a href="ocorrencias.php" >Emissão de Ocorrências</a></p></li>
        <li><p align="center"><a href="info.php" class="information"><img src="../grafico/information.png" height=20px width=20px>&nbsp;&nbsp;&nbsp;Informações</a></p></li>
        <li><p align="center"><a href="" class="danger"><img src="../grafico/danger.png" height=20px width=20px>&nbsp;&nbsp;&nbsp;Comunicar Erro</a></p></li>
        <li><p align="center"><a href="../logout.php" class="exit"><img src="../grafico/exit.png" height=20px width=20px>&nbsp;&nbsp;&nbsp;Encerrar Sessão</a></p></li>
    </ul>
    </nav>

</body>

</html>