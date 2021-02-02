<?php
session_start();
use TaskManager\DB;
use TaskManager\Task;
$connect = DB::connect();
$tasks = new Task($connect);

require 'view/pages/home.view.php';
