<?php

//Conexão
require_once('php-action/db_connect.php');
//Index
include_once('index.php');


?>

<div class="row">
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
                <button class="btn" type="submit" name="btn-editarhome">Atualizar</button>
            </form>
      </div>
</div>












<?php

include_once('include/footer.php');

?>