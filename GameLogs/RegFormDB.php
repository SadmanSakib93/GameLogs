<?php

include ('Connect.php');
$uniqueEmail=1;   
$name = $_POST['NAME'];
$email = $_POST['E_MAIL'];
$pass = $_POST['PASSWORD'];
if (filter_var($email, FILTER_VALIDATE_EMAIL)) 
    $sql = "INSERT INTO usertable (	UserName,  UserEmail,  	UserPassword) VALUES ('$name',  '$email', '$pass')";
else {
               print '<script type="text/javascript">'; 
               print 'alert("#ERROR: Invalid E-mail format!!! Try again.")'; 
               print '</script>';
               header('refresh:0; url=RegistrationForm.php');
               $uniqueEmail=0;
}
if($uniqueEmail==1){
if (!mysql_query($sql) ) {
               
               print '<script type="text/javascript">'; 
               print 'alert("#ERROR: Sorry, This E-mail has been already registerd! Try again.")'; 
               print '</script>';
               header('refresh:0; url=RegistrationForm.php');
}
 else {  
               print '<script type="text/javascript">'; 
               print 'alert("Congratulations, You have successfully registerd !")'; 
               print '</script>';
               header('refresh:0; url=Main.php');
    
}}

mysql_close();
