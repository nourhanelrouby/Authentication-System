<?php  require 'header.php' ?>
<?php

use MVC\Config\session;
if(session::Get('user_name')==null) {
    header("LOCATION:http://ruby.test/home/index");
}
?>

<div class="container">
    <div class="row">
        <div class="col-12 ">
            <h1 class="text-center display-4 border my-5 p-2"> Delete account</h1>
        </div>
        <div class="col-sm-6 mx-auto">
            <div class="border p-5 my-3">
                <form method="post" action="<?php echo"http://ruby.test/home/deleteaccount"; ?>">
                    <div class="form-group">
                        <input type="text" class="form-control" name="email" placeholder="Enter your E-mail">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" name="pass" placeholder="Enter your Password">
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-block btn-primary" name="sub"  value="Delete">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php  require 'footer.php' ?>

