<?php

function getPlanning(){
	$db = openDatabaseConnection();
	$query = $db->prepare("SELECT * FROM planning");
	$query->execute();

	$db = null;

	return $query->fetchAll();
}

function newUser($voornaam,$achternaam,$postcode,$mail,$telnummer){
	$db = openDatabaseConnection();
	$sql = $db->prepare("INSERT INTO registreren (`voornaam`,`achternaam`,`postcode`,`email`,`telnummer`) VALUES (:voornaam, :achternaam, :postcode, :mail, :telnummer)");
    $sql->bindParam(':voornaam', $voornaam);
	$sql->bindParam(':achternaam', $achternaam);
	$sql->bindParam(':postcode', $postcode);
	$sql->bindParam(':mail', $mail);
	$sql->bindParam(':telnummer', $telnummer);
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
function planUser($begintijd,$duur,$datum,$voornaam,$achternaam){
	$db = openDatabaseConnection();
	$sql = $db->prepare("INSERT INTO planning (`begintijd`,`duur`,`datum`,`voornaam`,`achternaam`) VALUES (:begintijd, :duur, :datum, :voornaam,:achternaam)");
    $sql->bindParam(':begintijd', $begintijd);
	$sql->bindParam(':duur', $duur);
	$sql->bindParam(':datum', $datum);
	$sql->bindParam(':voornaam', $voornaam);
	$sql->bindParam(':achternaam', $achternaam);
	$sql->execute();
    $conn = null;
}
function checkUser($voornaam, $achternaam){
	$db = openDatabaseConnection();
	$sql = $db->prepare("SELECT id FROM registreren WHERE voornaam = :voornaam AND achternaam = :achternaam");
	$sql->bindParam(':voornaam', $voornaam);
	$sql->bindParam(':achternaam', $achternaam);
	$sql->execute();
	$db = null;
	return $sql->fetchAll();
}