
<footer class="mainwrapper">
 <div class="h-footer hide-sekcja">
 	<div>
    	<h3>Kontakt</h3>
        <span class="clearfix"></span>
        <p><a href="mailto:<?php echo get_option("email_dane");?>"><?php echo get_option("email_dane");?></a><br>
         <?php echo get_option("telefon_dane");?><br>
         <?php echo get_option("telefon2_dane");?></p>
    </div>
    
    <div>
    	<h3>Adres</h3>
        <span class="clearfix"></span>
        <p><?php echo get_option("adres_dane");?></p>
    </div>
    
    <div>
    	<h3>Godziny otwarcia</h3>
        <span class="clearfix"></span>
        <p>Poniedziałek             nieczynne<br>
        Wtorek - Niedziela   <?php echo get_option("godzinyotwarcia_dane");?></p>
    </div>
    
    <div id="menu">
    	<h3>Menu</h3>
        <span class="clearfix"></span>
        <div class="col-2">
        	   <?php wp_nav_menu(array('theme_location'  => 'menu-dol1', 'container'=>' ' )); ?> 
        </div>
         <div class="col-2">
           <?php wp_nav_menu(array('theme_location'  => 'menu-dol2', 'container'=>' ' )); ?> 
        </div>
    </div>
    <span class="clearfix"></span>
 </div>
  <div class="l-footer ">
  <p>&copy; Restauracja Tifffany <?php echo date('Y'); ?></p>
  <img src="<?php echo TEMPL;?>/img/logo_header.svg"/>
  <p><a title="Tworzenie stron WWW i aplikacji Webowych" href="http://codenest.pl/">Tworzenie stron WWW Codenest</a></p>
  </div>
 <div class="clearfix"></div>
 </footer>
 <div class="lightbox">
 <div class="lightbox-table">
   <div class="lightbox-box">
    <div class="next-lightbox">⇨</div>
    <div class="prev-lightbox">⇦</div>
     <div class="close-lightbox">✖</div>
     <img class="lightbox-img" src=""> 
   
   </div>
</div>
 </div>
</body>
<script
  src="https://code.jquery.com/jquery-3.1.1.min.js"
  integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
  crossorigin="anonymous"></script>
<script type="text/javascript" src="<?php echo TEMPL;?>/js/scripts_ogolne.js"></script>
 
<?php wp_footer(); ?>
</html> 