<?php
session_start();
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
                <div class="column is-4 is-offset-4">
                <img src="grafico\logo.png" height="175" width="175" class="logo">

                    <?php
                        if (isset($_SESSION['captchaerrado'])):
                    ?>
                    <div class="notification is-danger" style="background-color: #E84D6E">
                      <p>ERRO: O código captcha foi informado incorretamente.</p>
                    </div>
                    <?php
                        endif;
                        unset($_SESSION['captchaerrado']);
                    ?>

                    <?php
                        if (isset($_SESSION['erro'])):
                    ?>
                    <div class="notification is-danger" style="background-color: #E84D6E">
                      <p>ERRO: Sua chave está incorreta. Comunique a sua instituição de ensino.</p>
                    </div>
                    <?php
                        endif;
                        unset($_SESSION['erro']);
                    ?>

                    <div class="box">
                        <form action="chavecmd.php" method="POST">
                            <div class="field">
                                <div class="control">
                                    <input name="chave" name="text" class="input is-large" placeholder="Sua chave de acesso" autofocus="">
                                </div>
                            </div>



                            <div class="block">
                            <article class="message is-link">
                            <div class="message-header">
                                <p>Verificação de Segurança:</p>
                            </div>
                            <div class="message-body">
                            <img src="captcha.php" alt="Código captcha">
                            <h1><font color=#3273dc style="font-family: 'Nunito', sans-serif;">Insira o código abaixo:</font></h1>

                            <div class="field">
                                <div class="control">
                                    <input name="captcha" name="text" class="input is-large" placeholder="" autofocus="">
                                </div>
                            </div>
                            </div>
                            </article>
                            </div>



                            <button type="submit" class="button is-block is-link is-large is-fullwidth">Ir para cadastro</button>
                            <br>

                            <div class="field">
                                <div class="control">
                                    <div>
                                        <a href="index.php" class="button is-primary is-medium is-fullwidth">
                                            Retornar
                                        </a>
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
</body>

</html>
