/*Menú principal -------------------------------------------------------------------------------------------------*/
$('.menubutton').on('click','a',function(a){
	a.preventDefault();
	$('.navegacion').stop().slideToggle();
});