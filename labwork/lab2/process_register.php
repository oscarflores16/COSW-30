<?php
    //capture the data from our form
    $first_name = $_POST['firstname'];
    $last_name = $_POST['lastname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirmpassword = $_POST['confirmpassword'];
    
    //Create variables to match email and password against
    //$correct_email = 'test@test.com';
    //$correct_password = 'supersecure123';
    
    //check of the data is good (isn't empty, matches our credentials)
    //if (condition) {
    //    //run this code
    //} else {
        // do something else
    //}
    //Output a message for fun
    
    if ($password == $confirmpassword) {
        echo"<h1> Good job $first_name $last_name </h1>";
        echo'<h1>You successfully registered!</h1>';
        echo"<p>Email Address; $email</p>";
        echo"<p>Password; $password</p>";
    } else {
        echo"<h1>Sorry...try again</h1>";
        echo'<a href="register.php">Go Back</a>';
    }

    //if ($email == $correct_email && $password == $correct_password) {
        //successfull - check the password
        //echo"<h1> Good job $first_name $last_name </h1>";
        //echo'<h1>You successfully registered!</h1>';
        //echo"<p>Email Address; $email</p>";
        //echo"<p>Password; $password</p>";
    //} else {
        //error - output a error message
        //echo"<h1>Sorry...try again</h1>";
        //echo'<a href="register.php">Go Back</a>';
    //}



?>