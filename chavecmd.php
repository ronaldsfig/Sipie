<?php
session_start();
include ('conexao.php');

if ($_SESSION['captcha'] != $_POST['captcha']) {
	$_SESSION['captchaerrado'] = true;
	header('Location: chave.php');
	exit();
}

$chave = mysqli_real_escape_string($conexao, $_POST['chave']);

$querychave = "select * from chave where chave = '$chave';";

$resultchave = mysqli_query($conexao, $querychave);

$rowchave = mysqli_num_rows($resultchave);

if ($rowchave == 1) {
	$_SESSION['chavecorreta'] = true;
	$_SESSION['chave'] = $chave;
	header('Location: cadastrar.php');
    exit();
}else{
		$_SESSION['erro'] = true;
		header('Location: chave.php');
}


