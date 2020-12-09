<?php
session_start();
include('conexao.php');

if(empty($_POST['usuario']) || empty($_POST['senha'])) {
    header('Location: index.php');
    exit();
}

$usuario = mysqli_real_escape_string($conexao, $_POST['usuario']);
$senha = mysqli_real_escape_string($conexao, $_POST['senha']);

$queryaluno = "select * from aluno where usuario = '{$usuario}' and senha = md5('{$senha}');";
$resultaluno = mysqli_query($conexao, $queryaluno);
if (mysqli_num_rows($resultaluno) == 1){
	$perm = 1;
}

$queryprofessor = "select * from professor where usuario = '{$usuario}' and senha = md5('{$senha}');";
$resultaprofessor = mysqli_query($conexao, $queryprofessor);
if (mysqli_num_rows($resultaprofessor) == 1){
	$perm = 2;
}


switch ($perm) {
	case 1:
		$detalhes = "SELECT * FROM aluno WHERE usuario = '$usuario' AND senha = md5('$senha');";
		$detalhescmd = mysqli_query($conexao, $detalhes);

		$usuario_bd = mysqli_fetch_assoc($detalhescmd);
		$_SESSION['aluno'] = $usuario_bd['nome'];
		$_SESSION['turma'] = $usuario_bd['turma'];
		$_SESSION['idaluno'] = $usuario_bd['idaluno'];
		$permfinal = 'aluno';
		header('Location: aluno/boletimcmd.php');
		exit();
		break;

	case 2:
		$detalhes = "select * from professor where usuario = '{$usuario}' and senha = md5('{$senha}');";
		$detalhescmd = mysqli_query($conexao, $detalhes);

		$usuario_bd = mysqli_fetch_assoc($detalhescmd);
		$_SESSION['professor'] = $usuario_bd['nome'];
		$_SESSION['disciplina'] = $usuario_bd['disciplina'];
		$_SESSION['idprofessor'] = $usuario_bd['idprofessor'];
		$_SESSION['instituicaoprofessor'] = $usuario_bd['instituicao'];
		$permfinal = 'professor';
		header('Location: professor/notas.php');
		exit();
		break;

	default:
		$_SESSION['nao_autenticado'] = true;
		header('Location: index.php');
		exit();
	}