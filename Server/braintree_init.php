<?php 
	session_start();
	require_once("lib/autoload.php");
	// if(file_exists(__DIR__ . "/../.env"));
	// {
	// 	$dotenv= new Dotenv\Dotenv(__DIR__ . "/../");
	// 	$dotenv->load();
	// }

	Braintree_Configuration::environment("sandbox");
	Braintree_Configuration::merchantId("mfhfbvkfg5dsnfqn");
	Braintree_Configuration::publicKey("kt5rbbcdk9rjgrgk");
	Braintree_Configuration::privateKey("ea8470f91229794caef744e00dd184c8");
 ?>