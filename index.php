<?php
require 'vendor/autoload.php';
require 'inc/data.php';
use TaskManager\Request;
use TaskManager\Router;
require Router::load('routes.php')->direct(Request::uri());




