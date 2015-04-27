<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Hauth extends CI_Controller{
    public function __construct() {
        parent::__construct();
    }
    function hybridauth_endpoint() {
       include APPPATH."third_party/index.php";
    }
    function signin_with_hybridauth( $provider =null) {

        if(array_key_exists("hauth_start", $_GET)){
            $provider = $_GET["hauth_start"];
        }
        $config = APPPATH."third_party/config.php";
        include APPPATH."third_party/Hybrid/Auth.php";
 
        $hybridauth = new Hybrid_Auth( $config );
        $adapter    = $hybridauth->authenticate( $provider );
        print_r($adapter->getUserProfile());die;
     }
    
}
