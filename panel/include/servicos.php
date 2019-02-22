<?php

//Index
include_once('index.php');
//Header
include_once('include/header.php');
//Conexão
require_once('php-action/db_connect.php');


if(!isset($_POST['idservices'])){

$sql = "SELECT * FROM services";
$resultado = mysqli_query($connect, $sql);
$dados = mysqli_fetch_array($resultado);


}

?>

<div class="row">
    <h1 class="light center-align">EDITAR - SERVIÇOS</h1>
    <div class="divider"></div>      
        <div class="container">            
            <div class="col s12">                                     
                <form action="php-action/editservices.php" method="POST">
                <div class="input-field col s12">
                     
                    <select name="selectservicos">                   
                    <option value="" disabled selected>Escolha um serviço</option>  
                    <?php 
                                            
                      while($select = mysqli_fetch_assoc($resultado)){
                    
                    ?>                  
                    <option value="<?php echo $select['idservices']?>"><?php echo $select['titleservices']?></option>
                    <?php                     
                    
                    }
                        
                    ?>                                          
                    </select>
                                        
                    <label>Serviços</label>
                </div> 
                <div class="input-field col s12">                    
                    <div class="input-field col s6">
                        <input type="hidden" name="idservicos" value="<?php echo $select['idservices']?>">
                        <label for="titulo_servico">Título Externo</label>
                        <input type="text" name="titulo_areaservico" id="titulo_areaservico" value="">
                    </div>

                    

                    <div class="input-field col s6">
                        <label for="subtitulo_servico">Sub-Título Externo</label>
                        <input type="text" name="subtitulo_areaservico" id="subtitulo_areaservico" value="<?php echo $dados['subtitleareaservices']?>">
                    </div><br><br><br><br>
                    
                </form>                                                              
                        <form action="" method="POST" enctype="multipart/form-data"> 
                            <div class="file-field input-field">
                                <div class="btn">
                                    <span>Imagem</span>
                                    <input type="file" name="imagemservico" id="imagemservico">
                                </div>
                                <div class="file-path-wrapper">
                                    <input class="file-path validate" type="text">
                                </div>
                            </div>
                        </form><br><br>
                <form action ="php-action/editservices.php" method="POST">
                    <div class="input-field col s12">
                        <label for="titulo_servico">Título Serviço</label>
                        <input type="text" name="titulo_servico" id="titulo_servico" value="<?php echo $dados['titleservices']?>">
                    </div> 
                    <div class="input-field col s12">
                        <label for="texto_servico">Texto Serviço</label><br><br>
                        <textarea class="materialize-textarea" name="texto_servico" id="texto_servico"><?php echo $dados['textservices']?></textarea>
                        <script>
                            ClassicEditor
                                .create( document.querySelector( '#texto_servico' ) )
                                .catch( error => {
                                    console.error( error );
                                } );
                        </script>
                        </div>
                    </div> 
                    <button class="btn" type="submit" name="btn-editarservicos">Atualizar</button> 
                                
                </form>
                
            </div>
                       
        </div>  
                       
</div>


<?php
//FOOTER
include_once('include/footer.php');

?>