<?php
require '../../constants/config.php';
require '../../constants/check-login.php';
require '../../constants/uniques.php';

$profile_id = 'PR'.get_rand_numbers(8).'';

$age = ucwords($_POST['age']);
$gender = $_POST['gender'];
$instagram = $_POST['instagram'];
$telegram = $_POST['telegram'];
$budget = $_POST['budget'];
$city = $_POST['city'];
$condition = $_POST['condition'];
$short_desc = ucfirst($_POST['shortdesc']);
$datepost = date('M d, Y');


if (isset($_POST['instagram'])) {
$instagram = ucwords($_POST['instagram']);
}else{
$instagram = "No account";	
}

if (isset($_POST['telegram'])) {
$telegram = ucwords($_POST['telegram']);
}else{
$telegram = "No account";	
}

    try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	
    $stmt = $conn->prepare("INSERT INTO tbl_profiles (profile_id, author, age, gender, instagram, telegram, budget, city, conditions, short_desc, date) 
		VALUES ('$profile_id', '$myid', '$age', '$gender','$instagram', '$telegram', '$budget', '$city', '$condition', '$short_desc', '$datepost')");
    	
	$stmt->execute();
	
    header("location:../../profiles.php");

    
					  
	}catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }