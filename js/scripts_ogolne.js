//Dostosowanie do ekranu

function img_text_height(){
	if($(".main-section.nopad").length>0){
		$(".main-section.nopad").each(function( ) {
           $(this).height(Math.max( $(this).find(".text-box-sekcja").outerHeight(),$(this).find(".text-box-sekcja").outerHeight())); 
        });
		
		}
	
	};
function galeria_text_height(){
	if($(".col-23.galeria-box-sekcja").length>0){
		 $(".col-23.galeria-box-sekcja").parent(".main-section").height(Math.max( $(".col-23.galeria-box-sekcja").outerHeight()-8, $(".col-23.galeria-box-sekcja").siblings(".text-box-sekcja").outerHeight())); 
 
		
		}
	
	};
function galeria_text_width(){
	if($("#galeria-oferta.rozszerzona").length>0){
		$parenta_gal=$("#galeria-oferta.rozszerzona");
		div_w=$parenta_gal.innerWidth()/5; 
		$parenta_gal.find(" .col-23").outerWidth(3*div_w);
		$parenta_gal.find(" .img-galeria").outerWidth(div_w);
			$parenta_gal.find(".col-3.text-box-sekcja ").outerWidth(2*div_w);
			$parenta_gal.outerHeight($parenta_gal.find(" .col-23").outerHeight()-5);
	};
	};
function cechy_height(){
	if($("#cechy_restauracji").length>0){
		$("#cechy_restauracji .list-col-3 .cecha.item-list").height(
		$("#cechy_restauracji .list-col-3").innerHeight());
		$("#cechy_restauracji .list-col-4 .cecha.item-list").height(
		$("#cechy_restauracji .list-col-4").innerHeight());
		}
		};
function oferta_lista_height() {
	if($("#oferta-lista").length>0){
	$("#oferta-lista-box #oferta-lista").outerHeight(Math.max($("#oferta-ozdobna-lista").outerHeight(),$("#oferta-lista .col-23").outerHeight()));
	 };
	
	};
function oferta_ncolegi_img_height() {
if($("#zdjecia-oferty-nocleg").length>0){ 
	$("#zdjecia-oferty-nocleg  ").css("height",$("#oferta-lista").outerHeight()-60 );
	 };
	 
	
	};

function karuzela_wyrownanie() {
if($(".col-2.karuzela").length>0){

	$(".col-2.karuzela").each(function( ) {
		if($(this).height()-$(this).parent(".main-section").height()<50){
			x_temp=$(this).parent(".main-section").height()-$(this).height();
			$(this).css({top: x_temp/2});
		};

		
	});

	};
	 };
$(document).ready(function(e) {	
//Pasek kontaktu
$(".kontaktowy-pasek a.telefon, .kontaktowy-pasek a.email ").on("click tap", function(){if(!$(this).hasClass("active")){$(".kontaktowy-pasek a.telefon, .kontaktowy-pasek a.email ").removeClass("active");$(this).addClass("active");}else{$(".kontaktowy-pasek a.telefon, .kontaktowy-pasek a.email ").removeClass("active");};});
//Dostosowanie do ekranu
img_text_height(); galeria_text_height();cechy_height();galeria_text_width();oferta_lista_height() ;oferta_ncolegi_img_height();
karuzela_wyrownanie();
//Rownanie zdjec
$(".img-box-sekcja").each(function( ) {
	 
 	$(this).css("maxHeight", $(this).siblings(".text-box-sekcja").outerHeight()) ;
	 
});
//scroll down
$("#linkdol").on("click tap", function(event){
	event.preventDefault();
	temp=$("#dol").offset().top-100;
	$("html, body").animate({ scrollTop:temp},300);
});
$("#menu-mobile-button").on("click tap", function(event){
	event.preventDefault();
	$("header").toggleClass("show-mobile-menu");
});
$header.headerhover();
win_h=$(window).height();	 
	$header_h_change = win_h/4;
	$sekcjahide=$(".hide-sekcja:first");
	
	 sekcjahide_y=$sekcjahide.offset().top-win_h;
	 
	 
	 $(window).scroll(function(event){	
    scrolly = $(this).scrollTop(); 	 
	//ODKRYWANIE SEKCJI
	if(scrolly> sekcjahide_y) {	 
		 $sekcjahide.removeClass("hide-sekcja").addClass("start-anim");
		$sekcjahide=$(".hide-sekcja:first");
		if($sekcjahide.length>0){	 sekcjahide_y=$sekcjahide.offset().top-win_h;};

		};	  
	
	 });
}); 

//Sterowanie headerem
var sumay =0;
var lastScrollTop = 0;
var headerhideh = 300;
var headerhideh2 = 800;
var headerhidevar =0;
var windowh= $(window).height();
var vardol = true;
var vardol2=true;
var $header =$("header");
jQuery.fn.extend({
    header: function (scrolly,vardol) {
	
	
	if(vardol2 && vardol)
	{
		headerhidevar= headerhidevar-lastScrollTop+scrolly;
		if(headerhidevar > headerhideh && !$header.hasClass("scroll")){			
			$header.addClass("scroll")
		 
			};		
		if(headerhidevar > headerhideh2 && !$header.hasClass("hide")){			
			$header.addClass("hide")
			vardol2=false;
		 
			};
	}
	else if (!vardol) {
		$header.removeClass("hide")
	 
		if(scrolly<50){$header.removeClass("scroll")};
		headerhidevar =0;
		vardol2=true;
		};	
    }
});
//Hover header
jQuery.fn.extend({
    headerhover: function () {
		var timerhover;
		$header.on('mouseover mouseenter',function(){
			if($header.hasClass("scroll")){ $header.removeClass("hide").addClass("show");
			clearTimeout(timerhover);
			vardol2=false;
			}
			});
		$header.on('mouseleave mouseout',function(){
			if($header.hasClass("scroll")){ 
			timerhover=setTimeout(function(){$header.removeClass("show");headerhidevar =0;
		vardol2=true; },400);
			
			};
			});	
		}});
//Sterowanie scrollowanie
var lastScrollTop = 0;
var scrolly =0;
//Textrotator
var warrotator =true;
$(window).scroll(function(event){
   scrolly = $(this).scrollTop();
   if ( scrolly > lastScrollTop){
    vardol = true;
	$header.header(scrolly, vardol )
   } else {
     vardol = false;
	 $header.header(scrolly, vardol )
   }
   lastScrollTop = scrolly;  
 
});
$(document).ready(function(){
//Check img vert vs hor
	$(".gallery-item img").each(function( ) {
		if($(this).height()-$(this).width()>0 ){
			$(this).addClass('vertical');

		};
	});

//Lightbox
img_i=0;
$(".img-galeria").on("click tap", function(){
 	img_i = $(this).index(".img-galeria");
	$(".lightbox").addClass("active");
	 $(".lightbox img.lightbox-img").attr("src",$(this).find("img").attr("data"));
});
 
$(".close-lightbox").on("click tap", function(){
		$(".lightbox").removeClass("active");
	 
}); 

$(".next-lightbox").on("click tap", function(){
	 
	 	img_i++;
	 	if($(".gallery-item a").length>0){
		 	if(img_i>$(".gallery-item a").length) {img_i=0;};
		 	$(".lightbox img.lightbox-img").attr("src",$(".gallery-item a").eq(img_i).attr("href"));
	 	}
	 	else {
	 		if(img_i>$(".img-galeria").length) {img_i=0;};
	 		 $(".lightbox img.lightbox-img").attr("src",$(".img-galeria").eq(img_i).find("img").attr("data"));
	 	};

}); 

$(".prev-lightbox").on("click tap", function(){
		 
	 	img_i--;
	 	if($(".gallery-item a").length>0){
		 	if(img_i<0) {img_i=$(".gallery-item a").length;};
		 	$(".lightbox img.lightbox-img").attr("src",$(".gallery-item a").eq(img_i).attr("href"));
	 	}
	 	else {
	 		if(img_i<0)  {img_i=$(".img-galeria").length;};
	 		 $(".lightbox img.lightbox-img").attr("src",$(".img-galeria").eq(img_i).find("img").attr("data"));
	 	};
}); 


//Lightbox
$(".gallery-item a").on("click tap", function(event){
  event.preventDefault();
	$(".lightbox").addClass("active");
	img_i = $(this).index(".gallery-item a");
	 $(".lightbox img.lightbox-img").attr("src",$(this).attr("href"));
});
 
//KARUZELA
  //Zdjecia
	$(".next-imgs").on('click tap','img', function(){
		$(this).addClass("hide");
		$(this).clone().appendTo(".act-imgs");
		setTimeout(function(){
			 $(".next-imgs img.hide").remove();
			 $(".act-imgs img.show").addClass("old-show").removeClass("show");
			 $(".act-imgs img.hide").removeClass("hide").addClass("show"); 
			 
			 setTimeout(function(){
			 $(".act-imgs img.old-show").appendTo(".prev-imgs");
			  setTimeout(function(){
			 $(".prev-imgs img.old-show").removeClass("old-show");
			 },200);
	  			},200);
			
			},200);
			if($(".next-imgs img").length<=1){
				 
				$(".karuzela").addClass("koniec-next")
				
				}else { $(".karuzela").removeClass("koniec-next").removeClass("koniec-prev");};
		});
		
		$(".prev-imgs").on('click tap','img', function(){
		$(this).addClass("hide");
		$(this).clone().appendTo(".act-imgs");
		setTimeout(function(){
			 $(".prev-imgs img.hide").remove();
			 $(".act-imgs img.show").addClass("old-show").removeClass("show");
			 $(".act-imgs img.hide").removeClass("hide").addClass("show"); 
			 
			 setTimeout(function(){
			 $(".act-imgs img.old-show").appendTo(".next-imgs");
			  setTimeout(function(){
			 $(".next-imgs img.old-show").removeClass("old-show");
			 },200);
	  			},200);
			
			},200);
			if($(".prev-imgs img").length<=1){
				$(".karuzela").removeClass("koniec-next").addClass("koniec-prev");
				
				}else {$(".karuzela").removeClass("koniec-prev");};
		});



});
