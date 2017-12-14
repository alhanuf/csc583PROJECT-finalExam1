
<?php define('DB_HOST', 'localhost'); define('DB_NAME', 'toro'); define('DB_USER','root'); define('DB_PASSWORD',''); 
$con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error()); 
$db=mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error());?>

<?php
function NewUser() 
{ 
$name = $_POST['name'];
 $email = $_POST['email'];
 $Telephone = $_POST['Telephone'];
 $official = $_POST['official'];
 $company = $_POST['companyname'];
 $escort = $_POST['escorts'];
 $escortname = $_POST['escortsname'];
 
 
 $query = "INSERT INTO enquery (Name,email,Telephone,official,company,escort,escortname) VALUES ('$name','$email','$Telephone','$official','$company','$escort','$escortname')"; 
 $data = mysql_query ($query)or die(mysql_error()); if($data) { echo "YOUR REGISTRATION IS COMPLETED...";
header("Location: index.html"); } 
 }
 if(isset($_POST['submit'])) { newuser(); } ?>










