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


    <nav class=" navbar navbar-expand-sm bg-dark navbar-dark row text-center d-flex justify-content-center pt-5 mb-3">
        <ul class="navbar-nav">
            <li class="nav-item col-sm ">
                <a class="nav-link col" href="../index.php"><h1>Home</h1></a>
            </li>
            <li class="nav-item">
                <a class="nav-link col active" href="table.php"><h1>table</h1></a>
            </li>
            <li class="nav-item">
                <a class="nav-link col" href="University.php"><h1>add University</h1></a>
            </li>

            <li class="nav-item">
                <a class="nav-link col " href="About_us.php"><h1>About us</h1></a>
            </li>
        </ul>
    </nav>

    <?php
    require_once 'test.php';

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "University";

    try {
        $pdo = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

        $sql = 'SELECT name, description, txt, number, web
               FROM University
              ORDER BY name';

        $q = $pdo->query($sql);
        $q->setFetchMode(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        die("Could not connect to the database $dbname :" . $e->getMessage());
    }
    ?>

    <table class="table table-striped">
        <thead class="thead-dark">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Description</th>
            <th scope="col">Profile</th>
            <th scope="col">Number</th>
            <th scope="col">Web</th>
            <th scope="col">Generate Page</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <?php $number = 0;
            while ($r = $q->fetch()): ?>
        <tr>
            <td><?php echo $number; $number += 1; ?></td>
            <td><?php echo htmlspecialchars($r['name']) ?></td>
            <td><?php echo htmlspecialchars($r['description']); ?></td>
            <td><?php echo htmlspecialchars($r['txt']); ?></td>
            <td><?php echo htmlspecialchars($r['number']); ?></td>
            <td><?php echo htmlspecialchars($r['web']); ?></td>
            <td><?php
                $webname =preg_replace('/\s+/', '', $r['name']);
                genratePage($webname,$r['description'],$r['txt'],$r['number'],$r['web']);

                $nameofuniversity = $r['name'];
                echo  "<a class='nav-link col active' href='$webname.html'><h5>$nameofuniversity</h5></a>"?></td>
        </tr>
        <?php endwhile; ?>
        </tr>
        </tbody>
    </table>

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

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<!--<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>-->
<!--<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>-->
<!--<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>-->
</body>
</html>