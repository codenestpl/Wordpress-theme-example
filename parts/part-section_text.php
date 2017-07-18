<section class="group-sections"> 
  		<?php
		for($i=0;$i<=2;$i++){?>
<?php $section_h2=''; $section_h2= get_field('singleoferta_textgroup_h2_'.$i, $page_id); ?>
<?php $section_p=get_field('singleoferta_textgroup_p_'.$i, $page_id); ?>
<?php $section_img=''; $section_img= get_field('singleoferta_textgroup_img_'.$i, $page_id); ?>
 <?php if($section_h2&&$section_p){?>
<?php if($i!=1&&$section_img) { ?>

   <section class="main-section nopad hide-sekcja">
    	 <div class="col-2 text-box-sekcja nopad-right">
        	<h2><?php echo $section_h2;?></h2>
            <div class="romby">
            	<span></span><span></span><span></span>
            </div>
            <p><?php echo $section_p;?></p>
         
        </div>
    	<div class="col-2 img-box-sekcja pad-left">
         	<img src="<?php echo $section_img;?>"/>
         <div class="clearfix"></div>
         </div>

        <div class="clearfix"></div>
    </section>
<?php }else if($i==1&&$section_img){?>    
    
    
     	<section class="main-section nopad hide-sekcja"">
    	<div class="col-2 img-box-sekcja pad-right">
         	<img src="<?php echo $section_img;?>"/>
         <div class="clearfix"></div>
         </div>
        <div class="col-2 text-box-sekcja nopad-left">
        	<h2><?php echo $section_h2;?></h2>
            <div class="romby">
            	<span></span><span></span><span></span>
            </div>
            <p><?php echo $section_p;?></p>
            
        </div>
        <div class="clearfix"></div>
    </section>
<?php }else if(!$section_img){?>     
    
     <section class="main-section twocoltext hide-sekcja"">
    	 
        <div class="col-1 text-box-sekcja ">
        	<h2><?php echo $section_h2;?></h2>
            <div class="romby">
            	<span></span><span></span><span></span>
            </div>
            <p><?php echo $section_p;?></p>
          
        </div>
         
        <div class="clearfix"></div>
    </section>
    <?php }; };};?>
	  </section>