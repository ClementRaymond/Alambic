<?php
   $args = array(
      'themelocation'   => 'Header main menu',
      'container_class' => 'header__container',
      'menu_class'      => 'header__container__menu',
   );
?>

<div class="header">
   <div class="row">
      <div class="columns large-4">
         <h1>Alambic</h1>
      </div>
      <div class="columns large-8">
         <?php wp_nav_menu($args); ?>
      </div>
   </div>
</div>
