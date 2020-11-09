<?php  

	// var_dump($_POST);
	// var_dump($_FILES);

	$name=$_POST['name'];
	$email=$_POST['email'];
	$gender=$_POST['gender'];
	$address=$_POST['address'];
	$profile=$_FILES['profile'];

	// echo "$name and $email and $gender and $address <br>";
	// print_r($profile);

	$basepath="photo/";
	$fullpath=$basepath.$profile['name']; //photo/vote1.jpg
	move_uploaded_file($profile['tmp_name'], $fullpath);

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


	array_push($data_arr, $student);

	$jsonStr=json_encode($data_arr,JSON_PRETTY_PRINT);

	file_put_contents('student.json', $jsonStr);

	header("location:index.php");



?>