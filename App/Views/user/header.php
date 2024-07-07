<?php
use MVC\Config\session;
session::Start();
?>

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" >

    <title>Login System</title>
</head>
<body>



<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="<?php echo"http://ruby.test/home/index"; ?>">Logo</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="<?php echo"http://ruby.test/home/index"; ?>">Home </span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo"http://ruby.test/home/show"; ?>">Show Data</a>
            </li>
            <li class="nav-item">
                <?php if(session::Get('user_name')==null): ?>
                <a class="nav-link" href="<?php echo"http://ruby.test/home/login"; ?>">Login</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo"http://ruby.test/home/register"; ?>">Register</a>
            </li>
            <?php else: ?>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo"http://ruby.test/home/changepassword"; ?>">Change password</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo"http://ruby.test/home/deleteaccount"; ?>">Delete account</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo"http://ruby.test/home/allusers"; ?>">All users</a>
                </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo"http://ruby.test/home/logout"; ?>">Logout</a>
            </li>
                <?php endif; ?>
        </ul>

    </div>
</nav>