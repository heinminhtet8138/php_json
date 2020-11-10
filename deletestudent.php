<?php  

	$id=$_POST['stu_id'];
	// echo $id;

	$stuJson=file_get_contents('student.json');
	if ($stuJson) {
		
		$stuArr=json_decode($stuJson,true);

		unset($stuArr[$id]);

		$jsonStu=json_encode($stuArr,JSON_PRETTY_PRINT);

		file_put_contents('student.json', $jsonStu);

	}


?>
