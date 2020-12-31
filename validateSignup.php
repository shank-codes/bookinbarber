<?php 
    session_start();
    $name=$email=$password=$pnumber="";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $name = test_input ($_POST["username"]);
        $email = test_input ($_POST["useremail"]);
        $password = test_input ($_POST["password"]);
        $pnumber = test_input ($_POST["userphone"]);

        $user ='root';
        $pass='';
        $db ='barberproject1';
        $conn=new mysqli('localhost',$user,$pass,$db) or die("unable to connect");

        $result1= $conn->query("SELECT * FROM logindetails");

        $flag=0;  
        while($row=mysqli_fetch_array($result1)){
            if($row['uemail']==$email){
                $flag=1;
                $_SESSION["alreadyExist"]=100;
                header("Location:signup.php");
                exit; 
            }
        }
        if($flag==0) {
            $query="INSERT INTO logindetails values('$email','$name','$password','$pnumber')";
            $conn->query($query) or die("errrrorrr");
        }
        header("Location:login.php");

    }
    function test_input($data){
        $data= trim($data);
        return $data;
    }

    mysqli_close($conn);   
?>