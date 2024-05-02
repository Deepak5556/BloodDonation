<?php
$servername="localhost";
$username="root";
$password="root";
$dbname="world";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

echo "hi";
$sql="select * from blood";
$result=mysqli_query($conn,$sql);

if($result->num_rows>0)
{
    while($row=mysqli_fetch_assoc($result)){
        echo $row["name"];
    }
}

?>