<?php

function getAllStudents() 
{
	$db = openDatabaseConnection();

	$sql = "SELECT * FROM student";
	$query = $db->prepare($sql);
	$query->execute();

	$db = null;

	return $query->fetchAll();
}

function createStudent($name, $id){
	$db = openDatabaseConnection();
	$sql = $db->prepare("INSERT INTO student (`student_name`, `student_id`) VALUES (:name, :id)");
    $sql->bindParam(':name', $name);
	$sql->bindParam(':id', $id);
	$sql->execute();
    $conn = null;
}
function updateStudent($name, $id, $oldId){
	$db = openDatabaseConnection();
	$sql = $db->prepare("UPDATE student SET student_name = :name, student_id = :id WHERE student_id = :oldId");
    $sql->bindParam(':name', $name);
	$sql->bindParam(':id', $id);
	$sql->bindParam(':oldId', $oldId);
	$sql->execute();
    $conn = null;
}
function deleteStudent($id){
	$db = openDatabaseConnection();
	$sql = $db->prepare("DELETE FROM student WHERE student_id = :id");
	$sql->bindParam(':id', $id);
	$sql->execute();
    $conn = null;
}
function getAllStudentsWithId($id){
	$db = openDatabaseConnection();
	$sql = $db->prepare("SELECT * FROM student WHERE student_id = :id");
	$sql->bindParam(':id', $id);
	$sql->execute();
	$db = null;
	return $sql->fetchAll();
}