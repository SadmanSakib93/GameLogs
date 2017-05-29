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
    #GameInfoDiv
    {
                position: relative;
                top:26%;
                left: 37%;
                padding: 10px;
                margin: 10px;
                border: 2px solid lightslategray;
                box-shadow: 2px 2px brown; 
                width: 25%;
                background-color: #555555;               
                color:whitesmoke;
                transition: all 0.5s ease;  
                border-radius: 5px; 
            
    }
                 @font-face
            {
                font-family: old_stamper;
                src:url(fonts/old_stamper.ttf);
            } 
            
            #GameImg
            {
                position: relative;
                width: 25%;
                left: 40%;
                border: 2px solid white;
                border-radius: 5px;
                background-color: #969696;

            }
            #morebtn
            {
                position: relative;
                left: 45%;
                text-decoration: none;
                border: 2px solid white;
                border-radius: 5px;
                color: red;
            }
            #morebtn:hover
            {
                color: sienna;
                background-color: white;
                border: 2px solid black;
            }
</style>
<div id="BodyDiv">
        <div id="TitleBar">
            <a id="TBa" href="UserHome.php"> GAMELOGS </a>
    
        </div>
<?php
include ('Connect.php');
$count=0;
if(isset($_POST['SearchBoxSubmit'])){
    $SelectedName=$_POST['SearchBox'];
    $SearchByName = mysql_query("SELECT * FROM gametable WHERE NAME='$SelectedName'");
    while($Row= mysql_fetch_assoc($SearchByName))
    {      
         display_game($Row);
    }
    
}
 else if(isset($_POST['submit'])){
    
    if(!isset($_POST['SearchByYear']) && !isset($_POST['SearchByRating']) && !isset($_POST['SearchByType']))
    {
    $count=1;
    session_start();
    $id=$_SESSION["UserID"];
    print '<script type="text/javascript">'; 
    print 'alert("Sorry, No You have not selected any criteria.")'; 
    print '</script>';
    header("refresh:0 UserHome.php?id=$id");         
    }

    if(isset($_POST['SearchByYear']))
    {
        $SelectedYear=$_POST['SearchByYear'];
       // echo 'SearchByYear'.$SelectedYear;
    }
    if(isset($_POST['SearchByRating']))
    {
        $SelectedRating=$_POST['SearchByRating'];
       // echo 'SearchByRating'.$SelectedRating;
    }
    if(isset($_POST['SearchByType']))
    {
        $SelectedType=$_POST['SearchByType'];
       // echo 'SearchByType'.$SelectedType;
    }
}




if(isset($SelectedYear) && isset($SelectedRating) && isset($SelectedType)) //ALL 3
{
    
    $SearchByAll = mysql_query("SELECT * FROM gametable WHERE YEAR='$SelectedYear' AND RATING='$SelectedRating' AND TYPE='$SelectedType'");
    while($Row= mysql_fetch_assoc($SearchByAll))
    {      
         display_game($Row);
    }
}




else if(isset($SelectedYear) && isset($SelectedRating)) //YEAR AND RATING
{
    
    $SearchByYearAndRating = mysql_query("SELECT * FROM gametable WHERE YEAR='$SelectedYear' AND RATING='$SelectedRating'");
    while($Row= mysql_fetch_assoc($SearchByYearAndRating))
    {      
         display_game($Row);
    }
}

else if(isset($SelectedType) && isset($SelectedRating)) //TYPE AND RATING
{
    
    $SearchByTypeAndRating = mysql_query("SELECT * FROM gametable WHERE TYPE='$SelectedType' AND RATING='$SelectedRating'");
    while($Row= mysql_fetch_assoc($SearchByTypeAndRating))
    {      
         display_game($Row);
    }
}

else if(isset($SelectedType) && isset($SelectedYear)) //YEAR AND RATING
{
    
    $SearchByTypeAndYear= mysql_query("SELECT * FROM gametable WHERE TYPE='$SelectedType' AND YEAR='$SelectedYear'");
    while($Row= mysql_fetch_assoc($SearchByTypeAndYear))
    {      
         display_game($Row);
    }
}

else if(isset($SelectedYear)) //ONLY YEAR
{
    
    $SearchByYear = mysql_query("SELECT * FROM gametable WHERE YEAR='$SelectedYear'");
    while($Row= mysql_fetch_assoc($SearchByYear))
    {      
         display_game($Row);
    }
}
else if(isset($SelectedRating)) //ONLY RATING
{
    
    $SearchByRating = mysql_query("SELECT * FROM gametable WHERE RATING='$SelectedRating'");
    while($Row= mysql_fetch_assoc($SearchByRating))
    {      
         display_game($Row);
    }
}
else if(isset($SelectedType)) //ONLY TYPE
{
    
    $SearchByType = mysql_query("SELECT * FROM gametable WHERE TYPE='$SelectedType'");
    while($Row= mysql_fetch_assoc($SearchByType))
    {      
         display_game($Row);
    }
}

if($count==0) {
    session_start();
    $id=$_SESSION["UserID"];
    print '<script type="text/javascript">'; 
    print 'alert("Sorry, No game found.")'; 
    print '</script>';
    header("refresh:0 UserHome.php?id=$id");
 }


function display_game($Row)
{
          ?>

    <div id="GameInfoDiv"> <?php
          global $count;
          $count++;
            
            echo  "<img id=GameImg src=".$Row["LOGO"]; "</br>"?> id="ResPic" >  <?php
            echo "<ul>";
            echo  "<li id=ListInfo>"."Name: ". $Row["NAME"]; "</li>" ?><?php
            echo  "<li id=ListInfo>"."Type: ". $Row["TYPE"]; "</li>" ?><?php
            echo  "<li id=ListInfo>"."Developed by: ". $Row["DEVELOPER"]; "</li>" ?><?php
            echo  "<li id=ListInfo>"."Release Year: ". $Row["YEAR"]; "</li>" ?><?php
            echo  "<li id=ListInfo>"."Rating: ". $Row["RATING"]; "</li>" ?><?php
            echo "</ul>" ?><?php
            $GID=$Row["ID"];
            echo  "<a id=morebtn href=GameDetails.php?id=$GID id=ReviewButton>". "MORE" . "</a>" ?>

        </div>

<?php
} ?>
</div>