<?php

//Conexão
require_once('php-action/db_connect.php');
//Menus
include_once('index.php');
//Sessão
session_start();

if(isset($_POST['idabout'])){

  unset($_POST['idabout']);

} else{

  $sql = "SELECT * FROM about ORDER BY idabout DESC LIMIT 1";
  $resultado = mysqli_query($connect, $sql);
  $dados = mysqli_fetch_array($resultado);

}

?>


  <div class="row">
    <h1 class="center-align light">EDITAR - SOBRE NÓS</h1>
    <div class="divider" style="margin: 50px;"></div>
    <div class="container">
      <form class="" action="php-action/editabout.php" method="POST">
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

          <div class="input-field col s12">
            <h4 class="light">Texto - Sobre</h4>
            <textarea class="materialize-textarea" name="texto_sobre" id="texto_sobre"><?php echo $dados['textabout']?></textarea>
            <script>
              ClassicEditor
                .create( document.querySelector( '#texto_sobre' ) )
                .catch( error => {
                    console.error( error );
                } );
            </script>               
          </div>
                    
        </div>
        <button class="btn" type="submit" name="btn-editar">Atualizar</button>
      </form>
    </div>
  </div>


<?php

include_once('include/footer.php');


?>