<!DOCTYPE html>
<html>
    <head>
        <?php 
        session_start();
        $_SESSION['bookdate']=$_POST['bookdate'];
        ?>
        <meta charset="utf-8">
        <title>Shop-lists</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <script src="js/bootstrap.min.js"></script>
        <style>
            *{
                margin:0;
                padding: 0;
                font-family: Century gothic;
            }
            body{
               background-color: white;
               padding: 3%;
           }
           .title{
                color: black;
                font-size: 30px;
                text-align: center;

             }
          
            a{
                text-decoration: none;
                color: white;
             }
               ul{
                float: left;
                list-style-type: none;
                padding: 3%;
             }
             ul li{
                display: inline-block;
               width: 100px;
               
            }
            ul a{
                text-decoration: none;
                color:black;
                padding: 5px;
                border:solid 1px white;
            }
            ul a:hover{
                background-color: black;
                color:white;
            }
            section {
                width: 100%;
                padding: 12px 20px;
                margin: 8px 0;
                display: inline-block;
                border: 1px solid #fff;
                border-radius: 20px;
                box-sizing: border-box;
                background-color: #ff8080;
            }
            img {
                float: right;
            }
            .proceed_button{
                background-color: green;
                width: 10%;
                height:50px;
               border: none;
               border-radius: 20px;
            }
        </style>
        
    </head>
    <body>
        
                   
        <header>
            <div class="title">
                <h1>LIST OF SALON</h1>
            </div>
            <div class="sub">
                <ul>
                    <li><a href="trial.php">HOME</a> </li>
                    <li><a href="login.php">Logout</a> </li>
                </ul>
            </div>
            
            <!--<button class="class_head"><a href="homepage.html">Home</a></button>
            <button class="class_head"><a href="homepage.html">Login</a></button>-->
        </header>
        <?php 
        $user ='root';
        $pass='';
        $db ='barberproject1';
        $conn=new mysqli('localhost',$user,$pass,$db) or die("unable to connect");
        
        $c=$_POST['cityname'];

        $query = "SELECT * FROM shop_list WHERE city='$c'";
        $result= mysqli_query($conn,$query);
        $j = 0;
        while($row = mysqli_fetch_array($result)) {

            $j++;
            echo "<section>";
            echo "<img src='2.jfif' alt='barber shop image' height='150x'>";
            echo "<h2>".$j."</h2>";
            echo "<h2>".$row["shopname"]."</h2>";
            echo "<h2>".$row["city"]."</h2>";
            $r=$row["rating"];

            echo "<h2>Rating "; 

            for($i=1;$i<=$r;$i++){
            echo "&#9733 ";
        }
            echo "</h2>";
        ?>
        <button  class='proceed_button' value='Proceed'><a href="bookpage.php?id=
        <?php echo $row['shopid']; ?>
        ">Proceed</a></button>
         
         <?php 
         echo "</section>";
        }
           mysqli_close($conn);
        ?> 
    </body>
</html>



