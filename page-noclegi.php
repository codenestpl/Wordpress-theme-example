 <?php /*Template Name: Noclegi*/?>
<?php get_header();?> 
<main class="mainwrapper">
 <?php echo get_template_part("parts/part","banner");?>
 
    
     <section  id="oferta-lista-box" >
    	<section class="main-section hide-sekcja">
     	   <div class="col-1 text-box-sekcja centeralign">
        	<h2><?php the_field('noclegipage_h2', $page_id);?></h2>
            <div class="romby">
            	<span></span><span></span><span></span>
            </div>
            <p><?php the_field('noclegipage_p', $page_id);?></p>
       
        </div>
        	<div class="clearfix"></div>
        </section>

    	 <div id="oferta-lista" class="noclegi" ng-app="listaofert" ng-controller="listaofert_c" class=" hide-sekcja">
       		<div class="col-3" id="oferta-ozdobna-lista">
				 <section  class="main-section ozdobna hide-sekcja">
    	<div class="ozdobna-wrap">
    	<div class="col-1 text-box-sekcja centeralign">
        	<h2>Zapewniamy</h2>
            <div class="romby">
            	<span></span><span></span><span></span>
            </div>
        <br>
         <div  class="list-col-2 noclegi">
        	<div class="link item-list menu-item">
             
                <div class="cecha-kolko">
                <div class="cecha-kolko-hover">
                        <svg xmlns="http://www.w3.org/2000/svg" xml:space="preserve" width="50px" height="50px" version="1.1" style="shape-rendering:geometricPrecision; text-rendering:geometricPrecision; image-rendering:optimizeQuality; fill-rule:evenodd; clip-rule:evenodd"
        viewBox="0 0 50 50"
         xmlns:xlink="http://www.w3.org/1999/xlink">
         
         <g id="Warstwa_x0020_1">
          <metadata id="CorelCorpID_0Corel-Layer"/>
          <circle class="cecha-kolko-svg" cx="25" cy="25" r="23"/>
         </g>
        </svg>
                </div>
                    <div class="cecha-obrazek">
                          <svg xmlns="http://www.w3.org/2000/svg" xml:space="preserve" width="50px" height="50px" version="1.1" style="shape-rendering:geometricPrecision; text-rendering:geometricPrecision; image-rendering:optimizeQuality; fill-rule:evenodd; clip-rule:evenodd"
viewBox="0 0 50 50"
 xmlns:xlink="http://www.w3.org/1999/xlink">
 
 <g id="Warstwa_x0020_1">
  <metadata id="CorelCorpID_0Corel-Layer"/>
  <path class="cecha-obrazek-fill2" d="M33 40l8 0 0 3 -8 0 0 -3zm-23 0l9 0 0 3 -9 0 0 -3z"/>
  <path class="cecha-obrazek-1" d="M10 10l1 0 0 0 -1 0 0 1 -1 0 0 -1 1 0 0 0zm3 0l1 0 0 0 -1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 0zm3 0l1 0 0 0 -1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 0zm3 0l1 0 0 0 -1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 0zm3 0l1 0 0 0 -1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 0zm3 0l1 0 0 0 -1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 0zm3 0l1 0 0 0 -1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 0zm3 0l1 0 0 0 -1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 0zm3 0l1 0 0 0 -1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 0zm3 0l1 0 0 0 -1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 0zm3 0l1 0 0 0 -1 0 0 0zm2 0l0 1 0 0 0 -1 0 0zm0 3l0 1 0 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 -1 0 0zm0 3l0 1 0 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 -1 0 0zm0 3l0 1 0 0 0 -1 0 0zm0 3l0 1 0 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 -1 0 0zm0 3l0 1 0 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 -1 0 0zm0 3l0 1 0 0 0 1 -1 0 0 1 -1 0 0 -1 1 0 0 -1 1 0 0 -1 0 0zm0 3l0 1 0 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 -1 0 0zm0 3l0 1 0 0 0 1 -1 0 0 -1 1 0 0 -1 0 0zm-6 2l-1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 1zm-3 0l-1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 1zm-3 0l-1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 1zm-3 0l-1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 1zm-3 0l-1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 1 -1 0 0 1 -1 0 0 1zm-3 0l-1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 1 -1 0 0 1 -1 0 0 1zm-3 0l-1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 1 -1 0 0 1 -1 0 0 1zm-3 0l-1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 1 -1 0 0 1 -1 0 0 1zm-3 0l-1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 -1 0 0 0 0 1 0 0 -1 0 0 0 0 1 0 0 -1 0 0 0 0 1 0 0 -1 0 0 0 0 1 0 0 -1 0 0 0 0 1 0 0 -1 0 0 0 0 1 0 0 -1 0 0 0 0 1 0 0 -1 0 0 0 0 1 0 0 -1 0 0 0 0 1 0 0 -1 0 0 0 0 1 0 0 -1 0 0 0 0 1 0 0 1 0 0 0 0 -1 0 0 1 0 0 0 0 -1 0 0 1 0 0 0 0 -1 0 0 1 0 0 0 0 -1 0 0 1 0 0 0 0 -1 0 0 1 0 0 0 0 -1 0 0 1 0 0 0 0 -1 0 0 1 0 0 0 0 -1 0 0 1 0 0 0 0 -1 0 0 1 0 0 0 0 -1 0 0 1 0 0 0 0 -1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 1zm-3 -1l0 -1 1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 -1 0 0 0 0 1 0 0 -1 0 0 0 0 1 0 0 -1 0 0 0 0 1 0 0 -1 0 0 0 0 1 0 0 -1 0 0 0 0 1 0 0 -1 0 0 0 0 1 0 0 -1 0 0 0 0 1 0 0 -1 0 0 0 0 1 0 0 -1 0 0 0 0 1 0 0 -1 0 0 0 0 1 0 0 -1 0 0 0 0 1 0 0 1 0 0 0 0 -1 0 0 1 0 0 0 0 -1 0 0 1 0 0 0 0 -1 0 0 1 0 0 0 0 -1 0 0 1 0 0 0 0 -1 0 0 1 0 0 0 0 -1 0 0 1 0 0 0 0 -1 0 0 1 0 0 0 0 -1 0 0 1 0 0 0 0 -1 0 0 1 0 0 0 0 -1 0 0 1 0 0 0 0 -1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0zm0 -3l0 -1 1 0 0 -1 1 0 0 -1 1 0 0 -1 0 0 0 0 1 0 0 -1 0 0 0 0 1 0 0 -1 0 0 0 0 1 0 0 -1 0 0 0 0 1 0 0 -1 0 0 0 0 1 0 0 -1 0 0 0 0 1 0 0 -1 0 0 0 0 1 0 0 -1 0 0 0 0 1 0 0 -1 0 0 0 0 1 0 0 -1 0 0 0 0 1 0 0 -1 0 0 0 0 1 0 0 1 0 0 0 0 -1 0 0 1 0 0 0 0 -1 0 0 1 0 0 0 0 -1 0 0 1 0 0 0 0 -1 0 0 1 0 0 0 0 -1 0 0 1 0 0 0 0 -1 0 0 1 0 0 0 0 -1 0 0 1 0 0 0 0 -1 0 0 1 0 0 0 0 -1 0 0 1 0 0 0 0 -1 0 0 1 0 0 0 0 -1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0zm0 -3l0 -1 1 0 0 -1 0 0 0 0 1 0 0 -1 0 0 0 0 1 0 0 -1 0 0 0 0 1 0 0 -1 0 0 0 0 1 0 0 -1 0 0 0 0 1 0 0 -1 0 0 0 0 1 0 0 -1 0 0 0 0 1 0 0 -1 0 0 0 0 1 0 0 -1 0 0 0 0 1 0 0 -1 0 0 0 0 1 0 0 1 0 0 0 0 -1 0 0 1 0 0 0 0 -1 0 0 1 0 0 0 0 -1 0 0 1 0 0 0 0 -1 0 0 1 0 0 0 0 -1 0 0 1 0 0 0 0 -1 0 0 1 0 0 0 0 -1 0 0 1 0 0 0 0 -1 0 0 1 0 0 0 0 -1 0 0 1 0 0 0 0 -1 0 0 1 0 0 0 0 -1 0zm0 -3l0 -1 1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0zm0 -3l0 -1 1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0zm0 -3l0 -1 1 0 0 1 -1 0zm32 -9l1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 -1zm-3 0l1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 -1zm-1 10l1 0 0 1 -1 0 0 -1zm-3 0l1 0 0 1 -1 0 0 -1zm-3 0l1 0 0 1 -1 0 0 -1zm8 -11l1 0 0 1 -1 0 0 -1zm-11 11l1 0 0 1 -1 0 0 -1zm13 -1l1 0 0 1 -1 0 0 -1zm-21 -3l1 0 0 1 -1 0 0 -1zm-4 1l1 0 0 1 -1 0 0 -1zm13 -1l1 0 0 1 -1 0 0 -1zm-16 1l1 0 0 1 -1 0 0 -1zm13 -1l1 0 0 1 -1 0 0 -1zm-16 1l1 0 0 1 -1 0 0 -1zm13 -1l1 0 0 1 -1 0 0 -1zm13 5l1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 -1zm-3 0l1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 -1zm-3 0l1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 -1zm10 -1l1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 -1zm-13 1l1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 -1zm12 9l1 0 0 1 -1 0 0 -1zm-13 1l1 0 0 1 -1 0 0 -1zm10 -1l1 0 0 1 -1 0 0 -1zm-13 1l1 0 0 1 -1 0 0 -1zm10 -1l1 0 0 1 -1 0 0 -1zm-13 1l1 0 0 1 -1 0 0 -1zm10 -1l1 0 0 1 -1 0 0 -1zm-13 1l1 0 0 1 -1 0 0 -1z"/>
  <circle class="cecha-obrazek-fill" cx="20" cy="23" r="10"/>
  <path class="cecha-obrazek-2" d="M9 7l33 0c2,0 3,1 3,2l0 27c0,2 -1,3 -3,3l-33 0c-2,0 -3,-1 -3,-3l0 -27c0,-1 1,-2 3,-2zm11 10c4,0 7,3 7,6 0,4 -3,6 -7,6 -3,0 -6,-2 -6,-6 0,-3 3,-6 6,-6z"/>
 </g>
</svg>
                    </div>
                </div>
             
                <div class="cecha-text">
               		<h3>Sejf<br>&nbsp;</h3>
                </div>
            </div>
             <div class="link item-list oferta-item">
             
                <div class="cecha-kolko">
                <div class="cecha-kolko-hover">
                        <svg xmlns="http://www.w3.org/2000/svg" xml:space="preserve" width="50px" height="50px" version="1.1" style="shape-rendering:geometricPrecision; text-rendering:geometricPrecision; image-rendering:optimizeQuality; fill-rule:evenodd; clip-rule:evenodd"
        viewBox="0 0 50 50"
         xmlns:xlink="http://www.w3.org/1999/xlink">
         
         <g id="Warstwa_x0020_1">
          <metadata id="CorelCorpID_0Corel-Layer"/>
          <circle class="cecha-kolko-svg" cx="25" cy="25" r="23"/>
         </g>
        </svg>
                </div>
                    <div class="cecha-obrazek"> 
                    <svg xmlns="http://www.w3.org/2000/svg" xml:space="preserve" width="50px" height="50px" version="1.1" style="shape-rendering:geometricPrecision; text-rendering:geometricPrecision; image-rendering:optimizeQuality; fill-rule:evenodd; clip-rule:evenodd"
viewBox="0 0 50 50"
 xmlns:xlink="http://www.w3.org/1999/xlink">
 <g id="Warstwa_x0020_1">
  <metadata id="CorelCorpID_0Corel-Layer"/>
  <path class="cecha-obrazek-1" d="M24 36l0 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0zm-1 -1l-1 -1 1 0 0 -1 1 0 0 1 -1 0 0 1zm-2 -2l0 0 0 -1 1 0 0 1 -1 0zm-1 -1l-1 -1 1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 1zm-2 -2l0 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0zm-1 -1l-1 -1 0 0 1 0 0 -1 0 0 0 0 1 0 0 -1 0 0 0 0 1 0 0 -1 0 0 0 0 1 0 0 -1 0 0 0 0 1 0 0 -1 0 0 0 0 1 0 0 -1 0 0 0 0 1 0 0 -1 0 0 0 0 1 0 0 -1 0 0 0 0 1 0 0 -1 0 0 0 0 1 0 0 -1 0 0 0 0 1 0 0 1 0 0 0 0 -1 0 0 1 0 0 0 0 -1 0 0 1 0 0 0 0 -1 0 0 1 0 0 0 0 -1 0 0 1 0 0 0 0 -1 0 0 1 0 0 0 0 -1 0 0 1 0 0 0 0 -1 0 0 1 0 0 0 0 -1 0 0 1 0 0 0 0 -1 0 0 1 0 0 0 0 -1 0 0 1zm-2 -2l0 0 0 -1 0 0 0 0 1 0 0 -1 0 0 0 0 1 0 0 -1 0 0 0 0 1 0 0 -1 0 0 0 0 1 0 0 -1 0 0 0 0 1 0 0 -1 0 0 0 0 1 0 0 -1 0 0 0 0 1 0 0 -1 0 0 0 0 1 0 0 -1 0 0 0 0 1 0 0 1 0 0 0 0 -1 0 0 1 0 0 0 0 -1 0 0 1 0 0 0 0 -1 0 0 1 0 0 0 0 -1 0 0 1 0 0 0 0 -1 0 0 1 0 0 0 0 -1 0 0 1 0 0 0 0 -1 0 0 1 0 0 0 0 -1 0 0 1 0 0 0 0 -1 0zm-1 -1l-1 -1 1 0 0 -1 0 0 0 0 1 0 0 -1 0 0 0 0 1 0 0 -1 0 0 0 0 1 0 0 -1 0 0 0 0 1 0 0 -1 0 0 0 0 1 0 0 -1 0 0 0 0 1 0 0 -1 0 0 0 0 1 0 0 1 0 0 0 0 -1 0 0 1 0 0 0 0 -1 0 0 1 0 0 0 0 -1 0 0 1 0 0 0 0 -1 0 0 1 0 0 0 0 -1 0 0 1 0 0 0 0 -1 0 0 1 0 0 0 0 -1 0 0 1zm-2 -2l0 0 0 -1 0 0 0 0 1 0 0 -1 0 0 0 0 1 0 0 -1 0 0 0 0 1 0 0 -1 0 0 0 0 1 0 0 -1 0 0 0 0 1 0 0 -1 0 0 0 0 1 0 0 1 0 0 0 0 -1 0 0 1 0 0 0 0 -1 0 0 1 0 0 0 0 -1 0 0 1 0 0 0 0 -1 0 0 1 0 0 0 0 -1 0 0 1 0 0 0 0 -1 0zm-1 -1l-1 -1 1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 1zm-2 -2l0 0 0 -1 1 0 0 -1 1 0 0 1 -1 0 0 1 -1 0zm-1 -1l-1 -1 1 0 0 1zm-2 -2l0 0 0 0 0 0zm-1 -1l-1 -1 0 0 1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 1 0 0zm-2 -2l0 0 0 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 -1 0 0 1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 0zm-1 -1l0 0 0 0 0 0 0 0zm1 -1l0 0 0 0 0 0zm1 -1l0 0 0 0 0 0zm5 -4c0,0 1,0 1,0l0 1 -1 0 0 -1zm1 0c0,0 1,0 1,-1l0 1 -1 0zm4 -2c0,0 1,0 1,0l0 0 0 0c0,0 1,0 1,0l0 0 -1 0 0 1 -1 0 0 1 -1 0 0 -1 1 0 0 -1zm4 -1l1 0 0 0 0 0c0,0 1,0 1,0l0 0 -1 0 0 1 -1 0 0 1 -1 0 0 -1 1 0 0 -1zm4 -1c0,0 1,0 1,0l0 1 -1 0 0 1 -1 0 0 1 -1 0 0 -1 1 0 0 -1 1 0 0 -1zm3 0c0,0 1,0 1,0l0 1 -1 0 0 1 -1 0 0 1 -1 0 0 -1 1 0 0 -1 1 0 0 -1zm3 0c0,1 1,1 1,1l0 0 -1 0 0 1 -1 0 0 1 -1 0 0 -1 1 0 0 -1 1 0 0 -1zm3 1l1 0 -1 0 0 1 0 0 0 0 -1 0 0 1 0 0 0 0 -1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 -1 0 0 0 0 1 0 0 -1 0 0 0 0 1 0 0 0zm2 0c0,0 1,1 1,1l0 0 0 0 0 0 -1 0 0 1 0 0 0 0 -1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 -1 0 0 0 0 1 0 0 -1zm2 1c0,0 1,0 1,0l0 1 0 0 0 0 -1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 -1 0 0 0 0 0 0zm3 1l0 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0zm2 1l0 0 0 1 -1 0 0 1 -1 0 0 -1 1 0 0 -1 1 0zm2 1l0 0 0 1 -1 0 0 -1 1 0zm1 1c0,0 1,0 1,1l0 0 -1 0 0 -1 0 0zm2 1c0,0 1,1 1,1l-1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 -1zm2 2l0 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0zm-5 -2l1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 -1zm-3 0l1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 -1zm-3 0l1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 -1zm-1 10l1 0 0 1 -1 0 0 -1zm-3 0l1 0 0 1 -1 0 0 -1zm8 -11l1 0 0 1 -1 0 0 -1zm-11 11l1 0 0 1 -1 0 0 -1zm8 -11l1 0 0 1 -1 0 0 -1zm-11 11l1 0 0 1 -1 0 0 -1zm13 -1l1 0 0 1 -1 0 0 -1zm-21 -3l1 0 0 1 -1 0 0 -1zm6 -9l1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 -1zm-3 0l1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 -1zm-3 0l1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 -1zm-3 0l1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 -1zm10 -1l1 0 0 1 -1 0 0 -1zm-13 1l1 0 0 1 -1 0 0 -1zm2 10l1 0 0 1 -1 0 0 -1zm13 -1l1 0 0 1 -1 0 0 -1zm-5 -10l1 0 0 1 -1 0 0 -1zm-11 11l1 0 0 1 -1 0 0 -1zm13 -1l1 0 0 1 -1 0 0 -1zm-5 -10l1 0 0 1 -1 0 0 -1zm-11 11l1 0 0 1 -1 0 0 -1zm13 -1l1 0 0 1 -1 0 0 -1zm-5 -10l1 0 0 1 -1 0 0 -1zm18 15l1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 -1zm-3 0l1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 -1zm7 -1l1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 -1zm-14 11l1 0 0 1 -1 0 0 -1zm4 -1l1 0 0 1 -1 0 0 -1z"/>
  <circle class="cecha-obrazek-fill" cx="24" cy="38" r="8"/>
  <circle class="cecha-obrazek-2 fff" cx="24" cy="37" r="16"/>
  <circle class="cecha-obrazek-2 fff" cx="24" cy="38" r="26"/>
  <circle class="cecha-obrazek-2 " cx="24" cy="38" r="4"/>
 </g>
</svg>
                           
                    </div>
                </div>
             
                <div class="cecha-text">
               		<h3>Wi-fi<br>&nbsp;</h3>
                </div>
            </div>
             
     </div>
     <div  class="list-col-2 noclegi ">
        	<div class="link item-list menu-item">
             
                <div class="cecha-kolko">
                <div class="cecha-kolko-hover">
                        <svg xmlns="http://www.w3.org/2000/svg" xml:space="preserve" width="50px" height="50px" version="1.1" style="shape-rendering:geometricPrecision; text-rendering:geometricPrecision; image-rendering:optimizeQuality; fill-rule:evenodd; clip-rule:evenodd"
        viewBox="0 0 50 50"
         xmlns:xlink="http://www.w3.org/1999/xlink">
         
         <g id="Warstwa_x0020_1">
          <metadata id="CorelCorpID_0Corel-Layer"/>
          <circle class="cecha-kolko-svg" cx="25" cy="25" r="23"/>
         </g>
        </svg>
                </div>
                    <div class="cecha-obrazek">
                           <svg xmlns="http://www.w3.org/2000/svg" xml:space="preserve" width="50px" height="50px" version="1.1" style="shape-rendering:geometricPrecision; text-rendering:geometricPrecision; image-rendering:optimizeQuality; fill-rule:evenodd; clip-rule:evenodd"
viewBox="0 0 50 50"
 xmlns:xlink="http://www.w3.org/1999/xlink">
 
 <g id="Warstwa_x0020_1">
  <metadata id="CorelCorpID_0Corel-Layer"/>
  <path class="cecha-obrazek-2" d="M22 2c0,0 -2,3 0,5 2,1 1,4 0,5m-4 4l20 0 0 5m0 15l0 3c0,1 -1,2 -2,2l-12 0m-6 -15l0 -10m15 -14c0,0 -2,4 0,5 2,1 1,4 0,5m-5 -10c0,0 -2,4 -1,5 2,1 2,4 0,5m11 9l6 0c1,0 2,1 2,3l0 10c0,1 -1,2 -2,2l-6 0 0 -15zm-24 5c6,0 11,4 11,10 0,2 -1,4 -1,5l0 0c-2,4 -6,6 -10,6 -5,0 -10,-5 -10,-11 0,-6 5,-10 10,-10z"/>
  <path class="cecha-obrazek-1" d="M14 30c0,0 1,0 1,0l0 0 -1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 0zm18 -14l0 0 0 0 0 0 0 0zm2 0l1 0 0 0 -1 0 0 1 -1 0 0 1 -1 0 0 1 0 0 0 -1 0 0 0 -1 1 0 0 -1 1 0 0 0zm3 0l1 0 0 0 -1 0 0 0zm1 2l0 1 -1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 1 0 0 0 -1 0 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0zm0 3l0 1 -1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0zm0 3l0 1 -1 0 0 1 -1 0 0 -1 1 0 0 -1 1 0zm0 3l0 1 -1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 1 0 0 0 -1 0 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0zm0 3l0 1 -1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0zm0 3l0 1 -1 0 0 1 -1 0 0 1 -1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0zm0 3l0 1 -1 0 0 -1 1 0zm0 3l0 1 -1 0 0 1 -1 0 0 -1 1 0 0 -1 1 0zm-4 2l-1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 1zm-2 -1l0 -1 0 0 0 -1 1 0 0 -1 1 0 0 1 -1 0 0 1 -1 0 0 1 0 0zm0 -3l0 -1 0 0 0 1 0 0zm0 -6l0 -1 0 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 1 0 0zm0 -3l0 -1 0 0 0 1 0 0zm0 -6l0 -1 0 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 1 0 0zm3 4l1 0 0 1 -1 0 0 -1zm-3 0l1 0 0 1 -1 0 0 -1zm2 10l1 0 0 1 -1 0 0 -1zm-18 -6c1,0 1,0 1,0l0 1 -1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 -1 0 0zm2 1c0,0 1,1 1,1l0 0 0 0 0 0 -1 0 0 1 0 0 0 0 -1 0 0 1 0 0 0 0 -1 0 0 1 0 0 0 0 -1 0 0 1 0 0 0 0 -1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 1 0 0c-1,0 -1,-1 -1,-1l0 0 1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 -1 0 0 0 0 1 0 0 -1 0 0 0 0 1 0 0 -1 0 0 0 0 1 0 0 -1 0 0 0 0 1 0 0 -1 0 0 0 0 0 0zm2 2c0,0 0,0 0,1l0 0 0 0 0 0 -1 0 0 1 0 0 0 0 -1 0 0 1 0 0 0 0 -1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 -1 0 0 0 0 1 0 0 -1 0 0 0 0 1 0 0 -1 0 0 0 0 1 0zm0 2c0,0 0,1 0,1l0 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 0 0 0c0,0 -1,0 -1,0l0 0 1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 -1 0 0 0 0 0 0zm0 3c0,0 0,0 0,0l0 0 0 0zm0 1c0,0 -1,1 -1,1l0 0 0 0c0,0 0,1 -1,1l0 0 0 0c0,0 -1,1 -1,1l0 -1 1 0 0 -1 1 0 0 -1 1 0zm-3 3c-1,0 -1,0 -1,0l0 0 1 0zm-9 -3c0,0 0,0 0,0l0 -1 1 0 0 -1 1 0 0 1 -1 0 0 1 -1 0zm0 -2c0,0 0,-1 0,-1l0 0 0 0 0 1 0 0zm0 -3c0,0 0,0 0,-1l0 1 0 0zm0 -1c0,0 1,-1 1,-1l0 0 0 0c0,0 1,-1 1,-1l0 0 0 0c0,0 1,-1 1,-1l0 1 -1 0 0 1 -1 0 0 1 -1 0zm4 -3l0 0 0 0 0 0zm-2 6l1 0 0 1 -1 0 0 -1z"/>
 </g>
</svg>
                    </div>
                </div>
             
                <div class="cecha-text">
               		<h3>Śniadanie<br>&nbsp;</h3>
                </div>
            </div>
             <div class="link item-list oferta-item">
             
                <div class="cecha-kolko">
                <div class="cecha-kolko-hover">
                        <svg xmlns="http://www.w3.org/2000/svg" xml:space="preserve" width="50px" height="50px" version="1.1" style="shape-rendering:geometricPrecision; text-rendering:geometricPrecision; image-rendering:optimizeQuality; fill-rule:evenodd; clip-rule:evenodd"
        viewBox="0 0 50 50"
         xmlns:xlink="http://www.w3.org/1999/xlink">
         
         <g id="Warstwa_x0020_1">
          <metadata id="CorelCorpID_0Corel-Layer"/>
          <circle class="cecha-kolko-svg" cx="25" cy="25" r="23"/>
         </g>
        </svg>
                </div>
                    <div class="cecha-obrazek"> 
                    <svg xmlns="http://www.w3.org/2000/svg" xml:space="preserve" width="50px" height="50px" version="1.1" style="shape-rendering:geometricPrecision; text-rendering:geometricPrecision; image-rendering:optimizeQuality; fill-rule:evenodd; clip-rule:evenodd"
viewBox="0 0 50 50"
 xmlns:xlink="http://www.w3.org/1999/xlink">
 
 <g id="Warstwa_x0020_1">
  <metadata id="CorelCorpID_0Corel-Layer"/>
  <path class="cecha-obrazek-1" d="M16 11c0,0 -1,0 -1,0l0 0 1 0 0 0zm-2 0l0 0 0 1 -1 0 0 1 -1 0 0 1 -1 0c0,0 0,1 0,1l1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 -1 -1 0zm-3 6c0,0 0,1 0,1l1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 -1 0 0 0 -1 1 0 0 -1c1,0 1,0 1,1l0 0 -1 0 0 1 -1 0 0 1 0 0 0 -1 -1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0zm1 3c0,0 0,0 0,1l0 -1 1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 -1 0 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 0c0,0 0,0 0,0l0 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 1 0 0 0 -1 -1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 1 0 0zm1 2c0,0 0,1 0,1l0 -1 1 0 0 -1 -1 0 0 1 0 0zm0 2c0,0 0,1 0,1l1 0 0 -1 1 0 0 -1 1 0 0 -1 0 0 0 -1 1 0 0 1 -1 0 0 1 0 0 0 -1 -1 0 0 1 -1 0 0 1 -1 0zm0 2c0,0 0,0 0,0l0 0 0 0zm-1 1c0,0 0,0 -1,0l0 0 0 0 -1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 1 1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 0zm-4 1l-1 0 0 0 0 0c0,0 -1,0 -1,0l0 1 -1 0 0 1 -1 0 0 1 1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 0zm-4 3c0,0 0,0 0,0l0 0 0 0zm1 1c1,0 1,1 1,1l0 -1 -1 0 0 0zm3 1l0 0 0 0 1 0 0 -1 -1 0 0 1 0 0zm2 1c1,0 1,0 1,0l0 -1 1 0 0 -1 -1 0 0 1 -1 0 0 1zm3 0c1,0 1,0 1,0l0 -1 1 0 0 -1 1 0 0 -1 0 0 0 -1 0 0 0 0 1 0 0 -1 0 0 0 0 1 0 0 -1 0 0 0 0 1 0 0 -1 0 0 0 0 1 0 0 -1 0 0 0 0 1 0 0 -1 0 0 0 0 1 0 0 -1 0 0 0 0 1 0 0 -1 0 0 0 0 1 0 0 -1 0 0 0 0 1 0 0 -1 0 0 0 0 1 0 0 -1 0 0 0 0 1 0 0 1 0 0 0 0 -1 0 0 1 0 0 0 0 -1 0 0 1 0 0 0 0 -1 0 0 1 0 0 0 0 -1 0 0 1 0 0 0 0 -1 0 0 1 0 0 0 0 -1 0 0 1 0 0 0 0 -1 0 0 1 0 0 0 0 -1 0 0 1 0 0 0 0 -1 0 0 1 0 0 0 0 -1 0 0 1 0 0 0 0 -1 0 0 1 0 0 0 -1 -1 0 0 1 -1 0 0 1 -1 0 0 1zm3 -5l0 -1 0 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 1 0 0zm0 -3l0 -1 0 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 1 0 0zm0 -6l0 -1 0 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0c0,0 0,0 0,1l0 0 -1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 1 0 0zm5 -4l1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 -1zm3 0l1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 -1zm3 0l1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 -1zm3 0l1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 -1 1 0 0 -1 1 0 0 -1zm2 0l0 0c0,-1 0,-1 0,-1l0 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 1 0 0zm0 -3l0 0 0 0 0 0zm1 -1c0,0 0,0 0,0l0 0 0 0zm3 2l0 1 -1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0zm0 3l0 1 -1 0 0 1 -1 0 0 -1 1 0 0 -1 1 0zm0 3l0 1 -1 0 0 1 0 0 0 0 -1 0 0 1 0 0 0 0 -1 0 0 1 0 0 0 0 -1 0 0 1 0 0 0 0 -1 0 0 1 0 0 0 0 -1 0 0 1 0 0 0 0 -1 0 0 1 0 0 0 0 -1 0 0 1 0 0 0 0 -1 0 0 1 0 0 0 0 -1 0 0 1 0 0 0 0 -1 0 0 1 -1 0 0 1c0,0 0,0 -1,0l0 0 0 0c0,0 0,0 -1,0l0 0 1 0 0 -1 1 0 0 -1 1 0 0 -1 0 0 0 0 1 0 0 -1 0 0 0 0 1 0 0 -1 0 0 0 0 1 0 0 -1 0 0 0 0 1 0 0 -1 0 0 0 0 1 0 0 -1 0 0 0 0 1 0 0 -1 0 0 0 0 1 0 0 -1 0 0 0 0 1 0 0 -1 0 0 0 0 1 0 0 -1 0 0 0 0 1 0 0 -1 0 0 0 0 1 0zm0 3l0 1 -1 0 0 -1 1 0zm0 3l0 1 -1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 0c0,0 0,0 -1,0l0 0 1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0zm0 3l0 1 -1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 1c0,0 0,0 -1,0l0 -1 1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0zm0 3l0 1 -1 0 0 1c0,0 0,0 -1,0l0 -1 1 0 0 -1 1 0zm-9 1c0,0 0,0 -1,0l0 -1 1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 1zm-7 1c0,0 0,0 -1,0l0 -1 1 0 0 -1 1 0 0 -1 1 0 0 -1 0 0 0 0 1 0 0 -1 0 0 0 0 1 0 0 -1 0 0 0 0 1 0 0 -1 0 0 0 0 1 0 0 -1 0 0 0 0 1 0 0 -1 0 0 0 0 1 0 0 -1 0 0 0 0 1 0 0 -1 0 0 0 0 1 0 0 -1 0 0 0 0 1 0 0 -1 0 0 0 0 1 0 0 -1 0 0 0 0 1 0 0 1 0 0 0 0 -1 0 0 1 0 0 0 0 -1 0 0 1 0 0 0 0 -1 0 0 1 0 0 0 0 -1 0 0 1 0 0 0 0 -1 0 0 1 0 0 0 0 -1 0 0 1 0 0 0 0 -1 0 0 1 0 0 0 0 -1 0 0 1 0 0 0 0 -1 0 0 1 0 0 0 0 -1 0 0 1 0 0 0 0 -1 0 0 1 -1 0 0 1 -1 0 0 1zm-3 0c0,0 0,0 -1,0l0 -1 1 0 0 -1 1 0 0 -1 1 0 0 -1 0 0 0 0 1 0 0 -1 0 0 0 0 1 0 0 -1 0 0 0 0 1 0 0 -1 0 0 0 0 1 0 0 -1 0 0 0 0 1 0 0 -1 0 0 0 0 1 0 0 -1 0 0 0 0 1 0 0 -1 0 0 0 0 1 0 0 -1 0 0 0 0 1 0 0 -1 0 0 0 0 1 0 0 -1 0 0 0 0 1 0 0 1 0 0 0 0 -1 0 0 1 0 0 0 0 -1 0 0 1 0 0 0 0 -1 0 0 1 0 0 0 0 -1 0 0 1 0 0 0 0 -1 0 0 1 0 0 0 0 -1 0 0 1 0 0 0 0 -1 0 0 1 0 0 0 0 -1 0 0 1 0 0 0 0 -1 0 0 1 0 0 0 0 -1 0 0 1 0 0 0 0 -1 0 0 1 -1 0 0 1 -1 0 0 1zm-1 -5l0 -1 -1 0 0 1 -1 0 0 1 -1 0 0 1 1 0 0 -1 1 0 0 -1 1 0zm0 -3l0 -1 -1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 1 1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0zm0 -6l0 -1 -1 0 0 1 1 0zm0 -9l0 0c0,0 0,0 0,0l0 0 0 0zm20 0c0,0 1,0 1,0l0 0 -1 0 0 1 0 0 0 -1 0 0 0 0zm2 0c0,1 1,1 1,1l-1 0 0 1 -1 0 0 1 -1 0 0 1 0 0 0 -1 0 0 0 -1 1 0 0 -1 1 0 0 -1zm2 2c0,0 0,1 0,1l-1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 1 0 0 0 -1 0 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0zm0 2c0,0 0,0 0,1l0 0 0 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 -1 0 0zm0 4c0,0 0,1 0,1l-1 0 0 1c0,0 0,0 0,0l0 0 -1 0 0 1 -1 0 0 1 -1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0zm-2 4c0,0 0,1 0,1l0 -1 0 0zm0 1c0,0 0,1 0,1l0 0 -1 0 0 1 -1 0 0 1 0 0 0 -1 0 0 0 -1 1 0 0 -1 1 0zm1 2c0,0 0,0 0,0 0,0 0,0 0,0l0 1 -1 0 0 1 -1 0 0 1 -1 0 0 1 0 0 0 -1 0 0 0 -1 1 0 0 -1 1 0 0 -1 1 0zm2 1l0 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 1 0 0 0 -1 0 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0zm2 1l1 0 0 0 -1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 0zm2 0c1,0 1,1 1,1l0 0 0 0 -1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 -1zm2 2c0,0 0,0 1,0l-1 0 0 1 -1 0 0 1 -1 0 0 1c0,0 0,0 -1,0l0 -1 1 0 0 -1 1 0 0 -1 1 0 0 0zm-3 3l-1 0 0 0 1 0zm-3 1c0,0 0,0 -1,0l0 -1 1 0 0 1zm-3 0c0,0 0,0 -1,0l0 -1 1 0 0 1zm-2 -10l0 -1 0 0 0 1 0 0zm0 -3l0 -1 0 0 0 1 0 0 0 0 0 0zm-9 -2l1 0 0 1 -1 0 0 -1zm-4 1l1 0 0 1 -1 0 0 -1zm13 -1l1 0 0 1 -1 0 0 -1zm-16 1l1 0 0 1 -1 0 0 -1zm13 -1l1 0 0 1 -1 0 0 -1zm-16 1l1 0 0 1 -1 0 0 -1zm13 -1l1 0 0 1 -1 0 0 -1zm-16 1l1 0 0 1 -1 0 0 -1zm-2 11l1 0 0 1 -1 0 0 -1zm-3 0l1 0 0 1 -1 0 0 -1zm-3 0l1 0 0 1 -1 0 0 -1z"/>
  <path class="cecha-obrazek-fill" d="M27 7c0,0 -8,1 -8,7 0,6 3,7 3,7 0,0 1,4 -2,6 -2,1 -8,3 -9,4 -1,0 -1,3 0,5 1,2 11,2 16,2l0 -31zm0 0c0,0 7,1 7,7 0,6 -1,6 -2,7 0,1 -1,5 1,5 1,1 7,3 8,3 1,1 3,5 2,7 -1,2 -12,2 -16,2l0 -31z"/>
  <path class="cecha-obrazek-2" d="M27 9c0,0 -6,0 -6,6 0,6 2,6 2,6 0,0 2,5 0,7 -2,1 -8,2 -9,3 0,0 -3,2 0,4 3,1 10,2 13,2m0 -28c0,0 5,0 5,6 0,6 -2,6 -2,6 0,0 -2,5 0,7 2,1 8,2 9,3 0,0 3,2 0,4 -3,1 -10,2 -12,2"/>
 </g>
</svg>
                           
                    </div>
                </div>
             
                <div class="cecha-text">
               		<h3>Miejsca<br>
do 25 os.</h3>
                </div>
            </div>
             
     </div>
        </div> 
        <div class="clearfix"></div>
        <span class="rozek-1"><svg xmlns="http://www.w3.org/2000/svg" xml:space="preserve" width="24px" height="24px" version="1.1" style="shape-rendering:geometricPrecision; text-rendering:geometricPrecision; image-rendering:optimizeQuality; fill-rule:evenodd; clip-rule:evenodd"
viewBox="0 0 24 24"
 xmlns:xlink="http://www.w3.org/1999/xlink">
 
 <g id="Warstwa_x0020_1">
  <metadata id="CorelCorpID_0Corel-Layer"/>
  <rect class="fil0 rozek-zaslaniacz" x="-9" y="-6" width="46.0037" height="33.0032"/>
  <path class="fil1 str0 rozek-linia" d="M0 23c12,-1 23,-11 23,-24l1 0"/>
 </g>
</svg></span>
        <span class="rozek-2"><svg xmlns="http://www.w3.org/2000/svg" xml:space="preserve" width="24px" height="24px" version="1.1" style="shape-rendering:geometricPrecision; text-rendering:geometricPrecision; image-rendering:optimizeQuality; fill-rule:evenodd; clip-rule:evenodd"
viewBox="0 0 24 24"
 xmlns:xlink="http://www.w3.org/1999/xlink">
 
 <g id="Warstwa_x0020_1">
  <metadata id="CorelCorpID_0Corel-Layer"/>
  <rect class="fil0 rozek-zaslaniacz" x="-9" y="-6" width="46.0037" height="33.0032"/>
  <path class="fil1 str0 rozek-linia" d="M0 23c12,-1 23,-11 23,-24l1 0"/>
 </g>
</svg></span>
        <span class="rozek-3"><svg xmlns="http://www.w3.org/2000/svg" xml:space="preserve" width="24px" height="24px" version="1.1" style="shape-rendering:geometricPrecision; text-rendering:geometricPrecision; image-rendering:optimizeQuality; fill-rule:evenodd; clip-rule:evenodd"
viewBox="0 0 24 24"
 xmlns:xlink="http://www.w3.org/1999/xlink">
 
 <g id="Warstwa_x0020_1">
  <metadata id="CorelCorpID_0Corel-Layer"/>
  <rect class="fil0 rozek-zaslaniacz" x="-9" y="-6" width="46.0037" height="33.0032"/>
  <path class="fil1 str0 rozek-linia" d="M0 23c12,-1 23,-11 23,-24l1 0"/>
 </g>
</svg></span>
        <span class="rozek-4"><svg xmlns="http://www.w3.org/2000/svg" xml:space="preserve" width="24px" height="24px" version="1.1" style="shape-rendering:geometricPrecision; text-rendering:geometricPrecision; image-rendering:optimizeQuality; fill-rule:evenodd; clip-rule:evenodd"
viewBox="0 0 24 24"
 xmlns:xlink="http://www.w3.org/1999/xlink">
 
 <g id="Warstwa_x0020_1">
  <metadata id="CorelCorpID_0Corel-Layer"/>
  <rect class="fil0 rozek-zaslaniacz" x="-9" y="-6" width="46.0037" height="33.0032"/>
  <path class="fil1 str0 rozek-linia" d="M0 23c12,-1 23,-11 23,-24l1 0"/>
 </g>
</svg></span>


        </div>   
    </section>
            </div>
            <div class="col-23">
                <div id="kategorie-oferta-lista" class="noclegi">
                    <ul>
                    	<li class="disable">POKOJE: </li>
                        <li  ng-class="{active: isActive(el_lista_cat)}"  ng-click="filtr_listaofert.category = el_lista_cat.ofertanazwa; select(el_lista_cat)" ng-repeat="el_lista_cat in listadan.oferta_array ">{{el_lista_cat.ofertanazwa}}</li>
                    </ul>
                     
                </div>
                <div id="lista-oferta-lista"> 
                    <div  ng-repeat="el_listadan in listadan.oferta_array  | filter:filtr_listaofert.category | limitTo:1">
                      
        <div class="oferta_cena col-3">
        	<div class="col-rwd">
            <h3 class="naglowek-oferty">Cena za noc:</h3>
             {{el_listadan.cena}}  
               <h3 class="naglowek-oferty">Śniadanie:</h3>
            <?php the_field('nocleg_sniadanie',$page_id);?><span>zł/os.</span>
             </div>
             <p class="male-info"><?php the_field('noclegipage_info', $page_id); ?></p>
         </div>
         <div id="zdjecia-oferty-nocleg" class="col-23">
         	<img src="{{el_listadan.img1}}"/>
            <img class="img-noclegi2" src="{{el_listadan.img2}}"/>
         </div>
         
           <div class="clearfix"></div>
                    </div>
                    
                </div>
            </div>
         </div>
    </section>  
    
 <?php echo get_template_part("parts/part","galeria");?> 
    <?php echo get_template_part("parts/part","cechyrestauracji");?> 
    <?php echo get_template_part("parts/part","paseksocialmedia");?> 
</main>
  <?php get_footer();?>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.1/angular.min.js"></script>
 <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.1/angular-animate.js"></script>
 <script type="text/javascript" src="<?php echo TEMPL;?>/js/scrollbar.min.js"></script>
 
      <script type="text/javascript">
	$(document).ready(function(e) {
     
			$('#lista-dania-lista').scrollbar();
	 
    });
      var menudania =angular.module("listaofert",["ngAnimate"]);
	  menudania.controller("listaofert_c",['$scope', function($scope){
		 	 var aktywne_danie=0;
			 $scope.select= function(item) {
        $scope.selected = item; 
			 };
			
			 $scope.isActive = function(item) {
					return $scope.selected === item;
			 };

			$scope.filtr_listaofert = {};
		 
	  		$scope.listadan = {
							"oferta_array":[

                  <?php   for ($i=1; $i <= 6; $i++) {
                    $noclegnazwa=get_field('noclegi_nazwa_'.$i,$page_id);
                    if($noclegnazwa){
                    ?>
                    {
                    "ofertanazwa": "<?php echo $noclegnazwa;?>",
                    "cena": "<?php the_field('noclegi_cena_'.$i,$page_id); ?> zł",
                     "img1":"<?php the_field('noclegi_img_'.$i,$page_id); ?>",
                     "img2":"<?php the_field('noclegi_img2_'.$i,$page_id); ?>",

                    },
                   <?php };};?>
								 ]



						};

	  }]);
      </script>
 
