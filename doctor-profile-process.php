<?php
include_once("do-connect-index.php");
$uid=$_POST["txtUid"];
$name=$_POST["txtname"];
$mobile=$_POST["txtmob"];
$hName=$_POST["txthname"];
$gender=$_POST["txtgen"];
$consultation=$_POST["txtcon"];
$addr=$_POST["txtadd"];
$contact=$_POST["txtcont"];
$state=$_POST["txtstate"];
$city=$_POST["txtcity"];
$spec=$_POST["spec"];
$time=$_POST["txttime"];
$btn=$_POST["btnsave"];

if($btn=="Save")
{
     $picname=$_FILES["ppic"]["name"];
     $picname1=$_FILES["ppic1"]["name"];
     $picname2=$_FILES["ppic2"]["name"];
     $picname3=$_FILES["ppic3"]["name"];
     $picname4=$_FILES["ppic4"]["name"];
     $picname5=$_FILES["ppic5"]["name"];
     $picname6=$_FILES["ppic6"]["name"];
   
    $temp_name=$_FILES["ppic"]["tmp_name"];
    $temp_name1=$_FILES["ppic1"]["tmp_name"];
    $temp_name2=$_FILES["ppic2"]["tmp_name"];
    $temp_name3=$_FILES["ppic3"]["tmp_name"];
    $temp_name4=$_FILES["ppic4"]["tmp_name"];
    $temp_name5=$_FILES["ppic5"]["tmp_name"];
    $temp_name6=$_FILES["ppic6"]["tmp_name"];
    
   
    move_uploaded_file($temp_name,"uploads/".$picname);
    move_uploaded_file($temp_name1,"uploads/".$picname1);
    move_uploaded_file($temp_name2,"uploads/".$picname2);
    move_uploaded_file($temp_name3,"uploads/".$picname3);
    move_uploaded_file($temp_name4,"uploads/".$picname4);
    move_uploaded_file($temp_name5,"uploads/".$picname5);
    move_uploaded_file($temp_name6,"uploads/".$picname6);
    
    $query="insert into doctor values('$uid','$name','$mobile','$hName','$gender','$consultation','$addr','$contact','$state','$city','$spec','$time','$picname1','$picname2','$picname3','$picname4','$picname5','$picname6','$picname')";
     mysqli_query($dbRef,$query);
    $msg=mysqli_error($dbRef);
	if($msg=="")
			echo "Your details have saved now....";
	else
			echo $msg;
}
else
{
    $picname=$_FILES["ppic"]["name"];
    $picname1=$_FILES["ppic1"]["name"];
    $picname2=$_FILES["ppic2"]["name"];
    $picname3=$_FILES["ppic3"]["name"];
    $picname4=$_FILES["ppic4"]["name"];
    $picname5=$_FILES["ppic5"]["name"];
    $picname6=$_FILES["ppic6"]["name"];
    
     $hdn=$_POST["hdn"];
    $hdn1=$_POST["hdn1"];
    $hdn2=$_POST["hdn2"];
    $hdn3=$_POST["hdn3"];
    $hdn4=$_POST["hdn4"];
    $hdn5=$_POST["hdn5"];
    $hdn6=$_POST["hdn6"];
    
     $temp_name=$_FILES["ppic"]["tmp_name"]; 
    $temp_name1=$_FILES["ppic1"]["tmp_name"];
      $temp_name2=$_FILES["ppic2"]["tmp_name"];
      $temp_name3=$_FILES["ppic3"]["tmp_name"];
      $temp_name4=$_FILES["ppic4"]["tmp_name"];
      $temp_name5=$_FILES["ppic5"]["tmp_name"];
      $temp_name6=$_FILES["ppic6"]["tmp_name"];
    
     if($picname=="")
		$picname=$hdn;
    else
        move_uploaded_file($temp_name,"uploads/".$picname);
    
    if($picname1=="")
		$picname1=$hdn1;
    else
        move_uploaded_file($temp_name1,"uploads/".$picname1);
    if($picname2=="")
		$picname2=$hdn2;
    else
        move_uploaded_file($temp_name2,"uploads/".$picname2);
    if($picname3=="")
		$picname3=$hdn3;
    else
        move_uploaded_file($temp_name3,"uploads/".$picname3);
     if($picname4=="")
		$picname4=$hdn4;
    else
         move_uploaded_file($temp_name4,"uploads/".$picname4);
     if($picname5=="")
		$picname5=$hdn5;
    else
         move_uploaded_file($temp_name5,"uploads/".$picname5);
     if($picname6=="")
		$picname6=$hdn6;
    else
         move_uploaded_file($temp_name6,"uploads/".$picname6);
    
    $query="update doctor set name='$name',mobile='$mobile',hName='$hName',gender='$gender',consultation='$consultation',addr='$addr',contact='$contact',state='$state',city='$city',special='$spec',time='$time',picname1='$picname1',picname2='$picname2',picname3='$picname3',picname4='$picname4',picname5='$picname5',picname6='$picname6',picname='$picname' where uid='$uid'";
     
     mysqli_query($dbRef,$query);
	$msg=mysqli_error($dbRef);
	if($msg=="")
			echo "Your record have been updated....";
	else
			echo $msg;

    
}
