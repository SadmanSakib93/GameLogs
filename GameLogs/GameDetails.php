<?php 
session_start();
?>  
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
         <script type="text/javascript" src="reviewslidedown.js"></script>
         <script type="text/javascript" src="editRevSlide.js"></script>

<style>
            #BodyDiv
            {
                background:url(image/divcover.jpg);
                width: 80%;
                position: absolute;
                left: 10%;
                border: 2px solid black;
                border-radius: 5px;
                box-shadow: 5px 5px 5px #A6A5A9;
            }
          #TitleBar 
            {
                
                opacity: .8;
                text-align: center;
                font-size: 55px;
                padding-top: 25px;
                font-weight: bolder;
                font-family: old_stamper;
                text-shadow: 5px 5px 5px #969696;
                color: black;
                width: 100%;
                height: 90px;
                border: 2px solid #ff3333;
                background-color: #cccccc;
                border-radius: 5px;

            }
            #TBa
            {
                color: black;
            }    
            #Table
            {
                position: relative;
                left: 25%;
                color: whitesmoke;
            }
        #submitform{


         display:none;
              
        }
        #review{
            position: relative;
            left: 25%;
            width:60%;
            color: whitesmoke;
            border-bottom: 2px solid gainsboro;
            

              
        }
        #fieldset_style{
                border:none;
                padding: 0 0 20px 0; 
                
                background: grey;
            position: relative;
            left: 28%;
           width:43%;
           height: 20%;
             color:whitesmoke; 
             border:2px solid black;
             border-radius: 5px;     
                font-size:20px;
                padding: 15px;
        }
                   
        #tdrowbutton{
                    text-align:center;
                    padding:13px 0px 3px 0px;
                    color:white;
                 }
         #tdrow{
                    text-align:center;
                    border-bottom:1px solid black;
                    border-left:1px solid black;
                    font-size: 22px;
                    background: whitesmoke;
                    color: black;
                    width: 100px;
                    padding: 5px 0 5px 0;
                    border-radius: 5px;
                    border:2px solid black;
                      
                 }  
         #Header1
            {
               width:250px;
               background-color: black;
               color: #ffffff;
               text-align:center;
               font-size: 30px;
               
            }
            #Header2{
                background-color: black;
                color: #ffffff;
                width:340px;
                 font-size: 35px;
                 font-family: MAXIMUMSECURITY;
            }
            @font-face
            {
                font-family: MAXIMUMSECURITY;
                src:url(fonts/MAXIMUMSECURITY.ttf);

            } 
            @font-face
            {
                font-family: old_stamper;
                src:url(fonts/old_stamper.ttf);
            }
            #info_header
            {
                background-color: #969696;
                width: 55%;
                border: 2px solid black;
                position: relative;
                left: 25%;
                color:whitesmoke;
                transition: all 0.5s ease;  
                border-radius: 5px;                 
            }
            #flip
            {
                background-color: #969696;
                font-size: 25px;
                width: 20%;
                position: relative;
                left: 45%;
                color:#000000;
                transition: all 0.5s ease;  
                margin-top: 10px;
                border-radius: 5px;                 
            }
            #flip:hover
            {
              
              width: 22%;
              font-size: 30px;
              background-color: #000000;
              color: #cccccc;
            }
            #InputBox
            {
                text-align: center;
                width: 300px;
                height: 100px;
                border-radius: 5px; 
                 border: 2px solid black;
            }
            
            #GameImage
            {
                border: 1px solid black;
                border-radius: 6px;
            }
            #UN
            {
                color: beige;
                font-size: 30px;
                font-weight: bolder;
                
            }
            #UR
            {
                color: ghostwhite;
                font-size: 20px;
                font-weight: normal;
            }
            #edit_com
            {
                overflow: visible;
                backface-visibility:  visible;
                text-decoration: none;
                background-color: mintcream;
                font-size: 15px;
                border: 1px solid white;
                border-radius: 6px;
                color: #000000;
            }
            #delete_com
            {
                overflow: visible;
                backface-visibility:  visible;
                text-decoration: none;
                background-color: brown;
                border: 1px solid white;
                border-radius: 6px;
                color: #000000;
                font-size: 15px;
                margin: 5px;
            }
  
          
</style>
<?php

$GameID = $_REQUEST['id'];

$logInUserID=$_SESSION["UserID"];
include ('Connect.php');

$qry = mysql_query("SELECT * FROM gametable WHERE ID = $GameID ");
$RevQRY = mysql_query("SELECT * FROM  reviewtable WHERE GameID = $GameID ");
$rows=  mysql_fetch_assoc($qry);
	$name = $rows['NAME'];
        $type = $rows['TYPE'];
        $year = $rows['YEAR'];
        $developer = $rows['DEVELOPER'];
        $rating= $rows['RATING'];
        $des = $rows['DESCRIPTION'];
        $logo = $rows['LOGO'];
        $rat_img = $rows['RATING_IMAGE'];
        
        
$GameReview=mysql_query("SELECT * FROM reviewtable  WHERE GameID='$GameID'");
$UserName=mysql_query("SELECT * FROM usertable,reviewtable  WHERE usertable.UserID=reviewtable.UserID AND reviewtable.GameID='$GameID'");
        
        
        
        ?>
<div id="BodyDiv">
<div id="gamesstablediv">
        <div id="TitleBar">
            <a id="TBa" href="UserHome.php"> GAMELOGS </a>
    
        </div>          
            
   
    
        <?php
       echo "<table id=Table >";
       
        //Logo 
        echo "<form action=GameDetails.php method=post >";  
        echo "<tr >";       
        echo "<td colspan=2>" .  "<center>"."<img id=GameImage  src=".$logo." width=100px height=150px >" ."</center>". "</td>";
        echo"</tr>";
        
   
        //Name
        echo "<tr >"; 
        echo " <th id=Header1>Name</th>";
        echo "<th id=Header2 >".$name."</td>";
        echo"</tr>";
        
         //Type
        echo "<tr >";
        echo "<td id=tdrow>" .'Type'.   "</td>";
        echo "<td id=tdrow>" .$type .   "</td>";
        echo"</tr>";
        
        
        //Year
        echo "<tr >";
        echo "<td id=tdrow>" .'Year'.   "</td>";
        echo "<td id=tdrow>" .$year.   "</td>";
        echo"</tr>";
        
        //Developer
         echo "<tr >";
        echo "<td id=tdrow>" .'Developer'.   "</td>";
        echo "<td id=tdrow>".$developer.   "</td>";
        echo"</tr>";
        
          //Description
         echo "<tr >";
        echo "<td id=tdrow>" .'Description'.   "</td>";
        echo "<td id=tdrow>".$des .   "</td>";
        echo"</tr>";
        
         //Rank
         echo "<tr >";
        echo "<td id=tdrow>" .'Rank'.   "</td>";
        echo "<td id=tdrow>" .$rating.  "<img id=rank_img  src=".$rat_img." > </td>";
        echo"</tr>";
       
        echo"</form>";
        
 
        echo"</table>";
        
       
     
       
?></div>
            
            <div id="review_header"><h1  id="info_header"style="text-align:center">Reviews about this Game<h1> 
                        <div id="review_style">                
             <?php
                while(($ResReviewRow = mysql_fetch_assoc($RevQRY)) && ($UserNameFetch=mysql_fetch_assoc($UserName))) { 
                   
            ?><div  id="review"> <?php
            echo  "<li id=UN>". $UserNameFetch["UserName"]; "</li>" ?><?php
            echo  "<p id=UR>". $ResReviewRow["ReviewMSG"]; "</p>" ?><?php

            if($logInUserID==$ResReviewRow["UserID"])
            { ?>
                <form id="EditDeleteForm" action="CommentDeleteOrEdit.php" method="post" >
                <?php
                echo "<input type=hidden name=RID value=".$ResReviewRow["ReviewID"]." >";
                echo "<input type=hidden name=GID value='".$ResReviewRow["GameID"]."' >";
                echo "<input type=hidden name=REVIEW_ value='".$ResReviewRow['ReviewMSG']."' >";
                echo "<input type=submit name=DELETE_BTN value=DELETE id=delete_com >"."</input>";
                echo "<input type=submit name=EDIT_BTN value=EDIT id=edit_com >"."</input>";
                ?>
                </form>
                
                <?php
                
            }
            ?>

         
            </div><?php
                 }
                
                ?>
            
            
            </div>                        
                        <button id="flip">Give Review</button></div>
                        
            <div  id="submitform">
                <form id="ReviewForm" action="ReviewSaveDB.php" method="get">
                    <fieldset id="fieldset_style">                   
                        Enter Your Review:  <input id="InputBox" type="text" name="Review" placeholder="Enter Your Review Here"   /> <?php
                        echo "<input type=submit name=SubmitReviewButton id=SubmitReviewButton value=POST>" ?><?php
                        echo "<input type=hidden name=GID value=$GameID; >" ?>
                    
                </form> 
                  </div>
</div>
