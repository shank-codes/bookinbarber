<?php
        session_start();
        $username = $_POST['username'];
        $userpassword = $_POST['upassword'];

        $user ='root';
        $pass='';
        $db ='barberproject1';
        $conn=new mysqli('localhost',$user,$pass,$db) or die("unable to connect");

        $result1= $conn->query("SELECT * FROM logindetails");
      
      $flag=0;  
        while($row=mysqli_fetch_array($result1)){
            if($row['uemail']==$username){
                $flag=1;
                if($row['upassword']==$userpassword){
                     $_SESSION["username"]=$row['uname'];
                     $_SESSION["useremail"]=$username;
                     $_SESSION["upnumber"]=$row["upnumber"];
                     $_SESSION["authuser"]=100;
                     header("Location:trial.php");
                break;
                }
                else {
                    $_SESSION["authuser"]=10;
                     header("Location:login.php");
                    exit; 
                }
            }
        }
        if ($flag==0){
            $_SESSION["authuser"]=10;
            header("Location:login.php");
                exit; 
        }
        mysqli_close($conn);
    ?>