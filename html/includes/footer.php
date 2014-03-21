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
                  <li>Partido 1</li>
                  <li>Partido 2</li>
                  <li>Partido 3</li>
                </ul>
              </div>
              <h3 class="res-footer">Presentado por</h3>
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
              <h2 class="aud-head">Audios</h2>
              <div class="audio-list">
                <?php /*Aquí entran los audios*/ ?>
              </div>
              <a href="" class="mastracks">Más...</a>
            </div>
          </div>
          <div class="complemento foto">
            <h2 class="foto-head">Fotos del día</h2>
            <div>
              Aquí las fotos ;D
            </div>
            <h3 class="foto-footer">Presentado por</h3>
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

        <?php
          /*Include para el componente de twitter*/
          include('twitter.php');
        ?>

        <!-- THE ZEN AREA -->
        <div class="the-developer-zen-area">
          <style type="text/css">
            .the-developer-zen-area {
              position: fixed;
              bottom: 0;
              right: 0;
              background: rgba(255,255,255,0.3);
              border: 1px solid rgba(0,0,0,0.5);
              transition: all 0.5s;
            }
            .the-developer-zen-area:hover { background: #fff; }
            .zen-rojo { background: red; }
            .zen-azul { background: blue; }
            .zen-amarillo { background: yellow; }
            .zen-verde { background: green; }
          </style>
          Ésta es mi área zen u_u (temporal, para cosas temporales, no permanentes, pasajeras)
          <button class="zen-togglecolors p54">Toggle zone's color</button>
          <script>
            var elid = 'p54';
            $('.zen-togglecolors.'+elid).on('click',function(){
              $('.lateral').toggleClass('zen-rojo');
              $('.contenido').toggleClass('zen-azul');
              $('.main-header').toggleClass('zen-amarillo');
              $('.main-footer').toggleClass('zen-verde');
            });
          </script>
        </div>

        <script>
            var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
            (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
            g.src='//www.google-analytics.com/ga.js';
            s.parentNode.insertBefore(g,s)}(document,'script'));
        </script>
    </body>
</html>