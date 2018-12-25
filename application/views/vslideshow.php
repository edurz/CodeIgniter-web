
<style>

       .break-word {
 -ms-word-break: break-all;
     word-break: break-all;

     // Non standard for webkit
     word-break: break-word;

-webkit-hyphens: auto;
   -moz-hyphens: auto;
    -ms-hyphens: auto;
        hyphens: auto;
} 

    @media (max-width: 967px) {
    #cont_pc{
		 display:none;
        visibility:hidden;
	}
	
    #cont_movil{
        display:block;
        visibility:visible;
    }
     #cont_pc2{
		 display:none;
        visibility:hidden;
	}
	
    #cont_movil2{
        display:block;
        visibility:visible;
    }
    .nom_prod{
		font-size:184%;
	}
	.precio_prod{
		font-size:184%;
		font-weight: bold;
	}
    
}
 @media (min-width: 968px) {
    #cont_movil{			
    display:none;
    visibility:hidden;
    }
	#cont_pc{
		 display:block;
        visibility:visible;
	}
	 #cont_movil2{			
    display:none;
    visibility:hidden;
    }
	#cont_pc2{
		 display:block;
        visibility:visible;
	}
	.nom_prod{
		font-size:140%;
	}
	.precio_prod{
		font-size:164%;
		font-weight: bold;
	}
    
    .hola{
        background-color:red;
       
    }
 }
</style>
<div class="container-fluid">
    <div class="row col-md-12 col-sm-12 col-xs-12 col-lg-12"  style="background-color:#D7DF01;margin-left:5px">
    
        <!-- #region Jssor Slider Begin -->
        <!-- Generator: Jssor Slider Maker -->
        <!-- Source: https://www.jssor.com -->
        <!-- This is deep minimized code which works independently. -->
		<!-- Bootstrap 3.3.7 -->
		<!--<script src="<?=base_url();?>assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>-->
        <script src="js/slider.js" type="text/javascript"></script>
		<script src="js/jssor.slider-27.5.0.min.js" type="text/javascript"></script>
        <script type="text/javascript">
		
	 
		
		
        jssor_2_slider_init2 = function() {
			

            var jssor_1_options = {
              $AutoPlay: 1,
              $AutoPlaySteps: 5,
              $SlideDuration: 160,
              $SlideWidth: 200,
              $SlideSpacing: 3,
              $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$,
                $Steps: 5
              },
              $BulletNavigatorOptions: {
                $Class: $JssorBulletNavigator$
              }
            };

            var jssor_1_slider = new $JssorSlider$("jssor_2", jssor_1_options);

            /*#region responsive code begin*/

            var MAX_WIDTH = 1420;

            function ScaleSlider() {
                var containerElement = jssor_1_slider.$Elmt.parentNode;
                var containerWidth = containerElement.clientWidth;

                if (containerWidth) {

                    var expectedWidth = Math.min(MAX_WIDTH || containerWidth, containerWidth);

                    jssor_1_slider.$ScaleWidth(expectedWidth);
                }
                else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }

            ScaleSlider();

            $Jssor$.$AddEvent(window, "load", ScaleSlider);
            $Jssor$.$AddEvent(window, "resize", ScaleSlider);
            $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
            /*#endregion responsive code end*/
        };
		
		jssor_3_slider_init3 = function() {
			

            var jssor_1_options = {
              $AutoPlay: 1,
              $AutoPlaySteps: 2,
              $SlideDuration: 160,
              $SlideWidth: 330,
              $SlideSpacing: 3,
              $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$,
                $Steps: 2
              },
              $BulletNavigatorOptions: {
                $Class: $JssorBulletNavigator$
              }
            };

            var jssor_1_slider = new $JssorSlider$("jssor_3", jssor_1_options);

            /*#region responsive code begin*/

            var MAX_WIDTH = 1080;

            function ScaleSlider() {
                var containerElement = jssor_1_slider.$Elmt.parentNode;
                var containerWidth = containerElement.clientWidth;

                if (containerWidth) {

                    var expectedWidth = Math.min(MAX_WIDTH || containerWidth, containerWidth);

                    jssor_1_slider.$ScaleWidth(expectedWidth);
                }
                else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }

            ScaleSlider();

            $Jssor$.$AddEvent(window, "load", ScaleSlider);
            $Jssor$.$AddEvent(window, "resize", ScaleSlider);
            $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
            /*#endregion responsive code end*/
        };
        
        jssor_4_slider_init4 = function() {
			

            var jssor_1_options = {
              $AutoPlay: 1,
              $AutoPlaySteps: 2,
              $SlideDuration: 160,
              $SlideWidth: 330,
              $SlideSpacing: 3,
              $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$,
                $Steps: 2
              },
              $BulletNavigatorOptions: {
                $Class: $JssorBulletNavigator$
              }
            };

            var jssor_1_slider = new $JssorSlider$("jssor_4", jssor_1_options);

            /*#region responsive code begin*/

            var MAX_WIDTH = 1080;

            function ScaleSlider() {
                var containerElement = jssor_1_slider.$Elmt.parentNode;
                var containerWidth = containerElement.clientWidth;

                if (containerWidth) {

                    var expectedWidth = Math.min(MAX_WIDTH || containerWidth, containerWidth);

                    jssor_1_slider.$ScaleWidth(expectedWidth);
                }
                else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }

            ScaleSlider();

            $Jssor$.$AddEvent(window, "load", ScaleSlider);
            $Jssor$.$AddEvent(window, "resize", ScaleSlider);
            $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
            /*#endregion responsive code end*/
        };
        
         jssor_5_slider_init5 = function() {
			

            var jssor_1_options = {
              $AutoPlay: 1,
              $AutoPlaySteps: 5,
              $SlideDuration: 160,
              $SlideWidth: 200,
              $SlideSpacing: 3,
              $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$,
                $Steps: 5
              },
              $BulletNavigatorOptions: {
                $Class: $JssorBulletNavigator$
              }
            };

            var jssor_1_slider = new $JssorSlider$("jssor_5", jssor_1_options);

            /*#region responsive code begin*/

            var MAX_WIDTH = 1420;

            function ScaleSlider() {
                var containerElement = jssor_1_slider.$Elmt.parentNode;
                var containerWidth = containerElement.clientWidth;

                if (containerWidth) {

                    var expectedWidth = Math.min(MAX_WIDTH || containerWidth, containerWidth);

                    jssor_1_slider.$ScaleWidth(expectedWidth);
                }
                else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }

            ScaleSlider();

            $Jssor$.$AddEvent(window, "load", ScaleSlider);
            $Jssor$.$AddEvent(window, "resize", ScaleSlider);
            $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
            /*#endregion responsive code end*/
        };
    </script>
        <style>
        .jssorl-009-spin img{animation-name:jssorl-009-spin;animation-duration:1.6s;animation-iteration-count:infinite;animation-timing-function:linear}@keyframes jssorl-009-spin{from{transform:rotate(0);}to{transform:rotate(360deg);}}.jssorb051 .i{position:absolute;cursor:pointer}.jssorb051 .i .b{fill:#fff;fill-opacity:.5}.jssorb051 .i:hover .b{fill-opacity:.7}.jssorb051 .iav .b{fill-opacity:1}.jssorb051 .i.idn{opacity:.3}.jssora051{display:block;position:absolute;cursor:pointer}.jssora051 .a{fill:none;stroke:#fff;stroke-width:360;stroke-miterlimit:10}.jssora051:hover{opacity:.8}.jssora051.jssora051dn{opacity:.5}.jssora051.jssora051ds{opacity:.3;pointer-events:none}
        
         /*jssor slider loading skin spin css*/
        .jssorl-009-spin img {
            animation-name: jssorl-009-spin;
            animation-duration: 1.6s;
            animation-iteration-count: infinite;
            animation-timing-function: linear;
        }

        @keyframes jssorl-009-spin {
            from { transform: rotate(0deg); }
            to { transform: rotate(360deg); }
        }

        /*jssor slider bullet skin 057 css*/
        .jssorb057 .i {position:absolute;cursor:pointer;}
        .jssorb057 .i .b {fill:none;stroke:#fff;stroke-width:2000;stroke-miterlimit:10;stroke-opacity:0.4;}
        .jssorb057 .i:hover .b {stroke-opacity:.7;}
        .jssorb057 .iav .b {stroke-opacity: 1;}
        .jssorb057 .i.idn {opacity:.3;}

        /*jssor slider arrow skin 073 css*/
        .jssora073 {display:block;position:absolute;cursor:pointer;}
        .jssora073 .a {fill:#ddd;fill-opacity:.7;stroke:#000;stroke-width:160;stroke-miterlimit:10;stroke-opacity:.7;}
        .jssora073:hover {opacity:.8;}
        .jssora073.jssora073dn {opacity:.4;}
        .jssora073.jssora073ds {opacity:.3;pointer-events:none;}
        </style>
        <div id="jssor_1" style="position:relative;margin:0 auto;top:0px;left:-15px;width:980px;height:380px;overflow:hidden;visibility:hidden;">
        <!-- Loading Screen -->
        <div data-u="loading" class="jssorl-009-spin" style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);">
        <img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;" src="img/spin.svg" />
        </div>
        <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:980px;height:380px;overflow:hidden;">
			<?php foreach($imgs as $img){
			echo '<div>
					<img data-u="image" src="'.base_url().'uploads/files/slideshow/'.$img['ruta'].'" />
				  </div>';
			}?>
			<div>
			<img data-u="image" src="<?=base_url()?>img/001.jpg" />
			</div>
        
        </div>
        <!-- Bullet Navigator -->
        <div data-u="navigator" class="jssorb051" style="position:absolute;bottom:12px;right:12px;" data-autocenter="1" data-scale="0.5" data-scale-bottom="0.75">
        <div data-u="prototype" class="i" style="width:16px;height:16px;">
        <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
        <circle class="b" cx="8000" cy="8000" r="5800"></circle>
        </svg>
        </div>
        </div>
        <!-- Arrow Navigator -->
        <div data-u="arrowleft" class="jssora051" style="width:55px;height:55px;top:0px;left:1px;" data-autocenter="2" data-scale="0.75" data-scale-left="0.75">
        <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
        <polyline class="a" points="11040,1920 4960,8000 11040,14080 "></polyline>
        </svg>
        </div>
        <div data-u="arrowright" class="jssora051" style="width:55px;height:55px;top:0px;right:1px;" data-autocenter="2" data-scale="0.75" data-scale-right="0.75">
        <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
        <polyline class="a" points="4960,1920 11040,8000 4960,14080 "></polyline>
        </svg>
        </div>
        </div>
        <script type="text/javascript">jssor_1_slider_init();</script>
        <!-- #endregion Jssor Slider End -->
            
    </div>
	
	
	   
	    <div id="cont_pc" class="row col-xs-12 col-md-12 col-lg-12" style="background-color:#D7DF01;margin-left:5px">
	        
	       <h3 style="color:#fff;text-align:center">Productos Destacados</h3>
	            
	        <div id="jssor_2" class="prod_destacados"  style="position:relative;margin:0 auto;top:0px;width:1420px;left:-15px;height:310px;overflow:hidden;visibility:hidden;">
            <!-- Loading Screen -->
            <div data-u="loading" class="jssorl-009-spin" style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);">
            <img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;" src="img/spin.svg" />
            </div>
            <div data-u="slides" style="cursor:pointer;position:relative;top:0px;left:0px;width:1420px;height:310px;overflow:hidden;">
            
            
				
				<?php 
				foreach($prodDest as $destacado){ ?>
				    <div class="thumbnail clsProducto break-word">
					 <img src="<?=base_url()?>uploads/imagenes/thumbs/<?=$destacado['ruta']?>" alt="..." height="210" width="230">
					  <div class="caption" style="height:25%">
						<h4 class="nom_prod"><?=$destacado['nombre']?></h4><!-- largo maximo 56 letras -->
						<input type="hidden" value="<?=$destacado['idProducto'];?>" class="clsIdProducto">
					  </div>
					  <div class="caption">
					   <p class="precio_prod">$<?=$destacado['precio'];?></p>
					   </div>
				</div>
			<?php	} ?>
            
			
			
           
            </div>
            <!-- Bullet Navigator 
            <div data-u="navigator" class="jssorb057" style="position:absolute;bottom:12px;right:12px;" data-autocenter="1" data-scale="0.5" data-scale-bottom="0.75">
            <div data-u="prototype" class="i" style="width:16px;height:16px;">
            <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
            <circle class="b" cx="8000" cy="8000" r="5000"></circle>
            </svg>
            </div>
            </div>
			-->
            <!-- Arrow Navigator -->
            <div data-u="arrowleft" class="jssora073" style="width:50px;height:50px;top:0px;left:-10px;" data-autocenter="2" data-scale="0.75" data-scale-left="0.75">
            <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
            <path class="a" d="M4037.7,8357.3l5891.8,5891.8c100.6,100.6,219.7,150.9,357.3,150.9s256.7-50.3,357.3-150.9 l1318.1-1318.1c100.6-100.6,150.9-219.7,150.9-357.3c0-137.6-50.3-256.7-150.9-357.3L7745.9,8000l4216.4-4216.4 c100.6-100.6,150.9-219.7,150.9-357.3c0-137.6-50.3-256.7-150.9-357.3l-1318.1-1318.1c-100.6-100.6-219.7-150.9-357.3-150.9 s-256.7,50.3-357.3,150.9L4037.7,7642.7c-100.6,100.6-150.9,219.7-150.9,357.3C3886.8,8137.6,3937.1,8256.7,4037.7,8357.3 L4037.7,8357.3z"></path>
            </svg>
            </div>
            <div data-u="arrowright" class="jssora073" style="width:50px;height:50px;top:0px;right:-10px;" data-autocenter="2" data-scale="0.75" data-scale-right="0.75">
            <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
            <path class="a" d="M11962.3,8357.3l-5891.8,5891.8c-100.6,100.6-219.7,150.9-357.3,150.9s-256.7-50.3-357.3-150.9 L4037.7,12931c-100.6-100.6-150.9-219.7-150.9-357.3c0-137.6,50.3-256.7,150.9-357.3L8254.1,8000L4037.7,3783.6 c-100.6-100.6-150.9-219.7-150.9-357.3c0-137.6,50.3-256.7,150.9-357.3l1318.1-1318.1c100.6-100.6,219.7-150.9,357.3-150.9 s256.7,50.3,357.3,150.9l5891.8,5891.8c100.6,100.6,150.9,219.7,150.9,357.3C12113.2,8137.6,12062.9,8256.7,11962.3,8357.3 L11962.3,8357.3z"></path>
            </svg>
            </div>
            </div>
            
            
            <script type="text/javascript">jssor_2_slider_init2();</script>
	        
	    </div>  
		<div id="cont_movil" class="row col-md-12 col-sm-12 col-xs-12 col-lg-12" style="background-color:#D7DF01;margin-left:5px;text-align:center">
	       <h3 style="color:#fff">Productos Destacados</h3>
	        <div id="jssor_3" class="prod_destacados"  style="position:relative;margin:0 auto;top:0px;width:650px;left:-15px;height:420px;overflow:hidden;visibility:hidden;">
            <!-- Loading Screen -->
            <div data-u="loading" class="jssorl-009-spin" style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);">
            <img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;" src="img/spin.svg" />
            </div>
            <div data-u="slides" style="cursor:pointer;position:relative;top:0px;left:0px;width:980px;height:420px;overflow:hidden;">
            
            
				<?php 
				foreach($prodDest as $destacado){ ?>
				    <div class="thumbnail clsProducto break-word">
					 <img src="<?=base_url()?>uploads/imagenes/thumbs/<?=$destacado['ruta']?>" alt="..." height="210" width="230">
					  <div class="caption" style="height:32%">
						<h3 class="nom_prod"><?=$destacado['nombre']?></h3><!-- largo maximo 56 letras -->
						<input type="hidden" value="<?=$destacado['idProducto'];?>" class="clsIdProducto">
					  </div>
					  <div class="caption">
					   <p class="precio_prod">$<?=$destacado['precio'];?></p>
					   </div>
				</div>
			<?php	} ?>
            
			
			
           
            </div>
            <!-- Bullet Navigator 
            <div data-u="navigator" class="jssorb057" style="position:absolute;bottom:12px;right:12px;" data-autocenter="1" data-scale="0.5" data-scale-bottom="0.75">
            <div data-u="prototype" class="i" style="width:16px;height:16px;">
            <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
            <circle class="b" cx="8000" cy="8000" r="5000"></circle>
            </svg>
            </div>
            </div>
			-->
            <!-- Arrow Navigator -->
            <div data-u="arrowleft" class="jssora073" style="width:50px;height:50px;top:0px;left:-10px;" data-autocenter="2" data-scale="0.75" data-scale-left="0.75">
            <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
            <path class="a" d="M4037.7,8357.3l5891.8,5891.8c100.6,100.6,219.7,150.9,357.3,150.9s256.7-50.3,357.3-150.9 l1318.1-1318.1c100.6-100.6,150.9-219.7,150.9-357.3c0-137.6-50.3-256.7-150.9-357.3L7745.9,8000l4216.4-4216.4 c100.6-100.6,150.9-219.7,150.9-357.3c0-137.6-50.3-256.7-150.9-357.3l-1318.1-1318.1c-100.6-100.6-219.7-150.9-357.3-150.9 s-256.7,50.3-357.3,150.9L4037.7,7642.7c-100.6,100.6-150.9,219.7-150.9,357.3C3886.8,8137.6,3937.1,8256.7,4037.7,8357.3 L4037.7,8357.3z"></path>
            </svg>
            </div>
            <div data-u="arrowright" class="jssora073" style="width:50px;height:50px;top:0px;right:-10px;" data-autocenter="2" data-scale="0.75" data-scale-right="0.75">
            <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
            <path class="a" d="M11962.3,8357.3l-5891.8,5891.8c-100.6,100.6-219.7,150.9-357.3,150.9s-256.7-50.3-357.3-150.9 L4037.7,12931c-100.6-100.6-150.9-219.7-150.9-357.3c0-137.6,50.3-256.7,150.9-357.3L8254.1,8000L4037.7,3783.6 c-100.6-100.6-150.9-219.7-150.9-357.3c0-137.6,50.3-256.7,150.9-357.3l1318.1-1318.1c100.6-100.6,219.7-150.9,357.3-150.9 s256.7,50.3,357.3,150.9l5891.8,5891.8c100.6,100.6,150.9,219.7,150.9,357.3C12113.2,8137.6,12062.9,8256.7,11962.3,8357.3 L11962.3,8357.3z"></path>
            </svg>
            </div>
            </div>
            
            
            <script type="text/javascript">jssor_3_slider_init3();</script>
	        
	    </div>
	    
		<div id="cont_movil2" class="row col-md-12 col-sm-12 col-xs-12 col-lg-12" style="margin-left:5px">
	       <h3 style="text-align:center">Productos Nuevos</h3>
	        <div id="jssor_4" class="prod_destacados"  style="position:relative;margin:0 auto;top:0px;width:650px;left:-15px;height:420px;overflow:hidden;visibility:hidden;">
            <!-- Loading Screen -->
            <div data-u="loading" class="jssorl-009-spin" style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);">
            <img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;" src="img/spin.svg" />
            </div>
            <div data-u="slides" style="cursor:pointer;position:relative;top:0px;left:0px;width:980px;height:420px;overflow:hidden;">
            
            
				<?php 
				foreach($prodDest as $destacado){ ?>
				    <div class="thumbnail clsProducto break-word">
					 <img src="<?=base_url()?>uploads/imagenes/thumbs/<?=$destacado['ruta']?>" alt="..." height="210" width="230">
					  <div class="caption" style="height:32%">
						<h3 class="nom_prod"><?=$destacado['nombre']?></h3><!-- largo maximo 56 letras -->
						<input type="hidden" value="<?=$destacado['idProducto'];?>" class="clsIdProducto">
					  </div>
					  <div class="caption">
					   <p class="precio_prod">$<?=$destacado['precio'];?></p>
					   </div>
				</div>
			<?php	} ?>
            
			
			
           
            </div>
            <!-- Bullet Navigator 
            <div data-u="navigator" class="jssorb057" style="position:absolute;bottom:12px;right:12px;" data-autocenter="1" data-scale="0.5" data-scale-bottom="0.75">
            <div data-u="prototype" class="i" style="width:16px;height:16px;">
            <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
            <circle class="b" cx="8000" cy="8000" r="5000"></circle>
            </svg>
            </div>
            </div>
			-->
            <!-- Arrow Navigator -->
            <div data-u="arrowleft" class="jssora073" style="width:50px;height:50px;top:0px;left:-10px;" data-autocenter="2" data-scale="0.75" data-scale-left="0.75">
            <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
            <path class="a" d="M4037.7,8357.3l5891.8,5891.8c100.6,100.6,219.7,150.9,357.3,150.9s256.7-50.3,357.3-150.9 l1318.1-1318.1c100.6-100.6,150.9-219.7,150.9-357.3c0-137.6-50.3-256.7-150.9-357.3L7745.9,8000l4216.4-4216.4 c100.6-100.6,150.9-219.7,150.9-357.3c0-137.6-50.3-256.7-150.9-357.3l-1318.1-1318.1c-100.6-100.6-219.7-150.9-357.3-150.9 s-256.7,50.3-357.3,150.9L4037.7,7642.7c-100.6,100.6-150.9,219.7-150.9,357.3C3886.8,8137.6,3937.1,8256.7,4037.7,8357.3 L4037.7,8357.3z"></path>
            </svg>
            </div>
            <div data-u="arrowright" class="jssora073" style="width:50px;height:50px;top:0px;right:-10px;" data-autocenter="2" data-scale="0.75" data-scale-right="0.75">
            <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
            <path class="a" d="M11962.3,8357.3l-5891.8,5891.8c-100.6,100.6-219.7,150.9-357.3,150.9s-256.7-50.3-357.3-150.9 L4037.7,12931c-100.6-100.6-150.9-219.7-150.9-357.3c0-137.6,50.3-256.7,150.9-357.3L8254.1,8000L4037.7,3783.6 c-100.6-100.6-150.9-219.7-150.9-357.3c0-137.6,50.3-256.7,150.9-357.3l1318.1-1318.1c100.6-100.6,219.7-150.9,357.3-150.9 s256.7,50.3,357.3,150.9l5891.8,5891.8c100.6,100.6,150.9,219.7,150.9,357.3C12113.2,8137.6,12062.9,8256.7,11962.3,8357.3 L11962.3,8357.3z"></path>
            </svg>
            </div>
            </div>
            
            
            <script type="text/javascript">jssor_4_slider_init4();</script>
	        
	    </div> 
	    
	    <div id="cont_pc2" class="row col-xs-12 col-md-12 col-lg-12" style="margin-left:5px">
	        
	       <h3 style="text-align:center">Productos Nuevos</h3>
	            
	        <div id="jssor_5" class="prod_destacados"  style="position:relative;margin:0 auto;top:0px;width:1420px;left:-15px;height:310px;overflow:hidden;visibility:hidden;">
            <!-- Loading Screen -->
            <div data-u="loading" class="jssorl-009-spin" style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);">
            <img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;" src="img/spin.svg" />
            </div>
            <div data-u="slides" style="cursor:pointer;position:relative;top:0px;left:0px;width:1420px;height:310px;overflow:hidden;">
            
            
				
				<?php 
				foreach($prodDest as $destacado){ ?>
				    <div class="thumbnail clsProducto break-word">
					 <img src="<?=base_url()?>uploads/imagenes/thumbs/<?=$destacado['ruta']?>" alt="..." height="210" width="230">
					  <div class="caption" style="height:25%">
						<h4 class="nom_prod"><?=$destacado['nombre']?></h4><!-- largo maximo 56 letras -->
						<input type="hidden" value="<?=$destacado['idProducto'];?>" class="clsIdProducto">
					  </div>
					  <div class="caption">
					   <p class="precio_prod">$<?=$destacado['precio'];?></p>
					   </div>
				</div>
			<?php	} ?>
            
			
			
           
            </div>
            <!-- Bullet Navigator 
            <div data-u="navigator" class="jssorb057" style="position:absolute;bottom:12px;right:12px;" data-autocenter="1" data-scale="0.5" data-scale-bottom="0.75">
            <div data-u="prototype" class="i" style="width:16px;height:16px;">
            <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
            <circle class="b" cx="8000" cy="8000" r="5000"></circle>
            </svg>
            </div>
            </div>
			-->
            <!-- Arrow Navigator -->
            <div data-u="arrowleft" class="jssora073" style="width:50px;height:50px;top:0px;left:-10px;" data-autocenter="2" data-scale="0.75" data-scale-left="0.75">
            <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
            <path class="a" d="M4037.7,8357.3l5891.8,5891.8c100.6,100.6,219.7,150.9,357.3,150.9s256.7-50.3,357.3-150.9 l1318.1-1318.1c100.6-100.6,150.9-219.7,150.9-357.3c0-137.6-50.3-256.7-150.9-357.3L7745.9,8000l4216.4-4216.4 c100.6-100.6,150.9-219.7,150.9-357.3c0-137.6-50.3-256.7-150.9-357.3l-1318.1-1318.1c-100.6-100.6-219.7-150.9-357.3-150.9 s-256.7,50.3-357.3,150.9L4037.7,7642.7c-100.6,100.6-150.9,219.7-150.9,357.3C3886.8,8137.6,3937.1,8256.7,4037.7,8357.3 L4037.7,8357.3z"></path>
            </svg>
            </div>
            <div data-u="arrowright" class="jssora073" style="width:50px;height:50px;top:0px;right:-10px;" data-autocenter="2" data-scale="0.75" data-scale-right="0.75">
            <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
            <path class="a" d="M11962.3,8357.3l-5891.8,5891.8c-100.6,100.6-219.7,150.9-357.3,150.9s-256.7-50.3-357.3-150.9 L4037.7,12931c-100.6-100.6-150.9-219.7-150.9-357.3c0-137.6,50.3-256.7,150.9-357.3L8254.1,8000L4037.7,3783.6 c-100.6-100.6-150.9-219.7-150.9-357.3c0-137.6,50.3-256.7,150.9-357.3l1318.1-1318.1c100.6-100.6,219.7-150.9,357.3-150.9 s256.7,50.3,357.3,150.9l5891.8,5891.8c100.6,100.6,150.9,219.7,150.9,357.3C12113.2,8137.6,12062.9,8256.7,11962.3,8357.3 L11962.3,8357.3z"></path>
            </svg>
            </div>
            </div>
            
            
            <script type="text/javascript">jssor_5_slider_init5();</script>
	        
	    </div>
	<!--	
		<div class="row col-xs-12 col-md-12 col-lg-12" style="margin-left:5px">    

					<h3>Productos Nuevos</h3>

				   <?php for ($x=1;$x<=2;$x++) { ?>
					<div class="col-xs-6 col-sm-4 col-md-2">
							<div class="thumbnail">
							 <img src="http://placehold.it/150x100" alt="..." height="210" width="230">
							  <div class="caption">
								<p>producto</p>
								<input type="hidden" value="1" class="clsIdProducto">
								<p>$ 1200</p>
							  </div>
							</div>
					</div>
					<?php } ?>	
					
		</div>
    -->
	<script type="text/javascript">
	
	var baseurl = "<?= base_url(); ?>";	
	
	$('#cont_pc .clsProducto').click(function(){
		var i = $('.clsProducto').index(this);
		var nc = $('.clsIdProducto:eq('+i+')').val();
	   // alert(nc);
		location.href = baseurl+"cproductos/detProducto/"+nc; 
	});
	
	$('#cont_movil .clsProducto').click(function(){
		var i = $('.clsProducto').index(this);
		var nc = $('.clsIdProducto:eq('+i+')').val();
	   // alert(nc);
		location.href = baseurl+"cproductos/detProducto/"+nc; 
	});
	$('#cont_pc2 .clsProducto').click(function(){
		var i = $('.clsProducto').index(this);
		var nc = $('.clsIdProducto:eq('+i+')').val();
	   // alert(nc);
		location.href = baseurl+"cproductos/detProducto/"+nc; 
	});
	
	$('#cont_movil2 .clsProducto').click(function(){
		var i = $('.clsProducto').index(this);
		var nc = $('.clsIdProducto:eq('+i+')').val();
	   // alert(nc);
		location.href = baseurl+"cproductos/detProducto/"+nc; 
	});
	
	
</script>
</div>	
	<!--
	
	    function myFunction(x) {
    if (x.matches) { // If media query matches
       // document.body.style.backgroundColor = "yellow";
        alert('holaaaaaa');
        //$("#jssor_2").css("width","480px");
        //$("#jssor_2").attr('style','width: 300px');
    } else {
        //document.body.style.backgroundColor = "pink";
        //$("#jssor_2").css("width","400px");
        //$("#jssor_2").attr('style','width: 300px');
    }
}

var x = window.matchMedia("(max-width: 700px)")
myFunction(x) // Call listener function at run time
x.addListener(myFunction) // Attach listener function on state changes 
	
-->
