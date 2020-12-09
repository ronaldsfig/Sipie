<?php
session_start();
include('conexao.php');

$nome = trim($_SESSION['nome']);
$perm = $_SESSION['perm'];
$instituicao = trim($_SESSION['instituicao']);
$turma = trim($_SESSION['turma']);
$disciplina = trim($_SESSION['disciplina']);
$usuario = mysqli_real_escape_string($conexao, trim($_POST['cadastrousuario']));
$senha = mysqli_real_escape_string($conexao, trim($_POST['cadastrosenha']));
$confirmasenha = mysqli_real_escape_string($conexao, trim($_POST['confirmasenha']));
$email = mysqli_real_escape_string($conexao, trim($_POST['email']));
$data_nascimento = $_SESSION['data_nascimento'];
$genero = $_SESSION['genero'];
$termos = $_REQUEST['termo'];

$chave = $_SESSION['chavenext'];

if (empty($termos)) {
	$_SESSION['termos'] = true;
	$_SESSION['chavecorreta'] = true;
	$_SESSION['chave'] = $chave;
	header('Location: cadastrar.php');
	exit();
}

if ($senha != $confirmasenha) {
	$_SESSION['senhaerrada'] = true;
	$_SESSION['chavecorreta'] = true;
	$_SESSION['chave'] = $chave;
	header('Location: cadastrar.php');
	exit();
}

if ($perm == 0){
	$sql = "select count(*) as total from aluno where usuario = '$usuario'";
	$result = mysqli_query($conexao, $sql);
	$row = mysqli_fetch_assoc($result);

	if ($row['total'] != 0) {
		$_SESSION['usuario_existe'] = true;
		$_SESSION['chavecorreta'] = true;
		$_SESSION['chave'] = $chave;
		header('Location: cadastrar.php');
		exit();
	}

	$sqldela = "select count(*) as total from aluno where senha = md5('{$senha}')";
	$result = mysqli_query($conexao, $sqldela);
	$row = mysqli_fetch_assoc($result);

	if ($row['total'] != 0) {
		$_SESSION['senha_existe'] = true;
		$_SESSION['chavecorreta'] = true;
		$_SESSION['chave'] = $chave;
		header('Location: cadastrar.php');
		exit();
	}

	$sql = "INSERT INTO aluno (nome, instituicao, turma, usuario, senha, email, data_cadastro, data_nascimento, genero) VALUES ('$nome', '$instituicao', '$turma', '$usuario', md5('$senha'), '$email', NOW(), '$data_nascimento', '$genero')";

	$sql2 = "DELETE FROM `chave` WHERE chave = '$chave';";

	if ($conexao->query($sql) === TRUE) {
		$amostraid = "SELECT idaluno FROM aluno WHERE nome = '$nome'";
		$amostraidcmd = mysqli_query($conexao, $amostraid);
		$amostraidcmd2 = mysqli_fetch_assoc($amostraidcmd);
		$id =  $amostraidcmd2['idaluno'];

		mysqli_query($conexao, "INSERT INTO notas1tri (idaluno, av) VALUES ('$id', '1')");
		mysqli_query($conexao, "INSERT INTO notas1tri (idaluno, av) VALUES ('$id', '2')");

		mysqli_query($conexao, "INSERT INTO notas2tri (idaluno, av) VALUES ('$id', '1')");
		mysqli_query($conexao, "INSERT INTO notas2tri (idaluno, av) VALUES ('$id', '2')");

		mysqli_query($conexao, "INSERT INTO notas3tri (idaluno, av) VALUES ('$id', '1')");
		mysqli_query($conexao, "INSERT INTO notas3tri (idaluno, av) VALUES ('$id', '2')");


		$_SESSION['status_cadastro'] = true;
	}

	if ($conexao->query($sql2) === TRUE) {
		$_SESSION['chave_cancelada'] = true;
	}

	$conexao->close();


	header('Location: index.php');
}


if ($perm == 1){
	$sql = "select count(*) as total from professor where usuario = '$usuario'";
	$result = mysqli_query($conexao, $sql);
	$row = mysqli_fetch_assoc($result);

	if ($row['total'] != 0) {
		$_SESSION['usuario_existe'] = true;
		$_SESSION['chavecorreta'] = true;
		$_SESSION['chave'] = $chave;
		header('Location: cadastrar.php');
		exit();
	}

	$sqldela = "select count(*) as total from professor where senha = md5('{$senha}')";
	$result = mysqli_query($conexao, $sqldela);
	$row = mysqli_fetch_assoc($result);

	if ($row['total'] != 0) {
		$_SESSION['senha_existe'] = true;
		$_SESSION['chavecorreta'] = true;
		$_SESSION['chave'] = $chave;
		header('Location: cadastrar.php');
		exit();
	}

	$sql = "INSERT INTO professor (nome, instituicao, usuario, senha, email, data_cadastro, data_nascimento, genero, disciplina) VALUES ('$nome', '$instituicao', '$usuario', md5('$senha'), '$email', NOW(), '$data_nascimento', '$genero', '$disciplina')";

	$sql2 = "DELETE FROM `chave` WHERE chave = '$chave';";

	if ($conexao->query($sql) === TRUE) {

		$pegaid1 = mysqli_query($conexao, "select idprofessor from professor where nome = '$nome'");
		$pegaid2 = mysqli_fetch_assoc($pegaid1);
		$idprofessor = $pegaid2['idprofessor'];

		$lec1 = mysqli_query($conexao, "select turmaprof from chave where chave = '$chave'");
		$lec2 = mysqli_fetch_assoc($lec1);
		$lec3 = $lec2['turmaprof'];
		$ele4 = str_replace("," , "" , $lec3);
		$lec5 = str_split($ele4);
		switch (count($lec5)) {
			case 1:
				mysqli_query($conexao, "insert into leciona (idprofessor, idturma) values ('$idprofessor', '$lec5[0]');");
				break;
			
			case 2:
				mysqli_query($conexao, "insert into leciona (idprofessor, idturma) values ('$idprofessor', '$lec5[0]');");
				mysqli_query($conexao, "insert into leciona (idprofessor, idturma) values ('$idprofessor', '$lec5[1]');");
				break;

			case 3:
				mysqli_query($conexao, "insert into leciona (idprofessor, idturma) values ('$idprofessor', '$lec5[0]');");
				mysqli_query($conexao, "insert into leciona (idprofessor, idturma) values ('$idprofessor', '$lec5[1]');");
				mysqli_query($conexao, "insert into leciona (idprofessor, idturma) values ('$idprofessor', '$lec5[2]');");
				break;
		}

		$_SESSION['status_cadastro'] = true;
	}

	if ($conexao->query($sql2) === TRUE) {
		$_SESSION['chave_cancelada'] = true;
	}

	$conexao->close();


	header('Location: index.php');
}


?>