<!DOCTYPE html>
<html>
    <?php
        session_start();
        $shopid=$_SESSION['shopid'];
        
       ?>

    <head>
        <meta charset="utf-8">
        <title>Book details</title>
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
        </style>
        

    </head>
    <body>
    <header>
            <h1>Book @ Barber</h1>
    </header>
    <br><br>
    <div class='container'>
    <?php
        $user ='root';
        $pass='';
        $db ='barberproject1';
        
        $conn=new mysqli('localhost',$user,$pass,$db) or die("unable to connect");
        $bookdetails=mysqli_query($conn,"SELECT * FROM booking where bshopid='$shopid'");
        if($bookdetails){
               
               echo "<table class='table'>";
               echo "<caption>"."Booked details in your shop"."</caption>";
               echo "<tr>";
               echo "<th>"."Sl.no"."</th>";
               echo "<th>"."Email"."</th>";
               echo "<th>"."Name"."</th>";
               echo "<th>"."Phone number"."</th>";
               echo "<th>"."Start time"."</th>";
               echo "<th>"."End time"."</th>";
               echo "<th>"."Date"."</th>";
               echo "<th>"."Options"."</th>";
               echo "<th>"."Action"."</th>";
               echo "</tr>";
               $i=0;
                   while($row=mysqli_fetch_array($bookdetails)) {
                    if(isset($row)) {
                        $i++;
                        echo "<tr>";
                        echo "<td>".$i."</td>";
                        echo "<td>".$row['bemail']."</td>";
                        
                        echo "<td>".$row['bname']."</td>";
                        echo "<td>".$row['bpnumber']."</td>";
                        echo "<td>".$row['starttime']."</td>";
                        echo "<td>".$row['endtime']."</td>";
                        echo "<td>".$row['date']."</td>";
                        echo "<td>".$row['options']."</td>";
                        echo "<td><a href=";
                        echo "deletebooking.php?mail=".$row['bemail'].">delete</a></td>";
                        echo "</tr>";
                    }
               }
            
               echo "</table>";
        }
        else {
            echo "<p>No one booked in your shop till now</p>";
        }
    mysqli_close($conn);
    ?>
    </div>

    </body>
</html>