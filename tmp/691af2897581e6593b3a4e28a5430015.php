<?php
require_once '/Applications/MAMP/htdocs/wordless-test/wp-content/plugins/wordless/vendor/phamlp/haml/HamlHelpers.php';
?><h2>
  Detalle del Proyecto
</h2>  <?php the_post(); ?>
<div class="post">
<header>
<h3>
  <?php echo link_to(get_the_title(), get_permalink()); ?>

</h3></header><div class="content">
  <?php echo get_the_filtered_content(); ?>

</div><br /><div class="p">
<b>
  Cliente
</b>  <?php echo types_render_field("client-name", array("id" => get_the_ID())); ?>

</div><div class="p">
<b>
  Teléfono
</b>  <?php echo types_render_field("client-phone", array("id" => get_the_ID())); ?>

</div></div>