<?php
	$host = "localhost";
	$db_user = "root";
	$db_pass = "";
	$db_name = "new_db";
	$db_port = 3306;


	$connection = new mysqli($host, $db_user, $db_pass, $db_name, $db_port);
	if($connection->connect_error){
		die("Connection Fail");
	}else{
		
	}
