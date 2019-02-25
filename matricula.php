<?php

include_once('include/header.php');

?>




<!-- Banner -->

<div class="row col-12">
	<img src="../img/cursos/cromoterapia.jpg" alt="" style="opacity: 0.2;">		
	<h1 class="flex-center my-auto mx-auto" style="font-family: pantonbold;"> MATRÍCULA </h1>		
</div><br><br><br>


<!-- End Banner -->

<!-- Chamada -->

<div class="container-fluid">
        <h6 class="text-center" style="color: chocolate; font-family: pantonlight;"><i class="fas fa-dove"></i>   SE ESPECIALIZE E ENTRE PARA O MERCADO    <i class="fas fa-dove" style="transform: scaleX(-1)"></i></h6>
        <h3 class="text-center" style="font-family: pantonbold;"> MATRÍCULA </h3> <br> <br>
      </div> <br> <br>

<!-- End Chamada -->

<!-- Formulário -->

<div class="row mx-auto">
    <div class="container col-8">
        <form action="enviarmatricula.php" method="POST">
            
                <div class="form-group">
                    <label for="nome">Nome</label>
                    <input class="form-control" type="text" name="nome" id="nome" placeholder="Digite seu nome">
                </div>

                <div class="form-group">
                    <label for="endereco">Endereço</label>
                    <input class="form-control"type="text" name="endereco" id="endereco" placeholder="Digite seu endereço, nº">
                </div>

                <div class="form-group">
                    <label for="cidade">Cidade</label>
                    <input class="form-control"type="text" name="cidade" id="cidade" placeholder="Digite sua cidade">
                </div>

                <div class="form-group">
                    <label for="cep">CEP</label>
                    <input class="form-control"type="number" name="cep" id="cep" placeholder="Digite seu cep">
                </div>

                <div class="form-group">
                    <label for="profissao">Profissão</label>
                    <input class="form-control"type="text" name="profissao" id="profissao" placeholder="Digite sua profissao">
                </div>

                <div class="form-group">
                    <label for="telefone">Telefone</label>
                    <input class="form-control"type="tel" name="telefone" id="telefone" placeholder="Digite seu telefone">
                </div>

                <div class="form-group">
                    <label for="rg">RG</label>
                    <input class="form-control" type="number" name="rg" id="rg" placeholder="Digite seu rg">
                </div>

                <div class="form-group">
                    <label for="cpf">CPF</label>
                    <input class="form-control"type="number" name="cpf" id="cpf" placeholder="Digite seu cpf">
                </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <input class="form-control"type="email" name="email" id="email" placeholder="Digite seu email">
                </div>

                <div class="form-group">
                    <label for="curso">Curso</label>
                    <select class="form-control"name="curso" id="curso">
                        <option value="" selected disabled>Selecione seu curso</option>
                        <option value="">Curso 1</option>
                        <option value="">Curso 2</option>
                        <option value="">Curso 3</option>
                        <option value="">Curso 4</option>
                        <option value="">Curso 5</option>
                        <option value="">Curso 6</option>
                        <option value="">Curso 7</option>
                        <option value="">Curso 8</option>
                        <option value="">Curso 9</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="arquivo">Selecione seu comprovante de pagamento</label>
                    <input class="form-control-file"type="file" name="arquivo" id="arquivo" placeholder="Carregue seu comprovante">
                </div>

                <button class="btn btn-outline-success" type="submit" name="btn-enviarmatricula">Enviar Matricula</button>

                <a class="btn btn-outline-success" href="#" name="linkpgt" id="linkpgt" target="_blank" >Faça o pagamento da sua matricula aqui</a>
            
        </form>
    </div>
</div><br><br><br><br>




<?php

include_once('include/footer.php');

?>