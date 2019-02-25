<?php 

include_once('include/header.php');

 ?>


<!-- Banner -->

<div class="row col-12">
	<img src="../img/cursos/cromoterapia.jpg" alt="" style="opacity: 0.2;">		
	<h1 class="flex-center my-auto mx-auto" style="font-family: pantonbold;">Contato</h1>		
</div><br><br><br>


<!-- End Banner -->

<!-- Chamada -->

<div class="container-fluid">
        <h6 class="text-center" style="color: chocolate; font-family: pantonlight;"><i class="fas fa-dove"></i>    ENTRE EM CONTATO CONOSCO, VAMOS GOSTAR DE CONVERSAR COM VOCÊ    <i class="fas fa-dove" style="transform: scaleX(-1)"></i></h6>
        <h3 class="text-center" style="font-family: pantonbold;">FALE CONOSCO</h3> <br> <br>
      </div> <br> <br>

<!-- End Chamada -->

<!-- Formulário -->
<div class="row col-8  mx-auto">
	<div class="container-fluid">
		<form action="sendcontact.php" method="POST">
			<div class="form-group">
				<label for="name">Nome</label>
				<input class="form-control" type="text" name="nome"	id="nome" placeholder="Digite seu nome:">
				<br>
			</div>
			<div class="form-group">
				<label for="email">Email</label>
				<input class="form-control" type="mail" name="email"	id="email" placeholder="Digite seu email:">
				<br>
			</div>
			<div class="form-group">
				<label for="telefone">Telefone</label>
				<input class="form-control" type="phone" name="telefone"	id="telefone" placeholder="Digite seu telefone:">
				<br>
			</div>
			<div class="form-group">
				<label for="">Assunto</label>
				<select class="form-control" name="" id="">
					<option class="" value="Seleciona uma opção" selected disabled>Seleciona uma opção</option>
					<option value="">Dúvidas</option>
					<option value="">Sugestões</option>
					<option value="Matrícula">Matrícula</option>					
				</select>
			</div><br>
			<div class="form-group">
				<label for="">Mensagem</label>
				<textarea class="form-control" name="" id="" cols="30" rows="10" placeholder="Digite sua mensagem"></textarea>
			</div>
			<button class="btn btn-outline-success" type="submit" name="btn-enviarform">Enviar formulário</button>
		</form>
	</div>
</div><br><br><br><br>

<!-- End Formulário -->

<!-- Mapa Localização -->

<div class="row col-12">
	<div class="container-fluid" style="margin-left: 30px;">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3659.061077116002!2d-47.46781268524213!3d-23.494309465004097!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94c58ab705308e6b%3A0x3cfe76b8769a6d1e!2sETCOR!5e0!3m2!1spt-BR!2sbr!4v1550836785169" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
	</div>
</div><br><br><br>

<!-- end Mapa Localização -->


 <?php 

include_once('include/footer.php');

 ?>