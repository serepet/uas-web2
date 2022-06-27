<?php

	global $con;

	$con = mysqli_connect('localhost','root','','phpcruduas');

	if(!$con)
	{
		echo 'unable to connect with db';
		die();
	}