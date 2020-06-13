<?php

require(ROOT . "model/horseModel.php");

function index()
{
	$horses = getAllHorses();
	render("horse/index", ['horses' => $horses]);
}

function create(){
	render('horse/create');
}
function store(){
	$soort = $_POST['soort'];
	$info = $_POST['info'];
	$prijs = $_POST['prijs'];
	$afbeelding = $_POST['afbeelding'];
	createhorse($soort, $info, $prijs, $afbeelding);

	$horses = getAllhorses();
	render("horse/index",['horses' => $horses]);
}
function edit($id){
	$horse = getInfoById($id);
	render("horse/edit", ['horse' => $horse]);
}
function update($oldId){
	$soort = $_POST['soort'];
	$info = $_POST['info'];
	$prijs = $_POST['prijs'];
	$afbeelding = $_POST['afbeelding'];
	updatehorse($soort, $info, $prijs, $afbeelding, $oldId);
	header("location:" . URL . "horse/index");
}
function delete($id){
	$horse = getInfoById($id);
	render("horse/delete", ['horse' => $horse]);
}
function destroy($id){
	deletehorse($id);
	header("location:" . URL . "horse/index");
}