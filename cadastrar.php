<?php
session_start();
//include('verifica_chave_acesso.php');
?>



<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cadastro Sipie</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="css/bulma.min.css" />
    <link rel="stylesheet" type="text/css" href="css/principal.css">
</head>

<body>
    <section class="hero is-success is-fullheight">
        <div class="hero-body">
            <div class="container has-text-centered">
                    <img src="grafico\logo.png" height="175" width="175" class="logo">

                    <!--parte php ERRO não aceitar termos-->
                    <?php
                        if (isset($_SESSION['termos'])):
                    ?>
                    <div class="notification is-danger" style="background-color: #E84D6E">
                      <p>ERRO: É necessário aceitar os <a href="">termos de política e privacidade</a>.</p>
                    </div>
                    <?php
                        endif;
                        unset($_SESSION['termos']);
                    ?>
                    <!--parte php-->

                    <!--parte php ERRO usuario existente-->
                    <?php
                        if (isset($_SESSION['usuario_existe'])):
                    ?>
                    <div class="notification is-danger" style="background-color: #E84D6E">
                      <p>ERRO: O usuário escolhido já existe. Informe outro e tente novamente.</p>
                    </div>
                    <?php
                        endif;
                        unset($_SESSION['usuario_existe']);
                    ?>
                    <!--parte php-->

                    <!--parte php ERRO senha existente-->
                    <?php
                        if (isset($_SESSION['senha_existe'])):
                    ?>
                    <div class="notification is-danger" style="background-color: #E84D6E">
                      <p>ERRO: A senha escolhida já existe. Informe outra e tente novamente.</p>
                    </div>
                    <?php
                        endif;
                        unset($_SESSION['senha_existe']);
                    ?>
                    <!--parte php-->

                    <!--parte php ERRO confirmar senha errada-->
                    <?php
                        if (isset($_SESSION['senhaerrada'])):
                    ?>
                    <div class="notification is-danger" style="background-color: #E84D6E">
                      <p>ERRO: Senhas incompatíveis, por favor, tente novamente.</p>
                    </div>
                    <?php
                        endif;
                        unset($_SESSION['senhaerrada']);
                    ?>
                    <!--parte php-->

                    <div class="columns"><div class="column"><div class="box">
                           
                        <div class="field">
                            <div class="control">
                                <section class="hero is-link" style="border-radius: 10px; background-color: rgba(50,115,220,.4)">
                                    <div class="hero-body">
                                        <div class="container">

                                            <!--parte php iniciando while-->
                                            <?php
                                            include('conexao.php');
                                            $chave = $_SESSION['chave'];
                                            $_SESSION['chavenext'] = $chave;

                                            $querychave = "select * from chave where chave = '{$chave}';";

                                            $resultchave = mysqli_query($conexao, $querychave);

                                            while ($dado = mysqli_fetch_array($resultchave)) {

                                            ?>
                                            <!--parte php-->
                                            
                                            <div class="columns">
                                                <div class="column">
                                                    <h1 class="title">
                                                        <!--parte php mostrando se é professor ou aluno-->
                                                            <?php
                                                            if ($dado["perm"] == 1) {
                                                                echo "Professor:";
                                                                }else{
                                                                echo "Aluno:";
                                                                };
                                                            $perm = $dado["perm"];
                                                            $_SESSION['perm'] = $perm;
                                                            ?>
                                                        <!--parte php-->
                                                    </h1>
                                                </div>

                                                <div class="column">
                                                    <h1 class="subtitle">
                                                        <!--parte php informando o nome do professor/aluno-->
                                                            <?php
                                                            echo utf8_encode($dado["nome"]);
                                                            $nome = $dado["nome"];
                                                            $_SESSION['nome'] = $nome;
                                                            ?>
                                                        <!--parte php-->
                                                    </h1>
                                                </div>
                                            </div>

                                            <br>

                                            <h2>
                                                <div class="columns">
                                                    <div class="column">
                                                        <p>
                                                            Data de Nascimento:
                                                        </p>
                                                        <!--parte php mostrando a data de nascimento-->
                                                            <?php
                                                            echo date("d/m/Y", strtotime($dado["data_nascimento"]));
                                                            $data_nascimento = $dado["data_nascimento"];
                                                            $_SESSION['data_nascimento'] = $data_nascimento;
                                                            ?>
                                                        <!--parte php-->
                                                        <p>
                                                            Gênero:
                                                        </p>
                                                        <!--parte php mostrando o gênero-->
                                                            <?php
                                                            echo $dado["genero"];
                                                            $genero = $dado["genero"];
                                                            $_SESSION['genero'] = $genero;
                                                            ?>
                                                        <!--parte php-->
                                                    </div>
                                                    <div class="column">
                                                        <p>
                                                            Instituição:
                                                        </p>
                                                        <!--parte php mostrando a instituição-->
                                                            <?php
                                                            $instituicao = $dado["instituicao"];
                                                            $pesqinstituicao = mysqli_query($conexao, "select * from instituicao where idinstituicao = '$instituicao';");
                                                            while ($dadoinstituicao = mysqli_fetch_array($pesqinstituicao)) {
                                                                echo utf8_encode($dadoinstituicao["instituicao"]);
                                                            };
                                                            $_SESSION['instituicao'] = $instituicao;
                                                            ?>
                                                        <!--parte php-->
                                                        <p>
                                                            <?php
                                                            if($dado["perm"] == 0){
                                                                echo "Turma:";
                                                            }else{
                                                                echo "Disciplina:";
                                                            }
                                                            ?>
                                                        </p>
                                                        <!--parte php mostrando a turma && finalizando while-->
                                                            <?php
                                                            if($dado["perm"] == 0){
                                                                echo $dado["turma"];
                                                                $turma = $dado["turma"];
                                                                $_SESSION['turma'] = $turma;
                                                            }else{
                                                                $disciplina = $dado["disciplina"];
                                                                $pesqdisciplina = mysqli_query($conexao, "select * from materia where iddisciplina = '$disciplina';");
                                                                while ($dadodisciplina = mysqli_fetch_array($pesqdisciplina)) {
                                                                    echo utf8_encode($dadodisciplina["disciplina"]);
                                                                };
                                                                $_SESSION['disciplina'] = $disciplina;
                                                            }
                                                            ?>
                                                        <!--parte php-->
                                                            <?php
                                                            if($dado["perm"] == 0){
                                                                echo "º Ano do Ensino Médio";
                                                            }
                                                            };
                                                            ?>
                                                        <!--parte php-->
                                                    </div>
                                                </div>
                                            </h2>
                                        </div>
                                    </div>
                                </section>
                            </div>
                        </div>
                    

                    </div></div>
                    <div class="column"><div class="box">


                        <form action="cadastrarcmd.php" method="POST">
                            
                            <div class="field">
                                <div class="control">
                                    <input name="email" name="text" class="input is-large" placeholder="Email" autofocus="">
                                </div>
                            </div>

                            <div class="field">
                                <div class="control">
                                    <input name="cadastrousuario" name="text" class="input is-large" placeholder="Usuário" autofocus="">
                                </div>
                            </div>

                            <div class="field">
                                <div class="control">
                                    <input name="cadastrosenha" class="input is-large" type="password" placeholder="Sua senha">
                                </div>
                            </div>

                            <div class="field">
                                <div class="control">
                                    <input name="confirmasenha" class="input is-large" type="password" placeholder="Confirme sua senha">
                                </div>
                            </div>

                    </div></div>
                    </div>
                    <div class="column">
                    <div class="box" id="ultimobox">

                            <div class="field">
                                <div class="control">
                                    <p align="center">
                                        <input value="sim" name="termo" class="" type="checkbox" id="aceito">
                                        <label for="aceito">
                                            <font color=#C9C9C9>
                                                Aceito os <a href="">termos de uso e política de privacidade</a>. 
                                            </font>
                                        </label>
                                    </p>
                                </div>
                            </div>
                             
                            <div class="field">
                                <div class="control">
                                    <p align="center">
                                        <button type="submit" value="submit" class="button is-block is-link is-large is-fullwidth" style="width: 380px;">
                                            Cadastrar
                                        </button>
                                    </p>
                                </div>
                            </div>

                            <div class="field" style="margin-top: 30px">
                                <div class="control">
                                    <div>
                                        <p align="center">
                                            <a href="chave.php" class="button is-primary is-medium is-fullwidth" style="width: 380px; font-weight: normal;">
                                                Retornar
                                            </a>
                                        </p>
                                    </div>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
        <footer class="footer">
          <div class="content has-text-centered">
            <font color=#FF6F61>
              <p>
                <a href=""><font color=#FF6F61>Instagram @portalsipie</font>
                &nbsp;<img src="grafico/instagram.png" width=30px height=30px style="margin-bottom: -8px"></a> &nbsp;&nbsp;|&nbsp;&nbsp; <a href=""><font color=#FF6F61>Facebook @portalsipie</font>
                &nbsp;<img src="grafico/facebook.png" width=30px height=30px style="margin-bottom: -6px"></a> &nbsp;&nbsp;|&nbsp;&nbsp; <a href=""><font color=#FF6F61>Twitter @portalsipie</font>
                &nbsp;<img src="grafico/twitter.png" width=35px height=35px style="margin-bottom: -6px"></a>
              </p>
              <p><font size="2">
              <a href=""><font color=#FF6F61>Termos de uso e política de privacidade.</a></font> &nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;
                Portal Sipie Copyright © 2020 Todos os direitos reservados.
              </p></font>
            </font>
          </div>
      </footer>
    </section>


    
    <?php
        unset($_SESSION['chavecorreta']);
    ?>


</body>
</html>
