<?php 
 
if(get_field("karuzela_h2", $page_id)){

for($i=0;$i<=3;$i++){
    $img=''; $img=get_field("karuzela_next_".$i, $page_id);
    ($img)?$karuzela_next[].=$img:'';
  $img=''; $img=get_field("karuzela_prev_".$i, $page_id);
    ($img)?$karuzela_prev[].=$img:'';
 
};
?>

<section class="main-section nopad">
    	<div class="col-2 karuzela">
         	 <div class="prev-imgs">
             <?php if($karuzela_prev){  foreach($karuzela_prev as $img){ ?>
               <img  src="<?php echo $img;?>"/>
             <?php };};?>
           	
             </div>
            
             <div class="next-imgs">
             <?php if($karuzela_next){  foreach($karuzela_next as $img){ ?>
               <img  src="<?php echo $img;?>"/>
             <?php };};?>
             
             </div>
             <div class="act-imgs">
            	<img class="show" src="<?php the_field("karuzela_act", $page_id);?>"/>
            </div>
         <div class="clearfix"></div>
         </div>
        <div class="col-2 text-box-sekcja nopad-left">
        	<h2><?php the_field("karuzela_h2", $page_id);?></h2>
            <div class="romby">
            	<span></span><span></span><span></span>
            </div>
            <p><?php the_field("karuzela_p", $page_id);?> </p>
            <?php $karuzela_link=get_field("karuzela_link", $page_id); if($karuzela_link){?> 
            <a class="link-more" href="<?php echo $karuzela_link;?>">przeczytaj więcej</a>
            <?php };?>
        </div>
        <div class="clearfix"></div>
    </section>
    <?php };?>