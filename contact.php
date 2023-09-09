<?php
include 'connection.inc.php';

session_start();
$contact=false;
$enteredid=$_SESSION["login"];
if(isset($_POST['contact'])){
  
    $name=$_POST['name'];
    $pnum=$_POST['pnum'];
    $address=$_POST['address'];
    $msg=$_POST['msg'];
    
  
    $sql="INSERT INTO contact (name,pnum,address,msg)values('$name','$pnum','$address','$msg')";
    $result=mysqli_query($con,$sql);
    if($result){
        $contact=true;
        header("location:index.php");
        echo'<script>alert ("You will be contacted soon");</script>';
        
    }else{
 die(mysqli_error($con));

    }
}

?>