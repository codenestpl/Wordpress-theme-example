<?php get_header();?> 
<main class="mainwrapper">
	 <?php echo get_template_part("parts/part","banner");?>
       <article class="galerie-article">
       <?php wp_reset_postdata();  ?>
      	<?php the_content(); ?>
      </article>
   <?php echo get_template_part("parts/part","ofertalista");?> 
    <?php echo get_template_part("parts/part","paseksocialmedia");?> 
</main>
  <?php get_footer();?>
    