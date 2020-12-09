<?php
//session_start();
if(!$_SESSION['aluno']){
    header('Location: index.php');
    exit();
}