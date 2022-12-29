<?php
    session_start();
    include "inc/db.php";
    include "inc/function.php";
    
    if (isset($_SESSION['user'])) {
        header('location:index.php');
    }


  
    if (isset($_POST['admin_login'])) {
        
       $email =htmlspecialchars($_POST['email']);
       $password = md5($_POST['password']);

       if (!empty($email) AND !empty($password) ) {

            $data = SelectData('admin', "WHERE email='$email'");  
            $result=$data->fetch_object();
            
            if ($data->num_rows>0) {
                if ($password==$result->password) {
                    
                   $_SESSION['user']=$email;
                    Reconect('index.php');
                    
                    
                }else{
                    $mess =  "Password does not match.";
                }
                
            }else{
                $mess = "User name not match";
            }

          
       }else{

        $mess = "All fill are required fields";

       }

        
    }

?>
<!DOCTYPE html>

<html lang="en" class="default-style layout-fixed layout-navbar-fixed">

<head>
    <title>Admin Panel - SUPREMEiP</title>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="Empire is one of the unique admin template built on top of Bootstrap 4 framework. It is easy to customize, flexible code styles, well tested, modern & responsive are the topmost key factors of Empire Dashboard Template" />
    <meta name="keywords" content="bootstrap admin template, dashboard template, backend panel, bootstrap 4, backend template, dashboard template, saas admin, CRM dashboard, eCommerce dashboard">
    <meta name="author" content="Codedthemes" />
    <link rel="icon" href="../assets/brand/<?=settings('favicon')?>" sizes="32x32" />


    <!-- Google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">

    <!-- Icon fonts -->
    <link rel="stylesheet" href="assets/fonts/fontawesome.css">
    <link rel="stylesheet" href="assets/fonts/ionicons.css">
    <link rel="stylesheet" href="assets/fonts/linearicons.css">
    <link rel="stylesheet" href="assets/fonts/open-iconic.css">
    <link rel="stylesheet" href="assets/fonts/pe-icon-7-stroke.css">
    <link rel="stylesheet" href="assets/fonts/feather.css">

    <!-- Core stylesheets -->
    <link rel="stylesheet" href="assets/css/bootstrap-material.css">
    <link rel="stylesheet" href="assets/css/shreerang-material.css">
    <link rel="stylesheet" href="assets/css/uikit.css">

    <!-- Libs -->
    <link rel="stylesheet" href="assets/libs/perfect-scrollbar/perfect-scrollbar.css">
    <!-- Page -->
    <link rel="stylesheet" href="assets/css/pages/authentication.css">
</head>

<body>
    <!-- [ Preloader ] Start -->
    <div class="page-loader">
        <div class="bg-primary"></div>
    </div>
    <div class="authentication-wrapper authentication-2 ui-bg-cover ui-bg-overlay-container px-4" style="background-image: url('assets/img/bg/12.jpg');">
        <div class="ui-bg-overlay bg-dark opacity-25"></div>

        <div class="authentication-inner py-5">

            <div class="card">
                <div class="p-4 p-sm-5">
                    <!-- [ Logo ] Start -->
                    <div class="d-flex justify-content-center align-items-center pb-2 mb-4">
                        <div class="">
                            <div class="w-100 position-relative">
                                <img src="../assets/brand/<?=settings('logo')?>" width="200px" alt="Brand Logo" class="img-fluid">
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                    <!-- [ Logo ] End -->

                    <h5 class="text-center text-muted font-weight-normal mb-4">Login to Your Account</h5>
                    <?php if (isset($mess)) {?>                      
                        <p class="text-danger text-center"><?= $mess?></p>                      
                    <?php  }?>

                    <!-- Form -->
                    <form  action="" method="POST">
                        <div class="form-group">
                            <label class="form-label">Email</label>
                            <input type="text" name="email" class="form-control">
                            <div class="clearfix"></div>
                        </div>
                        <div class="form-group">
                            <label class="form-label d-flex justify-content-between align-items-end">
                                <span>Password</span>
                                <a href="pages_authentication_password-reset.html" class="d-block small">Forgot password?</a>
                            </label>
                            <input type="password" name="password" class="form-control">
                            <div class="clearfix"></div>
                        </div>
                        <div class="d-flex justify-content-between align-items-center m-0">
                            <label class="custom-control custom-checkbox m-0">
                                <input type="checkbox" class="custom-control-input">
                                <span class="custom-control-label">Remember me</span>
                            </label>
                            <button type="submit" name="admin_login" class="btn btn-primary">Sign In</button>
                        </div>
                    </form>
                    <!-- [ Form ] End -->

                </div>
              </div>
        </div>
    </div>
    <!-- / Content -->

    <!-- Core scripts -->
    <script src="assets/js/pace.js"></script>
    <script src="assets/js/jquery-3.3.1.min.js"></script>
    <script src="assets/libs/popper/popper.js"></script>
    <script src="assets/js/bootstrap.js"></script>
    <script src="assets/js/sidenav.js"></script>
    <script src="assets/js/layout-helpers.js"></script>
    <script src="assets/js/material-ripple.js"></script>

    <!-- Libs -->
    <script src="assets/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

    <!-- Demo -->
    <script src="assets/js/demo.js"></script><script src="assets/js/analytics.js"></script>

</body>


</html>
