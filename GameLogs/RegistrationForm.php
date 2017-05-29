<!doctype html>

<html>
    <head>
       <title> 
           Registration Form
       </title>
        

        
        <style>
            body 
            {
                background-color: beige;
                background-image: url(image/regback.jpg);
            }
            @font-face
            {
                font-family: RAPSCALL;
                src:url(fonts/RAPSCALL.ttf);
            }
            @font-face
            {
                font-family: RAPSCALL;
                src:url(fonts/umbrage2.ttf);
            }
            @font-face
            {
                font-family: old_stamper;
                src:url(fonts/old_stamper.ttf);
            }         


            #RegForm
            {
                position: absolute;
                background-color:  antiquewhite;
                opacity: .65;
                width: 45%;
                top: 20%;
                left: 28%;
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
                position: relative;
                width: 300px;
                height: 60px;
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
                
                border: 2px solid lightslategray;
                box-shadow: 2px 2px brown; 
                width: 80%;
                height: 40%;
                background-color: #555555;               
                color:whitesmoke;
                transition: all 0.5s ease;  
                border-radius: 5px; 
            }
            #input:hover
            {
                background-color: white;
                width: 83%;
                color: black;
                
            }
        #hdr
        {
            font-family: old_stamper;
            text-shadow: 10px 3px 3px dimgray;
            border: 2px seashell;
            font-size: 45px;
            
        }    
           #TitleBar
            {
                opacity: .65;
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
                background:url(image/divcover.jpg); 
                border-radius: 5px;
                box-shadow: 5px 5px 5px gainsboro;
            }        
            

        </style>
    </head>
        
    <body>
         
        <div id="TitleBar">
            GAMELOGS    
        </div> 
        
    <center>
        <div id="RegDiv">
            
            <form id="RegForm" action="RegFormDB.php" method="post" > 
                <h1><center id="hdr">REGISTRATION</center></h1>
                <div id="FormAtributes"><center>NAME:</center>  <input id="input" type="text" name="NAME"  size="30"  required/>  </div>
                <div id="FormAtributes"><center>E-MAIL:</center><input id="input" type="text" name="E_MAIL" size="30"  required/></div>
                <div id="FormAtributes">PASSWORD:<input id="input" type="text" name="PASSWORD" size="30"  required/> </div>
                <input type="submit" name="submit" id="submit" value="SUBMIT">             
            </form>
            
            
        </div>
    </center>
        
    </body>
</html>
