<?php
// Add the database connection
include('database.php');
/*
*   CHECK IF THE FORM HAS BEEN SUBMITTED AND INSERT
*   NEW USER INTO THE DATABASE
*/
if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $password = $_POST['first_name'];

    $insert_query = "INSERT INTO USER_FLORES (first_name, last_name, email, password)
                    VALUES (first_name, $last_name, $email, $password)";

    $result = mysqli_query($connection, $insert_query);
}
/*
*   QUERY THE DATABASE AND STORE ALL USERS INTO A VARIABLE
*/
// Create your query
$query = 'SELECT * FROM USER_FLORES';
// Run your query
$result = mysqli_query($connection, $query);
// Check if the database returned anything
if($result) {
    while($rows = mysqli_fetch_all($result, MYSQLI_ASSOC))
    print_r($rows);


    {
        // Output the results
        echo 'This no work';
    }
} else {
    // Output an error
}
?>

<!doctype html>
<html>
<head>
    <title>My First CRUD</title>
</head>
<body>
    <h1>Create a New User</h1>
    <form action="crud.php" method="POST">
        <label for="first_name">First Name</label>
        <input type="text" id="first_name" name="first_name"><br>

        <label for="last_name">Last Name</label>
        <input type="text" id="last_name" name="last_name"><br>

        <label for="email">Email</label>
        <input type="email" id="email" name="email"><br>

        <label for="password">Password</label>
        <input type="password" id="password" name="password"><br>

        <!--Add a second password input so the user has to retype their password -->

        <button>Register</button>
    </form>

    <h2>Output a List of Users</h2>
    <table>
        <thead>
            <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Password</th>
                <th>Edit</th>
            </tr>
        </thead>
        <tbody>
        <?php
        foreach($rows as $row){
        echo   ' <tr>
                <td>'.$rows['first_name'].'</td>
                <td>'.$rows['last_name'].'</td>
                <td>'.$rows['email'].'</td>
                <td>'.$rows['password'].'</td>
                <td><a href="update.php?id='.$row['user_id'].'">Edit</a></td>
            </tr>';
        }
        ?>
        </tbody>
    </table>
</body>
</html>