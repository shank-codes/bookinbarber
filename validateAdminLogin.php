<?php
        session_start();
        $username = $_POST['username'];
        $userpassword = $_POST['upassword'];

        $user ='root';
        $pass='';
        $db ='barberproject1';
        $conn=new mysqli('localhost',$user,$pass,$db) or die("unable to connect");

        $result1= $conn->query("SELECT * FROM admin");
      
      $flag=0;  
        while($row=mysqli_fetch_array($result1)){
            if($row['shopid']==$username){
                $flag=1;
                if($row['password']==$userpassword){
                    
                     $_SESSION["authuser"]=100;
                     $_SESSION['shopid']=$username;
                     header("Location:showbookdetails.php");
                break;
                }
                else {
                    $_SESSION["authuser"]=10;
                     header("Location:adminlogin.php");
                    exit; 
                }
            }
        }
        if ($flag==0){
            $_SESSION["authuser"]=10;
            header("Location:adminlogin.php");
                exit; 
        }
        mysqli_close($conn);
    ?>