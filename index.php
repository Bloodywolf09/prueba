<?php include 'header.php'; ?>
<link rel="stylesheet" href="css/hover-proy.css?<?php echo rand(); ?>">
        <!--slider -->
            <section id="container-slider">	
                <a href="javascript: fntExecuteSlide('prev');" class="arrowPrev"><i class="fas fa-chevron-circle-left"></i></a>
                <a href="javascript: fntExecuteSlide('next');" class="arrowNext"><i class="fas fa-chevron-circle-right"></i></a>
                    <ul class="listslider">
                        <li><a itlist="itList_0" href="#" class="item-select-slid"></a></li>
                        <li><a itlist="itList_1" href="#"></a></li>
                        <li><a itlist="itList_2" href="#"></a></li>
                    </ul>
                    <ul id="slider">
                        <li style="background-image: url('images/riego.jpg'); z-index:0; opacity: 1;">
                        <div class="content_slider" >
                            <div>
                            <h2 class="text-white">Gestión de Agua</h2>
                        <p>Estudios y diseños, construcción, puesta en marcha, rehabilitación, mejoramiento y operación</p>
                        <a href="que_hacemos.php" class="btnSlider">Ver más</a>
                        </div>
                        </div>
                        </li>
                        <li style="background-image: url('images/rural.jpg'); ">
                        <div class="content_slider" >
                            <div>
                            <h2 class="text-white">Gestión Pública</h2>
                        <p>Servicios de consultoría en la linea del buen gobierno</p>
                        <a href="que_hacemos.php" class="btnSlider">Ver más</a>
                        </div>
                        </div>
                        </li>
                        <li style="background-image: url('images/energia.jpg'); ">
                        <div class="content_slider" >
                            <div>
                            <h2 class="text-white">Energias Limpias</h2>
                        <p>Diseño, Integración, Construcción y puesta en marcha de facilidades de generación energética</p>
                        <a href="que_hacemos.php" class="btnSlider">Ver más</a>
                        </div>
                        </div>
                        </li>
                    </ul>
        </section>


        <!-- servicios -->
        <div class="container-fluid mt-2 servicios col-10 col-sm-10 cuadro-s imagen-servicios">
            
            
             <div class="row imagen-servicios">
                <div class="col-12 col-sm-12  mt-3">
                    <div class="col-12 col-sm-12">
                        <h1 class="text-white titulo-servicios"> SERVICIOS </h1>
                    </div>
                    
                </div>
            </div>
                <!--
                <div class="row grid-gaps mt-4" style="justify-content:center;">
                    <div class="col-sm-2">
                        <img src="images/bombillo.png" class="img-fluid img-servicios">
						<p class="text-center text-white sevice-desc sin-espacio mt-24 descrip"> Energias <br> Limpias</p>
                    </div>
                    
                    <div class="col-sm-2">
                        <img src="images/agua.png" class="img-fluid img-servicios">
						<p class="text-center text-white sevice-desc sin-espacio mt-24 descrip"> Gestión <br>del Agua </p>
                    </div>

                    <div class="col-sm-2">
                        <img src="images/gestion.png" class="img-fluid img-servicios">
						<p class="text-center text-white sevice-desc sin-espacio mt-24 descrip"> Gestión <br> Publica </p>
                    </div>

                    <div class="col-sm-2">
                        <img src="images/agro.png" class="img-fluid img-servicios">
						<p class="text-center text-white sevice-desc sin-espacio mt-24 descrip"> Agro y Soberanía Alimentaria </p>
                    </div>

                    <div class="col-sm-2">
                        <img src="images/investigacion.png" class="img-fluid img-servicios">
						<p class="text-center text-white sevice-desc sin-espacio mt-24 descrip"> Investigacion <br> Socioecónomica </p>
                    </div>
                    
                </div>

                </div>
            </div> -->
        </div>        
        
        <!-- nosotros -->
        <div class="container-fluid nosotros">
            <div class="row">
                <div class="col-sm-7">
                    <h1 class="text-black titulo-nos"> NOSOTROS </h1>

                    <p class="descrip-nosotros">  Somos una entidad sin ánimo de lucro que trabaja de manera armoniosa y 
                        entusiasta con los actores del desarrollo socio económico de Colombia 
                        para lograr de nuestro país un lugar donde la vida en paz prospere con 
                        justicia, equidad e igualdad promoviendo y ejecutando proyectos en torno
                         al uso del agua, generación de energías limpias, desarrollo productivo 
                         agropecuario y prácticas de buen gobierno.
                    </p>
                </div>

                <script src="js/videos.js?<?php echo rand(); ?>"></script>
                <div class="col-sm-5 col-5">
                    <section class="container-fluid">
                        <video id="slider-video" autoplay muted controls>
                            <source src="images/video1.mp4"  type="video/mp4">
                        </video>  
                    </section>
                </div>

                <div class="col-6 col-sm-6 ml-2">
                        <button class="btn btn-primary desc-btn button-p"><a href="quienes_somos.php" class="text-white no-deco">ver mas </a></button>
                    </div>
            </div>
        </div>

        <!-- indicadores -->
        
        <!-- TradingView Widget BEGIN -->
<div class="tradingview-widget-container mt-4">
  <div class="tradingview-widget-container__widget"></div>
  <div class="tradingview-widget-copyright"><a href="https://es.tradingview.com/markets/" rel="noopener" target="_blank"><span class="blue-text"></span></a></div>
  <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-ticker-tape.js" async>
  {
  "symbols": [
    {
      "description": "PETROLEO (WTI)",
      "proName": "BLACKBULL:WTI"
    },
    {
      "description": "DOLAR",
      "proName": "FX_IDC:USDCOP"
    },
    {
      "description": "EURO",
      "proName": "FX_IDC:EURCOP"
    },
    {
      "description": "CAFE",
      "proName": "EASYMARKETS:CFEUSD"
    }
  ],
  "showSymbolLogo": true,
  "colorTheme": "dark",
  "isTransparent": false,
  "displayMode": "adaptive",
  "locale": "es"
}
  </script>
</div>
<!-- TradingView Widget END -->


        <!-- PROYECTOS -->
        <div class="container-fluid mt-5">
            <div class="row" class="absolute" style="background-image: url(images/proyecto.jpg); background-size: cover;    height: 30rem;">
                <div class="col 12 col-sm-12">

                <p class="titulop text-white"> PROYECTOS</p>
                </div>

                <div class="col-12 col-sm-12 content">
                    <div class="row grid-gap mt-3">
                        <div class="col-1 col-sm-1">
                            
                        </div>

                        <div class="col-3 col-sm-3">
                        <div class="filtro img-fluid col-12 col-sm-12"></div>	
                        <div class="contenedor">
                            <figure>
                            <img src="images/img1.png" class="img-fluid img-proy">
                                <div class="capa contenedor-capa">
                                    <h3 class="titulo-hover">DISEÑO Y CONSTRUCCION SISTEMA DE RIEGO POR ASPERSION AUTOMATIZADO EN LA PLAZA DE ARMAS DEL CENOP-POLICIA NACIONAL CHICORAL TOLIMA.</h3>
                                    <p style="margin-top: 28%">ACTIVIDADES EJECUTADAS: <br><br>
                                    Preliminares, Estructuras en Concreto, Acero de refuerzo, Instalación Accesorios y tuberías PVC, Impermeabilizantes, Pañetes, Pintura, Morteros, Rellenos, Obras de protección descoles, Retiro y manejo de sobrantes.</p>
                                </div>
                            </figure>
                        </div>
                        </div>

                        <div class="col-3 col-sm-3">
                        <div class="filtro img-fluid col-12 col-sm-12"></div>
                        <div class="contenedor">
                            <figure>
                            <img src="images/img2.png" class="img-fluid img-proy">
                                <div class="capa contenedor-capa">
                                    <h3 class="titulo-hover">CONVENIO No. ESP 048 DE 2013. CELEBRADO ENTRE EL MUNICIPIO DE PURIFICACION TOLIMA, LA CORPORACION PARA EL APROVECHAMIENTO SOSTENIBLE DE LOS RECURSOS NATURALES Y EL DESARROLLO SOCIAL – CORANDES Y PETROBRAS.</h3>
                                    <p>ACTIVIDADES EJECUTADAS: 
                                    Evaluación Plantas de tratamiento existentes, realización de los diseños del sistema de bombeo de pozos profundos utilizando energía solar para conversión de sistema bombeo eléctrico actual, Diseños de dos sistemas de bombeo por energía solar de los pozos profundos Hernán Murillo y Añiles para conectarlos al tanque de planta de tratamiento añiles.</p>
                                </div>
                            </figure>
                        </div>
                        </div>

                        <div class="col-3 col-sm-3">
                            <div class="filtro img-fluid col-12 col-sm-12"></div>
                            <div class="contenedor">
                                <figure>
                                <img src="images/img3.png" class="img-fluid img-proy">
                                <div class="capa contenedor-capa">
                                    <h3 class="titulo-hover">CONSTRUCCION DE UN RESERVORIO PARA EL ALMACENAMIENTO DE AGUAS LLUVIAS EN LA VEREDA VEGA DE ORIENTE DEL MUNICIPIO DE CAMPOALEGRE EN EL DEPARTAMENTO DEL HUILA:</h3>
                                    <p style="margin-top: 26%">ACTIVIDADES EJECUTADAS: 
                                    Replanteo topográfico, movimiento de tierras, construcción diques en tierra, construcción vertederos excesos, sistema de vaciado, curado y sellado del dique.</p>
                                </div>
                            </figure>
                        </div>
                        </div>


                        <div class="col-6 col-sm-6 ml-2 text-end">
                            <button class="btn btn-primary desc-btn mt-1 ver-mas-proy"><a href="proyectos_alianzas.php" class="text-white no-deco">ver mas </a></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!--trabaja con nosotros -->

        

<script>
if(document.querySelector('#container-slider')){
    setInterval('fntExecuteSlide("next")',5000);
 }
 //------------------------------ LIST SLIDER -------------------------
 if(document.querySelector('.listslider')){
    let link = document.querySelectorAll(".listslider li a");
    link.forEach(function(link) {
       link.addEventListener('click', function(e){
          e.preventDefault();
          let item = this.getAttribute('itlist');
          let arrItem = item.split("_");
          fntExecuteSlide(arrItem[1]);
          return false;
       });
     });
 }
 
 function fntExecuteSlide(side){
     let parentTarget = document.getElementById('slider');
     let elements = parentTarget.getElementsByTagName('li');
     let curElement, nextElement;
 
     for(var i=0; i<elements.length;i++){
 
         if(elements[i].style.opacity==1){
             curElement = i;
             break;
         }
     }
     if(side == 'prev' || side == 'next'){
 
         if(side=="prev"){
             nextElement = (curElement == 0)?elements.length -1:curElement -1;
         }else{
             nextElement = (curElement == elements.length -1)?0:curElement +1;
         }
     }else{
         nextElement = side;
         side = (curElement > nextElement)?'prev':'next';
 
     }
     //RESALTA LOS PUNTOS
     let elementSel = document.getElementsByClassName("listslider")[0].getElementsByTagName("a");
     elementSel[curElement].classList.remove("item-select-slid");
     elementSel[nextElement].classList.add("item-select-slid");
     elements[curElement].style.opacity=0;
     elements[curElement].style.zIndex =0;
     elements[nextElement].style.opacity=1;
     elements[nextElement].style.zIndex =1;
 }    
    
</script>

<?php include 'footer.php'; ?>