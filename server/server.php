<?php
    include './config.php';
    $query="INSERT INTO contact(name,email,number,message) values('".$_POST['cont-name']."',
    '".$_POST['cont-email']."','".$_POST['cont-number']."','".$_POST['cont-message']."')";
    $query="INSERT INTO feedback(name,email,feedback) values('".$_POST['name']."',
    '".$_POST['email']."','".$_POST['feedback']."')";
    $query="INSERT INTO register(Username,email,mobile,Password,confirmpassword) values('".$_POST['username']."',
    '".$_POST['email']."','".$_POST['mobno']."','".$_POST['password']."','".$_POST['confirm-password']."')";

    $query="SELECT * FROM register where Username='".$_POST['username']."' and Password='".$_POST['password']."'";
    $result=mysqli_query($conn, $query);
?>