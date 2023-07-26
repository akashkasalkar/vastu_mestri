<?php
include("../dbconn.php");
?>
<html>
<head>
    <title>ADMIN LOGIN</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="./seller_styles/vendors/feather/feather.css">
    <link rel="stylesheet" href="./seller_styles/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="./seller_styles/vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" href="./seller_styles/vendors/typicons/typicons.css">
    <link rel="stylesheet" href="./seller_styles/vendors/simple-line-icons/css/simple-line-icons.css">
    <link rel="stylesheet" href="./seller_styles/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="./seller_styles/vendors/select2/select2.min.css">
    <link rel="stylesheet"
        href="./seller_styles/vendors/select2-bootstrap-theme/select2-bootstrap.min.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="./seller_styles/vendors/datatables.net-bs4/dataTables.bootstrap4.css">
    <link rel="stylesheet" href="./seller_styles/js/select.dataTables.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="./seller_styles/css/vertical-layout-light/style.css">
</head>
<body>
    <div class="container mt-5">
        <div class="col-6 offset-3 border p-2">
            <p class="display-2 text-primary text-center">Admin Login</p>
            <hr>
            <form action="" method="post">
                <div class="form-group">
                    <label for="">Email</label>
                    <input type="email" name="email"  class="form-control" placeholder="admin@gmail.com" required>
                </div>
                <div class="form-group">
                    <label for="">Password</label>
                    <input type="password" name="password"  class="form-control" placeholder="*******" required>
                </div>
                <div class="form-group">
                    <button class="btn btn-primary" name="login">Login</button>
                    <button class="btn btn-danger" name="clear" type="clear">Clear</button>

                </div>
            </form>
            <?php 
                session_start();
                if(isset($_POST['login'])){
                    $email=$_POST['email'];
                    $password=$_POST['password'];
                    $qry="select * from user 
                    where email='$email'
                    and password= '$password'
                    and user_type='admin' ";
                    $exc=mysqli_query($con,$qry);
                    $count=mysqli_affected_rows($con);
                    if($count == 1){
                        $_SESSION['email']=$email;
                        echo "<script>
                        location='./home.php'</script>";
                    }
                    else{
                        echo "<script>alert('Email/Password wrong.')
                        location='./index.php'</script>";
                    }
                }
            ?>
        </div>
    </div>
  

</body>
</html>