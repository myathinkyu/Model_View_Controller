<?php 
require_once  APPROOT . "/views/inc/header.php";
require_once  APPROOT . "/views/inc/nav.php";
?>
  
<div class="container-fluid">
    <div class="container my-5">
        <div class="col-md-8 offset-md-2">
            <div class="card bg-light p-5">
                <!-- register form start -->
                <h3 class="english text-info text-center mb-3 text-dark">Register To Post</h3>
                <form action="<?php echo URLROOT . 'user/register' ?>"  method="post" autocomplete="on">
                    <div class="form-group">
                        <label for="username" class="english">Username</label>
                        <input type="text" class="form-control english <?php echo !empty($data['name_err']) ? 'is-invalid' : '' ; ?>" id="username" name="name">
                        <span class="text-danger english"><?php echo !empty($data['name_err']) ? $data['name_err'] : '' ; ?></span>
                    </div>
                    <div class="form-group">
                        <label for="email" class="english">Email</label>
                        <input type="email" class="form-control english <?php echo !empty($data['email_err']) ? 'is-invalid' : '' ; ?>" id="email" name="email">
                        <span class="text-danger english"><?php echo !empty($data['email_err']) ? $data['email_err'] : '' ; ?></span>
                    </div>
                    <div class="form-group">
                        <label for="password" class="english">Password</label>
                        <input type="password" class="form-control english <?php echo !empty($data['password_err']) ? 'is-invalid' : '' ; ?>" id="password"  name="password">
                        <span class="text-danger english"><?php echo !empty($data['password_err']) ? $data['password_err'] : '' ; ?></span>
                    </div>
                    <div class="form-group">
                        <label for="confirm_password" class="english">Confirm Password</label>
                        <input type="password" class="form-control english <?php echo !empty($data['confirm_password_err']) ? 'is-invalid' : '' ; ?>" id="confirm_password" name="confirm_password">
                        <span class="text-danger english"><?php echo !empty($data['confirm_password_err']) ? $data['confirm_password_err'] : '' ; ?></span>
                    </div>
                    <div class="row justify-content-between no-gutters">
                        <a href="<?php echo URLROOT. 'user/login' ?>" class="english text-dark">Already Register, Please Login!</a>
                        <div>
                            <button class="btn btn-outline-secondary english">Cancle</button>
                            <button class="btn btn-primary english bg-dark text-white border-0">Register</button>
                        </div>
                    </div>
                </form>
                <!-- register form end -->
            </div>
        </div>
    </div>
</div>

<?php 
require_once  APPROOT . "/views/inc/footer.php";
?>