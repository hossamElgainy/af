<?php
    
    include 'includes/header.php';

?>
    <!-- start form -->
    <div class="container">
        <!-- start signup form -->
        <div class="signup" id="singUp">
            <i class="fa fa-user-plus"></i>
            <h1 class="text-center">SignUp</h1>

            <?php include('includes/errors.php'); ?>

            <form  class="signup-form" action="signup.php#singUp" method="post"  enctype="multipart/form-data">
                <!-- start username field -->

                <div class="form_group">
                    <input class="user_name form-control" type="text" name="yourname" placeholder="Type Your Yourname" />
                    <i class="fa fa-user fa-fw"></i>
                    <span class="asterisx">*</span>
                </div>

                <div class="form_group">
                    <input class="user_name form-control" type="text" name="username" placeholder="Type Your UserName" />
                    <i class="fa fa-user fa-fw"></i>
                    <span class="asterisx">*</span>
                </div>
                <!-- end username field -->

                <!-- start email field -->
                <div class="form_group">
                    <input class="email form-control" type="email" name="email" placeholder="Please Type A Valied Email" />
                    <i class="fa fa-envelope fa-fw"></i>
                    <span class="asterisx">*</span>
                </div>
                <!-- end email field -->

                <!-- start cellphone field -->
                <input class="form-control" type="text" name="phone" placeholder="Type Your Cell Phone" />
                <i class="fa fa-phone fa-fw"></i>
                <!-- end cellphone field -->

                <!-- start password1 field -->
                <div class="form_group">
                    <input class="password1 form-control" type="password" name="password_1"
                        placeholder="Please Type A Complix Password" />
                    <i class="fa fa-key fa-fw"></i>
                    <span class="asterisx">*</span>
                </div>
                <!-- end password1 field -->

                <!-- start password2 field -->
                <div class="form_group">
                    <input class="password2 form-control" type="password" name="password_2"
                        placeholder="Confirm your password" />
                    <i class="fa fa-key fa-fw"></i>
                    <span class="asterisx">*</span>
                </div>
                <!-- end password2 field -->

                <div class="form-group"> 
                    <span class="d-block">
                        Upload profile photo
                    </span>
                     <input type="file" class="text-info" name="avatar" value="choose a profile photo" accept="image/*">
                </div>

                <!-- start submit field -->
                <input class="btn btn-success btn-block"  name="signup" type="submit" value="SignUp" />
                <!-- start submit field -->
                <a href="login.php" data-class='login'>Log In</a>

            </form>
        </div>
    </div>
    <!-- End Form -->


<?php
    
    include 'includes/footer.php';


?>