<?php /*Template Name: Strona główna*/?>
<?php get_header();?> 
  <main class="mainwrapper">
  <?php echo get_template_part("parts/part","banner");?>
         <section class="main-section start-anim padbot-fix ">
     	   <div class="col-1 text-box-sekcja centeralign">
        	<h2><?php the_field('homepage_h2'. $page_id);?></h2>
         
            <div class="romby">
            	<span></span><span></span><span></span>
            </div>
            <p><?php the_field('homepage_p'. $page_id);?></p>
            <a class="link-more" href="<?php the_field('homepage_link'. $page_id);?>">Przeczytaj więcej</a>
        </div>
        	<div class="clearfix"></div>
        </section>
    <?php echo get_template_part("parts/part","ofertalista");?> 

    <section  id="dania-lista-box">
    	<section class="main-section hide-sekcja">
     	   <div class="col-1 text-box-sekcja centeralign">
        	<h2><?php the_field('restauracja_menu_h2', ID_RESTAURACJA);?></h2>
            <div class="romby">
            	<span></span><span></span><span></span>
            </div>
            <p><?php the_field('restauracja_menu_p', ID_RESTAURACJA);?></p>
       
        </div>
        	<div class="clearfix"></div>
        </section>

    	 <div id="dania-lista" ng-app="menudania" ng-controller="listadan" class=" hide-sekcja">
       		<div id="zdjecie-dania-lista">
				<div  ng-repeat="el_listadan in listadan.listadan_array  | filter:filtr_listadan.category" style="background-image:url( {{el_listadan.kategorialink}} );" ></div>
            </div>
        	<div id="kategorie-dania-lista">
            	<ul>
                	<li  ng-class="{active: isActive(el_lista_cat)}"  ng-click="filtr_listadan.category = el_lista_cat.kategorianazwa; select(el_lista_cat)" ng-repeat="el_lista_cat in listadan.listadan_array ">{{el_lista_cat.kategorianazwa}}</li>
				</ul>
                 <input type="search" ng-model="filtr_danie.category" placeholder="Wyszukaj danie..." aria-label="filter friends" />
            </div>
            <div id="lista-dania-lista"> 
            	<ul  ng-repeat="el_listadan in listadan.listadan_array  | filter:filtr_listadan.category">

                        	<li ng-repeat="el_listadan2 in el_listadan.dania | filter:filtr_danie.category">
                          <div class="nazwa-lista-dani"> {{el_listadan2.danienazwa}}</div>
                    	<div class="cena-lista-dani">{{el_listadan2.daniecena}}</div>
                        <div class="clearfix"></div>
                    </li>
                   
                </ul>

            </div>
         </div>
    </section>

    <?php echo get_template_part("parts/part","cechyrestauracji_short");?> 
    
    <?php echo get_template_part("parts/part","paseksocialmedia");?> 
    
    
</main>
 <?php get_footer();?>

 <?php $page_id=ID_RESTAURACJA;?>

    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.1/angular.min.js"></script>
 <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.1/angular-animate.js"></script>
 <script type="text/javascript" src="<?php echo TEMPL;?>/js/scrollbar.min.js"></script>
 
      <script type="text/javascript">
	$(document).ready(function(e) {
     
			$('#lista-dania-lista').scrollbar();
	 
    });
      var menudania =angular.module("menudania",["ngAnimate"]);
	  menudania.controller("listadan",['$scope', function($scope){
		 	 var aktywne_danie=0;
			 $scope.select= function(item) {
        $scope.selected = item; 
			 };
			
			 $scope.isActive = function(item) {
					return $scope.selected === item;
			 };

			$scope.filtr_listadan = {};
			$scope.filtr_danie = {};
	  		$scope.listadan = {


 	

							"listadan_array":[
								<?php 

 	for ($i=1; $i <= 20; $i++) {
 	 $kategorianazwa=get_field('kategoria_dan_'.$i,$page_id);
 		if($kategorianazwa){
 		$kategoriaimg=get_field('kategoria_dan_Img_'.$i,$page_id);
		$lista_dan=preg_split('/<br[^>]*>/i', get_field('kategoria_dan_listadan_'.$i,$page_id));?>
								{

								"kategorianazwa": "<?php echo $kategorianazwa;?>",
								"kategorialink": "<?php echo $kategoriaimg;?>",
								"dania":[
										

										 <?php
										if($lista_dan){
									 	foreach($lista_dan as $danie){
											$danie_pos=strpos( $danie, ':');
											$danie_nazwa= trim(preg_replace('/\s\s+/', ' ',substr ($danie,0,$danie_pos)));
											$danie_cena=substr ($danie,$danie_pos+1);
										  if($danie_nazwa){
                    ?>{
                    "danienazwa": "<?php echo $danie_nazwa;?>",
                    "daniecena": "<?php echo $danie_cena;?> zł"
                     }, 

                    <?php
                    };

									 	};};?>
										 ]									 

								},

		<?php
	};};
 	?>

								 ]



						};

	  }]);
      </script>
