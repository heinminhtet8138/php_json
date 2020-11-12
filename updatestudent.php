<?php 
	
	$id=$_POST['id'];

	$name=$_POST['name'];
	$email=$_POST['email'];
	$gender=$_POST['gender'];
	$address=$_POST['address'];

	$newprofile=$_FILES['newprofile'];

	$oldprofile = $_POST['oldprofile'];

	if ($newprofile['size'] > 0) {
		$basepath="photo/";
		$fullpath=$basepath.$newprofile['name']; //photo/vote1.jpg
		move_uploaded_file($newprofile['tmp_name'], $fullpath);
	}
	else{
		$fullpath = $oldprofile;
	}

	$student=[
		"name"=>$name,
		"email"=>$email,
		"gender"=>$gender,
		"address"=>$address,
		"profile"=>$fullpath
	];

	$strJson=file_get_contents('student.json');
	if (!$strJson) {
		$strJson="[]";
	}

	$data_arr=json_decode($strJson,true);


	$data_arr[$id] = $student;

	$jsonStr=json_encode($data_arr,JSON_PRETTY_PRINT);

	file_put_contents('student.json', $jsonStr);

	// header("location:index.php");



?>