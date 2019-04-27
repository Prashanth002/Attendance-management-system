 <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "students";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT rollno, name, email FROM 2015batch";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo " rollno: " . $row["rollno"].  " Name: " . $row["name"].  "Email: " . $row["email"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?> 