 <?php /*Template Name: Kontakt*/?>
<?php get_header();?> 
<main class="mainwrapper">
  <?php echo get_template_part("parts/part","banner");?>
     <section id="kontakt-group">
     <div class="col-23 main-kontakt">
     <section class="main-section ">
     	   <div class="col-1 text-box-sekcja centeralign">
        	<h2><?php the_field('kontaktpage_h2',$page_id);?></h2>
            <div class="romby">
            	<span></span><span></span><span></span>
            </div>
            <p><?php the_field('kontaktpage_p',$page_id);?></p>
            
        </div>
        	<div class="clearfix"></div>
            <div id="kontakt-col-info">



            	


           		<div class="col-2">
                	<h3>Manager</h3>
                    <p class="kontakt-p">
                      <?php the_field('kontakt_kolumna_1', $page_id);?>
                    </p>
                </div>

                <div class="col-2">
                  <h3>Specjalista ds. marketingu </h3>
                    <p class="kontakt-p">
                      <?php the_field('kontakt_kolumn_2', $page_id);?>
                    </p>
                </div>
                <div style=" height: 20px;" class="clearfix"></div>

                <div class="col-2">
                  <h3>Adres</h3>
                    <p class="kontakt-p">
                    <?php echo get_option("adres_dane");?><br>
                    <a href="mailto:<?php echo get_option("email_dane");?>"><?php echo get_option("email_dane");?></a><br>        
                    <?php echo get_option("telefon2_dane");?>
                    </p>
                </div> 

                <div class="col-2">
                	<h3>Godziny otwarcia dla gości indywidulanych </h3>
                    <p class="kontakt-p">
                  Poniedziałek             nieczynne<br>
        Wtorek - Niedziela   <?php echo get_option("godzinyotwarcia_dane");?>
                    </p>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="clearfix"></div>
        </section>
         <section class="main-section hide-sekcja">
     	   <div class="col-1 text-box-sekcja centeralign">
           <h2>Formularz kontaktowy</h2>
            <div class="romby">
            	<span></span><span></span><span></span>
            </div>
            <div id="formularz-kontaktowy">
            <?php echo do_shortcode('[contact-form-7 id="320" title="Formularz 1"]' );?>
            </div>
            <div class="clearfix"></div>
           </div>
        <div class="clearfix"></div>
        </section>
          
     </div>
     
     <div class="col-3 ruchomy-pasek-box ">
     	<div class="ruchomy-pasek">
        	<section id="newsletter-box" class="main-section  ozdobny-c">
     	   <div class="col-1 text-box-sekcja centeralign">
           <h2>Zostań z Restauracją 
Tiffany dłużej!</h2>
            <div class="romby">
            	<span></span><span></span><span></span>
            </div>
             <p>Odwiedź nasze profile na:  </p>
            <div class="clearfix"></div>
            <div class="pasek-socialmedia ">
           <div class="social-box">
    	<a class="instagram" href="<?php echo get_option("instagram_link");?>">
        	<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
	<path
 
		d="M256,49.471c67.266,0,75.233.257,101.8,1.469,24.562,1.121,37.9,5.224,46.778,8.674a78.052,78.052,0,0,1,28.966,18.845,78.052,78.052,0,0,1,18.845,28.966c3.45,8.877,7.554,22.216,8.674,46.778,1.212,26.565,1.469,34.532,1.469,101.8s-0.257,75.233-1.469,101.8c-1.121,24.562-5.225,37.9-8.674,46.778a83.427,83.427,0,0,1-47.811,47.811c-8.877,3.45-22.216,7.554-46.778,8.674-26.56,1.212-34.527,1.469-101.8,1.469s-75.237-.257-101.8-1.469c-24.562-1.121-37.9-5.225-46.778-8.674a78.051,78.051,0,0,1-28.966-18.845,78.053,78.053,0,0,1-18.845-28.966c-3.45-8.877-7.554-22.216-8.674-46.778-1.212-26.564-1.469-34.532-1.469-101.8s0.257-75.233,1.469-101.8c1.121-24.562,5.224-37.9,8.674-46.778A78.052,78.052,0,0,1,78.458,78.458a78.053,78.053,0,0,1,28.966-18.845c8.877-3.45,22.216-7.554,46.778-8.674,26.565-1.212,34.532-1.469,101.8-1.469m0-45.391c-68.418,0-77,.29-103.866,1.516-26.815,1.224-45.127,5.482-61.151,11.71a123.488,123.488,0,0,0-44.62,29.057A123.488,123.488,0,0,0,17.3,90.982C11.077,107.007,6.819,125.319,5.6,152.134,4.369,179,4.079,187.582,4.079,256S4.369,333,5.6,359.866c1.224,26.815,5.482,45.127,11.71,61.151a123.489,123.489,0,0,0,29.057,44.62,123.486,123.486,0,0,0,44.62,29.057c16.025,6.228,34.337,10.486,61.151,11.71,26.87,1.226,35.449,1.516,103.866,1.516s77-.29,103.866-1.516c26.815-1.224,45.127-5.482,61.151-11.71a128.817,128.817,0,0,0,73.677-73.677c6.228-16.025,10.486-34.337,11.71-61.151,1.226-26.87,1.516-35.449,1.516-103.866s-0.29-77-1.516-103.866c-1.224-26.815-5.482-45.127-11.71-61.151a123.486,123.486,0,0,0-29.057-44.62A123.487,123.487,0,0,0,421.018,17.3C404.993,11.077,386.681,6.819,359.866,5.6,333,4.369,324.418,4.079,256,4.079h0Z"/>
	<path
	 
		d="M256,126.635A129.365,129.365,0,1,0,385.365,256,129.365,129.365,0,0,0,256,126.635Zm0,213.338A83.973,83.973,0,1,1,339.974,256,83.974,83.974,0,0,1,256,339.973Z"/>
	<circle
		 
		cx="390.476" cy="121.524" r="30.23"/>
</svg>
			<div class="kolko-hover">
            
            <svg xmlns="http://www.w3.org/2000/svg" xml:space="preserve" width="50px" height="50px" version="1.1" style="shape-rendering:geometricPrecision; text-rendering:geometricPrecision; image-rendering:optimizeQuality; fill-rule:evenodd; clip-rule:evenodd"
viewBox="0 0 50 50"
 xmlns:xlink="http://www.w3.org/1999/xlink">
  
 <g id="Warstwa_x0020_1">
  <metadata id="CorelCorpID_0Corel-Layer"/>
  <circle class="cecha-kolko-2" cx="25" cy="25" r="20"/>
    <circle class="cecha-kolko-5" cx="25" cy="25" r="23"/>
  <circle class="cecha-kolko-1" cx="25" cy="25" r="24"/>
 </g>
</svg>
            </div>
        </a>
        <a class="facebook" href="<?php echo get_option("facebook_link");?>">
        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 width="412.844px" height="336.334px" viewBox="0 0 412.844 336.334" enable-background="new 0 0 412.844 336.334"
	 xml:space="preserve">
<path id="facebook-icon"  d="M163.874,109.955h-35.22v57.493h35.22v168.886h67.729V166.728h47.252l5.025-56.773
	h-52.277c0,0,0-21.2,0-32.339c0-13.386,2.69-18.686,15.629-18.686c10.422,0,36.647,0,36.647,0V0c0,0-38.635,0-46.896,0
	c-50.396,0-73.114,22.188-73.114,64.68C163.874,101.688,163.874,109.955,163.874,109.955z"/>
</svg>
<div class="kolko-hover">
            
            <svg xmlns="http://www.w3.org/2000/svg" xml:space="preserve" width="50px" height="50px" version="1.1" style="shape-rendering:geometricPrecision; text-rendering:geometricPrecision; image-rendering:optimizeQuality; fill-rule:evenodd; clip-rule:evenodd"
viewBox="0 0 50 50"
 xmlns:xlink="http://www.w3.org/1999/xlink">
  
 <g id="Warstwa_x0020_1">
  <metadata id="CorelCorpID_0Corel-Layer"/>
  <circle class="cecha-kolko-2" cx="25" cy="25" r="20"/>
    <circle class="cecha-kolko-5" cx="25" cy="25" r="23"/>
  <circle class="cecha-kolko-1" cx="25" cy="25" r="24"/>
 </g>
</svg>
            </div>
		</a>

        
        <a class="tripadvisor" href="<?php echo get_option("instagram_link");?>">
        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" width="512px" height="512px" viewBox="0 0 98.566 98.566" style="enable-background:new 0 0 98.566 98.566;" xml:space="preserve">
<g>
	<g>
		<path d="M60.401,20.996c2.751,0.389,5.445,1.08,8.107,1.898c4.647,1.431,9.032,3.419,13.156,5.998    c0.287,0.178,0.67,0.291,1.008,0.291c4.844,0.02,9.686,0.013,14.526,0.017c0.39,0,0.778,0.041,1.167,0.063    c0,0.095,0.014,0.135-0.002,0.157c-0.226,0.348-0.455,0.691-0.682,1.038c-1.643,2.52-3.047,5.156-3.876,8.07    c-0.09,0.313-0.109,0.575,0.103,0.882c4.312,6.192,5.688,12.99,3.886,20.318c-1.58,6.427-5.264,11.438-10.862,14.986    c-4.001,2.537-8.421,3.745-13.143,3.771c-1.984,0.012-3.958-0.255-5.896-0.757c-4.722-1.225-8.77-3.579-12.106-7.144    c-0.44-0.468-0.854-0.957-1.323-1.486c-1.764,2.629-3.5,5.215-5.278,7.869c-1.771-2.646-3.483-5.207-5.191-7.758    c-0.118,0.062-0.152,0.069-0.175,0.091c-0.039,0.032-0.072,0.071-0.103,0.108c-4.035,4.765-9.111,7.686-15.295,8.663    c-3.44,0.545-6.847,0.349-10.188-0.572c-4.735-1.301-8.759-3.799-12.01-7.485c-3.177-3.604-5.153-7.788-5.895-12.545    c-0.849-4.44,0.185-8.721,0.443-9.76c0.748-3.02,2.052-5.793,3.842-8.343c0.126-0.181,0.17-0.501,0.11-0.717    c-0.73-2.677-1.988-5.112-3.461-7.444c-0.374-0.593-0.822-1.142-1.236-1.711c0-0.065,0-0.132,0-0.198    c0.083,0.01,0.165,0.026,0.246,0.026c4.956,0.002,9.911,0.004,14.867-0.006c0.216,0,0.456-0.089,0.64-0.207    c3.482-2.234,7.192-4.004,11.09-5.382c2.811-0.992,5.681-1.766,8.608-2.333c2.834-0.548,5.683-0.934,8.562-1.124    C51.059,19.73,56.669,20.473,60.401,20.996z M54.188,53.727c0,10.883,8.83,19.774,19.674,19.732    c10.885-0.039,19.675-8.68,19.667-19.683c-0.008-11.339-9.206-19.863-20.089-19.642C62.696,34.357,54.286,43.017,54.188,53.727z     M24.677,34.059C14.091,33.967,4.861,42.802,5.046,54.056c0.172,10.495,8.822,19.392,19.851,19.297    c10.784-0.092,19.452-8.898,19.472-19.562C44.386,42.835,35.612,34.059,24.677,34.059z M25.653,28.925    c5.98,0.365,11.233,2.449,15.671,6.485c4.429,4.028,7.024,9.053,7.967,14.962c0.97-5.839,3.497-10.817,7.843-14.805    c4.353-3.992,9.536-6.087,15.418-6.53c-6.98-3.103-14.34-4.421-21.916-4.567C42.026,24.301,33.651,25.57,25.653,28.925z" fill="#FFFFFF"/>
		<path d="M73.822,41.311c6.735-0.011,12.19,5.415,12.19,12.143c0,6.754-5.362,11.975-11.688,12.216    c-7.065,0.271-12.718-5.358-12.716-12.186C61.614,46.578,67.307,41.197,73.822,41.311z M81.766,53.484    c-0.003-4.39-3.552-7.958-7.912-7.958c-4.41,0-8,3.549-8.018,7.926c-0.016,4.358,3.592,7.984,7.961,7.996    C78.173,61.465,81.768,57.866,81.766,53.484z" fill="#FFFFFF"/>
		<path d="M24.417,41.311c6.731-0.007,12.194,5.429,12.177,12.156c-0.019,6.809-5.386,11.916-11.601,12.199    c-7.093,0.324-12.816-5.33-12.803-12.195C12.204,46.516,17.936,41.195,24.417,41.311z M32.352,53.457    c-0.013-4.417-3.585-7.938-8.044-7.93c-4.301,0.008-7.905,3.638-7.895,7.955c0.011,4.367,3.611,7.958,7.992,7.97    C28.759,61.462,32.363,57.836,32.352,53.457z" fill="#FFFFFF"/>
		<path d="M73.828,49.443c2.232-0.002,4.062,1.829,4.041,4.048c-0.022,2.224-1.821,4.026-4.016,4.027    c-2.26,0-4.077-1.786-4.072-3.999C69.785,51.223,71.55,49.445,73.828,49.443z" fill="#FFFFFF"/>
		<path d="M24.396,49.407c2.266-0.002,4.087,1.808,4.096,4.067c0.009,2.24-1.829,4.079-4.084,4.084    c-2.309,0.005-4.09-1.779-4.088-4.1C20.32,51.179,22.097,49.41,24.396,49.407z" fill="#FFFFFF"/>
	</g>
</g>
</svg>
<div class="kolko-hover">
            
            <svg xmlns="http://www.w3.org/2000/svg" xml:space="preserve" width="50px" height="50px" version="1.1" style="shape-rendering:geometricPrecision; text-rendering:geometricPrecision; image-rendering:optimizeQuality; fill-rule:evenodd; clip-rule:evenodd"
viewBox="0 0 50 50"
 xmlns:xlink="http://www.w3.org/1999/xlink">
  
 <g id="Warstwa_x0020_1">
  <metadata id="CorelCorpID_0Corel-Layer"/>
  <circle class="cecha-kolko-2" cx="25" cy="25" r="20"/>
    <circle class="cecha-kolko-5" cx="25" cy="25" r="23"/>
  <circle class="cecha-kolko-1" cx="25" cy="25" r="24"/>
 </g>
</svg>
            </div>
		</a>
    </div>
   			 </div>
           </div>
        <div class="clearfix"></div>
        </section>
        	<div id="mapa">
            <?php echo do_shortcode('[wpgmza id="1"]' );?>            
            </div>
            <div class="clearfix"></div>
            <section id="newsletter-box" class="main-section  ozdobny-c">
     	   <div class="col-1 text-box-sekcja centeralign">
           <h2><?php the_field('kontaktpage_newsletter_h2',$page_id);?></h2>
            <div class="romby">
            	<span></span><span></span><span></span>
            </div>
             <p><?php the_field('kontaktpage_newsletter_p',$page_id);?></p>
            <div class="clearfix"></div>
            <?php echo do_shortcode('[mc4wp_form id="144"]' );?>
           </div>
        <div class="clearfix"></div>
        </section>
        </div>
     </div>
    </section>
    
      <?php echo get_template_part("parts/part","paseksocialmedia");?> 
</main>
  <?php get_footer();?>
