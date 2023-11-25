<?php
include 'models/etudiants.php';
function index() {
    $students = getStudents();
    include 'views/layout.php';
}



function adddStudent() {
    if (isset($_POST["inserer"])) {
        $lastName = $_POST["lastName"];
        $firstName = $_POST["firstName"];
        $birthDate = $_POST["birthDate"];
        $class = $_POST["class"];
        addStudent($lastName, $firstName, $birthDate, $class);

        header("Location:index.php");
        exit();
    }
}

function deletStudent() {
    if (isset($_GET['action']) && $_GET['action'] == 'delete' && isset($_GET['id'])) {
         $id=$_GET['id'];
        delStudent($id);

        header("Location:index.php");
        exit();
    }
}

adddStudent();
deletStudent();
?>

