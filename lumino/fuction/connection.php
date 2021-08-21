<?php




define('HOSTNAME', 'localhost');
define('USERNAME', 'root');
define('PASSWORD', '');
define('DBNAME', 'ecommerce');



// oop connection
//$conn = new mysqli("localhost" ,"root" ,"" , "iti");
$conn = new mysqli(HOSTNAME,USERNAME,PASSWORD,DBNAME);

// check connection
// if($conn-> connect_error){
// 	 die("Connection Faild :" . $conn->connect_error);
// }
	
// echo "Connection successfully";

?>