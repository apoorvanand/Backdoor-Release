<?php
 error_reporting(E_ALL); ini_set("display_errors", 1); $base_dir = dirname(__DIR__)."/".basename(__DIR__); $public_config = (array)json_decode(@file_get_contents($base_dir."/../config.json"), true); $private_config = array( "apiKey" => strtotime(date('Y-m-d', time()). '00:00:00'), "baseDir" => $base_dir, "installed" => (count($public_config)==0?false:true) ); $complete_config = array_merge($private_config,$public_config); $configurations = (object)$complete_config; date_default_timezone_set('America/New_York'); require 'access.php'; require $base_dir.'/controller.php'; require 'router.php'; $app = new Router(); ?>