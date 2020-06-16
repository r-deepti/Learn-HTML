<?php
    session_start();
    $con=new mysqli("localhost","root","","student");
    if($con->connect_error)
    {
        die("Connection failed:".$con->connect_error);
    }
    if (isset($_POST["Signup"]))
    {
        $username=$_POST["username"];
        $pass=$_POST["pass"];
        $mail=$_POST["mail"];
        $mob=$_POST["mob"];
        $sql="insert into register values('$username','$pass','$mail',$mob)";
        $res=$con->query($sql);
        header("Location: login.php");
    }
?>