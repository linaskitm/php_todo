<?php
include 'view/_partials/head.php';

?>
<body>
<div class="container">

    <div class="row pt-3">
        <button class="btn btn-light p-2"><a class="nav-link text-muted"href="new-task">New Task</a></button>
    </div>
    <h1 class="text-center mx-auto p-4 text-capitalize text-muted">todo list</h1>



    <?php if(isset($_SESSION['new_task'])):?>
    <div class="alert alert-secondary" role="alert">
        Created new Todo - <?= $_SESSION['new_task'][0];?>
        <?php endif;?>
        <?php unset($_SESSION['new_task']);?>
    </div>


        <div class="row d-flex justify-content-center">
            <table class="table table-hover col-md-8 mb-5">
                <thead>
                <tr class="text-muted">
                    <th scope="col"><i class="far fa-eye"></i></th>
                    <th scope="col">Subject</th>
                    <th scope="col">Priority</th>
                    <th scope="col">Due date</th>
                    <th scope="col">Status</th>
                    <th scope="col">Modified</th>
                    <th scope="col">X</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($tasks->allTasks() as $task): ?>
                    <?php if($task['status'] == 0):?>
                    <?php $task['status'] = "Active" ;?>
                        <tr>
                            <td><a class="text-muted" href="completed-task/id/<?= $task['id'];?>"><i class="fas fa-plus-circle"></i></a></td>
                            <td><?= ucfirst($task['subject']);?></td>
<!--                            <td>--><?//= ucfirst($task['priority']);?><!--</td>-->
                            <?php
                            \TaskManager\DisplayPriority::displayPriority($task['priority']);
                            ?>
                            <td><?= $task['duedate'];?></td>
                            <td> <?= $task['status'];?></td>
                            <td><?=$task['modified'];?></td>
                            <td><a class="text-muted" href="delete-task/id/<?= $task['id'];?>"><i class="fas fa-trash"></i></a></td>
                        </tr>
                    <?php endif;?>
                    <?php if($task['status'] == 1):?>
                        <?php $task['status'] = "Done" ;?>
                        <tr class="text-muted alert alert-danger" style="text-decoration-line: line-through;">
                            <td><i class="fas fa-minus-circle"></i></td>
                            <td><?= ucfirst($task['subject']);?></td>
<!--                            <td>--><?//= ucfirst($task['priority']);?><!--</td>-->
                            <?php
                            \TaskManager\DisplayPriority::displayPriority($task['priority']);
                            ?>
                            <td><?= $task['duedate'];?></td>
                            <td><?= $task['status'];?></td>
                            <td><?=$task['modified'];?></td>
                            <td><a class="text-muted" href="delete-task/id/<?= $task['id'];?>"><i class="fas fa-trash"></i></a></td>
                        </tr>
                    <?php endif;?>
                <?php endforeach;?>
                </tbody>
            </table>
        </div>
</div>

<?php
include "view/_partials/footer.php";