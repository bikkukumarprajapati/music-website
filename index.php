
<?php
  session_start();

  include('db_connect.php');
  $msg = false;

  if(isset($_POST['user_name'])) {
    $user_name = $_POST['user_name'];
    $user_password = $_POST['user_password'];

    // Use prepared statements to prevent SQL injection
    $stmt = $con->prepare("SELECT * FROM user WHERE user = ? AND password = ? LIMIT 1");
    $stmt->bind_param("ss", $user_name, $user_password);
    $stmt->execute();
    $result = $stmt->get_result();

    if($result->num_rows == 1) {
        header('Location: welcome.php');
        exit(); // Ensure script stops after redirect
    } else {
        $msg = "Incorrect Password";
    }

    $stmt->close();
  }
?>


  <!-- session_start();

  include('db_connect.php');
  $msg = false;
  if(isset($_POST['user_name'])) {

    $user_name = $_POST['user_name'];
    $user_password = $_POST['user_password'];
    $query = "select * form user where user = '".$user_name."' AND password = '".$user_password."' limt 1";
    $result = mysqli_query($con, $query);

    if(mysqli_num_row($result)==1) {
        header('Location: index.php');
    }
    else{
        $msg = "Incorect Password";
    }
  } -->



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="x-icon" href="img/logo1.jpg">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="LoginSignup.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <title>music website singin</title>
</head>
<body>
    <header>
        <div class="letf_bx1">
            <div class="content">
                <form method="post">
                    <h3 class="box10">Login</h3>
                    <div class="card">
                        <label for="name">Name</label>
                        <input type="text" name="user_name" placeholder="Enter your Username..." required>
                    </div>
                    <div class="card">
                        <label for="password">Password</label>
                        <input type="password" name="user_password" placeholder="Enter your UserPassword..." required>
                    </div>
                    <input type="submit" value="Login" class="submit">
                    <div class="check">
                        <input type="checkbox" name="" required> <span> Remember Me.</span>
                    </div>
                    <p>Don't have a account yet? <a href="signup.php">Sing Up</a></p>
                </form>
            </div>
        </div>
        <div class="right_bx1">
            <img src="img/logo.png" alt="">
            <!-- <h3>Incorrect Password</h3> -->
             <?php
             
             echo('<h3>'.$msg.'</h3>');
             
             ?>
        </div>
    </header>
</body>
</html>