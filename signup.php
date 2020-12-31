<!doctype html>
<html lang="en">
    <head>
    <?php 
            session_start(); 
            $_SESSION["authuser"]=2;
            $msg="";
            if($_SESSION["alreadyExist"]==100) {
                $msg="This Email is already taken,try with new Email";
            }
            else {
                $msg="";
            }
    ?>
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
                margin:auto;
                box-sizing: 3px;
                
            }
            
            form {
                width:100%;
                margin-left :40%;
                
            }
            input {
                width: 30%;
                padding: 12px 20px;
                margin: 2px 0px 10px 0px;
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
            #icon1 {
                width:2%;
            }
            p {
                color:red;
            }
            
           
        </style> 
        <script>
                function myFunction() {
                    var x = document.getElementById("upass");
                    if (x.type === "password") {
                        x.type = "text";
                    } else {
                        x.type = "password";
                    }
                }
                function validatePassword() {
                    var x1=document.getElementById('upass').value;
                    var x2=document.getElementById('ucpass').value;
                    var n=x1.localeCompare(x2);
                    if(n!=0) {
                        document.getElementById("demo").innerHTML="Password Did not match";
                        return false;
                    }
                    return true;
                }
                function clearP() {
                    document.getElementById("demo1").innerHTML="";
                    document.getElementById("demo").innerHTML="";
                }
        </script>
        
    </head>
    <body>
        <header>
            <h1>Book @ Barber</h1>
        </header>
        <form name="login_form"  action="validateSignup.php" onsubmit="return validatePassword()" method="POST">
            <label for="uname">Name</label><br>
            <input type="text" name="username" id="uname" 
            required placeholder="Enter Full Name">
            <br>
            <label for="uemail">Email</label><br>
            <input type="email" id="uemail" name="useremail" required placeholder="Enter Valid Email">
            <br>
            <p id="demo1"><?php echo $msg; ?></p>
            <label for="uphone">Phone Number</label><br>
            <input type="text" id="uphone" name="userphone" required placeholder="Enter Valid phone number">
            <br>
            <!--
             <p>Eg.AaBb1234</p>
              -->
             <label for="upass">Password</label><br>
             <input type="password" name="password" id="upass" placeholder="Enter the password"
             pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
             title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters">
             <br>
             <input type="checkbox" onclick="myFunction()" id="icon1">
             <label for="icon1">Show Password</label>
            <br><br>
            <label for="ucpass">Confirm password</label><br>
            <input type="password" id="ucpass" name="usercpass" required placeholder="Confirm password">
            <br>
            <p id="demo"></p>
            <br>
            <input class="submitclass" type="submit" value="Sign Up">
            <br>
            <input class="submitclass" type="reset" value="Clear" onclick="clearP()">
            <br><br>
        </form> 
    </body> 
</html>