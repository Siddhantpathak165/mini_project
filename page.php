<?php
$Fname = $_POST['FirstName'];
$Lname = $_POST['LastName'];
$email = $_POST['Email'];
$pass = $_POST['Password'];

    $connection = mysqli_connect("localhost","root","","project");
    if(!connection){
        die("Unable to Connect");
    }
    if(isset($_POST['save'])){
        $insert_query = "INSERT IN TO signup(FirstName,LastName,Email,Password) VALUES ('$Fname','$Lname','$email','$pass')"  ;
    }
    if (mysqli_query($connection,$insert_query)){
        header("refresh:5,url=signup.html");
    }

    else{
        echo"unable to register";
    }
    ?>