<?php
require(ROOT . "model/HomeModel.php");
function index()
{
	render("home/index", ['user' => $user]);	
}
function planning(){
	$getplanning = getPlanning();
	render("home/planning", ['getplanning' => $getplanning]);
}
function plan(){
	render('home/plan');
}
function createplanning(){
	$begintjd = $_POST['begintijd'];
	$duur = $_POST['duur'];
	$datum = $_POST['datum'];
	$voornaam = $_POST['voornaam'];
	$achternaam = $_POST['achternaam'];
	$check = checkUser($voornaam, $achternaam);
	if($check[0]['id'] != NULL){
		planUser($begintjd,$duur,$datum,$voornaam,$achternaam);
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
