<?php
/* 
	Plugin name: Diego Contatc Plugin 
	Plugin uri: http://diegomoreira.eu1.alfasoft.pt/ 
	Description: Esse plugin é um plugin de teste para AlfaSoft Version: 1.0 
	Author: Diego Moreira 
	Author uri: http://www.diegodesenvolve.com.br 
	License: GPLv2 or later 
*/


define( 'DIEGO_CONTACT_PATH', plugin_dir_path( __FILE__ ) );
define( 'DIEGO_CONTACT_URL', plugin_dir_url( __FILE__ ) );


define( 'DIEGO_CONTACT_ACF_PATH', DIEGO_CONTACT_PATH . '/includes/acf/' );
define( 'DIEGO_CONTACT_ACF_URL', DIEGO_CONTACT_URL . '/includes/acf/' );

include_once( DIEGO_CONTACT_ACF_PATH . 'acf.php' );

include_once( DIEGO_CONTACT_PATH . '/includes/ctp-person.php' );
