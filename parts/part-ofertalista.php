
<section  id="oferta-lista">
    	<section class="main-section hide-sekcja">
     	   <div class="col-1 text-box-sekcja centeralign">
        	<h2><?php the_field("ofertalista_h2",ID_OFERTA );?></h2>
            <div class="romby">
            	<span></span><span></span><span></span>
            </div>
            <p><?php the_field("ofertalista_p", ID_OFERTA);?></p>
            <a class="link-more" href="<?php echo get_permalink(ID_OFERTA);?>">poznaj naszą ofertę</a>
        </div>
        	<div class="clearfix"></div>
        </section>
    
     
         <div class="list-col-3 pad-s hide-sekcja">
         
         	<?php  $page_id = get_the_id(); $temp=intval($page_id-ID_OFERTA);
             if($temp!=0){$perpage=6;}else{$perpage=-1; };
			$args = array( 'post_type' => 'oferty', 'posts_per_page' =>$perpage,  );
	  $loop = new WP_Query( $args ); 
	  
	  if($loop->have_posts()){ while ( $loop->have_posts() ) : $loop->the_post();
 get_template_part("parts/part","ofertalista_el");
   
    endwhile;  };?> 
         	
              
         </div> 
    
    </section>
    <?php wp_reset_query(); ?>