<html>
    <head>
     
       <link href="style1.css" rel="stylesheet" type="text/css">
        <title>Login stuff</title>
        <style>
            input[type=text], select {
                width: 100%;
                padding: 12px 20px;
                margin: 8px 0;
                display: inline-block;
                border: 1px solid #ccc;
                border-radius: 4px;
                box-sizing: border-box;
            }
            input[type=password], select {
                width: 100%;
                padding: 12px 20px;
                margin: 8px 0;
                display: inline-block;
                border: 1px solid #ccc;
                border-radius: 4px;
                box-sizing: border-box;
            }

            input[type=submit]:hover {
                background-color: #45a049;
            }

            div {
                border-radius: 5px;
                background-color: #f2f2f2;
                padding: 20px;
                margin: auto;
                
                width: 60%;
                padding: 10px;
            }
        </style>
        <script>
            function loginfilled() {
                name = document.getElementById('myusername').value;
                password = document.getElementById('mypassword').value;
                thereturn = true;
                if (name == "") {
                    document.getElementById('myusername').style.borderColor = "red";
            alert("Please provide a valid user name");        
            thereturn = false;
                }
                if (password == "") {
                    document.getElementById('mypassword').style.borderColor = "red";
            alert("Please provide a valid password");        
            thereturn = false;
                }
                return thereturn;
           
            }
            
        </script>
    </head>
    <body>
        <?php
        session_start();
        ?>
        <div>
            <form name="form1" method="Post" action="CodeExLoginCheck.php">
                <table align = "center" border="0" cellpadding="3" cellspacing="1" bgcolor="#FFFFFF">

                    <tr>
                        <td colspan="3"><strong>MEMBER LOGIN </strong></td>

                    </tr>
                    <tr>
                        <td width="78">USERNAME</td>
                        <td width="6">:</td>
                        <td width="294"><input name="myusername" type="text" id="myusername" class="error"></td>
                    </tr>
                    <tr>
                        <td>PASSWORD</td>
                        <td>:</td>
                        <td><input name="mypassword" type="password" id="mypassword">
                        </td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td><input type="submit" name="Submit" value="Login" onclick="return loginfilled()"></td>
                    </tr>

                    <tr>
                        <td>
                            <a href="FriendsAndFamily.php"><b><i>CREATE NEW ACCOUNT</b></i></a>
                        </td>
                    </tr>
                </table>
            </form>
        </div>
    </body>
</html>
