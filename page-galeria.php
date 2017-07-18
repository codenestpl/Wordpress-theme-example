<?php /*Template Name:Galeria*/?>
<?php get_header();?> 
<main class="mainwrapper">
 <?php echo get_template_part("parts/part","banner");?>
 
    <section  id="oferta-lista">
    	<section class="main-section hide-sekcja">
     	   <div class="col-1 text-box-sekcja centeralign">
        	<h2><?php the_field('pagegaleria_h2', $page_id);?></h2>
            <div class="romby">
            	<span></span><span></span><span></span>
            </div>
            <p><?php the_field('pagegaleria_p', $page_id);?></p>
          
        </div>
        	<div class="clearfix"></div>
        </section>
    
     
         <div class="list-col-4 strona-galeria pad-s hide-sekcja">
         
         	<?php 
		 
			$args = array( 'post_type' => 'galerie', 'posts_per_page' =>-1  );
	  $loop = new WP_Query( $args ); 
	  
	  if($loop->have_posts()){ while ( $loop->have_posts() ) : $loop->the_post();?>
         <?php echo get_template_part("parts/part","galerie_el");?>         
         
          	<?php   endwhile;  };?> 
         </div> 
    
    </section>
    
   <?php echo get_template_part("parts/part","wirtualnyspacer");?>  
  <?php echo get_template_part("parts/part","paseksocialmedia");?> 
</main>
  <?php get_footer();?>