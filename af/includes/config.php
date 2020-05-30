<?php

	//Bismi Alaah

	//error_reporting ( 0 );

	include 'connection.php';
	$domain = "http://" . $_SERVER['HTTP_HOST'];


	//roots &  directorys
	$root = "/af";
	$GLOBALS['root'] = $root;
	$GLOBALS['domain'] = $domain;
	$ip = $_SERVER['REMOTE_ADDR']; 
	$GLOBALS['ip'] = $ip;

	//for sign in user 
	include 'server.php';
	
	date_default_timezone_set('Africa/Cairo');	
    
