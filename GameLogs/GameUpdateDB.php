<?php
include ('Connect.php');

$GID=$_POST['hiddenID'];
        $NAME = $_POST['NAME'];
        $TYPE = $_POST['TYPE'];
        $YEAR = $_POST['YEAR'];
        $DEVELOPER = $_POST['DEVELOPER'];
        $RATING = $_POST['RATING'];
        $DESCRIPTION = $_POST['DESCRIPTION'];
        

$sql = "UPDATE gametable SET NAME = '$NAME', TYPE = '$TYPE', YEAR = '$YEAR', DEVELOPER = '$DEVELOPER', RATING = '$RATING', DESCRIPTION = '$DESCRIPTION' WHERE ID = $GID;";

if (mysql_query($sql)) {
               

    echo 'Game Updated successfully!!';
    header('refresh:0; url=AdminHome.php');
}

    


mysql_close();
