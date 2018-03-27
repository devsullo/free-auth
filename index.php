<?php
	header("Access-Control-Allow-Origin: *");
	header("Access-Control-Allow-Headers: *");
	$myObj->auth_token = "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJleHAiOjE1M…jozfQ.bPNQb3C98yyNe0LDyl1Bfkp0Btn15QyMxZnBoE9RQMI";
	$myObj->message = "Successfully logged in.";
	$myObj->status = "success";

	$myJSON = json_encode($myObj);

	echo $myJSON;
?>