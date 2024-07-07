<?php  require 'header.php' ?>

<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <h1 class="text-center display-4 border my-5 ">User Data</h1>
            <div>
                <?php
                use MVC\Config\session;
                if(session::Get('user_name')!=null): ?>
                <h2> Name : <?php echo session::Get('user_name'); ?></h2>
                <h2> E-mail : <?php echo session::Get('user_email'); ?></h2>
                <h2> Mobile : <?php echo session::Get('user_mobile'); ?></h2>
                    <h2> Password : <?php echo session::Get('user_pass'); ?></h2>
                <?php else: ?>
                <div class="alert alert-danger text-center">Data Not Found</div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>

<?php  require 'footer.php' ?>