<?php
$router->define([
    'php_todo1' => 'controllers/home.php',
    'php_todo1/new-task' => 'controllers/new-task.php',
    'php_todo1/edit-task' => 'controllers/edit-task.php',
    'php_todo1/404' => 'controllers/404.php',
    'php_todo1/delete-task' => 'controllers/delete-task.php',
    'php_todo1/completed-task' => 'controllers/completed-task.php'
]);
