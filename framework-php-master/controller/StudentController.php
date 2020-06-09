<?php

require(ROOT . "model/StudentModel.php");

function index()
{
	$students = getAllStudents();
	render("student/index", ['students' => $students]);
}

function create(){
	render('student/create');
}
function store(){
	$name = $_POST["name"];
	$id = $_POST["id"];
	createStudent($name, $id);

	$students = getAllStudents();
	render("student/index",['students' => $students]);
}
function edit($id){
	$student = getAllStudentsWithId($id);
	render("student/edit", ['student' => $student]);
}
function update($oldId){
	$id = $_POST['id'];
	$name = $_POST['name'];
	updateStudent($name, $id, $oldId);
	header("location:" . URL . "student/index");
}
function delete($id){
	$student = getAllStudentsWithId($id);
	render("student/delete", ['student' => $student]);
}
function destroy($id){
	deleteStudent($id);
	header("location:" . URL . "student/index");
}