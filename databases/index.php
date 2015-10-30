<!DOCTYPE html>
	<head>
		<title>Test</title>
	</head>
	<body>
<?php
$servername = "localhost:8889";
$username = "root";
$password = "root";
$dbname = "last_name";

// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";
//$sql = "CREATE DATABASE myDB";
//if (mysqli_query($conn, $sql)) {
//    echo "Database created successfully";
//} else {
//    echo "Error creating database: " . mysqli_error($conn);
//}

// sql to create table
//$sql = "CREATE TABLE MyGuests (
//id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
//frstname VARCHAR(30) NOT NULL,
//lastname VARCHAR(30) NOT NULL,
//email VARCHAR(50),
//reg_date TIMESTAMP
//)";

//if (mysqli_query($conn, $sql)) {
//    echo "Table MyGuests created successfully";
//} else {
//    echo "Error creating table: " . mysqli_error($conn);
//}
//$sql = "INSERT INTO MyGuests (firstname, lastname, email)
//VALUES ('Tanner', 'McKamey', 'Eeriecrate@gmail.com')";

//if (mysqli_query($conn, $sql)) {
//    echo "New record created successfully";
//} else {
//    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
//}

//$sql = "INSERT INTO MyGuests (firstname, lastname, email)
//VALUES ('John', 'Doe', 'john@example.com')";

//if ($conn->query($sql) === TRUE) {
//    $last_id = $conn->insert_id;
//    echo "New record created successfully. Last inserted ID is: " . $last_id;
//} else {
//    echo "Error: " . $sql . "<br>" . $conn->error;
//}
$sql = "SELECT * FROM MyGuests";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
	if($row["firstname"] == "Ryan"){
        echo ("Hello " . $row["firstname"] . " " . $row["lastname"] . "s");
	}
    }
} else {
    echo "0 results";
}
?>
</body>
</html>