        <aside class="lateral clearfix">
          <div class="widgets1 clearfix hlpr-mr">
            <div class="cuenta">
              <iframe src="http://free.timeanddate.com/countdown/i41j74es/cf12/cm0/cu4/ct0/cs0/ca0/cr0/ss0/cacfff/cpcfff/pct/tcfff/fs100/szw320/szh135/tacfff/tpcfff/macfff/mpcfff/iso2014-06-12T12:00:00" frameborder="0" width="117" height="48"></iframe>
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
                <i class="icon-twitter"></i> @TribunaDeportes</a>
              </h2>
            </div>
            <div class="complemento audios">
              <h2>Audios</h2>
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
        <script src="js/actions.min.js"></script>
        <script src="js/vendor/bootstrap.min.js"></script>

        <!--script src="js/plugins.js"></script>
        <script src="js/main.js"></script-->

        <script>
            var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
            (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
            g.src='//www.google-analytics.com/ga.js';
            s.parentNode.insertBefore(g,s)}(document,'script'));
        </script>

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

    </body>
</html>