<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/d7e7917cb2.js" crossorigin="anonymous"></script>
    <title>Document</title>
</head>

<body>

    <section>
        <div class="container">
            <div class="row justify-content-center align-items-center h-100">
                <div class="col-12 col-sm-10 col-md-8 col-lg-6 col-xl-5">
                    <form action="/task/delete/<?= $task['id']?>" method="post">
                        <div class="card text-bg-dark mb-3 text-center" style="border-radius: 2rem;">
                            <div class="card-header fw-bold mt-5 text-uppercase fs-2">Delete task?</div>
                            <div class="card-body">
                                <div class="mb-5 mt-4">
                                    <div class="">
                                        <input type="text" class="form-control form-control-lg" name="task" id="task" value="<?= $task['task'] ?>">
                                        <label for="Task" class="form-label">Task</label>
                                    </div>
                                    <p class="small mb-5 pb-lg-2"><a class="text-white-50" href="#!">Back to tasks</a></p>
                                    <button type="submit "class="btn btn-outline-light btn-lg px-5" name="yes">Yes</button>
                                    <a href="<?= site_url('/') ?>"><button type="submit" class="btn btn-outline-light btn-lg px-5" name="no">No</button></a>

                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</body>

</html>