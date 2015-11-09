<?php
$servername = "localhost:8889";
$username = "root";
$password = "root";
$dbname = "college";



$conn = new mysqli($servername, $username, $password,$dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$sql = 'SELECT * from college_degree_cost 
WHERE college_id in (select id from college where name = ' . $_GET["college"] . ' ) 
AND degree_id in (select id from degree where type = ' . $_GET["degree"];

$result = mysqli_query($conn, $sql);
if (!$result) {
    die(mysqli_error($result));
}

if (mysqli_num_rows($result) > 0) {
    $results = 0;
    while($row = mysqli_fetch_assoc($result)) {
    	$row["cost"];
    }
} else {
    echo "0 results";
}
?>
