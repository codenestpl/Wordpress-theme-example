<section class="group-sections">
  		<?php
		for($i=0;$i<=3;$i++){
<?php $section_h2= the_field('singleoferta_textgroup_h2_'.$i, $page_id); ?>
<?php $section_p=the_field('singleoferta_textgroup_p_'.$i, $page_id); ?>
<?php $section_img=''; $section_img= the_field('singleoferta_textgroup_img_'.$i, $page_id); ?>
 
<?php if($i!=1&&$section_img) {?>
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

        <div class="clearfix"><
        
        
        /div>
    </section>
<?php }else if($i==1&&$section_img){?>    
    
    
     	<section class="main-section nopad">
    	<div class="col-2 img-box-sekcja pad-right">
         	<img src="img/kjf-imgs1.jpg"/>
         <div class="clearfix"></div>
         </div>
        <div class="col-2 text-box-sekcja nopad-left">
        	<h2>Tytuł sekcji</h2>
            <div class="romby">
            	<span></span><span></span><span></span>
            </div>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor </p>
            
        </div>
        <div class="clearfix"></div>
    </section>
<?php }else if(!$section_img){?>     
    
     <section class="main-section twocoltext">
    	 
        <div class="col-1 text-box-sekcja ">
        	<h2>Tytuł sekcji</h2>
            <div class="romby">
            	<span></span><span></span><span></span>
            </div>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolorLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor </p>
          
        </div>
         
        <div class="clearfix"></div>
    </section>
    <?php }; };?>
	  </section>