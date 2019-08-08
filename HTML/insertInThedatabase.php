<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "University";
$data = [
    'University' => "",
    'Description' => "",
    'Profile' => "",
    'Number' => 0,
    'Web' =>""
];

if(isset($_POST['University'])){
    $data['University']= $_POST['University'];
}
if(isset($_POST['Description'])){
    $data['Description']= $_POST['Description'];
}

if(isset($_POST['Profile'])){
    $data['Profile']= $_POST['Profile'];
}
if(isset($_POST['Number'])){
    $data['Number']= $_POST['Number'];
}
if(isset($_POST['Web'])){
    $data['Web']= $_POST['Web'];
}

if(isset($_POST['University'])){
    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "INSERT INTO University (name, description, txt, number, web)
            VALUES (?,?,?,?,?)";
        $stmt= $conn->prepare($sql);
        $stmt->execute([$data['University'], $data['Description'], $data['Profile'], $data['Number'], $data['Web']]);
        echo "<h2>submit successfully</h2>";
        // use exec() because no results are returne
    }
    catch(PDOException $e)
    {
        echo $sql . "<br>" . $e->getMessage();
    }

    $conn = null;

}
$_POST['University'] = "";



?>