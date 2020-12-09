<?php
session_start();
include('../conexao.php');
$idprofessor = $_SESSION['idprofessor'];
$querykkk = "SELECT materia.disciplina from professor JOIN materia on materia.iddisciplina = professor.disciplina WHERE idprofessor='$idprofessor'";
$detalhescmdkkk = mysqli_query($conexao, $querykkk);
$usuario_bdkkk = mysqli_fetch_assoc($detalhescmdkkk);


$materiaprofessor = utf8_encode($usuario_bdkkk['disciplina']);
$instituicaoprofessor = $_SESSION['instituicaoprofessor'];

switch ($materiaprofessor) {
    case 'Português':
        $materiaprofessorcmd = 'portugues';
        break;
    case 'Matemática':
        $materiaprofessorcmd = 'matematica';
        break;
    case 'História':
        $materiaprofessorcmd = 'historia';
        break;
    case 'Geografia':
        $materiaprofessorcmd = 'geografia';
        break;
    case 'Física':
        $materiaprofessorcmd = 'fisica';
        break;
    case 'Química':
        $materiaprofessorcmd = 'quimica';
        break;
    case 'Biologia':
        $materiaprofessorcmd = 'biologia';
        break;
    case 'Redação':
        $materiaprofessorcmd = 'redacao';
        break;
    case 'Literatura':
        $materiaprofessorcmd = 'literatura';
        break;
    case 'Inglês':
        $materiaprofessorcmd = 'ingles';
        break;
    case 'Filosofia':
        $materiaprofessorcmd = 'filosofia';
        break;
    case 'Sociologia':
        $materiaprofessorcmd = 'sociologia';
        break;
}

?>