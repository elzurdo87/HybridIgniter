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
				"keys"    => array ( "id" => "630215451844-31p7csb236jco6038mtuds0r6m4aqgun.apps.googleusercontent.com", "secret" => "qTfStxDxFZiXjMuYZGs9F4Pu" ),
                                "scope" => "https://www.googleapis.com/auth/userinfo.email" ,
                             //   "access_type"=>"online",
			),

			"Facebook" => array (
				"enabled" => true,
				"keys"    => array ( "id" => "986691278007541", "secret" => "b2d4155d3f023d5000ddbebe4d1de0c0" ),
				"trustForwarded" => false
			),

			"Twitter" => array (
				"enabled" => true,
				"keys"    => array ( "key" => "U7ZuyFdYTMrkE926s5v8aU7Vx", "secret" => "1dYVlPKs3jOH3ywvlwlDMTYd5F0fk91weQ4M4hV1AS5r1ZR8BT" )
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
