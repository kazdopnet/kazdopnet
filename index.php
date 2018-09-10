<?php

require "application/lib/Dev.php";
require "application/core/Router.php";

session_start();

$router = new Router;
$router->run();

