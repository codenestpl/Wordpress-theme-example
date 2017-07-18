<?php ob_start ();?> 
<?php 
 require_once('functions/skroty.php');
 require_once('functions/teksty.php');
 require_once('functions/customposttypes.php');
?>
<?php 
	 //Menu
	register_nav_menu( 'menu-gora', 'Menu górne strony' );
	register_nav_menu( 'menu-dol1', 'Menu kolumna 1 w stopce' );
	register_nav_menu( 'menu-dol2', 'Menu kolumna 2 w stopce' );
	
	//Miniaturki
	add_theme_support( 'post-thumbnails' ); 
	add_image_size( 'galeria-miniaturka', 300, 300 );
	add_image_size( 'karuzela-miniaturka', 500, 500 );
?>
<?php ob_end_clean ();?>