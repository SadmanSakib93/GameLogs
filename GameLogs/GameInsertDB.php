<?php
include ('Connect.php');
    
        $NAME = $_POST['NAME'];
        $TYPE = $_POST['TYPE'];
        $YEAR = $_POST['YEAR'];
        $DEVELOPER = $_POST['DEVELOPER'];
        $RATING = $_POST['RATING'];
        $DESCRIPTION = $_POST['DESCRIPTION'];
        

$sql = "INSERT INTO gametable (NAME, TYPE, YEAR, DEVELOPER, RATING,DESCRIPTION) VALUES ('$NAME', '$TYPE','$YEAR','$DEVELOPER','$RATING','$DESCRIPTION')";

if (mysql_query($sql)) {
               

    echo 'Game Inserted successfully!!';
    header('refresh:0; url=AdminHome.php');
}

    


mysql_close();
