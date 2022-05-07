<?php

    // using mysqli

    date_default_timezone_set('Asia/Kolkata');
    
    include 'db_connection.php';    
    // echo "Connected Successfully";

    //get the post records
    if(isset($_POST['name'])){
        $name = $_POST['name'];
    }
    if(isset($_POST['email'])){
        $email = $_POST['email'];
    }
    if(isset($_POST['subject'])){
        $subject = $_POST['subject'];
    }
    if(isset($_POST['message'])){
        $message = $_POST['message'];
    }

    if(isset($_POST['submit'])){
        $submit = "true";
    }

    // $date = NOW();
    // $date = date("Y-m-d H:i:s");

    $date = new DateTime();
    $date->setTimezone(new DateTimeZone('Asia/Kolkata'));

    $fdate = $date->format('Y-m-d H:i:s'); // same format as NOW()

    echo $name," ", $email," ", $subject," ", $message, $fdate," ", $submit;

    if(isset($_POST['submit']))
    {

        $sql = "INSERT INTO contact VALUES ('$name', '$email', '$subject' , '$message' , '$fdate')";

        echo $sql;

        // insert in database 
        $rs = mysqli_query($conn, $sql);

        if($rs)
        {
            echo "Contact Records Inserted";
            // echo $date;
        }
        else {
            echo "ERROR: Hush! Sorry $sql. " 
                . mysqli_error($conn);
        }

    } 


    mysqli_close($conn);


?>