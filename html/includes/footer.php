        <aside class="lateral clearfix">
          <div class="widgets1 clearfix">
            <div class="cuenta hlpr-mr">
              <?php
                $test = date_create();
                /*Día - Mes - Año  Hora - Minuto - Segundo*/
                $anotherTest = date_create('12-06-2014 14:00:00');
              
                $f1 = date_format($test,'Y-m-d  H:i:s');
                $f2 = date_format($anotherTest,'Y-m-d  H:i:s');
                
                $purinto = date_diff($test,$anotherTest);
              ?>
              <a href="http://www.google.com">Esto va a Google</a>
              <div class="count-title">Faltan:</div>
              <div class="clearfix">
                <div class="count-num"><span id="day"><?php echo $purinto->format('%a'); ?></span> días</div>
                <div class="count-num"><span id="hour"><?php echo $purinto->format('%h'); ?></span> horas</div>
                <div class="count-num"><span id="min"><?php echo $purinto->format('%i'); ?></span> min</div>
                <div class="count-num"><span id="sec"><?php echo $purinto->format('%s'); ?></span> seg</div>
              </div>
              <div class="count-foot">Para la inauguración</div>
              <input id="timer_sign" type="hidden" data-sign="<?php echo $purinto->format('%R'); ?>">
            </div>
            <div class="complemento resultados">
              <h2 class="res-head">Últimos Resultados</h2>
              <div class="res-list">
                <ul>
                  <li><strong>Brasil 0</strong> - <strong>Hungría 3</strong></li>
                  <li><strong>Canadá 1</strong> - <strong>Shikoku 4</strong></li>
                  <li><strong>Tel Abib 2</strong> - <strong>URSS 5</strong></li>
                </ul>
              </div>
              <h3 class="res-footer">Presentado por [Patrocinador]</h3>
            </div>
          </div>
          <div class="widgets2 clearfix">
            <div class="complemento twitter hlpr-mr">
              <h2>
                <a href="https://twitter.com/TribunaDeportes">
                  <i class="icon-twitter"></i> @TribunaDeportes
                </a>
              </h2>
              <div class="tweets-container">
                <?php /*Aquí entran los tuits*/ ?>
              </div>
              <a href="#" class="moretweets">Más...</a>
            </div>
            <div class="complemento audios">
              <h2 class="aud-head">Audios <a href="https://soundcloud.com/"><img src="img/propietary/soundcloud.png"></a></h2>
              <div class="audio-list">
                <?php /*Aquí entran los audios*/ ?>
              </div>
              <a href="" class="mastracks">Más...</a>
            </div>
          </div>
          <div class="widgets3 clearfix">
            <div class="complemento foto">
              <h2 class="foto-head">Fotos del día</h2>
              <div>
                <div class="jcarousel">
                  <div class="jcarcontrol" id="izq"><span><i class="icon-chevron-left"></i></span></div>
                  <div class="jcarcontrol" id="der"><span><i class="icon-chevron-right"></i></span></div>
                  <div class="jcar-cont">
                    <div class="jcaritem"><a class="fancybox-thumbs" data-fancybox-group="thumb" href="img/temp/300x225.gif"><img src="http://placehold.it/100x75" alt="jcaritem"></a></div>
                    <div class="jcaritem"><a class="fancybox-thumbs" data-fancybox-group="thumb" href="img/temp/300x225.gif"><img src="http://placehold.it/100x75" alt="jcaritem"></a></div>
                    <div class="jcaritem"><a class="fancybox-thumbs" data-fancybox-group="thumb" href="img/temp/300x225.gif"><img src="http://placehold.it/100x75" alt="jcaritem"></a></div>
                    <div class="jcaritem"><a class="fancybox-thumbs" data-fancybox-group="thumb" href="img/temp/300x225.gif"><img src="http://placehold.it/100x75" alt="jcaritem"></a></div>
                    <div class="jcaritem"><a class="fancybox-thumbs" data-fancybox-group="thumb" href="img/temp/300x225.gif"><img src="http://placehold.it/100x75" alt="jcaritem"></a></div>
                    <div class="jcaritem"><a class="fancybox-thumbs" data-fancybox-group="thumb" href="img/temp/300x225.gif"><img src="http://placehold.it/100x75" alt="jcaritem"></a></div>
                    <div class="jcaritem"><a class="fancybox-thumbs" data-fancybox-group="thumb" href="img/temp/300x225.gif"><img src="http://placehold.it/100x75" alt="jcaritem"></a></div>
                  </div>
                </div>
              </div>
              <h3 class="foto-footer">Presentado por [Patrocinador]</h3>
            </div>
            <div class="aside-banner">
              <img src="http://placehold.it/300x130">
            </div>
          </div>
        </aside>
      </div>
      <footer class="main-footer">
        <div class="contenedor pie clearfix">
          <div id="tribuna"></div>
          <div class="logos clearfix">
            <div id="indetta"></div>
            <div id="exa"></div>
            <div id="lamejor"></div>
            <span class="hlpr-logo"></span>
            <div id="periodico"></div>
            <div id="canalpuebla"></div>
            <div id="radio"></div>
          </div>
          <p> Copyright &copy; 2011 TRIBUNA Comunicación, Sn. Martín Texmelucan no.68 Col. La Paz, Puebla, Mex. Tel. (222) 2328000</p>
        </div>
      </footer>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.1.min.js"><\/script>')</script>
        <script src="js/vendor/bootstrap.min.js"></script>
        <script src="http://connect.soundcloud.com/sdk.js"></script>
        <script src="js/actions.min.js"></script>
        <script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
        <script>
          Modernizr.load([
            {
              test: window.matchMedia,
              nope: "js/media.match.min.js"
            },
            "js/enquire.min.js",
            "js/queries.min.js"
          ]);
        </script>

        <!-- Add mousewheel plugin (this is optional) -->
        <script type="text/javascript" src="plugins/fancybox/lib/jquery.mousewheel-3.0.6.pack.js"></script>
        <!-- Add fancyBox main JS and CSS files -->
        <script type="text/javascript" src="plugins/fancybox/source/jquery.fancybox.js?v=2.1.5"></script>
        <link rel="stylesheet" type="text/css" href="plugins/fancybox/source/jquery.fancybox.css?v=2.1.5" media="screen" />
        <!-- Add Thumbnail helper (this is optional) -->
        <link rel="stylesheet" type="text/css" href="plugins/fancybox/source/helpers/jquery.fancybox-thumbs.css?v=1.0.7" />
        <script type="text/javascript" src="plugins/fancybox/source/helpers/jquery.fancybox-thumbs.js?v=1.0.7"></script>
        <script>
          $(document).ready(function(){
            $('.fancybox-thumbs').fancybox({

              prevEffect : 'none',
              nextEffect : 'none',

              closeBtn  : true,
              arrows    : false,
              nextClick : true,

              helpers : {
                thumbs : {
                  width  : 50,
                  height : 50
                }
              }
            }); 
            $('.infogs').fancybox({
              fitToView: false,
              maxWidth: 100+'%'
            });
          });
        </script>

        <?php
          /*Include para el componente de twitter*/
          include('twitter.php');
        ?>

        <?php /*Para videos de youtube en nota*/ ?>
        <script>
          $(document).ready(function(){
            $('.cuerponota').find('iframe').wrap('<center><div class="ytvideo"></div></center>');
          });
        </script>
    </body>
</html>