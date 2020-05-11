<?php
//include_once("SMS_OK_sms.php");
include_once("do-connect-index.php");


$uid=$_GET["u"];
$pwd=$_GET["v"];
$conpwd=$_GET["w"];
$mob=$_GET["x"];
$registered=$_GET["y"];


    $pwd=md5($pwd);
	$query="insert into signup values('$uid','$pwd','$conpwd','$mob','$registered')";
	mysqli_query($dbRef,$query);
	$msg=mysqli_error($dbRef);
    $pwd=md5($pwd);
	if($msg=="")
    {
        //$resp=SendSMS($mob,"Congrats,$uid...you are now linked with us and your password:".$pwd);
			//echo "Record Saved....\n".$resp;
        echo "congratulation, you have become part of our community!!!";
    }
	else
			echo "please check your details";
    ?>
