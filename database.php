<?php

session_start();

$servername = "localhost";

$username = "root";

$password = "";

$dbname = "robotarm";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection

if ($conn->connect_error) {

die("Connection failed: " . $conn->connect_error);

}

if(isset($_POST["Run"])){

  header('Location: run.php');

}

if(isset($_POST["Save"])){

  $motor1 = $_POST["motor1"];

  $motor2 = $_POST["motor2"];

  $motor3 = $_POST["motor3"];

  $motor4 = $_POST["motor4"];

  $motor5 = $_POST["motor5"];

  $motor6 = $_POST["motor6"];  

    $sql = "INSERT INTO `motors`(`motor1`, `motor2`, `motor3`,`motor4`, `motor5`, `motor6`)

            VALUES ('{$motor1}','{$motor2}','{$motor3}','{$motor4}','{$motor5}','{$motor6}')";

    if ($conn->query($sql) === TRUE){

         $_SESSION["insert_msg"] = " Data Save Successful";

         header('Location: database.php');

          exit();

      }

    else {

        echo "Error: " . $sql . "<br>" . $conn->error;

      }

      $conn->close();

  }

?>