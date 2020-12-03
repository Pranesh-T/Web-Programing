<body>
<?php $x=$_POST['firstname'];
$y=$_POST['lastname']; $servername = "localhost";
$username = "root"; $password = "";
$dbname = "db1";
$conn = new mysqli($servername, $username, $password, $dbname);
if($conn->connect_error){ die("Connection failed: " . $conn->connect_error);
}
echo "Connected Successfully";
$sql = "INSERT INTO `iuser` ( `fname`, `lname`) VALUES ('$x', '$y')";
if ($conn-
>query($sql) === TRUE) {
echo "<br>New record created successfully"; } else { echo "Error: " . $sql . "<br>" . $conn->error;
}
$sql = "SELECT id,fname,lname FROM iuser"; $result =
$conn->query($sql);

if ($result->num_rows > 0){ echo "<table>"; while($row = $result->fetch_assoc()){
echo "<tr><td> id: " . $row["id"]. "</td><td> Name: " .
$row["fname"] .
" " . $row["lname"]. "</td></tr>"; }
echo "</table>"; }
else {
echo "0 results";
}
$conn->close();
?> </body>