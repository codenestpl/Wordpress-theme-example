<?php /*Template Name:Wydarzenia*/?>
<?php $ajax=0; $ajax = htmlspecialchars($_GET["ajax"]);  if(!$ajax) {?> 
<?php get_header();?> 
<main class="mainwrapper">
 <?php echo get_template_part("parts/part","banner");?>
 <div class="lista-wydarzen">
   	<?php 
		$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
    $args = array( 'post_type' => 'wydarzenie', 'posts_per_page' => '6', 'orderby'=>'date', 'order'=>'DESC','paged' => $paged);
	  $loop = new WP_Query( $args ); 
	  
	  if($loop->have_posts()){ while ( $loop->have_posts() ) : $loop->the_post();?>
         <?php echo get_template_part("parts/part","wydarzenia_el");?>         
         
          	<?php   endwhile;  };?> 
    </div>
    <section id="load-more-box">
      <div id="load-more">Więcej</div>
    </section>
   <?php echo get_template_part("parts/part","cechyrestauracji");?>  
  <?php echo get_template_part("parts/part","paseksocialmedia");?> 
</main>
  <?php get_footer();?>

<script type="text/javascript">
function loadArticle(pageNumber, ukrycie) {

  pageNumber = pageNumber.toString()
  
  url = '<?php echo get_permalink($page_id);  ?>/page/'+pageNumber+'/?ajax=1' 
  url2 = '<?php echo get_permalink($page_id);  ?>/page/'+pageNumber+'/'
    $.ajax({
        url: url,
        type:'GET', 
    dataType:'HTML',       
        success: function(html){       
       $("#load-more ").removeClass("active")    
      $("#load-more ").attr("href",url2);
      if(ukrycie && html.length <60){$("#load-more ").parents(".button-box").hide();  };
       if(html.length <60&&!ukrycie) {$("#load-more ").parents(".button-box").html("I to juz wszystko!");}
      else if(html.length>60&&!ukrycie){   $(".lista-wydarzen").append(html);window.history.replaceState('Object', '',url2 ); };
        },
    error: function(){$("#load-more ").parents(".button-box").html("Ups! Coś się popsiuło :<");}
    });
    return false;
}
  var count = 2;
        $("#load-more ").on('click tap', function(event){ 
      event.preventDefault();
        $("#load-more ").addClass("active") 
      loadArticle(count.toString(), false);
                       count++;})
           
  $(document).ready(function(e) {
    loadArticle(count.toString(), true);  
});
</script>

    <?php } else {  

$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
         $args = array( 'post_type' => 'wydarzenie', 'posts_per_page' => '6', 'orderby'=>'date', 'order'=>'DESC','paged' => $paged);
     $loop = new WP_Query( $args ); 
 while ( $loop->have_posts() ) : $loop->the_post();  
   echo get_template_part("parts/part","wydarzenia_el"); 
 
 
      endwhile;   
 wp_reset_query();  

    };?>