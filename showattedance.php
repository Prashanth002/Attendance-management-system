 <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "students";


$sub=$_POST["courselist"][0];
$sub=$sub.'attendance';
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT date,presentrollnos FROM $sub";
$result = $conn->query($sql);

$currRollno = 18;
$totalClasses;
$currRollNoPresent = 0;

if ($result->num_rows > 0) {
	$totalClasses = $result->num_rows;
    // output data of each row
    while($row = $result->fetch_assoc()) {
       // echo "id: " . $row["date"].  $row["presentrollnos"]. "<br>";
		$presentNos = explode(",",$row["presentrollnos"]);
		
		//print_r($presentNos);
		
		if(in_array($currRollno,$presentNos)){
			//echo "present<br>";
			$currRollNoPresent = $currRollNoPresent + 1;
		}
    }
	$percn = $currRollNoPresent*100/$totalClasses;
	echo $percn."%";
} else {
    echo "0 results";
}
$conn->close();
?> 