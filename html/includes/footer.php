        <aside class="lateral clearfix">
          <div class="widgets1 clearfix hlpr-mr">
            <div class="cuenta">
              <?php
                $test = date_create();
                /*Día - Mes - Año  Hora - Minuto - Segundo*/
                $anotherTest = date_create('12-06-2014 14:00:00');
              
                $f1 = date_format($test,'Y-m-d  H:i:s');
                $f2 = date_format($anotherTest,'Y-m-d  H:i:s');
                
                $purinto = date_diff($test,$anotherTest);
              ?>
              <div><span id="day"><?php echo $purinto->format('%a'); ?></span> días</div>
              <div><span id="hour"><?php echo $purinto->format('%h'); ?></span> horas</div>
              <div><span id="min"><?php echo $purinto->format('%i'); ?></span> minutos</div>
              <div><span id="sec"><?php echo $purinto->format('%s'); ?></span> segundos</div>
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
            <div class="complemento twitter">
              <h2>
                <a href="https://twitter.com/TribunaVigila">
                  <i class="icon-twitter"></i> @TribunaDeportes
                </a>
              </h2>
              <div class="tweets-container">
                <?php /*Aquí entran los tuits*/ ?>
              </div>
            </div>
            <div class="complemento audios">
              <h2 class="aud-head">Audios</h2>
              Aquí los audios :0
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
        <div class="contenedor pie">
          <img src="img/tribuna1.png" alt="Tribuna Comunicación"/>
          <img src="img/logo_exa.png" alt="EXA 98.7FM"/>
          <img src="img/logo_lamejor.png" alt="La Mejor 1250AM"/>
          <img src="img/logo_factory.png" alt="Factory Television"/>
          <p> Copyright &copy; 2011 TRIBUNA Comunicación, Sn. Martín Texmelucan no.68 Col. La Paz, Puebla, Mex. Tel. (222) 2328000</p>
        </div>
      </footer>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.1.min.js"><\/script>')</script>
        <script src="js/vendor/bootstrap.min.js"></script>
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
          <button id="zen-togglecolors">Toggle zone's color</button>
          <script>
            $('#zen-togglecolors').on('click',function(){
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