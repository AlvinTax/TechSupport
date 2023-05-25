<!--************ Imagen que reemplaza el carousel para dispositivos moviles ********-->
<div id="img-linux-tux" class="container hidden-lg hidden-md hidden-sm">
    <center><img src="img/slide-header.jpg" class="img-responsive img-rounded" alt="Image"></center>
</div>

<!--************************************Carousel******************************-->
<div class="container hidden-xs">
    <div class="col-xs-12">
<div id="carousel-example-generic" class="carousel slide">

  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
    <li data-target="#carousel-example-generic" data-slide-to="3"></li>
  </ol>
    <div class="carousel-inner">
       <div class="item active">
           <img src="img/main/slider01.jpg" alt="">
          <div class="carousel-caption">
                  TechSupport
          </div>
       </div>
       <div class="item">
       <img src="img/main/slider02.jpg" alt="">
          <div class="carousel-caption">
              Almacenamiento
          </div>
       </div>
       <div class="item ">
       <img src="img/main/slider03.jpg" alt="">
          <div class="carousel-caption">
              Desktop
          </div>
        </div>
        <div class="item ">
       <img src="img/main/slider04.jpg" alt="">
          <div class="carousel-caption">
              Laptops
          </div>
        </div>
        <div class="item ">
       <img src="img/main/slider05.jpg" alt="">
          <div class="carousel-caption">
              Motherboard
          </div>
        </div>
        <div class="item ">
        <img src="img/main/slider06.jpg" alt="">
          <div class="carousel-caption">
              Piezas
          </div>
        </div>
   </div>
   <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
       <span class="icon-prev"></span>
   </a>
   <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
     <span class="icon-next"></span>
   </a>
</div>
        </div>
     <div class="col-sm-2">&nbsp;</div>
</div>
<!--************************************ Fin Carousel******************************-->

 <hr class="hidden-xs">

<div class="container">
  <div class="row">
    <div class="col-md-12">
        <h1 class="text-center text-info">TRABJAMOS DIRECTAMENTE CON:</h1>
    </div>
  </div>
</div>
<br>
<div class="container">
    <div class="row">
        <div class="col-xs-12 col-md-6 thumbnail">
            <h3 class="text-center">HP</h3>
            <img  src="img/logohp.png" class="img-responsive logos_GnuLinux" alt="Image">
             <p>
             Hewlett-Packard Company (NYSE: HPQ), más conocida como HP, 
             fue una empresa de tecnología estadounidense, con sede en Palo Alto, 
             California, dedicada a la fabricación y comercialización de hardware y software además de brindar servicios de asistencia relacionados con la informática.
             </p>
             <p class="text-center">
                <a href="https://es.wikipedia.org/wiki/Hewlett-Packard" class="btn btn-primary btn-sm" role="button">Leer más</a>
             </p>
        </div>
        <div class="col-xs-12 col-md-6 thumbnail">
          <h3 class="text-center">DELL</h3>
            <img src="img/logodell.png" class="img-responsive logos_GnuLinux" alt="Image">
            <p>
            Dell, Inc.
              es una compañía multinacional estadounidense establecida en Round Rock (Texas) que desarrolla,
               fabrica, vende y da soporte a computadoras personales, servidores, switches de red,
               programas informáticos, periféricos y otros productos relacionados con la tecnología.
            </p>
            <center><a href="https://es.wikipedia.org/wiki/Dell" class="btn btn-primary btn-sm" role="button">Leer más</a></center>
        </div>
        <div class="col-xs-12 col-md-6 thumbnail">
            <h3 class="text-center">ASUS</h3>
            <img src="img/logoasus.png" class="img-responsive logos_GnuLinux" alt="Image">
            <p>
            ASUS es una empresa multinacional establecida en Taiwán desde 1989 que diseña y 
            fabrica hardware de informática y electrónica de consumo.
            </p>
            <center><a href="https://es.wikipedia.org/wiki/ASUS" class="btn btn-primary btn-sm" role="button">Leer más</a></center>
        </div>
        <div class="col-xs-12 col-md-6 thumbnail">
            <h3 class="text-center">APPLE</h3>
            <img src="img/logoapple.png" class="img-responsive logos_GnuLinux" alt="Image">
            <p>
            Apple Inc., es una empresa multinacional estadounidense (una de las más grandes del mundo),
             diseña y produce equipos electrónicos y software. 
             Entre los productos de hardware más conocidos de la empresa se cuenta con equipos Macintosh,
            el iPod, el iPhone y el iPad.
            </p>
            <center><a href="https://es.wikipedia.org/wiki/Apple" class="btn btn-primary btn-sm" role="button">Leer más</a></center>
        </div>
    </div>
</div>
<script>
    $(document).ready(function(){
        $("#carousel-example-generic").carousel({
            interval: 4000,
        });
    });
</script>