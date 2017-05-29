<?php 
session_start();
?>
<style>
            #BodyDiv
            {
                background:url(image/divcover.jpg);
                width: 80%;
                height: 1000px;
                position: absolute;
                left: 10%;
                border: 2px solid black;
                border-radius: 5px;
                box-shadow: 5px 5px 5px #A6A5A9;
                background-repeat:repeat-y;
            }
    #SearchUL
    {
        cursor: pointer;
        transition: all 1s ease;        
    }
    #SearchUL:hover #SearchLI
    {     
        display: block;
        cursor: pointer;
        transition: all 1s ease; 

        
    }
    #SearchLI
    {
        display: none;
        transition: all 1s ease; 
 
    }
    #SearchLI:hover
    {
        display: block;
        transition: all 1s ease; 
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
                font-family: old_stamper;
                src:url(fonts/old_stamper.ttf);
            } 
            #regORlog
            {
                position: relative;
                margin: 15px;
                padding: 15px;
                left: 7%;
            }
            #TBa
            {
                color: black;
            }
            #SearchEngine
            {
                
                position: relative;
                top:76px;
                border: 2px solid lightslategray;
                box-shadow: 2px 2px brown; 
                width: 25%;
                background-color: #555555;               
                color:whitesmoke;
                transition: all 0.5s ease;  
                border-radius: 5px; 
            }
            #HREF
            {
                text-align: center;
                position: relative;
                width: 80px;
                height: 25px;
                top: 20px;
                left: 2%;
                border: 2px solid black;
                background-color: #cccccc;
                border-radius: 5px;
                color:  #555555;
                box-shadow: 3px 3px 3px #969696;
                
            }
            #HREF:hover
            {
                width: 90px;
                height: 30px;                
                background-color: whitesmoke;
                color: black;
            }
            .autosuggest .dropdown .result
            {
                margin: 0;
                padding: 0;
                border: 0;
                width: 200px;
            }
            .autosuggest
            {
                position: absolute;
                left: 68%;
                top: 13%;
                border-radius: 5px;
                box-shadow: 2px 2px 2px #cccccc;
                padding: 4px;
                width: 250px;
                border: 1px solid black;
            }
            
            .result
            {
                position: absolute;
                left: 64%;
                top: 14%;
                width: 250px;
                list-style: none;
                
            }
            .result li
            {
                padding: 5px;
                border: 2px solid black;
                background-color: whitesmoke;
                color: black;
                border-top: 0;
                cursor: pointer;
            }
            .result li:hover
            {
                background-color: #000;
                color: white;
            }
            #UPCDIV
            {
                position: absolute;
                left: 35%;
                top: 22%;
                height: fit-content;
                border: 2px solid black;
                border-radius: 5px;
                width: 55%;
                color: black;
                background:url(image/upccover2.jpg);
                
            }
            #UPC_PIC
            {
                border: 1px solid black;
                border-radius: 3px;
                box-shadow: 4px 4px 4px #969696;
                position: relative;
                left: 35%;
                padding: 5px;
                margin: 10px;
            }
            #UPC_TRAILER
            {
                position: relative;
                left: 6%;
                margin: 10px;
                border: 1px solid #aa0000;
                box-shadow: 4px 4px 4px #969696;
            }
            #srchbtn
            {
                background:url(image/srch.jpg);
                position: absolute;
                left: 93%;
                bottom: 82%;
                cursor: pointer;
                width: 60px;
                height: 60px;
                border-radius: 3px;
                border:1px solid black;
                box-shadow: 3px 3px 3px #969696;
                
            }
            #UPC_NAME
            {
                font-size: 20px;
            }
            #UPC_RD
            {
                font-size: 17px;
            }


</style>


<?php
include ('Connect.php');

$SearchByYear = mysql_query("SELECT DISTINCT YEAR FROM gametable ORDER BY YEAR");
$SearchByType = mysql_query("SELECT DISTINCT TYPE FROM gametable ORDER BY TYPE");
$SearchByRating = mysql_query("SELECT DISTINCT RATING FROM gametable ORDER BY RATING");
$UpcomingGames = mysql_query("SELECT * FROM upcominggame");


?>

<html>
    <div id="BodyDiv">
        <div id="TitleBar">
            <a id="TBa" href="UserHome.php"> GAMELOGS </a>

        </div>

    <script src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
    <script src="primary.js"></script>

            <a id="HREF" href="Main.php"> LOGOUT </a>
            
    
    <form id="SearchEngine" action="SearchGame.php" method="post"> 
        <ul id="SearchUL">
                SEARCH BY RELEASE YEAR
                    
        <?php
                while($YearRow= mysql_fetch_array($SearchByYear))
                    { 
                    echo "<li id=SearchLI > "."<input type=radio name=SearchByYear value=".$YearRow['YEAR']." >".$YearRow['YEAR']."</li>";
                    }
                    ?>
   
        </ul>
        <ul id="SearchUL">
                SEARCH BY RATING
                    
        <?php
                while($RatingRow= mysql_fetch_array($SearchByRating))
                    { 
                    echo "<li id=SearchLI > "."<input type=radio name=SearchByRating value=".$RatingRow['RATING']." >".$RatingRow['RATING']."</li>";
                    }
                    ?>
   
        </ul>
        <ul id="SearchUL">
                SEARCH BY GAME TYPE
                    
        <?php
                while($TypeRow= mysql_fetch_array($SearchByType))
                    { 
                    echo "<li id=SearchLI > "."<input type=radio name=SearchByType value=".$TypeRow['TYPE']." >".$TypeRow['TYPE']."</li>";
                    }
                    ?>
   
        </ul>
        
        <input type="submit" name="submit" value="SEARCH">

    </form>
            <?php
            
        $UPC_Name=array();
        $UPC_ReleaseDate=array();
        $UPC_Trailer=array();
        $UPC_Pic=array();
        while($UPCrows= mysql_fetch_array($UpcomingGames)) {
            
            $UPC_Name[] = $UPCrows['UpcomingGameName'];
            $UPC_Pic[] = $UPCrows['UpcomingGameImage'];
            $UPC_ReleaseDate[] = $UPCrows['UpcomingGameReleaseDate'];
            $UPC_Trailer[] = $UPCrows['UpcomingGameTrailer'];
        }
            ?>
        <script>
        var NAME = <?php echo json_encode($UPC_Name); ?>;
        var PIC = <?php echo json_encode($UPC_Pic); ?>;
        var R_DATE = <?php echo json_encode($UPC_ReleaseDate); ?>;
        var TRAILER = <?php echo json_encode($UPC_Trailer); ?>;
        var Index=0;

        function UpcomingGames(){
            
            document.getElementById("UPC_NAME").innerHTML = NAME[Index];
            UPC_PIC.setAttribute("src", PIC[Index]);

            document.getElementById("UPC_RD").innerHTML = R_DATE[Index];
            UPC_TRAILER.setAttribute("src", TRAILER[Index]);


            Index++;
            if(Index>=NAME.length)
            {
                Index=0;
            }      

            
        }

         
                var intervalHandle= setInterval(UpcomingGames,4000);

        </script>            
            
           
                           <div id="UPCDIV"> 
                  <center><h1>UPCOMING GAMES</h1></center>
                  NAME:<strong><div id="UPC_NAME"></div>  </strong>
              RELEASE DATE: <strong><div id="UPC_RD"></div></strong>
              <img id="UPC_PIC" src="" width="150" height="200" />
              
              <iframe id="UPC_TRAILER" width="470" height="280" src="" frameborder="0" name="Trl" allowfullscreen></iframe>
              </div>   
            


        <form action="SearchGame.php" method="post">
                <input type="text" class="autosuggest" name="SearchBox" placeholder="Search By Game Name"/> 
                <input id="srchbtn" type="submit" value=""  name="SearchBoxSubmit"  />
            <div class="dropdown">
                <ul class="result">

                </ul>
            </div>
    </form>
    </div>


          
</html>