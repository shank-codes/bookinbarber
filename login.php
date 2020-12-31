<!doctype html>
<html lang="en">
    <head>
      <?php
      $msg="";
      session_start();
      $_SESSION["alreadyExist"]=0;
      $_SESSION['bookdate']='';
       $_SESSION['useremail']="";
      $_SESSION['username']="";
     $_SESSION['upnumber']="";
        if(isset($_SESSION["authuser"]) && $_SESSION["authuser"]==10) {
            $msg="Invalid useremail/password";
        }
        else {
            $msg="";
        }
        
       ?>
       <script>
           function clearP() {
               document.getElementById("demo1").innerHTML="";
           }
           function myFunction() {
                    var x = document.getElementById("pass");
                    if (x.type === "password") {
                        x.type = "text";
                    } else {
                        x.type = "password";
                    }
                }
        </script>
        <title>Login</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <script src="js/bootstrap.min.js"></script>
        <style>
            header {
            background-color: #000000;
            text-align: center;
            }
            h1{
                color: #ffffff;
            }
            a{
                text-decoration: none;
                color: #000000;
            }
            button{
                background-color: #ffffff;
                width:10%;
                margin: 2%;
                box-sizing: 3px;
            }
            button.loginright{
                float: right;
            }
            form{
                width:100%;
                margin-left :40%;
            }
            input {
                width: 30%;
                padding: 12px 20px;
                margin: 8px 0;
                display: inline-block;
                border: 1px solid #ccc;
                border-radius: 4px;
                box-sizing: border-box;
            }
            .submitclass {
                width: 30%;
                background-color: black;
                color: white;
                padding: 14px 20px;
                margin: 8px 0;
                border: none;
                border-radius: 4px;
                cursor: pointer;
            }
            .submitclass :hover {
                background-color: #45a049;
            }
            p {
                margin-left:10%;
                text-align :center;
            }
            
            .create_new {
                text-decoration : unset;
                
            }
            #demo1 {
                color:red;
                margin-right:60%;
                
            }
            #icon1 {
                width:2%;
            }
           
        </style>
    </head>
    <body>
    <div class="container">
        <header>
            <h1>Book @ Barber</h1>
        </header>
        
        <form name="login_form"  action="validateLogin.php" method="POST">
            <label for="uemail">Email  </label> <br>
            <input type="emai" name="username" id="uemail" 
            required placeholder="Enter registered email">
            <br>
            <label for="pass">Password</label> <br>
            <input type="password" id="pass" name="upassword" required placeholder="Enter password">
            <br>
            <input type="checkbox" onclick="myFunction()" id="icon1">
             <label for="icon1">Show Password</label>
             <br>
            <p id="demo1"> <?php echo $msg; ?> </p>
            <br>
            <input class="submitclass" type="submit" value="login">
            <br>
            <input class="submitclass" type="reset" value="Clear"
             onclick="clearP()">
            <br><br>
        </form>
        <p> Don't have an account?<a href="signup.php" class="create_new">Create here</a></p><br>
        <p> Click here for admin login<a href="adminlogin.php" class="create_new">Admin_login</a></p>      
        </div>      
    </body> 
    
</html>
