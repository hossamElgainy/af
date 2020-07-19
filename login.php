<?php
    
    include 'includes/header.php';

?>
    <!-- start form -->
    <div class="container">
        <!-- start login form -->
        <div class="login" id="singIn">
            <i class="fa fa-user login-icon"></i>
            <h1 class="text-center">LogIn</h1>
                
            <?php include('includes/login_errors.php'); ?> 

            <form class="login-form"  action="login.php#singIn" method="post">

                <!-- start email field -->
                <div class="form_group">
                    <input class="email form-control" type="text" name="email"
                        placeholder="Type Your Email" />
                    <i class="fa fa-user fa-fw"></i>
                    <span class="asterisx">*</span>
                </div>
                <!-- end email field -->

                <!-- start password field -->
                <div class="form_group">
                    <input class="password form-control" type="password" name="password"
                        placeholder="Type your password" />
                    <i class="fa fa-key fa-fw"></i>
                    <span class="asterisx">*</span>
                </div>
                <!-- end password field -->
                <a href="#">Forget Password?</a>

                <!-- start submit field -->
                <input class="btn btn-success btn-block"  name="login" type="submit" value="LogIn" />
                <!-- start submit field -->

            </form>
        </div>
        <!-- end login form -->

    </div>
    <!-- End Form -->


<?php
    
    include 'includes/footer.php';


?>