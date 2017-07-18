
<?php if(get_field("page_galeria_img_1", $page_id)){?>
<section style="height:500px;" id="galeria-oferta" class="main-section rozszerzona nopad hide-sekcja color-sekcja">
    	 
    	<div class="col-23 galeria-box-sekcja ">
        	 <div class="list-col-3">
             <?php for($i=1;$i<=6;$i++){?>
				 <?php $img=''; $img=get_field("page_galeria_img_".$i, $page_id); if($img){?>
                 <?php                   
                       $img_mini= wp_get_attachment_image_src($img, 'galeria-miniaturka');  
                       $img_full= wp_get_attachment_image_src($img, 'full'); 
                 ?>

				 	<div class="img-galeria"><img data="<?php echo $img_full[0];?>" src="<?php echo $img_mini[0];?>"/></div>
                    
				<?php };};?>
             </div>
         <div class="clearfix"></div>
         </div>
<div class="col-3 text-box-sekcja ">
        	<h2><?php the_field("page_galeria_h2", $page_id);?></h2>
            <div class="romby">
            	<span></span><span></span><span></span>
            </div>
            <p><?php the_field("page_galeria_p", $page_id);?></p>
            <?php $galeria_link='';$galeria_link=get_field("page_galeria_link", $page_id);if($galeria_link && $galeria_link!='http://www.restauracjatiffany.pl/witaj-swiecie/'){?>
            <a class="link-more" href="<?php echo $galeria_link;?>">ZOBACZ GALERIĘ</a>
            <?php };?>
        </div>
        <div class="clearfix"></div>
    </section>
<section id="galeria-box-sekcja-wiecej">
   		<div class="  list-col-5">
           <?php for($i=1;$i<=10;$i++){?>
				 <?php $img=''; $img=get_field("page_galeria_imgroz_".$i, $page_id); if($img){?>
                 
				 	<?php                   
                       $img_mini= wp_get_attachment_image_src($img, 'galeria-miniaturka');  
                       $img_full= wp_get_attachment_image_src($img, 'full'); 
                 ?>

                    <div class="img-galeria"><img data="<?php echo $img_full[0];?>" src="<?php echo $img_mini[0];?>"/></div>
                    
				<?php };};?>
        </div>
   </section>
   <?php };?>