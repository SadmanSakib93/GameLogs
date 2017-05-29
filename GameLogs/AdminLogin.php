<?php
// Grab User submitted information
$name = $_POST['AdminName'];
$password = $_POST['AdminPassword'];
include ('Connect.php');
$qry="SELECT * FROM admintable WHERE AdminName='$name' AND AdminPassword='$password'";
$result = mysql_query($qry);
$ResArray=  mysql_fetch_assoc($result);
$id=$ResArray['AdminID'];
session_start();
$_SESSION["AdminID"] = $id;

if($result) 
    {
	if(mysql_num_rows($result) > 0)
            {
               $LoginORnot=TRUE;
               header("location:AdminHome.php");                  //      id=$id
            }
        else
            {
               $LoginORnot=FALSE;
               print '<script type="text/javascript">'; 
               print 'alert("Sorry, your credentials dont match, Please try again.")'; 
               print '</script>';
               header('refresh:0; url=AdminPanel.php');
               
            }
    
    }
else
{
    
     $LoginORnot=FALSE;
     print '<script type="text/javascript">'; 
     print 'alert("Sorry, your credentials dont match, Please try again.")'; 
     print '</script>';     
     header('refresh:0; url=AdminPanel.php');
}
?>