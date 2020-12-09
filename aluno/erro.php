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
                <div style="margin-left: 50px; margin-right: 50px">
                    <font sizeas serão progressivamente="4px" color="lightgrey">
                    <b>Política Privacidade</b>
                    <br>
                    <br>
                     A sua privacidade é importante para nós. É política do Sipie respeitar a sua privacidade em relação a qualquer informação sua que possamos coletar no site Sipie, e outros sites que possuímos e operamos.
                     Solicitamos informações pessoais apenas quando realmente precisamos delas para lhe fornecer um serviço. Fazemo-lo por meios justos e legais, com o seu conhecimento e consentimento. Também informamos por que estamos coletando e como será usado.
                     Apenas retemos as informações coletadas pelo tempo necessário para fornecer o serviço solicitado. Quando armazenamos dados, protegemos dentro de meios comercialmente aceitáveis ​​para evitar perdas e roubos, bem como acesso, divulgação, cópia, uso ou
                     modificação não autorizados.
                     Não compartilhamos informações de identificação pessoal publicamente ou com terceiros, exceto quando exigido por lei.
                     O nosso site pode ter links para sites externos que não são operados por nós. Esteja ciente de que não temos controle sobre o conteúdo e práticas desses sites e não podemos aceitar responsabilidade por suas respectivas políticas de privacidade.
                     Você é livre para recusar a nossa solicitação de informações pessoais, entendendo que talvez não possamos fornecer alguns dos serviços desejados.                    O uso continuado de nosso site será considerado como aceitação de nossas práticas em torno de privacidade e informações pessoais. Se você tiver alguma dúvida sobre como lidamos com dados do usuário e informações pessoais, entre em contacto connosco.
                     <br>
                     <br>
                     <b>Política de Cookies Sipie</b>
                     <br>
                     <br>
                     O que são cookies?
                     <br>
                     <br>
                     Como é prática comum em quase todos os sites profissionais, este site usa cookies, que são pequenos arquivos baixados no seu computador, para melhorar sua experiência. Esta página descreve quais informações eles coletam, como as usamos e por que às vezes
                     precisamos armazenar esses cookies. Também compartilharemos como você pode impedir que esses cookies sejam armazenados, no entanto, isso pode fazer o downgrade ou 'quebrar' certos elementos da funcionalidade do site.
                     <br>
                     <br>
                     Como usamos os cookies?
                     <br>
                     <br>
                     Utilizamos cookies por vários motivos, detalhados abaixo. Infelizmente, na maioria dos casos, não existem opções padrão do setor para desativar os cookies sem desativar completamente a funcionalidade e os recursos que eles adicionam a este site. É recomendável que você deixe todos os cookies se não tiver certeza se precisa ou não deles, caso sejam usados ​​para fornecer um serviço que você usa.
                     <br>
                     <br>
                     Desativar cookies
                     <br>
                     <br>
                     Você pode impedir a configuração de cookies ajustando as configurações do seu navegador (consulte a Ajuda do navegador para saber como fazer isso). Esteja ciente de que a desativação de cookies afetará a funcionalidade deste e de muitos outros sites que você visita. A desativação de cookies geralmente resultará na desativação de determinadas funcionalidades e recursos deste site. Portanto, é recomendável que você não desative os cookies.
                     <br>
                     <br>
                     <b>Cookies que definimos</b>
                     <br>
                     <br>
                     Cookies relacionados à conta
                     <br>
                     <br>
                    Se você criar uma conta connosco, usaremos cookies para o gerenciamento do processo de inscrição e administração geral. Esses cookies geralmente serão excluídos quando você sair do sistema, porém, em específicos casos, eles poderão permanecer posteriormente para lembrar as preferências do seu site ao sair.
                    <br>
                    <br>
                     Cookies relacionados ao login
                    <br>
                    <br>
                     Utilizamos cookies quando você está logado, para que possamos lembrar dessa ação. Isso evita que você precise fazer login sempre que visitar uma nova página. Esses cookies são normalmente removidos ou limpos quando você efetua logout para garantir que você possa acessar apenas a recursos e áreas restritas ao efetuar login.
                    <br>
                    <br>
                     Cookies relacionados a boletins por e-mail
                    <br>
                    <br>
                      Este site oferece serviços de assinatura de boletim informativo ou e-mail e os cookies podem ser usados ​​para lembrar se você já está registrado e se deve mostrar determinadas notificações válidas apenas para usuários inscritos / não inscritos. Pedidos processando cookies relacionados Este site oferece facilidades de comércio eletrônico ou pagamento e alguns cookies são essenciais para garantir que seu pedido seja lembrado entre as páginas, para que possamos processá-lo
                     adequadamente. 
                    <br>
                    <br>
                     Cookies relacionados a pesquisas
                    <br>
                    <br>
                      Periodicamente, oferecemos pesquisas e questionários para fornecer informações interessantes, ferramentas úteis ou para entender nossa base de usuários com mais precisão. Essas pesquisas podem usar cookies para lembrar quem já participou numa pesquisa ou para fornecer resultados precisos após a alteração das páginas.
                    <br>
                    <br>
                      Cookies relacionados a formulários
                    <br>
                    <br>
                       Quando você envia dados por meio de um formulário como os encontrados nas páginas de contacto ou nos formulários de comentários, os cookies podem ser configurados para lembrar os detalhes do usuário para correspondência futura.
                    <br>
                    <br>
                     Cookies de preferências do site
                    <br>
                    <br>
                      Para proporcionar uma ótima experiência neste site, fornecemos a funcionalidade para definir suas preferências de como esse site é executado quando você o usa. Para lembrar suas preferências, precisamos definir cookies para que essas informações possam ser chamadas sempre que você interagir com uma página for afetada por suas preferências.
                     <br>
                     <br>
                    <b>Cookies de Terceiros</b>
                    <br>
                    <br>
                    Em alguns casos especiais, também usamos cookies fornecidos por terceiros confiáveis. A seção a seguir detalha quais cookies de terceiros você pode encontrar através deste site. Este site usa o Google Analytics, que é uma das soluções de análise mais difundidas e confiáveis ​​da Web, para nos ajudar a entender como você usa o site e como podemos melhorar sua experiência. Esses cookies podem rastrear itens como quanto tempo você gasta no site e as páginas visitadas, para que possamos continuar produzindo conteúdo atraente. Para mais informações sobre cookies do Google Analytics, consulte a página oficial do Google Analytics. As análises de terceiros são usadas para rastrear e medir o uso deste site, para que possamos continuar produzindo conteúdo atrativo. Esses cookies podem rastrear itens como o tempo que você passa no site ou as páginas visitadas, o que nos ajuda a entender como podemos melhorar o site para você. Periodicamente, testamos novos recursos e fazemos alterações subtis na maneira como o site se apresenta. Quando ainda estamos testando novos recursos, esses cookies podem ser usados ​​para garantir que você receba uma experiência consistente enquanto estiver no site, enquanto entendemos quais otimizações os nossos usuários mais apreciam. À medida que vendemos produtos, é importante entendermos as estatísticas sobre quantos visitantes de nosso site realmente compram e, portanto, esse é o tipo de dados que esses cookies rastrearão. Isso é importante para você, pois significa que podemos fazer previsões de negócios com precisão que nos permitem analizar nossos custos de publicidade e produtos para garantir o melhor preço possível. 
                    <br>
                    <br>
                    <b>Mais informações</b>
                    <br>
                    <br>
                    Esperemos que esteja esclarecido e, como mencionado anteriormente, se houver algo que você não tem certeza se precisa ou não, geralmente é mais seguro deixar os cookies ativados, caso interaja com um dos recursos que você usa em nosso site.
                    <br>
                    <br>
                    Esta política é efetiva a partir de Maio/2020.
                    </font>
                </div>
                </div>
                <div class="card" style="margin-bottom: 20px; padding-bottom: 20px; padding-top: 20px">
                    <font sizeas serão progressivamente="4px" color="lightgrey">
                    Portal Sipie Copyright © 2020 Todos os direitos reservados.
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

        <li><p align="center"><a href="aluno.php">Perfil</a></p></li>
        <li><p align="center"><a href="boletimcmd.php" >Boletim</a></p></li>
        <li><p align="center"><a href="ocorrencias.php" >Ocorrências</a></p></li>
        <li><p align="center"><a href="info.php" class="information"><img src="../grafico/information.png" height=20px width=20px>&nbsp;&nbsp;&nbsp;Informações</a></p></li>
        <li><p align="center"><a href="" class="danger"><img src="../grafico/danger.png" height=20px width=20px>&nbsp;&nbsp;&nbsp;Comunicar Erro</a></p></li>
        <li><p align="center"><a href="../logout.php" class="exit"><img src="../grafico/exit.png" height=20px width=20px>&nbsp;&nbsp;&nbsp;Encerrar Sessão</a></p></li>
    </ul>
    </nav>

</body>

</html>