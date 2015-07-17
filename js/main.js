
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
	  	// Si no se usa servidor SMTP usar esta linea
	  	'contacto-enviar.php',
	  	// Si se usa servidor SMTP usar esta linea
	  	// 'contacto-enviar-smtp.php'
	    $(this).serialize(),
	    function(data){
	      $("#results").html(data)
	    }
	  );
	  return false;   
	});
	

});