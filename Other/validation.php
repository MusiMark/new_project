<?php
session_start();

include "connect.php";

if (isset($_POST['usernm'])&&isset($_POST['passwrd'])) {
    function validate($data){
        
        $data=trim($data);
        $data=stripcslashes($data);
        $data=htmlspecialchars($data);
        return($data);

    }
    $uname=validate($_POST['usernm']);
    $pass =validate($_POST['passwrd']);
    if(empty($uname)){
        header("Location:login.php?error1=User Name is required");
        exit();
    }elseif(empty($pass)){
        header("Location:login.php?error2=Password is required");
        exit();
    }else{
        $sql="SELECT * FROM `accounts` WHERE `Username`='$uname' AND `Password`='$pass'";
        $result= mysqli_query($conn,$sql);

        if(mysqli_num_rows($result)===1){
            $row = mysqli_fetch_assoc($result);

            if ($row['Username']===$uname&& $row['Password']===$pass) {
                echo "Logged In!";
                $_SESSION['Username']=$row['Username'];
                $_SESSION['First_Name']=$row['First_Name'];
                $_SESSION['Second_Name']=$row['Second_Name'];
                header("Location:homepage.php");
                exit();
            }else{
                header("Location:login.php?error=Incorrect Username or Password");
                exit();
            }
        }else{
            header("Location:login.php?error=Incorrect Username or Password");
            exit();
        }
    }
}else{
    header("Location:login.php");
    exit();
}

?>