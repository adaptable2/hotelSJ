<?php get_header(); ?>
<div class="galeria pb-5">
  <?php
        // Argumentos para una busqueda de post type
  $args = array(
        'post_type' => 'banner_interna', // Nombre del post type
        'order' => 'ASC',
        'banners_interna' => 'Menu'
      );
  $banners = new WP_Query($args);
  if ($banners->posts):
        // Foreach para recorrer el resultado de la busqueda
    foreach ($banners->posts as $banner):
      $banner_name = $banner->post_title;
      $banner = wp_get_attachment_url( get_post_thumbnail_id($banner->ID, 'full') );
  ?>
  <section class="banner-interna container-fluid d-flex justify-content-center align-items-center font-arabic font-upper" style="background: url(<?php echo $banner; ?>) no-repeat center center / cover;">
    <h1><?php echo $banner_name;?></h1>
  </section>
  <?php
  endforeach;
  endif; 
  ?>
  <div class="container">
  <?php 
    $args = array(
      'post_type' => 'menu',
      'order' => 'ASC'
    );
    $menus = new WP_Query($args);
    if ($menus->posts):
      $i = 0;
  ?>
      <div class="button-group">
      <?php  
        foreach ($menus->posts as $menu):
      ?>
          <button class="<?php echo $i == 0 ? 'is-checked' : '' ?>" data-filter=".<?php echo $menu->post_name; ?>" ><?php echo $menu->post_title; ?></button>
      <?php endforeach; ?>
      </div>
  <?php endif; ?>
    <section class="grid grid-galery">
      <?php 
        $args = array(
          'post_type' => 'menu',
          'order' => 'ASC'
        );
        $menus = new WP_Query($args);
        if ($menus->posts):
          foreach ($menus->posts as $menu):
            $argsImages = array(
              'post_parent'    => $menu->ID,
              'post_type'      => 'attachment',
              'numberposts'    => -1, // show all
              'post_status'    => 'any',
              'post_mime_type' => 'image',
              'exclude'        =>  get_post_thumbnail_id($galeria->ID),
              'orderby'        => 'menu_order',
              'order'          => 'ASC'
            );
            $images = get_posts($argsImages);
            if($images):
              foreach($images as $image): 
      ?>
                <div class="grid-item <?php echo $menu->post_name; ?>" data-category="<?php echo $menu->post_name; ?>">
                  <a data-fancybox="<?php echo $menu->post_name; ?>" href="<?php echo $image->guid; ?>">
                    <img src="<?php echo $image->guid; ?>" class="img-fluid">
                  </a>
                </div>
      <?php  
              endforeach;
            endif;
          endforeach;
        endif;
      ?>
    </section>
  </div>
</div>
<?php get_footer(); ?>