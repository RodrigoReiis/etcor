<?php

//Conexão
require_once('php-action/db_connect.php');
//Index
include_once('index.php');


if(!isset($_POST['idabout'])){

  $sql = "SELECT * FROM about ORDER BY idabout DESC";
  $resultado = mysqli_query($connect, $sql);
  $dados = mysqli_fetch_assoc($resultado);

?>




<div class="row s12">
    <div class="container">
        <h2 class="light center-align"> Edição Página Home </h2>
        <div class="divider"></div>
        <h6 class="light left-align" style="font-weight:bold;"> Quem Somos - Página Inicial </h6>
            <form class="" action="php-action/edithome.php" method="POST">
                <input type="hidden" name="idabout" id="idabout" value="<?php echo $dados['idabout']?>">
                <div class="row col s12">
                    <div class="input-field col s6">
                        <label for="titulo_sobre">Título</label>
                        <input type="text" name="titulo_sobre" id="titulo_sobre" value="<?php echo $dados['titleabout'];?>">                    
                    </div>

                    <div class="input-field col s6">
                        <label for="subtitulo_sobre">Sub-Título</label>
                        <input type="text" name="subtitulo_sobre" id="subtitulo_sobre" value="<?php echo $dados['subtitleabout']?>">                    
                    </div>
                </div><br>
                    
                    <h4 class="light">Texto - Sobre</h4>
                    <div class="row col s12">
                        <textarea class="materialize-textarea" name="texto_sobre" id="texto_sobre"><?php echo $dados['textabout']?></textarea>
                        <script>
                        ClassicEditor
                            .create( document.querySelector( '#texto_sobre' ) )
                            .catch( error => {
                                console.error( error );
                            } );
                        </script>               
                    </div>
<?php
};

if(!isset($_POST['idservices'])){

  $sql2 = "SELECT * FROM services";
  $resultado2 = mysqli_query($connect, $sql2);
  $dados2 = mysqli_fetch_assoc($resultado2);


?>                            

                <div class="divider"></div>
                <h6 class="light left-align" style="font-weight:bold;"> Serviços - Página Inicial </h6>
                <!--- OUR SERVICES -->
     <form action="php-action/editservices.php" method="POST" accept-charset="utf-8">
       
              
      <div class=" jumbotron jumbotron-fluid">
        <div class="container-fluid input-field col s6">
          <input type="hidden" name="idservices" id="idservices" value="<?php echo $dados2['idservices']?>">
          <h6 class="text-center" style="color: chocolate;">
            <label for="tituloarea_servico">Titulo Area Serviço</label>
            <input type="text" name="tituloarea_servico" id="tituloarea_servico" value="<?php echo $dados2['titleareaservices']?>">
          </h6></br>
        </div>
         <div class="container-fluid input-field col s6">
          <h3 class="text-center">
            <label for="subtituloarea_servico">Subtitulo Area Serviço</label>
            <input type="text" name="subtituloarea_servico" value="<?php echo $dados2['subtitleareaservices']?>">
          </h3>
        </div>

        <div class="card-deck col-lg-12">
            <div class="card">
              <img class="card-img-top" src=".../100px200/" alt="Imagem de capa do card">
              <div class="card-body">
                <h5 class="card-title">
                    <label for="titulo_servico">Titulo Serviço</label>
                    <input type="text" name="titulo_servico" id="titulo_servico" value="<?php echo $dados2['titleservices']?>">
                </h5>
                <p class="card-text">
                    <label for="texto_servico">Texto Serviço</label>
                    <input type="text" id="texto_servico" name="texto_servico" value="<?php echo $dados2['textservices']?>">
                </p>
                <p class="card-text">
                    <small class="text-muted">
                      <label for="data_servico">Data Servico</label>
                        <input type="text" name="data_servico" id="data_servico" value="<?php echo "Atualizado em ".$dados2['dataservices'] ?>">
                    </small>
                </p>
              </div>
            </div>
            <div class="card">
              <img class="card-img-top" src=".../100px200/" alt="Imagem de capa do card">
              <div class="card-body">
                <h5 class="card-title">
                    <label for="titulo_servico">Titulo Serviço</label>
                    <input type="text" name="titulo_servico" id="titulo_servico" value="<?php echo $dados2['titleservices']?>">
                </h5>
                <p class="card-text">
                    <label for="texto_servico">Texto Serviço</label>
                    <input type="text" id="texto_servico" name="texto_servico" value="<?php echo $dados2['textservices']?>">
                </p>
                <p class="card-text">
                    <small class="text-muted">
                      <label for="data_servico">Data Servico</label>
                        <input type="text" name="data_servico" id="data_servico" value="<?php echo "Atualizado em ".$dados2['dataservices'] ?>">
                    </small>
                </p>
              </div>
            </div>
            <div class="card">
              <img class="card-img-top" src=".../100px200/" alt="Imagem de capa do card">
              <div class="card-body">
                <h5 class="card-title">
                    <label for="titulo_servico">Titulo Serviço</label>
                    <input type="text" name="titulo_servico" id="titulo_servico" value="<?php echo $dados2['titleservices']?>">
                </h5>
                <p class="card-text">
                    <label for="texto_servico">Texto Serviço</label>
                    <input type="text" id="texto_servico" name="texto_servico" value="<?php echo $dados2['textservices']?>">
                </p>
                <p class="card-text">
                    <small class="text-muted">
                      <label for="data_servico">Data Servico</label>
                        <input type="text" name="data_servico" id="data_servico" value="<?php echo "Atualizado em ".$dados2['dataservices'] ?>">
                    </small>
                </p>
              </div>
            </div>
          </div></br>


          <div class="card-deck  col-lg-12">
              <div class="card">
              <img class="card-img-top" src=".../100px200/" alt="Imagem de capa do card">
              <div class="card-body">
                <h5 class="card-title">
                    <label for="titulo_servico">Titulo Serviço</label>
                    <input type="text" name="titulo_servico" id="titulo_servico" value="<?php echo $dados2['titleservices']?>">
                </h5>
                <p class="card-text">
                    <label for="texto_servico">Texto Serviço</label>
                    <input type="text" id="texto_servico" name="texto_servico" value="<?php echo $dados2['textservices']?>">
                </p>
                <p class="card-text">
                    <small class="text-muted">
                      <label for="data_servico">Data Servico</label>
                        <input type="text" name="data_servico" id="data_servico" value="<?php echo "Atualizado em ".$dados2['dataservices'] ?>">
                    </small>
                </p>
              </div>
            </div>
              <div class="card">
              <img class="card-img-top" src=".../100px200/" alt="Imagem de capa do card">
              <div class="card-body">
                <h5 class="card-title">
                    <label for="titulo_servico">Titulo Serviço</label>
                    <input type="text" name="titulo_servico" id="titulo_servico" value="<?php echo $dados2['titleservices']?>">
                </h5>
                <p class="card-text">
                    <label for="texto_servico">Texto Serviço</label>
                    <input type="text" id="texto_servico" name="texto_servico" value="<?php echo $dados2['textservices']?>">
                </p>
                <p class="card-text">
                    <small class="text-muted">
                      <label for="data_servico">Data Servico</label>
                        <input type="text" name="data_servico" id="data_servico" value="<?php echo "Atualizado em ".$dados2['dataservices'] ?>">
                    </small>
                </p>
              </div>
            </div>
              <div class="card">
              <img class="card-img-top" src=".../100px200/" alt="Imagem de capa do card">
              <div class="card-body">
                <h5 class="card-title">
                    <label for="titulo_servico">Titulo Serviço</label>
                    <input type="text" name="titulo_servico" id="titulo_servico" value="<?php echo $dados2['titleservices']?>">
                </h5>
                <p class="card-text">
                    <label for="texto_servico">Texto Serviço</label>
                    <input type="text" id="texto_servico" name="texto_servico" value="<?php echo $dados2['textservices']?>">
                </p>
                <p class="card-text">
                    <small class="text-muted">
                        <label for="data_servico">Data Servico</label>
                        <input type="text" name="data_servico" id="data_servico" value="<?php echo "Atualizado em ".$dados2['dataservices'] ?>">
                    </small>
                </p>
              </div>
            </div>
            </div>

      </div>
      <button class="btn" type="submit" name="btn-editarservico">Atualizar</button>
    </form> 

<?php

};


if(!isset($_POST['idcourse'])){

  $sql3 = "SELECT * FROM course";
  $resultado3 = mysqli_query($connect, $sql3);
  $dados3 = mysqli_fetch_assoc($resultado3);


?>


    <!--- END OUR SERVICES -->


    <!--- OUR PROFESSIONALS --

    <div class="jumbotron jumbotron-fluid">
      <div class="container-fluid">
        <h6 class="text-center">
          <input type="text" name="titulo_profissional" id="titulo_profissional" value="<?php echo $dados['titleprofessional'];?>">            
        </h6>
        <h3 class="text-center">
          <input type="text" name="subtitulo_profissional" id="subtitulo_profissional" value="<?php echo $dados['subtitleprofessional'];?>">           
        </h3>
      </div>

      <ul class="nav nav-tabs">
          <li class="nav-item">
            <a class="nav-link active" href="#professional1" data-toggle="tab" role="tab" aria-controls="professional1" aria-selected="true">
              <input type="text" name="nome_profissional" id="nome_profissional" value="<?php echo $dados['nameprofessional'];?>">
            </a>            
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#professional2" data-toggle="tab" role="tab" aria-controls="professional2" aria-selected="true">
              <input type="text" name="nome_profissional" id="nome_profissional" value="<?php echo $dados['nameprofessional'];?>">                
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#professional3">Link</a>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" href="#">Desativado</a>
          </li>
        </ul>

      <div class="tab-content">
        <div class="tab-pane active" id="professional1" role="tabpanel" aria-labelledby="professional1-tab">
          <div class="card" style="margin-top: 50px;">
            <div class="card-body col-lg-6" style=" position: absolute;">
                <div class="card-text float-left text-center" style="margin-top: 100px;">
                    <blockquote class="blockquote">
                        <p class="mb-0">
                          <input type="text" name="texto_profissional" id="texto_profissional" value="<?php echo $dados['textprofessional'];?>">                            
                        </p>
                        <footer class="blockquote-footer">
                          <input type="text" name="assinatura_profissional" id="assinatura_profissional" value="<?php echo $dados['signatureprofessional'];?>">
                          <cite title="Source Title">
                            <input type="text" name="nome_profissional" id="nome_profissional" value="<?php echo $dados['nameprofessional'];?>">                           
                          </cite>
                        </footer>
                      </blockquote>
                </div>                
            </div>
            <div id="imgcard col-lg-6 float-right" style="position:relative;">
                <img class="img-fluid" style="width: 300px; float: right; margin-right: 200px; padding: 50px;" src="img\background-casal-1.png">
            </div> 
            <div class="card-footer text-center">
                <a class="btn btn-primary" id="link_instagram" href="<?php echo $dados['instagramprofessional'];?>">Instagram</a>
                <a class="btn btn-primary" id="link_facebook" href="<?php echo $dados['facebookprofessional'];?>">Facebook</a>
                <a class="btn btn-primary" id="link_whatsapp" href="<?php echo $dados['whatsappprofessional'];?>">Whatsapp</a>
                <a class="btn btn-primary" id="link_linkedin" href="<?php echo $dados['linkedinprofessional'];?>">Linkedin</a>
              </div>  
          </div>
        </div>

        <div class="tab-content">
        <div class="tab-pane active" id="professional2" role="tabpanel" aria-labelledby="professional2-tab">
          <div class="card" style="margin-top: 50px;">
            <div class="card-body col-lg-6" style=" position: absolute;">
                <div class="card-text float-left text-center" style="margin-top: 100px;">
                    <blockquote class="blockquote">
                        <p class="mb-0">
                          <input type="text" name="texto_profissional" id="texto_profissional" value="<?php echo $dados['textprofessional'];?>">                            
                        </p>
                        <footer class="blockquote-footer">
                          <input type="text" name="assinatura_profissional" id="assinatura_profissional" value="<?php echo $dados['signatureprofessional'];?>">
                          <cite title="Source Title">
                            <input type="text" name="nome_profissional" id="nome_profissional" value="<?php echo $dados['nameprofessional'];?>">                           
                          </cite>
                        </footer>
                      </blockquote>
                </div>                
            </div>
            <div id="imgcard col-lg-6 float-right" style="position:relative;">
                <img class="img-fluid" style="width: 300px; float: right; margin-right: 200px; padding: 50px;" src="img\background-casal-1.png">
            </div> 
            <div class="card-footer text-center">
                <a class="btn btn-primary" id="link_instagram" href="<?php echo $dados['instagramprofessional'];?>">Instagram</a>
                <a class="btn btn-primary" id="link_facebook" href="<?php echo $dados['facebookprofessional'];?>">Facebook</a>
                <a class="btn btn-primary" id="link_whatsapp" href="<?php echo $dados['whatsappprofessional'];?>">Whatsapp</a>
                <a class="btn btn-primary" id="link_linkedin" href="<?php echo $dados['linkedinprofessional'];?>">Linkedin</a>
              </div>   
          </div>
        </div>        
      </div>

    </div>

    <!--- END OUR PROFESSIONALS -->



    <!--- OUR COURSES -->



     <div class="jumbotron jumbotron-fluid col s12">
      <input type="hidden" name="idcourse" id="idcourse" value="<?php echo $dados3['idcourse']?>">
        <div class="container-fluid input-field col s6">
          <h6 class="text-center" style="color: chocolate;">
            <label for="titulo_curso">Titulo Curso</label>
            <input type="text" name="titulo_curso" id="titulo_curso" value="<?php echo $dados3['titlecourse']; ?>">              
          </h6></br>
        </div>
         <div class="container-fluid input-field col s6">
          <h3 class="text-center">
            <label for="subtitulo_curso">SubTitulo Curso</label>
            <input type="text" name="subtitulo_curso" id="subtitulo_curso" value="<?php echo $dados3['subtitlecourse']; ?>">
          </h3>
        </div>

        <div class="card-deck col-lg-12">
            <div class="card">
              <img class="card-img-top" src=".../100px200/" alt="Imagem de capa do card">
              <div class="card-body">
                <h5 class="card-title">
                  <label for="curso">Curso</label>
                  <input type="text" name="curso" id="curso" value="<?php echo $dados3['course'];?>">                    
                </h5>
                <p class="card-text">
                  <label for="texto_curso">Texto Curso</label>
                  <input type="text" name="texto_curso" id="texto_curso" value="<?php echo $dados3['textcourse']; ?>">
                 </p>
                <p class="card-text">
                  <small class="text-muted">
                    <label for="data_curso">Data Curso</label>
                    <input type="text" name="data_curso" id="data_curso" value="Atualizado em <?php echo $dados3['datecourse']; ?>">
                  </small>
                </p>
              </div>
            </div>
            <div class="card">
              <img class="card-img-top" src=".../100px200/" alt="Imagem de capa do card">
              <div class="card-body">
                <h5 class="card-title">
                  <label for="curso">Curso</label>
                  <input type="text" name="curso" id="curso" value="<?php echo $dados3['course'];?>">                    
                </h5>
                <p class="card-text">
                  <label for="texto_curso">Texto Curso</label>
                  <input type="text" name="texto_curso" id="texto_curso" value="<?php echo $dados3['textcourse']; ?>">
                 </p>
                <p class="card-text">
                  <small class="text-muted">
                    <label for="data_curso">Data Curso</label>
                    <input type="text" name="data_curso" id="data_curso" value="Atualizado em <?php echo $dados3['datecourse']; ?>">
                  </small>
                </p>
              </div>
            </div>
            <div class="card">
              <img class="card-img-top" src=".../100px200/" alt="Imagem de capa do card">
              <div class="card-body">
                <h5 class="card-title">
                  <label for="curso">Curso</label>
                  <input type="text" name="curso" id="curso" value="<?php echo $dados3['course'];?>">                    
                </h5>
                <p class="card-text">
                  <label for="texto_curso">Texto Curso</label>
                  <input type="text" name="texto_curso" id="texto_curso" value="<?php echo $dados3['textcourse']; ?>">
                 </p>
                <p class="card-text">
                  <small class="text-muted">
                    <label for="data_curso">Data Curso</label>
                    <input type="text" name="data_curso" id="data_curso" value="Atualizado em <?php echo $dados3['datecourse']; ?>">
                  </small>
                </p>
              </div>
            </div>
          </div></br>


          <div class="card-deck  col-lg-12">
             <div class="card">
              <img class="card-img-top" src=".../100px200/" alt="Imagem de capa do card">
              <div class="card-body">
                <h5 class="card-title">
                  <label for="curso">Curso</label>
                  <input type="text" name="curso" id="curso" value="<?php echo $dados3['course'];?>">                    
                </h5>
                <p class="card-text">
                  <label for="texto_curso">Texto Curso</label>
                  <input type="text" name="texto_curso" id="texto_curso" value="<?php echo $dados3['textcourse']; ?>">
                 </p>
                <p class="card-text">
                  <small class="text-muted">
                    <label for="data_curso">Data Curso</label>
                    <input type="text" name="data_curso" id="data_curso" value="Atualizado em <?php echo $dados3['datecourse']; ?>">
                  </small>
                </p>
              </div>
            </div>
             <div class="card">
              <img class="card-img-top" src=".../100px200/" alt="Imagem de capa do card">
              <div class="card-body">
                <h5 class="card-title">
                  <label for="curso">Curso</label>
                  <input type="text" name="curso" id="curso" value="<?php echo $dados3['course'];?>">                    
                </h5>
                <p class="card-text">
                  <label for="texto_curso">Texto Curso</label>
                  <input type="text" name="texto_curso" id="texto_curso" value="<?php echo $dados3['textcourse']; ?>">
                 </p>
                <p class="card-text">
                  <small class="text-muted">
                    <label for="data_curso">Data Curso</label>
                    <input type="text" name="data_curso" id="data_curso" value="Atualizado em <?php echo $dados3['datecourse']; ?>">
                  </small>
                </p>
              </div>
            </div>
              <div class="card">
              <img class="card-img-top" src=".../100px200/" alt="Imagem de capa do card">
              <div class="card-body">
                <h5 class="card-title">
                  <label for="curso">Curso</label>
                  <input type="text" name="curso" id="curso" value="<?php echo $dados3['course'];?>">                    
                </h5>
                <p class="card-text">
                  <label for="texto_curso">Texto Curso</label>
                  <input type="text" name="texto_curso" id="texto_curso" value="<?php echo $dados3['textcourse']; ?>">
                 </p>
                <p class="card-text">
                  <small class="text-muted">
                    <label for="data_curso">Data Curso</label>
                    <input type="text" name="data_curso" id="data_curso" value="Atualizado em <?php echo $dados3['datecourse']; ?>">
                  </small>
                </p>
              </div>
            </div>
            </div>

      </div>

    <!--- END OUR COURSES -->

<?php
}

?>


                <button class="btn" type="submit" name="btn-editarhome">Atualizar</button>
            </form>
      </div>
</div>












<?php

include_once('include/footer.php');

?>