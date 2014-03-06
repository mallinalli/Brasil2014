enquire
/**
/*VERSIÓN DE TELÉFONO
*/
.register("screen and (max-width:479px)", function() {
    /**
    /*Oculta el menu
    */
	if ($('.navegacion').css('display') != 'none') {
		$('.navegacion').css('display','none');
	} 
    $('.logo').find('img').attr('src','img/logo-s.jpg');
})

/**
/*VERSIÓN DE TABLET
*/
.register("screen and (min-width:480px)", function() {
    /**
    /*Muestra el menu enla versión tablet
    */
    $('.navegacion').css('display','inline');
    
    $('.logo').find('img').attr('src','img/logo.jpg');
    /*
    /*Mueve el componente de twitter al contenedor .tribuna-place (junto al de notas destacadas)
    */
    /*$(document).ready(function(){
        $('.twitter').appendTo('.lateral');
    });*/
})

.register("screen and (max-width:768px)",function(){
    $(document).ready(function(){
    });
})

/**
/*VERSIÓN DE ESCRITORIO
*/
.register("screen and (min-width:768px)", function() {
    $('.navegacion').css('display','inline');
    $(document).ready(function(){
        
        /*Devuelve los items de sección a después de .healines
        */
        $('.headlines').after($('.section-items'));
    });
})