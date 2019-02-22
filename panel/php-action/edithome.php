<?php

//Conexão
require_once('db_connect.php');
session_start();


if(isset($_POST['btn-editarhome'])){


	// Sobre

	$idabout = mysqli_escape_string($connect, $_POST['idabout']);
	$titulosobre = mysqli_escape_string($connect, $_POST['titulo_sobre']);
	$subtitulosobre = mysqli_escape_string($connect, $_POST['subtitulo_sobre']);
	$textosobre = mysqli_escape_string($connect, $_POST['texto_sobre']);

	// Serviços

	$idservices = mysqli_escape_string($connect, $_POST['idservices']);
	$tituloareaservico = mysqli_escape_string($connect, $_POST['tituloarea_servico']);
	$subtituloareaservico = mysqli_escape_string($connect, $_POST['subtituloarea_servico']);
	$tituloservico = mysqli_escape_string($connect, $_POST['titulo_servico']);
	$textoservico = mysqli_escape_string($connect, $_POST['texto_servico']);
	$dataservico = mysqli_escape_string($connect, $_POST['data_servico']);

	// Profissionais

	/*$idprofessional = mysqli_escape_string($connect, $_POST['idprofessional']);
	$tituloprofissional = mysqli_escape_string($connect, $_POST['titulo_profissional']);
	$subtituloprofissional = mysqli_escape_string($connect, $_POST['subtitulo_profissional']);
	$nomeprofissional = mysqli_escape_string($connect, $_POST['nome_profissional']);
	$textoprofissional = mysqli_escape_string($connect, $_POST['texto_profissional']);
	$assinaturaprofissional = mysqli_escape_string($connect, $_POST['assinatura_profissional']);
	$linkinstagram = mysqli_escape_string($connect, $_POST['#link_instagram']);
	$linkfacebook = mysqli_escape_string($connect, $_POST['#link_facebook']);
	$linkwhatsapp = mysqli_escape_string($connect, $_POST['#link_whastapp']);
	$linklinkedin = mysqli_escape_string($connect, $_POST['#link_linkedin']);*/

	// Cursos

	$idcourse = mysqli_escape_string($connect, $_POST['idcourse']);
	$titulocurso = mysqli_escape_string($connect, $_POST['titulo_curso']);
	$subtitulocurso = mysqli_escape_string($connect, $_POST['subtitulo_curso']);
	$curso = mysqli_escape_string($connect, $_POST['curso']);
	$textocurso = mysqli_escape_string($connect, $_POST['texto_curso']);
	$datacurso = mysqli_escape_string($connect, $_POST['data_curso']);
	

	$sql = "INSERT INTO about (titleabout, subtitleabout, textabout) VALUES ('$titulosobre', '$subtitulosobre', '$textosobre')";
	$sql2 = "INSERT INTO services (titleareaservices, subtitleareaservices, titleservices, textservices) VALUES ('$tituloareaservico', '$subtituloareaservico', '$tituloservico', '$textoservico')";
	$sql3 =	"INSERT INTO course (titlecourse, subtitlecourse, course, textcourse) VALUES ('$titulocurso', '$subtitulocurso', '$curso', '$textocurso')";

	/*'$tituloprofissional', '$subtituloprofissional', $'nomeprofissional', '$textoprofissional', '$assinaturaprofissional', '$linkinstagram', '$linkfacebook', '$linkwhatsapp', '$linklinkedin',*/



	if(mysqli_query($connect, $sql)){

		$_SESSION['mensagem'] = "Erro de inserção de dados";
		header('Location: ../home.php');
		die();

	} else {


		$_SESSION['mensagem'] = "Tudo certo, atualizado com sucesso";
		header('Location: ../home.php');
		die();

	};




}

?>