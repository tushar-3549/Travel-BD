<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <title>Registration Page</title>
</head>
<body>
<div class="w-50 bg-success text-white mx-auto text-center m-5 p-5 border">
        <h2>Sign Up</h2>
        <form action="" method="post" class="needs-validation">

        <div class="form-group was-validated">
                <label class="form-label" for="email">Username</label>
                <input name="username" class="form-control" type="text" id="username" required>
                <div class="invalid-feedback">
                    Please enter your username
                </div>
            </div>

        <div class="form-group was-validated">
                <label class="form-label" for="email">Email address</label>
                <input name="email" class="form-control" type="email" id="email" required>
                <div class="invalid-feedback">
                    Please enter your email address
                </div>
            </div>
            <div class="form-group was-validated">
                <label class="form-label" for="password">Password</label>
                <input name="password" class="form-control" type="password" id="password" required>
                <div class="invalid-feedback">
                    Please enter your password
                </div>
            </div>
            <div class="form-group form-check">
                <input class="form-check-input" type="checkbox" id="check">
                <label class="form-check-label" for="check">Remember me</label>
            </div>
            <input class="btn btn-danger w-100" type="submit" value="SIGN IN" name="signup">

            <div class="mt-5">
                Already a member <a href="login.php">log in</a>
            </div>

    </form>

    <?php
include "config.php";
if (isset($_POST['signup'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // varify the unique email
    $varify = mysqli_query($connection, "select email from users where email = '$email'");
    if (mysqli_num_rows($varify) != 0) {
        echo "This E-mail address is uded, try another one please !";
    } else {
        mysqli_query($connection, "INSERT INTO users(Username, Email, Password) values ('$username', '$email', '$password')") or die("Error Occured!");
        echo "Registration Successful !";

    }
}

?>


</div>
</body>
</html>
