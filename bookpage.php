<?php  
session_start();

        $user ='root';
        $pass='';
        $shopid=$_REQUEST['id'];
        $db ='barberproject1';
        $conn=new mysqli('localhost',$user,$pass,$db) or die("unable to connect");

        $shopdetails=$conn->query("SELECT shopname,address FROM shop_list WHERE shopid=$shopid");
        $row=mysqli_fetch_array($shopdetails);
        $shopname=$row['shopname']; 
        $shopaddress=$row['address'];
        
        mysqli_close($conn);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Book</title>
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
            .loginright{
                float: right;
                margin-right : 5%;
                width:10%;
                margin: 2%;
            }
            input {
                width:10%;
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
            h4 {
                color:white;
                width:25%;
                background-color: black;
            }
            </style>
            
    </head>
    <body>
        <header>
                <h1>Book @ Barber</h1>
        </header>
        <section>

            <button><a href="trial.php">Home</a></button>
            <button><a href="login.php">Log Out</a></button>
                <p class="loginright">
                 <span class="glyphicon glyphicon-user"></span>
                  <?php echo $_SESSION["username"]; ?>
        </p> 
        </section>
        <div class="container">
             <h3>Shop Name:&nbsp&nbsp&nbsp &nbsp&nbsp<?php echo $shopname; ?></h3>
             <h3>Shop Address: &nbsp&nbsp<?php echo $shopaddress; ?></h3></br>
             <h4>Services Available</h4>
             <br>
             <form  action="validateBooking.php?id=<?php echo $shopid;?>&sname=<?php echo $shopname;?>" method="POST" >
                <input type="checkbox" name="service[]" id="service" value="haircut">Haircut <br>
               <input type="checkbox" name="service[]" id="service" value="shave">Shave <br>
                <input type="checkbox" name="service[]" id="service" value="facial">Facial <br>
                <input type="checkbox" name="service[]" id="service" value="hair_colouring">Hair Colouring <br>
                <input type="checkbox" name="service[]" id="service" value="hair_straightning">Hair Straightning  <br>
                <input type="checkbox" name="service[]" id="service" value="massage">Head Massage<br><br>
                <p id="demo"></p> <br>
                <input type="submit" class="submitclass" value="Book">

            </form>
        </div>


    </body>    
</html>