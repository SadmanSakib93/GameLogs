<?php

include ('Connect.php');
        if(isset($_GET['SubmitReviewButton'])){
            $rvwmsg = $_GET['Review'];
            session_start();
            $UID=$_SESSION["UserID"];
            $GID = $_GET['GID'];

            if(mysql_query("INSERT INTO reviewtable (ReviewMSG,UserID, GameID ) VALUES ('$rvwmsg', '$UID', '$GID')"))
               print '<script type="text/javascript">'; 
               print 'alert("Review Inserted. Thanks for your opinion.")'; 
               print '</script>';
               header("refresh:0; url=GameDetails.php?id=$GID");
            mysql_close();

        }
        else if(isset($_GET['EditReviewButton'])){
            $rvwmsg = $_GET['Review'];
            session_start();
            $UID=$_SESSION["UserID"];
            $GID = $_GET['GID'];
            $RID = $_GET['RID'];

            if(mysql_query("UPDATE reviewtable  SET ReviewMSG = '$rvwmsg', UserID = '$UID', GameID = '$GID' WHERE ReviewID='$RID';"))

               print '<script type="text/javascript">'; 
               print 'alert("Review Edited. Thanks for your opinion.")'; 
               print '</script>';
               header("refresh:0; url=GameDetails.php?id=$GID");
            mysql_close();

        }
