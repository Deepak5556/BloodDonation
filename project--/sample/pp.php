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
$sql="select Name from country ";
$result=mysqli_query($conn,$sql);
$i=0;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=td, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="3" >
        <tr>
            <td> name </td>
        </tr>
        <?php
        if($result->num_rows>0)
        {
            while($row=mysqli_fetch_assoc($result)){
                echo "<tr>";
                echo "<td>".$row["Name"] ."</td>";
                 echo "</tr>";
                ${"name$i"}=$row["Name"];
                $i++;
            }
        }
        ?>
    </table>
</body>
</html>