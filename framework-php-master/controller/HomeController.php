<?php
require(ROOT . "model/HomeModel.php");
function index()
{
	render("home/index", ['user' => $user]);	
}
function planning(){
	$getplanning = getPlanning();
	render("home/search", ['getplanning' => $getplanning]);
}
function findPlanning(){
	$voornaam = $_POST['voornaam'];
	$achternaam = $_POST['achternaam'];
	$getplanning = getPlanningByName($voornaam, $achternaam);
	render("home/planning", ['getplanning' => $getplanning]);
}
function plan(){
	$horses = getHorses();
	render('home/plan',['horses' => $horses]);
}
function createplanning(){
	$begintjd = $_POST['begintijd'];
	$duur = $_POST['duur'];
	$datum = $_POST['datum'];
	$voornaam = $_POST['voornaam'];
	$achternaam = $_POST['achternaam'];
	$paard = $_POST['paard'];
	$check = checkUser($voornaam, $achternaam);
	if($check[0]['id'] != NULL){
		planUser($begintjd,$duur,$datum,$voornaam,$achternaam,$paard);
		header("location:" . URL . "home/index");
		}
	else{
		render('home/plan', ['NULL' => $check]);
	}
}
function registreer(){
	render('home/registreer');
}
function createUser(){
	$voornaam = $_POST['voornaam'];
	$achternaam = $_POST['achternaam'];
	$postcode = $_POST['postcode'];
	$mail = $_POST['mail'];
	$telnummer = $_POST['telnummer'];
	newUser($voornaam,$achternaam,$postcode,$mail,$telnummer);
	header("location:" . URL . "home/index");
}
function edit($voornaam, $achternaam,$id){
	$horses = getHorses();
	$planningId = getPlanningByID($id);
	$nameToUserId = checkUser($voornaam, $achternaam);
	$planning = getInfoById($idToUserId);
	$info = [$planningId,$planning,$horses];
	render("home/edit", ['info' => $info]);
}
function update($oldId){
	$begintjd = $_POST['begintijd'];
	$duur = $_POST['duur'];
	$datum = $_POST['datum'];
	$voornaam = $_POST['voornaam'];
	$achternaam = $_POST['achternaam'];
	$paard = $_POST['paard'];
	$check = checkUser($voornaam, $achternaam);

	if($check[0]['id'] != NULL){
		updatePlanning($begintjd,$duur,$datum,$voornaam,$achternaam,$paard,$oldId);
		header("location:" . URL . "home/index");
		}
	else{
		?><script>alert("naam onbekend, registreer je eerst")</script><?
		render('home/plan', ['NULL' => $check]);
	}
}
function delete($id){
	render('home/delete',['id'=>$id]);
}

function destroy($id){
	deletePlanning($id);
	header("Location:" . URL . "home/planning");
}