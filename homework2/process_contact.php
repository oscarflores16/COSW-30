<?php
//capture the data from our form
$first_name = $_POST['firstname'];
$last_name = $_POST['lastname'];
$email = $_POST['email'];
$gender = $_POST['gender'];
$age_range = $_POST['agerange'];
$interests = $_POST['interests'];
$money = $_POST['quantity'];
$comments = $_POST['comments'];


if ($password == $confirmpassword) {
        echo"<h1> Good job $first_name $last_name </h1>";
        echo'<h2>You successfully registered!</h2>';
        echo"<p>Email Address; $email</p>";
        echo"<p>Your gender is $gender</p>";
        echo"<p>Your age range is $age_range</p>";
        echo"<p>Your interests are: $interests</p>";
        echo"<p>Your monitary contribution is: $money</p>";
        echo"<p>Your comments are as follows: $comments.</p>";
    } else {
        echo"<h1>Sorry...try again</h1>";
        echo'<a href="contact.html">Go Back</a>';
    }





?>