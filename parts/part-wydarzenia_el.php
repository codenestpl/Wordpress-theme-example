<section class="main-section nopad hide-sekcja aktualnosc"">
        <div class="col-2 img-box-sekcja pad-right">
            <img src="<?php the_field('page_banner_img', $post->ID);?>"/>
         <div class="clearfix"></div>
         </div>
        <div class="col-2 text-box-sekcja nopad-left">
            <h2><a href="<?php the_permalink();?>"><?php the_title();?></h2>
            <div class="romby">
                <span></span><span></span><span></span> 
            </div>
            <div class="text-more">
          <?php the_content( 'Czytaj dalej...');?>
            </div>
        </div>
        <div class="clearfix"></div>
</section>