<?php
$servername="localhost";
$username="root";
$password="root";
$dbname="world";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if(isset($_POST['Submit'])){
    $email=$_POST['EmailId'];
    $password=$_POST['password'];
    $stmt = $conn->prepare("INSERT INTO blood (email,password) VALUES (?,?)");
    $stmt->bind_param("ss", $email,$password);
    $stmt->execute();
    $stmt->close();
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blood Donation</title>
    <link rel="icon"
        href="data:image/png;base64,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">
    <style>
    </style>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
    </style>
</head>
<body>
        <div class="container">
            <form method="post">
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label " >Email address</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" name="EmailId" aria-describedby="emailHelp" required>   
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Password</label>
                  <input type="password" class="form-control" id="exampleInputPassword1" name="password" required>
                </div>
                <div class="mb-3 form-check">
                </div>
                <button type="submit" name="Submit" class="btn btn-primary">Submit</button>
              </form>
        </div>
</body>