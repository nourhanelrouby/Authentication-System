<?php  require 'header.php' ?>


<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <h1 class="text-center display-4 border p-3 my-5 "> Login System </h1>
                <?php
                use MVC\Config\session;
                if(session::Get('user_name')!=null): ?>
                <h2>You are logged in</h2>
                <?php endif; ?>
        </div>
    </div>
</div>

<?php  require 'footer.php' ?>