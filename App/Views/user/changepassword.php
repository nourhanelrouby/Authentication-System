<?php require 'header.php'?>
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1 class="text-center display-4 border my-5 p-2">Change password</h1>
        </div>
        <div class="col-sm-6 mx-auto">
            <div class="border p-5 my-3">
                <?php if(MVC\Config\session::Get('error')!==null): ?>
                    <div class="alert alert-danger text-center"><?php echo MVC\Config\session::Get('error');  ?></div>
                    <?php MVC\Config\session::Stop(); ?>
                <?php endif; ?>
                <form method="post" action="<?php echo"http://ruby.test/home/changepassword"; ?>">
                    <div class="form-group">
                        <input type="password" class="form-control" name="oldpass" placeholder="Enter your old password">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" name="newpass" placeholder="Enter your new password">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" name="conpass" placeholder="Confirm your password">
                    </div>
                    <div class="form-group">
                        <input type="submit" name="sub" class="btn btn-block btn-primary" value="Save">
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>
<?php require 'footer.php'?>
