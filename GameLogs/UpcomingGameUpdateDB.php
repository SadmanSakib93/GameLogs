<?php
include ('Connect.php');

$GID=$_POST['hiddenID'];
        $UpcomingGameName = $_POST['UpcomingGameName'];
        $UpcomingGameTrailer = $_POST['UpcomingGameTrailer'];
        $UpcomingGameReleaseDate = $_POST['UpcomingGameReleaseDate'];
        

$sql = "UPDATE upcominggame SET UpcomingGameName = '$UpcomingGameName', UpcomingGameTrailer = '$UpcomingGameTrailer', UpcomingGameReleaseDate = '$UpcomingGameReleaseDate' WHERE UpcomingGame = $GID;";

if (mysql_query($sql)) {
               

    echo 'Game Updated successfully!!';
    header('refresh:0; url=AdminHome.php');
}

    


mysql_close();
