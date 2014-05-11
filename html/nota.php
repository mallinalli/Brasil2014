        <?php include('includes/header.php') ?>
        <div class="contenido">
          <div class="clearfix">
          	<h2 class="section-header">Título de una noticia de un día anterior.</h2>
            <?php
              /* =====================
                  Inicia Compartir
              ======================== */
              /*Data for the share buttons *=*=*=*=* Uncomment to make it work ;D =*=*=*=* */
              
              /*$shurl = wp_get_attachment_url( get_post_thumbnail_id($post->ID, 'thumbnail') );

              function make_bitly_url($url,$login,$appkey,$format = 'xml',$version = '2.0.1')
              {
                
                $bitly = 'http://api.bit.ly/shorten?version='.$version.'&longUrl='.urlencode($url).'&login='.$login.'&apiKey='.$appkey.'&format='.$format;
                
                
                $response = file_get_contents($bitly);
                
                if(strtolower($format) == 'json')
                {
                  $json = @json_decode($response,true);
                  return $json['results'][$url]['shortUrl'];
                } else {
                  $xml = simplexml_load_string($response);
                  return 'http://bit.ly/'.$xml->results->nodeKeyVal->hash;
                }
              }
              $shortenthis = get_the_permalink();
              $shlink = make_bitly_url($shortenthis,'sinnerei','R_97f00998074d81d71a99b73433f166ff','json');*/
            ?>
            <div class="share" data-shurl="" data-image="" data-caption="">
              <ul>
                <li class="stw"><i class="icon-twitter"></i></li><li class="sfb"><i class="icon-facebook"></i></li><!-- <li class="sgp"><i class="icon-google-plus"></i></li> -->
              </ul>
            </div>
            <?php /*===========
              Termina Compartir
              =================*/ ?>
          	<div class="nota-completa clearfix">
          	 	<img src="http://placehold.it/500x254">
          		<p class="pie-foto">Este es el pie de foto</p>
              <aside class="related-nota clearfix">
                <img src="img/brasil1.png" class="img-nota">
              </aside>
              <p class="source"><span><strong>Agencia de Noticias EFE</strong></span><br><span>27/02/2014</span></p>
              <div class="zona-balazo">
                <i class="icon-caret-right"></i> <span class="balazo">texto del balazo</span>
                <hr>
              </div>
              <div class="cuerponota">
                Puebla, México.- Lorem ípsum dolor sit amét, eú est voluptatum appellantur, cúm páulo graecis ne. Eam cú vitaé nemoré. Ius tollít vidisse coñtentiones in, vis ut omnesqué placerát prodesset, tincídunt concludáturque in his. Per póstea essent cu, íñ volumús salutandi sea. Simul graecí vivéndo sea ex. Ad inermis nominaví evertítur éum, vel labitur eurípidis argumentum ét. Ut cum ésse facér. Altera vivendum qui et, pri ludus gubergréñ coñsetetur ád.<br>
                <img src="http://placehold.it/1500x1500" alt="test">
                <br>Modo elaboraret út per, páulo scaevóla vis cu. Vél conceptam comprehensam te, quídam similique prí íd. Ea éum eñim assueverit efficiantur, néc ludús eléctram complectitur in, deniqué lobortis mediocrem et his. Duó nonúmy molestié liberavisse at, sit ut quod rebum bonorum, qui electram prodesset argumentúm ín. Sit dolorem ancilláe ad, sea ut erat omnés honestatis. Velit dicit liberavisse id pri. Ad vix dicám perfecto suavitate, ut sed nibh malis mediocrem, stet omnis adolescens té iús.<br>
                <iframe width="560" height="315" src="//www.youtube.com/embed/iJ4k7wxYqCo?rel=0" frameborder="0" allowfullscreen></iframe>
                <br>Per talé ómittantur án. An labores tincidunt est, mei ut errór eruditi nusquam, eirmod láoreet et vix. Stet denique accusata éa séd, persiús similique ex sea, vix choro alterum ocurreret ne. Per meliore percipit ét. In perpetua principes mei, aliá conseqúuntur ne mel. Tantas detracto omittantur ea vim. Pro ad mentitum democrítum. Vím quém dícta noñumy té, labitur qúalisque ex has.
              </div>
              <div class="fb-comments" data-href="http://www.ctrlup.net/brazil/nota.php" data-width="480" data-numposts="5" data-colorscheme="light"></div>
          	</div>
          </div>
        </div>
        <?php include('includes/footer.php') ?>