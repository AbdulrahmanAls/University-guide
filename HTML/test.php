<?php

function genratePage($university,$des,$profile,$number,$web){
    $myFile = "$university.html"; // or .php
    $fh = fopen($myFile, 'w'); // or die("error");
    $stringData = "
<!doctype html>
<html lang='en'>
<head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>

    <link rel='stylesheet' href='../bootstrap/css/bootstrap.min.css' type='text/css'>
    <link rel='stylesheet' href='../bootstrap/css/bootstrap-grid.min.css' type='text/css'>
    <link rel='stylesheet' href='../bootstrap/css/bootstrap-reboot.min.css' type='text/css'>
    <link rel='stylesheet' href='../bootstrap/css/custom.css' type='text/css'>



    <title>University Guide</title>
</head>
<body>
<div class='container'>


    <nav class=' navbar navbar-expand-sm bg-dark navbar-dark row text-center d-flex justify-content-center pt-5 mb-3'>
        <ul class='navbar-nav'>
            <li class='nav-item col-sm '>
                <a class='nav-link col' href='../index.php'><h1>Home</h1></a>
            </li>
            <li class='nav-item'>
                <a class='nav-link col' href='table.php'><h1>table</h1></a>
            </li>
            <li class='nav-item'>
                <a class='nav-link col' href='University.php'><h1>add University</h1></a>
            </li>

            <li class='nav-item'>
                <a class='nav-link col' href='About_us.php'><h1>About us</h1></a>
            </li>
        </ul>
    </nav>

    <h2>Welcome to $university</h2>
    <br>
    <h3>$des</h3>
    <br>
    <h3>Profile</h3>
    <p>$profile</p>
    <br>
    <h3>Number of Student is $number</h3>
    <br>
    <a class='nav-link col' href='table.php'><h3>Universities table</h3></a>

    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>

    <br>
    <hr class='rgba-white-light' style='margin: 0 15%;'>
    <footer class='page-footer font-small indigo'>



        <div class='row text-center d-flex justify-content-center pt-5 mb-3'>

            <div class='col'>
                <h6 class='text-uppercase font-weight-bold'>
                    <a href='../index.php'>Home</a>
                </h6>
            </div>
            <div class='col'>
                <h6 class='text-uppercase font-weight-bold'>
                    <a href='table.php'>table</a>
                </h6>
            </div>

            <div class='col'>
                <h6 class='text-uppercase font-weight-bold'>
                    <a href='add University.php'>add University</a>
                </h6>
            </div>

            <div class='col'>
                <h6 class='text-uppercase font-weight-bold'>
                    <a href='About_us.php'>About us</a>
                </h6>
            </div>


        </div>
        <hr class='rgba-white-light' style='margin: 0 15%;'>



    </footer>
</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<!--<script src='https://code.jquery.com/jquery-3.3.1.slim.min.js' integrity='sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo' crossorigin='anonymous'></script>-->
<!--<script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js' integrity='sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1' crossorigin='anonymous'></script>-->
<!--<script src='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js' integrity='sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM' crossorigin='anonymous'></script>-->
</body>
</html>";
    fwrite($fh, $stringData);
    fclose($fh);

}

?>

