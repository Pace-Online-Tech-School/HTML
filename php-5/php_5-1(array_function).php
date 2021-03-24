<?php
	
	$student_list=array('Sara','Bella');
	echo is_array($student_list);

	echo "<br>";

	$add_student=array('Sara','Bella');	
	array_push($add_student, 'John');
	var_dump($add_student);

	echo "<br>";

	$delete_student=array('Sara','Bella','John','Micky','Mike');
	array_pop($delete_student);
	var_dump($delete_student);

	echo "<br>";

	$student_detail=array('name'=>'Sara','phone'=>'0912345','email'=>'sara@gmail.com');
	echo array_search('0912345',$student_detail);
	
	echo "<br>";

	$count_student=array('Sara','Bella','John','Micky','Mike');
	echo count($count_student);
?>