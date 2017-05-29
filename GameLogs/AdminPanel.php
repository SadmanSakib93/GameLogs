<html>
    <style>
        body{
            background-color: beige;
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
            top: 150px;
            background-color: lightgray;
            box-shadow: 3px 3px 3px #969696;
           border-radius: 7px;
           border: 2px solid  #969696;
        }
        #inputbx
        {
           margin: 10px;
           width: 200px;
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
            width: 210px;
            border: 4px solid #000;
            height: 40px;
            color: #969696;
            background-color: whitesmoke;
        }
        #Apassword
        {
           margin: 10px;
           width: 200px;
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
            width: 210px;
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
    </style>

<body>


    <form id="loginform" action="AdminLogin.php" method="post">
        <center> <h1 id="hdr">ADMIN LOGIN</h1></center>
        <p id="NameP">Admin Name:         <input id="inputbx" type="text"  name ="AdminName" placeholder="Name" required=""/></p>
        <p id="NameP">Admin Password:<input id="Apassword" type="password"  name ="AdminPassword" placeholder="Password" required=""/> </p>
        <p id="chkbox"><input  type="checkbox" onchange="document.getElementById('Apassword').type=this.checked ? 'text' : 'password'">Show Password </p> </br>
<input id="inputbtn" type="submit" value="LOG IN"/>

</form>

</body>
</html>