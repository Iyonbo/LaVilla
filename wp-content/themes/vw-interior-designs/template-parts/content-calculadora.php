<?php
/**
 * The template part for displaying page content
 *
 * @package VW Interior Designs
 * @subpackage vw_interior_designs
 * @since VW Interior Designs 1.0
 */
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
          <label>Tipo de cambio USD 1.00 = GTQ 7.00</label>
          <br>
          <label for="">Tipo de conversión<br>
              <select name="tipo" id="">
                  <option value="1"> Dolares a Quetzales</option>
                  <option value="2"> Quetzales a Dolares</option>
              </select>
          </label>
          <br>
          <label for="">Cantidad<br>
              <input type="number" name="cantidad">
          </label>
          <br>
          <label for="">Resultado<br>
              <span>323</span>
          </label>
          <br><br>
          <input class="btn-primaty" type="button" value="Convertir">
      </form>
    </div>
  <div class="clearfix"></div>
</div>