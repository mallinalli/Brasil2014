/*Menú principal -------------------------------------------------------------------------------------------------*/
$('.menubutton').on('click','a',function(a){
	a.preventDefault();
	$('.navegacion').stop().slideToggle();
});

/* Obtención de datos para el componente de video
*/

  /**
    /* ====================================
    /* AQUÍ COMIENZA EL COMPONENTE DE VIDEO
    /* ====================================
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
		/* AQUÍ COMIENZA EL COMPONENTE DE VIDEO VERSIÓN ESCRITORIO
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
		/* AQUÍ COMIENZA EL COMPONENTE DE VIDEO VERSIÓN MÓVIL
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

/**
    /* =================================
    /* COMPONENTE DE AUDIO
    /* =================================
    */
/**
/* Creación del objeto song, al que se puede controlar con play, pause, etc.
*/

SC.initialize({
  client_id: 'fadfafec99840a9bab19d077b12fd206'
});

var url = 'https://api.soundcloud.com/tracks.json?user_id=sinnerei&client_id=fadfafec99840a9bab19d077b12fd206';
$.getJSON(url, function(tracks) {
  var songs = tracks;
  console.log(songs);
});

// stream track id 293
SC.stream("/tracks/60424593", function(sound){
  sound.play();
});

console.log('queonda')
var playing = false;
var song = new Audio("http://ctrlup.net/test_files/common.mp3");
/**
/* Verificación, si el navegador no puede reproducir mp3, carga un ogg. (Ópera)
*/
isSupp=song.canPlayType('audio/mp3');
if (!isSupp){
  song = new Audio("http://ctrlup.net/test_files/common.ogg");
  console.log(song);
}
/**
/* Se inicializa una variable timer para que sea accesible desde donde sea.
*/
var timer;
/**
/* La función timerSettings() se encarga de re-crear el timer que utiliza la
/* barra de controles para mostrar la bolita de posición
*/
function timerSettings(){
  /**
  /* Siempre se borra el timer anterior para evitar bubbling
  */
  clearInterval(timer);
  /**
  /* Aquí se re-crea la variable que contiene el setInterval y sus propiedades
  /* este funciona cada medio segundo, para evitar el sobreconsumo de recursos
  */
  timer =  setInterval (function(){
    /**
    /* Si la canción ya terminó, cambia el texto del botón de play/pause y
    /* elimina el timer
    */
    if (song.ended) {
      playing = false;
      $('#play').html('<i class="fa fa-play"></i>');
      clearInterval(timer);
    };
    /**
    /* Asigna el valor proporcional del tiempo actual de la canción al margen
    /* izquierdo, que representa la posición actual en el archivo de audio
    */
    $('.audio_thingie').css('margin-left',(song.currentTime*$('.audio_container').width())/song.duration);
    console.log(song.currentTime)
  }, 500);
}
/**
/* Esta función detecta el estado actual de reproducción y crea o elimina un timer
/* de acuerdo a esto, además de asignar el texto adecuado al botón de play/pause
*/
function togglePlay() {
  if (song.paused) {
    song.play();
    play = true;
    $('#play').html('<i class="icon-pause"></i>');
    timerSettings();
  } else {
    song.pause();
    play = false;
    $('#play').html('<i class="icon-play"></i>');
    clearInterval(timer);
  }
}
/**
/* Al dar click en el botón de play/pause ejecuta la función togglePlay()
*/
$('#play').on('click',function(e){
  e.preventDefault();
  togglePlay();
});
/**
/* Al hacer clic sobre la bolita de posición y arrastrarla, iguala la posición del mouse dentro
/* de .audio_wrapper con la de ésta. Mientras esto suceda, se elimina el timer
*/
$('.audio_thingie').on('mousedown',function(){
  $('.audio_wrapper').mousemove(function(e){
    /**
    /* Nota: el 10 es para compensar el padding de audio_wrapper y audio_thingie, se puede mejorar
    */
    var theX = e.pageX - this.offsetLeft-10;
    /**
    /* Un if para los límites del drag
    */
    if(theX < 0){
      $('.audio_thingie').css('margin-left','0');
    } else if(theX > $('.audio_wrapper').width()) {
      $('.audio_thingie').css('margin-left',$('.audio_wrapper').width());
    } else {
      $('.audio_thingie').css('margin-left',theX);
    }
    clearInterval(timer)
  });
  /**
  /* Al retirar el mouse de los límites de .audio_wrapper, desvincula la relación
  /* posición del mouse - posición de la bolita, y de estar en reproducción el audio
  /* crea un timer
  */
  $('.audio_wrapper').on('mouseleave',function(){
    $('.audio_wrapper').unbind('mousemove');
    if (playing == false) {
      timerSettings();
    };
  });
});
/**
/* Al detectar el evento mouseup dentro de .audio_wrapper, se hace la desvinculación
/* del mousemove y si se está reproduciendo el audio crea un timer
*/
$('.audio_wrapper').on('mouseup',function(){
  $('.audio_wrapper').unbind('mousemove');
  if (playing == true) {
    timerSettings();
  };
});
/**
/* Al hacer click en algun punto dentro de .audio_wrapper, se detecta esta posición
/* y se hace una relación con respecto a la duración del archivo de audio, tomando
/* el ancho total de .audio_wrapper como la duración total del audio
*/
$('.audio_wrapper').on('click',function(e) {
  var posX = $(this).offset().left;
  /**
  /* 10 de paddings
  */
  var newPos = (e.pageX - posX)-10;
  var posFinal = (newPos * song.duration) / $('.audio_container').width();
  song.currentTime = posFinal;
  moveThingie();
});
/**
/* La función moveThingie anima el movimiento de la bolita hacia el punto que
/* represente la posición actual dentro de la totalidad de la duración del archivo
/* de audio
*/
function moveThingie(){
  $('.audio_thingie').stop().animate({
    marginLeft: (song.currentTime*$('.audio_container').width())/song.duration
  },300);
}