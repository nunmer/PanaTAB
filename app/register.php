<?php
session_start();
require '../constants/config.php';
require '../constants/uniques.php';



$myusername = $_POST['user_name'];
$myemail = $_POST['user_email'];

$mypass = password_hash($_POST['password'], PASSWORD_DEFAULT);
$myid = 'M'.get_rand_numbers(6).'';
$reg_date = date('d/m/Y - h:i:s');

	try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	
	$stmt = $conn->prepare("SELECT username,email FROM tbl_users WHERE username = :username OR email = :email UNION SELECT username,email FROM tbl_admin WHERE username = :username OR email = :email");
	$stmt->bindParam(':username', $myusername);
	$stmt->bindParam(':email', $myemail);
	$stmt->execute();
	$result = $stmt->fetchAll();
	$rec = count($result);

	if ($rec > 0) {
	$_SESSION['reply'] = "019";
	$_SESSION['myusername'] = $myusername;
	header("location:../login.php");

	}else{

			try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	
    $stmt = $conn->prepare("INSERT INTO tbl_users (user_id, username, email, login, reg_date) VALUES (:userid, :username, :email, :login, :regdate)");
	$stmt->bindParam(':userid', $myid);
	$stmt->bindParam(':username', $myusername);
	$stmt->bindParam(':email', $myemail);
	$stmt->bindParam(':login', $mypass);
	$stmt->bindParam(':regdate', $reg_date);
	$stmt->execute();
	$_SESSION['reply'] = "001";
	header("location:../login.php");
					  
	}catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }


	}

    foreach($result as $row)
    {
		
	}
					  
	}catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }





?>