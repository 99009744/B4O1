<?php

function getAllHorses() 
{
	$db = openDatabaseConnection();

	$sql = "SELECT * FROM horse";
	$query = $db->prepare($sql);
	$query->execute();

	$db = null;

	return $query->fetchAll();
}

function createhorse($soort, $info, $prijs, $afbeelding){
	$db = openDatabaseConnection();
	$sql = $db->prepare("INSERT INTO horse (`soort`, `info`,`prijs`,`afbeelding`) VALUES (:soort, :info, :prijs, :afbeelding)");
    $sql->bindParam(':soort', $soort);
	$sql->bindParam(':info', $info);
	$sql->bindParam(':prijs', $prijs);
	$sql->bindParam(':afbeelding', $afbeelding);
	$sql->execute();
    $conn = null;
}
function updatehorse($soort, $info, $prijs, $afbeelding, $oldId){
	$db = openDatabaseConnection();
	$sql = $db->prepare("UPDATE horse SET soort = :soort, info = :info, prijs = :prijs, afbeelding = :afbeelding WHERE id = :id");
    $sql->bindParam(':soort', $soort);
	$sql->bindParam(':info', $info);
	$sql->bindParam(':prijs', $prijs);
	$sql->bindParam(':afbeelding', $afbeelding);
	$sql->bindParam(':id', $oldId);
	$sql->execute();
    $conn = null;
}
function deletehorse($id){
	$db = openDatabaseConnection();
	$sql = $db->prepare("DELETE FROM horse WHERE id = :id");
	$sql->bindParam(':id', $id);
	$sql->execute();
    $conn = null;
}
function getInfoById($id){
	$db = openDatabaseConnection();
	$sql = $db->prepare("SELECT * FROM horse WHERE id = :id");
	$sql->bindParam(':id', $id);
	$sql->execute();
	$db = null;
	return $sql->fetchAll();
}