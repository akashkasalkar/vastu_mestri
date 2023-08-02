<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up</title>
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
$title = $msg = $color = $mobile = $name = $password = $c_password = "";
if (isset($_POST['signup'])) {
    extract($_POST);
    if ($password != $c_password) {
        $title = "Warring";
        $msg = "Please confirm password !";
        $color = "#FADBD8";
    } else {
        $query = "SELECT * FROM user WHERE phone = '$mobile'";
        $loginRes = getQueryResult($con, $query);
        if (count($loginRes) > 0) {
            $title = "Error";
            $msg = "already registered please sign in to continue !";
            $color = "#FADBD8";
        } else {
            $data = [
                'name' => $name,
                'phone' => $mobile,
                'password' => md5($password),
                'user_type' => 'customer',
                'email' => 'NA',
                'photo' => 'NA',
                'status' => 1
            ];
            $query = generateInsertQuery('user', $data, $con);
            $res = insert($query, $con);
            if ($res) {
                $title = "Success";
                $msg = "Registered successfully";
                $color = "#D5F5E3";
                // redirect to login page
            } else {
                $title = "Error";
                $msg = "Failed to register user !";
                $color = "#FADBD8";
            }
        }
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
                        <h4>Sign up</h4>
                    </div>
                    <div class="card-body">
                        <form method="POST">
                            <?php
                            include_once('./common/notification.php')
                            ?>
                            <div class="form-group">
                                <label for="username">Mobile</label>
                                <input type="text" class="form-control" value="<?= $mobile ?>" id="mobile" name="mobile" required>
                            </div>
                            <div class="form-group">
                                <label for="username">Full name</label>
                                <input type="text" class="form-control" value="<?= $name ?>" id="name" name="name" required>
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" id="password" name="password" required>
                            </div>
                            <div class="form-group">
                                <label for="password">Confirm Password</label>
                                <input type="password" class="form-control" id="c_password" name="c_password" required>
                            </div>
                            <button type="submit" name="signup" class="btn btn-primary btn-block">Sign up</button>
                            <div class="text-center mt-3">
                                <a href="login.php">Already have account? Sign in</a>
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