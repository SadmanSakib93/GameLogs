<?php
include ('Connect.php');
    
        $UpcomingGameName = $_POST['UpcomingGameName'];
        $UpcomingGameTrailer = $_POST['UpcomingGameTrailer'];
        $UpcomingGameReleaseDate = $_POST['UpcomingGameReleaseDate'];
        
        

$sql = "INSERT INTO upcominggame ( UpcomingGameName, UpcomingGameTrailer, UpcomingGameReleaseDate) VALUES ('$UpcomingGameName','$UpcomingGameTrailer','$UpcomingGameReleaseDate')";

if (mysql_query($sql)) {
               

    echo 'Game Inserted successfully!!';
    header('refresh:0; url=AdminHome.php');
}

    


mysql_close();
