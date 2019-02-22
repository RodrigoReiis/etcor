<?php 

//Conexão
require_once('db_connect.php');
session_start();



if(isset($_POST['btn-editservice'])){

	$tituloarea = mysqli_escape_string($connect, $_POST['tituloarea_servico']);
	$subtituloarea = mysqli_escape_string($connect, $_POST['subtituloarea_servico']);

	$tituloservico = mysqli_escape_string($connect, $_POST['titulo_servico']);
	$textoservico = mysqli_escape_string($connect, $_POST['texto_servico']);

	$tituloservico2 = mysqli_escape_string($connect, $_POST['titulo_servico2']);
	$textoservico2 = mysqli_escape_string($connect, $_POST['texto_servico2']);

	$tituloservico3 = mysqli_escape_string($connect, $_POST['titulo_servico3']);
	$textoservico3 = mysqli_escape_string($connect, $_POST['texto_servico3']);

	$tituloservico4 = mysqli_escape_string($connect, $_POST['titulo_servico4']);
	$textoservico4 = mysqli_escape_string($connect, $_POST['texto_servico4']);

	$tituloservico5 = mysqli_escape_string($connect, $_POST['titulo_servico5']);
	$textoservico5 = mysqli_escape_string($connect, $_POST['texto_servico5']);

	$tituloservico6 = mysqli_escape_string($connect, $_POST['titulo_servico6']);
	$textoservico6 = mysqli_escape_string($connect, $_POST['texto_servico6']);


	
	$sql = "UPDATE services SET (titleareaservices = '$tituloarea', subtitleareaservices = '$subtituloarea', titleservices = '$tituloservico', textservices = '$textoservico') WHERE idservices = 1";


	
	

	//$sql = "UPDATE services SET titleservices = '$tituloservico2', textservices = '$textoservico2' WHERE idservices = 2";
	

	

	
	
	

	
	//$sql = "UPDATE services SET titleservices = '$tituloservico2', textservices = '$textoservico2' WHERE idservices = 2";

	//};
  /*
	unset($sql);

	$sql = "UPDATE services SET titleservices = '$tituloservico3', textservices = '$textoservico3' WHERE idservices = 3";

	unset($sql);

	$sql = "UPDATE services SET titleservices = '$tituloservico4', textservices = '$textoservico4' WHERE idservices = 4";

	unset($sql);

	$sql = "UPDATE services SET titleservices = '$tituloservico5', textservices = '$textoservico5' WHERE idservices = 5";

	unset($sql);

	$sql = "UPDATE services SET titleservices = '$tituloservico6', textservices = '$textoservico6' WHERE idservices = 6";

	*/
	# code...



	

	

	if(mysqli_query($connect, $sql)){

		$_SESSION['mensagem'] = "Dados inseridos com Sucesso!";
		header('Location: ../servicos.php');
		

	} else {

		$_SESSION['mensagem'] = "Erro ao inserir dados!";
		header('Location: ../servicos.php');
		

	}
 }

 ?>
