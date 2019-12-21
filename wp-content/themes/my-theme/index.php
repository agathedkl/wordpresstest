<?php get_header(); ?>

<div class="container">

<?php
if ( have_posts() ) {
  while ( have_posts() ) {
    /**
     * La méthode the_post() permet de charger le post courant
     * Un post est un type de contenu, par exemple une actualité ou une page
     **/
    the_post(); 

    /**
     * La méthode the_content() affiche le contenu du post en cours
     * Il s'agit du contenu que vous avez renseigné dans le back-office
     * Il existe d'autres méthodes, par exemple pour afficher le Titre du contenu, on peut utiliser la méthode the_title()
     */
    the_content();


  }
}
?>
    <!--BANNER-->
<section class="banner" style="background-image: url('<?php echo $banner_background_image['url']; ?>'); height: 50vh; background-repeat: no-repeat;">
  <p class="banner_contenu">
      <p class="banner_baseline"><?php the_field('banner_baseline'); ?></p>
      <p class="banner_title_brown"><?php the_field('banner_title_brown'); ?></p>
      <p class="banner_title_green"><?php the_field('banner_title_green'); ?></p>
    <a class="banner_register_link"><?php the_field('banner_register_link'); ?></a>
</section>
<!--/BANNER-->
    
    <!--CONFERENCE-->
<section class="text_bloc">
    <p class="title_bloc"><?php the_field('title_bloc'); ?></p>
      <p class="text_bloc_brown"><?php the_field('text_bloc_brown'); ?></p>
      
  
</section>

</div>

<?php get_footer(); ?>