<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Registration Form</title>
    </head>
    <body>
        <h1>Registration Form</h1>
        <form action="process_register.php" method="POST">
            
            <label>First Name;</label>
            <input type="text" name="firstname" id="firstname"/>
            
            <label>Last Name;</label>
            <input type="text" name="lastname" id="lastname"/>
            
            <label>Email Address;</label>
            <input type="email" name="email" id="email" required>
            
            <label>Password;</label>
            <input type="password" name="password" id="password" required>
            
            <label>Confirm Password;</label>
            <input type="password" name="confirmpassword" id="confirmpassword" required>
            
            <button>Register!</button>
        </form>
    </body>
</html>