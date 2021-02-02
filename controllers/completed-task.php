<?php
use TaskManager\Request;
use TaskManager\DB;
use TaskManager\Task;

echo "Completed";

$connect = DB::connect();
$tasks = new Task($connect);
$id = intval(basename(Request::uri()));
$tasks->updateTask($id);
