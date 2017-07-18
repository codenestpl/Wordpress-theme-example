<section style=" background-position:center <?php the_field("page_banner_posy", $page_id );?>%; background-image:url(<?php the_field("page_banner_img", $page_id );?>)" class="banner <?php echo (!is_front_page())?  'polowka':'';?>">
    	<hgroup>
        	
            <?php if(get_post_type($page_id)=='wydarzenie' || get_post_type($page_id)=='galerie'){ ?> 
        <h1 class="smaller"><?php echo the_title();?></h1>
            <h2  class="smaller"> </h2>

            <?php } else {?> 
            <h1><?php echo the_title();?></h1>
            <h2><?php the_field("page_lead", $page_id );?></h2>

            <?php };?>
            <a id="linkdol" href="#dol"><?php the_field("page_textlink", $page_id );?>
            	<div class="dol-anim-box">
                	<span class="zanikanie-dol-anim-box"></span>
                    <span></span>
                    <span></span>
                    <span class="zanikanie-dol-anim-box"></span>
                </div>            
            </a>


        </hgroup>
        <div class="tlo"></div>
    </section>    <div id="dol"></div>
   