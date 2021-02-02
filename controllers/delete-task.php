<?php
use TaskManager\Request;
use TaskManager\DB;
use TaskManager\Task;


$connect = DB::connect();
$tasks = new Task($connect);
$id = intval(basename(Request::uri()));
$tasks->deleteTask($id);


