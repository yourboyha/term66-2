<?php
    $email = $_POST['email'];
    $password = $_POST['password'];
    $city = $_POST['city'];
    $web = $_POST['web'];
    $role = $_POST['role'];


    $servername = 'localhost:8080';
    $username = 'root';
    $password = "";
    $dbname = "db_employee";

    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("". $conn->connect_error);
    }

    $sql = "INSERT INTO employee (username, password, city, webserver, role) 
            VALUES ($email,$password,$city,$web,$role)";

    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();

    }  else{
        echo"error".$sql."<br>".$conn->error;
    }
    $conn->close();
    ?>

























    // echo 'email: '.$email.'<br>';
    // echo 'password: '.$password.'<br>';
    // echo 'city: '.$city.'<br>';
    // echo 'web: '.$web.'<br>';
    // echo 'role: '.$role.'<br>';
    // echo 'sign1: '.$sign1.'<br>';
    // echo 'sign2: '.$sign2.'<br>';
    // echo 'sign3: '.$sign3.'<br>';






?>