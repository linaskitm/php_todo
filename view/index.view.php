<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Todo</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/8305e96607.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="view/css/bootstrap.min.css">


</head>

<body>
    <div class="container">
        <h1 class="text-center mx-auto p-4 text-capitalize">To do list</h1>

        <div class="row">
        <form class="col-12 col-lg-8 mx-auto" id="reset" method="post">
            <div class="form-group row">

                <div class="col-sm-12">
                    <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject">
                </div>
            </div>
            <div class="form-group row">

                <div class="col-sm-12">
                    <select class="form-control" id="priority" name="priority">
                        <option value="" disabled selected>Priority</option>
                        <?php foreach ($priority as $value): ?>
                            <option value="<?=$value; ?>"><?= ucfirst($value); ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
            </div>
            <div class="form-group row">

                <div class="col-sm-12">
                    <select class="form-control" id="status" name="status">
                        <option value="" disabled selected>Status</option>
                        <?php foreach ($status as $value): ?>
                            <option value="<?=$value; ?>"><?= ucfirst($value); ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
            </div>
            <div class="form-group row">

                <div class="col-sm-12">
                    <input type="date" class="form-control" id="date">
                </div>
            </div>
            <div class="form-group row">

                <div class="col-sm-12">
                    <select class="form-control" id="percentage" name="percentage">
                        <option value="" disabled selected>Completed percentage</option>
                        <?php foreach ($percentage as $value): ?>
                            <option value="<?= $value; ?>"><?= $value; ?> %</option>
                        <?php endforeach; ?>
                    </select>
                </div>
            </div>
            <div class="form-group  d-flex justify-content-center">
                <input id="submit" type="button" value="Add" class="btn btn-light">
            </div>
        </form>
        </div>


        <!--Table -->
        <div class="row d-flex justify-content-center">
            <table class="table table-striped col-md-10 mb-5">
                <thead>
                <tr class="thead-light">
                    <th scope="col">#</th>
                    <th scope="col">Subject</th>
                    <th scope="col">Priority</th>
                    <th scope="col">Due date</th>
                    <th scope="col">Status</th>
                    <th scope="col">Percent completed</th>
                    <th scope="col">#</th>
                </tr>
                </thead>
                <tbody id="list">
                </tbody>
            </table>
        </div>


    </div>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</body>
</html>