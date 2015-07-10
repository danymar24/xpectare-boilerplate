=== Xpectare Interactive Media - HTML5 Boilerplate w/Bootstrap, jQuery, Reloadr ===

Contributors:  
	Daniel Rodríguez(Git: @danymar24), 
	Luis Carlos Pando (@mijo), 
	Alan González (Nzureuz), 
	Marcos Torres

Author: Xpectare Interactive Media Development Team
Author URI: http://www.xpectare.com
Plugin URI: http://www.xpectare.com
Homepage: http://www.xpectare.com
Version: 2.0.0

== Copyright ==

Copyright 2015 Xpectare Interactive Media. All rights reserved.

This software is NOT to be distributed, but can be INCLUDED in WP themes: Premium or Contracted.
This software is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.

== Description ==

Boilerplate para los sitios estáticos desarrollados en Xpectare Interactive Media

Contenido:

	Bootstrap 3 (http://getbootstrap.com/),
	jQuery (https://jquery.com/),
	Reloader (By Daniel Bergey git @dbergey),
	Formas de contacto

== Changelog ==

= 2.0.0 =

* Converted to PHP with automatic page reload.

== Paginas ==

Se pueden agregar multiples paginas clonando el archivo page.php

== jQuery ==

Se puede agregar codigo jQuery por medio del archivo main.js.

== Live Reload ==

El boilerplate contiene Reloader, el cual permite la recarga automatica al actualizar los archivos,
estos se configuran en el archivo main.js.

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

== Formas de contacto ==

El boilerplate contiene la configuracion para enviar correos por medio de la forma de contacto,
se pueden agregar mas campos, solo se agregan los inputs en el archivo contacto.php y se agregan en 
el archivo contacto-enviar.php.
		
		contacto.php

			<input type="email" name="email">

		contacto-enviar.php

			$email_message .= "Email: ".$data['email']."<br>";