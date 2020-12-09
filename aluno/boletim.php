<?php
session_start();
include('../verifica_login_aluno.php');
include('../conexao.php');
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
    <link rel="stylesheet" type="text/css" href="../css/boletim.css">
    <script src="boletim.js"></script>
</head>

<body>
    <header style="z-index: 1;"> 
        <img src="../grafico/logohigh.png" height=60px width=100px class="logobarra"> 
    </header>
    <input type="checkbox" id="chk">
    <label for="chk" class="menu-icon" style="z-index: 1;"><font size="6">&#9776; &nbsp;menu</font></label>
    <div class="hero is-fullheight" style="margin-top: -50px">
        <div class="hero-body">
            <div class="container has-text-centered">


                <div class="card" style="margin-bottom: 80px; padding-bottom: 20px; padding-top: 20px; margin-top: 120px">
                <div class="columns" style="margin-left: 20px; margin-right: 20px">
                    <div class="column">
                        <section class="notification is-primary is-medium" style="box-shadow: 5px 10px rgba(0, 0, 0, 0.1)" >
                            <div id="portugues" onmouseenter="entrarportugues()" onmouseout="sairportugues()">
                                Português <img src="../grafico/portugues.png" width="40px" height="40px" style="margin-bottom: -10px; margin-left: 5px">
                            </div>
                            <div id="resportugues" style="display: none">
                                <center>
                                    <table class="tabelamae">
                                        <tr>
                                            <td>
                                                <table class="table">
                                                    <tr>
                                                        <th colspan=3 style="color:#00d1b2"><center>1º Trimestre</center></th>
                                                    </tr>
                                                    <tr>
                                                        <th style="color:#00d1b2">Av1</th>
                                                        <th style="color:#00d1b2">Av2</th>
                                                        <th style="color:#00d1b2">Média</th>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <?php
                                                                echo $_SESSION['portugues1triav1'];
                                                            ?>
                                                        </td>
                                                        <td>
                                                            <?php
                                                                echo $_SESSION['portugues1triav2'];
                                                            ?>
                                                        </td>
                                                        <td>
                                                            <?php
                                                                if($_SESSION['portugues1triav1']!=NULL){
                                                                    echo $portugues1tri = ($_SESSION['portugues1triav1'] + $_SESSION['portugues1triav2'])/2;
                                                                }else{
                                                                    echo "&nbsp;";
                                                                }
                                                            ?>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </td>
                                            <td>
                                                <table class="table">
                                                    <tr>
                                                        <th colspan=3 style="color:#00d1b2"><center>2º Trimestre</center></th>
                                                    </tr>
                                                    <tr>
                                                        <th style="color:#00d1b2">Av1</th>
                                                        <th style="color:#00d1b2">Av2</th>
                                                        <th style="color:#00d1b2">Média</th>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <?php
                                                                echo $_SESSION['portugues2triav1'];
                                                            ?>
                                                        </td>
                                                        <td>
                                                            <?php
                                                                echo $_SESSION['portugues2triav2'];
                                                            ?>
                                                        </td>
                                                        <td>
                                                            <?php
                                                                if($_SESSION['portugues2triav1']!=NULL){
                                                                    echo $portugues2tri = ($_SESSION['portugues2triav1'] + $_SESSION['portugues2triav2'])/2;
                                                                }else{
                                                                    echo "&nbsp;";
                                                                }
                                                            ?>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </td>
                                            <td>
                                                <table class="table">
                                                    <tr>
                                                        <th colspan=3 style="color:#00d1b2"><center>3º Trimestre</center></th>
                                                    </tr>
                                                    <tr>
                                                        <th style="color:#00d1b2">Av1</th>
                                                        <th style="color:#00d1b2">Av2</th>
                                                        <th style="color:#00d1b2">Média</th>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <?php
                                                                echo $_SESSION['portugues3triav1'];
                                                            ?>
                                                        </td>
                                                        <td>
                                                            <?php
                                                                echo $_SESSION['portugues3triav2'];
                                                            ?>
                                                        </td>
                                                        <td>
                                                            <?php
                                                                if($_SESSION['portugues3triav1']!=NULL){
                                                                    echo $portugues3tri = ($_SESSION['portugues3triav1'] + $_SESSION['portugues3triav2'])/2;
                                                                }else{
                                                                    echo "&nbsp;";
                                                                }
                                                            ?>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                    </table>
                                </center>
                            </div>
                        </section>
                    </div>
                    <div class="column">
                        <section class="notification is-primary is-medium" style="box-shadow: 5px 10px rgba(0, 0, 0, 0.1); background-color: #FF6F61" >
                            <div id="matematica" onmouseenter="entrarmatematica()" onmouseout="sairmatematica()">
                                Matemática <img src="../grafico/matematica.png" width="40px" height="40px" style="margin-bottom: -10px; margin-left: 5px">
                            </div>
                            <div id="resmatematica" style="display: none">
                                <center>
                                    <table class="tabelamae">
                                        <tr>
                                            <td>
                                                <table class="table">
                                                    <tr>
                                                        <th colspan=3 style="color:#ff6f61"><center>1º Trimestre</center></th>
                                                    </tr>
                                                    <tr>
                                                        <th style="color:#ff6f61">Av1</th>
                                                        <th style="color:#ff6f61">Av2</th>
                                                        <th style="color:#ff6f61">Média</th>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <?php
                                                                echo $_SESSION['matematica1triav1'];
                                                            ?>
                                                        </td>
                                                        <td>
                                                            <?php
                                                                echo $_SESSION['matematica1triav2'];
                                                            ?>
                                                        </td>
                                                        <td>
                                                            <?php
                                                                if($_SESSION['matematica1triav1']!=NULL){
                                                                    echo $portugues = ($_SESSION['matematica1triav1'] + $_SESSION['matematica1triav2'])/2;
                                                                }else{
                                                                    echo "&nbsp;";
                                                                }
                                                            ?>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </td>
                                            <td>
                                                <table class="table">
                                                    <tr>
                                                        <th colspan=3 style="color:#ff6f61"><center>2º Trimestre</center></th>
                                                    </tr>
                                                    <tr>
                                                        <th style="color:#ff6f61">Av1</th>
                                                        <th style="color:#ff6f61">Av2</th>
                                                        <th style="color:#ff6f61">Média</th>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <?php
                                                                echo $_SESSION['matematica2triav1'];
                                                            ?>
                                                        </td>
                                                        <td>
                                                            <?php
                                                                echo $_SESSION['matematica2triav2'];
                                                            ?>
                                                        </td>
                                                        <td>
                                                            <?php
                                                                if($_SESSION['matematica2triav1']!=NULL){
                                                                    echo $portugues = ($_SESSION['matematica2triav1'] + $_SESSION['matematica2triav2'])/2;
                                                                }else{
                                                                    echo "&nbsp;";
                                                                }
                                                            ?>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </td>
                                            <td>
                                                <table class="table">
                                                    <tr>
                                                        <th colspan=3 style="color:#ff6f61"><center>3º Trimestre</center></th>
                                                    </tr>
                                                    <tr>
                                                        <th style="color:#ff6f61">Av1</th>
                                                        <th style="color:#ff6f61">Av2</th>
                                                        <th style="color:#ff6f61">Média</th>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <?php
                                                                echo $_SESSION['matematica3triav1'];
                                                            ?>
                                                        </td>
                                                        <td>
                                                            <?php
                                                                echo $_SESSION['matematica3triav2'];
                                                            ?>
                                                        </td>
                                                        <td>
                                                            <?php
                                                                if($_SESSION['matematica3triav1']!=NULL){
                                                                    echo $portugues = ($_SESSION['matematica3triav1'] + $_SESSION['matematica3triav2'])/2;
                                                                }else{
                                                                    echo "&nbsp;";
                                                                }
                                                            ?>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                    </table>
                                </center>
                            </div>
                        </section>
                    </div>
                    <div class="column">
                    <section class="notification is-primary is-medium" style="box-shadow: 5px 10px rgba(0, 0, 0, 0.1)" >
                            <div id="historia" onmouseenter="entrarhistoria()" onmouseout="sairhistoria()">
                                Historia <img src="../grafico/historia.png" width="40px" height="40px" style="margin-bottom: -10px; margin-left: 5px">
                            </div>
                            <div id="reshistoria" style="display: none">
                                <center>
                                    <table class="tabelamae">
                                        <tr>
                                            <td>
                                                <table class="table">
                                                    <tr>
                                                        <th colspan=3 style="color:#00d1b2"><center>1º Trimestre</center></th>
                                                    </tr>
                                                    <tr>
                                                        <th style="color:#00d1b2">Av1</th>
                                                        <th style="color:#00d1b2">Av2</th>
                                                        <th style="color:#00d1b2">Média</th>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <?php
                                                                echo $_SESSION['historia1triav1'];
                                                            ?>
                                                        </td>
                                                        <td>
                                                            <?php
                                                                echo $_SESSION['historia1triav2'];
                                                            ?>
                                                        </td>
                                                        <td>
                                                            <?php
                                                                if($_SESSION['historia1triav1']!=NULL){
                                                                    echo $portugues = ($_SESSION['historia1triav1'] + $_SESSION['historia1triav2'])/2;
                                                                }else{
                                                                    echo "&nbsp;";
                                                                }
                                                            ?>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </td>
                                            <td>
                                                <table class="table">
                                                    <tr>
                                                        <th colspan=3 style="color:#00d1b2"><center>2º Trimestre</center></th>
                                                    </tr>
                                                    <tr>
                                                        <th style="color:#00d1b2">Av1</th>
                                                        <th style="color:#00d1b2">Av2</th>
                                                        <th style="color:#00d1b2">Média</th>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <?php
                                                                echo $_SESSION['historia2triav1'];
                                                            ?>
                                                        </td>
                                                        <td>
                                                            <?php
                                                                echo $_SESSION['historia2triav2'];
                                                            ?>
                                                        </td>
                                                        <td>
                                                            <?php
                                                                if($_SESSION['historia2triav1']!=NULL){
                                                                    echo $portugues = ($_SESSION['historia2triav1'] + $_SESSION['historia2triav2'])/2;
                                                                }else{
                                                                    echo "&nbsp;";
                                                                }
                                                            ?>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </td>
                                            <td>
                                                <table class="table">
                                                    <tr>
                                                        <th colspan=3 style="color:#00d1b2"><center>3º Trimestre</center></th>
                                                    </tr>
                                                    <tr>
                                                        <th style="color:#00d1b2">Av1</th>
                                                        <th style="color:#00d1b2">Av2</th>
                                                        <th style="color:#00d1b2">Média</th>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <?php
                                                                echo $_SESSION['historia3triav1'];
                                                            ?>
                                                        </td>
                                                        <td>
                                                            <?php
                                                                echo $_SESSION['historia3triav2'];
                                                            ?>
                                                        </td>
                                                        <td>
                                                            <?php
                                                                if($_SESSION['historia3triav1']!=NULL){
                                                                    echo $portugues = ($_SESSION['historia3triav1'] + $_SESSION['historia3triav2'])/2;
                                                                }else{
                                                                    echo "&nbsp;";
                                                                }
                                                            ?>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                    </table>
                                </center>
                            </div>
                        </section>
                    </div>
                    <div class="column">
                        <section class="notification is-link is-medium" style="box-shadow: 5px 10px rgba(0, 0, 0, 0.1)" >
                            <div id="geografia" onmouseenter="entrargeografia()" onmouseout="sairgeografia()">
                                Geografia <img src="../grafico/geografia.png" width="40px" height="40px" style="margin-bottom: -10px; margin-left: 5px">
                            </div>
                            <div id="resgeografia" style="display: none">
                                <center>
                                    <table class="tabelamae">
                                        <tr>
                                            <td>
                                                <table class="table">
                                                    <tr>
                                                        <th colspan=3 style="color:#3273dc"><center>1º Trimestre</center></th>
                                                    </tr>
                                                    <tr>
                                                        <th style="color:#3273dc">Av1</th>
                                                        <th style="color:#3273dc">Av2</th>
                                                        <th style="color:#3273dc">Média</th>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <?php
                                                                echo $_SESSION['geografia1triav1'];
                                                            ?>
                                                        </td>
                                                        <td>
                                                            <?php
                                                                echo $_SESSION['geografia1triav2'];
                                                            ?>
                                                        </td>
                                                        <td>
                                                            <?php
                                                                if($_SESSION['geografia1triav1']!=NULL){
                                                                    echo $portugues = ($_SESSION['geografia1triav1'] + $_SESSION['geografia1triav2'])/2;
                                                                }else{
                                                                    echo "&nbsp;";
                                                                }
                                                            ?>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </td>
                                            <td>
                                                <table class="table">
                                                    <tr>
                                                        <th colspan=3 style="color:#3273dc"><center>2º Trimestre</center></th>
                                                    </tr>
                                                    <tr>
                                                        <th style="color:#3273dc">Av1</th>
                                                        <th style="color:#3273dc">Av2</th>
                                                        <th style="color:#3273dc">Média</th>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <?php
                                                                echo $_SESSION['geografia2triav1'];
                                                            ?>
                                                        </td>
                                                        <td>
                                                            <?php
                                                                echo $_SESSION['geografia2triav2'];
                                                            ?>
                                                        </td>
                                                        <td>
                                                            <?php
                                                                if($_SESSION['geografia2triav1']!=NULL){
                                                                    echo $portugues = ($_SESSION['geografia2triav1'] + $_SESSION['geografia2triav2'])/2;
                                                                }else{
                                                                    echo "&nbsp;";
                                                                }
                                                            ?>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </td>
                                            <td>
                                                <table class="table">
                                                    <tr>
                                                        <th colspan=3 style="color:#3273dc"><center>3º Trimestre</center></th>
                                                    </tr>
                                                    <tr>
                                                        <th style="color:#3273dc">Av1</th>
                                                        <th style="color:#3273dc">Av2</th>
                                                        <th style="color:#3273dc">Média</th>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <?php
                                                                echo $_SESSION['geografia3triav1'];
                                                            ?>
                                                        </td>
                                                        <td>
                                                            <?php
                                                                echo $_SESSION['geografia3triav2'];
                                                            ?>
                                                        </td>
                                                        <td>
                                                            <?php
                                                                if($_SESSION['geografia3triav1']!=NULL){
                                                                    echo $portugues = ($_SESSION['geografia3triav1'] + $_SESSION['geografia3triav2'])/2;
                                                                }else{
                                                                    echo "&nbsp;";
                                                                }
                                                            ?>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                    </table>
                                </center>
                            </div>
                        </section>
                    </div>
                </div>

                <div class="columns" style="margin-left: 20px; margin-right: 20px">
                    <div class="column">
                        <section class="notification is-warning is-medium" style="box-shadow: 5px 10px rgba(0, 0, 0, 0.1); background-color: #EBFF7A" >
                            <div id="fisica" onmouseenter="entrarfisica()" onmouseout="sairfisica()">
                                Fisica <img src="../grafico/fisica.png" width="40px" height="40px" style="margin-bottom: -10px; margin-left: 5px">
                            </div>
                            <div id="resfisica" style="display: none">
                                <center>
                                    <table class="tabelamae">
                                        <tr>
                                            <td>
                                                <table class="table">
                                                    <tr>
                                                        <th colspan=3 style="color:grey"><center>1º Trimestre</center></th>
                                                    </tr>
                                                    <tr>
                                                        <th style="color:grey">Av1</th>
                                                        <th style="color:grey">Av2</th>
                                                        <th style="color:grey">Média</th>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <?php
                                                                echo $_SESSION['fisica1triav1'];
                                                            ?>
                                                        </td>
                                                        <td>
                                                            <?php
                                                                echo $_SESSION['fisica1triav2'];
                                                            ?>
                                                        </td>
                                                        <td>
                                                            <?php
                                                                if($_SESSION['fisica1triav1']!=NULL){
                                                                    echo $portugues = ($_SESSION['fisica1triav1'] + $_SESSION['fisica1triav2'])/2;
                                                                }else{
                                                                    echo "&nbsp;";
                                                                }
                                                            ?>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </td>
                                            <td>
                                                <table class="table">
                                                    <tr>
                                                        <th colspan=3 style="color:grey"><center>2º Trimestre</center></th>
                                                    </tr>
                                                    <tr>
                                                        <th style="color:grey">Av1</th>
                                                        <th style="color:grey">Av2</th>
                                                        <th style="color:grey">Média</th>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <?php
                                                                echo $_SESSION['fisica2triav1'];
                                                            ?>
                                                        </td>
                                                        <td>
                                                            <?php
                                                                echo $_SESSION['fisica2triav2'];
                                                            ?>
                                                        </td>
                                                        <td>
                                                            <?php
                                                                if($_SESSION['fisica2triav1']!=NULL){
                                                                    echo $portugues = ($_SESSION['fisica2triav1'] + $_SESSION['fisica2triav2'])/2;
                                                                }else{
                                                                    echo "&nbsp;";
                                                                }
                                                            ?>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </td>
                                            <td>
                                                <table class="table">
                                                    <tr>
                                                        <th colspan=3 style="color:grey"><center>3º Trimestre</center></th>
                                                    </tr>
                                                    <tr>
                                                        <th style="color:grey">Av1</th>
                                                        <th style="color:grey">Av2</th>
                                                        <th style="color:grey">Média</th>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <?php
                                                                echo $_SESSION['fisica3triav1'];
                                                            ?>
                                                        </td>
                                                        <td>
                                                            <?php
                                                                echo $_SESSION['fisica3triav2'];
                                                            ?>
                                                        </td>
                                                        <td>
                                                            <?php
                                                                if($_SESSION['fisica3triav1']!=NULL){
                                                                    echo $portugues = ($_SESSION['fisica3triav1'] + $_SESSION['fisica3triav2'])/2;
                                                                }else{
                                                                    echo "&nbsp;";
                                                                }
                                                            ?>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                    </table>
                                </center>
                            </div>
                        </section>
                    </div>
                    <div class="column">
                        <section class="notification is-link is-medium" style="box-shadow: 5px 10px rgba(0, 0, 0, 0.1)" >
                            <div id="quimica" onmouseenter="entrarquimica()" onmouseout="sairquimica()">
                                Química <img src="../grafico/quimica.png" width="40px" height="40px" style="margin-bottom: -10px; margin-left: 5px">
                            </div>
                            <div id="resquimica" style="display: none">
                                <center>
                                    <table class="tabelamae">
                                        <tr>
                                            <td>
                                                <table class="table">
                                                    <tr>
                                                        <th colspan=3 style="color:#3273dc"><center>1º Trimestre</center></th>
                                                    </tr>
                                                    <tr>
                                                        <th style="color:#3273dc">Av1</th>
                                                        <th style="color:#3273dc">Av2</th>
                                                        <th style="color:#3273dc">Média</th>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <?php
                                                                echo $_SESSION['quimica1triav1'];
                                                            ?>
                                                        </td>
                                                        <td>
                                                            <?php
                                                                echo $_SESSION['quimica1triav2'];
                                                            ?>
                                                        </td>
                                                        <td>
                                                            <?php
                                                                if($_SESSION['quimica1triav1']!=NULL){
                                                                    echo $portugues = ($_SESSION['quimica1triav1'] + $_SESSION['quimica1triav2'])/2;
                                                                }else{
                                                                    echo "&nbsp;";
                                                                }
                                                            ?>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </td>
                                            <td>
                                                <table class="table">
                                                    <tr>
                                                        <th colspan=3 style="color:#3273dc"><center>2º Trimestre</center></th>
                                                    </tr>
                                                    <tr>
                                                        <th style="color:#3273dc">Av1</th>
                                                        <th style="color:#3273dc">Av2</th>
                                                        <th style="color:#3273dc">Média</th>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <?php
                                                                echo $_SESSION['quimica2triav1'];
                                                            ?>
                                                        </td>
                                                        <td>
                                                            <?php
                                                                echo $_SESSION['quimica2triav2'];
                                                            ?>
                                                        </td>
                                                        <td>
                                                            <?php
                                                                if($_SESSION['quimica2triav1']!=NULL){
                                                                    echo $portugues = ($_SESSION['quimica2triav1'] + $_SESSION['quimica2triav2'])/2;
                                                                }else{
                                                                    echo "&nbsp;";
                                                                }
                                                            ?>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </td>
                                            <td>
                                                <table class="table">
                                                    <tr>
                                                        <th colspan=3 style="color:#3273dc"><center>3º Trimestre</center></th>
                                                    </tr>
                                                    <tr>
                                                        <th style="color:#3273dc">Av1</th>
                                                        <th style="color:#3273dc">Av2</th>
                                                        <th style="color:#3273dc">Média</th>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <?php
                                                                echo $_SESSION['quimica3triav1'];
                                                            ?>
                                                        </td>
                                                        <td>
                                                            <?php
                                                                echo $_SESSION['quimica3triav2'];
                                                            ?>
                                                        </td>
                                                        <td>
                                                            <?php
                                                                if($_SESSION['quimica3triav1']!=NULL){
                                                                    echo $portugues = ($_SESSION['quimica3triav1'] + $_SESSION['quimica3triav2'])/2;
                                                                }else{
                                                                    echo "&nbsp;";
                                                                }
                                                            ?>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                    </table>
                                </center>
                            </div>
                        </section>
                    </div>
                    <div class="column">
                        <section class="notification is-link is-medium" style="box-shadow: 5px 10px rgba(0, 0, 0, 0.1)" >
                            <div id="biologia" onmouseenter="entrarbiologia()" onmouseout="sairbiologia()">
                                Biologia <img src="../grafico/biologia.png" width="40px" height="40px" style="margin-bottom: -10px; margin-left: 5px">
                            </div>
                            <div id="resbiologia" style="display: none">
                                <center>
                                    <table class="tabelamae">
                                        <tr>
                                            <td>
                                                <table class="table">
                                                    <tr>
                                                        <th colspan=3 style="color:#3273dc"><center>1º Trimestre</center></th>
                                                    </tr>
                                                    <tr>
                                                        <th style="color:#3273dc">Av1</th>
                                                        <th style="color:#3273dc">Av2</th>
                                                        <th style="color:#3273dc">Média</th>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <?php
                                                                echo $_SESSION['biologia1triav1'];
                                                            ?>
                                                        </td>
                                                        <td>
                                                            <?php
                                                                echo $_SESSION['biologia1triav2'];
                                                            ?>
                                                        </td>
                                                        <td>
                                                            <?php
                                                                if($_SESSION['biologia1triav1']!=NULL){
                                                                    echo $portugues = ($_SESSION['biologia1triav1'] + $_SESSION['biologia1triav2'])/2;
                                                                }else{
                                                                    echo "&nbsp;";
                                                                }
                                                            ?>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </td>
                                            <td>
                                                <table class="table">
                                                    <tr>
                                                        <th colspan=3 style="color:#3273dc"><center>2º Trimestre</center></th>
                                                    </tr>
                                                    <tr>
                                                        <th style="color:#3273dc">Av1</th>
                                                        <th style="color:#3273dc">Av2</th>
                                                        <th style="color:#3273dc">Média</th>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <?php
                                                                echo $_SESSION['biologia2triav1'];
                                                            ?>
                                                        </td>
                                                        <td>
                                                            <?php
                                                                echo $_SESSION['biologia2triav2'];
                                                            ?>
                                                        </td>
                                                        <td>
                                                            <?php
                                                                if($_SESSION['biologia2triav1']!=NULL){
                                                                    echo $portugues = ($_SESSION['biologia2triav1'] + $_SESSION['biologia2triav2'])/2;
                                                                }else{
                                                                    echo "&nbsp;";
                                                                }
                                                            ?>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </td>
                                            <td>
                                                <table class="table">
                                                    <tr>
                                                        <th colspan=3 style="color:#3273dc"><center>3º Trimestre</center></th>
                                                    </tr>
                                                    <tr>
                                                        <th style="color:#3273dc">Av1</th>
                                                        <th style="color:#3273dc">Av2</th>
                                                        <th style="color:#3273dc">Média</th>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <?php
                                                                echo $_SESSION['biologia3triav1'];
                                                            ?>
                                                        </td>
                                                        <td>
                                                            <?php
                                                                echo $_SESSION['biologia3triav2'];
                                                            ?>
                                                        </td>
                                                        <td>
                                                            <?php
                                                                if($_SESSION['biologia3triav1']!=NULL){
                                                                    echo $portugues = ($_SESSION['biologia3triav1'] + $_SESSION['biologia3triav2'])/2;
                                                                }else{
                                                                    echo "&nbsp;";
                                                                }
                                                            ?>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                    </table>
                                </center>
                            </div>
                        </section>
                    </div>
                    <div class="column">
                        <section class="notification is-link is-medium" style="box-shadow: 5px 10px rgba(0, 0, 0, 0.1); background-color: #00d1b2" >
                            <div id="redacao" onmouseenter="entrarredacao()" onmouseout="sairredacao()">
                                Redação <img src="../grafico/redacao.png" width="40px" height="40px" style="margin-bottom: -10px; margin-left: 5px">
                            </div>
                            <div id="resredacao" style="display: none">
                                <center>
                                    <table class="tabelamae">
                                        <tr>
                                            <td>
                                                <table class="table">
                                                    <tr>
                                                        <th colspan=3 style="color:#00d1b2"><center>1º Trimestre</center></th>
                                                    </tr>
                                                    <tr>
                                                        <th style="color:#00d1b2">Av1</th>
                                                        <th style="color:#00d1b2">Av2</th>
                                                        <th style="color:#00d1b2">Média</th>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <?php
                                                                echo $_SESSION['redacao1triav1'];
                                                            ?>
                                                        </td>
                                                        <td>
                                                            <?php
                                                                echo $_SESSION['redacao1triav2'];
                                                            ?>
                                                        </td>
                                                        <td>
                                                            <?php
                                                                if($_SESSION['redacao1triav1']!=NULL){
                                                                    echo $portugues = ($_SESSION['redacao1triav1'] + $_SESSION['redacao1triav2'])/2;
                                                                }else{
                                                                    echo "&nbsp;";
                                                                }
                                                            ?>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </td>
                                            <td>
                                                <table class="table">
                                                    <tr>
                                                        <th colspan=3 style="color:#00d1b2"><center>2º Trimestre</center></th>
                                                    </tr>
                                                    <tr>
                                                        <th style="color:#00d1b2">Av1</th>
                                                        <th style="color:#00d1b2">Av2</th>
                                                        <th style="color:#00d1b2">Média</th>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <?php
                                                                echo $_SESSION['redacao2triav1'];
                                                            ?>
                                                        </td>
                                                        <td>
                                                            <?php
                                                                echo $_SESSION['redacao2triav2'];
                                                            ?>
                                                        </td>
                                                        <td>
                                                            <?php
                                                                if($_SESSION['redacao2triav1']!=NULL){
                                                                    echo $portugues = ($_SESSION['redacao2triav1'] + $_SESSION['redacao2triav2'])/2;
                                                                }else{
                                                                    echo "&nbsp;";
                                                                }
                                                            ?>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </td>
                                            <td>
                                                <table class="table">
                                                    <tr>
                                                        <th colspan=3 style="color:#00d1b2"><center>3º Trimestre</center></th>
                                                    </tr>
                                                    <tr>
                                                        <th style="color:#00d1b2">Av1</th>
                                                        <th style="color:#00d1b2">Av2</th>
                                                        <th style="color:#00d1b2">Média</th>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <?php
                                                                echo $_SESSION['redacao3triav1'];
                                                            ?>
                                                        </td>
                                                        <td>
                                                            <?php
                                                                echo $_SESSION['redacao3triav2'];
                                                            ?>
                                                        </td>
                                                        <td>
                                                            <?php
                                                                if($_SESSION['redacao3triav1']!=NULL){
                                                                    echo $portugues = ($_SESSION['redacao3triav1'] + $_SESSION['redacao3triav2'])/2;
                                                                }else{
                                                                    echo "&nbsp;";
                                                                }
                                                            ?>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                    </table>
                                </center>
                            </div>
                        </section>
                    </div>
                </div>

                <div class="columns" style="margin-left: 20px; margin-right: 20px">
                    <div class="column">
                        <section class="notification is-link is-medium" style="box-shadow: 5px 10px rgba(0, 0, 0, 0.1); background-color: #FF6F61" >
                            <div id="literatura" onmouseenter="entrarliteratura()" onmouseout="sairliteratura()">
                                Literatura <img src="../grafico/literatura.png" width="40px" height="40px" style="margin-bottom: -10px; margin-left: 5px">
                            </div>
                            <div id="resliteratura" style="display: none">
                                <center>
                                    <table class="tabelamae">
                                        <tr>
                                            <td>
                                                <table class="table">
                                                    <tr>
                                                        <th colspan=3 style="color:#ff6f61"><center>1º Trimestre</center></th>
                                                    </tr>
                                                    <tr>
                                                        <th style="color:#ff6f61">Av1</th>
                                                        <th style="color:#ff6f61">Av2</th>
                                                        <th style="color:#ff6f61">Média</th>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <?php
                                                                echo $_SESSION['literatura1triav1'];
                                                            ?>
                                                        </td>
                                                        <td>
                                                            <?php
                                                                echo $_SESSION['literatura1triav2'];
                                                            ?>
                                                        </td>
                                                        <td>
                                                            <?php
                                                                if($_SESSION['literatura1triav1']!=NULL){
                                                                    echo $portugues = ($_SESSION['literatura1triav1'] + $_SESSION['literatura1triav2'])/2;
                                                                }else{
                                                                    echo "&nbsp;";
                                                                }
                                                            ?>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </td>
                                            <td>
                                                <table class="table">
                                                    <tr>
                                                        <th colspan=3 style="color:#ff6f61"><center>2º Trimestre</center></th>
                                                    </tr>
                                                    <tr>
                                                        <th style="color:#ff6f61">Av1</th>
                                                        <th style="color:#ff6f61">Av2</th>
                                                        <th style="color:#ff6f61">Média</th>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <?php
                                                                echo $_SESSION['literatura2triav1'];
                                                            ?>
                                                        </td>
                                                        <td>
                                                            <?php
                                                                echo $_SESSION['literatura2triav2'];
                                                            ?>
                                                        </td>
                                                        <td>
                                                            <?php
                                                                if($_SESSION['literatura2triav1']!=NULL){
                                                                    echo $portugues = ($_SESSION['literatura2triav1'] + $_SESSION['literatura2triav2'])/2;
                                                                }else{
                                                                    echo "&nbsp;";
                                                                }
                                                            ?>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </td>
                                            <td>
                                                <table class="table">
                                                    <tr>
                                                        <th colspan=3 style="color:#ff6f61"><center>3º Trimestre</center></th>
                                                    </tr>
                                                    <tr>
                                                        <th style="color:#ff6f61">Av1</th>
                                                        <th style="color:#ff6f61">Av2</th>
                                                        <th style="color:#ff6f61">Média</th>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <?php
                                                                echo $_SESSION['literatura3triav1'];
                                                            ?>
                                                        </td>
                                                        <td>
                                                            <?php
                                                                echo $_SESSION['literatura3triav2'];
                                                            ?>
                                                        </td>
                                                        <td>
                                                            <?php
                                                                if($_SESSION['literatura3triav1']!=NULL){
                                                                    echo $portugues = ($_SESSION['literatura3triav1'] + $_SESSION['literatura3triav2'])/2;
                                                                }else{
                                                                    echo "&nbsp;";
                                                                }
                                                            ?>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                    </table>
                                </center>
                            </div>
                        </section>
                    </div>
                    <div class="column">
                        <section class="notification is-link is-medium" style="box-shadow: 5px 10px rgba(0, 0, 0, 0.1); background-color: #00d1b2" >
                            <div id="ingles" onmouseenter="entraringles()" onmouseout="sairingles()">
                                Inglês <img src="../grafico/ingles.png" width="40px" height="40px" style="margin-bottom: -10px; margin-left: 5px">
                            </div>
                            <div id="resingles" style="display: none">
                                <center>
                                    <table class="tabelamae">
                                        <tr>
                                            <td>
                                                <table class="table">
                                                    <tr>
                                                        <th colspan=3 style="color:#00d1b2"><center>1º Trimestre</center></th>
                                                    </tr>
                                                    <tr>
                                                        <th style="color:#00d1b2">Av1</th>
                                                        <th style="color:#00d1b2">Av2</th>
                                                        <th style="color:#00d1b2">Média</th>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <?php
                                                                echo $_SESSION['ingles1triav1'];
                                                            ?>
                                                        </td>
                                                        <td>
                                                            <?php
                                                                echo $_SESSION['ingles1triav2'];
                                                            ?>
                                                        </td>
                                                        <td>
                                                            <?php
                                                                if($_SESSION['ingles1triav1']!=NULL){
                                                                    echo $portugues = ($_SESSION['ingles1triav1'] + $_SESSION['ingles1triav2'])/2;
                                                                }else{
                                                                    echo "&nbsp;";
                                                                }
                                                            ?>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </td>
                                            <td>
                                                <table class="table">
                                                    <tr>
                                                        <th colspan=3 style="color:#00d1b2"><center>2º Trimestre</center></th>
                                                    </tr>
                                                    <tr>
                                                        <th style="color:#00d1b2">Av1</th>
                                                        <th style="color:#00d1b2">Av2</th>
                                                        <th style="color:#00d1b2">Média</th>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <?php
                                                                echo $_SESSION['ingles2triav1'];
                                                            ?>
                                                        </td>
                                                        <td>
                                                            <?php
                                                                echo $_SESSION['ingles2triav2'];
                                                            ?>
                                                        </td>
                                                        <td>
                                                            <?php
                                                                if($_SESSION['ingles1triav1']!=NULL){
                                                                    echo $portugues = ($_SESSION['ingles2triav1'] + $_SESSION['ingles2triav2'])/2;
                                                                }else{
                                                                    echo "&nbsp;";
                                                                }
                                                            ?>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </td>
                                            <td>
                                                <table class="table">
                                                    <tr>
                                                        <th colspan=3 style="color:#00d1b2"><center>3º Trimestre</center></th>
                                                    </tr>
                                                    <tr>
                                                        <th style="color:#00d1b2">Av1</th>
                                                        <th style="color:#00d1b2">Av2</th>
                                                        <th style="color:#00d1b2">Média</th>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <?php
                                                                echo $_SESSION['ingles3triav1'];
                                                            ?>
                                                        </td>
                                                        <td>
                                                            <?php
                                                                echo $_SESSION['ingles3triav2'];
                                                            ?>
                                                        </td>
                                                        <td>
                                                            <?php
                                                                if($_SESSION['ingles3triav1']!=NULL){
                                                                    echo $portugues = ($_SESSION['ingles3triav1'] + $_SESSION['ingles3triav2'])/2;
                                                                }else{
                                                                    echo "&nbsp;";
                                                                }
                                                            ?>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                    </table>
                                </center>
                            </div>
                        </section>
                    </div>
                    <div class="column">
                        <section class="notification is-link is-medium" style="box-shadow: 5px 10px rgba(0, 0, 0, 0.1);background-color: #FF6F61" >
                            <div id="filosofia" onmouseenter="entrarfilosofia()" onmouseout="sairfilosofia()">
                                Filosofia <img src="../grafico/filosofia.png" width="40px" height="40px" style="margin-bottom: -10px; margin-left: 5px">
                            </div>
                            <div id="resfilosofia" style="display: none">
                                <center>
                                    <table class="tabelamae">
                                        <tr>
                                            <td>
                                                <table class="table">
                                                    <tr>
                                                        <th colspan=3 style="color:#ff6f61"><center>1º Trimestre</center></th>
                                                    </tr>
                                                    <tr>
                                                        <th style="color:#ff6f61">Av1</th>
                                                        <th style="color:#ff6f61">Av2</th>
                                                        <th style="color:#ff6f61">Média</th>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <?php
                                                                echo $_SESSION['filosofia1triav1'];
                                                            ?>
                                                        </td>
                                                        <td>
                                                            <?php
                                                                echo $_SESSION['filosofia1triav2'];
                                                            ?>
                                                        </td>
                                                        <td>
                                                            <?php
                                                                if($_SESSION['filosofia1triav1']!=NULL){
                                                                    echo $portugues = ($_SESSION['filosofia1triav1'] + $_SESSION['filosofia1triav2'])/2;
                                                                }else{
                                                                    echo "&nbsp;";
                                                                }
                                                            ?>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </td>
                                            <td>
                                                <table class="table">
                                                    <tr>
                                                        <th colspan=3 style="color:#ff6f61"><center>2º Trimestre</center></th>
                                                    </tr>
                                                    <tr>
                                                        <th style="color:#ff6f61">Av1</th>
                                                        <th style="color:#ff6f61">Av2</th>
                                                        <th style="color:#ff6f61">Média</th>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <?php
                                                                echo $_SESSION['filosofia2triav1'];
                                                            ?>
                                                        </td>
                                                        <td>
                                                            <?php
                                                                echo $_SESSION['filosofia2triav2'];
                                                            ?>
                                                        </td>
                                                        <td>
                                                            <?php
                                                                if($_SESSION['filosofia2triav1']!=NULL){
                                                                    echo $portugues = ($_SESSION['filosofia2triav1'] + $_SESSION['filosofia2triav2'])/2;
                                                                }else{
                                                                    echo "&nbsp;";
                                                                }
                                                            ?>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </td>
                                            <td>
                                                <table class="table">
                                                    <tr>
                                                        <th colspan=3 style="color:#ff6f61"><center>3º Trimestre</center></th>
                                                    </tr>
                                                    <tr>
                                                        <th style="color:#ff6f61">Av1</th>
                                                        <th style="color:#ff6f61">Av2</th>
                                                        <th style="color:#ff6f61">Média</th>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <?php
                                                                echo $_SESSION['filosofia3triav1'];
                                                            ?>
                                                        </td>
                                                        <td>
                                                            <?php
                                                                echo $_SESSION['filosofia3triav2'];
                                                            ?>
                                                        </td>
                                                        <td>
                                                            <?php
                                                                if($_SESSION['filosofia3triav1']!=NULL){
                                                                    echo $portugues = ($_SESSION['filosofia3triav1'] + $_SESSION['filosofia3triav2'])/2;
                                                                }else{
                                                                    echo "&nbsp;";
                                                                }
                                                            ?>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                    </table>
                                </center>
                            </div>
                        </section>
                    </div>
                    <div class="column">
                        <section class="notification is-warning is-medium" style="box-shadow: 5px 10px rgba(0, 0, 0, 0.1); background-color: #EBFF7A" >
                            <div id="sociologia" onmouseenter="entrarsociologia()" onmouseout="sairsociologia()">
                                Sociologia <img src="../grafico/sociologia.png" width="40px" height="40px" style="margin-bottom: -10px; margin-left: 5px">
                            </div>
                            <div id="ressociologia" style="display: none">
                                <center>
                                    <table class="tabelamae">
                                        <tr>
                                            <td>
                                                <table class="table">
                                                    <tr>
                                                        <th colspan=3 style="color:grey"><center>1º Trimestre</center></th>
                                                    </tr>
                                                    <tr>
                                                        <th style="color:grey">Av1</th>
                                                        <th style="color:grey">Av2</th>
                                                        <th style="color:grey">Média</th>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <?php
                                                                echo $_SESSION['sociologia1triav1'];
                                                            ?>
                                                        </td>
                                                        <td>
                                                            <?php
                                                                echo $_SESSION['sociologia1triav2'];
                                                            ?>
                                                        </td>
                                                        <td>
                                                            <?php
                                                                if($_SESSION['sociologia1triav1']!=NULL){
                                                                    echo $portugues = ($_SESSION['sociologia1triav1'] + $_SESSION['sociologia1triav2'])/2;
                                                                }else{
                                                                    echo "&nbsp;";
                                                                }
                                                            ?>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </td>
                                            <td>
                                                <table class="table">
                                                    <tr>
                                                        <th colspan=3 style="color:grey"><center>2º Trimestre</center></th>
                                                    </tr>
                                                    <tr>
                                                        <th style="color:grey">Av1</th>
                                                        <th style="color:grey">Av2</th>
                                                        <th style="color:grey">Média</th>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <?php
                                                                echo $_SESSION['sociologia2triav1'];
                                                            ?>
                                                        </td>
                                                        <td>
                                                            <?php
                                                                echo $_SESSION['sociologia2triav2'];
                                                            ?>
                                                        </td>
                                                        <td>
                                                            <?php
                                                                if($_SESSION['sociologia2triav1']!=NULL){
                                                                    echo $portugues = ($_SESSION['sociologia2triav1'] + $_SESSION['sociologia2triav2'])/2;
                                                                }else{
                                                                    echo "&nbsp;";
                                                                }
                                                            ?>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </td>
                                            <td>
                                                <table class="table">
                                                    <tr>
                                                        <th colspan=3 style="color:grey"><center>3º Trimestre</center></th>
                                                    </tr>
                                                    <tr>
                                                        <th style="color:grey">Av1</th>
                                                        <th style="color:grey">Av2</th>
                                                        <th style="color:grey">Média</th>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <?php
                                                                echo $_SESSION['sociologia3triav1'];
                                                            ?>
                                                        </td>
                                                        <td>
                                                            <?php
                                                                echo $_SESSION['sociologia3triav2'];
                                                            ?>
                                                        </td>
                                                        <td>
                                                            <?php
                                                                if($_SESSION['sociologia3triav1']!=NULL){
                                                                    echo $portugues = ($_SESSION['sociologia3triav1'] + $_SESSION['sociologia3triav2'])/2;
                                                                }else{
                                                                    echo "&nbsp;";
                                                                }
                                                            ?>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                    </table>
                                </center>
                            </div>
                        </section>
                    </div>
                </div>
                </div>

                <script>
                    var portugues1tri = Number("<?php echo $portugues1tri;?>")
                    var portugues2tri = Number("<?php echo $portugues2tri;?>")
                    var portugues3tri = Number("<?php echo $portugues3tri;?>")
                    var portugues = (portugues1tri+portugues2tri+portugues3tri)/3
                </script>                                                    

                <div class="card is-large" style="margin-bottom: 80px; padding-bottom: 20px; padding-top: 20px">
                <nav class="level">
                    <div class="level-item">
                        <article class="message" style="box-shadow: 5px 10px rgba(0, 0, 0, 0.1)">
                            <div id="port" class="message-header" style="background-color:#00d1b2; opacity: 0.2;">
                                <p>
                                <center><img src="../grafico/portugues.png" width="40px" height="40px" style="margin-bottom: -10px; margin-left: 5px"></center>
                                </p>
                            </div>
                            <div class="message-body">
                                <div id="portreprov">
                                    <font color="lightgrey">Reprovado</font>
                                </div>
                                <div id="portaprov" style="display: none">
                                    Aprovado
                                </div>
                            </div>  
                        </article>
                    </div>
                    <script>
                        if(portugues >= 7){
                            port.style="background-color:#00d1b2; opacity: 100%;"
                            portreprov.style="display: none"
                            portaprov.style="display: inline"
                        }
                    </script>

                    <div class="level-item">
                        <article class="message" style="box-shadow: 5px 10px rgba(0, 0, 0, 0.1)">
                            <div class="message-header" style="background-color:#FF6F61; opacity: 0.2;">
                                <p>
                                <center><img src="../grafico/matematica.png" width="40px" height="40px" style="margin-bottom: -10px; margin-left: 5px"></center>
                                </p>
                            </div>
                            <div class="message-body">
                            <font color="lightgrey">Reprovado</font>
                            </div>
                        </article>
                    </div>
                    <div class="level-item">
                        <article class="message" style="box-shadow: 5px 10px rgba(0, 0, 0, 0.1)">
                            <div class="message-header" style="background-color:#00d1b2; opacity: 0.2;">
                                <p>
                                <center><img src="../grafico/historia.png" width="40px" height="40px" style="margin-bottom: -10px; margin-left: 5px"></center>
                                </p>
                            </div>
                            <div class="message-body">
                            <font color="lightgrey">Reprovado</font>
                            </div>
                        </article>
                    </div>
                    <div class="level-item">
                        <article class="message" style="box-shadow: 5px 10px rgba(0, 0, 0, 0.1)">
                            <div class="message-header" style="background-color:#3273dc; opacity: 0.2;">
                                <p>
                                <center><img src="../grafico/geografia.png" width="40px" height="40px" style="margin-bottom: -10px; margin-left: 5px"></center>
                                </p>
                            </div>
                            <div class="message-body">
                            <font color="lightgrey">Reprovado</font>
                            </div>
                        </article>
                    </div>
                    <div class="level-item">
                        <article class="message" style="box-shadow: 5px 10px rgba(0, 0, 0, 0.1)">
                            <div class="message-header" style="background-color:#EBFF7A; opacity: 0.2;">
                                <p>
                                <center><img src="../grafico/fisica.png" width="40px" height="40px" style="margin-bottom: -10px; margin-left: 5px"></center>
                                </p>
                            </div>
                            <div class="message-body">
                            <font color="lightgrey">Reprovado</font>
                            </div>
                        </article>
                    </div>
                    <div class="level-item">
                        <article class="message" style="box-shadow: 5px 10px rgba(0, 0, 0, 0.1)">
                            <div class="message-header" style="background-color:#3273dc; opacity: 0.2;">
                                <p>
                                <center><img src="../grafico/quimica.png" width="40px" height="40px" style="margin-bottom: -10px; margin-left: 5px"></center>
                                </p>
                            </div>
                            <div class="message-body">
                            <font color="lightgrey">Reprovado</font>
                            </div>
                        </article>
                    </div>
                </nav>
                <nav class="level">
                <div class="level-item">
                        <article class="message" style="box-shadow: 5px 10px rgba(0, 0, 0, 0.1)">
                            <div class="message-header" style="background-color:#3273dc; opacity: 0.2;">
                                <p>
                                <center><img src="../grafico/biologia.png" width="40px" height="40px" style="margin-bottom: -10px; margin-left: 5px"></center>
                                </p>
                            </div>
                            <div class="message-body">
                            <font color="lightgrey">Reprovado</font>
                            </div>
                        </article>
                    </div>
                    <div class="level-item">
                        <article class="message" style="box-shadow: 5px 10px rgba(0, 0, 0, 0.1)">
                            <div class="message-header" style="background-color:#00d1b2; opacity: 0.2;">
                                <p>
                                <center><img src="../grafico/redacao.png" width="40px" height="40px" style="margin-bottom: -10px; margin-left: 5px"></center>
                                </p>
                            </div>
                            <div class="message-body">
                            <font color="lightgrey">Reprovado</font>
                            </div>
                        </article>
                    </div>
                    <div class="level-item">
                        <article class="message" style="box-shadow: 5px 10px rgba(0, 0, 0, 0.1)">
                            <div class="message-header" style="background-color:#FF6F61; opacity: 0.2;">
                                <p>
                                <center><img src="../grafico/literatura.png" width="40px" height="40px" style="margin-bottom: -10px; margin-left: 5px"></center>
                                </p>
                            </div>
                            <div class="message-body">
                            <font color="lightgrey">Reprovado</font>
                            </div>
                        </article>
                    </div>
                    <div class="level-item">
                        <article class="message" style="box-shadow: 5px 10px rgba(0, 0, 0, 0.1)">
                            <div class="message-header" style="background-color:#00d1b2; opacity: 0.2;">
                                <p>
                                <center><img src="../grafico/ingles.png" width="40px" height="40px" style="margin-bottom: -10px; margin-left: 5px"></center>
                                </p>
                            </div>
                            <div class="message-body">
                            <font color="lightgrey">Reprovado</font>
                            </div>
                        </article>
                    </div>
                    <div class="level-item">
                        <article class="message" style="box-shadow: 5px 10px rgba(0, 0, 0, 0.2)">
                            <div class="message-header" style="background-color:#FF6F61; opacity: 0.2;">
                                <p>
                                <center><img src="../grafico/filosofia.png" width="40px" height="40px" style="margin-bottom: -10px; margin-left: 5px"></center>
                                </p>
                            </div>
                            <div class="message-body">
                            <font color="lightgrey">Reprovado</font>
                            </div>
                        </article>
                    </div>
                    <div class="level-item">
                        <article class="message" style="box-shadow: 5px 10px rgba(0, 0, 0, 0.1)">
                            <div class="message-header" style="background-color:#EBFF7A; opacity: 0.2;">
                                <p>
                                <center><img src="../grafico/sociologia.png" width="40px" height="40px" style="margin-bottom: -10px; margin-left: 5px"></center>
                                </p>
                            </div>
                            <div class="message-body">
                            <font color="lightgrey">Reprovado</font>
                            </div>
                        </article>
                    </div>
                </nav>
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

        <li><p align="center"><a href="boletim.php" >Boletim</a></p></li>
        <li><p align="center"><a href="ocorrencias.php" >Ocorrências</a></p></li>
        <li><p align="center"><a href="info.php" class="information"><img src="../grafico/information.png" height=20px width=20px>&nbsp;&nbsp;&nbsp;Informações</a></p></li>
        <li><p align="center"><a href="" class="danger"><img src="../grafico/danger.png" height="20px" width="20px">&nbsp;&nbsp;&nbsp;Comunicar Erro</a></p></li>
        <li><p align="center"><a href="../logout.php" class="exit"><img src="../grafico/exit.png" height="20px" width="20px">&nbsp;&nbsp;&nbsp;Encerrar Sessão</a></p></li>
    </ul>
    </nav>

</body>
</script>

</html>