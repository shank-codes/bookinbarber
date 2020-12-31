<!DOCTYPE html>
<html>
    <?php
        session_start();
       ?>

    <head>
        <meta charset="utf-8">
        <title>Home Page</title>
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
            form{
                text-align: center;
            }
            #when,select {
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

        </style>
    </head>
    <body>
    <header>
            <h1>Book @ Barber</h1>
        </header>
        <section>

            <button><a href="login.php">Logout</a></button>
            <button><a href="about.html">About</a></button>
            
                <p class="loginright">
                 <span class="glyphicon glyphicon-user"></span>
                  <?php echo $_SESSION["username"]; ?> &nbsp
        </p> 
        </section>
        <br><br>

        <div>
        <form name="city_form" action="shoplist.php" method="POST">
            <label for="cities">Select a city</label>
            <select id="cities" name="cityname" required>
            
                <option value="Karkala">Karkala</option>
                <option value="Udupi">Udupi</option>
                <option value="Mangalore">Mangalore</option>
                <option value="Bangalore">Bangalore</option>
                </select>
            <p id="msg"></p>
            <br>
            <label for="when">Select date</label>
            <input type="date" id="when" name="bookdate" required>
            <br><br>
            <input class="submitclass" type="submit" value="continue">
            <br>
            <input class="submitclass" type="reset" value="Clear" >

        </form>
    </div>
    <br><br>
    <div class='container'>
    <?php
        $user ='root';
        $pass='';
        $db ='barberproject1';
        
        $conn=new mysqli('localhost',$user,$pass,$db) or die("unable to connect");

        $useremail=$_SESSION['useremail'];
        $bookdetails=mysqli_query($conn,"SELECT * FROM booking where bemail='$useremail'");
        if($bookdetails){
               $row=mysqli_fetch_array($bookdetails);
               if(isset($row)) {
               echo "<table class='table'>";
               echo "<caption>"."Your Book details"."</caption>";
               echo "<tr>";
               echo "<th>"."Shop name"."</th>";
               echo "<th>"."Start time"."</th>";
               echo "<th>"."End time"."</th>";
               echo "<th>"."Date"."</th>";
               echo "<th>"."Service chosen"."</th>";
               echo "</tr>";
               echo "<tr>";
               echo "<td>".$row['bshopname']."</td>";
               echo "<td>".$row['starttime']."</td>";
               echo "<td>".$row['endtime']."</td>";
               echo "<td>".$row['date']."</td>";
               echo "<td>".$row['options']."</td>";
               echo "</tr>";
               echo "</table>";
            
        }
    }
    mysqli_close($conn);
    ?>
    </div>
    </body>
    
</html>
