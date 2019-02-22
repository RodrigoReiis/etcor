<?php 

//Conexão
require_once('php-action/db_connect.php');

//Index
include_once('index.php');


//Sessão
session_start();

$_SESSION['mensagem'];

if(isset($_POST['idservices'])){

	unset($_POST['idservices']);

} else {

	$sql = "SELECT * FROM services WHERE idservices = 1";
	$resultado = mysqli_query($connect, $sql);
	$dados = mysqli_fetch_assoc($resultado);




 ?>




<div class="row s12">
	<div class="container">
		<h5 class="light" style="font-weight: bold;">Area Externa</h5>
		<div class="divider"></div><br><br>
		<form action="php-action/editservice.php" method="POST">
			<!-- Inputs da Area externa -->

			<div class="input-field col s6">
				<input type="hidden" name="idservices" value="<?php echo $dados['idservices']?>">
				<label for="tituloarea_servico">Titulo Area Serviço</label>
				<input type="text" name="tituloarea_servico" value="<?php echo $dados['titleareaservices']?>">
			</div>

			<div class="input-field col s6">
				<label for="subtitulo_servico">Subtitulo Area Serviço</label>
				<input type="text" name="subtituloarea_servico" value="<?php echo $dados['subtitleareaservices']?>"><br><br>				
			</div>

			<?php

					unset($sql, $dados, $resultado);

			}

			?>

			<!-- Inputs da Area Interna 1-->

			<?php

				if(isset($sql, $resultado, $dados)){

					unset($sql, $resultado, $dados);

				} else {


					$sql = "SELECT * FROM services WHERE idservices = 1";
					$resultado = mysqli_query($connect, $sql);
					$dados = mysqli_fetch_assoc($resultado);

				

			?>

			<h5 class="light" style="font-weight: bold;">Area Interna - Serviço 1</h5>
			<div class="divider"></div><br><br>
			<div class="input-field">
				<label for="titulo_servico">Titulo Serviço</label>
				<input type="text" name="titulo_servico" value="<?php echo $dados['titleservices']?>">				
			</div>

			<div class="input-field">
				<label for="texto_servico">Texto Serviço</label>
				<input type="text" name="texto_servico" value="<?php echo $dados['textservices']?>">				
			</div><br><br>

			<?php

				} unset($sql, $resultado, $dados);

			?>

			<!-- Inputs da Area Interna 2-->

			<?php

				if(isset($sql, $resultado, $dados)){

					unset($sql, $resultado, $dados);

				} else {


					$sql = "SELECT * FROM services WHERE idservices = 2";
					$resultado2 = mysqli_query($connect, $sql2);
					$dados2 = mysqli_fetch_assoc($resultado2);

				

			?>

			<h5 class="light" style="font-weight: bold;">Area Interna - Serviço 2</h5>
			<div class="divider"></div><br><br>
			<div class="input-field">
				<label for="titulo_servico2">Titulo Serviço</label>
				<input type="text" name="titulo_servico2" value="<?php echo $dados2['titleservices']?>">				
			</div>

			<div class="input-field">
				<label for="texto_servico">Texto Serviço</label>
				<input type="text" name="texto_servico2" value="<?php echo $dados2['textservices']?>">				
			</div><br><br>


			<?php

				} unset($sql, $resultado, $dados);

			?>


			<!-- Inputs da Area Interna 3-->

			<?php

				if(isset($sql, $resultado, $dados)){

					unset($sql, $resultado, $dados);


				} else {


					$sql = "SELECT * FROM services WHERE idservices = 3";
					$resultado = mysqli_query($connect, $sql);
					$dados = mysqli_fetch_assoc($resultado);

				

			?>

			<h5 class="light" style="font-weight: bold;">Area Interna - Serviço 3</h5>
			<div class="divider"></div><br><br>
			<div class="input-field">
				<label for="titulo_servico3">Titulo Serviço</label>
				<input type="text" name="titulo_servico3" value="<?php echo $dados['titleservices']?>">				
			</div>

			<div class="input-field">
				<label for="texto_servico">Texto Serviço</label>
				<input type="text" name="texto_servico3" value="<?php echo $dados['textservices']?>">				
			</div><br><br>


			<?php

				} unset($sql, $resultado, $dados);

			?>


			<!-- Inputs da Area Interna 4-->

			<?php

				if(isset($sql, $resultado, $dados)){

					unset($sql, $resultado, $dados);

				} else {


					$sql = "SELECT * FROM services WHERE idservices = 4";
					$resultado = mysqli_query($connect, $sql);
					$dados = mysqli_fetch_assoc($resultado);

				

			?>

			<h5 class="light" style="font-weight: bold;">Area Interna - Serviço 4</h5>
			<div class="divider"></div><br><br>
			<div class="input-field">
				<label for="titulo_servico4">Titulo Serviço</label>
				<input type="text" name="titulo_servico4" value="<?php echo $dados['titleservices']?>">				
			</div>

			<div class="input-field">
				<label for="texto_servico">Texto Serviço</label>
				<input type="text" name="texto_servico4" value="<?php echo $dados['textservices']?>">				
			</div><br><br>


			<?php

				} unset($sql, $resultado, $dados);

			?>


			<!-- Inputs da Area Interna 5-->

			<?php

				if(isset($sql, $resultado, $dados)){

					unset($sql, $resultado, $dados);

				} else {


					$sql = "SELECT * FROM services WHERE idservices = 5";
					$resultado = mysqli_query($connect, $sql);
					$dados = mysqli_fetch_assoc($resultado);

				

			?>

			<h5 class="light" style="font-weight: bold;">Area Interna - Serviço 5</h5>
			<div class="divider"></div><br><br>
			<div class="input-field">
				<label for="titulo_servico5">Titulo Serviço</label>
				<input type="text" name="titulo_servico5" value="<?php echo $dados['titleservices']?>">				
			</div>

			<div class="input-field">
				<label for="texto_servico">Texto Serviço</label>
				<input type="text" name="texto_servico5" value="<?php echo $dados['textservices']?>">				
			</div><br><br>


			<?php

				} unset($sql, $resultado, $dados);

			?>


			<!-- Inputs da Area Interna 6-->

			<?php

				if(isset($sql, $resultado, $dados)){

					unset($sql, $resultado, $dados);

				} else {


					$sql = "SELECT * FROM services WHERE idservices = 6";
					$resultado = mysqli_query($connect, $sql);
					$dados = mysqli_fetch_assoc($resultado);

				

			?>

			<h5 class="light" style="font-weight: bold;">Area Interna - Serviço 6</h5>
			<div class="divider"></div><br><br>
			<div class="input-field">
				<label for="titulo_servico6">Titulo Serviço</label>
				<input type="text" name="titulo_servico6" value="<?php echo $dados['titleservices']?>">				
			</div>

			<div class="input-field">
				<label for="texto_servico">Texto Serviço</label>
				<input type="text" name="texto_servico6" value="<?php echo $dados['textservices']?>">				
			</div><br><br>


			<?php

				} unset($sql, $resultado, $dados);

			?>


				<!-- Botão de Envio -->


			<button class="btn" name="btn-editservice">Atualizar</button>
		</form>
		
	</div>
	
</div>














 <?php 

include_once('include/footer.php');


  ?>