<style>
            #InputBox
            {
                text-align: center;
                width: 300px;
                height: 100px;
                border-radius: 5px; 
                 border: 2px solid black;
            }
            #TBa
            {
                color: black;
            }    
             #BodyDiv
            {
                background:url(image/divcover.jpg);
                width: 80%;
                height: 100%;
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
</style>
<?php
include ('Connect.php');

$RID=$_POST['RID'];
$GID=$_POST['GID'];
$REVIEW=$_POST['REVIEW_'];

if(isset($_POST['DELETE_BTN']))
{

$sql = "DELETE FROM reviewtable WHERE ReviewID = $RID;";
if (mysql_query($sql)) {
               

    echo 'Comment Deleted !';
    header('refresh:0; url=GameDetails.php?id='.$GID.'');
}
}
if(isset($_POST['EDIT_BTN']))
{
    ?>
<div id="BodyDiv">
        <div id="TitleBar">
            <a id="TBa" href="UserHome.php"> GAMELOGS </a>
    
        </div>  

                <form id="ReviewForm" action="ReviewSaveDB.php" method="get">
                    <fieldset id="fieldset_style">                   
                        EDIT COMMENT:  
                        <?php 
                        echo "<input id=InputBox type=text name=Review  value='$REVIEW'> " ?><?php
                        echo "<input type=submit name=EditReviewButton id=SubmitReviewButton value=POST>" ?><?php
                        echo "<input type=hidden name=GID value=$GID; >" ?><?php
                        echo "<input type=hidden name=RID value=$RID; >" ?>
                    
                </form> 
</div>
<?php
}
?>


