<!DOCTYPE html>
<html>
<head>
<style>
table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
}
</style>
</head>

    <body>
	<link rel="stylesheet" type="text/css" href="style.css">
  <div class="container">
	<table style="width:100%">
  <tr>
    <th>Name</th>
	
    <th>Email</th> 
    <th>Telephone</th>
    <th>companyname</th> 
    <th>Official visit</th>
     <th>Escort</th>
 <th>Escort Name</th>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "toro";


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM enquery";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    
    while($row = $result->fetch_assoc()) {
echo '<tr><td>'.$row['Name'].'</td><td>'.$row['email'].'</td><td>'.$row['Telephone'].'</td><td>'.$row['company'].'</td><td>'.$row['official'].'</td><td>'.$row['escort'].'</td><td>'.$row['escortname'].'</td></tr>';
			    }
} else {
    echo "0 results";
}

$conn->close();
?>
	
  </tr>
  </div>


