<?php
//session_start();
if(!$_SESSION['professor']){
    header('Location: index.php');
    exit();
}