<?php
session_start();
$date=$_SESSION['bookdate'];
$email=$_SESSION['useremail'];
$name1= $_SESSION['username'];
$pnumber=$_SESSION['upnumber'];

$shopid= $_REQUEST['id'];
$sname=$_REQUEST['sname'];

$name = $_POST['service'];
if(isset($_POST['service'])){
    $name = $_POST['service'];
}
else{
    header("location:login.php");
    exit;
}


$options="";
$h=0; 
foreach ($name as $choice){ 
    $options=$options.$choice.",";
    $h+=1;
}
    $user ='root';
    $pass='';
    $db ='barberproject1';
    
    $conn=new mysqli('localhost',$user,$pass,$db) or die("unable to connect");

    
    $bookdetails=mysqli_query($conn,"SELECT * FROM booking where bshopid='$shopid' and date='$date'");
$shopend=8;
    if($bookdetails){
        $row=mysqli_fetch_array($bookdetails);
        if(isset($row['endtime'])) {
        $max=$row['endtime'];
        do{
            if(isset($row['endtime']) and $row['endtime']>$max) {
                $max=$row['endtime'];
            }

        }while($row=mysqli_fetch_array($bookdetails));
        $shopend=$max;
        }
    }
    
$endtime=$h+$shopend;

    $flag=0;
    $user=$conn->query("SELECT bemail FROM booking");
    while($row=mysqli_fetch_array($user)){
        if(isset($row['bemail']) && $row['bemail']==$_SESSION['useremail']){
            $flag=1;
            header("location:login.php");
            exit;
        }
    }

    if($flag==0){
            $query="INSERT INTO booking values('$email','$name1','$pnumber','$shopid','$sname','$shopend','$endtime','$date','$options')";
            $conn->query($query) or die("errrrorrr");
            header("location:trial.php");
    }
    
?>