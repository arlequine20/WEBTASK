<!DOCTYPE html>
<html>
    <head>
        <title>Account creation</title>
    </head>
    <body>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $age = (int)$_POST['age'];
     if ($age > 20) {
        echo "<h3>$name,Your Account is created</h3>";
    } else {
        echo "<h3>Sorry $name,Your age is under 20</h3>";
    }
}
?>
       <H2>Create Account</H2>
       <form method="post" action="">
    Name: <input type="text" name="name" required><br><br>
    Age: <input type="number" name="age" required><br><br>
    <input type="submit" value="Register">
</form>

    </body>
</html>