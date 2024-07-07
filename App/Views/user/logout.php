<?php

use MVC\Config\session;
session::Start();
session::Stop();

header("LOCATION:http://ruby.test/home/login");