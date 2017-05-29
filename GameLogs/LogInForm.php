<html>
    <style>
        body{
            background-image: url(image/loginBack.jpg);
        }
            @font-face
            {
                font-family: old_stamper;
                src:url(fonts/old_stamper.ttf);
            }        
        #loginform
        {
            position: relative;
            border: 1px solid black;
            padding: 10px;
            margin: 10px;
            font-size: 20px;
            width: 40%;
            left: 30%;
            top: 70px;
            opacity: .7;
            background-color: lightgray;
            box-shadow: 3px 3px 3px #969696;
           border-radius: 7px;
           border: 2px solid  #969696;
        }
        #inputbx
        {
           margin: 10px;
           width: 260px;
           height: 35px;
           background-color: gray;
           box-shadow: 3px 3px 3px #969696;
           border-radius: 7px;
           border: 4px solid #ffffff;
           cursor: pointer;
           transition: all 0.6s ease; 
           font-size: 20px;
        }
        #inputbx:hover
        {
            width: 280px;
            border: 4px solid #000;
            height: 40px;
            color: #969696;
            background-color: whitesmoke;
        }
        #Apassword
        {
           margin: 10px;
           width: 260px;
           height: 35px;
           background-color: gray;
           box-shadow: 3px 3px 3px #969696;
           border-radius: 7px;
           border: 4px solid #ffffff;
           cursor: pointer;
           transition: all 0.6s ease; 
           font-size: 20px;
        }
        #Apassword:hover
        {
            width: 280px;
            border: 4px solid #000;
            height: 40px;
            color: #969696;
            background-color: whitesmoke;
        }        

        #inputbtn
        {
            position: relative;
           margin: 10px;
           width: 50%;
           height: 35px;
           background-color: aliceblue;
           box-shadow: 3px 3px 3px #969696;
           border-radius: 7px;
           border: 2px solid  #969696;
           cursor: pointer;
           left: 25%;
           font-size: 20px;
           transition: all 0.6s ease;           
        }
        #inputbtn:hover
        {
            width: 53%;
            font-size: 23px;
            border: 4px solid #000;
            height: 40px;
            color: #969696;
            background-color: whitesmoke;
        }      
        #hdr
        {
            font-family: old_stamper;
            text-shadow: 10px 3px 3px dimgray;
            border: 2px seashell;
        }
        #NameP{
            text-align: center;
        }
        #chkbox
        {
            position: relative;
            left: 68%;
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
                background:url(image/divcover.jpg);
                border-radius: 5px;
                box-shadow: 5px 5px 5px gainsboro;
            }
             @font-face
            {
                font-family: old_stamper;
                src:url(fonts/old_stamper.ttf);
            } 
     
    </style>

<body>
        <div id="TitleBar">
            GAMELOGS    
        </div>

    <form id="loginform" action="LogInDB.php" method="post">
        <center> <h1 id="hdr">LOG IN</h1></center>
        <p id="NameP"><input id="inputbx" type="text"  name ="E_MAIL" placeholder="E-MAIL"  required=""/></p>
        <p id="NameP"><input id="Apassword" type="password"  name ="PASSWORD" placeholder="PASSWORD" required=""/> </p>
        <p id="chkbox"><input  type="checkbox" onchange="document.getElementById('Apassword').type=this.checked ? 'text' : 'password'">Show Password </p> </br>
<input id="inputbtn" type="submit" value="LOG IN"/>

</form>

</body>
</html>