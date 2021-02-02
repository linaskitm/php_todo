<?php
include 'view/_partials/head.php';

?>



<body>
<div class="container bg-gradient">
    <h1 class="text-center mx-auto pt-5 text-capitalize text-muted">add new todo</h1>

    <div class="row">
        <button class="btn btn-light p-2"><a class="nav-link text-muted"href="/php_todo1">Back</a></button>
    </div>

        <form class="col-12 col-lg-8 mx-auto bg-light p-5"  method="post">
            <div class="form-group row ">
                <div class="col-sm-12">
<!--                    --><?php
//                    use TaskManager\Validate;
//                    $errors = new Validate($_POST);
//                    if(isset($_POST['send'])){
//                        TaskManager\DisplayError::getError($errors->validateForm());
//                    }
//                    ?>
                    <?php
                        if(!empty($errors))
                        TaskManager\DisplayError::getError($errors);
                    ?>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-12">
                    <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject"  >
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-12">
                    <select class="form-control" id="priority" name="priority" >
                        <option value="" disabled selected>Priority</option>
                        <?php foreach ($priority as $value): ?>
                            <option value="<?=$value; ?>"><?= ucfirst($value); ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-12">
                    <input type="date" class="form-control" id="duedate" name="duedate" >
                </div>
            </div>
            <div class="form-group  d-flex justify-content-center">
                <button  type="submit"  class="btn btn-light btn-lg text-muted" name="send">Add</button>
            </div>
        </form>


<?php
include "view/_partials/footer.php";
