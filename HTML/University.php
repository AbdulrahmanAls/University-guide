<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap-grid.min.css" type="text/css">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap-reboot.min.css" type="text/css">
    <link rel="stylesheet" href="../bootstrap/css/custom.css" type="text/css">



    <title>University Guide</title>
</head>
<body>
<div class="container">


    <nav class=" navbar navbar-expand-sm bg-dark navbar-dark row d-flex justify-content-around pt-5 mb-3">
        <ul class="navbar-nav">
            <li class="nav-item col-sm ">
                <a class="nav-link col" href="../index.php"><h1>Home</h1></a>
            </li>
            <li class="nav-item">
                <a class="nav-link col" href="table.php"><h1>table</h1></a>
            </li>
            <li class="nav-item">
                <a class="nav-link col active" href="University.php"><h1>add University</h1></a>
            </li>

            <li class="nav-item">
                <a class="nav-link col " href="About_us.php"><h1>About us</h1></a>
            </li>
        </ul>
    </nav>
    <h2>Here are the list of University:</h2>
<!-- 
    <ul class="list-group">
        <li class="list-group-item">Qassim University</li>
        <li class="list-group-item">King Saud University</li>
        <li class="list-group-item">King Fahd University of Petroleum & Minerals</li>
        <li class="list-group-item">Imam Abdulrahman Bin Faisal University</li>
        <li class="list-group-item">King abdulaziz university</li>
        <li class="list-group-item">Majmaah University</li>
        <li class="list-group-item">Prince Sattam Bin Abdulaziz University</li>
        <li class="list-group-item">King Abdullah University of Science and Technology</li>

    </ul> -->



    <div class="card text-center">
    <div class="card-header">
        <h2  class="card-title">Add University</h2>
    </div>
    <div class="card-body">
    <form action="University.php" method="post">
        <div class="form-group">
            <label >University Name</label>
            <input class="form-control form-control-lg" type="text" placeholder="University" name="University">
        </div>
    <div class="form-group">
        <label> Description</label>
        <input class="form-control form-control-lg" type="text" name="Description">
    </div>
        <div class="form-group">
            <label> Profile of University</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="Profile"></textarea>
        </div>
    <div class="form-group">
        <label> Number of Student</label>
        <input class="form-control form-control-lg" type="number" name="Number">
    </div>
    <div class="form-group">
        <label>Web</label>
        <input class="form-control form-control-lg" type="text" name="Web">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    </form>

    <?php require_once "insertInThedatabase.php" ?>

    </div>
    <div class="card-footer text-muted">
    </div>
    </div>

    <br>
    <br>
    <br>
    <br>
    <hr class="rgba-white-light" style="margin: 0 15%;">
    <footer class="page-footer font-small indigo">



        <div class="row text-center d-flex justify-content-center pt-5 mb-3">

            <div class="col">
                <h6 class="text-uppercase font-weight-bold">
                    <a href="../index.php">Home</a>
                </h6>
            </div>
            <div class="col">
                <h6 class="text-uppercase font-weight-bold">
                    <a href="table.php">table</a>
                </h6>
            </div>

            <div class="col">
                <h6 class="text-uppercase font-weight-bold">
                    <a href="University.php">add University</a>
                </h6>
            </div>

            <div class="col">
                <h6 class="text-uppercase font-weight-bold">
                    <a href="About_us.php">About us</a>
                </h6>
            </div>


        </div>
        <hr class="rgba-white-light" style="margin: 0 15%;">



    </footer>
</div>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html> 