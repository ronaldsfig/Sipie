<?php
include('conexao.php');

//if (!$_SESSION['chavecorreta']) {

	$chave = mysqli_real_escape_string($conexao, $_POST['chave']);

//}else{

	//$chave = mysqli_real_escape_string($conexao, $_POST['chave']);

//};