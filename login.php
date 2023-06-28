<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Page</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
  <div class="container">
    <div class="row justify-content-center mt-5">
      <div class="col-md-4">
        <div class="card">
          <div class="card-header bg-success text-white text-center">
            <h2>Login</h2>
          </div>
          <div class="card-body">

            <form action="" method="post">
              <div class="mb-3">
                <div class="input-group">
                  <span class="input-group-text"><i class="fas fa-user"></i></span>
                  <input type="text" name="user" class="form-control" placeholder="Enter Username">
                </div>
              </div>
              <div class="mb-3">
                <div class="input-group">
                  <span class="input-group-text"><i class="fas fa-lock"></i></span>
                  <input type="password" class="form-control" name="pass" placeholder="Enter Password">
                </div>
              </div>
              <div class="text-center">
                <input type="submit" class="btn btn-danger btn-block w-100" value="Log In" name="login">
              </div>
            </form>

          </div>
          <div class="card-footer text-center">
            <p>Or sign in with:</p>
            <div class="d-flex justify-content-center">
              <a href="#" class="btn btn-outline-primary mr-2"><i class="fab fa-google"></i> Google</a>
              <a href="#" class="btn btn-outline-primary ml-2"><i class="fab fa-facebook-f"></i> Facebook</a>
            </div>
          </div>

          <div class="links m-5">
            Don't have account? <a href="register.php">Sign up Now</a>
          </div>

        </div>
      </div>
    </div>

    <?php
include "config.php";
if (isset($_POST['login'])) {
    $user = mysqli_real_escape_string($connection, $_POST['user']);
    $pass = mysqli_real_escape_string($connection, $_POST['pass']);

    $result = mysqli_query($connection, "SELECT * FROM users WHERE Username = '$user' AND Password = '$pass'") or die("Got Error !");
    $row = mysqli_fetch_assoc($result);

    if ($row) {
        echo "Login successful!";
        header("Location: index.php");
        exit;
    } else {
        echo "Invalid username or password. Please try again.";
    }

}
?>

  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
