
/*************************************************************

Reloadr Config.

Comentar una vez que se ponga en produccion
Agregar archivos necesarios para el livereload

**************************************************************/

Reloadr.go({
  client: [
    'js/main.js',
    'css/main.css'
  ],
  server: [
    '*.php'
  ],
  path: 'reloadr.php',

  frequency:100
});

/*************************************************************

Jquery Code

**************************************************************/

$(document).ready(function($) {

	/***********************************************************

	Forma de contacto

	************************************************************/

	$("#forma-contacto").submit( function () {    
	  $.post(
	   'contacto-enviar.php',
	    $(this).serialize(),
	    function(data){
	      $("#results").html(data)
	    }
	  );
	  return false;   
	});
	

});