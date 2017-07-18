<?php ob_start ();?> 
<?php  
//POSTY i TAXONOMIE
//Oferty
function my_custom_post_oferty() {
$labels = array(
'name'               => _x( 'Oferty', 'post type general name' ),
'singular_name'      => _x( 'Oferta', 'post type singular name' ),
'add_new'            => _x( 'Dodaj ','Oferta' ),
'add_new_item'       => __( 'Dodaj ' ),
'edit_item'          => __( 'Edytuj ' ),
'new_item'           => __( 'Nowa' ),
'all_items'          => __( 'Wszystkie ' ),
'view_item'          => __( 'Zobacz ' ),
'search_items'       => __( 'Szukaj ' ),
'not_found'          => __( 'Nie znaleziono' ),
'not_found_in_trash' => __( 'Nie znaleziono' ),
'parent_item_colon'  => '',
'menu_name'          => 'Oferty'
);
$args =array(
'labels' => $labels,
'public' => true,
'publicly_queryable' => true,
'exclude_from_search' => false,
'show_ui' => true,
'show_in_menu' => true,
'query_var' => true,
'has_archive' => true,
'hierarchical' => true,
'menu_position' => 5,
'taxonomies' => array( ),
'supports' => array( 'title','thumbnail')
);
register_post_type( 'oferty', $args );}
add_action( 'init', 'my_custom_post_oferty' );
//Galerie
function my_custom_post_galerie() {
$labels = array(
'name'               => _x( 'Galerie', 'post type general name' ),
'singular_name'      => _x( 'Galeria', 'post type singular name' ),
'add_new'            => _x( 'Dodaj ','Galeria' ),
'add_new_item'       => __( 'Dodaj ' ),
'edit_item'          => __( 'Edytuj ' ),
'new_item'           => __( 'Nowa' ),
'all_items'          => __( 'Wszystkie ' ),
'view_item'          => __( 'Zobacz ' ),
'search_items'       => __( 'Szukaj ' ),
'not_found'          => __( 'Nie znaleziono' ),
'not_found_in_trash' => __( 'Nie znaleziono' ),
'parent_item_colon'  => '',
'menu_name'          => 'Galerie'
);
$args =array(
'labels' => $labels,
'public' => true,
'publicly_queryable' => true,
'exclude_from_search' => false,
'show_ui' => true,
'show_in_menu' => true,
'query_var' => true,
'has_archive' => true,
'hierarchical' => true,
'menu_position' => 5,
'taxonomies' => array( ),
'supports' => array( 'title','thumbnail','editor')
);
register_post_type( 'galerie', $args );}
add_action( 'init', 'my_custom_post_galerie' );
//Galerie
function my_custom_post_wydarzenie() {
$labels = array(
'name'               => _x( 'Wydarzenia', 'post type general name' ),
'singular_name'      => _x( 'Wydarzenie', 'post type singular name' ),
'add_new'            => _x( 'Dodaj ','Wydarzenie' ),
'add_new_item'       => __( 'Dodaj ' ),
'edit_item'          => __( 'Edytuj ' ),
'new_item'           => __( 'Nowa' ),
'all_items'          => __( 'Wszystkie ' ),
'view_item'          => __( 'Zobacz ' ),
'search_items'       => __( 'Szukaj ' ),
'not_found'          => __( 'Nie znaleziono' ),
'not_found_in_trash' => __( 'Nie znaleziono' ),
'parent_item_colon'  => '',
'menu_name'          => 'Aktualności'
);
$args =array(
'labels' => $labels,
'rewrite' => array('slug' => 'aktualnosc'),
'public' => true,
'publicly_queryable' => true,
'exclude_from_search' => false,
'show_ui' => true,
'show_in_menu' => true,
'query_var' => true,
'has_archive' => true,
'hierarchical' => true,
'menu_position' => 5,
'taxonomies' => array( ),
'supports' => array( 'title','thumbnail','editor')
);
register_post_type( 'wydarzenie', $args );}
add_action( 'init', 'my_custom_post_wydarzenie' );	
?>
 

<?php ob_end_clean ();?>