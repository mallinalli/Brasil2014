/*Menú principal -------------------------------------------------------------------------------------------------*/
$('.menubutton').on('click','a',function(a){
	a.preventDefault();
	$('.navegacion').stop().slideToggle();
});

/* Obtención de datos para el componente de video
*/

var elCanalDeYoutubeQueQuieresVer = 'kexpradio';


var categorias = new Array();
$.getJSON('https://gdata.youtube.com/feeds/api/users/'+elCanalDeYoutubeQueQuieresVer+'/uploads/?&max-results=50&alt=json', function(data) {
  var elvideo = data.feed.entry;
  /**
		/* Obtiene el último video del canal de Youtube y lo asigna al stage del componente
		*/
  var startervid = elvideo[0].id.$t;
  startervid = startervid.replace('http://gdata.youtube.com/feeds/api/videos/','https://www.youtube.com/embed/');
  $('.actual-video').html('<iframe id="ytplayer" type="text/html" width="100%" height="100%" src="'+startervid+'" frameborder="0" allowfullscreen></iframe>');
  $('.desk-actual-video').html('<iframe id="ytplayer" type="text/html" width="100%" height="100%" src="'+startervid+'" frameborder="0" allowfullscreen></iframe>');

  /**
		/* ========================================================
		/* AQUÍ COMIENZA EL COMPONENTE DE VIDEO VERSIÓN ESCRITORIO
		/* ========================================================
		*/
  $('.desk-home-video-component,.home-video-component').on('click','a',function(e){
    e.preventDefault();
  })

  var deskstate = true;
  /**
  /* Pone el nombre del canal
  */
  $('.desk-video-menu').find('header span').html(elvideo[0].author[0].name.$t);
  /**
		/* Populate the component's submenu with the data from youtube
		*/
  for(k=0; k<elvideo.length; k++) {
    var videourl = elvideo[k].id.$t;
    videourl = videourl.replace('http://gdata.youtube.com/feeds/api/videos/','https://www.youtube.com/embed/');
    $('.desk-video-menu > ul').append('<li class="desk-video-min"><a href="" data-videocall="'+videourl+'"><img src="'+elvideo[k].media$group.media$thumbnail[1].url+'" alt="img"><div class="desk-vid-cap"><span>'+elvideo[k].title.$t+'</span></div></a></li>');
  }

  $('.desk-pull').on('click',function(){
    if (deskstate == true) {
      $('.desk-video-menu-wrapper').animate({
        width: 0+'%'
      });
      $('.desk-actual-video').animate({
        width: 95+'%'
      },function(){
        $('.desk-pull a').html('<i class="icon-angle-left"></i>');
      });
      deskstate = !deskstate;
    }
    else {
      $('.desk-video-menu-wrapper').animate({
        width: 35+'%'
      });
      $('.desk-actual-video').animate({
        width: 60+'%'
      },function(){
        $('.desk-pull a').html('<i class="icon-angle-right"></i>');
      });
      deskstate = !deskstate;
    }
  });

  /**
		/* Sustitución del video actual en stage, por el cliqueado
		*/
  $('.desk-video-min').on('click','a',function(){
    $('.desk-actual-video iframe').attr('src',$(this).data('videocall'));
  });

  /**
		/* ========================================================
		/* AQUÍ COMIENZA EL COMPONENTE DE VIDEO VERSIÓN MÓVIL
		/* ========================================================
		*/
  var menu_state = false;
  /**
  /* Pone el nombre del canal
  */
  $('.video-menu').find('header span').html(elvideo[0].author[0].name.$t);
  /**
			/* Populate the component's submenu with the data from youtube
			*/
  for(k=0; k<elvideo.length; k++) {
    var videourl = elvideo[k].id.$t;
    videourl = videourl.replace('http://gdata.youtube.com/feeds/api/videos/','https://www.youtube.com/embed/');
    $('.video-menu > ul').append('<li class="video-min"><a href="" data-videocall="'+videourl+'"><img src="'+elvideo[k].media$group.media$thumbnail[1].url+'" alt="img"><div class="vid-cap"><span>'+elvideo[k].title.$t+'</span></div></a></li>');
  };

  /**
			/* Sustitución del video actual en stage, por el cliqueado
			*/
  $('.video-min').on('click','a',function(){
    $('.actual-video iframe').attr('src',$(this).data('videocall'));
    movilPush();
  });


  $('.home-video-component .pull').on('click','a',function(){
    if (menu_state == false) {
      movilPull();
    }
    else {
      movilPush();
    };
  });

  function movilPull(){
    menu_state = !menu_state;
    $('.video-menu-wrapper').find('.video-menu').show();
    $('.video-menu-wrapper').stop().slideToggle(function(){
      $('.pull a').html('<i class="icon-angle-up"></i>');
    });
  };

  function movilPush(){
    menu_state = !menu_state;
    $('.video-menu-wrapper').stop().slideToggle(function(){
      $('.pull a').html('<i class="icon-angle-down"></i>');
      $('.video-menu-wrapper').find('.video-menu').hide();
    });
  };

});

/**
    /* =================================
    /* AQUÍ COMIENZA LA CUENTA REGRESIVA
    /* =================================
    */
var dateTimer;
var iDay = parseInt($('#day').html());
var iHour = parseInt($('#hour').html());
var iMin = parseInt($('#min').html());
var iSec = parseInt($('#sec').html());

if ($('#timer_sign').data('sign') == '+') {
  dateTimerInitiate();
} else {
  timerEnded();
  $('#day').html('0');
  $('#hour').html('0');
  $('#min').html('0');
  $('#sec').html('0');
}

function dateTimerInitiate(){
  clearInterval(dateTimer);
  dateTimer =  setInterval (function(){
    iSec--;
    if (iSec == 0 && iMin == 0 && iHour == 0 && iDay == 0) {
        timerEnded();
    } else if (iSec == 0) {
      iSec = 59;
      iMin--;
      if (iMin == -1) {
        iMin = 59;
        iHour--;
        if (iHour == -1) {
          iHour = 23;
          iDay --;
          $('#day').html(iDay);
        };
        $('#hour').html(iHour);
      };
      $('#min').html(iMin);
    }
    $('#sec').html(iSec);
  }, 1000);
};

function timerEnded(){
  clearInterval(dateTimer);
}