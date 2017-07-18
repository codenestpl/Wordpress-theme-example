<?php get_header();?> 
<main class="mainwrapper">
	 <?php echo get_template_part("parts/part","banner");?>
       <?php echo get_template_part("parts/part","pasekkontakt");?> 
  <?php echo get_template_part("parts/part","karuzela");?> 
  
 



  <section  id="oferta-lista-box" class="przyjecia">

       <div id="oferta-lista" ng-app="listaofert" ng-controller="listaofert_c" class=" hide-sekcja przyjecia">


 <?php 
$link_pdf= get_field('zachowajoferte_pdf_oferta', $page_id);
$link_menu= get_field('zachowajoferte_pdf_menu', $page_id);

 if($link_pdf || $link_menu){
 
 ?>      
          <div class="col-3" id="oferta-ozdobna-lista">
         <section  class="main-section ozdobna hide-sekcja">
      <div class="ozdobna-wrap">
      <div class="col-1 text-box-sekcja centeralign">
          <h2>Zachowaj ofertę</h2>
            <div class="romby">
              <span></span><span></span><span></span>
            </div>
            <p class="maly-ozdobny"><?php the_field('zachowajoferte_p', $page_id);?></p>
         <div  class="list-col-2 hide-sekcja">
          <div class="link item-list menu-item">

              <a target="_blank" href="<?php echo $link_pdf;?>"></a>
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
  <polyline class="cecha-obrazek-2" points="19,42 10,42 10,2 31,2 41,12 41,42 31,42 "/>
  <path class="cecha-obrazek-1" d="M31 4l0 1 1 0 0 -1 0 0 0 0 0 0 -1 0zm0 3l0 1 1 0 0 -1 -1 0zm0 1l0 1 0 0 0 -1zm0 3l0 1 0 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 -1 -1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 1 0 0zm1 2l1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 -1 -1 0 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 1zm3 0l1 0 0 -1 1 0 0 -1 1 0 0 -1 0 0 -1 0 0 1 -1 0 0 1 -1 0 0 1zm2 0l1 0 0 0 1 0 0 -1 1 0 -1 -1 0 1 -1 0 0 1 -1 0 0 0zm3 0l1 0 0 0 -1 0 0 0zm-5 -6l0 0 0 0 0 0zm-1 -1l-1 -1 0 0 0 1 1 0 0 0zm-2 0l1 0 0 1 -1 0 0 -1z"/>
  <path class="cecha-obrazek-fill2" d="M20 24c0,0 0,1 0,2 0,0 0,1 1,1 0,1 0,1 0,2 1,0 1,1 1,1 1,0 1,1 2,1 0,0 1,0 1,0 1,0 1,0 2,0 0,0 1,-1 1,-1 1,0 1,-1 1,-1 0,0 1,-1 1,-1 0,-1 0,-1 0,-2 0,0 0,-1 0,-1 0,-1 0,-1 0,-2 0,-1 0,-1 0,-2 0,0 -1,-1 -1,-1 0,-1 -1,-1 -1,-1 0,-1 -1,-1 -1,-1 -1,0 -1,0 -2,0 -1,0 -1,0 -2,0 -1,1 -1,1 -2,2 0,0 0,1 -1,2 0,0 0,1 0,2zm-2 0c0,0 0,-1 0,-1 0,-1 1,-2 1,-2 0,-1 0,-1 1,-2 0,0 1,-1 1,-1 1,0 1,-1 2,-1 1,0 1,0 2,0 1,0 2,0 2,0 1,0 2,1 2,1 1,0 1,1 2,1 0,1 0,1 1,2 0,0 0,1 0,2 0,0 1,1 1,1 0,1 -1,2 -1,2 0,1 0,1 0,2 -1,0 -1,1 -1,1 -1,1 -1,1 -2,2 0,0 -1,0 -1,1 -1,0 -2,0 -3,0 -1,0 -1,0 -2,0 -1,-1 -1,-1 -2,-1 0,-1 -1,-1 -1,-2 -1,0 -1,-1 -1,-1 -1,-1 -1,-1 -1,-2 0,0 0,-1 0,-2z"/>
  <path class="cecha-obrazek-fill2" d="M23 38l0 6 -2 0 4 6 5 -6 -2 0 0 -6 -5 0zm0 3m-1 3m1 3m5 0m1 -3m-1 -3m-3 -3"/>
 </g>
</svg>
                    </div>
                </div>
             
                <div class="cecha-text">
                  <h3>Oferta</h3>
                </div>
            </div>
             <div class="link item-list oferta-item">
                            <a target="_blank" href="<?php echo $link_menu;?>"></a>
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
  <polyline class="cecha-obrazek-2" points="19,42 10,42 10,2 31,2 41,12 41,42 31,42 "/>
  <path class="cecha-obrazek-1" d="M31 4l0 1 1 0 0 -1 0 0 0 0 0 0 -1 0zm0 3l0 1 1 0 0 -1 -1 0zm0 1l0 1 0 0 0 -1zm0 3l0 1 0 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 -1 -1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 1 0 0zm1 2l1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 0 -1 1 0 -1 -1 0 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 1 -1 0 0 1zm3 0l1 0 0 -1 1 0 0 -1 1 0 0 -1 0 0 -1 0 0 1 -1 0 0 1 -1 0 0 1zm2 0l1 0 0 0 1 0 0 -1 1 0 -1 -1 0 1 -1 0 0 1 -1 0 0 0zm3 0l1 0 0 0 -1 0 0 0zm-5 -6l0 0 0 0 0 0zm-1 -1l-1 -1 0 0 0 1 1 0 0 0zm-2 0l1 0 0 1 -1 0 0 -1z"/>
  <path class="cecha-obrazek-fill2" d="M17 17l3 0c1,1 1,2 2,3 0,1 1,2 1,3 0,1 1,2 1,3 1,1 1,2 2,3l0 0c0,0 0,0 0,-1 0,0 0,0 0,0 0,-1 0,-1 0,-1 0,0 1,0 1,-1 0,-1 1,-3 2,-4 0,-2 1,-3 1,-5l4 0 0 1c-1,0 -1,0 -1,0 0,0 -1,0 -1,0 0,0 0,1 0,1 0,0 0,1 0,1l1 9c0,1 0,1 0,1 0,0 0,1 0,1l1 0 0 1 -4 0 0 -1c0,0 0,0 0,0 0,0 1,-1 1,-1 0,0 0,0 0,-1 0,0 0,0 0,-1l-1 -8c0,0 0,0 0,0 0,0 0,0 0,0l-5 12 0 0c-1,-1 -1,-2 -2,-3 0,-1 0,-2 -1,-3 0,-1 -1,-2 -1,-3 -1,-1 -1,-2 -1,-4l0 1c0,1 0,1 -1,2 0,0 0,0 0,1 0,0 0,1 0,1 0,1 0,1 0,2 0,0 0,1 0,2 0,0 0,1 0,1 0,0 0,1 0,1 0,0 0,0 0,1l2 0 0 1 -4 0 0 -1c0,0 0,0 1,0 0,0 0,-1 0,-1 0,0 0,0 0,0 0,-1 0,-1 0,-1l1 -11 -2 0 0 -1z"/>
  <path class="cecha-obrazek-fill2" d="M23 38l0 6 -2 0 4 6 5 -6 -2 0 0 -6 -5 0zm0 3m-1 3m1 3m5 0m1 -3m-1 -3m-3 -3"/>
 </g>
</svg>
                           
                    </div>
                </div>
             
                <div class="cecha-text">
                  <h3>Menu</h3>
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

 <?php };?>

 <?php if(get_field("nazwa_oferty_1", $page_id)){?>
            <div class="<?php echo  ($link_pdf || $link_menu)?'col-23':'col-1 pojOferta';?>">
                <div id="kategorie-oferta-lista">
                    <ul>
                        <li  ng-class="{active: isActive(el_lista_cat)}"  ng-click="filtr_listaofert.category = el_lista_cat.ofertanazwa; select(el_lista_cat)" ng-repeat="el_lista_cat in listadan.oferta_array ">{{el_lista_cat.ofertanazwa}}</li>
                    </ul>
                     
                </div>
                <div id="lista-oferta-lista"> 
                    <div  ng-repeat="el_listadan in listadan.oferta_array  | filter:filtr_listaofert.category | limitTo:1">
                      <h3 class="naglowek-oferty">Szczegóły oferty:</h3>
                     <ul class="szczegoly_oferty col-23">
        
            <li ng-repeat="el in el_listadan.szczegoly track by $index">{{el}}</li>
          </ul>
        <div class="oferta_cena col-3">
            <h3 class="naglowek-oferty">Cena:</h3>
             {{el_listadan.cena}} <span>zł/os.</span>
         </div>
         
         
           <div class="clearfix"></div>
                    </div>
                    <div class="clearfix"></div> 
                </div>
                  <div class="clearfix"></div>
            </div>
              <div class="clearfix"></div>
         </div>
 
 <?php };?>

 <?php if(get_field("ofertaszczegoly_h2", $page_id)){?>

      <section class="main-section hide-sekcja nopadTop">
         <div class="col-1 text-box-sekcja centeralign">
          <h2><?php the_field("ofertaszczegoly_h2", $page_id);?></h2>
            <div class="romby">
              <span></span><span></span><span></span>
            </div>
            <p><?php the_field("ofertaszczegoly_p", $page_id);?></p>
       
        </div>
          <div class="clearfix"></div>
        </section>
 <?php };?>

<?php if(get_field("listazapewniamy", $page_id) || get_field("listaniezapewniamy", $page_id)|| get_field("listaoferujemy", $page_id)){?>

 
  <section class="main-section hide-sekcja nopadBot <?php echo (get_field("ofertaszczegoly_h2", $page_id))?'nopadTop':'';?>">



         <div class="col-1 text-box-sekcja centeralign">
          
<?php if(get_field("listazapewniamy", $page_id)){?>
          <h3>W ramach ustalonej ceny zapewniamy</h3>
            <div class="romby">
              <span></span><span></span><span></span>
            </div>
            <ul class="zapewniamy-lista">
            <?php  
            $lista="\n".get_field("listazapewniamy", $page_id);
            $lista=rtrim(str_replace("\n", '&', $lista),'&');            
            $lista = preg_split('/&-/',$lista);
            foreach($lista as $el){
                echo '<li>'.$el.'</li>';
            }; 
            ?>
              
            </ul>
<?php };?>
<?php if(get_field("listaniezapewniamy", $page_id)){?>
            <h3>W ramach ustalonej ceny nie zapewniamy</h3>
            <div class="romby">
              <span></span><span></span><span></span>
            </div>

            <ul class="zapewniamy-lista nie">
            <?php  
            $lista="\n".get_field("listaniezapewniamy", $page_id);
            $lista=rtrim(str_replace("\n", '&', $lista),'&');            
            $lista = preg_split('/&-/',$lista);
            foreach($lista as $el){
                echo '<li>'.$el.'</li>';
            }; 
            ?>              
            </ul>
 <?php };?> 

      
       
        </div>
          <div class="clearfix"></div>
        </section>

 <?php };?>


           <div class="clearfix"></div>
    </section>



   
		 <?php echo	get_template_part("parts/part","section_text"); ?> 
       <?php echo get_template_part("parts/part","wirtualnyspacer");?> 
      <?php echo get_template_part("parts/part","galeria");?> 
   <?php echo get_template_part("parts/part","cechyrestauracji_short");?> 


 <?php if(get_field("listaoferujemy", $page_id)){?>
         <section class="main-section hide">
          <div class="col-1 text-box-sekcja centeralign">
            <h3 class="list_h3"><?php the_field("listaoferujemy_h2", $page_id);?></h3>
            <div class="romby">
              <span></span><span></span><span></span>
            </div>

            <ul class="zapewniamy-lista oferujemy">
            <?php  
            $lista="\n".get_field("listaoferujemy", $page_id);
            $lista=rtrim(str_replace("\n", '&', $lista),'&');            
            $lista = preg_split('/&-/',$lista);
            foreach($lista as $el){
                echo '<li>'.$el.'</li>';
            }; 
            ?>              
            </ul>
            <div class="clearfix"></div>
            </div>
            <div class="clearfix"></div>
          </section>
 <?php };?> 

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


              <?php  
      for($i=0;$i<=10;$i++){
        $nazwaoferty = get_field('nazwa_oferty_'.$i, $page_id);
        if(!empty($nazwaoferty )){?>

 

                {

                "ofertanazwa": "<?php echo  $nazwaoferty;?>",
                "cena": "<?php  the_field('cenaoferty_'.$i, $page_id); ?>",
                "szczegoly":[

 <?php  
            $lista="\n".get_field("listaoferty_".$i, $page_id);
            $ser=array("\n","<br>","<br />","<br/>","</br>");
            $lista=str_replace( $ser, '&', $lista);
             $lista=str_replace( '&&', '&', $lista);
                  
            $lista = preg_split('/&-/',$lista);
             $lista=str_replace( '&', '', $lista);
            foreach($lista as $el){
              if(strlen($el)>1){
                echo '"'.trim(preg_replace('/\s\s+/', ' ',$el)).'",';
              };
            }; 
            ?>


                ], 
                },



        <?php  }; 
      };    
     ?>




								]



						};

	  }]);
      </script>
 
