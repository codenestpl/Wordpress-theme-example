<?php ob_start ();?> 
<?php 
	//skroty
	define('HOME', home_url());
	define('TEMPL', get_template_directory_uri());
	define('UPL',wp_upload_dir());
	define('ID', get_the_ID());
	define('ID_OFERTA', 18);
	define('ID_RESTAURACJA', 15);	
?>
<?php ob_end_clean ();?>