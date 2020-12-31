<?php 
    $email=$_REQUEST['mail'];

        $user ='root';
        $pass='';
        $db ='barberproject1';
        $conn=new mysqli('localhost',$user,$pass,$db) or die("unable to connect");

        $result1= $conn->query("DELETE FROM booking WHERE bemail='$email'") or die("error");

        
        header("Location:showbookdetails.php");

    mysqli_close($conn);   
?>