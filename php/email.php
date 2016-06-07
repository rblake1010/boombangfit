<?php

$destination="doz1010@gmail.com";


//Variables are denoted by the '$' sign.  The POST method
//takes the 'names' from the form in your html and assigns
//them to the variables here.  The $newMes variable takes
//the info and combines it to make up the messege that will
//be sent to you.

$name=$_POST['name'];			
$email=$_POST['email'];
$packages=$_POST['packages'];
$message=$_POST['message'];
$from ="Bang Boom Fit";
$header="From: $name";			
$newMes="Name: $name\n
Email: $email\n			
Package: $packages\n
Message: $message\n";


ini_set('sendmail_from', 'doz1010@gmail.com'); //Suggested by "Some Guy"


//The 'Mail' method is what sends the email.  Notice the
//parameters are in a specific order:	(destination, 
//from, email content, header)

mail($destination,$from,$newMes,"Bang Boom Fit");

//This line sends you to the thank you page
header( 'Location: http://www.bangboomfit.com/#thanks' ) ;
?>
