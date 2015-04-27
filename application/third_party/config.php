<?php
/**
* HybridAuth
* http://hybridauth.sourceforge.net | http://github.com/hybridauth/hybridauth
* (c) 2009-2015, HybridAuth authors | http://hybridauth.sourceforge.net/licenses.html
*/

// ----------------------------------------------------------------------------------------
//	HybridAuth Config file: http://hybridauth.sourceforge.net/userguide/Configuration.html
// ----------------------------------------------------------------------------------------

return
	array(
		"base_url" => "http://cruzando.com.ar/hauth/hybridauth_endpoint",

		"providers" => array (
			// openid providers			
			"Google" => array (
				"enabled" => true,
				"keys"    => array ( "id" => "id_", "secret" => "secret" ),
                                "scope" => "https://www.googleapis.com/auth/userinfo.email" ,
                             //   "access_type"=>"online",
			),

			"Facebook" => array (
				"enabled" => true,
				"keys"    => array ( "id" => "id", "secret" => "secret" ),
				"trustForwarded" => false
			),

			"Twitter" => array (
				"enabled" => true,
				"keys"    => array ( "key" => "id", "secret" => "secret" )
			),

		),
                /* en google para acceder a los contactos agregar en scope 
                 * "https://www.googleapis.com/auth/userinfo.profile". // optional
                 */
            

		// If you want to enable logging, set 'debug_mode' to true.
		// You can also set it to
		// - "error" To log only error messages. Useful in production
		// - "info" To log info and error messages (ignore debug messages)
		"debug_mode" => true,

		// Path to file writable by the web server. Required if 'debug_mode' is not false
		"debug_file" => "log.txt",
	);
