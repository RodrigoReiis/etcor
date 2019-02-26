<?php 

include_once('include/header.php');

 ?>

<!-- Banner -->

<div class="row col-12">
	<img src="img/cursos/massagemterapeutica.jpg" alt="" style="opacity: 0.2;">		
	<h1 class="flex-center my-auto mx-auto" style="font-family: pantonbold;">Sobre nós</h1>		
</div>

<!--- ABOUT US -->

    
<div class="jumbotron" style="position: relative; height:450px; background-color: white;">        
        <div class="container-fluid">
          <div class="jumbotron-fluid col-lg-12 " style="background-color: white;">
            <h1 style="margin-left:-400px; font-size: 150px; opacity:0.1; position: absolute;"></h1>
              <img class="float-left d-none d-lg-block" src="img/yoga.png" style="z-index:5; width: 300px; position: absolute; left:90px;">          
                <div class="card col-lg-6 float-right" style="z-index: 5; border:0;">
                    <div class="card-body">
                      <div class="card-title">
                        <p style="color: chocolate; font-family:pantonlight;"><i class="fas fa-dove"></i>    SOBRE NÓS    <i class="fas fa-dove" style="transform: scaleX(-1)"></i></p>
                        <h4 style="font-family: pantonbold;" id="teste">UM POUCO DA NOSSA HISTÓRIA</h4>                                  
                          <div class="card-text">
                            <p class="text-justify">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                          </div>
                            <div class="card-button">
                              <a class="btn btn-primary" href="#">Leia Mais..</a>
                            </div>
                        </div>
                    </div>
                </div>              
            </div>
        </div>
      </div>
     
    <!--- END ABOUT US -->

     <!--- OUR PROFESSIONALS -->

    <div class="jumbotron jumbotron-fluid">
      <div class="container-fluid">
        <h6 class="text-center" style="color: chocolate; font-family: pantonlight;"><i class="fas fa-dove"></i>    OS MELHORES DO MERCADO    <i class="fas fa-dove" style="transform: scaleX(-1)"></i></h6>
        <h3 class="text-center" style="font-family: pantonbold;">NOSSOS PROFISSIONAIS</h3> <br> <br>
      </div> <br> <br>

      <ul class="nav nav-tabs nav-fill">
          <li class="nav-item">
            <a class="nav-link active btn btn-outline-primary" style="font-family: pantonbold;" href="#professional1" data-toggle="tab" role="tab" aria-controls="professional1" aria-selected="true">Luiz Reis</a>            
          </li>
          <li class="nav-item">
            <a class="nav-link btn btn-outline-danger" style="font-family: pantonbold;" href="#professional2" data-toggle="tab" role="tab" aria-controls="professional2" aria-selected="true">Thais Hanai</a>
          </li>
          <li class="nav-item">
            <a class="nav-link btn btn-outline-success" style="font-family: pantonbold;" href="#professional3" data-toggle="tab" role="tab" aria-controls="professional3" aria-selected="true">Profissional 3</a>
          </li>
          <li class="nav-item">
            <a class="nav-link btn btn-outline-warning" style="font-family: pantonbold;" href="#professional4" data-toggle="tab" role="tab" aria-controls="professional4" aria-selected="true">Profissional 4</a>
          </li>
        </ul>
      
      <!-- Profissional 1 -->

      <div class="tab-content">
        <div class="tab-pane active" id="professional1" role="tabpanel" aria-labelledby="professional1-tab">
          <div class="card" style="margin-top: 50px; border: none;">
            <div class="card-body col-lg-6" style=" position: absolute;">
                <div class="card-text float-left text-center" style="margin-top: 100px;">
                    <blockquote class="blockquote">
                        <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
                        <footer class="blockquote-footer">Lorem Ipsum is simply dummy.<cite title="Source Title">Source Title</cite></footer>
                      </blockquote>
                </div>                
            </div>
            <div id="imgcard col-lg-6 float-right" style="position:relative;">
                <img class="img-fluid d-none d-lg-block" style="width: 300px; float: right; margin-right: 100px; padding: 50px;" src="img/profissionais/modelo1.jpg">
            </div> 
            <div class="card-footer text-center" style="background-color: white; border: none; z-index:1 !important">
                <a class="btn btn-outline-danger" href="#">Instagram</a>
                <a class="btn btn-outline-primary" href="#">Facebook</a>
                <a class="btn btn-outline-success" href="#">Whatsapp</a>
                <a class="btn btn-outline-info" href="#">Linkedin</a>
              </div>  
          </div>
        </div>

        <!-- Profissional 2 -->

        <div class="tab-pane" id="professional2" role="tabpanel" aria-labelledby="professional2-tab">
            <div class="card" style="margin-top: 50px;  border: none;">
                <div class="card-body col-lg-6" style=" position: absolute;">
                    <div class="card-text float-left text-center" style="margin-top: 100px;">
                        <blockquote class="blockquote">
                          <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
                          <footer class="blockquote-footer">Lorem Ipsum is simply dummy.<cite title="Source Title">Source Title</cite></footer>
                        </blockquote>
                    </div>                
                </div>
                <div class="container">
                  <div id="imgcard col-lg-6 float-right" style="position:relative;">
                    <img class="img-fluid d-none d-lg-block" style="width: 300px; float: right; margin-right: 100px; padding: 50px;" src="img/profissionais/modelo2.jpg">
                  </div>
                </div>
                <div class="card-footer text-center" style="background-color: white; border: none; z-index:1 !important";>                 
                    <a class="btn btn-outline-danger" href="#">Instagram</a>
                    <a class="btn btn-outline-primary" href="#">Facebook</a>
                    <a class="btn btn-outline-success" href="#">Whatsapp</a>
                    <a class="btn btn-outline-info" href="#">Linkedin</a>                 
                </div>                 
            </div>
          </div>

          <!-- Profissional 3 -->

          <div class="tab-pane" id="professional3" role="tabpanel" aria-labelledby="professional3-tab">
            <div class="card" style="margin-top: 50px;  border: none;">
                <div class="card-body col-lg-6" style=" position: absolute;">
                    <div class="card-text float-left text-center" style="margin-top: 100px;">
                        <blockquote class="blockquote">
                          <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
                          <footer class="blockquote-footer">Lorem Ipsum is simply dummy.<cite title="Source Title">Source Title</cite></footer>
                        </blockquote>
                    </div>                
                </div>
                <div id="imgcard col-lg-6 float-right" style="position:relative;">
                    <img class="img-fluid d-none d-lg-block" style="width: 300px; float: right; margin-right: 100px; padding: 50px;" src="img/profissionais/modelo3.jpg">
                </div>
                <div class="card-footer text-center" style="background-color: white; border: none;  z-index:1 !important">                 
                    <a class="btn btn-outline-danger" href="#">Instagram</a>
                    <a class="btn btn-outline-primary" href="#">Facebook</a>
                    <a class="btn btn-outline-success" href="#">Whatsapp</a>
                    <a class="btn btn-outline-info" href="#">Linkedin</a>                 
                </div>                 
            </div>
          </div>

          <!-- Profissional 4 -->


          <div class="tab-pane" id="professional4" role="tabpanel" aria-labelledby="professional4-tab">
            <div class="card" style="margin-top: 50px;  border: none;">
                <div class="card-body col-lg-6" style=" position: absolute;">
                    <div class="card-text float-left text-center" style="margin-top: 100px;">
                        <blockquote class="blockquote">
                          <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
                          <footer class="blockquote-footer">Lorem Ipsum is simply dummy.<cite title="Source Title">Source Title</cite></footer>
                        </blockquote>
                    </div>                
                </div>
                <div id="imgcard col-lg-6 float-right" style="position:relative;">
                    <img class="img-fluid d-none d-lg-block" style="width: 300px; float: right; margin-right: 100px; padding: 50px;" src="img/profissionais/modelo4.jpg">
                </div>
                <div class="card-footer text-center" style="background-color: white; border: none; z-index:1 !important">                 
                    <a class="btn btn-outline-danger" href="#">Instagram</a>
                    <a class="btn btn-outline-primary" href="#">Facebook</a>
                    <a class="btn btn-outline-success" href="#">Whatsapp</a>
                    <a class="btn btn-outline-info" href="#">Linkedin</a>                 
                </div>                 
            </div>
          </div>        
      </div>

    </div><br><br>

    <!--- END OUR PROFESSIONALS -->


      <!--- DEPOIMENTS -->

    <div class="jumbotron jumbotron-fluid d-none d-sm-block" style="margin-top: -30px;">
      <img src="img/cursos/massagemterapeutica.jpg" alt="" style="position: absolute; width: 100%; height: 600px; opacity: 0.3; display: block;">
      <div class="container" style="width: 60em">  <br>   <br>    
        <h6 class="text-center" style="color: chocolate; font-family: pantonlight;"><i class="fas fa-dove"></i>    OLHA O QUE NOSSOS CLIENTES ACHAM    <i class="fas fa-dove" style="transform: scaleX(-1)"></i></h6>
        <h3 class="text-center" style="font-family: pantonbold;">DEPOIMENTO DOS NOSSOS CLIENTES</h3> <br> <br> <br> <br>
      
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active rounded">
              <img class="d-block mx-auto" src="img/yoga.png" alt="First slide" style="width:100px; height: 100px"><br><br><br>
              <p class="text-center">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
              <footer class="blockquote-footer text-center">Lorem Ipsum is simply dummy.<cite title="Source Title">Source Title</cite></footer>
            </div>
            <div class="carousel-item">
              <img class="d-block mx-auto" src="img/yoga.png" alt="First slide" style="width:100px; height: 100px"><br><br><br>
              <p class="text-center">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
              <footer class="blockquote-footer text-center">Lorem Ipsum is simply dummy.<cite title="Source Title">Source Title</cite></footer>
            </div>
            <div class="carousel-item">
              <img class="d-block mx-auto" src="img/yoga.png" alt="First slide" style="width:100px; height: 100px"><br><br><br>
              <p class="text-center">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
              <footer class="blockquote-footer text-center">Lorem Ipsum is simply dummy.<cite title="Source Title">Source Title</cite></footer>
            </div>
          </div>
        </div>
      </div>
    </div> <br> <br>

     <!--- END DEPOIMENTS -->




 <?php 

include_once('include/footer.php');

 ?>