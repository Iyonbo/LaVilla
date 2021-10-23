<?php
/**
 * The template part for displaying page content
 *
 * @package VW Interior Designs
 * @subpackage vw_interior_designs
 * @since VW Interior Designs 1.0
 */

 if (function_exists("get_tipo_cambio")){
    $cambio = get_tipo_cambio(false);
    // var_dump($cambio);
 }
?>

<div class="content-vw">
  <?php if(has_post_thumbnail()) {?>
    <?php the_post_thumbnail(); ?>
    <hr>
  <?php }?>
    <h1 class="vw-page-title"><?php the_title();?></h1>
    <div class="entry-content">
      <?php the_content();?>
      <form action="">
          <label>
                Tipo de cambio <?php echo $cambio['fecha']?><br> 
                USD 1.00 = GTQ <?php echo round($cambio['cambio'], 2)?>
            </label>
          <br><br>
          <input type="hidden" name="cambio" id="cambio" value="<?php echo $cambio['cambio']?>">
          <label for="">Tipo de conversión<br>
                <select name="tipo" id="tipo" required>
                    <option value="1"> Dolares a Quetzales</option>
                    <option value="2"> Quetzales a Dolares</option>
                </select>
          </label>
          <br><br>
          <label for="">Cantidad<br>
              <input type="number" name="cantidad" id="cantidad" min="1" value="1" required>
          </label>
          <br><br>
          <label for="">Resultado<br>
              <span id="resultado">GTQ <?php echo round($cambio['cambio'], 2)?></span>
          </label>
          <br><br>
          <input class="btn-primary" type="button" value="Convertir">
      </form>
    </div>
  <div class="clearfix"></div>
</div>
<style>
    form {
        max-width: 300px;
        width: 100%;
        margin: 0 auto;
        color: black;
    }

    label {
        font-weight: 600;
        width: 100%;
    }

    input, select{
        width: 100%;
    }

    .btn-primary{
        margin: 20px 10px;
        padding: 5px 10px;
        background: #9dc02e;
        border: none;
        color: white;
    }

    .btn-primary:hover{
        background-color: #313040;
    }
</style>
<script>
    (function($){
        $(document).ready(function(){
            $(".btn-primary").on("click", function(){
                $tipo = $("#tipo option:selected").val();
                $cantidad = $("#cantidad").val();
                $cambio = $("#cambio").val();
                if($tipo == '1'){
                    $monto = $cantidad*cambio;
                    $moneda1 = 'USD';
                    $moneda2 = 'GTQ';
                }else{
                    $monto = $cantidad/cambio;
                    $moneda1 = 'GTQ';
                    $moneda2 = 'USD';
                }
                $("#resultado").html($moneda1+" "+$cantidad.toFixed(2)+" = "+$moneda2+" "+$monto.toFixed(2));
            });
        });
    })(jQuery);
</script>