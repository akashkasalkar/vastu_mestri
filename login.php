<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign in</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
</head>
<?php
include_once('./dbconn.php');
include_once('./function/controller.php');
$title = $msg = $color = $mobile = $password = "";
if (isset($_POST['login'])) {
    extract($_POST);
    $password = md5($password);
    $query = "SELECT * FROM user WHERE phone = '$mobile'";
    $loginRes = getQueryResult($con, $query);
    if (count($loginRes) > 0) {
        if ($loginRes[0]['password'] == $password) {
            $title = "Success";
            $msg = "Logged in successfully";
            $color = "#D5F5E3";
            session_start();
            $_SESSION['mobile'] = $loginRes[0]['phone'];
            $_SESSION['uid'] = $loginRes[0]['user_id'];
            if (isset($_REQUEST['cart'])) {
                header('location:' . $_SESSION["prv_page"]);
            } else {
                header('location:index.php');
            }
        } else {
            $title = "Error";
            $msg = "Invalid login details !";
            $color = "#FADBD8";
        }
    } else {
        $title = "Error";
        $msg = "User not registered with this mobile !";
        $color = "#FADBD8";
    }
}
?>

<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header text-center">
                        <img src="./img/logo.png" alt="Logo" class="img-fluid mb-3" style="max-height: 100px;">
                        <h4>Sign in</h4>
                    </div>
                    <div class="card-body">
                        <?php
                        include_once('./common/notification.php')
                        ?>
                        <form method="POST">
                            <div class="form-group">
                                <label for="username">Mobile</label>
                                <input type="text" class="form-control" value="<?= $mobile ?>" id="mobile" name="mobile" required>
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" id="password" name="password" required>
                            </div>
                            <button type="submit" name="login" class="btn btn-primary btn-block">Sign in</button>
                            <div class="text-center mt-3">
                                <a href="sign_up.php">Don't have account? Sign up</a>
                                <!-- | <a href="forgotpassword.html">Forgot Password</a> -->
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>