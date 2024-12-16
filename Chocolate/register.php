<?php
    // servername => localhost
    // username => root
    // password => empty
    // database name = chocolate

    $conn = mysqli_connect("localhost","root","","chocolate");

    if($conn === false)
    {
        echo "Connection Failed".mysqli_connect_error();
    }

    if($_POST['join'])
    {
        $fname = $_REQUEST['fname'];
        $lname = $_REQUEST['lname'];
        $dob = $_REQUEST['dob'];
        $email = $_REQUEST['email'];
        $fav = $_REQUEST['choice'];
        $xyz = implode(",",$fav);
    }
        
        $sql = "INSERT INTO members  VALUES ('$fname','$lname','$dob','$email','$xyz')";
        mysqli_query($conn,$sql);

        header('location: thank.html');
            
    mysqli_close($conn);
?>