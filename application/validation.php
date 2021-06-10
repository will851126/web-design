<?php
session_start();
require_once('config.php');

$student_name=$_POST['student_name'];
$student_number=$_POST['student_number'];
$phone=$_POST['phone'];

$sql="SELECT * FROM student WHERE student_name = ? AND  student_number = ?AND phone=? LIMIT 1 ";
$stmtselect= $db->prepare($sql);
$result=$stmtselect->execute([$student_name,$student_number,$phone]);


if ($result) {
    # code...
    $user = $stmtselect->fetch(PDO::FETCH_ASSOC);
    if($stmtselect->rowCount() > 0){
		$_SESSION['userlogin'] = $student_name;
		echo 'Login successful';
	}else{
		echo 'User is not be find , please try again';		
	}
}
else {
    # code...
    echo 'error to connect db';
}


?>