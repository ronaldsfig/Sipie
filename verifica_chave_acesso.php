<?php
//session_start();
if(!$_SESSION['chavecorreta']){
    header('Location: chave.php');
    exit();
}