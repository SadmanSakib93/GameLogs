<!doctype html>

<style>
            body{
            background-color: beige;
            }
            @font-face
            {
                font-family: old_stamper;
                src:url(fonts/old_stamper.ttf);
            } 
            #InsForm
            {
                background-color: lightgray;
                opacity: .65;
                width: 45%;
                font-family:RAPSCALL;
                font-weight: bold;
                font-size: 25px;
                border: 2px solid black;
                margin-top: 20px;
                box-shadow: 2px 2px 2px 2px gray;
                border-radius: 5px;
            }

            
            #FormAtributes
            {
                background-color: beige;
                position: relative;
                width: 300px;
                height: 110px;
                padding: 20px;
                margin: 20px;
                border: 2px solid #555555;
                box-shadow: 4px 3px 3px 3px slategrey;
                border-radius: 5px;                
                font-weight: bolder;
            }
            #submit
            {
                width: 150px;
                height: 40px;
                border-radius:3px;
                font-size:25px;
                margin: 10px;
                font-family: umbrage2;
                transition: all 0.4s ease;            
                box-shadow: 2px 2px darkgray; 
                border: 1px solid black;   
            }
            #submit:hover
            {
                cursor: pointer;
                opacity: 1;
                font-size:30px;
                background-color: darkslategrey;     
                
            }
            #input
            {
                
                border: 2px solid black;
                width: 80%;
                height: 40%;
                background-color: #A6A5A9;
                color:#aa0000;
                transition: all 0.5s ease;   
            }
            #input:hover
            {
                background-color: white;
                width: 83%;
                
            }
            #hdr
        {
            font-family: old_stamper;
            text-shadow: 10px 3px 3px dimgray;
            border: 2px seashell;
        }
            
</style>

<?php
include ('Connect.php');

$GID=$_POST['GID'];
if(isset($_POST['DELETE_BTN']))
{

$sql = "DELETE FROM upcominggame WHERE UpcomingGame = $GID;";

if (mysql_query($sql)) {
               

    echo 'Game Deleted successfully!!';
    header('refresh:0; url=AdminHome.php');
}
}

else if(isset($_POST['UPDATE_BTN']))
{
    ?>

    <center>
        <div id="InsDiv">
            
            <form id="InsForm" action="UpcomingGameUpdateDB.php" method="post" > 
                <h1 id="hdr"> UPDATE GAME </h1>
				 <div id="FormAtributes">UPCOMING GAME NAME:  <input id="input" type="text" name="UpcomingGameName"  size="30"  required/>  </div>
                <div id="FormAtributes">UPCOMING GAME TRAILER:<input id="input" type="text" name="UpcomingGameTrailer" size="30"  /> </div>
                <div id="FormAtributes">UPCOMING GAME RELEASE DATE:<input id="input" type="text" name="UpcomingGameReleaseDate" size="30"  required/></div>
         
                <input type="submit" name="submit" id="submit" value="SUBMIT">  
                                <?php  
                echo "<input type=hidden name=hiddenID  value=$GID /> "; ?>
            </form>
            
            
        </div>
    </center> 
<?php
}