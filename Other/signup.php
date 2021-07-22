<?php
session_start();

$con = mysqli_connect('localhost','root','','project');
$fname = $_POST['fname'];
$sname = $_POST['sname'];
$usernm = $_POST['usernm'];
$passwrd = $_POST['passwrd'];
$age = $_POST['age'];
$dob = $_POST['dob'];
$telno = $_POST['telno'];
$email = $_POST['email'];
$country = $_POST['origin'];
$hobbies =$_POST['hobbies'];
$zip=$_POST['zip'];

$sql = "INSERT INTO `accounts` (`First_Name`,`Second_Name`,`Username`,`Password`,`Age`,`Date_of_Birth`,`Telephone_Number`,`Email`,`Country`,`Hobbies`,`ZIP`) 
        VALUES('$fname','$sname','$usernm','$passwrd','$age','$dob','$telno','$email','$country','$hobbies','$zip')";

$rs= mysqli_query($con,$sql);
if($rs){
    echo "Contract Records Inserted";
    $_SESSION['First_Name']=$fname;
    $_SESSION['Second_Name']=$sname;
    header("Location:homepage.php");
}else{
    echo "ERROR";
    header("Location:signup.html");
}


?>