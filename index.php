 <?php
header('Content-type: application/json');
$servername = "localhost:3306";
$username = "bolo7_tag_user";
$password = "infiniti";
$sSql = "select * from raw_data;";

// Create connection
$conn = mysqli_connect($servername, $username, $password,"bolo773_ttcore");

// Check connection
//if (!$conn) {
 //   die("Connection failed: " . mysqli_connect_error());
//	echo "connection failed";
//}

$result = $conn->query($sSql);


//$result = mysqli_query($conn, $sSql);
echo json_encode($res=mysqli_fetch_all($result,MYSQLI_ASSOC));

?> 