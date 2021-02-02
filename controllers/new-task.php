<?php
session_start();
use TaskManager\DB;
use TaskManager\Task;
//use TaskManager\Validate;
use TaskManager\ValidationStatic;


if(isset($_POST['send'])){

    $connection = DB::connect();
    $task = new Task($connection);

    $errors = ValidationStatic::validate();
   // var_dump($errors);

//    $validate = new Validate($_POST);
//    $errors = $validate->validateForm();

    if(empty($errors)){
        $task->createTask($_POST);
    } else {
        require 'view/pages/new-task.view.php';
    }


} else{
    require 'view/pages/new-task.view.php';
}

