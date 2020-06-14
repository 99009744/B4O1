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
function deletePlanning($id){
	$db = openDatabaseConnection();
	$sql = $db->prepare("DELETE FROM planning WHERE id = :id");
	$sql->bindParam(':id', $id);
	$sql->execute();
    $conn = null;
}

function planUser($begintijd,$duur,$datum,$voornaam,$achternaam,$paard){
	$db = openDatabaseConnection();
	$sql = $db->prepare("INSERT INTO planning (`begintijd`,`duur`,`datum`,`voornaam`,`achternaam`,`paard`) VALUES (:begintijd, :duur, :datum, :voornaam,:achternaam,:paard)");
    $sql->bindParam(':begintijd', $begintijd);
	$sql->bindParam(':duur', $duur);
	$sql->bindParam(':datum', $datum);
	$sql->bindParam(':voornaam', $voornaam);
	$sql->bindParam(':achternaam', $achternaam);
	$sql->bindParam(':paard', $paard);
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
function getInfoById($id){
	$db = openDatabaseConnection();
	$sql = $db->prepare("SELECT * FROM registreren WHERE id = :id");
	$sql->bindParam(':id', $id);
	$sql->execute();
	$db = null;
	return $sql->fetchAll();
}
function getPlanningByID($id){
	$db = openDatabaseConnection();
	$sql = $db->prepare("SELECT * FROM planning WHERE id = :id");
	$sql->bindParam(":id", $id);
	$sql->execute();
	$db = null;
	return $sql->fetchAll();
}
function updatePlanning($begintijd,$duur,$datum,$voornaam,$achternaam,$paard,$id){
	$db = openDatabaseConnection();
	$sql = $db->prepare("UPDATE planning SET begintijd = :begintijd, duur = :duur, datum = :datum, voornaam = :voornaam, achternaam = :achternaam, paard = :paard WHERE id = :id");
    $sql->bindParam(':begintijd', $begintijd);
	$sql->bindParam(':duur', $duur);
	$sql->bindParam(':datum', $datum);
	$sql->bindParam(':voornaam', $voornaam);
	$sql->bindParam(':achternaam', $achternaam);
	$sql->bindParam(':duur', $duur);
	$sql->bindParam(':paard', $paard);
	$sql->bindParam(':id', $id);
	$sql->execute();
	$conn = null;
}
function getPlanningByName($voornaam, $achternaam){
	$db = openDatabaseConnection();
	$sql = $db->prepare("SELECT * FROM planning WHERE voornaam = :voornaam AND achternaam = :achternaam");
	$sql->bindParam(":voornaam", $voornaam);
	$sql->bindParam(":achternaam", $achternaam);
	$sql->execute();
	$db = null;
	return $sql->fetchAll();
}

function getHorses(){
	$db = openDatabaseConnection();
	$sql = $db->prepare("SELECT * FROM horse");
	$sql->execute();
	return $sql->fetchAll();
}